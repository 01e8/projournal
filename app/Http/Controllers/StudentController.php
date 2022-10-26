<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use DB;

class StudentController extends Controller
{
    public function index()
    {
      $students = Student::all();
      return view('students.index',['students'=> $students]);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'patronymic' => 'required',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')
            ->with('success','Ученик добавлен');
    }

    public function show(Student $student)
    {
        return view('students.show',compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'patronymic' => 'required',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')
            ->with('success','Данные ученика успешно изменены');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
            ->with('success','Ученик удалён');
    }
}
