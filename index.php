<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <title>Letsgo</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&amp;family=Open+Sans&amp;display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Open+Sans&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">

<link
  href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap"
  rel="stylesheet" />
  
  <script>
    function openSlider() {
      document.getElementById("sliderModal").style.display = "block";
    }
    
    function closeSlider() {
      document.getElementById("sliderModal").style.display = "none";
    }
    </script>
    
</head>
<body>
  <!-- Top bar -->
  <div class="top-bar">
    <div class="left">
      <div class="icon-text">
        <i class="far fa-envelope" aria-hidden="true"></i>
        <a href="mailto:info@example.com">info@example.com</a>
      </div>
      <div class="icon-text">
        <i class="fas fa-phone-alt" aria-hidden="true"></i>
        <span>+000123456789</span>
      </div>
    </div>
    <div class="center" aria-live="polite" aria-atomic="true">
      Reserve Now &amp; Get 50% Off On Next Vacation!
    </div>
    <div class="right">
      <div class="lang-currency" tabindex="0" role="button" aria-haspopup="listbox" aria-expanded="false" aria-label="Select language">
        <img src="https://flagcdn.com/w20/gb.png" alt="United Kingdom flag" width="20" height="15" />
        <span>EN</span>
        
        
      </div>
      <div class="lang-currency" tabindex="0" role="button" aria-haspopup="listbox" aria-expanded="false" aria-label="Select currency">
        <span>INR, ₹</span>
        
      </div>
    </div>
  </div>

  <!-- Header and navigation -->
  <header role="banner">
  <div class="relative w-full">
  <nav class="main-nav" role="navigation" aria-label="Primary Navigation">
    <div class="logo">
      <img src="images/sarvana.png" alt="Letsgo logo" class="logo-img">
    </div>
    <ul class="nav-menu" role="menubar" aria-label="Primary menu">
      
    <li role="none" class="nav-dropdown"><a href="#" role="menuitem">Home</a></li>
      
    <li role="none" class="nav-dropdown">
        <a href="#" role="menuitem">Pages</a>
        <ul class="dropdown-menu">
          <li><a href="about.php">About Us</a></li>
          <li><a href="faq.php">Frequent QA’s</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="news.php">News Detail</a></li>
          <li><a href="plan.php">Pricing Plan</a></li>
          
          <li><a href="404.php">404 Error</a></li>
        </ul>
      </li>
      
      <li role="none" class="nav-dropdown">
        <a href="browse.php" role="menuitem">Browse trips</a>
      <ul class="dropdown-menu">
      <li><a href="about.php">Trips</a></li>
      </ul>
    </li>

      <li class="nav-dropdown">
      <a href="#" role="menuitem" class="inline-flex items-center gap-1">
      Destination
      
      </a>

  <div class="destination-dropdown">
    <div class="dropdown-inner">
      <!-- Left Info Block -->
      <div class="destination-info">
        <span class="text-xs text-[#0c4a60] tracking-widest font-semibold mb-2">AVAILABLE TOURS</span>
        <h2 class="text-[#0c4a60] text-3xl font-bold mb-4">Destination Lists</h2>
        <p class="text-[#0c4a60] text-base mb-6">
        Explore a world of unforgettable journeys with our curated selection of destinations.
        Start planning your next escape today with destinations tailored to your dreams.
        </p>
        
        <button class="bg-[#cddc6a] text-[#3f4c3a] font-medium rounded-l-2xl rounded-r-md px-6 py-3"><a href="destination.php">
          View All Destinations</a>
        </button>
      </div>

      <!-- Right Cards Block -->
      <div class="destination-cards">
        <div class="destination-card">
          <img src="https://storage.googleapis.com/a1aa/image/84cda831-ba15-4348-eeac-ca14b2eb828f.jpg" alt="India">
          <div class="text-overlay">
            <h3 class="text-xl font-bold">India</h3>
            <p class="text-sm">Price Starts ( ₹150 – ₹200)</p>
          </div>
        </div>
        <div class="destination-card">
          <img src="https://storage.googleapis.com/a1aa/image/8324cbac-62c8-43f2-86d7-0c38fac97e77.jpg" alt="Egypt">
          <div class="text-overlay">
            <h3 class="text-xl font-bold">Egypt</h3>
            <p class="text-sm">Price Starts ( ₹100 – ₹200)</p>
          </div>
        </div>
        <div class="destination-card">
          <img src="https://storage.googleapis.com/a1aa/image/eac8a60d-3c3a-4f8e-931e-be5e3b3ed817.jpg" alt="Turkey">
          <div class="text-overlay">
            <h3 class="text-xl font-bold">Turkey</h3>
            <p class="text-sm">Price Starts ( ₹230 – ₹470)</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</li>


      <li role="none" class="nav-dropdown">
        <a href="#" role="menuitem">Shop</a>
        <ul class="dropdown-menu">
          <li><a href="shop.php">Shop Listing</a></li>
          <li><a href="#">My Account</a></li>
          <li><a href="#">My Cart</a></li>
          <li><a href="wishlist.php">My Wishlist</a></li>
          <li><a href="#">Checkout</a></li>
        </ul>
      </li>

      <li role="none" class="nav-dropdown">
        <a href="#" role="menuitem">Help Center</a>
        <ul class="dropdown-menu">
        <li><a href="contact.php">Contact Us</a></li>
          <li><a href="terms.php">Terms and Conditions</a></li>
          <li><a href="shipping.php">Shipping Info</a></li>
          
        </ul>
      </li>
    </ul>
    <div class="actions">
      <a href="register.html">
      <button class="btn-register">Register Now</button></a>
      <button class="btn-search"><i class="fas fa-search"></i></button>
    </div>
  </nav>
