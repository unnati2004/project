<?php
// Start the session
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to login page or homepage
header("Location: login.php"); // Change to the desired redirect page
exit();

?>
