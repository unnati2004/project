<?php
session_start();

// If the user is not logged in (email not in session), redirect to login
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}

// Logout functionality
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: login.php');
    exit();
}

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customerdetails";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the logged-in user's email from session
$email = $_SESSION['email'];

// Fetch user data based on email
$sql = "SELECT * FROM customers WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output the user's details
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $user_name = $row['user_name'];
    $email = $row['email'];
    $contact = $row['contact'];
    $address = $row['address'];
    $shipping_address = $row['shipping_address']; // Assuming your table has a column for alternate shipping address
} else {
    echo "0 results found for this email.";
}

$success_message = "";

// Save changes if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $user_name = $_POST['user_name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $shipping_address = $_POST['shipping_address'];

    $update_sql = "UPDATE customers SET name = '$name', user_name = '$user_name', contact = '$contact', address = '$address', shipping_address = '$shipping_address' WHERE email = '$email'";

    if ($conn->query($update_sql) === TRUE) {
        $success_message = "Details updated successfully.";
    } else {
        echo "Error updating details: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art & Craft Gallery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
</head>
<body class="bg-gray-100 font-sans" style="font-family: 'Arial', sans-serif;"> 

    <!-- Header -->
    <header class="flex justify-between items-center bg-blue-500 text-white p-3">
        <div class="text-2xl">Art & Craft Gallery</div>
        <nav>
            <ul class="flex list-none space-x-8">
                <li><a href="homepage.php" class="text-white text-base no-underline">Home</a></li>
                <li><a href="category.php" class="text-white text-base no-underline">Category</a></li>
                <li><a href="#" class="text-white text-base no-underline">Orders</a></li>
                <li><a href="about.php" class="text-white text-base no-underline">About</a></li>
                <div class="ml-6 flex space-x-6">
                    <a href="#" class="text-white text-base"><i class='bx bx-heart'></i></a>
                    <a href="profile.php" class="text-white text-base"><i class='bx bx-user'></i></a>
                    <a href="cart.php" class="text-white text-base"><i class='bx bx-cart-alt'></i></a>
                    <a href="?logout=true" name="Logout" class="text-white text-base"><i class='bx bx-log-out'></i></a>
                </div>
            </ul>
        </nav>
    </header>

    <?php if ($success_message): ?>
        <div id="success-message" class="bg-green-100 border-t-4 border-green-500 text-green-700 p-4" role="alert">
            <p class="font-bold"><?php echo $success_message; ?></p>
        </div>
    <?php endif; ?>

    <!-- Profile Section -->
    <div class="container mx-auto px-4 py-4">
        <h2 class="text-xl font-semibold mb-4">Profile</h2>

        <!-- Update Details Form -->
        <form action="" method="POST" class="bg-white shadow-md rounded-md p-4">
            <h3 class="text-lg font-medium mb-3">Personal Details</h3>

            <!-- Name and Username -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mb-3">
                <div>
                    <label for="name" class="block text-sm font-medium mb-1">Name</label>
                    <input type="text" id="name" name="name" value="<?php echo isset($name) ? $name : ''; ?>" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:ring-blue-300 focus:border-blue-500">
                </div>
                <div>
                    <label for="user_name" class="block text-sm font-medium mb-1">Username</label>
                    <input type="text" id="user_name" name="user_name" value="<?php echo isset($user_name) ? $user_name : ''; ?>" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:ring-blue-300 focus:border-blue-500">
                </div>
            </div>

            <!-- Email and Contact Number -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mb-3">
                <div>
                    <label for="email" class="block text-sm font-medium mb-1">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:ring-blue-300 focus:border-blue-500" disabled>
                </div>
                <div>
                    <label for="contact" class="block text-sm font-medium mb-1">Contact No</label>
                    <input type="text" id="contact" name="contact" value="<?php echo isset($contact) ? $contact : ''; ?>" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:ring-blue-300 focus:border-blue-500">
                </div>
            </div>

            <!-- Address -->
            <div class="mb-3">
                <label for="address" class="block text-sm font-medium mb-1">Address</label>
                <textarea id="address" name="address" rows="2" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:ring-blue-300 focus:border-blue-500"><?php echo isset($address) ? $address : ''; ?></textarea>
            </div>

            <!-- Alternate Shipping Address -->
            <div class="mb-3">
                <label for="shipping_address" class="block text-sm font-medium mb-1">Alternate Shipping Address</label>
                <textarea id="shipping_address" name="shipping_address" rows="2" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:ring-blue-300 focus:border-blue-500" placeholder="Enter your alternate shipping address"><?php echo isset($shipping_address) ? $shipping_address : ''; ?></textarea>
            </div>

            <!-- Confirm Button -->
            <div class="flex justify-between items-center">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600 focus:ring-2 focus:ring-blue-300">Save</button>
            </div>
        </form>
    </div>

    <script>
        // Automatically hide success message after 2 seconds
        window.onload = function() {
            setTimeout(function() {
                var message = document.getElementById("success-message");
                if (message) {
                    message.style.display = "none";
                }
            }, 2000);
        };
    </script>
</body>
</html>
