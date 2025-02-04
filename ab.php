<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ethnic Jewellery - Register & Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* General Styles */
        /* styles.css */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #fff;
    border-bottom: 1px solid #ddd;
}

.logo {
    display: flex;
    align-items: center;
}

.logo img {
    height: 40px;
    margin-right: 10px;
}

nav ul {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
}

nav ul li {
    margin-right: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #000;
}

.cart-icon img {
    height: 30px;
}

main {
    display: flex;
    padding: 20px;
}

.images {
    display: flex;
    flex-direction: column;
    gap: 20px;
    margin-right: 20px;
}

.images img {
    width: 200px;
    height: auto;
    border-radius: 10px;
}

.content {
    max-width: 600px;
}

.content h2 {
    color: #6c63ff;
}

.content h1 {
    font-size: 2em;
    margin: 10px 0;
}

.content p {
    margin: 10px 0;
    line-height: 1.6;
}

<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Ethnic Jewellery Logo">
            <span>Ethnic Jewellery</span>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Category</a></li>
                <li><a href="#">Orders</a></li>
                <li><a href="#">About</a></li>
            </ul>
            <div class="cart-icon">
                <img src="cart.png" alt="Shopping Cart">
            </div>
        </nav>
    </header>
    <main>
        <section class="images">
            <img src="ring.jpg" alt="Ring">
            <img src="traditional-attire.jpg" alt="Person in Traditional Attire">
            <img src="bracelets.jpg" alt="Hands with Bracelets">
        </section>
        <section class="content">
            <h2>Why Choose Us</h2>
            <h1>Find the Perfect Jewel for Every Occasion</h1>
            <p>Explore our exquisite collection of jewelry, designed to make your special moments even more memorable. Whether it's a gift for a loved one or a treat for yourself, our jewelry is crafted with care and attention to detail.</p>
            <p>With a focus on quality and craftsmanship, our jewelry pieces are made to last. From classic designs to contemporary styles, we have something for everyone. Discover the perfect piece to complement your style and make a statement.</p>
        </section>
    </main>
</body>
</html>

    