<?php

namespace App\Http\Controllers;

use App\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Module::all();
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
            'ch_id' => 'required',
        ]);

        $module = new Module([
            'm_name' => $request->get('m_name'),
            'ch_id' => $request->get('ch_id'),
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
    public function show($id)
    {
        $module = Module::find($id);
        return view('modules.show', compact('module'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $module = Module::find($id);
        return view('modules.edit', compact('module'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $module = Module::find($id);

        $request->validate([
            'm_name' => 'required|unique:modules',
            'ch_id' => 'required',
        ]);

        $module->m_name=$request->get('m_name');
        $module->ch_id=$request->get('ch_id');
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
    public function destroy($id)
    {
        $module = Module::find($id);
        $module->delete();

        return redirect()->back()->with('message','Module deleted!');
    }
}
