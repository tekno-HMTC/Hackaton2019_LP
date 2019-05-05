<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($sid, $cid, $chid, $mid)
    {
        $material = Material::find($mlid);
        return view('materials.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materials.create');
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
        
        $path = '';
        $uploadedImage = $request->file('image_path');
        if($uploadedImage != null) {
            $path = $uploadedImage->store('material-image/'.$request->get('module_id'),'public');
        } else {
            $path = null;
        }

        $type = '';
        if($request->get('video_path')) {
            $type = Material::TYPE_VIDEO;
        } elseif ($path) {
            $type = Material::TYPE_IMAGE;
        } else {
            $type = Material::TYPE_HTML;
        }

        $material = new Material([
            'name' => $request->get('name'),
            'module_id' => $request->get('module_id'),
            'video_path' => $request->get('video_path'),
            'image_path' => $path,
            'html' => $request->get('html'),
            'active' => TRUE,
            'type' => $type,
        ]);
        $material->save();

        $module = Module::find($request->get('module_id'));

        return redirect()->route('specializations.courses.chapters.modules.show', [$material->module->chapter->course->specialization->id, $material->module->chapter->course->id, $material->module->chapter->id, $material->module->id, $material->id])->with('module',$module);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function show($sid, $cid, $chid, $mid, $mlid)
    {
        $activeMaterial = Material::find($mlid);
        return view('materials.show')->with('activeMaterial',$activeMaterial);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit($mlid)
    {
        $material = Material::find($mlid);
        return view('materials.show', compact('material'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $mlid)
    {
        $material = Material::find(mlid);

        $request->validate([
            'name' => 'required',
        ]);
        
        $path = '';
        $uploadedImage = $request->file('image_path');
        if($uploadedImage != null) {
            $path = $uploadedImage->store('material-image/'.$request->get('module_id'),'public');
        } else {
            $path = null;
        }

        $type = '';
        if($request->get('video_path')) {
            $type = Material::TYPE_VIDEO;
        } elseif ($path) {
            $type = Material::TYPE_IMAGE;
        } else {
            $type = Material::TYPE_HTML;
        }

        $material->name = $request->get('name');
        $material->video_path = $request->get('video_path');
        $material->image_path = $path;
        $material->html = $request->get('html');
        $material->active = FALSE;
        $material->type = $type;
        $material->save();

        return redirect()->route('materials.update')->with('message', 'Materi telah dibuat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy($mlid)
    {
        $material = Material::find($mlid);
        $material->delete();

        return redirect()->back()->with('message', 'Materi dihapus!');
    }
}
