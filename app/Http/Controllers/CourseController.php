<?php

namespace App\Http\Controllers;

use App\Course;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $courses = Course::OrderBy('id','Desc')->paginate(15);
        return view('Admin.Course.Index' , compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Course.New');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $slugs = SlugService::createSlug(Course::class, 'slug', $request->get('slug'));


        $corse = new Course();

        $corse->name = $request->get('name');
        $corse->desc = $request->get('desc');
        $corse->slug = $slugs;
        $corse->image = 0;
        $corse->type = $request->get('type');
        $corse->price = $request->get('price');

        $corse->save();

        return redirect('/admin/course');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
        return view('Admin.Course.Edit', compact('course'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //

        $course->name = $request->get('name');
        $course->desc = $request->get('desc');
        $course->type = $request->get('type');
        $course->price = $request->get('price');
        $course->status = $request->get('status');

        $course->save();

        return redirect('/admin/course');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
        $course->delete();

        return redirect('/admin/course');
    }

    public function episods(Course $course)
    {
        return view('Admin.Episode.Index' , compact('course'));
    }
}