</div>

    <div class="hero-content" >
      <p class="package-label">PACKAGE FOR THRILL-SEEKERS</p><br>
      <h1 class="head">Nature Escapes Exiting Adventures Trip</h1><br>
      <p class="description">
        Custom-Crafted Tour Packages for Unforgettable Holiday Experiences in India.
      </p><br><br><br>
      <div class="hero-images" aria-label="Adventure trip images">
  <a href="friends.html" class="image-link">
    <img src="https://storage.googleapis.com/a1aa/image/fd4e863a-0bc8-4286-4aeb-4b4af409a8a8.jpg" alt="Two hikers" />
  </a>
  <a href="group.html" class="image-link">
    <img src="https://storage.googleapis.com/a1aa/image/dfce2025-3e33-400b-07ee-d4a6d3d46822.jpg" alt="Group of hikers" />
  </a>
  <a href="solo.html" class="image-link">
    <img src="https://storage.googleapis.com/a1aa/image/da1697a7-9c4e-4da9-eef3-f7994de47748.jpg" alt="Solo hiker" />
  </a>
</div>

      <button type="button" class="btn-explore" aria-label="Explore More" onclick="openSlider()">
        Explore More
      </button>
    </div>
    <div id="sliderModal" class="modal">
      <div class="modal-content">
        <span class="close" onclick="closeSlider()">&times;</span>
        <iframe src="slider.html" width="100%" height="700px" style="border:none;"></iframe>
      </div>
    </div>    
  </header>
