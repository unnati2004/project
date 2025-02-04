
<?php
// Database configuration
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customerdetails";

<!-- Success Message -->
    <?php if (!empty($successMessage)): ?>
      <div class="success-message" style="color: green; margin-bottom: 15px;">
        <?php echo $successMessage; ?>
      </div>
      <?php endif; ?>

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query to check user credentials
    $sql = "SELECT * FROM customers WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful
        echo "<script>alert('Login successful!');</script>";
        echo "<script>window.location.href = 'homepage.html';</script>";
    } else {
        // Invalid credentials
        echo "<script>alert('Invalid email or password!');</script>";
        echo "<script>window.history.back();</script>";
    }
}

$conn->close();*/
?>
