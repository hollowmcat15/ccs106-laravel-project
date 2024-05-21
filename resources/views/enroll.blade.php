@extends('layout.pagelayout')

@section('content')

<h2>Enrollment Form</h2>

<style>
    h2 {
        text-align: center;
        margin-bottom: 30px;
    }

    form {
        max-width: 600px;
        margin: 0 auto;
    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="text"],
    input[type="number"],
    input[type="date"],
    select {
        font-family: "Gotham", sans-serif;
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 2px solid #6b6b6b;
        border-radius: 5px;
        background-color: #ffffff;
        color: #000000;
        box-sizing: border-box;
    }

    input[type="submit"] {
        font-family: "Gotham", sans-serif;
        border-radius: 10px;
        display: inline-block;
        padding: 10px 20px;
        border: none;
        border: 2px solid #04d300;
        background-color: #1dd600;
        color: #ffffff;
        transition: 0.3s ease;
    }

    input[type="reset"] {
        font-family: "Gotham", sans-serif;
        border-radius: 10px;
        display: inline-block;
        padding: 10px 20px;
        border: none;
        border: 2px solid #ffe600;
        background-color: #ddc700;
        color: #ffffff;
        transition: background-color 0.3s ease;
    }

    input[type="button"] {
        font-family: "Gotham", sans-serif;
        border-radius: 10px;
        display: inline-block;
        padding: 10px 20px;
        border: none;
        border: 2px solid #ff0000;
        background-color: #d00000;
        color: #ffffff;
        transition: background-color 0.3s ease;
        margin-bottom: 50px;
        margin-top: 20px;
    }

    input[type="submit"]:hover {
        background-color: #007d00;
        color: #ffffff;
    }

    input[type="reset"]:hover {
        background-color: #c4c100;
        color: #ffffff;
    }

    input[type="button"]:hover {
        background-color: #bd0000;
        color: #ffffff;
    }

</style>

</head>

<body>

<form action="{{route('enroll.student')}}" autocomplete="on" method="post">
@csrf

  <label for="firstname">First name:</label>
  <input type="text" id="firstname" name="firstname" required>

  <label for="middlename">Middle name:</label>
  <input type="text" id="middlename" name="middlename" required>

  <label for="lastname">Last name:</label>
  <input type="text" id="lastname" name="lastname" required>

  <label for="suffix">Suffix:</label>
  <input type="text" id="suffix" name="suffix">

  <label for="address">Address:</label>
  <input type="text" id="address" name="address" required>

  <label for="age">Age:</label>
  <input type="number" id="age" name="age" min="1" max="500" required>

  <label for="birthdate">Birthday:</label>
  <input type="date" id="birthdate" name="birthdate" required>

  <label for="gender">Gender:</label>
  <select id="gender" name="gender">
    <option value="1">Male</option>
    <option value="2">Female</option>
    <option value="3">Others</option>
    <option value="4">Prefer not to say</option>
  </select>

  <label for="yearlevel">Year Level:</label>
  <select id="yearlevel" name="yearlevel">
    <option value="1">First Year</option>
    <option value="2">Second Year</option>
    <option value="3">Third Year</option>
    <option value="4">Fourth Year</option>
    <option value="5">Fifth Year</option>
  </select>

  <center>
  <input type="submit" value="Submit">
  <input type="reset" value="Reset">
  <input type="button" onclick="cancel()" value="Cancel">
  </center>

</form>

<script>
    function cancel() {
      location.replace("/")
    }
</script>

@endsection


