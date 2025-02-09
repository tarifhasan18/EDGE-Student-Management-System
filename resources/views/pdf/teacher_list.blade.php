<style>
    {{ $css }}
</style>
<h1 style="text-align: center">Teacher List</h1>
<table>
    <tr>
        <th>SL</th>
        <th>Name</th>
        <th>Department</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Added at</th>
    </tr>
    @foreach ($teachers as $teacher)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$teacher->name}}</td>
            <td>{{$teacher->department->title}}</td>
            <td>{{$teacher->phone}}</td>
            <td>{{$teacher->address}}</td>
            <td>{{$teacher->created_at}}</td>
        </tr>
    @endforeach
</table>
