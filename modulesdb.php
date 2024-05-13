<?php
// Database connection parameters
$servername = "localhost"; // Change this to your database server name
$username = "username"; // Change this to your database username
$password = "password"; // Change this to your database password
$dbname = "hci"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve module names and credits from the form
    $module_names = $_POST['module_name'];
    $credits = $_POST['credits'];

    // Loop through each module and insert into the database
    for ($i = 0; $i < count($module_names); $i++) {
        $module_name = $conn->real_escape_string($module_names[$i]);
        $credit = $conn->real_escape_string($credits[$i]);
        
        // SQL INSERT statement to insert data into the modulesc table
        $sql = "INSERT INTO modulesc (module_name, credit) VALUES ('$module_name', '$credit')";

        if ($conn->query($sql) !== TRUE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    // Close database connection
    $conn->close();
}
?>
