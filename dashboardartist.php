<?php
include 'connect.php';
/*
// Fetch statistics from database
$productCount = $conn->query("SELECT COUNT(*) AS total FROM products")->fetch_assoc()['total'];
$userCount = $conn->query("SELECT COUNT(*) AS total FROM users")->fetch_assoc()['total'];
$paymentCount = $conn->query("SELECT COUNT(*) AS total FROM payments")->fetch_assoc()['total'];
$orderCount = $conn->query("SELECT COUNT(*) AS total FROM orders")->fetch_assoc()['total'];
$feedbackCount = $conn->query("SELECT COUNT(*) AS total FROM feedback")->fetch_assoc()['total'];
$addressCount = $conn->query("SELECT COUNT(*) AS total FROM addresses")->fetch_assoc()['total'];
$materialCount = $conn->query("SELECT COUNT(*) AS total FROM materials")->fetch_assoc()['total'];
$colorCount = $conn->query("SELECT COUNT(*) AS total FROM colors")->fetch_assoc()['total'];
$categoryCount = $conn->query("SELECT COUNT(*) AS total FROM categories")->fetch_assoc()['total'];
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ethnic Jewellery Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-gray-900 text-white h-screen p-4">
        <h2 class="text-xl font-bold mb-4">Ethnic Jewellery</h2>
        <ul class="space-y-4">
            <li>
                <button id="toggleDashboard" class="w-full text-left">📄 Information</button>
            </li>
            <li>👤 Customer</li>
            <li>📦 Product</li>
            <li>🛒 Orders</li>
            <li>💰 Payment</li>
            <li>🔧 Profile</li>
            <li>🚪 Logout</li>
        </ul>
    </aside>

     <!-- Main Content -->
     <div class="flex-1 p-6">
        <!-- Product Actions -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-yellow-300 p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold">Add Products</h3>
                <p>Increase your product range by adding new items to your store.</p>
                <a href="add_product.php" class="block mt-4 bg-orange-600 text-white px-4 py-2 rounded-md">ADD ➜</a>
            </div>
            <div class="bg-yellow-300 p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold">Update Products</h3>
                <p>Easily modify product information, including name, description, and price.</p>
                <a href="update_product.php" class="block mt-4 bg-red-600 text-white px-4 py-2 rounded-md">UPDATE ➜</a>
            </div>
        </div>

        <!-- Category, Colors, Materials -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            <div class="bg-purple-300 p-6 rounded-lg text-center">
                <h3 class="text-xl font-semibold">ADD MATERIALS</h3>
                <a href="materials.php" class="mt-4 block bg-purple-600 text-white px-4 py-2 rounded-md">View Materials</a>
            </div>
            <div class="bg-orange-300 p-6 rounded-lg text-center">
                <h3 class="text-xl font-semibold">ADD COLORS</h3>
                <a href="colors.php" class="mt-4 block bg-orange-600 text-white px-4 py-2 rounded-md">View Colors</a>
            </div>
            <div class="bg-blue-300 p-6 rounded-lg text-center">
                <h3 class="text-xl font-semibold">ADD CATEGORY</h3>
                <a href="categories.php" class="mt-4 block bg-blue-600 text-white px-4 py-2 rounded-md">View Categories</a>
            </div>
        </div>

        <!-- Statistics Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            <div class="bg-green-300 p-6 rounded-lg text-center">
                <h3 class="text-xl font-semibold">TOTAL NO OF PRODUCTS</h3>
                <p class="text-3xl font-bold"><?php echo $productCount; ?></p>
            </div>
            <div class="bg-pink-300 p-6 rounded-lg text-center">
                <h3 class="text-xl font-semibold">TOTAL NO OF USERS</h3>
                <p class="text-3xl font-bold"><?php echo $userCount; ?></p>
            </div>
            <div class="bg-yellow-400 p-6 rounded-lg text-center">
                <h3 class="text-xl font-semibold">TOTAL NO OF PAYMENTS</h3>
                <p class="text-3xl font-bold"><?php echo $paymentCount; ?></p>
            </div>
            <div class="bg-teal-300 p-6 rounded-lg text-center">
                <h3 class="text-xl font-semibold">TOTAL NO OF ORDERS</h3>
                <p class="text-3xl font-bold"><?php echo $orderCount; ?></p>
            </div>
            <div class="bg-blue-400 p-6 rounded-lg text-center">
                <h3 class="text-xl font-semibold">TOTAL NO OF FEEDBACK</h3>
                <p class="text-3xl font-bold"><?php echo $feedbackCount; ?></p>
            </div>
            <div class="bg-red-400 p-6 rounded-lg text-center">
                <h3 class="text-xl font-semibold">TOTAL NO OF ADDRESS</h3>
                <p class="text-3xl font-bold"><?php echo $addressCount; ?></p>
            </div>
            <div class="bg-orange-400 p-6 rounded-lg text-center">
                <h3 class="text-xl font-semibold">TOTAL NO OF MATERIALS</h3>
                <p class="text-3xl font-bold"><?php echo $materialCount; ?></p>
            </div>
            <div class="bg-gray-300 p-6 rounded-lg text-center">
                <h3 class="text-xl font-semibold">TOTAL NO OF COLORS</h3>
                <p class="text-3xl font-bold"><?php echo $colorCount; ?></p>
            </div>
            <div class="bg-green-400 p-6 rounded-lg text-center">
                <h3 class="text-xl font-semibold">TOTAL NO OF CATEGORIES</h3>
                <p class="text-3xl font-bold"><?php echo $categoryCount; ?></p>
            </div>
        </div>
    </div>

    <!-- JavaScript to Toggle Dashboard -->
    <script>
        document.getElementById('toggleDashboard').addEventListener('click', function() {
            let dashboard = document.getElementById('dashboardContent');
            if (dashboard.classList.contains('hidden')) {
                dashboard.classList.remove('hidden');
            } else {
                dashboard.classList.add('hidden');
            }
        });
    </script>

</body>
</html>
