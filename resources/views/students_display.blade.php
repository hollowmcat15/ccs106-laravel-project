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
    .stud-info {
        border-bottom: 1px solid #cccccc;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 10px; /* Added border radius */
        background-color: #424242; /* Added background color */
        color: #ffffff;
    }
    .enrolled-subjects {
        background-color: #616161; /* Light grey background */
        color: #ffffff; /* Black font color */
        padding: 10px;
        margin-top: 10px;
        border-radius: 10px;
    }
    .enrolled-subjects h2 {
        margin-top: 0;
        color: #ffffff;
    }
    .enrolled-subjects ul {
        list-style-type: none;
        padding: 0;
    }
    .enrolled-subjects li {
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }
    .enrolled-subjects li:last-child {
        border-bottom: none;
    }
</style>

<div class="main-content">
    <h1>Student List</h1>
    @foreach($studentinfo as $student)
        <div class="stud-info">
            <p><strong>Name:</strong> {{ $student->firstname }} {{ $student->middlename }} {{ $student->lastname }}</p>
            <p><strong>Age:</strong> {{ $student->age }}</p>
            <p><strong>Address:</strong> {{ $student->address }}</p>
            <p><strong>Gender:</strong> {{ $student->gender }}</p>
            <p><strong>Year Level:</strong> {{ $student->yearlevel }}</p>
            <p><strong>Enrolled At:</strong> {{ $student->created_at }}</p>

            @if($student->subjects->count() > 0)
                <div class="enrolled-subjects">
                    <h2>Enrolled Subjects</h2>
                    <ul>
                        @foreach($student->subjects as $subject)
                            <li>{{ $subject->subjectname }} ({{ date('h:i A', strtotime($subject->start_time)) }} - {{ date('h:i A', strtotime($subject->end_time)) }})</li>
                        @endforeach
                    </ul>
                </div>
            @else
                <p>No subjects enrolled.</p>
            @endif
        </div>
    @endforeach
</div>

@endsection



