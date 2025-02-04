<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paintings</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <header class="bg-blue-500 text-white py-4 px-6 flex justify-between items-center">
        <h1 class="text-2xl font-bold">Paintings</h1>
        <a href="homepage.php" class="hover:text-gray-200">Back to Gallery</a>
    </header>

    <main class="py-8 px-6">
        <h2 class="text-xl font-bold mb-4">Available Paintings</h2>
        <div class="grid grid-cols-4 gap-8">
            <!-- Painting Card -->
            <div class="bg-white rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-105 duration-200">
            <img src="https://tse1.mm.bing.net/th?id=OIP.fcP39YTGrqshjK6pIsByywHaEK&pid=Api&P=0&h=180" alt="Painting 1" class="w-full rounded-t-lg">
                <div class="p-4">
                    <h3 class="font-medium text-gray-900">Abstract Art</h3>
                    <p class="text-sm text-gray-700">Price: ₹500</p>
                    <button class="mt-2 w-full px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Buy Now</button>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-105 duration-200">
                <img src="https://tse3.mm.bing.net/th?id=OIP.Pt7r-xpx4IE7YUYV59A56gHaFj&pid=Api&P=0&h=180" alt="Painting 2" class="w-full rounded-t-lg">
                <div class="p-4">
                    <h3 class="font-medium text-gray-900">Landscape</h3>
                    <p class="text-sm text-gray-700">Price: ₹700</p>
                    <button class="mt-2 w-full px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Buy Now</button>
                </div>
            </div>
            <!-- Add more painting cards here -->
        </div>
    </main>
</body>
</html>
