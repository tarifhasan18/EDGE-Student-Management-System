<style>
    {{ $css }}
</style>
<h1 style="text-align: center">Student List</h1>
<table>
    <tr>
        <th>SL</th>
        <th>Name</th>
        <th>ID</th>
        <th>Address</th>
        <th>Mobile</th>
        <th>Blood Group</th>
        <th>Department</th>
        <th>Added at</th>
    </tr>
    @foreach ($students as $student)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->id}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->mobile}}</td>
            <td>{{$student->blood_group}}</td>
            <td>{{$student->department->title}}</td>
            <td>{{$student->created_at}}</td>
        </tr>
    @endforeach
</table>
