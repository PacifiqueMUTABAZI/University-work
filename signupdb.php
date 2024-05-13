<?php
// Connect to your database
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "hci"; // Replace with your database name

// Attempt to establish connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    // Log connection error
    error_log("Connection failed: " . $conn->connect_error);
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$studentID = $_POST['studentID'];
$name = $_POST['name'];
$year = $_POST['year'];
$department = $_POST['department'];
$campus = $_POST['campus'];

// Insert data into database
$sql = "INSERT INTO student (StudentID, Name, Year, Department, Campus)
        VALUES ('$studentID', '$name', '$year', '$department', '$campus')";

if ($conn->query($sql) === TRUE) {
    // Redirect to the login page after successful signup
    header("Location: login.php");
    exit(); // Make sure to stop script execution after redirecting
} else {
    // Display error message if the query fails
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
