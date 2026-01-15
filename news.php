<?php include('navbar.php') ?>
<section class="relative w-full h-[200px] sm:h-[300px] md:h-[280px] lg:h-[350px] xl:h-[300px] flex items-center px-6 sm:px-10 md:px-16 bg-[#0f3a47]/90">
   <img alt="Couple looking at ocean from car side view, tinted with dark teal overlay" id="img" class="absolute inset-0 w-full h-full object-cover object-center -z-10" decoding="async" height="380" loading="lazy" src="https://wanderlustcrew.com/wp-content/uploads/2018/08/Best-Road-Trips-USA-Canada-Mexico-1.jpg" width="1920"/>
   <div class="max-w-5xl">
    <h1 class="text-white text-4xl sm:text-5xl font-serif font-bold leading-tight">
     Newsletter
    </h1>
    <nav aria-label="Breadcrumb" class="mt-3 text-white text-sm font-normal flex space-x-2 select-none">
     <a class="hover:underline" href="index.php">
      Home
     </a>
     <span class="text-white/70">
      /
     </span>
     <span aria-current="page" class="opacity-80">
      News Detail
     </span>
    </nav>
   </div>
  </section>
  <br><br>
  <style>
    body {
      font-family: "Open Sans", sans-serif;
      color: #0f3c44;
      background-color: white;
    }
    h1, h2, h3, h4, h5, h6 {
      font-family: "Playfair Display", serif;
    }
    .meta-text {
      letter-spacing: 0.2em;
      font-size:15px;
      font-family: "Open Sans", sans-serif;
      font-weight: 300;
      color: #0f3c44;
    }
  </style>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const input = form.querySelector("input");

    form.addEventListener("submit", function (e) {
      e.preventDefault();

      const search = input.value.trim().toLowerCase();
      const posts = document.querySelectorAll("#blog-posts article");

      let found = false;

      posts.forEach(post => {
        const keywords = post.dataset.keywords.toLowerCase();
        const title = post.querySelector("h2").textContent.toLowerCase();
        const excerpt = post.querySelector("p").textContent.toLowerCase();

        if (
          keywords.includes(search) ||
          title.includes(search) ||
          excerpt.includes(search)
        ) {
          post.style.display = "";
          found = true;
        } else {
          post.style.display = "none";
        }
      });

      if (!found) {
        alert("No matching posts found.");
      }
    });

    // Reset button logic
    document.getElementById("reset-search").addEventListener("click", () => {
      input.value = "";
      document.querySelectorAll("#blog-posts article").forEach(post => {
        post.style.display = "";
      });
    });
  });
</script>
<body>
<div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-10" >
  <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-lg meta-text">

<!-- Featured Image -->
<img width="1200" height="1240" 
     src="https://wdtletsgo.wpengine.com/wp-content/uploads/2025/02/blog-listing-11.jpg" 
     class="w-full mb-6 rounded-lg" 
     alt="Scenic travel destination">

<!-- Meta Info -->
<p class="text-sm text-gray-500 mb-2">
    FEBRUARY 6, 2025 / 3 COMMENTS / BY SARVANA TRAVELS
</p>

<!-- Heading -->
<h1 class="text-4xl font-bold leading-tight text-gray-800 mb-6">
    This Season, Let the World Surprise You – Travel Beyond the Ordinary!
</h1>
<br>
<!-- Newsletter Content -->
<div class="text-20px text-gray-700 space-y-4">
    <p>
        Have you ever dreamed of waking up to the sound of waves crashing on a remote beach or sipping coffee in a hidden mountain café where time slows down? 
        This season, Let’s Go Travels invites you to break free from the usual routes and venture into destinations that feel untouched, authentic, and unforgettable.
    </p>
