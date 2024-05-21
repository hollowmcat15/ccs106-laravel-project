@extends('layout.pagelayout')

@section('content')
<h1><center>Edit Teacher</center></h1>

<style>
    form {
        font-family: "Gotham", sans-serif;
        max-width: 600px;
        margin: 0 auto;
        padding: 1em;
        background: #f9f9f9;
        border-radius: 5px;
    }
    div {
        margin-bottom: 1em;
    }
    label {
        margin-bottom: .5em;
        color: #333333;
        display: block;
    }
    input, select {
        font-family: "Gotham", sans-serif;
        border: 1px solid #CCCCCC;
        padding: .5em;
        font-size: 1em;
        width: 100%;
        box-sizing: border-box;
        border-radius: 4px;
    }
    button {
        font-family: "Gotham", sans-serif;
        padding: 0.7em;
        color: #fff;
        background-color: #007BFF;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 1em;
    }
    button:hover {
        background-color: #0056b3;
    }
    a {
        font-family: "Gotham", sans-serif;
        display: inline-block;
        margin-top: 1em;
        color: #007BFF;
        text-decoration: none;
    }
    a:hover {
        text-decoration: underline;
    }
</style>

<form action="{{ route('teacherinfo.update', $teacherinfo->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="firstname">First Name</label>
        <input type="text" id="firstname" name="firstname" value="{{ $teacherinfo->firstname }}">
    </div>

    <div>
        <label for="middlename">Middle Name</label>
        <input type="text" id="middlename" name="middlename" value="{{ $teacherinfo->middlename }}">
    </div>

    <div>
        <label for="lastname">Last Name</label>
        <input type="text" id="lastname" name="lastname" value="{{ $teacherinfo->lastname }}">
    </div>

    <div>
        <label for="suffix">Suffix</label>
        <input type="text" id="suffix" name="suffix" value="{{ $teacherinfo->suffix }}">
    </div>

    <div>
        <label for="department">Department</label>
        <input type="text" id="department" name="department" value="{{ $teacherinfo->department }}">
    </div>

    <div>
        <label for="gender">Gender</label>
        <select id="gender" name="gender">
            <option value="Male" {{ $teacherinfo->gender == 'Male' ? 'selected' : '' }}>Male</option>
            <option value="Female" {{ $teacherinfo->gender == 'Female' ? 'selected' : '' }}>Female</option>
            <option value="Others" {{ $teacherinfo->gender == 'Others' ? 'selected' : '' }}>Others</option>
            <option value="Prefer not to say" {{ $teacherinfo->gender == 'Prefer not to say' ? 'selected' : '' }}>Prefer not to say</option>
        </select>
    </div>

    <div>
        <label for="profession">Profession</label>
        <select id="profession" name="profession">
            <option value="1" {{ $teacherinfo->profession == 'Professor' ? 'selected' : '' }}>Professor</option>
            <option value="2" {{ $teacherinfo->profession == 'Associate Professor' ? 'selected' : '' }}>Associate Professor</option>
            <option value="3" {{ $teacherinfo->profession == 'Assistant Professor' ? 'selected' : '' }}>Assistant Professor</option>
            <option value="4" {{ $teacherinfo->profession == 'Lecturer' ? 'selected' : '' }}>Lecturer</option>
            <option value="5" {{ $teacherinfo->profession == 'Instructor' ? 'selected' : '' }}>Instructor</option>
        </select>
    </div>

    <button type="submit">Update</button>
</form>

<a href="{{ route('edit_teacher.index') }}">Back to List</a>
@endsection
