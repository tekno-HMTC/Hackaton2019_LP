<?php

namespace App\Http\Controllers;

use Auth;
use Storage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'full_name' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user = new User([
            'username' => $request->get('username'),
            'full_name' => $request->get('full_name'),
            'password' => Hash::make($request->get('password')),
            'role' => User::ROLE_USER,
        ]);
        $user->save();

        return redirect()->route('users.store')->with('message', 'User '.$request->get('username').' created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find(Auth::user()->id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $path = '';
        $uploadedProfilePicture = $request->file('file');
        if ($uploadedProfilePicture != null) {
            $path = $uploadedProfilePicture->store('profile-picture-user/'.$user->id, 'public');
        } else {
            $path = null;
        }

        $user->username = $request->get('username');
        $user->full_name = $request->get('full_name');
        $user->profile_picture_path = $path;
        $user->id_line = $request->get('id_line');
        $user->uuid = $request->get('uuid');

        if ($request->get('old_password')!= null &&
            Hash::check($request->get('old_password'), $user->password) &&
            $request->get('password') == $request->get('password_confirmation')
        ){
            $user->password = Hash::make($request->get('password'));
        }
        $user->save();

        return redirect()->route('users.show',$user->id)->with('message', 'User '.$request->get('username').' updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->back()->with('message','User deleted!');
    }
}
