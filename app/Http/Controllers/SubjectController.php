<?php

namespace App\Http\Controllers;
use Carbon\Carbon; // Import Carbon

use App\Models\AcademicSession;
use App\Models\Department;
use App\Models\Subject;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function get_subjects()
    {
        $subjects = Subject::paginate(3);
        $departments = Department::all();
        $academic_sessions = AcademicSession::all();

        return view('subject')->with('subjects',$subjects)->with('departments',$departments)->with('academic_sessions',$academic_sessions);
    }
    public function post_subjects(Request $request)
    {
        $subjects = new Subject();
        $subjects->title = $request->title;
        $subjects->credit = $request->credit;
        $subjects->dept_id = $request->department_id;
        $subjects->session_id = $request->session_id;
        $subjects->created_at = Carbon::now('Asia/Dhaka'); // Change to your timezone
        $subjects->updated_at = Carbon::now('Asia/Dhaka');
        $subjects->save();

        return redirect()->back();
    }
}
