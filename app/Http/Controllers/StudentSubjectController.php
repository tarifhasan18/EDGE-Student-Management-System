<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use App\Models\StudentSubject;
use App\Models\Student;
use Carbon\Carbon; // Import Carbon

use Illuminate\Http\Request;

class StudentSubjectController extends Controller
{
    public function get_student_subject()
    {
        $subjects = Subject::all();
        $students = Student::all();
        $students_subjects = StudentSubject::paginate(3);
        return view('student_subject')->with('subjects',$subjects)->with('students',$students)->with('students_subjects',$students_subjects);
    }
    public function post_student_subject(Request $request)
    {
        $student_subject = new StudentSubject();
        $student_subject->student_id = $request->student_id;
        $student_subject->subject_id = $request->subject_id;
        // $student_subject->academic_session = $request->academic_session;
        $student_subject->created_at = Carbon::now('Asia/Dhaka'); // Change to your timezone
        $student_subject->updated_at = Carbon::now('Asia/Dhaka');
        $student_subject->save();

        return redirect()->back();
    }
}