<br>
    <p>
        In our latest newsletter, we take you across breathtaking landscapes—from the lavender fields of Himachal to the sun-kissed villages of South India, and from forest safaris in Central India to the snow-capped beauty of the Northeast. These journeys are carefully curated for travelers who crave more than just sightseeing—they want to experience culture, nature, and local life at its richest.
    </p>
<br>
    <ul class="list-disc list-inside pl-5">
        <li><strong>Top 5 Underrated Hill Stations</strong> – Escape the crowds with peaceful, scenic retreats.</li><br>
        <li><strong>Local Bites You Can’t Miss</strong> – A regional food guide curated by our on-ground experts.</li><br>
        <li><strong>Forest & Wildlife Escapes</strong> – Reconnect with nature in luxury or simplicity.</li><br>
        <li><strong>Budget vs. Luxury Getaways</strong> – Tailor your journey without compromising the experience.</li><br>
        <li><strong>Upcoming Seasonal Offers</strong> – Early bird discounts for summer trips now open!</li><br>
    </ul>

    <p>
        No matter what kind of traveler you are—an adventure seeker, a slow traveler, a culture buff, or a spontaneous explorer—there’s something in this issue for you. Our featured tours come with handpicked stays, expert guides, and flexible plans, so you can travel worry-free.
    </p>
<br>
    <p>
        🌏 <strong>Travel with Purpose:</strong> With every tour booked, Let’s Go Travels supports local artisans, small businesses, and eco-sustainable initiatives in the regions we feature. It’s not just where you go—it’s how you travel.
    </p>
<br>
    <!-- Call to Action Button -->
    <a href="https://yourtravelwebsite.com/blog/hidden-gems-2025" 
       class="inline-block bg-blue-600 text-white text-lg px-6 py-3 rounded-xl shadow hover:bg-blue-700 transition">
        👉 Read the Full Story & Explore Packages
    </a>
</div>

<!-- Comments Section -->
<div class="mt-12">
    <h2 class="text-2xl font-semibold mb-4">💬 Comments (3)</h2>

    <div class="space-y-6">

        <!-- Comment 1 -->
        <div class="border-t pt-4">
            <p class="font-semibold">Ravi Sharma <span class="text-sm text-gray-500">– Feb 7, 2025</span></p>
            <p class="text-gray-700 mt-1">I recently visited one of the hill stations mentioned here, and it was absolutely magical! Great suggestions.</p>
        </div>

        <!-- Comment 2 -->
        <div class="border-t pt-4">
            <p class="font-semibold">Anjali Desai <span class="text-sm text-gray-500">– Feb 8, 2025</span></p>
            <p class="text-gray-700 mt-1">Do you have any package that includes wildlife safaris in March? Looking for a family-friendly trip.</p>
        </div>

        <!-- Comment 3 -->
        <div class="border-t pt-4">
            <p class="font-semibold">Martin Dsouza <span class="text-sm text-gray-500">– Feb 9, 2025</span></p>
            <p class="text-gray-700 mt-1">Love the local travel support initiative! Makes the journey more meaningful.</p>
        </div>
    </div>
</div>

<!-- Reply Form -->
<div class="mt-10 border-t pt-6">
    <h3 class="text-xl font-semibold mb-4">Leave a Comment</h3>
    <form class="space-y-4">
        <input type="text" placeholder="Your Name" class="w-full p-3 border rounded">
        <input type="email" placeholder="Your Email" class="w-full p-3 border rounded">
        <textarea placeholder="Your Comment" rows="5" class="w-full p-3 border rounded"></textarea>
        <button type="submit" class="bg-blue-600 text-white px-5 py-3 rounded hover:bg-blue-700">
            Post Comment
        </button>
    </form>
</div>

<p class="text-sm mt-6 text-gray-400">
    You’re receiving this newsletter because you signed up at Let's Go Travels. <a href="#" class="underline">Unsubscribe</a> anytime.
