@extends('layout.pagelayout')

@section('content')
<style>
    .main-content {
        padding: 1em;
        border: 2px solid #3c3c3c;
        border-radius: 15px;
        background-color: #f2f2f2;
        max-width: 800px;
        margin: 0 auto;
        overflow-x: auto; /* Add horizontal scroll if needed */
    }
    h1 {
        text-align: center;
        color: #000000;
        margin-bottom: 20px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #cccccc;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
</style>

<div class="main-content">
    <h1>Updated Subject List</h1>
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
            @foreach($subjectinfo as $subject)
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
