<?php
// Database connection details
$servername = "localhost";
$dbUsername = "mat";
$dbPassword = "1234";
$dbName = "userDB";

// Create connection
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
// Get form data
$userToCheck = $_POST['username'];
$userPin = $_POST['ID']; // Assuming 'ID' is the field name for the PIN in your form

// SQL to check if user exists
$sql = "SELECT * FROM users WHERE username = ?";

// Prepare statement for user check
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $userToCheck);

// Execute query
$stmt->execute();
$stmt->store_result();

// Check if user exists
if ($stmt->num_rows > 0) {
	echo "Username already taken<br>";
	// Add a button to navigate back to the registration page
	echo '<a href="Registration_page.php"><button>Try Again</button></a>';
} else {
	// User does not exist, proceed with registration
	$stmt->close(); // Close the previous statement

	// SQL to insert new user
	$insertSql = "INSERT INTO users (username, pin) VALUES (?, ?)";

	// Prepare statement for insert
	$insertStmt = $conn->prepare($insertSql);
	$insertStmt->bind_param("ss", $userToCheck, $userPin);

	// Execute insert query
	if ($insertStmt->execute()) {
    	echo "New user registered successfully<br>";
    	// Add a button to navigate to the login page
    	echo '<a href="login_Form.php"><button>Login</button></a>';
	} else {
    	echo "Error: " . $insertStmt->error;
	}
	$insertStmt->close();
}
$conn->close();
?>

