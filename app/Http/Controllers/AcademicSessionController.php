<?php

namespace App\Http\Controllers;
use App\Models\AcademicSession;
use Carbon\Carbon; // Import Carbon

use Illuminate\Http\Request;

class AcademicSessionController extends Controller
{
    public function get_session()
    {
        $academic_sessions = AcademicSession::paginate(3);
        return view('academic_session')->with('academic_sessions',$academic_sessions);
    }
    public function post_session(Request $request)
    {
        $academic_sessions = new AcademicSession();
        $academic_sessions->session = $request->session;
        $academic_sessions->created_at = Carbon::now('Asia/Dhaka'); // Change to your timezone
        $academic_sessions->updated_at = Carbon::now('Asia/Dhaka');
        $academic_sessions->save();

        return redirect()->back();
    }
}
