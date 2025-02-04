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

    <!-- Search Bar -->
    <section class="flex justify-center items-center my-8">
        <label for="search" class="mr-4 text-lg">Search Product:</label>
        <input type="text" id="search" class="w-72 p-2 border border-gray-300 rounded" placeholder="Search here...">
        <button id="search-button" class="ml-2 p-2 bg-gray-800 text-white font-bold rounded"><i class='bx bx-search'></i></button>
    </section>

    <!-- Product Gallery -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-screen-lg mx-auto text-center">
        <div class="bg-white border border-gray-300 p-4 rounded-lg shadow-lg transform transition-transform hover:scale-105">
            <img src="https://tse1.mm.bing.net/th?id=OIP.fcP39YTGrqshjK6pIsByywHaEK&pid=Api&P=0&h=180" alt="Paintings" class="w-full h-36 mb-4">
            <p class="font-bold">Paintings</p>
            <a href="paintings.php" class="bg-blue-600 text-white py-2 px-4 rounded font-bold shadow hover:shadow-lg">Explore</a>
        </div>
        <div class="bg-white border border-gray-300 p-4 rounded-lg shadow-lg transform transition-transform hover:scale-105">
            <img src="https://tse4.mm.bing.net/th?id=OIP.fXdmfV3wFP_8p6jdpkwZZwHaGf&pid=Api&P=0&h=180" alt="Miniature Art" class="w-full h-36 mb-4">
            <p class="font-bold">Miniature and Diorama Art</p>
            <a href="mda.php" class="bg-blue-600 text-white py-2 px-4 rounded font-bold shadow hover:shadow-lg">Explore</a>
        </div>
        <div class="bg-white border border-gray-300 p-4 rounded-lg shadow-lg transform transition-transform hover:scale-105">
            <img src="https://tse3.mm.bing.net/th?id=OIP.La2jREViVtaDpRVcDSyIrQHaJ4&pid=Api&P=0&h=180" alt="Mosaic Art" class="w-full h-36 mb-4">
            <p class="font-bold">Mosaic Art</p>
            <a href="mosaicart.php" class="bg-blue-600 text-white py-2 px-4 rounded font-bold shadow hover:shadow-lg">Explore</a>
        </div>
        <div class="bg-white border border-gray-300 p-4 rounded-lg shadow-lg transform transition-transform hover:scale-105">
            <img src="https://tse4.mm.bing.net/th?id=OIP.43kXpZThM8lzYuYunjpMGwHaLH&pid=Api&P=0&h=180" alt="Wood Carving" class="w-full h-36 mb-4">
            <p class="font-bold">Wood Carving</p>
            <a href="woodcarving.php" class="bg-blue-600 text-white py-2 px-4 rounded font-bold shadow hover:shadow-lg">Explore</a>
        </div>
        <div class="bg-white border border-gray-300 p-4 rounded-lg shadow-lg transform transition-transform hover:scale-105">
            <img src="https://tse4.mm.bing.net/th?id=OIP.KqhxJS3hNkcUkRGmq3iUjAHaHg&pid=Api&P=0&h=180" alt="Pottery" class="w-full h-36 mb-4">
            <p class="font-bold">Mandala Art</p>
            <a href="pottery.php" class="bg-blue-600 text-white py-2 px-4 rounded font-bold shadow hover:shadow-lg">Explore</a>
        </div>
        <div class="bg-white border border-gray-300 p-4 rounded-lg shadow-lg transform transition-transform hover:scale-105">
            <img src="https://tse2.mm.bing.net/th?id=OIP.LaOYM8IhhuIej6vuNnaH5AHaFj&pid=Api&P=0&h=180" alt="Origami Art" class="w-full h-36 mb-4">
            <p class="font-bold">Origami Art</p>
            <a href="origami.php" class="bg-blue-600 text-white py-2 px-4 rounded font-bold shadow hover:shadow-lg">Explore</a>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('search');
            const searchButton = document.getElementById('search-button');

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