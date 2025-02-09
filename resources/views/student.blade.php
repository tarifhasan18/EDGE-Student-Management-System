@extends('master')

@section('Title','EDGE-Student')


@section('content')

<div class="form-container">
    <form action="{{route('students_post')}}" method="post">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name" placeholder="Enter name" required><br><br>
        <label for="">Address</label>
        <input type="text" name="address" placeholder="Enter address" required><br><br>
        <label for="">Roll</label>
        <input type="text" name="roll" placeholder="Enter roll" required><br><br>
        <label for="">Mobile</label>
        <input type="text" name="mobile" placeholder="Enter mobile" required><br><br>
        <label for="">Blood Group</label>
        <input type="text" name="blood_group" placeholder="Enter blood grouo" required><br><br>
        <label for="">Select a Department</label>
        <select name="department_id" id="" required>
            <option value="">Select a Department</option>
            @foreach($department as $department)
                <option value="{{$department->id}}">{{$department->title}}</option>
            @endforeach
        </select><br><br>
        <input type="submit" value="Insert">
    </form>
</div>
<br>
<a style="float: right; background-color: rgb(126, 3, 207); color:white; text-decoration:none; padding:5px" href="{{url('/student_list_pdf')}}">     <i class="fa fa-print"></i> Print
</a>
@if ($students->isEmpty())
    <p>No data available</p>
@else
<table class="styled-table">
    <thead>
    <tr>
        <th>SL</th>
        <th>Name</th>
        <th>Address</th>
        <th>Roll</th>
        <th>Mobile</th>
        <th>Blood Group</th>
        <th>Department</th>
        <th>Added at</th>
    </tr>
</thead>
<tbody>
    @php
        $serial = ($students->currentPage() - 1) *$students->perPage();
    @endphp
    @foreach($students as $key=> $student)
        <tr>
            {{-- <td>{{$loop->iteration}}</td> --}}
            <td>{{$serial+ $key + 1}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->roll}}</td>
            <td>{{$student->mobile}}</td>
            <td>{{$student->blood_group}}</td>
            <td>{{$student->department->title}}</td>
            <td>{{$student->created_at}}</td>
        </tr>
    @endforeach
</tbody>
</table>
{{ $students->links('vendor.pagination.custom') }}

@endif

@endsection

