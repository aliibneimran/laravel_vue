<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return Inertia::render('Students/Index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Students/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);
        Student::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email
        ]);
        sleep(1);

        return redirect()->route('students.index')->with('message', 'Students Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return Inertia::render('Students/Edit',['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);


        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->save();
        sleep(1);

        return redirect()->route('students.index')->with('message', 'Student Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        sleep(1);

        return redirect()->route('students.index')->with('message', 'Student Delete Successfully');
    }
}
