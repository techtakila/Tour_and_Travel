<?php include("navbar.php") ?>

<section class="relative w-full h-[200px] sm:h-[300px] md:h-[280px] lg:h-[350px] xl:h-[300px] flex items-center px-6 sm:px-10 md:px-16 bg-[#0f3a47]/90">
  <img alt="Couple looking at ocean" id="img" class="absolute inset-0 w-full h-full object-cover object-center -z-10" src="https://wanderlustcrew.com/wp-content/uploads/2018/08/Best-Road-Trips-USA-Canada-Mexico-1.jpg" />
  <div class="max-w-5xl">
    <h1 class="text-white text-4xl sm:text-5xl font-serif font-bold leading-tight">Destination</h1>
    <nav class="mt-3 text-white text-sm font-normal flex space-x-2 select-none" aria-label="Breadcrumb">
      <a class="hover:underline" href="index.php">Home</a>
      <span class="text-white/70">/</span>
      <span aria-current="page" class="opacity-80">Destinations</span>
    </nav>
  </div>
</section>
<br><br><br>
<head>
  <style>
    article:hover{
      border-top-right-radius: 40px;
  border-bottom-right-radius: 40px;
    }
    </style>
</head>
<body class="p-8 bg-white">
  <main class="max-w-[1450px] mx-auto flex flex-col lg:flex-row gap-10">
    <!-- Destination Cards Grid -->
    <section class="grid grid-cols-1 md:grid-cols-2 gap-10 flex-1">

      <!-- CARD TEMPLATE -->
      <!-- Repeat this template for each destination -->

      <!-- India -->
      <article class="relative group overflow-hidden h-[500px] rounded-lg shadow-lg group-hover:border-top-left-radius: 40px 
      group-hover:border-bottom-right-radius: 40px">
        <img
          src="https://storage.googleapis.com/a1aa/image/f2d32dfc-466f-48df-6b6a-f11677d3b9f3.jpg"
          alt="India"
          class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105 group-hover:rounded-2xl "
        />
        <!-- Overlay on hover -->
        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-60 transition duration-500 rounded-lg"></div>
        <!-- Text content -->
        <div class="absolute bottom-10 left-6 text-white drop-shadow-md transition-all duration-300">
          <p class="text-[25px] font-semibold">India</p>
          <p class="text-[15px] font-normal">Price Starts (₹15 - ₹2000)</p>
          <a href="trips/india.php" class="mt-2 inline-block bg-white text-black px-4 py-1 text-sm rounded-full opacity-0 group-hover:opacity-100 transition duration-300">
            Browse Trip
          </a>
        </div>
      </article>
      
 <article class="relative group overflow-hidden h-[500px] rounded-lg shadow-lg">
        <img
          src="https://wallpapercave.com/wp/wp4563493.jpg"
          alt="Alps"
          class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105 group-hover:rounded-2xl"
        />
        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-60 transition duration-500 rounded-lg"></div>
        <div class="absolute bottom-10 left-6 text-white drop-shadow-md transition-all duration-300">
          <p class="text-[25px] font-semibold">Alps</p>
          <p class="text-[15px] font-normal">Price Starts (₹380 - ₹500)</p>
          <a href="trips/alps.php" class="mt-2 inline-block bg-white text-black px-4 py-1 text-sm rounded-full opacity-0 group-hover:opacity-100 transition duration-300">
            Browse Trip
          </a>
        </div>
      </article>
      <!-- Egypt -->
      <article class="relative group overflow-hidden h-[500px] rounded-lg shadow-lg">
        <img
          src="https://storage.googleapis.com/a1aa/image/179dcba7-becd-45b2-da33-ce709d79cc87.jpg"
          alt="Egypt"
          class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105 group-hover:rounded-2xl"
        />
        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-60 transition duration-500 rounded-lg"></div>
        <div class="absolute bottom-10 left-6 text-white drop-shadow-md transition-all duration-300">
          <p class="text-[25px] font-semibold">Egypt</p>
          <p class="text-[15px] font-normal">Price Starts (₹100 - ₹2000)</p>
          <a href="#" class="mt-2 inline-block bg-white text-black px-4 py-1 text-sm rounded-full opacity-0 group-hover:opacity-100 transition duration-300">
            Browse Trip
          </a>
        </div>
      </article>

      <!-- Repeat the same structure for the remaining destinations -->

      <!-- Turkey -->
      <article class="relative group overflow-hidden h-[500px] rounded-lg shadow-lg">
        <img
          src="https://storage.googleapis.com/a1aa/image/025c1c0a-74d1-4136-f022-959630f763cb.jpg"
          alt="Turkey"
          class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105 group-hover:rounded-2xl"
        />
        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-60 transition duration-500 rounded-lg"></div>
        <div class="absolute bottom-10 left-6 text-white drop-shadow-md transition-all duration-300">
          <p class="text-[25px] font-semibold">Turkey</p>
          <p class="text-[15px] font-normal">Price Starts (₹250 - ₹470)</p>
          <a href="#" class="mt-2 inline-block bg-white text-black px-4 py-1 text-sm rounded-full opacity-0 group-hover:opacity-100 transition duration-300">
            Browse Trip
          </a>
        </div>
      </article>

      <!-- Australia -->
      <article class="relative group overflow-hidden h-[500px] rounded-lg shadow-lg">
        <img
          src="https://storage.googleapis.com/a1aa/image/0298a531-2ebe-4db2-2297-5dcdf810bacb.jpg"
          alt="Australia"
          class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105 group-hover:rounded-2xl"
        />
        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-60 transition duration-500 rounded-lg"></div>
        <div class="absolute bottom-10 left-6 text-white drop-shadow-md transition-all duration-300">
          <p class="text-[25px] font-semibold">Australia</p>
          <p class="text-[15px] font-normal">Price Starts (₹164 - ₹200)</p>
          <a href="#" class="mt-2 inline-block bg-white text-black px-4 py-1 text-sm rounded-full opacity-0 group-hover:opacity-100 transition duration-300">
            Browse Trip
          </a>
        </div>
      </article>

      <!-- Switzerland -->
      <article class="relative group overflow-hidden h-[500px] rounded-lg shadow-lg">
        <img
          src="https://storage.googleapis.com/a1aa/image/dd00fbb6-2048-4bc3-24c8-6c3a2099b62f.jpg"
          alt="Switzerland"
          class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105 group-hover:rounded-2xl"
        />
        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-60 transition duration-500 rounded-lg"></div>
        <div class="absolute bottom-10 left-6 text-white drop-shadow-md transition-all duration-300">
          <p class="text-[25px] font-semibold">Switzerland</p>
          <p class="text-[15px] font-normal">Price Starts (₹275 - ₹300)</p>
          <a href="#" class="mt-2 inline-block bg-white text-black px-4 py-1 text-sm rounded-full opacity-0 group-hover:opacity-100 transition duration-300">
            Browse Trip
          </a>
        </div>
      </article>

      <!-- Japan -->
      <article class="relative group overflow-hidden h-[500px] rounded-lg shadow-lg">
        <img
          src="https://storage.googleapis.com/a1aa/image/08d4d805-8954-4010-f9f3-6e77f914b4bb.jpg"
          alt="Japan"
          class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105 group-hover:rounded-2xl"
        />
        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-60 transition duration-500 rounded-lg"></div>
        <div class="absolute bottom-10 left-6 text-white drop-shadow-md transition-all duration-300">
          <p class="text-[25px] font-semibold">Japan</p>
          <p class="text-[15px] font-normal">Price Starts (₹345 - ₹600)</p>
          <a href="trips/japan.php" class="mt-2 inline-block bg-white text-black px-4 py-1 text-sm rounded-full opacity-0 group-hover:opacity-100 transition duration-300">
            Browse Trip
          </a>
        </div>
      </article>

      <!-- Italy -->
      <article class="relative group overflow-hidden h-[500px] rounded-lg shadow-lg">
        <img
          src="https://storage.googleapis.com/a1aa/image/01acdc2f-02ff-4dc4-761d-bb5a7bc1f3e8.jpg"
          alt="Italy"
          class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105 group-hover:rounded-2xl"
        />
        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-60 transition duration-500 rounded-lg"></div>
        <div class="absolute bottom-10 left-6 text-white drop-shadow-md transition-all duration-300">
          <p class="text-[25px] font-semibold">Italy</p>
          <p class="text-[15px] font-normal">Price Starts (₹195 - ₹345)</p>
          <a href="#" class="mt-2 inline-block bg-white text-black px-4 py-1 text-sm rounded-full opacity-0 group-hover:opacity-100 transition duration-300">
            Browse Trip
          </a>
        </div>
      </article>

      <!-- France -->
      <article class="relative group overflow-hidden h-[500px] rounded-lg shadow-lg">
        <img
          src="https://storage.googleapis.com/a1aa/image/b2a301d9-3c95-4629-bb02-485d3adaab41.jpg"
          alt="France"
          class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105 group-hover:rounded-2xl"
        />
        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-60 transition duration-500 rounded-lg"></div>
        <div class="absolute bottom-10 left-6 text-white drop-shadow-md transition-all duration-300">
          <p class="text-[25px] font-semibold">France</p>
          <p class="text-[15px] font-normal">Price Starts (₹180 - ₹200)</p>
          <a href="#" class="mt-2 inline-block bg-white text-black px-4 py-1 text-sm rounded-full opacity-0 group-hover:opacity-100 transition duration-300">
            Browse Trip
          </a>
        </div>
      </article>
