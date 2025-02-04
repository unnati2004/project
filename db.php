<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration_db";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

        $sql = "INSERT INTO users (name, email, contact, password,confirm_password) VALUES ('$name', '$email', '$contact', '$password', '$confirm_password')";

        if ($conn->query($sql) === TRUE) {

            echo "Registered successfully";

        } else {

            echo "Error: " . $sql . "<br>" . $conn->error;

        }

    $conn->close();
}
?>