<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        @keyframes moveHeader {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100%);
            }
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("university.jpg");
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

        header h1 {
            animation: moveHeader 10s linear infinite; /* Apply animation to h1 */
        }

        section {
            background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent white background */
            padding: 20px;
            margin: 100px auto 20px; /* Center the section horizontally with space for the fixed header */
            max-width: 800px; /* Maximum width of the section */
        }

        section p {
            font-size: 18px; /* Set font size */
            line-height: 1.6; /* Set line height */
            margin-bottom: 15px; /* Set bottom margin */
            text-align: justify; /* Justify paragraph text */
        }

        .buttons {
            text-align: center;
            margin-top: 20px; /* Adjust spacing */
        }

        .buttons button {
            background-color: #4CAF50; /* Green background color */
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 0 10px; /* Adjust spacing between buttons */
            cursor: pointer;
            transition: background-color 0.3s ease;
            border-radius: 5px; /* Rounded corners */
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
    
    <section>
        <h3>About Us</h3>
        <p>Welcome to Pacifique University School, where excellence meets opportunity! Our university is dedicated to providing a vibrant and enriching learning environment for students from all walks of life.</p>
        <p>At Pacifique, we believe in fostering intellectual curiosity, creativity, and critical thinking skills that prepare our students for success in a rapidly changing world. Our distinguished faculty members are experts in their fields, committed to mentoring and guiding students to achieve their highest potential.</p>
        <p>With state-of-the-art facilities, cutting-edge research opportunities, and a diverse community of scholars, Pacifique offers an unparalleled educational experience. </p>
        
        <div class="buttons">
            <button onclick="goToNextPage()">Continue</button>
            <button onclick="confirmExit()">Exit</button>
        </div>
    </section>
    
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Pacifique University School. All rights reserved.</p>
    </footer>

    <script>
        function goToNextPage() {
            // Replace 'nextPage.html' with the URL of the next page
            window.location.href = 'main.php';
        }

        function confirmExit() {
            if (confirm("Are you sure you want to exit?")) {
                window.close(); // Close the window/tab
            }
        }
    </script>
</body>
</html>
