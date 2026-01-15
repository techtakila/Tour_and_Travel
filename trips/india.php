<?php include("navbar.php") ?>

<head>
    <link rel="stylesheet" href="../style1.css">
</head>


<section class="relative w-full h-[200px] sm:h-[300px] md:h-[280px] lg:h-[350px] xl:h-[300px] flex items-center px-6 sm:px-10 md:px-16 bg-[#0f3a47]/90">
<img alt="Couple looking at ocean" id="img" class="absolute inset-0 w-full h-full object-cover object-center -z-10" src="https://wanderlustcrew.com/wp-content/uploads/2018/08/Best-Road-Trips-USA-Canada-Mexico-1.jpg" />
<div class="max-w-5xl">
  <h1 class="text-white text-6xl sm:text-6xl font-serif font-bold leading-tight">India</h1>
  <nav class="mt-3 text-white text-sm font-normal flex space-x-2 select-none" aria-label="Breadcrumb">
      <a class="hover:underline" href="index.php">Home</a>
      <span class="text-white/70">/</span>
      <a class="hover:underline" href="../destination.php">Destinations</a>
      <span class="text-white/70">/</span>
      <span aria-current="page" class="opacity-80">India</span>

    </nav>
</div>
</section>
<br><br><br>
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   India Trips
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   /* Custom font for headings to match the screenshot's serif style */
    @import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap');
    h2 {
      font-family: 'Merriweather', serif;
    }
  </style>
 </head>
 <body class="bg-white">
  <div class="max-w-7xl mx-auto px-6 py-24 flex flex-wrap gap-6">
<!-- Card 1 -->
<div class="relative w-full max-w-md aspect-[4/4] rounded-lg overflow-hidden group cursor-pointer">
  <img
    alt="Japan Winter Wonderland"
    class="w-full h-full object-cover rounded-lg transform transition-transform duration-500 group-hover:scale-110"
    src="https://lp-cms-production.imgix.net/2019-06/384e10f39ebc6fab9b991467541ce8ed-dal-lake.jpg"
  />
  <div class="absolute inset-0 bg-gradient-to-t from-[#0f3a4a]/60 to-transparent group-hover:from-black/70 transition-all duration-500 rounded-lg"></div>
  <div class="absolute bottom-6 left-6 text-white max-w-[90%]">
    <h2 class="text-xl font-bold leading-tight mb-3">Kashmir Valley Tour</h2>
    <div class="flex items-center gap-2 mb-2 text-sm">
      <i class="far fa-clock"></i>
      <span>5 Days - 4 Nights</span>
    </div>
    <div class="flex items-center gap-2 mb-4 text-sm">
      <i class="far fa-calendar-alt"></i>
      <span>All New Year ( Dec - Apr )</span>
    </div>
    <p class="text-sm">₹55000.00</p>
    <br>
    <a href="#" class="opacity-0 group-hover:opacity-100 transition-opacity duration-500 inline-block bg-[#d9f99d] text-black text-sm font-semibold px-4 py-2 rounded-full shadow-md hover:bg-[#0c4a60]">Explore Trip</a>
  </div>
</div>

<!-- Card 2 -->
<div class="relative w-full max-w-md aspect-[4/4] rounded-lg overflow-hidden group cursor-pointer">
  <img
    alt="Japan Ancient Tour"
    class="w-full h-full object-cover rounded-lg transform transition-transform duration-500 group-hover:scale-110"
    src="https://travelogyindia.b-cdn.net/storage/app/upload/akshardham-temple-tour.jpg"
  />
  <div class="absolute inset-0 bg-gradient-to-t from-[#0f3a4a] to-transparent rounded-lg group-hover:from-black/70"></div>
  <div class="absolute bottom-6 left-6 text-white max-w-[90%]">
    <h2 class="text-xl font-bold leading-tight mb-3">India Pilgrimage Tour</h2>
    <div class="flex items-center gap-2 mb-2 text-sm">
      <i class="far fa-clock"></i>
      <span>8 Days - 7 Nights</span>
    </div>
    <div class="flex items-center gap-2 mb-4 text-sm">
      <i class="far fa-calendar-alt"></i>
      <span>All New Year ( Apr - Mar )</span>
    </div>
    <p class="text-sm">₹9.00</p>
    <br>
    <a href="#" class="opacity-0 group-hover:opacity-100 transition-opacity duration-500 inline-block bg-[#c4d86f] text-black text-sm font-semibold px-4 py-2 rounded-full shadow-md hover:bg-[#0c4a60]">Explore Trip</a>
  </div>
</div>
</div>
  <!-- Scroll to top button -->
   <a href="#">
  <button aria-label="Scroll to top" class="fixed bottom-8 right-8 bg-[#d9f99d] rounded-md w-14 h-14 flex items-center justify-center shadow-md hover:shadow-lg transition-shadow">
   <i class="fas fa-chevron-up text-[#166534] text-lg">
   </i>
  </button></a>
<br><br><br>
<?php include("../footer.php") ?>