<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>Shop - Lets GO Site</title>
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
    /* List view styles */
    .list-view > article {
      flex-direction: row;
      border: 1px solid #e5e7eb;
      border-radius: 0.5rem;
      overflow: hidden;
    }
    .list-view > article img {
      width: 200px;
      height: auto;
      object-fit: contain;
      padding: 1.5rem;
      flex-shrink: 0;
    }
    .list-view > article > div {
      padding: 1.5rem;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
    }
  </style>
</head>
<body class="bg-white text-[#0f3a47]">
  <?php include('navbar.php') ?>
  <section class="relative w-full h-[200px] sm:h-[300px] md:h-[280px] lg:h-[350px] xl:h-[300px] flex items-center px-6 sm:px-10 md:px-16 bg-[#0f3a47]/90">
    <img alt="Couple looking at ocean from car side view, tinted with dark teal overlay" id="img" class="absolute inset-0 w-full h-full object-cover object-center -z-10" decoding="async" height="380" loading="lazy" src="https://wanderlustcrew.com/wp-content/uploads/2018/08/Best-Road-Trips-USA-Canada-Mexico-1.jpg" width="1920"/>
    <div class="max-w-5xl">
      <h1 class="text-white text-4xl sm:text-5xl font-serif font-bold leading-tight">
        Shop
      </h1>
      <nav aria-label="Breadcrumb" class="mt-3 text-white text-sm font-normal flex space-x-2 select-none">
        <a class="hover:underline" href="index.php">
          Home
        </a>
        <span class="text-white/70">
          /
        </span>
        <span aria-current="page" class="opacity-80">
          Shop
        </span>
      </nav>
    </div>
  </section>
  <br /><br />
  <div class="min-h-screen flex flex-col md:flex-row max-w-[1400px] mx-auto p-6 md:p-10 gap-8">
    <!-- Sidebar -->
    <aside class="flex-shrink-0 w-full md:w-[320px] space-y-8">
      <!-- Search -->
      <section class="bg-[#d9f2fb] rounded-xl p-6">
        <h2 class="text-2xl font-semibold mb-4">Search</h2>
        <form
          class="relative"
          id="searchForm"
          onsubmit="event.preventDefault(); applyFilters();"
        >
          <input
            class="w-full rounded-lg border border-gray-300 py-3 px-4 pr-12 text-gray-500 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#0f3a47]"
            id="searchInput"
            placeholder="Search products..."
            type="search"
          />
          <button
            aria-label="Search"
            class="absolute right-4 top-1/2 -translate-y-1/2 text-[#0f3a47] hover:text-[#0a2730]"
            type="submit"
          >
            <i class="fas fa-search"></i>
          </button>
        </form>
      </section>
      <!-- Filter By Price -->
      <section class="bg-[#d9f2fb] rounded-xl p-6">
        <h2 class="text-2xl font-semibold mb-4">Filter By Price</h2>
        <form id="priceForm" onsubmit="event.preventDefault(); applyFilters();">
          <input
            aria-label="Price range"
            class="w-full accent-[#0f3a47]"
            id="priceRange"
            max="2949"
            min="10"
            type="range"
            value="2949"
          />
          <p class="mt-2 text-sm text-[#0f3a47]" id="priceRangeText">
            Price: ₹10.00 — ₹2,949.00
          </p>
          <button
            class="mt-4 bg-[#0f3a47] text-white font-semibold px-8 py-3 rounded-tr-3xl rounded-bl-3xl hover:bg-[#0a2730] transition"
            type="submit"
          >
            Filter
          </button>
        </form>
      </section>
      <!-- Categories -->
      <section class="bg-[#d9f2fb] rounded-xl p-6">
        <h2 class="text-2xl font-semibold mb-4">Categories</h2>
        <form
          class="space-y-4 text-[#0f3a47] font-normal text-sm"
          id="categoriesForm"
          oninput="handleCategorySelection(event)"
        >
          <label
            class="flex items-center space-x-3 border-b border-[#a9d9f1] pb-2"
          >
            <input
              class="accent-[#0f3a47]"
              name="category"
              type="checkbox"
              value="Camping Essentials"
            />
            <span>Camping Essentials</span>
          </label>
          <label
            class="flex items-center space-x-3 border-b border-[#a9d9f1] pb-2"
          >
            <input
              class="accent-[#0f3a47]"
              name="category"
              type="checkbox"
              value="Swimming Essentials"
            />
            <span>Swimming Essentials</span>
          </label>
          <label
            class="flex items-center space-x-3 border-b border-[#a9d9f1] pb-2"
          >
            <input
              class="accent-[#0f3a47]"
              name="category"
              type="checkbox"
              value="Travel Essentials"
            />
            <span>Travel Essentials</span>
          </label>
          <label
            class="flex items-center space-x-3 border-b border-[#a9d9f1] pb-2"
          >
            <input
              class="accent-[#0f3a47]"
              name="category"
              type="checkbox"
              value="Hiking Essentials"
            />
            <span>Hiking Essentials</span>
          </label>
          <label
            class="flex items-center space-x-3 border-b border-[#a9d9f1] pb-2"
          >
            <input
              class="accent-[#0f3a47]"
              name="category"
              type="checkbox"
              value="Fishing Essentials"
            />
            <span>Fishing Essentials</span>
          </label>
          <label
            class="flex items-center space-x-3 border-b border-[#a9d9f1] pb-2"
          >
            <input
              class="accent-[#0f3a47]"
              name="category"
              type="checkbox"
              value="Outdoor Cooking"
            />
            <span>Outdoor Cooking</span>
          </label>
          <label
            class="flex items-center space-x-3 border-b border-[#a9d9f1] pb-2"
          >
            <input
              class="accent-[#0f3a47]"
              name="category"
              type="checkbox"
              value="Survival Gear"
            />
            <span>Survival Gear</span>
          </label>
          <label
            class="flex items-center space-x-3 border-b border-[#a9d9f1] pb-2"
          >
            <input
              class="accent-[#0f3a47]"
              name="category"
              type="checkbox"
              value="Climbing Gear"
            />
            <span>Climbing Gear</span>
          </label>
          <label
            class="flex items-center space-x-3 border-b border-[#a9d9f1] pb-2"
          >
            <input
              class="accent-[#0f3a47]"
              name="category"
              type="checkbox"
              value="Winter Gear"
            />
            <span>Winter Gear</span>
          </label>
          <label
            class="flex items-center space-x-3 border-b border-[#a9d9f1] pb-2"
          >
            <input
              class="accent-[#0f3a47]"
              name="category"
              type="checkbox"
              value="Backpacking Gear"
            />
            <span>Backpacking Gear</span>
          </label>
          <label
            class="flex items-center space-x-3 border-b border-[#a9d9f1] pb-2"
          >
            <input
              class="accent-[#0f3a47]"
              name="category"
              type="checkbox"
              value="Water Sports"
            />
            <span>Water Sports</span>
          </label>
          <label
            class="flex items-center space-x-3 border-b border-[#a9d9f1] pb-2"
          >
            <input
              class="accent-[#0f3a47]"
              name="category"
              type="checkbox"
              value="Camping Furniture"
            />
            <span>Camping Furniture</span>
          </label>
          <label
            class="flex items-center space-x-3 border-b border-[#a9d9f1] pb-2"
          >
            <input
              class="accent-[#0f3a47]"
              name="category"
              type="checkbox"
              value="Lighting"
            />
            <span>Lighting</span>
          </label>
          <label
            class="flex items-center space-x-3 border-b border-[#a9d9f1] pb-2"
          >
            <input
              class="accent-[#0f3a47]"
              name="category"
              type="checkbox"
              value="Navigation"
            />
            <span>Navigation</span>
          </label>
          <label class="flex items-center space-x-3">
            <input
              class="accent-[#0f3a47]"
              name="category"
              type="checkbox"
              value="First Aid"
            />
            <span>First Aid</span>
          </label>
        </form>
      </section>
      <!-- Wishlist Link -->
      <section class="mt-6 p-4 bg-[#d9f2fb] rounded-xl text-center">
        <a
          href="wishlist.php"
          class="inline-block bg-[#0f3a47] text-white font-semibold py-3 px-6 rounded-tr-3xl rounded-bl-3xl hover:bg-[#0a2730] transition"
          >Go to Wishlist</a
        >
      </section>
    </aside>
    <!-- Main content -->
    <main class="flex-1 flex flex-col">
      <div
        class="flex flex-col md:flex-row md:items-center md:justify-between mb-6 gap-4"
      >
        <p class="text-sm md:text-base" id="resultsCount">
          Showing 1–6 of 18 results
        </p>
        <div class="flex items-center gap-2">
          <button
            aria-label="Grid view"
            class="p-2 border border-[#0f3a47] rounded-md text-[#0f3a47] bg-white hover:bg-[#f0f9ff] transition"
            id="gridViewBtn"
            type="button"
          >
            <i class="fas fa-th-large"></i>
          </button>
          <button
            aria-label="List view"
            class="p-2 border border-gray-200 rounded-md text-gray-300 bg-white cursor-default"
            disabled
            id="listViewBtn"
            type="button"
          >
            <i class="fas fa-th-list"></i>
          </button>
        </div>
        <select
          aria-label="Default sorting"
          class="border border-gray-300 rounded-md py-3 px-4 text-[#0f3a47] focus:outline-none focus:ring-2 focus:ring-[#0f3a47]"
          id="sortSelect"
        >
          <option value="default">Default sorting</option>
          <option value="popularity">Sort by popularity</option>
          <option value="rating">Sort by average rating</option>
          <option value="latest">Sort by latest</option>
          <option value="priceLowHigh">Sort by price: low to high</option>
          <option value="priceHighLow">Sort by price: high to low</option>
        </select>
      </div>
      <!-- Products grid -->
      <div
        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 flex-1"
        id="productsGrid"
      >
      </div>
      <!-- Pagination -->
      <div
        class="mt-6 flex justify-center items-center gap-4"
      >
        <button
          class="px-4 py-2 bg-[#0f3a47] text-white rounded-tr-3xl rounded-bl-3xl disabled:opacity-50 disabled:cursor-not-allowed"
          id="prevPageBtn"
          type="button"
          disabled
        >
          Previous
        </button>
        <span id="pageInfo" class="text-[#0f3a47] font-semibold">
          Page 1 of 3
        </span>
        <button
          class="px-4 py-2 bg-[#0f3a47] text-white rounded-tr-3xl rounded-bl-3xl disabled:opacity-50 disabled:cursor-not-allowed"
          id="nextPageBtn"
          type="button"
        >
          Next
        </button>
      </div>
    </main>
  </div>
  <!-- Scroll to top button -->
  <button
    aria-label="Scroll to top"
    class="fixed bottom-8 right-8 bg-[#c9e17f] rounded-xl w-12 h-12 flex items-center justify-center shadow-md hover:bg-[#b0d15f] transition"
    id="scrollTopBtn"
    type="button"
  >
    <i class="fas fa-chevron-up text-[#0f3a47] text-xl"></i>
  </button>
  <script>
    const priceRange = document.getElementById("priceRange");
    const priceRangeText = document.getElementById("priceRangeText");
    const productsGrid = document.getElementById("productsGrid");
    const resultsCount = document.getElementById("resultsCount");
    const searchInput = document.getElementById("searchInput");
    const sortSelect = document.getElementById("sortSelect");
    const gridViewBtn = document.getElementById("gridViewBtn");
    const listViewBtn = document.getElementById("listViewBtn");
    const categoriesForm = document.getElementById("categoriesForm");
    const prevPageBtn = document.getElementById("prevPageBtn");
    const nextPageBtn = document.getElementById("nextPageBtn");
    const pageInfo = document.getElementById("pageInfo");

    priceRange.addEventListener("input", () => {
      priceRangeText.textContent = `Price: ₹10.00 — ₹${Number(
        priceRange.value
      ).toLocaleString()}.00`;
    });

    let allProducts = [
      {
        name: "Black Binocular",
        priceMin: 1328.6,
        priceMax: 1428.7,
        categories: ["Camping Essentials", "Travel Essentials"],
        img: "https://placehold.co/400x300?text=Black+Binoculars+with+purple+tinted+lenses+on+white+background",
        alt: "Black binoculars with purple tinted lenses on white background",
        rating: 4.5,
      },
      {
        name: "Camping Stove",
        priceMin: 2047.5,
        priceMax: 2411.5,
        categories: ["Camping Essentials", "Outdoor Cooking"],
        img: "https://placehold.co/400x300?text=Green+camping+stove+with+metal+burner+on+white+background",
        alt: "Green camping stove with metal burner on white background",
        rating: 4.2,
      },
      {
        name: "Camping Tent",
        priceMin: 2261.35,
        priceMax: 2375.1,
        categories: ["Camping Essentials", "Backpacking Gear"],
        img: "https://placehold.co/400x300?text=Gray+and+orange+camping+tent+with+open+door+on+white+background",
        alt: "Gray and orange camping tent with open door on white background",
        rating: 4.7,
      },
      {
        name: "Brown Hat",
        priceMin: 1100,
        priceMax: 1200,
        categories: ["Travel Essentials", "Winter Gear"],
        img: "https://placehold.co/400x300?text=Brown+felt+hat+on+white+background",
        alt: "Brown felt hat on white background",
        rating: 4.0,
      },
      {
        name: "Blue Helmet",
        priceMin: 900,
        priceMax: 1000,
        categories: ["Climbing Gear", "Winter Gear"],
        img: "https://placehold.co/400x300?text=Blue+safety+helmet+on+white+background",
        alt: "Blue safety helmet on white background",
        rating: 4.3,
      },
      {
        name: "First Aid Kit",
        priceMin: 1500,
        priceMax: 1700,
        categories: ["First Aid", "Survival Gear"],
        img: "https://placehold.co/400x300?text=Red+first+aid+kit+box+with+white+cross+on+white+background",
        alt: "Red first aid kit box with white cross on white background",
        rating: 4.6,
      },
      {
        name: "Camping Chair",
        priceMin: 1200,
        priceMax: 1350,
        categories: ["Camping Essentials", "Camping Furniture"],
        img: "https://placehold.co/400x300?text=Foldable+camping+chair+with+black+fabric+and+metal+frame+on+white+background",
        alt: "Foldable camping chair with black fabric and metal frame on white background",
        rating: 4.1,
      },
      {
        name: "Fishing Rod",
        priceMin: 800,
        priceMax: 950,
        categories: ["Fishing Essentials"],
        img: "https://placehold.co/400x300?text=Fishing+rod+with+reel+and+line+on+white+background",
        alt: "Fishing rod with reel and line on white background",
        rating: 4.4,
      },
      {
        name: "Hiking Backpack",
        priceMin: 1800,
        priceMax: 2100,
        categories: ["Hiking Essentials", "Backpacking Gear"],
        img: "https://placehold.co/400x300?text=Large+hiking+backpack+with+multiple+compartments+on+white+background",
        alt: "Large hiking backpack with multiple compartments on white background",
        rating: 4.5,
      },
      {
        name: "Survival Knife",
        priceMin: 500,
        priceMax: 600,
        categories: ["Survival Gear", "Camping Essentials"],
        img: "https://placehold.co/400x300?text=Survival+knife+with+black+handle+and+sheath+on+white+background",
        alt: "Survival knife with black handle and sheath on white background",
        rating: 4.0,
      },
      {
        name: "Climbing Rope",
        priceMin: 1300,
        priceMax: 1500,
        categories: ["Climbing Gear", "Outdoor Cooking"],
        img: "https://placehold.co/400x300?text=Coiled+climbing+rope+in+bright+color+on+white+background",
        alt: "Coiled climbing rope in bright color on white background",
        rating: 4.3,
      },
      {
        name: "Camping Lantern",
        priceMin: 700,
        priceMax: 850,
        categories: ["Lighting", "Camping Essentials"],
        img: "https://placehold.co/400x300?text=Portable+camping+lantern+with+handle+on+white+background",
        alt: "Portable camping lantern with handle on white background",
        rating: 4.2,
      },
      {
        name: "Waterproof Jacket",
        priceMin: 2200,
        priceMax: 2500,
        categories: ["Winter Gear", "Travel Essentials"],
        img: "https://placehold.co/400x300?text=Blue+waterproof+jacket+with+hood+on+white+background",
        alt: "Blue waterproof jacket with hood on white background",
        rating: 4.6,
      },
      {
        name: "Navigation Compass",
        priceMin: 400,
        priceMax: 500,
        categories: ["Navigation", "Camping Essentials"],
        img: "https://placehold.co/400x300?text=Classic+navigation+compass+with+metal+case+on+white+background",
        alt: "Classic navigation compass with metal case on white background",
        rating: 4.1,
      },
      {
        name: "Swimming Goggles",
        priceMin: 300,
        priceMax: 350,
        categories: ["Swimming Essentials"],
        img: "https://placehold.co/400x300?text=Blue+swimming+goggles+with+clear+lenses+on+white+background",
        alt: "Blue swimming goggles with clear lenses on white background",
        rating: 4.0,
      },
      {
        name: "Backpacking Stove",
        priceMin: 1800,
        priceMax: 2000,
        categories: ["Backpacking Gear", "Outdoor Cooking"],
        img: "https://placehold.co/400x300?text=Compact+backpacking+stove+with+metal+burner+on+white+background",
        alt: "Compact backpacking stove with metal burner on white background",
        rating: 4.3,
      },
      {
        name: "Fishing Tackle Box",
        priceMin: 600,
        priceMax: 750,
        categories: ["Fishing Essentials"],
        img: "https://placehold.co/400x300?text=Red+fishing+tackle+box+with+multiple+compartments+on+white+background",
        alt: "Red fishing tackle box with multiple compartments on white background",
        rating: 4.2,
      },
      {
        name: "Camping Table",
        priceMin: 1500,
        priceMax: 1700,
        categories: ["Camping Furniture", "Camping Essentials"],
        img: "https://placehold.co/400x300?text=Portable+camping+table+with+foldable+legs+on+white+background",
        alt: "Portable camping table with foldable legs on white background",
        rating: 4.4,
      },
    ];

    let filteredProducts = [];
    let currentPage = 1;
    const productsPerPage = 6;

    let wishlist = JSON.parse(localStorage.getItem("wishlist")) || [];

    function saveWishlist() {
      localStorage.setItem("wishlist", JSON.stringify(wishlist));
      window.dispatchEvent(new Event("wishlistUpdated"));
    }

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

    function renderProducts() {
      productsGrid.innerHTML = "";
      const start = (currentPage - 1) * productsPerPage;
      const end = start + productsPerPage;
      const pageProducts = filteredProducts.slice(start, end);

      pageProducts.forEach((product) => {
        const isWishlisted = wishlist.some((w) => w.name === product.name);
        const article = document.createElement("article");
        article.className =
          "border border-gray-100 rounded-lg overflow-hidden flex flex-col";
        article.setAttribute("data-name", product.name);
        article.setAttribute("data-price-min", product.priceMin);
        article.setAttribute("data-price-max", product.priceMax);
        article.setAttribute("data-categories", product.categories.join(","));

        article.innerHTML = `
          <img src="${product.img}" alt="${product.alt}" class="w-full object-contain p-6" height="300" width="400" />
          <div class="p-4 flex flex-col flex-grow">
            <h3 class="text-xl font-semibold mb-1">${product.name}</h3>
            <p class="text-sm mb-2">₹${product.priceMin.toLocaleString()} – ₹${product.priceMax.toLocaleString()}</p>
            <div class="mb-4 text-yellow-400" aria-label="Rating: ${product.rating} out of 5 stars">${renderStars(
              product.rating
            )}</div>
            <div class="mt-auto flex gap-3">
              <button
                class="bg-[#0f3a47] text-white font-semibold py-2 px-4 rounded-tr-3xl rounded-bl-3xl hover:bg-[#0a2730] transition flex-1"
                type="button"
                onclick="alert('Buy Now clicked for ${product.name}')"
              >
                Buy Now
              </button>
              <button
                class="border border-[#0f3a47] text-[#0f3a47] font-semibold py-2 px-4 rounded-tr-3xl rounded-bl-3xl hover:bg-[#0a2730] hover:text-white transition flex-none"
                type="button"
                onclick="toggleWishlist('${product.name}')"
                aria-label="${
                  isWishlisted ? "Remove from" : "Add to"
                } wishlist for ${product.name}"
              >
                <i class="${isWishlisted ? "fas" : "far"} fa-heart"></i>
              </button>
            </div>
          </div>
        `;
        productsGrid.appendChild(article);
      });

      // Update results count text
      const total = filteredProducts.length;
      const showingEnd = Math.min(currentPage * productsPerPage, total);
      const showingStart = total === 0 ? 0 : (currentPage - 1) * productsPerPage + 1;
      resultsCount.textContent = `Showing ${showingStart}–${showingEnd} of ${total} results`;

      // Update pagination buttons and info
      const totalPages = Math.ceil(total / productsPerPage);
      pageInfo.textContent = `Page ${currentPage} of ${totalPages || 1}`;
      prevPageBtn.disabled = currentPage === 1;
      nextPageBtn.disabled = currentPage === totalPages || totalPages === 0;
    }

    function toggleWishlist(productName) {
      const product = allProducts.find((p) => p.name === productName);
      if (!product) return;

      const index = wishlist.findIndex((p) => p.name === productName);
      if (index === -1) {
        wishlist.push(product);
      } else {
        wishlist.splice(index, 1);
      }
      saveWishlist();
      renderProducts();
    }

    function handleCategorySelection(event) {
      if (event.target.name === "category") {
        const checkboxes = categoriesForm.querySelectorAll(
          'input[name="category"]'
        );
        checkboxes.forEach((cb) => {
          if (cb !== event.target) cb.checked = false;
        });
        currentPage = 1;
        applyFilters();
      }
    }

    function applyFilters() {
      const maxPrice = Number(priceRange.value);
      const searchTerm = searchInput.value.trim().toLowerCase();
      const checkedCategory = categoriesForm.querySelector(
        'input[name="category"]:checked'
      );
      const checkedCategoryValue = checkedCategory ? checkedCategory.value : null;

      filteredProducts = allProducts.filter((product) => {
        // Price filter: product max price must be <= maxPrice
        if (product.priceMax > maxPrice) return false;

        // Search filter: name includes search term
        if (searchTerm && !product.name.toLowerCase().includes(searchTerm))
          return false;

        // Category filter: if a category is checked, product must have that category
        if (checkedCategoryValue && !product.categories.includes(checkedCategoryValue))
          return false;

        return true;
      });

      // Sort filtered products
      const sortValue = sortSelect.value;
      filteredProducts.sort((a, b) => {
        switch (sortValue) {
          case "priceLowHigh":
            return a.priceMin - b.priceMin;
          case "priceHighLow":
            return b.priceMax - a.priceMax;
          case "latest":
            // No date info, keep original order
            return 0;
          case "rating":
            return b.rating - a.rating;
          case "popularity":
            // No popularity info, keep original order
            return 0;
          default:
            return 0;
        }
      });

      currentPage = 1;
      renderProducts();
    }

    // Sorting select change
    sortSelect.addEventListener("change", () => {
      applyFilters();
    });

    // Grid/List view toggle
    gridViewBtn.addEventListener("click", () => {
      productsGrid.classList.remove("list-view", "flex", "flex-col", "gap-4");
      productsGrid.classList.add("grid", "grid-cols-1", "sm:grid-cols-2", "lg:grid-cols-3");
      gridViewBtn.classList.add("border-[#0f3a47]", "text-[#0f3a47]");
      gridViewBtn.classList.remove("text-gray-300", "border-gray-200", "cursor-default");
      listViewBtn.classList.remove("border-[#0f3a47]", "text-[#0f3a47]");
      listViewBtn.classList.add("text-gray-300", "border-gray-200", "cursor-default");
      listViewBtn.disabled = true;
      gridViewBtn.disabled = false;
    });

    listViewBtn.addEventListener("click", () => {
      productsGrid.classList.remove("grid", "grid-cols-1", "sm:grid-cols-2", "lg:grid-cols-3");
      productsGrid.classList.add("list-view", "flex", "flex-col", "gap-4");
      gridViewBtn.classList.remove("border-[#0f3a47]", "text-[#0f3a47]");
      gridViewBtn.classList.add("text-gray-300", "border-gray-200", "cursor-default");
      listViewBtn.classList.add("border-[#0f3a47]", "text-[#0f3a47]");
      listViewBtn.classList.remove("text-gray-300", "border-gray-200", "cursor-default");
      listViewBtn.disabled = false;
      gridViewBtn.disabled = true;
    });

    // Pagination buttons
    prevPageBtn.addEventListener("click", () => {
      if (currentPage > 1) {
        currentPage--;
        renderProducts();
        window.scrollTo({ top: 0, behavior: "smooth" });
      }
    });
    nextPageBtn.addEventListener("click", () => {
      const totalPages = Math.ceil(filteredProducts.length / productsPerPage);
      if (currentPage < totalPages) {
        currentPage++;
        renderProducts();
        window.scrollTo({ top: 0, behavior: "smooth" });
      }
    });

    // Scroll to top button
    const scrollTopBtn = document.getElementById("scrollTopBtn");
    scrollTopBtn.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });

    // Listen for wishlist changes from other tabs/windows
    window.addEventListener("storage", (event) => {
      if (event.key === "wishlist") {
        wishlist = JSON.parse(event.newValue) || [];
        renderProducts();
      }
    });

    // Listen for custom event for wishlist updates in same tab
    window.addEventListener("wishlistUpdated", () => {
      wishlist = JSON.parse(localStorage.getItem("wishlist")) || [];
      renderProducts();
    });

    // Initialize
    applyFilters();
  </script>
  <br /><br /><br />
  <?php include("footer.php") ?>
</body>
</html>