<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CreativeCrafts | Your Art & Craft Store</title>
  <link rel="stylesheet" href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
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



    #hero {
      background-color:rgb(244, 66, 66);
      color: #fff;
      text-align: center;
      padding: 50px 20px;
    }

    #hero h1 {
      font-size: 2.5em;
      margin-bottom: 10px;
    }

    #hero p {
      font-size: 1.2em;
      margin-bottom: 20px;
    }

    .btn {
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      text-decoration: none;
      font-weight: bold;
      border-radius: 5px;
    }

    #features {
      background-color: #fff;
      padding: 20px;
    }

    #features .container {
      display: flex;
      gap: 20px;
      justify-content: space-around;
      align-items: center;
    }

    #features img {
      width: 100%;
      height: auto;
      border-radius: 10px;
    }

    .category-section {
      display: flex;
      justify-content: space-between;
      padding: 30px 20px;
    }

    .category-section .card {
      background-color: #fff;
      border-radius: 10px;
      overflow: hidden;
      width: 48%;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .category-section .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .category-section .card .card-content {
      padding: 20px;
    }

    .category-section .card .card-content h3 {
      font-size: 1.5em;
      margin-bottom: 10px;
    }

    .category-section .card .card-content p {
      margin-bottom: 15px;
      color: #555;
    }

    footer {
      background-color: grey;
      color: #fff;
      text-align: center;
      padding: 10px 0;
      margin-top: 20px;
    }

    footer .container p {
      margin: 0;
    }

   
  </style>
  <!--
  <script>
    // JavaScript for interactive elements
    function showAlert(message) {
      alert(message);
    }

    document.addEventListener("DOMContentLoaded", () => {
      document.querySelectorAll(".btn").forEach(btn => {
        btn.addEventListener("click", (event) => {
          event.preventDefault();
          showAlert("This feature is coming soon!");
        });
      });
    });
  </script>
  -->
</head>
<body>
  <header>
  <div class="logo">Art & Craft Gallery</div>
        <nav>
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="#">Category</a></li>
                <li><a href="#">Orders</a></li>
                <li><a href="#">About</a></li>
            
            <div class="profile-cart">
            <a href="#" class="icon"><i class='bx bx-user'></i></a>
            <a href="#" class="icon"><i class='bx bx-cart-alt'></i></a>
            </ul>
        </div>
        </nav>
  </header>

  <section id="hero">
    <h1>Artisan Crafts</h1>
    <p>Discover handmade crafts from skilled artisans around the world. Unleash your creativity with premium supplies!</p>
    <a href="homepage.php" class="btn">Shop Now</a>
  </section>

  <section id="features" class="category-section">
    <div class="card">
      <img src="crafts1.jpg" alt="Handmade Jewelry">
      <div class="card-content">
        <h3>Handmade Artworks and Paintings</h3>
        <p>Discover unique, handmade arts and paintings.</p>
        <a href="#" class="btn">Shop Now</a>
      </div>
    </div>

    <div class="card">
      <img src="crafts2.jpg" alt="Home Decor">
      <div class="card-content">
        <h3>Home Decor</h3>
        <p>Add a touch of elegance to your space with our artisan home decor.</p>
        <a href="#" class="btn">Shop Now</a>
      </div>
    </div>
  </section>

  <footer class="footer">
        <p>To explore more products <a href="login.php">Login Now →</a></p>
    </footer>

</body>
</html>