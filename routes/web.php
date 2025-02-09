<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\StudentSubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AcademicSessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\SubjectTeacherController;



Route::get('/',[HomeController::class,'index']);


Route::get('/department',[DepartmentController::class,'get_department']);
Route::post('/department_post',[DepartmentController::class,'post_department'])->name('department_post');
Route::get('/students',[StudentController::class,'get_student']);
Route::post('/students_post',[StudentController::class,'post_student'])->name('students_post');

Route::get('/subjects',[SubjectController::class,'get_subjects']);
Route::post('/subjects_post',[SubjectController::class,'post_subjects'])->name('subjects_post');

Route::get('/student_subject',[StudentSubjectController::class,'get_student_subject']);
Route::post('/student_subject_post',[StudentSubjectController::class,'post_student_subject'])->name('post_student_subject');

Route::get('/teachers',[TeacherController::class,'get_teachers']);
Route::post('/teachers_post',[TeacherController::class,'post_teachers'])->name('teachers_post');

Route::get('/academic_session',[AcademicSessionController::class,'get_session']);
Route::post('/academic_session_post',[AcademicSessionController::class,'post_session'])->name('session_post');

Route::get('/teacher_subjects',[SubjectTeacherController::class,'get_teacher_subject']);
Route::post('/teacher_subjects_post',[SubjectTeacherController::class,'post_teacher_subject'])->name('post_teacher_subject');

//Generate PDF Report
Route::get('/department_pdf',[PDFController::class,'dept_pdf']);
Route::get('/student_list_pdf',[PDFController::class,'student_list_pdf']);
Route::get('/subject_pdf',[PDFController::class,'subject_pdf']);
Route::get('/student_subject_pdf',[PDFController::class,'student_subject_pdf']);
Route::get('/teachers_pdf',[PDFController::class,'teachers_pdf']);
Route::get('/teacher_subject_pdf',[PDFController::class,'teacher_subject_pdf']);
Route::get('/sessions_pdf',[PDFController::class,'sessions_pdf']);

