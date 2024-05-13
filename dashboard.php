<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
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
            text-align: center;
            color: #333;
        }

        h1 {
            margin-bottom: 20px;
        }

        nav {
            background-color: #f2f2f2; /* Gray background color for navigation */
            position: fixed; /* Fix the navigation position */
            top: 0; /* Align the navigation to the top */
            left: 0; /* Align the navigation to the left */
            height: 100%; /* Full height */
            width: 200px; /* Set width for the navigation */
            padding-top: 60px; /* Adjust top padding to align with header */
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            margin-bottom: 10px; /* Add some space between navigation items */
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

        /* Style for the "Choose an option" sentence */
        .option {
            padding: 40px;
            margin-bottom: 0; /* Remove default margin */
            border-bottom: 5px solid #ccc; /* Add underline */
            text-align:center;
            color:#001f3f;
        }
    </style>
</head>
<body>

<header>
    <h1>WELCOME TO USER DASHBOARD</h1>
    <div style="position: absolute; top: 50px; right: 50px; color: #fff;">
        <i class="icon fas fa-user"></i> <!-- Font Awesome person icon -->
        <?php
        // Replace this with PHP code to fetch user's name from the database
        $name = "MUTABAZI"; // Example username retrieved from the database
        echo "Welcome, $name";
        ?>
    </div>
</header>

<nav>
    <p class="option">Choose an option</p> <!-- Sentence above the navigation -->
    <ul>
        <li><a href="#"><i class="fas fa-chart-line"></i> Marks</a></li>
        <li><a href="#"><i class="fas fa-redo-alt"></i> Retakes</a></li>
        <li><a href="#"><i class="fas fa-calendar-alt"></i> Timetable</a></li>
        <li><a href="#"><i class="fas fa-money-bill-wave"></i> Payment</a></li>
        <li><a href="#"><i class="fas fa-tasks"></i> Monitoring Form</a></li>
        <li><a href="#"><i class="fas fa-file-alt"></i> Deliberation</a></li>
        <li><a href="#"><i class="fas fa-book"></i> Modules</a></li>
        <li><a href="login.php" id="logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>
</nav>

<script>
    document.getElementById("logout").addEventListener("click", function(event) {
        event.preventDefault();
        if (confirm("Are you sure you want to logout?")) {
            window.location.href = "login.php"; // Redirect to logout page
        }
    });
</script>

</body>
</html>
