<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $teacher = new Teacher();
        $teacher -> name = $request -> name;
        $teacher -> age = $request -> age;
        $teacher -> save();
        return redirect('/fill-form');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacherEdit = Teacher::find($id);
        return view('edit', compact('teacherEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $teacherUpdate = Teacher::find($id);
        $teacherUpdate -> name = $request -> name;
        $teacherUpdate -> age = $request -> age;
        $teacherUpdate -> update();
        return redirect('/fill-form');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacherDelete = Teacher::find($id);
        $teacherDelete -> delete();
        return redirect('/fill-form');
    }
}
