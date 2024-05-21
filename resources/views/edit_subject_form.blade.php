@extends('layout.pagelayout')

@section('content')
<h1><center>Edit Subject</center></h1>

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

<form action="{{ route('subjectinfo.update', $subjectinfo->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="subjectname">Subject Name</label>
        <input type="text" id="subjectname" name="subjectname" value="{{ $subjectinfo->subjectname }}" required>
    </div>

    <div>
        <label for="start_time">Start Time:</label>
        <input type="time" id="start_time" name="start_time" value="{{ $subjectinfo->start_time }}" required>
    </div>

    <div>
        <label for="end_time">End Time:</label>
        <input type="time" id="end_time" name="end_time" value="{{ $subjectinfo->end_time }}" required>
    </div>

    <div>
        <label for="yearlevel">Year Level</label>
        <select id="yearlevel" name="yearlevel">
            <option value="First Year" {{ $subjectinfo->yearlevel == 'First Year' ? 'selected' : '' }}>First Year</option>
            <option value="Second Year" {{ $subjectinfo->yearlevel == 'Second Year' ? 'selected' : '' }}>Second Year</option>
            <option value="Third Year" {{ $subjectinfo->yearlevel == 'Third Year' ? 'selected' : '' }}>Third Year</option>
            <option value="Fourth Year" {{ $subjectinfo->yearlevel == 'Fourth Year' ? 'selected' : '' }}>Fourth Year</option>
            <option value="Fifth Year" {{ $subjectinfo->yearlevel == 'Fifth Year' ? 'selected' : '' }}>Fifth Year</option>
        </select>
    </div>

    <div>
        <label for="teacher_id">Select Teacher:</label>
        <select id="teacher_id" name="teacher_id" class="form-control" required>
            @foreach($teachers as $teacher)
                <option value="{{ $teacher->id }}" {{ $subjectinfo->teacher_id == $teacher->id ? 'selected' : '' }}>
                    {{ $teacher->firstname }} {{ $teacher->lastname }} {{ $teacher->suffix }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit">Update</button>
</form>

<a href="{{ route('edit_subject.index') }}">Back to List</a>

@endsection
