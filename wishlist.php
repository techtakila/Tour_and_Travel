<?php include('navbar.php') ?>
<section class="relative w-full h-[200px] sm:h-[300px] md:h-[280px] lg:h-[350px] xl:h-[300px] flex items-center px-6 sm:px-10 md:px-16 bg-[#0f3a47]/90">
   <img alt="Couple looking at ocean from car side view, tinted with dark teal overlay" id="img" class="absolute inset-0 w-full h-full object-cover object-center -z-10" decoding="async" height="380" loading="lazy" src="https://wanderlustcrew.com/wp-content/uploads/2018/08/Best-Road-Trips-USA-Canada-Mexico-1.jpg" width="1920"/>
   <div class="max-w-5xl">
    <h1 class="text-white text-4xl sm:text-5xl font-serif font-bold leading-tight">
     wishlist
    </h1>
    <nav aria-label="Breadcrumb" class="mt-3 text-white text-sm font-normal flex space-x-2 select-none">
     <a class="hover:underline" href="index.php">
      Home
     </a>
     <span class="text-white/70">
      /
     </span>
     <span aria-current="page" class="opacity-80">
      My Wishlist
     </span>
    </nav>
   </div>
  </section>
  <bR><br><br>
  <head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>Wishlist - Sarvana</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap"
    rel="stylesheet"
  />
  <style>
    body {
      font-family: "Playfair Display", serif;
    }
    #wishlistItems {
      max-height: 600px;
      overflow-y: auto;
    }
  </style>
</head>
<body class="bg-white text-[#0f3a47]">
<aside>
   
   <a
     href="shop.php"
     class="inline-block bg-[#0f3a47] text-white font-semibold py-3 px-6 rounded-tr-3xl rounded-bl-3xl hover:bg-[#0a2730] transition"
     >Go to Shop</a
   >
 
</aside>
  <div class="min-h-screen max-w-[1100px] mx-auto p-6 md:p-10">

    <header class="mb-8 flex items-center justify-between">
      <h1 class="text-3xl font-semibold">Wishlist</h1>
      <button
        id="clearWishlistBtn"
        class="bg-[#0f3a47] text-white px-6 py-2 rounded-tr-3xl rounded-bl-3xl hover:bg-[#0a2730] transition"
        type="button"
        title="Clear Wishlist"
      >
        Clear
      </button>
    </header>
    <main>
      <div
        id="wishlistItems"
        class="space-y-6 border border-gray-300 rounded-xl p-6 bg-[#d9f2fb]"
      >
        <p class="text-gray-600 italic" id="emptyWishlistMsg">
          Your wishlist is empty.
        </p>
      </div>
    </main>
    <footer class="mt-10 text-center text-gray-500 text-sm">
      &copy; 2025 Sarvana Travels
    </footer>
  </div>
  
  <script>
    const wishlistItemsContainer = document.getElementById("wishlistItems");
    const emptyWishlistMsg = document.getElementById("emptyWishlistMsg");
    const clearWishlistBtn = document.getElementById("clearWishlistBtn");

    let wishlist = JSON.parse(localStorage.getItem("wishlist")) || [];

    function renderStars(rating) {
      const fullStars = Math.floor(rating);
      const halfStar = rating - fullStars >= 0.5;
      let starsHtml = "";
      for (let i = 0; i < fullStars; i++) {
        starsHtml +=
          '<i class="fas fa-star text-yellow-400" aria-hidden="true"></i>';
      }
      if (halfStar) {
        starsHtml +=
          '<i class="fas fa-star-half-alt text-yellow-400" aria-hidden="true"></i>';
      }
      const emptyStars = 5 - fullStars - (halfStar ? 1 : 0);
      for (let i = 0; i < emptyStars; i++) {
        starsHtml +=
          '<i class="far fa-star text-yellow-400" aria-hidden="true"></i>';
      }
      return starsHtml;
    }

    function renderWishlist() {
      wishlistItemsContainer.innerHTML = "";
      if (wishlist.length === 0) {
        emptyWishlistMsg.style.display = "block";
        return;
      }
      emptyWishlistMsg.style.display = "none";

      wishlist.forEach((product) => {
        const div = document.createElement("div");
        div.className =
          "flex items-center gap-4 border border-gray-300 rounded-lg p-3 bg-white";
        div.innerHTML = `
          <img src="${product.img}" alt="${product.alt}" class="w-20 h-20 object-contain rounded" />
          <div class="flex-1">
            <h2 class="font-semibold text-lg">${product.name}</h2>
            <p class="text-sm text-gray-600">₹${product.priceMin.toLocaleString()} – ₹${product.priceMax.toLocaleString()}</p>
            <div class="text-yellow-400" aria-label="Rating: ${product.rating} out of 5 stars">${renderStars(product.rating)}</div>
          </div>
          <button class="text-red-600 hover:text-red-800" title="Remove from wishlist" aria-label="Remove ${product.name} from wishlist" onclick="removeFromWishlist('${product.name}')">
            <i class="fas fa-trash-alt fa-lg"></i>
          </button>
        `;
        wishlistItemsContainer.appendChild(div);
      });
    }

    function removeFromWishlist(productName) {
      const index = wishlist.findIndex((p) => p.name === productName);
      if (index !== -1) {
        wishlist.splice(index, 1);
        saveWishlist();
        renderWishlist();
      }
    }

    function saveWishlist() {
      localStorage.setItem("wishlist", JSON.stringify(wishlist));
    }

    clearWishlistBtn.addEventListener("click", () => {
      if (confirm("Are you sure you want to clear your wishlist?")) {
        wishlist = [];
        saveWishlist();
        renderWishlist();
      }
    });

    // Initialize
    renderWishlist();
  </script>
</body>
</html>

  <br><br><br>
<?php include("footer.php") ?>