<?php

namespace App\Http\Controllers;
use App\Models\Department;
use Carbon\Carbon; // Import Carbon


use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function get_department()
    {
        $departments = Department::paginate(3);
        return view('department')->with('departments', $departments);
    }
    public function post_department(Request $request)
    {
        $department = new Department();
        $department->title = $request->title;
            // Set the created_at and updated_at fields with real-time timezone
        $department->created_at = Carbon::now('Asia/Dhaka'); // Change to your timezone
        $department->updated_at = Carbon::now('Asia/Dhaka');
        $department->save();

        return redirect()->back();
    }
}
