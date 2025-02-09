@extends('master')

@section('Title','EDGE-Department')

@section('content')
<div class="form-container">
    <form action="{{route('department_post')}}" method="post">
        @csrf
        <label for="">Title</label>
        <input type="text" name="title" placeholder="Enter a department" required><br><br>
        <input type="submit" value="Save">
    </form>
</div>
    <br>
    <a style="float: right; background-color: rgb(126, 3, 207); color:white; text-decoration:none; padding:5px" href="{{url('/department_pdf')}}">     <i class="fa fa-print"></i> Print
    </a>

    @if ($departments->isEmpty())
        <p>No data available</p>
    @else
        <table class="styled-table">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Title</th>
                    <th>Added at</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $serial = ($departments->currentPage() - 1) *$departments->perPage();
                @endphp
            @foreach($departments as $key=> $department)
                <tr>
                    <td>{{$serial+ $key + 1}}</td>
                    <td>{{$department->title}}</td>
                    <td>{{$department->created_at}}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
        {{ $departments->links('vendor.pagination.custom') }}
    @endif
@endsection
