
<style>
    {{ $css }}
</style>
<h1 style="text-align: center">Student-Subject List</h1>
<table>
    <tr>
        <th>SL</th>
        <th>Roll</th>
        <th>Name</th>
        <th>Department</th>
        <th>Subject</th>
        <th>Session</th>
        <th>Added at</th>
    </tr>
    @foreach ($student_subjects as $student_subject)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$student_subject->student->roll}}</td>
            <td>{{$student_subject->student->name}}</td>
            <td>{{$student_subject->student->department->title}}</td>
            <td>{{$student_subject->subject->title}}</td>
            <td>{{$student_subject->subject->sessions->session}}</td>
            <td>{{$student_subject->created_at}}</td>
        </tr>
    @endforeach
</table>
