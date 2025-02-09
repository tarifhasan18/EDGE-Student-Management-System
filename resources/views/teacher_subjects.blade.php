@extends('master')

@section('Title','EDGE-Teacher Subjects')

@section('content')
<div class="form-container">
    <form action="{{route('post_teacher_subject')}}" method="post">
        @csrf
        <label for="">Select a Teacher</label>
        <select name="teacher_id" id="" required>
            <option value="">Select a Teacher</option>
            @foreach($teachers as $teacher)
                <option value="{{$teacher->id}}">{{$teacher->name}}</option>
            @endforeach
        </select><br><br>
        <!-- <input type="text" name="student_id" placeholder="Enter Roll"><br><br> -->
        <label for="">Select a Subject</label>
        <select name="subject_id" id="" required>
            <option value="">Select a Subject</option>
            @foreach($subjects as $subject)
                <option value="{{$subject->id}}">{{$subject->title}}</option>
            @endforeach
        </select><br><br>
        {{-- <label for="">Academic Session</label>
        <input type="text" name="academic_session" placeholder="Enter Academic Session" required><br><br> --}}
        <input type="submit" value="Save">
    </form>
</div>
    <br>
    <a style="float: right; background-color: rgb(126, 3, 207); color:white; text-decoration:none; padding:5px" href="{{url('/teacher_subject_pdf')}}">     <i class="fa fa-print"></i> Print
    </a>
    @if ($teacher_subjects->isEmpty())
        <p>No data available</p>
    @else
    <table class="styled-table">
        <thead>
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Subject</th>
            <th>Academic Session</th>
            <th>Added At</th>
        </tr>
    </thead>
    <tbody>
        @php
        $serial = ($teacher_subjects->currentPage() - 1) *$teacher_subjects->perPage();
    @endphp
        @foreach($teacher_subjects as $key=>$teacher_subject)
            <tr>
                <td>{{$serial+ $key + 1}}</td>
                <td>{{$teacher_subject->teacher->name}}</td>
                <td>{{$teacher_subject->subject->title}}</td>
                <td>{{$teacher_subject->subject->sessions->session}}</td>
                <td>{{$teacher_subject->created_at}}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
    {{ $teacher_subjects->links('vendor.pagination.custom') }}

    @endif
@endsection

