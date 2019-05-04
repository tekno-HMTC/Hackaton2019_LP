<?php

namespace App\Http\Controllers;

use App\Models\Specialization;
use App\Models\Course;
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
        $mk = [
            '1' => Course::where('specialization_id',1)->get(),
            '2' => Course::where('specialization_id',2)->get(),
            '3' => Course::where('specialization_id',3)->get(),
            '4' => Course::where('specialization_id',4)->get(),
            '5' => Course::where('specialization_id',5)->get(),
            '6' => Course::where('specialization_id',6)->get(),
            '7' => Course::where('specialization_id',7)->get(),
            '8' => Course::where('specialization_id',8)->get(),
        ];
        return view('specializations.index', compact('rmk', 'mk'));
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

    public function getSpecAPI(){
        $data = Specialization::all();
        if(count($data)==0){
            return response()->json(['status'=> 'error'],404);
        }
        return response()->json($data,200);
    }

    public function getSpecAPIS($id){
        $data = Course::where('specialization_id',$id)->get();
        return response()->json($data,200);
    }

}
