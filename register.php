<?php
session_start();

// Mock registration data - replace with real registration form handling
$_SESSION['user'] = [
    'name' => 'Jane Doe',
    'email' => 'jane.doe@example.com',
    'phone' => '987-654-3210',
    'address' => '456 Craft Street, Art City, USA'
];

// Redirect to homepage after registration
header('Location: homepage.php');
exit();
?>