<!-- europe -->

    </section>
 

   <!-- Right sidebar -->
   <aside>
    <!-- Destinations tags -->
    <section class="w-full lg:w-96 flex-shrink-0 space-y-10  p-8 rounded-lg bg-[#d9f4ff]">
     <h2 class="mb-3 text-lg font-bold">
      Destinations
     </h2>
     <div class="flex flex-wrap gap-3">
      <span class="bg-[#0f3a47] text-white rounded-full px-4 py-2">
       India
      </span>
      <span class="bg-[#0f3a47] text-white rounded-full px-4 py-2">
       Italy
      </span>
      <span class="bg-[#0f3a47] text-white rounded-full px-4 py-2">
       Thailand
      </span>
      <span class="bg-[#0f3a47] text-white rounded-full px-4 py-2">
       Turkey
      </span>
      <span class="bg-[#0f3a47] text-white rounded-full px-4 py-2">
       Switzerland
      </span>
      <span class="bg-[#0f3a47] text-white rounded-full px-4 py-2">
       Korea
      </span>
      <span class="bg-[#0f3a47] text-white rounded-full px-4 py-2">
       Australia
      </span>
      <span class="bg-[#0f3a47] text-white rounded-full px-4 py-2">
       Japan
      </span>
      <span class="bg-[#0f3a47] text-white rounded-full px-4 py-2">
       China
      </span>
      <span class="bg-[#0f3a47] text-white rounded-full px-4 py-2">
       France
      </span>
      <span class="bg-[#0f3a47] text-white rounded-full px-4 py-2">
       Israel
      </span>
     </div>
    </section>
    <br><br><br>
    <!-- Enquire Now form -->
    <section class="w-full lg:w-96 flex-shrink-0 space-y-10  p-8 rounded-lg bg-[#d9f4ff]">
     <h2 class="mb-4 text-lg font-bold">
      Enquire Now
     </h2>
     <form class="flex flex-col gap-4 text-base font-normal">
      <input class="w-full p-3 border border-gray-300 rounded text-base text-[#0f3a47]" placeholder="Name *" required="" type="text"/>
      <input class="w-full p-3 border border-gray-300 rounded text-base text-[#0f3a47]" placeholder="City of Residence *" required="" type="text"/>
      <input class="w-full p-3 border border-gray-300 rounded text-base text-[#0f3a47]" placeholder="Email *" required="" type="email"/>
      <input class="w-full p-3 border border-gray-300 rounded text-base text-[#0f3a47]" placeholder="Phone Number *" required="" type="tel"/>
      <input class="w-full p-3 border border-gray-300 rounded text-base text-[#0f3a47]" placeholder="Date of Travel *" required="" type="text"/>
      <select class="w-full p-3 border border-gray-300 rounded text-base text-[#0f3a47]" required="">
       <option disabled="" selected="" value="">
        No of People *
       </option>
       <option>
        1
       </option>
       <option>
        2
       </option>
       <option>
        3
       </option>
       <option>
        4+
       </option>
      </select>
      <textarea class="w-full p-3 border border-gray-300 rounded text-base text-[#0f3a47]" placeholder="Message *" required="" rows="4"></textarea>
      <button class="bg-[#0f3a47] text-white text-base font-semibold rounded-md py-3 mt-3 hover:bg-[#0a2730] transition-colors" type="submit">
       Book Online
      </button>
     </form>
    </section>
    <br><br><br>
    <!-- Offers -->
    <section class="w-full lg:w-96 flex-shrink-0 space-y-10  p-8 rounded-lg bg-[#d9f4ff]">
     <h2 class="mb-4 text-lg font-bold">
      Offers
     </h2>
     <img alt="Offer poster with text 'Ready to explore the world' and travel related graphics" 
     class="w-full rounded" height="540" src="images/template.png" width="360"/>
    </section>
   </aside>
  </main>
 
<br><br><br>

<?php include('footer.php') ?>
