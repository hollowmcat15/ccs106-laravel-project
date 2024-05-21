@extends('layout.pagelayout')
@section('content')

@include('success_notif')

<style>
    .main-content {
        padding: 1em;
        border: 2px solid #3c3c3c;
        border-radius: 15px;
        background-color: #ffffff;
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
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #424242;
        color:#ffffff;
    }
</style>

<div class="main-content">
    <h1>Updated Student List</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Year Level</th>
            </tr>
        </thead>
        <tbody>
            @foreach($studentinfo as $student)
            <tr>
                <td>{{ $student->firstname }} {{ $student->middlename }} {{ $student->lastname }}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->yearlevel }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
