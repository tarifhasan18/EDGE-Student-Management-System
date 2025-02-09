<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentSubject;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $students = Student::count();
        $teachers = Teacher::count();
        $subjects = Subject::count();
        $registrations = StudentSubject::count();
        return view('index',compact('students','teachers','subjects','registrations'));
    }
}
