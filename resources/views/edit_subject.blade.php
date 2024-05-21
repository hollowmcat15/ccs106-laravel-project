@extends('layout.pagelayout')

@section('content')
<h1><center>Subject List</center></h1>

<style>
    table {
        font-family: "Gotham", sans-serif;
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-size: 1em;
        font-family: Arial, sans-serif;
        min-width: 600px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    thead tr {
        background-color: #313131;
        color: #ffffff;
        text-align: left;
    }
    th, td {
        font-family: "Gotham", sans-serif;
        padding: 12px 15px;
        border: 1px solid #dddddd;
    }
    tbody tr {
        font-family: "Gotham", sans-serif;
        border-bottom: 1px solid #dddddd;
    }
    tbody tr:nth-of-type(even) {
        font-family: "Gotham", sans-serif;
        background-color: #f3f3f3;
    }
    tbody tr:last-of-type {
        border-bottom: 2px solid #313131;
    }
    tbody tr:hover {
        background-color: #f1f1f1;
    }
    .button-group {
        display: flex;
        gap: 5px;
    }
    .button {
        font-family: "Gotham", sans-serif;
        padding: 5px 10px;
        border: none;
        cursor: pointer;
        border-radius: 3px;
        font-size: 0.9em;
        color: white;
        text-decoration: none;
        display: inline-block;
    }
    .edit-button {
        background-color: #3498db;
    }
    .edit-button:hover {
        background-color: #2980b9;
    }
    .delete-button {
        background-color: #e74c3c;
    }
    .delete-button:hover {
        background-color: #c0392b;
    }
    form {
        display: inline;
        margin: 0;
    }
</style>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Subject Name</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Year Level</th>
            <th>Professor</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($subjectinfos as $subject)
        <tr>
            <td>{{ $subject->id }}</td>
            <td>{{ $subject->subjectname }}</td>
            <td>{{ $subject->start_time }}</td>
            <td>{{ $subject->end_time }}</td>
            <td>{{ $subject->yearlevel }}</td>
            <td>{{ $subject->teacher->firstname }} {{ $subject->teacher->lastname }} {{ $subject->teacher->suffix }}</td>
            <td>
                <div class="button-group">
                    <a href="{{ route('subjectinfo.edit', $subject->id) }}" class="button edit-button">Edit</a>
                    <form action="{{ route('subjectinfo.destroy', $subject->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button delete-button">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('chairman.home') }}">&#11164; Back to Homepage</a>
@endsection
