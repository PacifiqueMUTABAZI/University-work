<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hci";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$studentID = $_POST['studentID'];
$name = $_POST['name'];

// Query to check if the user exists
$sql = "SELECT * FROM student WHERE StudentID='$studentID' AND Name='$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User exists
    $user = $result->fetch_assoc();
    $role = $user['role'];

    if ($role === 'admin') {
        // Redirect to admin dashboard
        header("Location: admin.php?studentID=$studentID");
    } else {
        // Redirect to user dashboard
        header("Location:dashboard.php?studentID=$studentID");
    }
} else {
    // User does not exist or credentials are incorrect
    echo "Invalid username or password. Please try again.";
}

$conn->close();
?>
