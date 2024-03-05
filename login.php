<?php
// Establish a connection to the database
$servername = "localhost"; // Change this to your MySQL server name
$username = "root"; // Change this to your MySQL username
$password = "root"; // Change this to your MySQL password
$dbname = "vidhya"; // Change this to your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

// Prepare a SQL query to check if the username, password, and role match
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND role = '$role'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // If the user exists, redirect them to the appropriate page
    if ($role == 'student') {
        header("Location: student_dashboard.php"); // Change this to your student dashboard page
    } elseif ($role == 'teacher') {
        header("Location: teacher_dashboard.php"); // Change this to your teacher dashboard page
    } elseif ($role == 'shelter') {
        header("Location: shelter_dashboard.php"); // Change this to your teacher dashboard page
    }
    
} else {
    // If the user doesn't exist, redirect them back to the login page
    header("Location: login.html");
}

$conn->close();
?>