<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $student = Student::orderBy('id')->get();

        return view('student.index',['students' => $student]);
    }
}
