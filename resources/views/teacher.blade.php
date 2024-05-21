@extends('layout.pagelayout')
@section('content')

<style>
    .main-content {
        padding: 1em;
    }
    h1 {
        text-align: center;
        color: #000000;
        margin-bottom: 20px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    th, td {
        border: 1px solid #cccccc;
        padding: 10px;
        text-align: left;
    }
    th {
        background-color: #424242;
        color: #ffffff;
    }
</style>

<div class="main-content">
    <h1>Updated Teacher List</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Department</th>
                <th>Gender</th>
                <th>Profession</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teacherinfo as $teacher)
                <tr>
                    <td>{{ $teacher->firstname }} {{ $teacher->middlename }} {{ $teacher->lastname }} {{ $teacher->suffix }}</td>
                    <td>{{ $teacher->department }}</td>
                    <td>{{ $teacher->gender }}</td>
                    <td>{{ $teacher->profession }}</td>
                    <td>{{ $teacher->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
