<!-- Forgot Password Page -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
  <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
    <form id="forgotPasswordForm" action="send_otp.php" method="post">
      <h2 class="text-lg font-semibold text-center mb-4">Forgot Password</h2>
      
      <!-- Email Field -->
      <div class="mb-4">
        <label for="email" class="block text-sm font-medium mb-1">Enter Your Registered Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required 
               class="w-full border rounded-lg py-2 px-4 focus:ring-blue-300 focus:border-blue-500">
      </div>
      
      <!-- Submit Button -->
      <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">
        Send OTP
      </button>
    </form>
  </div>
</body>
</html>
