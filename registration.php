<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Page</title>
  <link rel="stylesheet" type="text/css" href="styling.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
    
  </style>
</head>
<body>
  <div class="container">
    <form id="registrationForm" action="insert.php" method="post">
      <h2>Registration</h2>
      <div class="form-group">
        <label for="name">Full Name</label>
        <i class='bx bx-rename'></i>
        <input type="text" id="name" name="name" placeholder="Enter your full name" required>
      </div>
      <div class="form-group">
        <label for="user_name">Username</label>
        <i class='bx bx-user'></i>
        <input type="text" id="user_name" name="user_name" placeholder="Choose a username" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <i class='bx bx-envelope'></i>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label for="contact">Contact Number</label>
        <i class='bx bx-phone-call'></i>
        <input type="tel" id="contact" name="contact" placeholder="Enter your contact number" pattern="\d{10}" 
    maxlength="10" title="Contact number must be 10 digits." required>
      </div>
      <div class="form-group">
        <label for="address">Location Address</label>
        <i class='bx bx-location-plus'></i>
        <textarea id="address" name="address" placeholder="Enter your address" rows="3" required></textarea>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <i class='bx bx-key'></i>
        <input type="password" id="password" name="password" placeholder="Enter a password" required>
      </div>
      <div class="form-group">
        <label for="confirm_password">Confirm Password</label>
        <i class='bx bx-key'></i>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
        <div class="error-message" id="passwordError">Password do not match!</div>
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
