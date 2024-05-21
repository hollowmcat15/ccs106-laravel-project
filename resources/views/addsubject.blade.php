@extends('layout.pagelayout')

@section('content')
    <title>Add Subject</title>
    <style>
        .container {
            font-family: Gotham, sans-serif;
            background-color: #fff;
            padding: 50px;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        form {
            width: 100%;
        }
        label {
            font-weight: bold;
            color: #555;
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="time"],
        select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        select {
            appearance: none;
            background-color: #fff;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #434343;
            color: white;
            padding: 14px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #1e1e1e;
        }
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add Subject</h2>
        <form action="{{route('subjects.store')}}" autocomplete="on" method="post">
        @csrf
            <div class="form-group">
                <label for="subjectname">Subject Name:</label>
                <input type="text" id="subjectname" name="subjectname" required>
            </div>

            <div class="form-group">
                <label for="start_time">Start Time:</label>
                <input type="time" id="start_time" name="start_time" required>
            </div>

            <div class="form-group">
                <label for="end_time">End Time:</label>
                <input type="time" id="end_time" name="end_time" required>
            </div>

            <div class="form-group">
                <label for="yearlevel">Year Level:</label>
                <select id="yearlevel" name="yearlevel" required>
                    <option value="1">First Year</option>
                    <option value="2">Second Year</option>
                    <option value="3">Third Year</option>
                    <option value="4">Fourth Year</option>
                    <option value="5">Fifth Year</option>
                </select>
            </div>

            <div class="form-group">
                <label for="teacher_id">Select Teacher:</label>
                <select id="teacher_id" name="teacher_id" class="form-control" required>
                    @foreach ($teachers as $teacher)
                        <option value="{{ $teacher->id }}">{{ $teacher->firstname }} {{ $teacher->lastname }} {{ $teacher->suffix }}</option>
                    @endforeach
                </select>
            </div>

            <input type="submit" value="Submit">
        </form>
    </div>
    <a href="{{ route('chairman.home') }}">&#11164; Back to Homepage</a>
</body>
</html>
@endsection

