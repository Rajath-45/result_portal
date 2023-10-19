<?php
error_reporting(0);
include('includes/config.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-image: url('images/bgimg.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 1600px 750px; /* Set the width and height you desire */
    background-position: center center; /* Center the image both horizontally and vertically */
}


.navbar {
    background-color: #3498db;
    padding: 1rem 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 1.5rem;
    color: white;
    text-align: center;
    flex-grow: 1; /* Expands the logo to fill available space */
}

.nav-links {
    list-style: none;
    display: flex;
    gap: 2rem;
}

.nav-links a {
    color: white;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease;
}

.nav-links a:hover {
    color: #f39c12; /* Change to your desired hover color */
}

/* Styling for the main content area */
.main-content {
    width: 70%; /* Adjust as needed */
    float: left;
    padding: 2rem;
}

/* Styling for the side content area */
.side-content {
    width: 30%; /* Adjust as needed */
    float: left;
    background-color: #f9f9f9;
    padding: 2rem;
}

/* Center the headings in feature sections */
.feature {
    text-align: center;
}

.feature h3 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
}

/* Clearing floats to contain the layout */
.clearfix::after {
    content: "";
    display: table;
    clear: both;
}

footer {
    background-color: rgba(52, 152, 219, 0.8); /* Adding some transparency to the footer */
    text-align: center;
    padding: 1rem 0;
    position: fixed; /* Keep the footer fixed at the bottom */
    width: 100%; /* Make the footer span the entire width */
    bottom: 0; /* Position the footer at the bottom of the page */
    left: 0; /* Align the footer to the left */
    color: white;
}
.notice-section {
            background-color: #f9f9f9;
            padding: 2rem;
            margin-top: 50rem;
            text-align: center;
        }

    </style>
    <title>Student Result Portal</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo" >Student Result Portal</div>
            <ul class="nav-links">
                <li><a href="home.php">Home</a></li>
                <li><a href="notice.html">Notice</a></li>
                <li><a href="find-results.php">Student</a></li>
                <li><a href="admin-logins.php">Admin</a></li>
            </ul>
        </nav>
    </header>
 
    <footer>
        <p>&copy; 2023 Student Result Portal. All rights reserved.</p>
    </footer>
</body>
</html>
