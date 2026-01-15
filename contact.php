<?php include("navbar.php") ?>
<section class="relative w-full h-[200px] sm:h-[300px] md:h-[280px] lg:h-[350px] xl:h-[300px] flex items-center px-6 sm:px-10 md:px-16 bg-[#0f3a47]/90">
  <img alt="Couple looking at ocean" id="img" class="absolute inset-0 w-full h-full object-cover object-center -z-10" src="https://wanderlustcrew.com/wp-content/uploads/2018/08/Best-Road-Trips-USA-Canada-Mexico-1.jpg" />
  <div class="max-w-5xl">
    <h1 class="text-white text-4xl sm:text-5xl font-serif font-bold leading-tight">Contact Us</h1>
    <nav class="mt-3 text-white text-sm font-normal flex space-x-2 select-none" aria-label="Breadcrumb">
      <a class="hover:underline" href="index.php">Home</a>
      <span class="text-white/70">/</span>
      <span aria-current="page" class="opacity-80">contact Us</span>
    </nav>
  </div>
</section>
<br><br><br>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact Us - Lets GO Site</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap"
    rel="stylesheet"
  />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  />
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
    h1, h2, h3, h4, h5, h6, .font-playfair {
      font-family: 'Playfair Display', serif;
    }
  </style>
