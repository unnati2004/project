<?php
session_start();
include('connect.php');
/*
// Fetch data
$sql = "SELECT COUNT(*) as total_products FROM products";
$result = $conn->query($sql);
$total_products = $result->fetch_assoc()['total_products'];

$sql = "SELECT COUNT(*) as total_payments FROM payments";
$result = $conn->query($sql);
$total_payments = $result->fetch_assoc()['total_payments'];

$sql = "SELECT COUNT(*) as total_orders FROM orders";
$result = $conn->query($sql);
$total_orders = $result->fetch_assoc()['total_orders'];

$sql = "SELECT COUNT(*) as total_categories FROM categories";
$result = $conn->query($sql);
$total_categories = $result->fetch_assoc()['total_categories'];
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist and Crafters Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <div class="container mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4">Artist and Crafters Dashboard</h1>
        <div class="flex justify-between items-center mb-4">
            <div class="flex items-center">
                <input type="checkbox" id="artCraftGallery" class="mr-2">
                <label for="artCraftGallery" class="text-lg">Art & Craft Gallery</label>
            </div>
            <div class="text-lg">👤</div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="md:col-span-1">
                <ul class="space-y-4">
                    <li class="text-lg font-semibold">Information</li>
                    <li class="text-lg">Customer's Orders</li>
                    <li class="text-lg">Payment</li>
                    <li class="text-lg">Logout</li>
                </ul>
            </div>
            <div class="md:col-span-2">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <button class="bg-blue-500 text-white py-2 px-4 rounded">Add ➔</button>
                    <button class="bg-blue-500 text-white py-2 px-4 rounded">Update ➔</button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="bg-gray-200 p-4 rounded">
                        <p class="text-lg">Total no of products</p>
                        <p class="text-2xl font-bold">5</p>
                    </div>
                    <div class="bg-gray-200 p-4 rounded">
                        <p class="text-lg">Total no of payments</p>
                        <p class="text-2xl font-bold">1</p>
                    </div>
                    <div class="bg-gray-200 p-4 rounded">
                        <p class="text-lg">Total no of orders</p>
                        <p class="text-2xl font-bold">1</p>
                    </div>
                    <div class="bg-gray-200 p-4 rounded md:col-span-3">
                        <p class="text-lg">Total no of categories</p>
                        <p class="text-2xl font-bold">2</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

