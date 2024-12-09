<?php
// Database configuration
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
        echo "<script>window.location.href = 'homepage.php';</script>";
    } else {
        // Invalid credentials
        echo "<script>alert('Invalid email or password!');</script>";
        echo "<script>window.history.back();</script>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
    body {
        background-image: url('artandcraft.jpg');
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    .container h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-group {
      position: relative;
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
    }

    .form-group .icon {
      position: absolute;
      top: 70%;
      left: 10px;
      transform: translateY(-50%);
      font-size: 18px;
      color: #888;
    }

    .form-group input {
      width: 89%;
      padding: 10px 10px 10px 35px; /* Add padding for the icon */
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .btn-submit {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    .btn-submit:hover {
      background-color: #0056b3;
    }

    .footer {
      text-align: center;
      margin-top: 10px;
    }

    .footer a {
      color: #007bff;
      text-decoration: none;
    }

    .footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form action="" method="POST">
      <div class="form-group">
        <label for="email">Email</label>
        <span class="icon"><i class='bx bx-envelope'></i></span>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <span class="icon"><i class='bx bx-key'></i></span>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <button type="submit" class="btn-submit">Login</button>
    </form>
    <div class="footer">
      <a href="forgetpassword.php">Forgot Password?</a><br>
      Don't have an account? <a href="registration.php">Register here</a>.
    </div>
  </div>
</body>
</html>
