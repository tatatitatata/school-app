<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students', compact('students'));
    }
    public function create()
    {
        return view('create');
}
    
    
public function addStudent(Request $request)
{
    $newStudent = $request->validate([
        'surname' => 'required',
        'name' => 'required',
        'birthdate' => 'required',
        'adress' => 'required',
        'classroom_id' => 'required',
    ]);

Student::create($newStudent);
return redirect()->route('students.index');
}

public function studentsByClass($class)
{
    $students = Student::where('classroom_id', $class)->get();
    return view('studentsByClass', compact('students', 'class'));
}

}