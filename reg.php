<?php
// Step 1: Establish a connection to the database
$servername = "localhost"; // Change this to your MySQL server name
$username = "root"; // Change this to your MySQL username
$password = "root"; // Change this to your MySQL password if you've set one, otherwise leave it empty
$dbname = "vidhya"; // Change this to your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Retrieve data from the registration form
$username = $_POST['username'];
$password = $_POST['password'];
$name=$_POST['name'];
$role = $_POST['role'];

// Step 3: Insert the data into the users table
$sql = "INSERT INTO users (username, name, password, role) VALUES ('$username', '$name', '$password', '$role')";

if ($conn->query($sql) === TRUE) {
    include "confirmation.html";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Step 4: Close the database connection
$conn->close();
?>
