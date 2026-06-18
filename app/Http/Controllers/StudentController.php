<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all(); //data relational object
        return view('backend.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    $request->validate([
        'name'=>'required|min:4|max:25',
        'gender' => 'required',
        'email' => 'email|required|unique:students,email',
        'phone' => 'min:11'

    ]);
        // dd($request);
        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->gender = $request->gender;
        $student->phone = $request->phone;
        $student->district = $request->district;
        // subject k array theke string e pathanor jonno implode use korte hobe
        
        $subjects = $request->subjects;
        $subjects= implode(",", $subjects);
         $student->subject =$subjects;
        // dd($subjects);


        $student->save();
        return redirect('students')->with('success', 'Sucessfully Student Created');
        
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
