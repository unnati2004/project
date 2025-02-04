<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customerdetails";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Art & Craft Gallery</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
</head>
<body class="bg-gray-100 font-sans" style="font-family: 'Arial', sans-serif; background-image: url('image.jpg')">

    <!-- Header -->
    <header class="flex justify-between items-center bg-red-400 bg-opacity-85 text-white p-3">

    <div class="text-2xl">Art & Craft Gallery</div>
    <ul class="flex list-none space-x-8">
        <li><a href="homepage.php" class="text-white text-base no-underline">Home</a></li>
        <li><a href="category.php" class="text-white text-base no-underline">Category</a></li>
        <li><a href="#" class="text-white text-base no-underline">Orders</a></li>
        <li><a href="about.php" class="text-white text-base no-underline">About</a></li>
        <div class="ml-6 flex space-x-6">
            <a href="#" class="text-white text-base"><i class='bx bx-heart'></i></a>
            <a href="profile.php" class="text-white text-base"><i class='bx bx-user'></i></a>
            <a href="#" class="text-white text-base"><i class='bx bx-cart-alt'></i></a>
        </div>
    </ul>
  </header>

  <!-- Hero Section -->
  <section id="hero" class="text-white text-center py-24 px-5">
    <h1 class="text-4xl lg:text-6xl font-bold mb-4 text-shadow-lg">Artisan Crafts</h1>
    <p class="text-lg lg:text-xl mb-5 text-shadow-md">
      Discover handmade crafts from skilled artisans around the world. Unleash your creativity with premium supplies!
    </p>
    <a href="homepage.php" class="bg-pink-300 bg-opacity-90 text-white py-2 px-5 rounded shadow-lg font-bold hover:shadow-xl">Shop Now</a>
  </section>

  <!-- Features Section -->
  <section id="features" class="flex flex-col md:flex-row justify-around items-start py-10 px-5 space-y-6 md:space-y-0 md:space-x-6">
    <!-- Card 1 -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden w-full md:w-1/2">
      <div class="p-6">
        <h3 class="text-2xl font-bold mb-5">Handmade Artworks and Paintings</h3>
        <p class="text-gray-600 mb-5">Discover unique, handmade arts and paintings.</p>
        <a href="#" class="bg-pink-300 bg-opacity-80 text-white py-2 px-4 rounded font-bold shadow hover:shadow-lg">Shop Now</a>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden w-full md:w-1/2">
      <div class="p-6">
        <h3 class="text-2xl font-bold mb-5">Home Decor</h3>
        <p class="text-gray-600 mb-5">
          Add a touch of elegance to your space with our artisan home decor.
        </p>
        <a href="#" class="bg-pink-300 bg-opacity-80 text-white py-2 px-4 rounded font-bold shadow hover:shadow-lg">Shop Now</a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-pink-100 text-black text-center py-4">
    <p>To explore more products <a href="login.php" class="text-blue-500 underline">Login Now →</a></p>
  </footer>
</body>
</html>
