<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   About Us
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&amp;family=Open+Sans&amp;display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="style2.css">
  <style>
   body {
      font-family: 'Open Sans', sans-serif;
      font-size: 16px;
    }
    h1, h2, h3, h4, h5, h6 {
      font-family: 'Merriweather', serif;}
      .navbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-left: 1rem;   /* px-4 */
    padding-right: 1rem;
    padding-top: 7px; /* py-5 */
    padding-bottom: 5px;
    background-color: white;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05); /* shadow-sm */
    position: sticky;
    top: 0;
    z-index: 50;
    position: relative;
    position: sticky;
  }
  
  /* Responsive paddings */
  @media (min-width: 640px) {
    .navbar {
      padding-left: 1.5rem;  /* sm:px-6 */
      padding-right: 1.5rem;
    }
  }
  
  @media (min-width: 768px) {
    .navbar {
      padding-left: 2.5rem;  /* md:px-10 */
      padding-right: 2.5rem;
    }
  }
  
  @media (min-width: 1024px) {
    .navbar {
      padding-left: 4rem;    /* lg:px-16 */
      padding-right: 4rem;
    }
  }
  

  .logo-img {
    width: 165px;
    height: 15vh;
    object-fit: contain;
    margin-left:50px;
}
.dropdown-container {
    
    position: absolute;
    top: 0;
    left: 0;
    margin: 20px;
    z-index: 1000;
  }
  
  .dropdown-btn {
    font-size: 24px;
    padding: 10px 15px;
    background-color: #1e3a8a; /* dark blue */
    color: white;
    border: none;
    border-radius: 6px;
    cursor: pointer;
  }
  
  .dropdown-menu {
    display: none;
    flex-direction: column;
    background-color: white;
    color: #333;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.15);
    margin-top: 10px;
    min-width: 200px;
    position: absolute;
    left: 0;
    top: 50px;
    padding: 10px 0;
    overflow: hidden;
  }
  
  .dropdown-menu a {
    padding: 10px 20px;
    text-decoration: none;
    display: block;
    color: #333;
    font-family: serif;
    transition: background-color 0.3s ease;
  }
  
  .dropdown-menu a:hover {
    
    text-decoration: underline;
    
  }
  .dropdown-container:hover .dropdown-menu{
    display:block;
  }
  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 64px 32px 64px;
    display: flex;
    flex-wrap: wrap;
    gap: 48px 96px;
    justify-content: flex-start;
    align-items: flex-start;
    color: #0f4a5c;
  }

  .image-wrapper {
    position: relative;
    flex-shrink: 0;
    width: 400px;
    max-width: 100%;
 
  }

  .image-wrapper img.main-image {
    width: 100%;
    
    display: block;
    object-fit: contain;
  }

