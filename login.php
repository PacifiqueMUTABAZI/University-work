<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("university.jpg"); /* Background image */
            background-size: cover; /* Cover the entire viewport */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Do not repeat the image */
        }

        header {
            background-color: #001f3f; /* Deep blue background color */
            color: #fff;
            padding: 20px;
            text-align: center;
            position: fixed; /* Fix the header position */
            top: 0; /* Align the header to the top */
            width: 100%; /* Full width */
            z-index: 999; /* Ensure header is above other content */
        }

        .container {
            max-width: 400px;
            margin: 200px auto; /* Adjust top margin */
            padding: 20px;
            background-color: #fff; /* Form background color */
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Form shadow */
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333; /* Heading color */
        }

        label {
            font-weight: bold; /* Make the label text bold */
            display: block; /* Ensure labels are displayed on separate lines */
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc; /* Input border */
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50; /* Button background color */
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049; /* Button hover color */
        }

        .signin {
            text-align: center;
        }
    </style>
</head>
<body>

<header>
    <h1>WELCOME TO PACIFIQUE UNIVERSITY SCHOOL</h1>
</header>

<div class="container">
    <h2>Login Form</h2>
    <form action="logindb.php" method="post">
        <label for="name">Names</label>
        <input type="text" id="name" name="name" required>

        <label for="StudentID">Student ID</label>
        <input type="text" id="studentID" name="studentID" required>

        <button type="submit">Login</button>
    </form>
    <p class="signin">Don't have an account? <a href="signup.php">Sign up</a></p>
</div>

</body>
</html>
