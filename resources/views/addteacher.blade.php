@extends('layout.pagelayout')

@section('content')
    <style>
        form {
            font-family: Gotham, sans-serif;
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px;
        }

        h2 {
            text-align: center;
        }

        label {
            font-family: Gotham, sans-serif;
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        select {
            font-family: Gotham, sans-serif;
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            font-family: Gotham, sans-serif;
            background-color: #333333;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #191919;
        }
    </style>

    <h2>Add Teacher</h2>
    <form action="{{ route('teacherinfo.store') }}" method="POST">
        @csrf
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required>
        <br>

        <label for="middlename">Middle Name:</label>
        <input type="text" id="middlename" name="middlename" required>
        <br>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required>
        <br>

        <label for="suffix">Suffix:</label>
        <input type="text" id="suffix" name="suffix">
        <br>

        <label for="department">Department:</label>
        <input type="text" id="department" name="department" required>
        <br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Others">Others</option>
            <option value="Prefer not to say">Prefer not to say</option>
        </select>
        <br>

        <label for="profession">Profession:</label>
        <select id="profession" name="profession" required>
            <option value="Professor">Professor</option>
            <option value="Associate Professor">Associate Professor</option>
            <option value="Assistant Professor">Assistant Professor</option>
            <option value="Lecturer">Lecturer</option>
            <option value="Instructor">Instructor</option>
        </select>
        <br>

        <button type="submit">Submit</button>
    </form>
    <a href="{{ route('chairman.home') }}">&#11164; Back to Homepage</a>
@endsection


