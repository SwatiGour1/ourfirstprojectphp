<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database
$sql = "INSERT INTO formfil (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Data submitted successfully!";
    include 'header.php';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
