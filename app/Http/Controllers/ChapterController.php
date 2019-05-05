<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Chapter;
use App\Models\Module;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($sid, $cid)
    {
        $matkul = Course::find($cid);
        $chapter = Chapter::where('course_id', $cid)->get();
        return view('chapters.index', compact('chapter','matkul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $chapter = new Chapter([
            'name' => $request->get('name'),
            'course_id' => $request->get('course_id'),
            'description' => $request->get('description'),
        ]);
        $chapter->save();

        return redirect()->route('specializations.courses.chapters.index', [$chapter->course->specialization->id, $chapter->course->id])->with('message', 'Mata Kuliah '.$request->get('name').' dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function show(Chapter $chapter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function edit(Chapter $chapter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chapter $chapter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function destroy($sid, $cid, $chid)
    {
        $ch = Chapter::find($chid);
        $ch->delete();

        return redirect()->back()->with('message', 'Chapter dihapus!');
    }

    public function getApiCall($id){
        $data = Module::where('chapter_id',$id)->get();
        return response()->json($data,200);
    }
}
