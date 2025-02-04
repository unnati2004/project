<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $enteredOtp = $_POST['otp'];

    if (isset($_SESSION['otp']) && $enteredOtp == $_SESSION['otp']) {
        // Redirect to password reset form
        header("Location: reset_password.php");
    } else {
        echo "<script>alert('Invalid OTP. Please try again.'); window.location.href = 'verify_otp.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verify OTP</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
  <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
    <form action="" method="post">
      <h2 class="text-lg font-semibold text-center mb-4">Enter OTP</h2>

      <!-- OTP Field -->
      <div class="mb-4">
        <label for="otp" class="block text-sm font-medium mb-1">OTP</label>
        <input type="text" id="otp" name="otp" placeholder="Enter the OTP" required
               class="w-full border rounded-lg py-2 px-4 focus:ring-blue-300 focus:border-blue-500">
      </div>

      <!-- Submit Button -->
      <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">
        Verify OTP
      </button>
    </form>
  </div>
</body>
</html>