</p>
</div>
<br><br><br>
<aside>
    <br><br><br><br><br><br>
  <section class="w-full lg:w-96 flex-shrink-0 space-y-10  p-8 rounded-lg bg-[#d9f4ff]">
  <h3 class="text-3xl font-semibold mb-6 text-[#0f3c4b] font-serif">Search</h3>
  <form class="relative mb-3">
    <input class="w-full rounded-lg border border-gray-300 py-4 px-5 pr-14 text-gray-400 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#0f3c4b]" placeholder="Enter Keyword" type="text"/>
    <button aria-label="Search" class="absolute right-4 top-1/2 -translate-y-1/2 text-[#0f3c4b] hover:text-[#0a2a35]" type="submit">
      <i class="fas fa-search text-lg"></i>
    </button>
  </form>
  <button id="reset-search" type="button" class="relative bg-[#d9f4ff] rounded-lg p-5 shadow-md text-[#0f3c4b] hover:bg-[#c0e9ff] transition">
    Reset</button>
</section>

    <!-- Recent Posts -->
     <br><br><br><br>
    <section class="w-full lg:w-96 flex-shrink-0 space-y-10  p-8 rounded-lg bg-[#d9f4ff]">
     <h3 class="text-3xl font-semibold mb-8 text-[#0f3c4b] font-serif">
      Recent Posts
     </h3>
     <ul class="space-y-8">
      <li class="flex gap-6 items-center">
       <img alt="Couple in a boat on a lake with mountains in the background, cloudy sky" class="w-24 h-20 rounded-md object-cover flex-shrink-0" height="80" src="https://storage.googleapis.com/a1aa/image/7e918b8d-f5c0-4bd9-b4ac-2b7c3bef3b7b.jpg" width="96"/>
       <div>
        <time class="block text-sm font-mono tracking-widest text-[#0f3c4b] mb-2" datetime="2025-02-06">
         February 6, 2025
        </time>
        <a class="text-[#0f3c4b] font-serif font-semibold text-lg hover:underline" href="#">
         Blue Sea Adventure Activities
        </a>
       </div>
      </li>
      <li class="flex gap-6 items-center">
       <img alt="Woman taking photo in a city square with buildings and people" class="w-24 h-20 rounded-md object-cover flex-shrink-0" height="80" src="https://storage.googleapis.com/a1aa/image/c41d2722-e68c-4425-2f66-266dd1d0c8d8.jpg" width="96"/>
       <div>
        <time class="block text-sm font-mono tracking-widest text-[#0f3c4b] mb-2" datetime="2025-02-06">
         February 6, 2025
        </time>
        <a class="text-[#0f3c4b] font-serif font-semibold text-lg hover:underline" href="#">
         Top Tourist Destinations
        </a>
       </div>
      </li>
      <li class="flex gap-6 items-center">
       <img alt="Family vacation at a water park with slides and pools" class="w-24 h-20 rounded-md object-cover flex-shrink-0" height="80" src="https://storage.googleapis.com/a1aa/image/ec6dca83-5a86-4cc6-f8ee-aef550b36fb4.jpg" width="96"/>
       <div>
        <time class="block text-sm font-mono tracking-widest text-[#0f3c4b] mb-2" datetime="2025-02-06">
         February 6, 2025
        </time>
        <a class="text-[#0f3c4b] font-serif font-semibold text-lg hover:underline" href="#">
         Tips For Family Vacation
        </a>
       </div>
      </li>
     </ul>
    </section>
    <br><br><br><br>
    <section aria-label="Tags" class="w-full lg:w-96 flex-shrink-0 space-y-10  p-8 rounded-lg bg-[#d9f4ff]">
     <h2 class="text-slate-900 font-semibold text-3xl mb-6">
      Tags
     </h2>
     <div class="flex flex-wrap gap-4">
      <button class="bg-slate-900 text-white rounded-tr-3xl rounded-br-3xl rounded-tl-md rounded-bl-md px-4 py-2 text-sm font-semibold">
       Adventure
      </button>
      <button class="bg-slate-900 text-white rounded-tr-3xl rounded-br-3xl rounded-tl-md rounded-bl-md px-4 py-2 text-sm font-semibold">
       Camping
      </button>
      <button class="bg-slate-900 text-white rounded-tr-3xl rounded-br-3xl rounded-tl-md rounded-bl-md px-4 py-2 text-sm font-semibold">
       Mountains
      </button>
      <button class="bg-slate-900 text-white rounded-tr-3xl rounded-br-3xl rounded-tl-md rounded-bl-md px-4 py-2 text-sm font-semibold">
       Travel
      </button>
      <button class="bg-slate-900 text-white rounded-tr-3xl rounded-br-3xl rounded-tl-md rounded-bl-md px-4 py-2 text-sm font-semibold">
       Trekking
      </button>
     </div>
    </section>
    <br><br><br><br>
    <!-- Gallery -->
    <section aria-label="Gallery" class="w-full lg:w-96 flex-shrink-0 space-y-10  p-8 rounded-lg bg-[#d9f4ff]">
     <h2 class="text-slate-900 font-semibold text-3xl mb-6">
      Gallery
     </h2>
     <div class="grid grid-cols-3 gap-4">
      <img alt="Breakfast table with food and drinks on it" class="rounded-lg object-cover w-full h-24" height="100" src="https://storage.googleapis.com/a1aa/image/b20425c3-fa0a-4ce9-0ec1-dc7f8a6c3224.jpg" width="100"/>
      <img alt="Climber climbing a rock wall with blue sky background" class="rounded-lg object-cover w-full h-24" height="100" src="https://storage.googleapis.com/a1aa/image/e4d57bef-dcfb-4460-498f-caf1a6a80b9b.jpg" width="100"/>
      <img alt="Woman sitting on suitcase holding a camera and phone" class="rounded-lg object-cover w-full h-24" height="100" src="https://storage.googleapis.com/a1aa/image/f0b761eb-7311-4b04-a694-ac547d53e58b.jpg" width="100"/>
      <img alt="Hiker walking on mountain trail with backpack" class="rounded-lg object-cover w-full h-24" height="100" src="https://storage.googleapis.com/a1aa/image/da16b1d6-cb07-453a-a8f6-01f8c297ed91.jpg" width="100"/>
      <img alt="Group of hikers walking on a hill" class="rounded-lg object-cover w-full h-24" height="100" src="https://storage.googleapis.com/a1aa/image/d6d3a8a7-33e9-4ae0-121d-d0419cce9f18.jpg" width="100"/>
      <img alt="Couple looking at a scenic landscape from a hilltop" class="rounded-lg object-cover w-full h-24" height="100" src="https://storage.googleapis.com/a1aa/image/47e6a57b-00b1-4070-ac5c-57d37aaf30c1.jpg" width="100"/>
     </div>
    </section>
    <br><br><br><br>
    <section class="w-full lg:w-96 flex-shrink-0 space-y-10  p-8 rounded-lg bg-[#d9f4ff]">
     <h3 class="text-3xl font-semibold mb-8 text-[#0f3c4b] font-serif">
        Offers
      </h3>
      <img src="images/template.png">
      </section>
   
   </aside>
  </div>
  <!-- Scroll to top button -->
  <a href="#"><button aria-label="Scroll to top" class="fixed bottom-10 right-10 bg-[#d9f4ff] rounded-lg p-5 shadow-md text-[#0f3c4b] hover:bg-[#c0e9ff] transition">
   <i class="fas fa-chevron-up text-lg">
   </i>
  </button></a>
  


<script>
  document.getElementById("reset-search").addEventListener("click", () => {
    document.querySelector("form input").value = "";
    document.querySelectorAll("#blog-posts article").forEach(post => {
      post.style.display = "";
    });
  });
</script>
 <br><br><br>
<?php include('footer.php')?>