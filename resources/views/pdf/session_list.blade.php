<style>
    {{ $css }}
</style>
<h1 style="text-align: center">Session List</h1>
<table>
    <tr>
        <th>SL</th>
        <th>Academic Session</th>
        <th>Added at</th>
    </tr>
    @foreach ($sessions as $session)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$session->session}}</td>
            <td>{{$session->created_at}}</td>
        </tr>
    @endforeach
</table>
