<?php

namespace App\Http\Controllers;
use App\Models\Department;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Carbon\Carbon; // Import Carbon

class TeacherController extends Controller
{
    public function get_teachers()
    {
        $departments = Department::all();
        $teachers = Teacher::paginate(3);

        return view('teachers')->with('departments',$departments)->with('teachers',$teachers);
    }
    public function post_teachers(Request $request)
    {
        $teachers = new Teacher();
        $teachers->name = $request->name;
        $teachers->phone = $request->phone;
        $teachers->address = $request->address;
        $teachers->dept_id = $request->department_id;
        $teachers->created_at = Carbon::now('Asia/Dhaka'); // Change to your timezone
        $teachers->updated_at = Carbon::now('Asia/Dhaka');
        $teachers->save();

        return redirect()->back();
    }
}
