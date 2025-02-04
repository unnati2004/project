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

  <!-- Gallery -->
  <div class="p-5 grid grid-cols-4 gap-6">
    <?php
      // Categories data with images
      $categories = [
        ["Paintings", "https://tse3.mm.bing.net/th?id=OIP.FWX5--TYx2ZpbmEnpixkzgHaHa&pid=Api&P=0&h=180"],
        ["Mosaic Art", "https://tse3.mm.bing.net/th?id=OIP.9XQM6HEYAXEwDgkmEKOIBQHaHa&pid=Api&P=0&h=180"],
        ["Abstract Art", "https://tse4.mm.bing.net/th?id=OIP.5LTzT6_P3L8WRFUNp03GwwHaHa&pid=Api&P=0&h=180"],
        ["Miniature & Diorama", "https://tse3.mm.bing.net/th?id=OIP.PLUXmkWKIugXIZ15_DYQqAHaHC&pid=Api&P=0&h=180"],
        ["Floral Craft", "https://tse3.mm.bing.net/th?id=OIP.6SVvJMHmaYV-FOdwq_FCkwHaHX&pid=Api&P=0&h=180"],
        ["Home Decor", "https://tse2.mm.bing.net/th?id=OIP.6dF-_Y0FYdjcyot4uaDFmgHaHa&pid=Api&P=0&h=180"],
        ["Quilling", "https://tse3.mm.bing.net/th?id=OIP.fN-jaqYkv7q68KtVOSJHcQHaHa&pid=Api&P=0&h=180"],
        ["Resin Craft", "https://tse3.mm.bing.net/th?id=OIP.gF-oQBr6cQlfZKBEMgfnMwHaHa&pid=Api&P=0&h=180"],
      ];

      // Loop through categories and generate cards
      foreach ($categories as $category) {
        echo "
        <div class='bg-white border border-gray-300 rounded-lg text-center p-4 shadow-lg'>
          <img src='{$category[1]}' alt='{$category[0]}' class='w-full h-auto rounded mb-2'>
          <h3 class='text-lg mb-2'>{$category[0]}</h3>
          <button class='mt-2 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-800'>Explore</button>
        </div>";
      }
    ?>
  </div>
</body>
</html>
