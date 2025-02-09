<?php

namespace App\Http\Controllers;

use App\Models\AcademicSession;
use App\Models\Department;
use App\Models\Student;
use App\Models\StudentSubject;
use App\Models\Subject;
use App\Models\SubjectTeacher;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Mpdf\Mpdf;

class PDFController extends Controller
{
    public function dept_pdf()
    {
        $depts = Department::all();
        $css = file_get_contents(public_path('pdf_style.css'));

        $pdf = Pdf::loadView('pdf/department_list', ['depts' => $depts,'css'=>$css]);
        return $pdf->stream('Departments.pdf');
    }
    public function student_list_pdf()
    {
        $students = Student::all();
        $css = file_get_contents(public_path('pdf_style.css'));
        $pdf = Pdf::loadView('pdf/student_list',['students'=>$students,'css'=>$css]);
        return $pdf->stream('StudentsList.pdf');
    }
    public function student_subject_pdf()
    {
        $student_subjects = StudentSubject::all();
        $css = file_get_contents(public_path('pdf_style.css'));
        $pdf = Pdf::loadView('pdf/student_subject',['student_subjects'=>$student_subjects,'css'=>$css]);
        return $pdf->stream('StudentSubject.pdf');
    }
    public function subject_pdf()
    {
        $subjects = Subject::all();
        $css = file_get_contents(public_path('pdf_style.css'));
        $pdf = Pdf::loadView('pdf/subject_list',['subjects'=>$subjects,'css'=>$css]);
        return $pdf->stream('SubjectList.pdf');
    }
    public function teachers_pdf()
    {
        $teachers = Teacher::all();
        $css = file_get_contents(public_path('pdf_style.css'));
        $pdf = Pdf::loadView('pdf/teacher_list',['teachers'=>$teachers,'css'=>$css]);
        return $pdf->stream('TeacherList.pdf');
    }
    public function teacher_subject_pdf()
    {
        $teacher_subjects = SubjectTeacher::all();
        $css = file_get_contents(public_path('pdf_style.css'));
        $pdf = Pdf::loadView('pdf/teacher_subject',['teacher_subjects'=>$teacher_subjects,'css'=>$css]);
        return $pdf->stream('TeacherSubjectList.pdf');
    }
    public function sessions_pdf()
    {
        $sessions = AcademicSession::all();
        $css = file_get_contents(public_path('pdf_style.css'));
        $pdf = Pdf::loadView('pdf/session_list',['sessions'=>$sessions,'css'=>$css]);
        return $pdf->stream('SessionList.pdf');
    }

}
