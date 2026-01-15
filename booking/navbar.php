<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Browse Trips 
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&amp;family=Open+Sans&amp;display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="../style1.css">
  <style>
   body {
      font-family: 'Open Sans', sans-serif;
      font-size: 16px;
    }
    h1, h2, h3, h4, h5, h6 {
      font-family: 'Merriweather', serif;
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
  <!-- Navbar -->
  
  
  <nav class="navbar">
    <div class="dropdown-container">
      <button class="dropdown-btn" onclick="toggleDropdown()" aria-label="Menu">
        &#9776; <!-- Unicode for hamburger menu -->
      </button>
      <div id="dropdownMenu" class="dropdown-menu">
        <a href="../index.php">Home</a>
        <a href="../about.php">About Us</a>
        <a href="../browse.php">Browse Trip</a>
        <a href="../destination.php">Destinations</a>
        <a href="../shop.php">Shop</a>
        <a href="../faq.php">Frequently QA's</a>
        <a href="../contact.php">Contact Us</a>
        
      </div>
    </div>
   <div class="flex items-center space-x-2">
    <button aria-label="Open menu" class="bg-[#d1e06a] p-4 rounded-md sm:hidden" id="menu-button" type="button">
     <i class="fas fa-bar text-[#0f3a47] text-lg">
     </i>
    </button>
    <div class="logo">
        <img src="../images/saravan1.png" alt="Letsgo logo with a stylized leaf and text Letsgo" class="logo-img">
      </div>
   </div>
   
   <a class="hidden sm:inline-block bg-[#d1e06a] text-[#0f3a47] font-semibold rounded-lg px-6 py-3 hover:bg-[#b7d04a] transition" href="../register.html">
    Register Now
   </a>
   <!-- Dropdown menu for mobile -->

  </nav>