<br><br><br>
<br><br>

  <section aria-label="Header main section with image and features" class="container">
    <div class="image-wrapper">
     <img alt="Smiling woman wearing yellow shirt sitting on a large gray suitcase holding a phone" class="main-image"  src="https://tse1.mm.bing.net/th/id/OIP.WL7JbsTsAutxSGfLVi4qsQAAAA?w=430&h=626&rs=1&pid=ImgDetMain" >
    </div>
    <div class="content">
     <p class="subtitle" style="font-size: 15px; ">
      GET TAILOR-MADE EXPERIENCE
     </p>
     <h1 style="font-size: 25px;">
      Your Passport To Memorable Adventures
     </h1>
     <div class="features">
      <div class="feature">
       <svg aria-hidden="true" focusable="false" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M9 17l-2 2m0 0l-2-2m2 2V9a2 2 0 012-2h6a2 2 0 012 2v8m-6 0l2-2m-2 2l-2-2" stroke-linecap="round" stroke-linejoin="round">
        </path>
        <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round">
        </path>
       </svg>
       <h3>
        Hill Stations
       </h3>
       <p>
        Discover the charm of hill stations with our curated packages. From misty mornings to stunning sunsets, experience nature’s beauty, cozy accommodations, and exciting activities that make for a perfect mountain getaway.
       </p>
      </div>
      <div class="feature">
       <svg aria-hidden="true" focusable="false" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round">
        </path>
        <path d="M9 12h12" stroke-linecap="round" stroke-linejoin="round">
        </path>
       </svg>
       <h3>
        Road Trips
       </h3>
       <p>
        With every turn, the world shifted—towering redwoods gave way to golden coastlines and misty hills whispered stories of the wild, untouched and free..
       </p>
      </div>
      <div class="feature">
       <svg aria-hidden="true" focusable="false" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round">
        </path>
        <path d="M7 7l4 4-4 4" stroke-linecap="round" stroke-linejoin="round">
        </path>
       </svg>
       <h3>
        Outdoor Packages
       </h3>
       <p>
        Discover the outdoors like never before with our specially designed travel packages. From thrilling adventures to relaxing nature escapes, there’s something for every type of explorer.
       </p>
      </div>
      <div class="feature">
       <svg aria-hidden="true" focusable="false" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <circle cx="12" cy="12" fill="none" r="10" stroke="#14404d" stroke-width="1.5">
        </circle>
        <path d="M9 16v-4l-2-2m8 6v-4l2-2" stroke-linecap="round" stroke-linejoin="round">
        </path>
        <path d="M12 12l-1-1m2 2l1-1" stroke-linecap="round" stroke-linejoin="round">
        </path>
       </svg>
       <h3>
        Forest Safari
       </h3>
       <p>
        Embark on a thrilling forest safari and immerse yourself in the heart of nature. Explore dense woodlands, spot elusive wildlife, and experience the untamed beauty of the forest like never before.
       </p>
      </div>
     </div>
    </div>
   </section>

   <br><br><br>
   <br><br>


<section id="dest" class="min-h-screen flex flex-col items-center py-12 px-4 sm:px-6 lg:px-8" >
   <div class="text-center mb-12">
    <p class="text-sm text-gray-600 tracking-widest mb-2">
     DESTINATIONS AROUND THE GLOBE
    </p><br>
    <h1 class="text-4xl sm:text-5xl font-bold text-[#0f3a47]">
     Discover Stunning Destinations
    </h1>
   </div><br><br><br><br>
   <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl w-full">
    <div class="relative rounded-xl overflow-hidden shadow-lg">
     <img alt="Sydney Opera House and city skyline in Australia under clear blue sky" class="w-full h-80 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/c2a0b6aa-d90e-400f-3315-49ae878da737.jpg" width="600"/>
     <div class="absolute bottom-4 left-4 text-white drop-shadow-lg">
      <h2 class="text-2xl font-serif font-bold">
       Australia
      </h2>
      <p class="text-sm font-semibold">
       Price Starts ( ₹116 – ₹225)
      </p>
     </div>
    </div>
    <div class="relative rounded-xl overflow-hidden shadow-lg">
     <img alt="Red train traveling through mountains with snow capped peaks in Switzerland" class="w-full h-80 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/8cdacced-afb4-4cc8-150f-bc8d3c6b92bb.jpg" width="600"/>
     <div class="absolute bottom-4 left-4 text-white drop-shadow-lg">
      <h2 class="text-2xl font-serif font-bold">
       Switzerland
      </h2>
      <p class="text-sm font-semibold">
       Price Starts ( ₹175 – ₹200)
      </p>
     </div>
    </div>
    <div class="relative rounded-xl overflow-hidden shadow-lg">
     <img alt="Clear turquoise water and rocky beach with person kayaking in Thailand" class="w-full h-80 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/bd1e2a3d-1f81-491b-200f-03f8be4ff8f6.jpg" width="600"/>
     <div class="absolute bottom-4 left-4 text-white drop-shadow-lg">
      <h2 class="text-2xl font-serif font-bold">
       Thailand
      </h2>
      <p class="text-sm font-semibold">
       Price Starts ( ₹85 – ₹200)
      </p>
     </div>
    </div>
    <div class="relative rounded-xl overflow-hidden shadow-lg">
     <img alt="Traditional Korean temple on rocky coastline with visitors in Korea" class="w-full h-80 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/71aed0e5-7bab-4df5-6cb9-4f16dd09852e.jpg" width="600"/>
     <div class="absolute bottom-4 left-4 text-white drop-shadow-lg">
      <h2 class="text-2xl font-serif font-bold">
       Korea
      </h2>
      <p class="text-sm font-semibold">
       Price Starts ( ₹175 – ₹285)
      </p>
     </div>
    </div>
   </div>
   <button class="mt-12 bg-[#0f3a47] text-white font-semibold py-3 px-8 rounded-tr-3xl rounded-br-3xl hover:bg-[#0c2a34] transition-colors">
    <a href="destination.php">
    Explore All Destinations
   </button></a>
  </section>

 <br><br><br><br><br>

