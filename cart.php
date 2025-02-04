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
            </div>
          </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <div class="container mx-auto my-10 grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Cart Details -->
        <div class="lg:col-span-2 bg-white rounded shadow p-6">
            <h2 class="text-2xl font-semibold mb-4">Shopping Cart</h2>
            <table class="w-full text-left border-collapse border-b border-gray-200">
                <thead>
                    <tr>
                        <th class="py-3 font-medium">Description</th>
                        <th class="py-3 font-medium">Quantity</th>
                        <th class="py-3 font-medium">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- If cart is empty -->
                    <tr>
                        <td colspan="3" class="py-5 text-center">
                            <img src="https://tse4.mm.bing.net/th?id=OIP.suAJKKHBBhIQILHm8aiaTQAAAA&pid=Api&P=0&h=180" alt="Empty Cart" class="mx-auto mb-4">
                            <p class="text-lg font-semibold">Explore More Products</p>
                            <p class="text-sm text-gray-500">Your cart is empty!!</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Sidebar: Address and Summary -->
        <div class="bg-white rounded shadow p-6">
            <!-- Address Section -->
            <div>
                <h3 class="text-xl font-semibold mb-3">Select Address</h3>
                <p class="text-sm text-gray-500 mb-4">If you have not filled your address, please click below to fill it: 
                    <a href="#" class="text-blue-500">Fill Address</a>
                </p>
                <select class="w-full border-gray-300 rounded-lg p-2">
                    <option>Select Address</option>
                    <!-- Dynamically populated addresses -->
                </select>
            </div>
            
            <!-- Order Summary -->
            <div class="mt-6">
                <h3 class="text-xl font-semibold mb-3">Order Summary</h3>
                <div class="flex justify-between text-gray-700 border-t border-gray-300 pt-4">
                    <span class="text-lg font-medium">Total</span>
                    <span class="text-lg font-medium">Rs.0</span>
                </div>
                <button class="w-full bg-orange-600 text-white py-2 rounded mt-4 hover:bg-orange-700">Checkout</button>
            </div>
        </div>
    </div>
</body>
</html>
