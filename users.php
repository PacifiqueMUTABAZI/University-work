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

// Check if delete button is clicked
if(isset($_POST['delete_id'])) {
    $id = $_POST['delete_id'];
    $delete_query = "DELETE FROM student WHERE StudentID = '$id'";
    if ($conn->query($delete_query) === TRUE) {
        echo "<script>alert('Record deleted successfully');</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Query to fetch student information
$sql = "SELECT * FROM student";
$result = $conn->query($sql);

// Check if query was successful
if (!$result) {
    die("Error executing query: " . $conn->error);
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student Information</title>
    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

        h1 {
            margin-bottom: 20px;
        }

        .container {
            margin-top: 100px; /* Adjust top margin */
            padding: 20px; /* Add padding to the container */
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-align: left;
        }

        tr:hover {
            background-color: #f9f9f9;
        }

        /* Back button */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 10px;
        }

        /* Action buttons */
        .action-btns button {
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-right: 5px;
        }

        .action-btns button.delete {
            background-color: #f44336;
            color: white;
        }

        .action-btns button.delete:hover {
            background-color: #d32f2f;
        }

        .action-btns button.update {
            background-color: #4CAF50;
            color: white;
        }

        .action-btns button.update:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<header>
    <h1>View Student Information</h1>
</header>

<div class="container">
    <!-- Back Button -->
    <button onclick="window.history.back()">Back</button>

    <!-- Table to display student information -->
    <table>
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Year</th>
                <th>Department</th>
                <th>Campus</th>
                <th>Action</th> <!-- New column for action buttons -->
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["StudentID"] . "</td>";
                    echo "<td>" . $row["Name"] . "</td>";
                    echo "<td>" . $row["Year"] . "</td>";
                    echo "<td>" . $row["Department"] . "</td>";
                    echo "<td>" . $row["Campus"] . "</td>";
                    // Action buttons
                    echo "<td class='action-btns'>";
                    echo "<form method='post' onsubmit='return confirm(\"Are you sure you want to delete this student?\")'>";
                    echo "<input type='hidden' name='delete_id' value='" . $row['StudentID'] . "'>";
                    echo "<button type='submit' class='delete'>Delete</button>"; // Delete button
                    echo "</form>";
                    // echo "<form method='get' action='update.php'>"; 
                    echo "<button class='update'>Update</button>"; // Update button
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No student information found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
