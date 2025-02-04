<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $address = $_POST['address'];
    $quantity_pendant_diamond_necklace = $_POST['quantity_pendant_diamond_necklace'];
    $quantity_royal_necklace = $_POST['quantity_royal_necklace'];

    // Define item prices
    $price_pendant_diamond_necklace = 280;
    $price_royal_necklace = 499;

    // Calculate total amount
    $total_amount = ($quantity_pendant_diamond_necklace * $price_pendant_diamond_necklace) + ($quantity_royal_necklace * $price_royal_necklace);

    // Display order details
    echo "<h2>Order Summary</h2>";
    echo "<p>Address: " . $address . "</p>";
    echo "<p>Pendant Diamond Necklace Quantity: " . $quantity_pendant_diamond_necklace . " x Rs. " . $price_pendant_diamond_necklace . " = Rs. " . ($quantity_pendant_diamond_necklace * $price_pendant_diamond_necklace) . "</p>";
    echo "<p>Royal Necklace Quantity: " . $quantity_royal_necklace . " x Rs. " . $price_royal_necklace . " = Rs. " . ($quantity_royal_necklace * $price_royal_necklace) . "</p>";
    echo "<p>Total Amount: Rs. " . $total_amount . "</p>";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ethnic Jewellery - Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold">Ethnic Jewellery</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="#" class="text-gray-700">Home</a></li>
                    <li><a href="#" class="text-gray-700">Category</a></li>
                    <li><a href="#" class="text-gray-700">Orders</a></li>
                    <li><a href="#" class="text-gray-700">About</a></li>
                    <li><a href="#" class="text-gray-700"><i class="fas fa-shopping-cart"></i><span class="ml-1">4</span></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold mb-4">Shopping Cart</h2>
        <div class="bg-white shadow rounded-lg p-4">
            <table class="w-full">
                <thead>
                    <tr>
                        <th class="text-left py-2">Description</th>
                        <th class="text-left py-2">Quantity</th>
                        <th class="text-left py-2">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2">
                            <img src="pendant-diamond-necklace.jpg" alt="Pendant Diamond Necklace" class="w-16 h-16 inline-block mr-2">
                            <span>Pendant Diamond Necklace</span>
                        </td>
                        <td class="py-2">
                            <input type="number" name="quantity_pendant_diamond_necklace" value="1" class="w-12 border rounded text-center">
                        </td>
                        <td class="py-2">Rs. 280</td>
                    </tr>
                    <tr>
                        <td class="py-2">
                            <img src="royal-necklace.jpg" alt="Royal Necklace" class="w-16 h-16 inline-block mr-2">
                            <span>Royal Necklace</span>
                        </td>
                        <td class="py-2">
                            <input type="number" name="quantity_royal_necklace" value="1" class="w-12 border rounded text-center">
                        </td>
                        <td class="py-2">Rs. 499</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mt-8">
            <div class="bg-white shadow rounded-lg p-4">
                <h3 class="text-xl font-bold mb-4">Select Address</h3>
                <p>If you have not filled your address, please click below to fill it: <a href="#" class="text-blue-500">Fill Address</a></p>
                <select name="address" class="w-full border rounded p-2 mt-2">
                    <option>Select Address</option>
                    <option>Work 126 abc abc mum mum 123456</option>
                </select>
            </div>
            <div class="bg-white shadow rounded-lg p-4 mt-4">
                <h3 class="text-xl font-bold mb-4">Order Summary</h3>
                <p class="text-lg">Total: <span class="font-bold">Rs. 1168</span></p>
                <button type="submit" class="bg-orange-500 text-white px-4 py-2 rounded mt-4">Checkout</button>
            </div>
        </div>
    </main>
</body>
</html>
