<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Modules</title>
    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("university.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #333; /* Standard text color */
        }

        header {
            background-color: #001f3f;
            color: #fff;
            padding: 20px;
            text-align: center;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 999;
        }

        .container {
            margin-top: 100px;
            padding: 20px;
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007bff; /* Standard button color */
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3; /* Button color on hover */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff; /* White background color for table */
        }

        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2; /* Standard background color for table header */
        }

        .add-button {
            background-color: #28a745; /* Button color */
            color: #fff;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .back-button{
            background-color: #28a745; /* Button color */
            color: #fff;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .add-button:hover {
            background-color: #218838; /* Button color on hover */
        }

        .delete-button {
            background-color: #dc3545; /* Delete button color */
            color: #fff;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .delete-button:hover {
            background-color: #c82333; /* Delete button color on hover */
        }

        .editable {
            outline: none;
            border: none;
            background-color: transparent;
            width: 80%; /* Adjust width as needed */
        }

    </style>
</head>
<body>

<header>
    <h1>ADD MODULES</h1>
</header>

<nav>
    <ul>
        <li><a href="admin_dashboard.php"><i class="fas fa-arrow-left"></i> Back to Dashboard</a></li>
    </ul>
</nav>

<div class="container">
    <form action="modules.php" method="POST">
        <table id="module-table">
            <tr>
                <th>Module Name</th>
                <th>Credits</th>
                <th>Add</th>
                <th>Delete</th>
            </tr>
            
            <!-- Sample module rows -->
            <tr>
                <td><input type="text" class="editable" value="Module 1"></td>
                <td><input type="text" class="editable" value="5"></td>
                <td><button class="add-button">Add</button></td>
                <td><button class="delete-button">Delete</button></td>
            </tr>
            
        </table>
        <button type="button" id="add-row-button" class="add-button">Add Row</button>
        <button onclick="window.history.back()">Back</button>
    </form>
</div>

<script>
    document.getElementById('add-row-button').addEventListener('click', function() {
        var table = document.getElementById('module-table');
        var newRow = table.insertRow(-1);
        var cell1 = newRow.insertCell(0);
        var cell2 = newRow.insertCell(1);
        var cell3 = newRow.insertCell(2);
        var cell4 = newRow.insertCell(3);
        cell1.innerHTML = '<input type="text" class="editable" value="">';
        cell2.innerHTML = '<input type="text" class="editable" value="">';
        cell3.innerHTML = '<button class="add-button">Add</button>';
        cell4.innerHTML = '<button class="delete-button">Delete</button>';
    });
</script>

</body>
</html>
