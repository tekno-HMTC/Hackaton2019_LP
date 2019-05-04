<?php

namespace App\Http\Controllers;

use App\Specialization;
use Illuminate\Http\Request;

class SpecializationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rmk = Specialization::all();
        return view('specializations.index', compact('rmk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('specializations.create');
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
            'name' => 'required',
        ]);

        $rmk = new Specialization([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
        ]);
        $rmk->save();

        return redirect()->route('specializations.store')->with('message', 'RMK '.$request->get('name').' dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Specialization  $specialization
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rmk = Specialization::find($id);
        return view('specializations.show', compact('rmk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Specialization  $specialization
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $rmk = Specialization::find($id);
        return view('specialization.edit', compact('rmk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Specialization  $specialization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $specialization = Specialization::find($id);

        $request->validate([
            'name' => 'required',
        ]);

        $rmk->name = $request->get('name');
        $rmk->description = $request->get('description');
        $rmk->save();

        return redirect()->route('specializations.update')->with('message', 'RMK '.$request->get('name').' diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Specialization  $specialization
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rmk = Specialization::find($id);
        $rmk->delete();

        return redirect()->back()->with('message', 'RMK dihapus!');
    }
}
