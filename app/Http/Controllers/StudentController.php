<?php

namespace App\Http\Controllers;
use Carbon\Carbon; // Import Carbon
use App\Models\Department;
use App\Models\Student;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function get_student()
    {

        // $data = [
        //     'title' => 'Welcome to Techsolutionstuff',
        //  ];

        // $pdf = PDF::loadView('pdf', $data);
        // return $pdf->download('test.pdf');


        $department = Department::all();
        $students = Student::paginate(2);

        return view('student')->with('department', $department)->with('students', $students);;
    }
    public function post_student(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->address = $request->address;
        $student->roll = $request->roll;
        $student->mobile = $request->mobile;
        $student->blood_group = $request->blood_group;
        $student->dept_id = $request->department_id;
        $student->created_at = Carbon::now('Asia/Dhaka'); // Change to your timezone
        $student->updated_at = Carbon::now('Asia/Dhaka');
        $student->save();

        return redirect()->back();
    }
}