</head>
<body class="bg-white text-[#0f3a47]">
  <div class="max-w-7xl mx-auto px-6 py-16 md:py-20 lg:py-24 flex flex-col md:flex-row border border-transparent md:border-r md:border-gray-200">
    <!-- Left side form -->
    <div class="md:w-1/2 pr-0 md:pr-12 border-b md:border-b-0 md:border-r border-gray-200 pb-10 md:pb-0">
      <h1 class="text-4xl font-playfair font-semibold mb-4 leading-tight">Contact Us Today</h1>
      <p class="text-base max-w-xl mb-10 leading-relaxed">
        Curabitur porta quis facilisis per donec mattis nunc hendrerit malesuada parturient ac. Eu lacus natoque morbi ipsum tempor semper vulputate.
      </p>
      <form class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-6 max-w-xl">
        <div>
          <label for="name" class="block mb-2 font-playfair font-semibold text-[#0f3a47] text-lg">Your Name<span class="text-[#0f3a47]">*</span></label>
          <input
            id="name"
            type="text"
            placeholder="Full Name"
            class="w-full rounded-lg border border-gray-200 px-5 py-3 text-[#0f3a47] placeholder:text-[#0f3a47]/60 focus:outline-none focus:ring-2 focus:ring-[#c9db6e]"
          />
        </div>
        <div>
          <label for="phone" class="block mb-2 font-playfair font-semibold text-[#0f3a47] text-lg">Phone Number<span class="text-[#0f3a47]">*</span></label>
          <input
            id="phone"
            type="tel"
            placeholder="Phone Number"
            class="w-full rounded-lg border border-gray-200 px-5 py-3 text-[#0f3a47] placeholder:text-[#0f3a47]/60 focus:outline-none focus:ring-2 focus:ring-[#c9db6e]"
          />
        </div>
        <div>
          <label for="email" class="block mb-2 font-playfair font-semibold text-[#0f3a47] text-lg">Email ID<span class="text-[#0f3a47]">*</span></label>
          <input
            id="email"
            type="email"
            placeholder="Mail Address"
            class="w-full rounded-lg border border-gray-200 px-5 py-3 text-[#0f3a47] placeholder:text-[#0f3a47]/60 focus:outline-none focus:ring-2 focus:ring-[#c9db6e]"
          />
        </div>
        <div>
          <label for="date" class="block mb-2 font-playfair font-semibold text-[#0f3a47] text-lg">Date To Travel<span class="text-[#0f3a47]">*</span></label>
          <input
            id="date"
            type="date"
            placeholder="Pick the Date"
            class="w-full rounded-lg border border-gray-200 px-5 py-3 text-[#0f3a47] placeholder:text-[#0f3a47]/60 focus:outline-none focus:ring-2 focus:ring-[#c9db6e]"
          />
        </div>
        <div>
          <label for="place" class="block mb-2 font-playfair font-semibold text-[#0f3a47] text-lg">Choose Place</label>
          <select
            id="place"
            class="w-full rounded-lg border border-gray-200 px-5 py-3 text-[#0f3a47] placeholder:text-[#0f3a47]/60 focus:outline-none focus:ring-2 focus:ring-[#c9db6e]"
          >
            <option>Destinations*</option>
            <option>Destination 1</option>
            <option>Destination 2</option>
            <option>Destination 3</option>
          </select>
        </div>
        <div>
          <label for="people" class="block mb-2 font-playfair font-semibold text-[#0f3a47] text-lg">No Of People To Travel</label>
          <select
            id="people"
            class="w-full rounded-lg border border-gray-200 px-5 py-3 text-[#0f3a47] placeholder:text-[#0f3a47]/60 focus:outline-none focus:ring-2 focus:ring-[#c9db6e]"
          >
            <option>Guests</option>
            <option>1</option>
            <option>2</option>
            <option>3+</option>
          </select>
        </div>
        <fieldset class="sm:col-span-2 mt-4">
          <legend class="mb-3 font-playfair font-semibold text-[#0f3a47] text-lg">Choose Category<span class="text-[#0f3a47]">*</span></legend>
          <div class="flex flex-wrap gap-x-6 gap-y-2 text-[#0f3a47] font-semibold text-sm">
            <label class="flex items-center gap-2 cursor-pointer">
              <input type="checkbox" class="w-4 h-4 border border-gray-300 rounded" />
              Corporate
            </label>
            <label class="flex items-center gap-2 cursor-pointer">
              <input type="checkbox" class="w-4 h-4 border border-gray-300 rounded" />
              Friends
            </label>
            <label class="flex items-center gap-2 cursor-pointer">
              <input type="checkbox" class="w-4 h-4 border border-gray-300 rounded" />
              Family
            </label>
            <label class="flex items-center gap-2 cursor-pointer">
              <input type="checkbox" class="w-4 h-4 border border-gray-300 rounded" />
              Couples
            </label>
            <label class="flex items-center gap-2 cursor-pointer">
              <input type="checkbox" class="w-4 h-4 border border-gray-300 rounded" />
              Single
            </label>
            <label class="flex items-center gap-2 cursor-pointer">
              <input type="checkbox" class="w-4 h-4 border border-gray-300 rounded" />
              Other
            </label>
          </div>
        </fieldset>
        <div class="sm:col-span-2 mt-8">
          <button
            type="submit"
            class="w-full bg-[#c9db6e] text-[#0f3a47] font-normal text-base py-3 rounded-tr-3xl rounded-br-3xl hover:bg-[#b4ca5a] transition"
          >
            Submit Now
          </button>
        </div>
      </form>
    </div>

    <!-- Right side contact info -->
    <div class="md:w-1/2 pl-0 md:pl-12 pt-10 md:pt-0">
      <p class="text-xs font-semibold tracking-widest uppercase mb-2 text-[#0f3a47]/80">Reach Out</p>
      <h2 class="text-4xl font-playfair font-semibold mb-4 leading-tight">We’d Love To Hear</h2>
      <p class="text-base max-w-lg mb-10 leading-relaxed">
        Gravida sed sem aliquam venenatis; habitant accumsan natoque suspendisse metus ut. Mus lacinia commodo et etiam nascetur.
      </p>

      <ul class="space-y-8 max-w-lg">
        <li class="flex items-start gap-5">
          <div class="flex-shrink-0 bg-[#c9db6e] rounded-md p-4">
            <i class="fas fa-map-marked-alt text-[#0f3a47] text-xl"></i>
          </div>
          <div>
            <h3 class="font-playfair font-semibold text-xl mb-1">Territorial Office</h3>
            <p class="text-[#0f3a47] text-base leading-relaxed">
              No: 58 A, East Madison Street, Baltimore, MD, USA 4508
            </p>
          </div>
        </li>
        <li class="flex items-start gap-5">
          <div class="flex-shrink-0 bg-[#c9db6e] rounded-md p-4">
            <i class="fas fa-phone-alt text-[#0f3a47] text-xl"></i>
          </div>
          <div>
            <h3 class="font-playfair font-semibold text-xl mb-1">Talk To Us</h3>
            <p class="text-[#0f3a47] text-base leading-relaxed">
              +00 -123456789 / +123-47895600
            </p>
          </div>
        </li>
        <li class="flex items-start gap-5">
          <div class="flex-shrink-0 bg-[#c9db6e] rounded-md p-4">
            <i class="fas fa-envelope text-[#0f3a47] text-xl"></i>
          </div>
          <div>
            <h3 class="font-playfair font-semibold text-xl mb-1">Let's Chat</h3>
            <p class="text-[#0f3a47] text-base leading-relaxed">
              contact@example.com / support@example.com
            </p>
          </div>
        </li>
        <li class="flex items-start gap-5">
          <div class="flex-shrink-0 bg-[#c9db6e] rounded-md p-4">
            <i class="fas fa-calendar-alt text-[#0f3a47] text-xl"></i>
          </div>
          <div>
            <h3 class="font-playfair font-semibold text-xl mb-1">Opening Hours</h3>
            <p class="text-[#0f3a47] text-base leading-relaxed">
              Mon - Thu : 11AM - 5PM, Fri - Sun : 10AM - 5PM
            </p>
          </div>
        </li>
      </ul>
    </div>

    <!-- Scroll to top button bottom right -->
    <button
      aria-label="Scroll to top"
      class="fixed bottom-6 right-6 bg-[#c9db6e] rounded-tl-xl rounded-bl-xl p-4 shadow-md hover:bg-[#b4ca5a] transition"
      onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
    >
      <i class="fas fa-chevron-up text-[#0f3a47] text-lg"></i>
    </button>
  </div>
