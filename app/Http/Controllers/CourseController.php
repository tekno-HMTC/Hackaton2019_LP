<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($specializationId)
    {
        $mk = Course::where('specialization_id',$specializationId)->get();
        return view('couses.index', compact('mk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('couses.create');
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

        $mk = new Course([
            'name' => $request->get('name'),
            'specialization_id' => $request->get('specialization_id'),
            'description' => $request->get('description'),
        ]);
        $mk->save();

        return redirect()->route('courses.store')->with('message', 'Mata Kuliah '.$request->get('name').' dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mk = Course::find($id);
        return view('courses.show', compact('mk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mk = Course::find($id);
        return view('courses.show', compact('mk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mk = Course::find($id);

        $request->validate([
            'name' => 'required',
        ]);

        $mk->name = $request->get('name');
        $mk->description = $request->get('description');
        $mk->save();

        return redirect()->route('courses.update')->with('message', 'Mata Kuliah '.$request->get('name').' diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $mk = Course::find($id);
        $mk->delete();

        return redirect()->back()->with('message', 'Mata Kuliah dihapus!');
    }
}
