<?php
session_start();
include('connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $email = $_SESSION['otp_email'];

    if ($password !== $confirmPassword) {
        echo "<script>alert('Passwords do not match.'); window.location.href = 'reset_password.php';</script>";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
        $stmt->bind_param("ss", $hashedPassword, $email);

        if ($stmt->execute()) {
            echo "<script>alert('Password reset successful!'); window.location.href = 'login.php';</script>";
        } else {
            echo "Error: " . $stmt->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
  <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
    <form action="" method="post">
      <h2 class="text-lg font-semibold text-center mb-4">Reset Password</h2>

      <!-- Password Field -->
      <div class="mb-4">
        <label for="password" class="block text-sm font-medium mb-1">New Password</label>
        <input type="password" id="password" name="password" placeholder="Enter new password" required
               class="w-full border rounded-lg py-2 px-4 focus:ring-blue-300 focus:border-blue-500">
      </div>

      <!-- Confirm Password Field -->
      <div class="mb-4">
        <label for="confirm_password" class="block text-sm font-medium mb-1">Confirm Password</label>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm new password" required
               class="w-full border rounded-lg py-2 px-4 focus:ring-blue-300 focus:border-blue-500">
      </div>

      <!-- Submit Button -->
      <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">
        Reset Password
      </button>
    </form>
  </div>
</body>
</html>
