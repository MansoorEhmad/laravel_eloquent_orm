<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class studentController extends Controller
{
    // Show all students
    public function index()
    {
        // get all
        // $students = Student::all();

        // pagination
        $students = Student::simplePaginate(3);

        // get some 
        //$students = Student::select('email')->get();

        // where
        //$students = Student::where('name', 'khalid mansoor')->where('email', 'email@gmail.com')->get();
        //$students = Student::where('name', 'khalid mansoor')->orWhere('email', 'email@gmail.com')->get();

        // get sql query
        //$students = Student::query()->toSql();
        // $students = Student::where('name', 'khalid mansoor')->orWhere('email', 'email@gmail.com')->toRawSql();

        return view('students.index', compact('students'));
    }

    // Show a single student
    public function show(Student $student)
    {
        $student = Student::find($student->id);
        return view('students.student', compact('student'));
    }

    // Show form to create a new student
    public function create()
    {
        return view('students.form');
    }


    // Store new student
    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:students,email',
        ]);

        Student::create([
            'name' => $req->name,
            'email' => $req->email
        ]);

        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    }

    // Show form to edit an existing student
    public function edit(Student $student){
        $student = Student::find($student->id);

        return view('students.update', compact('student'));
    }

    // Update an existing student
    public function update(Request $req, Student $student){
        $req->validate([
            'name' => 'required|min:3|max:50',
            'email' => [
                'required',
                'email',
                Rule::unique('students', 'email')->ignore($student->id),
            ],
        ]);

        Student::find($student->id)->update([
            'name' => $req->name,
            'email' => $req->email,
        ]);

        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }

    // Delete a student
    public function destroy(Student $student){
        Student::destroy($student->id);
        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    }
}
