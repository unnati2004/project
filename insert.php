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




/*
// Collect form data
$name = $_POST['name'];
$username = $_POST['username']; 
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$role = $_POST['role'];


// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else{
$stmt = $conn->prepare("insert into registration (name,username,email,contact,address,password,confirm_password,role) values (?, ?, ?, ?, ?, ?, ?, ?,)");
$stmt->bind_param("sssissss",$name,$username,$email,$contact,$address,$password,$confirm_password,$role);
$stmt->execute();
echo"registration successfully";
stmt->close();
conn->close();
}

/*

// Validate inputs: Ensure all fields are filled in
if (!empty($name) && !empty($username) && !empty($email) && !empty($contact) && !empty($address) && !empty($password) && !empty($confirm_password) && !empty($role)) {

    // Check if passwords match
    if ($password !== $confirm_password) {
        die("Passwords do not match!");
    }

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check for duplicate email
    $SELECT = "SELECT email FROM customers WHERE email = ? LIMIT 1";
    $INSERT = "INSERT INTO customers (name, username, email, contact, address, password, role) VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Prepare SELECT statement
    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $rnum = $stmt->num_rows;

    if ($rnum == 0) {
        // Close the SELECT statement
        $stmt->close();

        // Prepare INSERT statement
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("sssisss", $name, $username, $email, $contact, $address, $hashed_password, $role);
        $stmt->execute();

        echo "Registration successful!";
    } else {
        echo "This email is already registered.";
    }

    // Close the statement
    $stmt->close();
} else {
    echo "All fields are required!";
}

// Close the database connection
$conn->close();
?>

*/



?>