.head{
  color:aliceblue;
}
  .content {
    flex: 1 1 500px;
    max-width: 600px;
    margin-left: 10vw;
  }

  .subtitle {
    font-size: 0.75rem;
    font-weight: 600;
    letter-spacing: 0.15em;
    margin-bottom: 12px;
    color: #14404d;
  }

  h1 {
    font-family: 'Merriweather', serif;
    font-weight: 700;
    font-size: 3rem;
    line-height: 1.1;
    margin: 0 0 48px 0;
    color: #14404d;
  }

  .features {
    display: grid;
    grid-template-columns: auto auto ;
    grid-template-rows: auto auto ;
    gap: 48px 64px;
    
  }

  .feature {
    display: flex;
    flex-direction: column;
    gap: 12px;
    max-width: 320px;
    
  }

  .feature svg {
    width: 32px;
    height: 32px;
    stroke: #14404d;
    stroke-width: 1.5;
    fill: none;
    flex-shrink: 0;
  }

  .feature h3 {
    font-family: 'Merriweather', serif;
    font-weight: 700;
    font-size: 1.25rem;
    margin: 0;
  }

  .feature p {
    font-weight: 400;
    font-size: 1rem;
    line-height: 1.5;
    margin: 0;
  }

  @media (max-width: 1024px) {
    .container {
      flex-direction: column;
      align-items: center;
      padding: 32px 16px 48px;
    }
    .image-wrapper {
      width: 300px;
    }
    h1 {
      font-size: 2.25rem;
      margin-bottom: 32px;
      text-align: center;
    }
    .content {
      max-width: 100%;
    }
    .features {
      grid-template-columns: 1fr 1fr;
      gap: 32px 48px;
      justify-items: center;
    }
    .feature {
      max-width: 100%;
      align-items: center;
      text-align: center;
    }
  }

  @media (max-width: 480px) {
    .image-wrapper {
      width: 100%;
      max-width: 320px;
    }
    .features {
      grid-template-columns: 1fr;
      gap: 32px 0;
    }
    .feature {
      max-width: 100%;
    }
  }
  body {
      font-family: "Open Sans", sans-serif;
      background: #f9fafb;
      padding:0;
      margin:0;
    }
    h1 {
      font-family: "Merriweather", serif;
    }
    /* subtle world map behind text */
    .world-map {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 80%;
      max-width: 700px;
      height: 300px;
      opacity: 0.07;
      transform: translate(-50%, -50%);
      pointer-events: none;
      user-select: none;
      z-index: 0;
    }
  </style>
  <script>
    function toggleDropdown() {
      const menu = document.getElementById('dropdownMenu');
      menu.style.display = (menu.style.display === 'flex') ? 'none' : 'flex';
    }
  
    // Optional: Close menu when clicking outside
    window.addEventListener('click', function(e) {
      const menu = document.getElementById('dropdownMenu');
      const button = document.querySelector('.dropdown-btn');
      if (!button.contains(e.target) && !menu.contains(e.target)) {
        menu.style.display = 'none';
      }
    });
  </script>
  
 </head>
 <body class="bg-white text-[#0f3a47]">

