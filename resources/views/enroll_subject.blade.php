@extends('layout.pagelayout')

@section('content')

<head>
    <title>Enroll Subjects</title>
    <style>
        .container {
            max-width: 800px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: left;
            color: #007bff;
            margin-bottom: 20px;
        }
        .success-message {
            color: green;
            margin-bottom: 10px;
        }
        .search-form {
            margin-bottom: 20px;
        }
        .search-form label {
            font-weight: bold;
        }
        .search-form input[type="text"] {
            width: 200px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 10px;
        }
        .search-form button {
            font-family: "Gotham", sans-serif;
            padding: 8px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .back-button {
            font-family: "Gotham", sans-serif;
            padding: 8px 20px;
            background-color: #292929;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-right: 10px;
        }
        .back-button:hover {
            background-color: #5a6268;
        }
        .subject-list {
            margin-top: 20px;
        }
        .subject-item {
            margin-bottom: 10px;
        }
        .enroll-button {
            font-family: "Gotham", sans-serif;
            padding: 10px 20px;
            margin-bottom: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .enroll-button:hover {
            background-color: #0053ac;
        }
        .tip {
            margin-top: 20px;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Enroll Subjects</h1>

        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <div class="tip">
            <p>To edit enrolled subjects, simply re-enter the student ID and make necessary changes.</p>
        </div>

        <form class="search-form" action="{{ route('enrollpage') }}" method="GET">
            <label for="student_id">Student ID:</label>
            <input type="text" name="student_id" id="student_id" value="{{ old('student_id', $student_id ?? '') }}" required>
            <button type="submit">Search</button>
        </form>

        @if(isset($student) && $student)
            <form action="{{ route('enroll') }}" method="POST">
                @csrf
                <input type="hidden" name="student_id" value="{{ $student->id }}">

                <div class="subject-list">
                    <h3>Available Subjects for {{ $student->firstname }} {{ $student->lastname }}:</h3>
                    @foreach($subjects as $subject)
                        <div class="subject-item">
                            <input type="checkbox" name="subjects[]" id="subject_{{ $subject->id }}" value="{{ $subject->id }}"
                            {{ $student->subjects->contains($subject->id) ? 'checked' : '' }}>
                            <label for="subject_{{ $subject->id }}">{{ $subject->subjectname }} ({{ $subject->start_time }} - {{ $subject->end_time }})</label>
                        </div>
                    @endforeach
                </div>

                <button type="submit" class="enroll-button">Enroll</button>
            </form>
        @endif

        <a href="{{ route('subjects.listing') }}" class="back-button">&#8617; Back</a>

    </div>
</body>

@endsection




