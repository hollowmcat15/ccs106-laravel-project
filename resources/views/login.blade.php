<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login System</title>
<style>
    body {
        font-family: "Gotham", sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login-container {
        background-color: #fff;
        border-radius: 10px;
        padding: 40px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        width: 100%;
    }

    .login-container h2 {
        text-align: center;
        margin-bottom: 30px;
        color: #333;
    }

    .login-form input[type="text"],
    .login-form input[type="password"] {
        font-family: "Gotham", sans-serif;
        width: 100%;
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .login-form button {
        font-family: "Gotham", sans-serif;
        width: 100%;
        padding: 15px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin-bottom: 10px;
    }

    .login-form button:hover {
        background-color: #0056b3;
    }

    .create-account {
        text-align: center;
        margin-top: 20px;
    }

    .create-account a {
        color: #007bff;
        font-size: 15px;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .create-account a:hover {
        color: #0056b3;
    }

    .login-option {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .login-option a {
        color: #007bff;
        text-decoration: none;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .login-option a:hover {
        color: #0056b3;
    }

    .login-container select {
        font-family: "Gotham", sans-serif;
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

</style>
</head>
<body>

<div class="login-container">
    <h2>School Log-in</h2>
    <form class="login-form" method="POST" action="">
        @csrf
        <input type="text" name="first_name" placeholder="First Name" required>
        <input type="text" name="last_name" placeholder="Last Name" required>
        <input type="password" name="password" placeholder="Password" required>
        <p>Log-in As:</p>
        <select name="role" required>
            <option value="student">Student</option>
            <option value="teacher">Teacher</option>
        </select>
        <button type="submit">Login</button>
    </form>
    <div class="create-account">
        <a href="/registerstudent_form">Create Student Account</a> or <a href="/registerteacher_form">Create Teacher Account</a>
    </div>
</div>


</body>
</html>
