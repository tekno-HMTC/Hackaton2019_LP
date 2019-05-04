<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($chid)
    {
        $modules = Module::where('chapter_id',$chid)->get();
        return view('modules.index', compact('modules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.create');
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
            'm_name' => 'required|unique:modules',
            'chapter_id' => 'required',
        ]);

        $module = new Module([
            'm_name' => $request->get('m_name'),
            'chapter_id' => $request->get('chapter_id'),
            'description' => $request->get('descrption'),
        ]);
        $module->save();

        return redirect()->route('modules.store')->with('message', 'Module '.$request->get('m_name').' created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show($mid)
    {
        $module = Module::find($mid);
        return view('modules.show', compact('module'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit($mid)
    {
        $module = Module::find($mid);
        return view('modules.edit', compact('module'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $mid)
    {
        $module = Module::find($mid);

        $request->validate([
            'm_name' => 'required|unique:modules',
            'chapter_id' => 'required',
        ]);

        $module->m_name=$request->get('m_name');
        $module->chapter_id=$request->get('chapter_id');
        $module->description=$request->get('description');
        $module->save();

        return redirect()->route('modules.update')->with('message', 'Module '.$request->get('m_name').' updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy($mid)
    {
        $module = Module::find($mid);
        $module->delete();

        return redirect()->back()->with('message','Module deleted!');
    }

    public function getAPICall($id){
        $data = Module::find($id);
        if(count($data)==0){
            return response()->json(['status'=> 'error'],404);
        }
        return response()->json($data,200);
    }
}
