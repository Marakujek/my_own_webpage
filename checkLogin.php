<?php
session_start();
// Database connection details
$servername = "localhost";
$dbUsername = "mat"; // replace with your database username
$dbPassword = "1234"; // replace with your database password
$dbName = "userDB";   // replace with your database name

// Create connection
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
// Get form data
$username = $_POST['username'];
$pin = $_POST['ID'];

// SQL to check if user exists and PIN matches
$sql = "SELECT * FROM users WHERE username = ? AND pin = ?";

// Prepare statement for user check
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $pin);

// Execute query
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $_SESSION['login'] = 1; // Indicate that user is logged in
    $_SESSION['user'] = $username; // Storing username in session variable
    header("Location: Main_information_page.php"); // Redirect to the main page
    exit();
} else {
    $_SESSION['error'] = "Invalid Username or PIN";
    header("Location: login_Form.php"); // Redirect back to the login page
    exit();
}
$stmt->close();
$conn->close();
?>

