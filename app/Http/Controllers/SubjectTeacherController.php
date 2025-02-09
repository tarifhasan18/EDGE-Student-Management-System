<?php

namespace App\Http\Controllers;
use Carbon\Carbon; // Import Carbon

use App\Models\Subject;
use App\Models\SubjectTeacher;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SubjectTeacherController extends Controller
{
    public function get_teacher_subject()
    {
        $teachers = Teacher::all();
        $subjects = Subject::all();
        $teacher_subjects = SubjectTeacher::paginate(3);
        return view('teacher_subjects')->with('teachers',$teachers)
                                        ->with('subjects',$subjects)
                                        ->with('teacher_subjects',$teacher_subjects);
    }
    public function post_teacher_subject(Request $request)
    {
        $teacher_subjects = new SubjectTeacher();
        $teacher_subjects->subject_id = $request->subject_id;
        $teacher_subjects->teacher_id = $request->teacher_id;
        $teacher_subjects->created_at = Carbon::now('Asia/Dhaka'); // Change to your timezone
        $teacher_subjects->updated_at = Carbon::now('Asia/Dhaka');
        $teacher_subjects->save();

        return redirect()->back();
    }
}
