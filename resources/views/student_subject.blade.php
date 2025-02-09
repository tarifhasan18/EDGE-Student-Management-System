@extends('master')

@section('Title','EDGE-Student Registrations')

@section('content')
<div class="form-container">
    <form action="{{route('post_student_subject')}}" method="post">
        @csrf
        <label for="">Roll</label>
        <select name="student_id" id="">
            <option value="">Select a Student</option>
            @foreach($students as $students)
                <option value="{{$students->id}}">{{$students->roll}}</option>
            @endforeach
        </select><br><br>

        <label for="">Select Subject</label>
        <select name="subject_id" id="">
            <option value="">Select a Subject</option>
            @foreach($subjects as $subject)
                <option value="{{$subject->id}}">{{$subject->title}}</option>
            @endforeach
        </select><br><br>

        <input type="submit" value="Save">
    </form>
</div><br>
<a style="float: right; background-color: rgb(126, 3, 207); color:white; text-decoration:none; padding:5px" href="{{url('/student_subject_pdf')}}">     <i class="fa fa-print"></i> Print
</a>
    @if ($students_subjects->isEmpty())
        <p>No data available</p>
    @else
    <table class="styled-table">
        <thead>
            <tr>
                <th>SL</th>
                <th>Roll</th>
                <th>Subject</th>
                <th>Academic Session</th>
                <th>Added At</th>
            </tr>
        </thead>
        <tbody>
            @php
            $serial = ($students_subjects->currentPage() - 1) *$students_subjects->perPage();
        @endphp
            @foreach($students_subjects as $key=> $students_subject)
                <tr>
                    <td>{{$serial+ $key + 1}}</td>
                    <td>{{$students_subject->student->roll}}</td>
                    <td>{{$students_subject->subject->title}}</td>
                    <td>{{$students_subject->subject->sessions->session}}</td>
                    <td>{{$students_subject->created_at}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $students_subjects->links('vendor.pagination.custom') }}

    @endif
@endsection

