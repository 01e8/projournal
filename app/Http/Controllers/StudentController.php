<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use DB;

class StudentController extends Controller
{
    public function ShowStudentsList()
    {
      $students = Student::all();
      return view('students',['students'=> $students]);
    }
}
