@extends('layout.pagelayout')

@section('content')
<h1><center>Edit Student</center></h1>

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

<form action="{{ route('studinfo.update', $studinfo->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="firstname">First Name</label>
        <input type="text" id="firstname" name="firstname" value="{{ $studinfo->firstname }}">
    </div>

    <div>
        <label for="middlename">Middle Name</label>
        <input type="text" id="middlename" name="middlename" value="{{ $studinfo->middlename }}">
    </div>

    <div>
        <label for="lastname">Last Name</label>
        <input type="text" id="lastname" name="lastname" value="{{ $studinfo->lastname }}">
    </div>

    <div>
        <label for="suffix">Suffix</label>
        <input type="text" id="suffix" name="suffix" value="{{ $studinfo->suffix }}">
    </div>

    <div>
        <label for="address">Address</label>
        <input type="text" id="address" name="address" value="{{ $studinfo->address }}">
    </div>

    <div>
        <label for="age">Age</label>
        <input type="number" id="age" name="age" value="{{ $studinfo->age }}">
    </div>

    <div>
        <label for="birthdate">Birthdate</label>
        <input type="date" id="birthdate" name="birthdate" value="{{ $studinfo->birthdate }}">
    </div>

    <div>
        <label for="gender">Gender</label>
        <select id="gender" name="gender">
            <option value="Male" {{ $studinfo->gender == 'Male' ? 'selected' : '' }}>Male</option>
            <option value="Female" {{ $studinfo->gender == 'Female' ? 'selected' : '' }}>Female</option>
            <option value="Others" {{ $studinfo->gender == 'Others' ? 'selected' : '' }}>Others</option>
            <option value="Prefer not to say" {{ $studinfo->gender == 'Prefer not to say' ? 'selected' : '' }}>Prefer not to say</option>
        </select>
    </div>

    <div>
        <label for="yearlevel">Year Level</label>
        <select id="yearlevel" name="yearlevel">
            <option value="First Year" {{ $studinfo->yearlevel == 'First Year' ? 'selected' : '' }}>First Year</option>
            <option value="Second Year" {{ $studinfo->yearlevel == 'Second Year' ? 'selected' : '' }}>Second Year</option>
            <option value="Third Year" {{ $studinfo->yearlevel == 'Third Year' ? 'selected' : '' }}>Third Year</option>
            <option value="Fourth Year" {{ $studinfo->yearlevel == 'Fourth Year' ? 'selected' : '' }}>Fourth Year</option>
            <option value="Fifth Year" {{ $studinfo->yearlevel == 'Fifth Year' ? 'selected' : '' }}>Fifth Year</option>
        </select>
    </div>

    <button type="submit">Update</button>
</form>

<a href="{{ route('edit_student.index') }}">Back to List</a>
@endsection


