<style>
    {{ $css }}
</style>
<h1 style="text-align: center">Subject List</h1>
<table>
    <tr>
        <th>SL</th>
        <th>Title</th>
        <th>Credit</th>
        <th>Department</th>
        <th>Session</th>
        <th>Added at</th>
    </tr>
    @foreach ($subjects as $subject)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$subject->title}}</td>
            <td>{{$subject->credit}}</td>
            <td>{{$subject->department->title}}</td>
            <td>{{$subject->sessions->session}}</td>
            <td>{{$subject->created_at}}</td>
        </tr>
    @endforeach
</table>