<br><BR>
<div class="bg-[#0d3b49] text-white relative min-h-screen flex flex-col justify-center items-center px-6 py-10">
<div class="max-w-[1200px] w-full">
   <p class="text-xs font-semibold text-[#a3c1c9] text-center tracking-widest mb-2">
    OUR LOCATION CONTACT
   </p>
   <h1 class="text-4xl md:text-5xl font-bold text-center mb-10 font-serif">
    Our Worldwide Branches
   </h1>
   <div class="flex flex-col md:flex-row gap-8 md:gap-6 border-t border-t-[#14404f] pt-6">
    <!-- London -->
    <div class="flex-1 border-r border-r-[#14404f] pr-4 md:pr-6">
     <img alt="London Tower Bridge at sunset with purple and orange sky" class="w-full h-auto mb-4 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/d3df00b5-a0c5-46bf-6d71-b4d0f273721b.jpg" width="600"/>
     <p class="text-xs font-semibold uppercase text-[#a3c1c9] mb-1 tracking-widest">
      United Kingdom
     </p>
     <h2 class="text-2xl font-semibold font-serif mb-3">
      London
     </h2>
     <ul class="space-y-2 text-sm text-white">
      <li class="flex items-center gap-2">
       <i class="fas fa-map-marker-alt">
       </i>
       221B Baker Street, London, NW16, UK
      </li>
      <li class="flex items-center gap-2">
       <i class="fas fa-phone">
       </i>
       +000-123-789-456
      </li>
      <li class="flex items-center gap-2">
       <i class="fas fa-envelope">
       </i>
       contact@example.com
      </li>
     </ul>
    </div>
    <!-- San Marino -->
    <div class="flex-1 border-r border-r-[#14404f] pr-4 md:pr-6">
     <img alt="Aerial view of San Marino island and lake with buildings and greenery" class="w-full h-auto mb-4 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/1d811b83-5867-4e83-2e29-a21d208c78f6.jpg" width="600"/>
     <p class="text-xs font-semibold uppercase text-[#a3c1c9] mb-1 tracking-widest">
      Italy
     </p>
     <h2 class="text-2xl font-semibold font-serif mb-3">
      San Marino
     </h2>
     <ul class="space-y-2 text-sm text-white">
      <li class="flex items-center gap-2">
       <i class="fas fa-map-marker-alt">
       </i>
       123 Broadway, San Marino, NY 101, Italy
      </li>
      <li class="flex items-center gap-2">
       <i class="fas fa-phone">
       </i>
       +123-789-456-000
      </li>
      <li class="flex items-center gap-2">
       <i class="fas fa-envelope">
       </i>
       support@example.com
      </li>
     </ul>
    </div>
    <!-- Amsterdam -->
    <div class="flex-1 pr-4 md:pr-0">
     <img alt="Amsterdam plaza with canal and buildings at sunset with cloudy sky" class="w-full h-auto mb-4 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/05461fae-917c-4850-2062-fe6d4e77dc62.jpg" width="600"/>
     <p class="text-xs font-semibold uppercase text-[#a3c1c9] mb-1 tracking-widest">
      Netherland
     </p>
     <h2 class="text-2xl font-semibold font-serif mb-3">
      Amsterdam
     </h2>
     <ul class="space-y-2 text-sm text-white">
      <li class="flex items-center gap-2">
       <i class="fas fa-map-marker-alt">
       </i>
       153 GE Street, Amsterdam, Netherland
      </li>
      <li class="flex items-center gap-2">
       <i class="fas fa-phone">
       </i>
       +000-123-456-789
      </li>
      <li class="flex items-center gap-2">
       <i class="fas fa-envelope">
       </i>
       info@example.com
      </li>
     </ul>
    </div>
   </div>
   <!-- Navigation Buttons -->
   <div class="flex justify-center gap-4 mt-10">
    <button aria-label="Previous" class="bg-[#c9db7a] text-[#0d3b49] font-bold text-3xl w-14 h-14 rounded-md flex items-center justify-center hover:brightness-90 transition">
     &lt;
    </button>
    <button aria-label="Next" class="bg-[#c9db7a] text-[#0d3b49] font-bold text-3xl w-14 h-14 rounded-md flex items-center justify-center hover:brightness-90 transition">
     &gt;
    </button>
   </div>
  </div>
  <!-- Scroll to top button -->
  <button aria-label="Scroll to top" class="fixed bottom-6 right-6 bg-[#c9db7a] w-12 h-12 rounded-md flex items-center justify-center text-[#0d3b49] hover:brightness-90 transition" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
   <i class="fas fa-chevron-up text-xl">
   </i>
  </button>
</div>




<br><br><br>
<?php include("footer.php") ?>