@extends('master')

@section('Title','EDGE-Subjects')

@section('content')
<div class="form-container">
    <form action="{{route('subjects_post')}}" method="POST">
        @csrf
        <label for="">Title</label>
        <input type="text" name="title" placeholder="Subject Title" required><br><br>

        <label for="">Credit</label>
        <input type="text" name="credit" placeholder="Enter Credit" required><br><br>

        <label for="">Select Department</label>
        <select name="department_id" id="">
            <option value="">Select a Department</option>
        @foreach($departments as $department)
            <option value="{{$department->id}}">{{$department->title}}</option>
        @endforeach
        </select><br><br>

        <label for="">Select Session</label>
        <select name="session_id" id="">
            <option value="">Select a Session</option>
        @foreach($academic_sessions as $session)
            <option value="{{$session->id}}">{{$session->session}}</option>
        @endforeach
        </select><br><br>

        <input type="submit" value="Save">
    </form>
</div>
    <br>
    <a style="float: right; background-color: rgb(126, 3, 207); color:white; text-decoration:none; padding:5px" href="{{url('/subject_pdf')}}">     <i class="fa fa-print"></i> Print
    </a>
    @if ($subjects->isEmpty())
        <p>No data available</p>
    @else
    <table class="styled-table">
        <thead>
            <tr>
                <th>SL</th>
                <th>Title</th>
                <th>Credit</th>
                <th>Department</th>
                <th>Session</th>
                <th>Added At</th>
            </tr>
        </thead>
        <tbody>
            @php
                $serial = ($subjects->currentPage() - 1) *$subjects->perPage();
            @endphp
        @foreach($subjects as $key=>$subject)
            <tr>
                <td>{{$serial+ $key + 1}}</td>
                <td>{{$subject->title}}</td>
                <td>{{$subject->credit}}</td>
                <td>{{$subject->department->title}}</td>
                <td>{{$subject->sessions->session}}</td>
                <td>{{$subject->created_at}}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
    {{ $subjects->links('vendor.pagination.custom') }}

    @endif
@endsection