<nav class="navbar">
    <div class="dropdown-container">
      <button class="dropdown-btn" onclick="toggleDropdown()" aria-label="Menu">
        &#9776; <!-- Unicode for hamburger menu -->
      </button>
      <div id="dropdownMenu" class="dropdown-menu">
        <a href="#">Home</a>
        <a href="#">About Us</a>
        <a href="#">Pages</a>
        <a href="#">Destinations</a>
        <a href="#">Shop</a>
        <a href="#">Help Center</a>
      </div>
    </div>
   <div class="flex items-center space-x-2">
    <button aria-label="Open menu" class="bg-[#d1e06a] p-4 rounded-md sm:hidden" id="menu-button" type="button">
     <i class="fas fa-bar text-[#0f3a47] text-lg">
     </i>
    </button>
    <div class="logo">
        <img src="images/saravan1.png" alt="Letsgo logo with a stylized leaf and text Letsgo" class="logo-img">
      </div>
   </div>
   
   <a class="hidden sm:inline-block bg-[#d1e06a] text-[#0f3a47] font-semibold rounded-lg px-6 py-3 hover:bg-[#b7d04a] transition" href="#">
    Register Now
   </a>
   <!-- Dropdown menu for mobile -->

  </nav>
  <section class="relative w-full h-[200px] sm:h-[300px] md:h-[280px] lg:h-[350px] xl:h-[300px] flex items-center px-6 sm:px-10 md:px-16 bg-[#0f3a47]/90">
   <img alt="Couple looking at ocean from car side view, tinted with dark teal overlay" id="img" class="absolute inset-0 w-full h-full object-cover object-center -z-10" decoding="async" height="380" loading="lazy" src="https://wanderlustcrew.com/wp-content/uploads/2018/08/Best-Road-Trips-USA-Canada-Mexico-1.jpg" width="1920"/>
   <div class="max-w-5xl">
    <h1 class="text-white text-4xl sm:text-5xl font-serif font-bold leading-tight">
     About Us
    </h1>
    <nav aria-label="Breadcrumb" class="mt-3 text-white text-sm font-normal flex space-x-2 select-none">
     <a class="hover:underline" href="index.php">
      Home
     </a>
     <span class="text-white/70">
      /
     </span>
     <span aria-current="page" class="opacity-80">
     About Us
     </span>
    </nav>
   </div>
  </section>
  <br><br><br>
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
   <section class="relative bg-[#d9f4ff] py-20 px-6 md:px-12 lg:px-24 flex justify-center overflow-hidden">
    <img
      src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/World_map_-_low_resolution.svg/1280px-World_map_-_low_resolution.svg.png"
      alt="Subtle world map background behind text"
      class="world-map"
      aria-hidden="true"
      draggable="false"
    />
    <div
      class="max-w-7xl w-full flex flex-col md:flex-row items-center md:items-start gap-10 md:gap-20 relative z-10"
    >
      <div class="flex-shrink-0 max-w-[220px] md:max-w-[280px] drop-shadow-lg">
        <img
          alt="Golden star shaped contest winner trophy with black base and white crown icon and text contest WINNER"
          class="w-full h-auto rounded-lg"
          height="400"
          src="https://storage.googleapis.com/a1aa/image/4a9161a1-50a7-4f68-d3a2-d42533c59750.jpg"
          width="280"
          loading="lazy"
        />
      </div>
      <div class="max-w-3xl text-center md:text-left" style="margin-left:100px;">
        <h1
          class="text-[#0a3749] text-3xl md:text-5xl font-bold leading-tight mb-6 drop-shadow-sm"
        >
          Celebrated Worldwide For Excellence In Travel.
        </h1>
        <p
          class="text-[#0a3749] text-base md:text-lg mb-4 leading-relaxed max-w-xl mx-auto md:mx-0"
        >
          Celebrating agencies that craft unforgettable journeys and provide
          exceptional service.
          <strong class="font-semibold">Honoring innovation</strong>,
          <strong class="font-semibold">customer satisfaction</strong>, and
          <strong class="font-semibold">travel expertise</strong>.
        </p>
        <p
          class="text-[#0a3749] text-base md:text-lg mb-8 leading-relaxed max-w-xl mx-auto md:mx-0" 
        >
          Award-winning agencies that have helped thousands explore the world.
          <strong class="font-semibold"
            >Recognized for seamless planning, exclusive experiences, and
            reliability</strong
          >. Delivering tailor-made adventures that leave lasting memories. A
          mark of distinction for
          <strong class="font-semibold">top-tier travel professionals</strong>.
        </p>
        <button
          class="bg-[#d3df6f] text-[#0a3749] px-8 py-3 rounded-xl text-base md:text-lg font-normal hover:bg-[#c4d35a] transition-colors shadow-md hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-[#a9b94a]"
          type="button"
          aria-label="View Our Award Video"
        >
          View Our Award Video
        </button>
      </div>
    </div>
  </section>

  <br><Br><br><br>
  <section class="max-w-7xl w-full" style="margin-left:100px;">
   <div class="text-center mb-8">
    <p class="text-xs tracking-widest text-[#3a606d] font-semibold mb-2 uppercase">
     CONNECTING THE WORLD
    </p>
    <h1 class="text-4xl md:text-5xl font-bold leading-tight">
     Branches Across The Globe
    </h1>
   </div>
   <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-10 md:gap-0">
    <div class="flex flex-col gap-12 md:gap-20 md:w-1/4">
     <div class="flex items-center gap-3">
      <i class="fas fa-restroom text-3xl md:text-4xl">
      </i>
      <span class="text-3xl md:text-4xl font-serif font-semibold">
       5L
      </span>
      <span class="text-3xl md:text-4xl font-serif font-semibold">
       +
      </span>
     </div>
     <div>
      <p class="text-xs md:text-sm font-semibold uppercase tracking-widest mb-2 text-[#3a606d]">
       Happy Clients
      </p>
      <p class="text-sm md:text-base leading-relaxed max-w-xs">
       Your smiles, our happiness. Thanks for allowing us to be a part of your success story!
      </p>
     </div>
     <div class="flex items-center gap-3">
      <i class="fas fa-users text-3xl md:text-4xl">
      </i>
      <span class="text-3xl md:text-4xl font-serif font-semibold">
       500
      </span>
      <span class="text-3xl md:text-4xl font-serif font-semibold">
       +
      </span>
     </div>
     <div>
      <p class="text-xs md:text-sm font-semibold uppercase tracking-widest mb-2 text-[#3a606d]">
       Committed Staffs
      </p>
      <p class="text-sm md:text-base leading-relaxed max-w-xs">
       Meet our skilled professionals, passionate about excellence and innovation.
      </p>
     </div>
    </div>
    <div class="md:w-1/2 flex justify-center">
     <img alt="Dark teal world map with red location pins on North America, Greenland, South America, Africa, Europe/Asia, Australia, and New Zealand" class="max-w-full h-auto" height="300" src="https://storage.googleapis.com/a1aa/image/809c3709-f5f0-49b1-96a1-fbc8599322c0.jpg" width="600"/>
    </div>
    <div class="flex flex-col gap-12 md:gap-20 md:w-1/4 text-right">
     <div class="flex items-center justify-end gap-3">
      <span class="text-3xl md:text-4xl font-serif font-semibold">
       6K
      </span>
      <span class="text-3xl md:text-4xl font-serif font-semibold">
       +
      </span>
      <i class="fas fa-map-marked-alt text-3xl md:text-4xl">
      </i>
     </div>
     <div>
      <p class="text-xs md:text-sm font-semibold uppercase tracking-widest mb-2 text-[#3a606d]">
       Memorable Tours
      </p>
      <p class="text-sm md:text-base leading-relaxed max-w-xs ml-auto">
       Embrace the road ahead! Let every adventure inspire and uplift your spirit!
      </p>
     </div>
     <div class="flex items-center justify-end gap-3">
      <span class="text-3xl md:text-4xl font-serif font-semibold">
       420
      </span>
      <span class="text-3xl md:text-4xl font-serif font-semibold">
       +
      </span>
      <i class="fas fa-handshake text-3xl md:text-4xl">
      </i>
     </div>
     <div>
      <p class="text-xs md:text-sm font-semibold uppercase tracking-widest mb-2 text-[#3a606d]">
       Worldwide Partners
      </p>
      <p class="text-sm md:text-base leading-relaxed max-w-xs ml-auto">
       We're proud to partner with industry leaders who share our commitment to excellence.
      </p>
     </div>
    </div>
   </div>
   <div class="mt-12 text-center">
    <div class="inline-flex items-center gap-2 text-[#3a606d]">
     <i class="fas fa-hands-helping text-2xl md:text-3xl">
     </i>
     <span class="text-2xl md:text-3xl font-serif font-semibold">
      15
     </span>
     <span class="text-2xl md:text-3xl font-serif font-semibold">
      +
     </span>
    </div>
    <p class="text-xs md:text-sm font-semibold uppercase tracking-widest mt-2 mb-2 text-[#3a606d]">
     Field Experience
    </p>
    <p class="text-sm md:text-base max-w-md mx-auto leading-relaxed">
     Our experience ensures success in every endeavor. Trust us to turn knowledge into action!
    </p>
   </div>
  </section>
  
  <br><br><br><br>
  <section class="py-20 px-4 md:px-10 lg:px-20 bg-white">
   <div class="max-w-7xl mx-auto text-center">
    <p class="text-xs text-[#0f3a4a] tracking-widest mb-3 uppercase font-semibold">
     Our Trusted Global Collaborations
    </p>
    <h2 class="text-[#0f3a4a] text-4xl md:text-5xl font-serif font-bold mb-14">
     Exclusive Affiliate Network
    </h2>
    <div class="flex flex-wrap justify-center items-center gap-12 md:gap-20">
     <img alt="Logo of Bid company with stylized text and arrow" class="max-h-12 object-contain" height="50" src="images/bird.png" width="200"/>
     <img alt="TravelClick logo with airplane and door icon and text" class="max-h-12 object-contain" height="50" src="https://images.crunchbase.com/image/upload/c_pad,f_auto,q_auto:eco,dpr_1/v1397751106/22ccce7ba4c96dce12aed8cc9e7aa0d8.png" width="200"/>
     <img alt="FlyAway logo with stylized text and airplane icon" class="max-h-12 object-contain" height="50" src="images/fly.jpg" width="200"/>
     <img alt="Travel logo with stylized airplane icon and text" class="max-h-12 object-contain" height="50" src="images/trivago.png" width="200"/>
     <img alt="PRO Holidays logo with globe icon and text in German" class="max-h-12 object-contain" height="50" src="images/go.jpg" width="200"/>
     <img alt="Travel logo italic style with stylized text" class="max-h-12 object-contain" height="50" src="images/alpa.jpg" width="200"/>
    </div>
   </div>
  </section>
  <br><br><br><br>
  
<?php include('footer.php') ?>