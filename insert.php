<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customerdetails";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement
$sql = "INSERT INTO customers (name, user_name, email, contact, address, password, confirm_password, role) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

// Check if the preparation was successful
if (!$stmt) {
    die("Error preparing statement: " . $conn->error);
}

// Retrieve data from POST
$name = $_POST['name'];
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$role = $_POST['role'];

// Bind parameters
$stmt->bind_param("ssssssss", $name, $user_name, $email, $contact, $address, $password, $confirm_password, $role);

// Execute the prepared statement
if ($stmt->execute()) {
    echo "New record inserted successfully!";
} else {
    echo "Error executing statement: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>

*/



?>
