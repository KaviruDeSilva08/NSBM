<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // For demonstration purposes, let's assume these are the correct credentials
    $correctUsername = 'admin';
    $correctPassword = 'password';

    // Check if the submitted credentials are correct
    if ($username == $correctUsername && $password == $correctPassword) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>
        body {
            
            font-family: Arial, sans-serif;
            background-image: url('background3.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
            margin: 0;
        }
        .logo {
            position: absolute;
            top: 1px;
            right: 50px; 
            height: 100px; 
        }
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #cccccc;
            border-radius: 30px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 30px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;

        }
    </style>
</head>
<body>
    <div class="logo">
        <img src="logo.png" width="210" height="180" /> 
    </div>
    <h1>Login landlords</h1>,<br><br>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
