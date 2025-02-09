@extends('master')

@section('Title','EDGE-Home')

@section('content')
    <h1>Admin Dashboard</h1>
    <div class="dashboard">
        <div class="box">
            <h2>Students</h2>
            <p>{{$students}}</p>
        </div>
        <div class="box">
            <h2>Teachers</h2>
            <p>{{$teachers}}</p>
        </div>
        <div class="box">
            <h2>Subjects</h2>
            <p>{{$subjects}}</p>
        </div>
    </div>
@endsection