<div class="bg-white text-[#0f3a44]">
  <div class="a" >
    <!-- Left side content -->
    <div class="md:w-1/2 flex flex-col gap-6" id="left">
      <p class="text-xs tracking-widest text-[#0f3a44] font-semibold mb-1">
        FOR HASSLE-FREE TRAVEL EXPERIENCE
      </p>
      <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">
        All-Inclusive Travel Experience
      </h1>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <!-- Lodging -->
        <div class="bg-[#0f3a44] rounded-lg p-6 text-white">
          <i class="fas fa-building fa-2x mb-4"></i>
          <h2 class="text-xl font-semibold mb-2">Lodging</h2>
          <p class="text-sm font-normal leading-relaxed">
            Relax in comfort with our range of lodging options, from luxurious resorts to cozy homestays.
          </p>
        </div>
        <!-- Meal Plans -->
        <div class="bg-[#0f3a44] rounded-lg p-6 text-white">
          <i class="fas fa-utensils fa-2x mb-4"></i>
          <h2 class="text-xl font-semibold mb-2">Meal Plans</h2>
          <p class="text-sm font-normal leading-relaxed">
            From local delicacies to international favorites, our packages offer a variety of dining options that cater to every taste—whether you prefer all-inclusive buffets or à la carte experiences.
          </p>
        </div>
        <!-- Transportation -->
        <div class="bg-[#0f3a44] rounded-lg p-6 text-white">
          <i class="fas fa-bus fa-2x mb-4"></i>
          <h2 class="text-xl font-semibold mb-2">Transportation</h2>
          <p class="text-sm font-normal leading-relaxed">
            Travel comfortably with our range of transportation options, including private transfers and group tours.
          </p>
        </div>
        <!-- Travel Assistance -->
        <div class="bg-[#0f3a44] rounded-lg p-6 text-white">
          <i class="fas fa-handshake fa-2x mb-4"></i>
          <h2 class="text-xl font-semibold mb-2">Travel Assistance</h2>
          <p class="text-sm font-normal leading-relaxed">
            Need help planning your trip? Our travel assistant is here to handle the details so you can focus on the adventure.
          </p>
        </div>
        <div class="bg-[#0f3a44] rounded-lg p-6 text-white">
          <i class="fas fa-suitcase-rolling fa-2x mb-4"></i>
          <h2 class="text-xl font-semibold mb-2">Airport Transfers</h2>
          <p class="text-sm font-normal leading-relaxed">
            Quick, reliable airport transfers to your destination.
          </p>
        </div>
        <div class="bg-[#0f3a44] rounded-lg p-6 text-white">
          <i class="fas fa-plane fa-2x mb-4"></i>
          <h2 class="text-xl font-semibold mb-2">Upgrade and Freebies</h2>
          <p class="text-sm font-normal leading-relaxed">
            Upgrade your experience with complimentary extras—special deals and perks await you on every journey.
          </p>
        </div>
      </div>
    </div>
    <!-- Right side slider content -->
    <div class="md:w-1/2 relative rounded-lg overflow-hidden">
      <div id="slider" class="custom-box" style="padding-top:50px;">
        <!-- Slides -->
        <div class="absolute inset-0 transition-opacity duration-700 ease-in-out">
          <img
            src="https://storage.googleapis.com/a1aa/image/8764d213-3e9d-4586-6b9d-fc0d522a8989.jpg"
            alt="Night camping scene with tents, campfire, chairs, and a dark blue starry sky"
            class="w-full h-full object-cover rounded-lg"
            data-index="0"
          />
          <div
            class="absolute inset-0 flex flex-col justify-center items-center text-white px-6 text-center"
            style="background: rgba(0,0,0,0.3)"
          >
            <div class="flex justify-end w-full mb-4 space-x-2">
              <div class="slider-dot" data-dot="0"></div>
              <div class="slider-dot" data-dot="1"></div>
              <div class="slider-dot" data-dot="2"></div>
            </div>
            <h2 class="text-6xl font-[cursive] leading-none mb-0">Summer</h2>
            <h3 class="text-4xl font-extrabold uppercase mb-0">CAMPING</h3>
            <h3 class="text-6xl font-extrabold uppercase mb-6">TRIP</h3>
            <div class="flex justify-center space-x-6 mb-6">
              <i class="fas fa-campfire text-2xl"></i>
              <i class="fas fa-campfire text-2xl"></i>
              <i class="fas fa-campfire text-2xl"></i>
            </div>
            <p class="max-w-[280px] text-xs leading-relaxed mb-6">
              Explore the breathtaking beauty of nature on our summer hiking trip! Don't miss out on this opportunity to experience the wonders of nature firsthand!
            </p>
            <div class="border-l border-r border-white px-6 py-2 text-3xl font-extrabold uppercase tracking-widest">
              25-29 AUGUST
            </div>
          </div>
        </div>
        <!-- Additional slides can be added here if needed -->
      </div>
    </div>
  </div>

  <br><br><br>
  <br>

  <section id="blog" class="bg-white text-[#0f3b47]">
    <div class="max-w-7xl mx-auto px-4 py-10">
     <div class="flex flex-col md:flex-row md:justify-between md:items-start mb-8 gap-6">
      <h2 class="text-4xl font-bold leading-tight max-w-lg">
       News, Tips &amp; Destination Stories
      </h2>
      <div class="max-w-md text-base leading-relaxed">
        Explore our travel blog for expert insights, tips, and inspiration on your next adventure. 
        From destination guides and travel hacks to cultural insights and local recommendations, our posts are 
        designed to help you make the most of every journey.
         
       <p class="mt-3">
        <a class="underline font-semibold hover:text-[#0a2a33]" href="#">
         View All Blogs
        </a>
       </p>
      </div>
     </div>
     <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <article class="relative rounded-lg overflow-hidden shadow-lg">
       <img alt="Person with backpack and black hat looking at mountain lake landscape with forest and snow-capped peaks" class="w-full h-80 object-cover rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/692a84a3-023c-46c6-341a-7430bacc52f0.jpg" width="600"/>
       <div class="absolute bottom-6 left-6 right-6 bg-white bg-opacity-95 rounded-md p-6 shadow-md">
        <div class="flex items-center text-[#0f3b47] text-xs font-semibold tracking-widest mb-2">
         <i class="fas fa-user mr-2">
         </i>
         DEVELOPER
         <span class="mx-3 border-l border-[#0f3b47] h-4">
         </span>
         <i class="fas fa-comment mr-2">
         </i>
         2 COMMENTS
        </div>
        <h3 class="text-xl font-serif font-bold mb-2 leading-tight">
         Travel Advice And Insights
        </h3>
        <p class="text-sm mb-4 leading-relaxed">
          Get expert tips and practical travel advice to make your journey smooth and stress-free.
        </p>
        <a class="text-[#0f3b47] underline font-semibold text-sm hover:text-[#0a2a33]" href="blog.php">
         Read More
        </a>
       </div>
      </article>
      <article class="relative rounded-lg overflow-hidden shadow-lg">
       <img alt="Woman in white dress holding blue scarf on pier over turquoise water with overwater bungalows in background" class="w-full h-80 object-cover rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/cc93fc75-f194-40d8-bc8b-4d4226c6b047.jpg" width="600"/>
       <div class="absolute bottom-6 left-6 right-6 bg-white bg-opacity-95 rounded-md p-6 shadow-md">
        <div class="flex items-center text-[#0f3b47] text-xs font-semibold tracking-widest mb-2">
         <i class="fas fa-user mr-2">
         </i>
         DEVELOPER
         <span class="mx-3 border-l border-[#0f3b47] h-4">
         </span>
         <i class="fas fa-comment mr-2">
         </i>
         2 COMMENTS
        </div>
        <h3 class="text-xl font-serif font-bold mb-2 leading-tight">
         Tales Of Maritime Journeys
        </h3>
        <p class="text-sm mb-4 leading-relaxed">
          Embark on epic maritime adventures through the eyes of travelers who’ve set sail across the oceans.
        </p>
        <a class="text-[#0f3b47] underline font-semibold text-sm hover:text-[#0a2a33]" href="#">
         Read More
        </a>
       </div>
      </article>
      <article class="relative rounded-lg overflow-hidden shadow-lg">
       <img alt="Couple with backpacks walking near lake with forest and blue sky" class="w-full h-80 object-cover rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/96ad24bf-481a-4977-ad83-beb7c6a4b7b0.jpg" width="600"/>
       <div class="absolute bottom-6 left-6 right-6 bg-white bg-opacity-95 rounded-md p-6 shadow-md">
        <div class="flex items-center text-[#0f3b47] text-xs font-semibold tracking-widest mb-2">
         <i class="fas fa-user mr-2">
         </i>
         DEVELOPER
         <span class="mx-3 border-l border-[#0f3b47] h-4">
         </span>
         <i class="fas fa-comment mr-2">
         </i>
         2 COMMENTS
        </div>
        <h3 class="text-xl font-serif font-bold mb-2 leading-tight">
         Mountain Climbing Objectives
        </h3>
        <p class="text-sm mb-4 leading-relaxed">
          Discover what drives climbers to scale new heights—fitness, focus, adventure, and a deeper connection with nature.
        </p>
        <a class="text-[#0f3b47] underline font-semibold text-sm hover:text-[#0a2a33]" href="#">
         Read More
        </a>
       </div>
      </article>
     </div>
    </div>
    <button aria-label="Scroll to top" class="fixed bottom-6 right-6 bg-[#c9e49f] rounded-md p-3 shadow-md hover:bg-[#b4d17a] transition">
     <i class="fas fa-chevron-up text-[#0f3b47]">
     </i>
    </button>
