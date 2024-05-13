<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #001f3f; /* Deep blue background color */
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        .container {
            margin-top: 20px;
            padding: 20px;
            text-align: center;
            color: #333;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 8px;
            width: 300px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <h2>Update Student Information</h2>
    </header>
    <div class="container">
        <?php
        // Check if student ID is provided in the URL
        if(isset($_GET['id'])) {
            // Get student ID from the URL
            $studentID = $_GET['id'];

            // Database connection parameters
            $host = 'localhost';
            $username = 'root'; // Default MySQL username
            $password = ''; // Default MySQL password
            $database = 'student';

            // Create connection
            $conn = new mysqli($host, $username, $password, $database);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Retrieve student information from the database based on student ID
            $sql = "SELECT * FROM inform WHERE studentID = '$studentID'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
        ?>
        <form action="" method="post">
            <input type="hidden" name="studentID" value="<?php echo $row['student_Id']; ?>">
            Student ID: <input type="text" name="studentID" value="<?php echo $row['StudentID']; ?>"><br>
            Name: <input type="text" name="name" value="<?php echo $row['Name']; ?>"><br>
            Year: <input type="text" name="year" value="<?php echo $row['Year']; ?>"><br>
            Department: <input type="text" name="department" value="<?php echo $row['Department']; ?>"><br>
            Campus: <input type="text" name="campus" value="<?php echo $row['Campus']; ?>"><br>
            <input type="submit" name="update" value="Update">
        </form>
        <?php
            } else {
                echo "No student found with ID $studentID.";
            }

            // Close connection
            $conn->close();
        } else {
            echo "Student ID not provided.";
        }
        ?>
    </div>
</body>
</html>
