<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            margin-top: 100px; /* Adjust top margin */
            padding: 20px; /* Add padding to the container */
            text-align: center;
            color: #333;
        }

        h1 {
            margin-bottom: 20px;
        }

        nav {
            background-color: #f2f2f2; /* Gray background color for navigation */
            position: fixed; /* Fix the navigation position */
            top: 80px; /* Align the navigation below the header */
            left: 0; /* Align the navigation to the left */
            height: calc(100% - 80px); /* Full height minus header height */
            width: 200px; /* Set width for the navigation */
            padding-top: 20px; /* Adjust top padding */
            z-index: 998; /* Ensure navigation is below the header */
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            margin-bottom: 20px; /* Add more space between navigation items */
        }

        nav ul li a {
            display: block; /* Display links as block to fill the space */
            text-decoration: none;
            color: #333;
            padding: 10px; /* Add padding to make clickable area larger */
        }

        nav ul li a:hover {
            background-color: #ddd; /* Change background color on hover */
        }

        /* Style for the person icon */
        .icon {
            color: #fff;
            margin-right: 10px;
        }

        /* Style for the user list */
        .user-list {
            margin-top: 80px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
        }

        .user-list table {
            width: 100%;
            border-collapse: collapse;
        }

        .user-list th, .user-list td {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .user-list th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-align: left;
        }

        .user-list tr:hover {
            background-color: #f9f9f9;
        }

        /* Style for the "choose an Options" line */
        .option {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            padding: 20px 0;
        }
    </style>
</head>
<body>

<header>
    <h1>ADMIN DASHBOARD</h1>
    <div style="position: absolute; top: 50px; right: 50px; color: #fff;">
        <i class="icon fas fa-user"></i> <!-- Font Awesome person icon -->
        <!-- Replace this with the admin's name -->
        <span>Welcome, Admin</span>
    </div>
</header>

<nav>
    <p class="option"> choose an Options</p> <!-- Sentence above the navigation -->
    <ul>
    <li><a href="users.php"><i class="fas fa-users"></i> View Student Informations</a></li>
         <li><a href="modules.php"><i class="fas fa-plus"></i> Add Modules</a></li>
        <li><a href="#"><i class="fas fa-chart-bar"></i> Reports</a></li>
        <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
        <li><a href="login.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>
</nav>

</body>
</html>
