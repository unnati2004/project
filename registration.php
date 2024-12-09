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

// Initialize a variable to hold the message
$message = "";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve data from POST
    $name = $_POST['name'];
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $role = $_POST['role'];

    // Check if the email already exists
    $checkEmailSql = "SELECT id FROM customers WHERE email = ?";
    $checkStmt = $conn->prepare($checkEmailSql);
    $checkStmt->bind_param("s", $email);
    $checkStmt->execute();
    $result = $checkStmt->get_result();

    if ($result->num_rows > 0) {
        // Email already exists
        $message = "Error: This email is already registered. Please use a different email.";
    } else {
        // Prepare the SQL statement
        $sql = "INSERT INTO customers (name, user_name, email, contact, address, password, confirm_password, role) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        // Check if the preparation was successful
        if (!$stmt) {
            die("Error preparing statement: " . $conn->error);
        }

        // Bind parameters
        $stmt->bind_param("ssssssss", $name, $user_name, $email, $contact, $address, $password, $confirm_password, $role);

        // Execute the prepared statement
        if ($stmt->execute()) {
            $message = "Registration successfully!";
        } else {
            $message = "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    }

    $checkStmt->close();
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Page</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
    body {
      background-image: url('artandcraft.jpg');
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-color: #f4f4f4;
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

    .form-group input,
    .form-group textarea,
    .form-group select {
      width: 89%;
      padding: 10px 10px 10px 35px; /* Add padding for the icon */
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .form-group textarea {
      resize: none;
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

    .error-message {
      color: red;
      display: none;
      margin-top: 5px;
    }
  </style>
</head>
<body>
  <div class="container">
    <form id="registrationForm" action="" method="post">
      <h2>Registration</h2>

      <!-- Success or Error Message -->
      <?php if (!empty($message)): ?>
      <div class="message" style="color: <?php echo strpos($message, 'Error') === 0 ? 'red' : 'green'; ?>;">
        <?php echo $message; ?>
      </div>
      <?php endif; ?>

      <div class="form-group">
        <label for="name">Full Name</label>
        <span class="icon"><i class='bx bx-rename'></i></span>
        <input type="text" id="name" name="name" placeholder="Enter your full name" required>
      </div>
      <div class="form-group">
        <label for="user_name">Username</label>
        <span class="icon"><i class='bx bx-user'></i></span>
        <input type="text" id="user_name" name="user_name" placeholder="Choose a username" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <span class="icon"><i class='bx bx-envelope'></i></span>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label for="contact">Contact Number</label>
        <span class="icon"><i class='bx bx-phone-call'></i></span>
        <input type="tel" id="contact" name="contact" placeholder="Enter your contact number" pattern="\d{10}" maxlength="10" title="Contact number must be 10 digits." required>
      </div>
      <div class="form-group">
        <label for="address">Location Address</label>
        <span class="icon"><i class='bx bx-location-plus'></i></span>
        <textarea id="address" name="address" placeholder="Enter your address" rows="1" required></textarea>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <span class="icon"><i class='bx bx-key'></i></span>
        <input type="password" id="password" name="password" placeholder="Enter a password" required>
      </div>
      <div class="form-group">
        <label for="confirm_password">Confirm Password</label>
        <span class="icon"><i class='bx bx-check-square'></i></span>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
        <div class="error-message" id="passwordError">Passwords do not match!</div>
      </div>
      <div class="form-group">
        <label for="role">Join As</label>
        <select id="role" name="role" required>
          <option value="" disabled selected>Select your role</option>
          <option value="customer">Customer</option>
          <option value="artist">Artist</option>
        </select>
      </div>
      <button type="submit" class="btn-submit">Register</button>
    </form>
    <div class="footer">
      Already have an account? <a href="login.php">Login here</a>.
    </div>
  </div>

  <script>
    document.getElementById("registrationForm").addEventListener("submit", function(event) {
      const password = document.getElementById("password").value;
      const confirmPassword = document.getElementById("confirm_password").value;
      const passwordError = document.getElementById("passwordError");

      if (password !== confirmPassword) {
        event.preventDefault(); // Prevent form submission
        passwordError.style.display = "block";
      } else {
        passwordError.style.display = "none";
      }
    });
  </script>
</body>
</html>
