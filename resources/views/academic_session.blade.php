@extends('master')

@section('Title','EDGE-Academic Session')

@section('content')
<div class="form-container">
  <form action="{{route('session_post')}}" method="POST">
    @csrf
        <label for="">Academic Session</label>
        <input type="text" name="session" placeholder="Enter Academic Session" required><br><br>
        <input type="submit" value="Save">
  </form>
</div>
  <br>
  <a style="float: right; background-color: rgb(126, 3, 207); color:white; text-decoration:none; padding:5px" href="{{url('/sessions_pdf')}}">     <i class="fa fa-print"></i> Print
  </a>
  @if ($academic_sessions->isEmpty())
    <p>No Data available</p>
  @else
  <table class="styled-table">
    <thead>
    <tr>
        <th>SL</th>
        <th>Academic Session</th>
        <th>Added at</th>
    </tr>
    </thead>
    <tbody>
        @php
            $serial = ($academic_sessions->currentPage() - 1) *$academic_sessions->perPage();
        @endphp
    @foreach($academic_sessions as $key=> $session)
        <tr>
            <td>{{$serial+ $key + 1}}</td>
            <td>{{$session->session}}</td>
            <td>{{$session->created_at}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $academic_sessions->links('vendor.pagination.custom') }}
  @endif
@endsection
