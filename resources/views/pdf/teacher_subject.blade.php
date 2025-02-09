<style>
    {{ $css }}
</style>
<h1 style="text-align: center">Teacher List</h1>
<table>
    <tr>
        <th>SL</th>
        <th>Name</th>
        <th>Department</th>
        <th>Subject</th>
        <th>Session</th>
        <th>Added at</th>
    </tr>
    @foreach ($teacher_subjects as $teacher_subject)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$teacher_subject->teacher->name}}</td>
            <td>{{$teacher_subject->teacher->department->title}}</td>
            <td>{{$teacher_subject->subject->title}}</td>
            <td>{{$teacher_subject->subject->sessions->session}}</td>
            <td>{{$teacher_subject->created_at}}</td>
        </tr>
    @endforeach
</table>
