<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>India Travel Package</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<style>
body {
  font-family: 'Roboto', sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

header {
  background-color: #333;
  color: white;
  padding: 10px 0;
  text-align: center;
}

header nav a {
  color: white;
  margin: 0 15px;
  text-decoration: none;
  font-weight: 500;
}

.hero {
  position: relative;
  width: 100%;
  height: 400px;
  overflow: hidden;
}

.hero img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.hero-content {
  position: absolute;
  bottom: 20px;
  left: 20px;
  color: white;
  background-color: rgba(0, 0, 0, 0.5);
  padding: 10px;
}

.package-details, .pricing, .gallery {
  padding: 20px;
  margin: 20px;
}

.gallery-images {
  display: flex;
  gap: 10px;
}

.gallery-images img {
  width: 30%;
  border-radius: 5px;
}

footer {
  background-color: #333;
  color: white;
  text-align: center;
  padding: 10px;
  position: fixed;
  width: 100%;
  bottom: 0;
}
</style>
</head>
<body>
  <header>
    <nav>
      <a href="index.php">Home</a>
      <a href="destination.php">Destinations</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>

  <section class="hero">
    <img src="https://storage.googleapis.com/a1aa/image/f2d32dfc-466f-48df-6b6a-f11677d3b9f3.jpg" alt="India">
    <div class="hero-content">
      <h1>Explore India</h1>
      <p>Discover the rich culture, history, and landscapes of India.</p>
    </div>
  </section>

  <section class="package-details">
    <h2>Package Highlights</h2>
    <ul>
      <li>Visit the Taj Mahal</li>
      <li>Explore the backwaters of Kerala</li>
      <li>Experience the vibrant markets of Jaipur</li>
      <li>Enjoy traditional Indian cuisine</li>
    </ul>
  </section>

  <section class="pricing">
    <h2>Pricing</h2>
    <p>Starting from $150</p>
    <button id="book-now"><a href="booking.php">Book Now</a></button>
  </section>

  <section class="gallery">
    <h2>Gallery</h2>
    <div class="gallery-images">
      <img src="image1.jpg" alt="Taj Mahal">
      <img src="image2.jpg" alt="Kerala Backwaters">
      <img src="image3.jpg" alt="Jaipur Market">
    </div>
  </section>

  <footer>
    <p>&copy; 2025 Wanderlust Crew</p>
  </footer>

  

</body>
</html>
