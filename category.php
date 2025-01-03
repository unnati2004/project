<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Art & Craft Gallery</title>
  <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
  <style>
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
    }

/* Header Section */
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color:rgb(20, 173, 220);
    color: #fff;
    padding: 8px;
}

header .logo {
    font-size: 1.5rem;
    font-weight: bold;
}

header nav ul {
    display: flex;
    list-style: none;
}

header nav ul li {
    margin-left: 1.5rem;
}

header nav ul li a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
}

header .profile-cart a {
    width: 30px;
    height: 30px;
    margin-left: 1.5rem;
}
    /* Navigation Bar */
    .navbar {
      background-color: #f4f4f4;
      padding: 10px 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-bottom: 2px solid #ddd;
    }

    .navbar .logo {
      font-weight: bold;
      font-size: 20px;
    }

    .navbar .menu {
      display: flex;
      gap: 20px;
    }

    .navbar .menu a {
      text-decoration: none;
      color: #000;
      font-size: 16px;
    }

    .navbar .menu a:hover {
      text-decoration: underline;
    }

    .navbar .icons {
      display: flex;
      gap: 15px;
      font-size: 20px;
    }

    .icons i {
      cursor: pointer;
    }

    /* Main Content */
    .gallery {
      padding: 20px;
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 15px;
    }

    .card {
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 5px;
      text-align: center;
      padding: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .card img {
      width: 100%;
      height: auto;
      border-radius: 5px;
    }

    .card h3 {
      margin: 10px 0;
      font-size: 18px;
    }

    .card button {
      margin-top: 5px;
      padding: 8px 15px;
      background-color: #007bff;
      border: none;
      color: #fff;
      border-radius: 3px;
      cursor: pointer;
    }

    .card button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
<header>
        <div class="logo">Art & Craft Gallery</div>
        <nav>
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="category.php">Category</a></li>
                <li><a href="#">Orders</a></li>
                <li><a href="#">About</a></li>
            
            <div class="profile-cart">
            <a href="#" class="icon"><i class='bx bx-user'></i></a>
            <a href="#" class="icon"><i class='bx bx-cart-alt'></i></a>
            </ul>
        </div>
        </nav>
        
    </header>

  <!-- Gallery -->
  <div class="gallery">
    <?php
      // Categories data
      $categories = [
        ["Paintings", "paintings.jpg"],
        ["Mosaic Art", "mosaic.jpg"],
        ["Abstract Art", "abstract.jpg"],
        ["Miniature & Diorama", "miniature.jpg"],
        ["Floral Craft", "floral.jpg"],
        ["Home Decor", "home_decor.jpg"],
        ["Quilling", "quilling.jpg"],
        ["Resin Craft", "resin.jpg"],
      ];

      // Loop through categories and generate cards
      foreach ($categories as $category) {
        echo "
        <div class='card'>
          <img src='{$category[1]}' alt='{$category[0]}'>
          <h3>{$category[0]}</h3>
          <button>Explore</button>
        </div>";
      }
    ?>
  </div>
</body>
</html>
