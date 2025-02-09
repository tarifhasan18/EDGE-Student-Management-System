@extends('master')

@section('Title','EDGE-Teacher')

@section('content')
<div class="form-container">
<form action="{{route('teachers_post')}}" method="POST">
    @csrf
    <label for="">Name</label>
    <input type="text" name="name" placeholder="Teacher Name" required><br><br>

    <label for="">Phone</label>
    <input type="text" name="phone" placeholder="Phone Number" required><br><br>

    <label for="">Address</label>
    <input type="text" name="address" placeholder="Teacher Address" required><br><br>
    <label for="">Select Department</label>
    <select name="department_id" id="">
        <option value="">Select a Department</option>
    @foreach($departments as $department)
        <option value="{{$department->id}}">{{$department->title}}</option>
    @endforeach

    </select><br><br>
    <input type="submit" value="Save">
</form>
</div><br>
<a style="float: right; background-color: rgb(126, 3, 207); color:white; text-decoration:none; padding:5px" href="{{url('/teachers_pdf')}}">     <i class="fa fa-print"></i> Print
</a>
@if($teachers->isEmpty())
    <p>No teachers available.</p>
@else
    <table class="styled-table">
        <thead>
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Department</th>
            <th>Added At</th>
        </tr>
        </thead>
        <tbody>
            @php
                $serial = ($teachers->currentPage() - 1) *$teachers->perPage();
            @endphp
        @foreach($teachers as $key=>$teacher)
            <tr>
                <td>{{$serial+ $key + 1}}</td>
                <td>{{$teacher->name}}</td>
                <td>{{$teacher->phone}}</td>
                <td>{{$teacher->address}}</td>
                <td>{{$teacher->department->title}}</td>
                <td>{{$teacher->created_at}}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
    {{ $teachers->links('vendor.pagination.custom') }}

@endif


@endsection
