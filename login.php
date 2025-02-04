<?php
session_start();
include('connect.php');

$error_message = ""; // Initialize error message

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Using prepared statements to avoid SQL injection
    $sql = "SELECT * FROM customers WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);

    // Bind parameters to the query
    $stmt->bind_param("ss", $email, $password);

    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch user data
        $row = $result->fetch_assoc();

        // Save user data to session
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['email'] = $row['email'];

        // Redirect to profile page after successful login
        header('Location: homepage.php');
        exit;
    } else {
        $error_message = "Invalid email or password."; // Set error message
    }

    // Close statement and connection
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
</head>
<body class="bg-cover bg-center min-h-screen flex justify-center items-center" style="background-image: url('artandcraft.jpg');">
  <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
    <h2 class="text-center text-2xl font-semibold mb-6">Login</h2>
    
    <!-- Error Message -->
    <?php if (!empty($error_message)): ?>
      <p id="error-message" class="text-red-500 text-sm text-center mb-4"><?= htmlspecialchars($error_message) ?></p>
    <?php endif; ?>
    
    <form action="" method="POST">
      <!-- Email Input -->
      <div class="mb-4 relative">
        <label for="email" class="block text-sm font-medium mb-1">Email</label>
        <div class="relative">
          <i class='bx bx-envelope absolute text-gray-400 left-3 top-1/2 transform -translate-y-1/2'></i>
          <input 
            type="email" 
            id="email" 
            name="email" 
            placeholder="Enter your email" 
            required 
            class="w-full px-10 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-200"
          >
        </div>
      </div>
      
      <!-- Password Input -->
      <div class="mb-4 relative">
        <label for="password" class="block text-sm font-medium mb-1">Password</label>
        <div class="relative">
          <i class='bx bx-key absolute text-gray-400 left-3 top-1/2 transform -translate-y-1/2'></i>
          <input 
            type="password" 
            id="password" 
            name="password" 
            placeholder="Enter your password" 
            required 
            class="w-full px-10 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-200"
          >
        </div>
      </div>

      <!-- Login Button -->
      <button 
        type="submit" 
        class="w-full bg-blue-500 text-white py-2 rounded-lg text-lg font-medium hover:bg-blue-600 transition"
      >
        Login
      </button>
    </form>
    
    <!-- Footer Links -->
    <div class="text-center mt-4">
      <a href="forgot_password.php" class="text-blue-500 hover:underline">Forgot Password?</a>
      <br>
      <span class="text-sm text-gray-600">Don't have an account? <a href="registration.php" class="text-blue-500 hover:underline">Register here</a>.</span>
    </div>
  </div>

  <script>
    // Automatically hide the error message after 5 seconds
    const errorMessage = document.getElementById('error-message');
    if (errorMessage) {
      setTimeout(() => {
        errorMessage.style.opacity = '0'; // Smooth fade-out
        setTimeout(() => errorMessage.style.display = 'none', 500); // Remove completely after fading out
      }, 3000);
    }
  </script>
</body>
</html>