</section>


<br><br><br><br><br><br>

 <div class="bg-white text-[#0f3a44]">
  <div class="max-w-[1200px] mx-auto my-8 px-4 md:px-8 lg:px-12 flex flex-col md:flex-row gap-6">
    <!-- Left side content -->
    <div class="md:w-1/2 flex flex-col gap-6">
      <p class="text-xs tracking-widest text-[#0f3a44] font-semibold mb-1">
        FOR HASSLE-FREE TRAVEL EXPERIENCE
      </p>
      <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6">
        All-Inclusive Travel Experience
      </h1>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <!-- Lodging -->
        <div class="bg-[#0f3a44] rounded-lg p-6 text-white">
          <i class="fas fa-taxi fa-2x mb-4"></i>
          <h2 class="text-xl font-semibold mb-2">Customized Packages</h2>
          <p class="text-sm font-normal leading-relaxed">
            Plan your trip your way—personalized destinations, dates, and experiences, all tailored to you.
          </p>
        </div>
        <!-- Meal Plans -->
        <div class="bg-[#0f3a44] rounded-lg p-6 text-white">
          <i class="fas fa-envelope fa-2x mb-4"></i>
          <h2 class="text-xl font-semibold mb-2">Unbeatable Prices</h2>
          <p class="text-sm font-normal leading-relaxed">
            Enjoy top travel experiences at the best rates—quality trips that won’t break the bank.
          </p>
        </div>
        <!-- Transportation -->
        <div class="bg-[#0f3a44] rounded-lg p-6 text-white">
          <i class="fas fa-handshake fa-2x mb-4"></i>
          <h2 class="text-xl font-semibold mb-2">24/7 Support</h2>
          <p class="text-sm font-normal leading-relaxed">
            We're here for you anytime, anywhere—travel with confidence knowing help is just a call away.
          </p>
        </div>
        <!-- Travel Assistance -->
        <div class="bg-[#0f3a44] rounded-lg p-6 text-white">
          <i class="fas fa-user fa-2x mb-4"></i>
          <h2 class="text-xl font-semibold mb-2">Expert Advisors</h2>
          <p class="text-sm font-normal leading-relaxed">
            Need help planning your trip? Our travel assistant is here to handle the details so you can focus on the adventure.
          </p>
        </div>
      </div>
    </div>
    <!-- Right side slider content -->
    <div class="md:w-1/2 relative rounded-lg overflow-hidden">
      <div class="lg:col-span-2 flex flex-col justify-center gap-6">
        <p class="text-[#0B3B4C] text-xs tracking-widest font-semibold uppercase">
         Come explore the world with us
        </p>
        <h2 class="text-[#0B3B4C] text-4xl md:text-5xl font-playfair font-extrabold leading-tight">
         Let's Go, So Pack Your Bags For Exiting Trip!
        </h2>
        <p class="text-[#0B3B4C] text-base max-w-xl leading-relaxed">
          Get ready to explore new places, meet new people, and create unforgettable memories. Whether it’s a quick getaway or a grand adventure, your exciting trip starts here!
        </p>
        <div class="flex flex-wrap items-center justify-between max-w-4xl gap-6 mt-6">
         <img alt="Skal International sustainable tourism awards logo with blue and green colors" class="h-10 object-contain" height="40" src="https://storage.googleapis.com/a1aa/image/1810fc76-7675-4e7f-017d-39ace58f39a6.jpg" width="100"/>
         <img alt="NSW Tourism Awards 2024 Gold logo with blue map shape" class="h-10 object-contain" height="40" src="https://storage.googleapis.com/a1aa/image/877f896f-6e60-44fb-d608-b107e436b77a.jpg" width="100"/>
         <img alt="Tamil Nadu tourism logo with colorful text and wave design" class="h-10 object-contain" height="40" src="https://storage.googleapis.com/a1aa/image/3808faad-2722-40e1-1ee4-0d8e49245e05.jpg" width="100"/>
         <img alt="Tasmanian Tourism Awards black logo with stylized bird" class="h-10 object-contain" height="40" src="https://storage.googleapis.com/a1aa/image/715a9968-2cd1-446c-9816-fa4036231200.jpg" width="100"/>
        </div>
        <div class="mt-8 flex items-center gap-4">
         <button class="bg-[#C9DD6E] text-[#0B3B4C] px-6 py-2 rounded-tr-3xl rounded-br-3xl rounded-tl-md rounded-bl-md font-normal text-base">
          Book A Tour
         </button>
         <svg class="w-40 h-20 hidden lg:block" fill="none" stroke="#0B3B4C" stroke-width="2" viewbox="0 0 200 100" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 40 C40 40 80 0 120 20 S180 80 200 40" stroke-linecap="round" stroke-linejoin="round">
          </path>
          <path d="M180 40 L190 30 L200 40 L190 50 Z" fill="none" stroke="#0B3B4C" stroke-linejoin="round" stroke-width="2">
          </path>
         </svg>
        </div>
       </div>
      </div>
      <!-- Scroll to top button bottom right -->
      <button aria-label="Scroll to top" class="fixed bottom-6 right-6 bg-[#C9DD6E] w-14 h-14 rounded-md flex items-center justify-center shadow-md hover:shadow-lg transition-shadow" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
       <i class="fas fa-chevron-up text-[#0B3B4C] text-xl">
       </i>
      </button>
    </div>
  </div>
  <br><br><br><br><br><br>
  <script src="script.js"></script>

  <?php include('footer.php')?>
    
