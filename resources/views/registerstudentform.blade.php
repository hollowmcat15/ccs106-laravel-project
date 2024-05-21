<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Gotham, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="password"], button {
            font-family: Gotham, sans-serif;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        button {
            font-family: Gotham, sans-serif;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<form method="POST" action="{{ route('registration.submit') }}">
    @csrf
    <h2>Student Registration</h2>
    <input type="text" id="student_id" name="student_id" placeholder="Enter Student ID" required>
    <input type="text" id="firstname" name="firstname" readonly placeholder="First Name (will be displayable if ID is valid)">
    <input type="text" id="lastname" name="lastname" readonly placeholder="Last Name (will be displayable if ID is valid)">
    <input type="password" name="password" placeholder="Enter Password" required>
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
    <button type="submit">Register</button>
</form>

<script>
    document.getElementById('student_id').addEventListener('change', function() {
        var studentId = this.value;
        // AJAX request to fetch student information based on the ID
        fetch('/getStudentInfo/' + studentId)
            .then(response => response.json())
            .then(data => {
                document.getElementById('firstname').value = data.firstname;
                document.getElementById('lastname').value = data.lastname;
            })
            .catch(error => console.error('Error:', error));
    });
</script>

</body>
</html>



