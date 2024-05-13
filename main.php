<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-size: cover; /* Cover the entire viewport */
            background-position: right center; /* Move background image to the right */
            background-repeat: no-repeat; /* Do not repeat the image */
            animation: changeBackground 12s infinite; /* Animate background change every 12 seconds */
        }

        @keyframes changeBackground {
            0% { background-image: url("university.jpg"); }
            25% { background-image: url("university2.jpg"); }
            50% { background-image: url("university3.jpg"); }
            75% { background-image: url("university4.jpg"); }
            100% { background-image: url("university.jpg"); }
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

        .buttons {
            text-align: center;
            margin-top: 50vh; /* Adjust spacing */
            transform: translateY(-50%);
            display: flex;
            justify-content: center; /* Align items horizontally */
        }

        .buttons button {
            background-color: #4CAF50; /* Green background color */
            color: white;
            border: none;
            padding: 15px 30px;
            margin: 10px; /* Adjust spacing between buttons */
            cursor: pointer;
            transition: background-color 0.3s ease;
            border-radius: 5px; /* Rounded corners */
            font-size: 20px; /* Button font size */
        }

        .buttons button:hover {
            background-color: #45a049; /* Darker green on hover */
        }

        footer {
            background-color: #001f3f; /* Deep blue background color */
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed; /* Stick to the bottom */
            width: 100%; /* Full width */
            bottom: 0; /* Align to the bottom */
        }
    </style>
</head>
<body>
    <header>
        <h1>WELCOME TO PACIFIQUE UNIVERSITY SCHOOL</h1>
    </header>
    
    <div class="buttons">
        <button onclick="goToSignup()">Signup</button>
        <button onclick="goToLogin()">Login</button>
        <button onclick="goToComments()">Comments</button>
        <button onclick="goToHome()">Home</button> <!-- Home button -->
    </div>
    
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Pacifique University School. All rights reserved.</p>
    </footer>

    <script>
        function goToSignup() {
            window.location.href = 'signup.php';
        }

        function goToLogin() {
            window.location.href = 'login.php';
        }

        function goToComments() {
            window.location.href = '';
        }

        function goToHome() {
            window.location.href = 'home.php'; // Change 'index.html' to your home page URL
        }
    </script>
</body>
</html>
