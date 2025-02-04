<?php
// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Check if the customer is logged in
if (!isset($_SESSION['customers'])) {
    // Redirect to login page if the user is not logged in
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Sidebar</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #20addc;
            color: #fff;
            padding: 10px 20px;
        }

        header .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        header nav ul {
            display: flex;
            list-style: none;
            margin: 0;
        }

        header nav ul li {
            margin-left: 20px;
        }

        header nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        header .profile-cart a {
            text-decoration: none;
            color: #fff;
            margin-left: 20px;
            font-size: 20px;
            cursor: pointer;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            right: -300px;
            width: 300px;
            height: 100%;
            background-color: #333;
            color: #fff;
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.3);
            padding: 20px;
            transition: right 0.3s ease;
        }

        .sidebar.open {
            right: 0;
        }

        .sidebar h2 {
            margin-top: 0;
        }

        .sidebar p {
            font-size: 1rem;
            margin: 10px 0;
        }

        .sidebar .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 1.5rem;
            cursor: pointer;
            color: #fff;
        }

        .logout-link {
            margin-top: 20px;
            display: inline-block;
            background-color: #ff4d4d;
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .logout-link:hover {
            background-color: #e63939;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">Art & Craft Gallery</div>
        <nav>
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="category.php">Category</a></li>
                <li><a href="#">Orders</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
            <div class="profile-cart">
                <a href="profile.php"><i class="bx bx-user"></i></a>
                <a href="#"><i class="bx bx-cart-alt"></i></a>
            </div>
        </nav>
    </header>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <span class="close-btn" id="closeSidebar">&times;</span>
        <h2>Customer Information</h2>
        <!-- Make sure to safely access session values using null coalescing operator -->
        <p><strong>Name:</strong> <?php echo htmlspecialchars($_SESSION['customers']['name'] ?? 'N/A'); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['customers']['email'] ?? 'N/A'); ?></p>
        <p><strong>Phone:</strong> <?php echo htmlspecialchars($_SESSION['customers']['phone'] ?? 'N/A'); ?></p>
        <p><strong>Address:</strong> <?php echo htmlspecialchars($_SESSION['customers']['address'] ?? 'N/A'); ?></p>
        <a href="logout.php" class="logout-link">Logout</a>
    </div>

    <script>
        // Elements
        const profileIcon = document.getElementById('profileIcon');
        const sidebar = document.getElementById('sidebar');
        const closeSidebar = document.getElementById('closeSidebar');

        // Show sidebar on profile icon click
        profileIcon.addEventListener('click', () => {
            sidebar.classList.add('open');
        });

        // Close sidebar on close button click
        closeSidebar.addEventListener('click', () => {
            sidebar.classList.remove('open');
        });
    </script>
</body>
</html>
