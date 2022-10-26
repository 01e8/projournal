<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Group;

class StudentController extends Controller
{
    public function index()
    {
      $students = Student::all();

      $studentsArrayReady = [];

      $headerNames = ['ID', 'Имя', 'Фамилия', 'Отчество', 'Группа', 'Телефон'];

      foreach ($students as $row => $student):
        $studentsArrayReady[$row]['id'] = $student->id;
        $studentsArrayReady[$row][0] = $student->first_name;
        $studentsArrayReady[$row][1] = $student->last_name;
        $studentsArrayReady[$row][2] = $student->patronymic;
        $studentsArrayReady[$row][3] = $student->group->name;
        $studentsArrayReady[$row][4] = $student->phone;
      endforeach;

      return view('students.index',[ 'headerNames' => $headerNames, 'students' => $studentsArrayReady ]);
    }

    public function create()
    {
        $groups = Group::all();
        return view('students.create', [ 'groups' => $groups ]);
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
        $groups = Group::all();
        return view('students.edit', [ 'student' => $student, 'groups' => $groups ]);
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
