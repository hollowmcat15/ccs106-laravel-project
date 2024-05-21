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
    .button-container {
        text-align: right;
        margin-bottom: 20px;
    }
    .button-container button {
        font-family: "Gotham", sans-serif;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }
    .button-container button:hover {
        transition-duration: 0.4s;
        background-color: #0056b3;
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
    <h1>Subject List</h1>
    <div class="button-container">
        <button onclick="window.location.href='/enrollsubject'">Enroll Subject</button>
    </div>
    <table>
        <thead>
            <tr>
                <th>Subject Name</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Year Level</th>
                <th>Teacher/Professor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subjectDisplay as $subject)
            <tr>
                <td>{{ $subject->subjectname }}</td>
                <td>{{ date('h:i A', strtotime($subject->start_time)) }}</td>
                <td>{{ date('h:i A', strtotime($subject->end_time)) }}</td>
                <td>{{ $subject->yearlevel }}</td>
                <td>{{ $subject->teacher->firstname }} {{ $subject->teacher->lastname }} {{ $subject->teacher->suffix }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


