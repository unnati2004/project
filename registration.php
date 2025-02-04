<?php
session_start();
include('connect.php');

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

    // Validate password match
    if ($password !== $confirm_password) {
        $message = "Error: Passwords do not match.";
    } else {
        // Check if the email already exists
        $checkEmailSql = ($role === "customer") ? "SELECT id FROM customers WHERE email = ?" : "SELECT id FROM artists WHERE email = ?";
        $checkStmt = $conn->prepare($checkEmailSql);
        $checkStmt->bind_param("s", $email);
        $checkStmt->execute();
        $result = $checkStmt->get_result();

        if ($result->num_rows > 0) {
            $message = "Error: This email is already registered.";
        } else {
            // Decide the table based on the role
            $tableName = ($role === "customer") ? "customers" : "artists";

            // Prepare the SQL statement for insertion
            $sql = "INSERT INTO $tableName (name, user_name, email, contact, address, password, confirm_password) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);

            if (!$stmt) {
                die("Error preparing statement: " . $conn->error);
            }

            $stmt->bind_param("sssssss", $name, $user_name, $email, $contact, $address, $password, $confirm_password);

            if ($stmt->execute()) {
                $message = "Registration successful as " . ucfirst($role) . "!";
            } else {
                $message = "Error: " . $stmt->error;
            }

            $stmt->close();
        }
        $checkStmt->close();
    }
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
</head>
<body class="bg-cover bg-center min-h-screen flex justify-center items-center" style="background-image: url('artandcraft.jpg');">
  <div class="bg-white p-4 rounded-lg shadow-md w-full max-w-md">
    <form id="registrationForm" action="" method="post">
      <h2 class="text-center text-xl font-semibold mb-4">Registration</h2>

      <!-- Success or Error Message -->
      <?php if (!empty($message)): ?>
      <div class="mb-3 text-center text-sm <?php echo strpos($message, 'Error') === 0 ? 'text-red-500' : 'text-green-500'; ?>">
        <?php echo $message; ?>
      </div>
      <?php endif; ?>

      <!-- Name Field -->
      <div class="mb-3">
        <label for="name" class="block text-sm font-medium mb-1">Full Name</label>
        <div class="relative">
          <i class='bx bx-rename absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500'></i>
          <input type="text" id="name" name="name" placeholder="Enter your full name" required class="w-full border border-gray-300 rounded-lg py-1.5 pl-10 focus:ring-blue-300 focus:border-blue-500">
        </div>
      </div>

      <!-- Username Field -->
      <div class="mb-3">
        <label for="user_name" class="block text-sm font-medium mb-1">Username</label>
        <div class="relative">
          <i class='bx bx-user absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500'></i>
          <input type="text" id="user_name" name="user_name" placeholder="Choose a username" required class="w-full border border-gray-300 rounded-lg py-1.5 pl-10 focus:ring-blue-300 focus:border-blue-500">
        </div>
      </div>

<!-- Email Field -->
<div class="mb-3">
  <label for="email" class="block text-sm font-medium mb-1">Email</label>
  <div class="relative">
    <i class='bx bx-envelope absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500'></i>
    <input 
      type="email" 
      id="email" 
      name="email" 
      placeholder="Enter your email" 
      required 
      class="w-full border border-gray-300 rounded-lg py-1.5 pl-10 focus:ring-blue-300 focus:border-blue-500"
      autocomplete="off">
  </div>
</div>

      <!-- Contact Field -->
      <div class="mb-3">
        <label for="contact" class="block text-sm font-medium mb-1">Contact Number</label>
        <div class="relative">
          <i class='bx bx-phone-call absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500'></i>
          <input type="tel" id="contact" name="contact" placeholder="Enter your contact number" pattern="\d{10}" maxlength="10" title="Contact number must be 10 digits." required class="w-full border border-gray-300 rounded-lg py-1.5 pl-10 focus:ring-blue-300 focus:border-blue-500">
        </div>
      </div>

      <!-- Address Field -->
      <div class="mb-3">
        <label for="address" class="block text-sm font-medium mb-1">Location Address</label>
        <div class="relative">
          <i class='bx bx-location-plus absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500'></i>
          <textarea id="address" name="address" placeholder="Enter your address" rows="2" required class="w-full border border-gray-300 rounded-lg py-1.5 pl-10 focus:ring-blue-300 focus:border-blue-500"></textarea>
        </div>
      </div>

      <!-- Password Field -->
      <div class="mb-3">
        <label for="password" class="block text-sm font-medium mb-1">Password</label>
        <div class="relative">
          <i class='bx bx-key absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500'></i>
          <input type="password" id="password" name="password" placeholder="Enter a password" required class="w-full border border-gray-300 rounded-lg py-1.5 pl-10 focus:ring-blue-300 focus:border-blue-500">
        </div>
      </div>

      <!-- Confirm Password Field -->
      <div class="mb-3">
        <label for="confirm_password" class="block text-sm font-medium mb-1">Confirm Password</label>
        <div class="relative">
          <i class='bx bx-check-square absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500'></i>
          <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required class="w-full border border-gray-300 rounded-lg py-1.5 pl-10 focus:ring-blue-300 focus:border-blue-500">
        </div>
        <p id="passwordError" class="text-red-500 text-sm mt-2 hidden">Passwords do not match!</p>
      </div>

      <!-- Role Field -->
      <div class="mb-3">
        <label for="role" class="block text-sm font-medium mb-1">Join As</label>
        <select id="role" name="role" required class="w-full border border-gray-300 rounded-lg py-1.5 focus:ring-blue-300 focus:border-blue-500">
          <option value="" disabled selected>Select your role</option>
          <option value="customer">Customer</option>
          <option value="artist">Artist</option>
        </select>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="w-full bg-blue-500 text-white py-1.5 rounded-lg hover:bg-blue-600 focus:ring-4 focus:ring-blue-300">Register</button>
    </form>

    <!-- Footer Links -->
    <div class="text-center mt-4">
      <p class="text-sm">Already have an account? <a href="login.php" class="text-blue-500 hover:underline">Login here</a>.</p>
    </div>
  </div>

  <!-- Password Match Validation -->
  <script>
    document.getElementById('registrationForm').addEventListener('submit', function (e) {
      const password = document.getElementById('password').value;
      const confirmPassword = document.getElementById('confirm_password').value;
      const passwordError = document.getElementById('passwordError');

      if (password !== confirmPassword) {
        e.preventDefault(); // Prevent submission
        passwordError.classList.remove('hidden');
      } else {
        passwordError.classList.add('hidden');
      }
    });
  </script>
  <script>
  const emailInput = document.getElementById('email');

  emailInput.addEventListener('input', function () {
    const value = this.value;
    const atIndex = value.indexOf('@');

    if (atIndex > -1 && !value.includes('@gmail.com')) {
      this.value = value.split('@')[0] + '@gmail.com';
    }
  });

  document.getElementById('registrationForm').addEventListener('submit', function (e) {
    const email = emailInput.value.trim();
    const gmailPattern = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;

    if (!gmailPattern.test(email)) {
      e.preventDefault(); // Prevent form submission
      alert('Please enter a valid Gmail address.');
    }
  });
</script>


</body>
</html>
