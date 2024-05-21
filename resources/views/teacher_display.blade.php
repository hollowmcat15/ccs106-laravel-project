@extends('layout.pagelayout')

@section('content')
<style>
    .main-content {
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    h1 {
        text-align: center;
        color: #343a40;
        margin-bottom: 20px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        border-radius: 10px;
        overflow: hidden;
        background-color: #fff;
    }
    th, td {
        padding: 12px;
        text-align: left;
    }
    th {
        background-color: #343a40;
        color: #fff;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #e2e6ea;
    }
    td {
        border-bottom: 1px solid #ddd;
    }
</style>

<div class="main-content">
    <h1>Teachers List</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Department</th>
                <th>Profession</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teacherinfo as $teacher)
            <tr>
                <td>{{ $teacher->firstname }} {{ $teacher->middlename }} {{ $teacher->lastname }}</td>
                <td>{{ $teacher->gender }}</td>
                <td>{{ $teacher->department }}</td>
                <td>{{ $teacher->profession }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
