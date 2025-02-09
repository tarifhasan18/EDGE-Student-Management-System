{{-- <style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-size: 18px;
        text-align: left;
    }

    th, td {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: center;
    }

    th {
        background-color: #4CAF50;
        color: white;
        text-transform: uppercase;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }

    td {
        font-size: 16px;
    }

    /* PDF-এর জন্য Page Break */
    @media print {
        tr { page-break-inside: avoid; }
    }
</style> --}}

{{-- <link rel="stylesheet" href="{{asset('pdf_style.css')}}"> --}}
<style>
    {{ $css }}
</style>
<h1 style="text-align: center">Department List</h1>
<table>
    <tr>
        <th>SL</th>
        <th>Department</th>
        <th>Added at</th>
    </tr>
    @foreach ($depts as $dept)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$dept->title}}</td>
            <td>{{$dept->created_at}}</td>
        </tr>
    @endforeach
</table>
