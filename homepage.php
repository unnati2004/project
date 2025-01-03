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

/* Search Bar Section */
.search-section {
    display: flex;
    justify-content: center;
    margin: 2rem 0;
    align-items: center;
}

.search-section label {
    margin-right: 1rem;
    font-size: 1.1rem;
}

.search-section input {
    width: 300px;
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.search-section button {
    padding: 0.5rem 1rem;
    background-color: #333;
    color: #fff;
    border: none;
    margin-left: 0.5rem;
    cursor: pointer;
    font-weight: bold;
}

/* Product Gallery Section */
.product-gallery {
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin: 2rem auto;
    max-width: 800px;
    text-align: center;
}

.product-card {
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 1rem;
    border-radius: 8px;
    width: 200px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    transition: 0.3s ease;
}

.product-card img {
    width: 100%;
    height: 45%;
    margin-bottom: 1rem;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

.product-card p {
    font-size: 1rem;
    font-weight: bold;
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
                <li><a href="#">About</a></li>
            
            <div class="profile-cart">
            <a href="#" class="icon"><i class='bx bx-user'></i></a>
            <a href="#" class="icon"><i class='bx bx-cart-alt'></i></a>
            </ul>
        </div>
        </nav>
        
    </header>

    <!-- Search Bar -->
    <section class="search-section">
        <label for="search">Search Product:</label>
        <input type="text" id="search" placeholder="Search here...">
        <button id="search-button"><i class='bx bx-search'></i></button>
    </section>

    <!-- Product Gallery -->
    <section class="product-gallery">
        <div class="product-card">
            <img src="https://tse1.mm.bing.net/th?id=OIP.fcP39YTGrqshjK6pIsByywHaEK&pid=Api&P=0&h=180" alt="Product Image">
            <p>Paintings</p>
        </div>
        <div class="product-card">
            <img src="https://tse4.mm.bing.net/th?id=OIP.fXdmfV3wFP_8p6jdpkwZZwHaGf&pid=Api&P=0&h=180" alt="Product Image">
            <p>Miniature and diorama art</p>
        </div>
        <div class="product-card">
            <img src="https://tse3.mm.bing.net/th?id=OIP.La2jREViVtaDpRVcDSyIrQHaJ4&pid=Api&P=0&h=180" alt="Product Image">
            <p>Mosiac Art</p>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('search');
    const searchButton = document.getElementById('search-button');

    // Event listener for search button
    searchButton.addEventListener('click', () => {
        const query = searchInput.value.trim();
        if (query) {
            alert(`You searched for: ${query}`);
        } else {
            alert('Please enter a search term!');
        }
    });
});
    </script>
</body>
</html>
