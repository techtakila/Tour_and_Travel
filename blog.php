<?php include("navbar.php") ?>
<section class="relative w-full h-[200px] sm:h-[300px] md:h-[280px] lg:h-[350px] xl:h-[300px] flex items-center px-6 sm:px-10 md:px-16 bg-[#0f3a47]/90">
   <img alt="Couple looking at ocean from car side view, tinted with dark teal overlay" id="img" class="absolute inset-0 w-full h-full object-cover object-center -z-10" decoding="async" height="380" loading="lazy" src="https://wanderlustcrew.com/wp-content/uploads/2018/08/Best-Road-Trips-USA-Canada-Mexico-1.jpg" width="1920"/>
   <div class="max-w-5xl">
    <h1 class="text-white text-4xl sm:text-5xl font-serif font-bold leading-tight">
     Blogs
    </h1>
    <nav aria-label="Breadcrumb" class="mt-3 text-white text-sm font-normal flex space-x-2 select-none">
     <a class="hover:underline" href="index.php">
      Home
     </a>
     <span class="text-white/70">
      /
     </span>
     <span aria-current="page" class="opacity-80">
      Blogs
     </span>
    </nav>
   </div>
  </section>
<br><br><br>
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Blog Right Sidebar
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&amp;family=Open+Sans&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: 'Open Sans', sans-serif;
      background-color: white;
      color: #0f3c4b;
    }
    h2, h3 {
      font-family: 'Merriweather', serif;
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



 </head>
 <body class="p-8">
  <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-10" >
   <!-- Left Blog Posts Grid -->
   <div class="grid grid-cols-1 md:grid-cols-2 gap-10 flex-1" id="blog-posts">
    <!-- Post 1 -->
    <article class="rounded-lg overflow-hidden shadow-lg relative h-[480px]" data-keywords="maritime sea ocean travel journey">
     <img alt="Woman in white dress holding a blue scarf on a wooden pier with turquoise water and overwater bungalows in background"
      class="w-full h-[320px] object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/6624d359-567f-4b27-6b8f-9393a7b694d2.jpg" width="600"/>
     <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-95 p-8 rounded-b-lg h-[240px]">
      <div class="flex items-center text-sm text-[#0f3c4b] mb-3 font-semibold tracking-widest uppercase">
       <span class="flex items-center gap-2">
        <i class="fas fa-user">
        </i>
        Developer
       </span>
       <span class="mx-3 border-l border-[#0f3c4b] h-5">
       </span>
       <span class="flex items-center gap-2">
        <i class="fas fa-comment">
        </i>
        2 Comments
       </span>
      </div>
      <h2 class="text-2xl font-bold mb-3 leading-tight">
       Tales Of Maritime Journeys
      </h2>
      <p class="text-[#0f3c4b] mb-6 leading-relaxed text-base">
      Discover thrilling adventures and untold stories from 
      the high seas in this maritime journey tale.....
      </p>
      <a class="text-[#0f3c4b] underline font-normal text-base hover:text-[#0a2a35]" href="#">
       Read More
      </a>
     </div>
    </article>
    <!-- Post 2 -->
    <article class="rounded-lg overflow-hidden shadow-lg relative h-[480px]" data-keywords="mountain hiking adventure climb nature">
     <img alt="Couple hiking in forest with backpacks smiling at each other under blue sky with clouds" class="w-full h-[320px] object-cover" height="320" src="https://storage.googleapis.com/a1aa/image/1acb6eaf-8901-40d7-c5af-8c85e55f52ae.jpg" width="600"/>
     <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-95 p-8 rounded-b-lg h-[240px]">
      <div class="flex items-center text-sm text-[#0f3c4b] mb-3 font-semibold tracking-widest uppercase">
       <span class="flex items-center gap-2">
        <i class="fas fa-user">
        </i>
        Developer
       </span>
       <span class="mx-3 border-l border-[#0f3c4b] h-5">
       </span>
       <span class="flex items-center gap-2">
        <i class="fas fa-comment">
        </i>
        2 Comments
       </span>
      </div>
      <h2 class="text-2xl font-bold mb-3 leading-tight">
       Mountain Climbing Objectives
      </h2>
      <p class="text-[#0f3c4b] mb-6 leading-relaxed text-base">
      Conquer towering peaks and test your limits with the ultimate mountain climbing experience....
      <a class="text-[#0f3c4b] underline font-normal text-base hover:text-[#0a2a35]" href="#">
       Read More
      </a>
      </p>
      
     </div>
    </article>
    <!-- Post 3 -->
    <article class="rounded-lg overflow-hidden shadow-lg relative h-[480px]" data-keywords="sky travel flying clouds blue">
     <img alt="Blue sky and mountain landscape with green hills" class="w-full h-[320px] object-cover" height="320" src="https://storage.googleapis.com/a1aa/image/14c8349b-01ba-4fb7-a03f-036b14b9b757.jpg" width="600"/>
     <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-95 p-8 rounded-b-lg h-[240px]">
      <div class="flex items-center text-sm text-[#0f3c4b] mb-3 font-semibold tracking-widest uppercase">
       <span class="flex items-center gap-2">
        <i class="fas fa-user">
        </i>
        Developer
       </span>
       <span class="mx-3 border-l border-[#0f3c4b] h-5">
       </span>
       <span class="flex items-center gap-2">
        <i class="fas fa-comment">
        </i>
        2 Comments
       </span>
      </div>
      <h2 class="text-2xl font-bold mb-3 leading-tight">
       Exploring The Blue Skies
      </h2>
      <p class="text-[#0f3c4b] mb-6 leading-relaxed text-base">
      Soar high and embrace the thrill of adventure as you explore the endless blue skies....
      </p>
      <a class="text-[#0f3c4b] underline font-normal text-base hover:text-[#0a2a35]" href="#">
       Read More
      </a>
     </div>
    </article>
    <!-- Post 4 -->
    <article class="rounded-lg overflow-hidden shadow-lg relative h-[480px]" data-keywords="cave hidden rocks explore adventure">
     <img alt="Rock cave interior with sunlight illuminating the textured walls" class="w-full h-[320px] object-cover" height="320" src="https://storage.googleapis.com/a1aa/image/9aec207d-663d-4090-5530-d82e6ad96233.jpg" width="600"/>
     <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-95 p-8 rounded-b-lg h-[240px]">
      <div class="flex items-center text-sm text-[#0f3c4b] mb-3 font-semibold tracking-widest uppercase">
       <span class="flex items-center gap-2">
        <i class="fas fa-user">
        </i>
        Developer
       </span>
       <span class="mx-3 border-l border-[#0f3c4b] h-5">
       </span>
       <span class="flex items-center gap-2">
        <i class="fas fa-comment">
        </i>
        2 Comments
       </span>
      </div>
      <h2 class="text-2xl font-bold mb-3 leading-tight">
       Discovering Hidden Caves
      </h2>
      <p class="text-[#0f3c4b] mb-6 leading-relaxed text-base">
      Uncover nature’s secrets as you journey into the mysterious depths of hidden caves...
      </p>
      <a class="text-[#0f3c4b] underline font-normal text-base hover:text-[#0a2a35]" href="#">
       Read More
      </a>
     </div>
    </article>

    <article class="rounded-lg overflow-hidden shadow-lg relative h-[480px]" data-keywords="planning a fun stress-free family vacation">
     <img alt="Statue of a man sitting with orange circular structures in a park" class="w-full h-[320px] object-cover" height="320"  src="https://storage.googleapis.com/a1aa/image/87706d47-e2c9-4284-48a8-78cceb810f0e.jpg" width="600"/>
     <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-95 p-8 rounded-b-lg h-[240px]">
     <div class="flex items-center text-sm text-[#0f3c4b] mb-3 font-semibold tracking-widest uppercase">
       <span class="flex items-center gap-2">
        <i class="fas fa-user">
        </i>
        Developer
       </span>
       <span class="mx-3 border-l border-[#0f3c4b] h-5">
       </span>
       <span class="flex items-center gap-2">
        <i class="fas fa-comment">
        </i>
        2 Comments
       </span>
      </div>
      <h2 class="text-2xl font-bold mb-3 leading-tight">
       Tips For Family Vacation
       </h2>
      <p class="text-[#0f3c4b] mb-6 leading-relaxed text-base">
      Make lasting memories with your loved ones by planning a fun and stress-free family vacation....
      </p>
      <a class="text-[#0f3c4b] underline font-normal text-base hover:text-[#0a2a35]" href="#">
       Read More
      </a>
     </div>
    </article>
    <!-- Post 2 -->
    <article class="rounded-lg overflow-hidden shadow-lg relative h-[480px]" data-keywords="Nature’s Majesty beauty grandeur">
     <img alt="Two women smiling near waterfront with city buildings in background" class="w-full h-[320px] object-cover" height="320" src="https://storage.googleapis.com/a1aa/image/288f5177-cf07-4244-e044-38b250cbf5c8.jpg" width="600"/>
     <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-95 p-8 rounded-b-lg h-[240px]">
     <div class="flex items-center text-sm text-[#0f3c4b] mb-3 font-semibold tracking-widest uppercase">
       <span class="flex items-center gap-2">
        <i class="fas fa-user">
        </i>
        Developer
       </span>
       <span class="mx-3 border-l border-[#0f3c4b] h-5">
       </span>
       <span class="flex items-center gap-2">
        <i class="fas fa-comment">
        </i>
        2 Comments
       </span>
      </div>
      <h2 class="text-2xl font-bold mb-3 leading-tight">
       Witnessing Nature’s Majesty
       </h2>
      <p class="text-[#0f3c4b] mb-6 leading-relaxed text-base">
      Experience the breathtaking beauty and grandeur of nature in its purest form....
      </p>
      <a class="text-[#0f3c4b] underline font-normal text-base hover:text-[#0a2a35]" href="#">
       Read More
      </a>
     </div>
    </article>
    <!-- Post 3 -->
    <article class="rounded-lg overflow-hidden shadow-lg relative h-[480px]" data-keywords="Exploring Mountain Trails thrilling adventure">
     <img alt="Mountain forest landscape with trees and blue sky" class="w-full h-[320px] object-cover" height="320" src="https://storage.googleapis.com/a1aa/image/1dd83fba-5b14-46b3-1702-3b971064a9d7.jpg" width="600"/>
     <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-95 p-8 rounded-b-lg h-[240px]">
     <div class="flex items-center text-sm text-[#0f3c4b] mb-3 font-semibold tracking-widest uppercase">
       <span class="flex items-center gap-2">
        <i class="fas fa-user">
        </i>
        Developer
       </span>
       <span class="mx-3 border-l border-[#0f3c4b] h-5">
       </span>
       <span class="flex items-center gap-2">
        <i class="fas fa-comment">
        </i>
        2 Comments
       </span>
      </div>
      <h2 class="text-2xl font-bold mb-3 leading-tight">
       Exploring Mountain Trails
       </h2>
      <p class="text-[#0f3c4b] mb-6 leading-relaxed text-base">
      Embark on a thrilling adventure through scenic and challenging mountain paths....
      </p>
      <a class="text-[#0f3c4b] underline font-normal text-base hover:text-[#0a2a35]" href="#">
       Read More
      </a>
     </div>
    </article>
    <!-- Post 4 -->
    <article class="rounded-lg overflow-hidden shadow-lg relative h-[480px]" data-keywords="Journey Through The Alps breathtaking landscapes">
     <img alt="Person with backpack looking at mountain landscape" class="w-full h-[320px] object-cover" height="320" src="https://storage.googleapis.com/a1aa/image/07b5fc14-6fdb-42d2-9eff-2076918335ba.jpg" width="600"/>
     <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-95 p-8 rounded-b-lg h-[240px]">
     <div class="flex items-center text-sm text-[#0f3c4b] mb-3 font-semibold tracking-widest uppercase">
       <span class="flex items-center gap-2">
        <i class="fas fa-user">
        </i>
        Developer
       </span>
       <span class="mx-3 border-l border-[#0f3c4b] h-5">
       </span>
       <span class="flex items-center gap-2">
        <i class="fas fa-comment">
        </i>
        2 Comments
       </span>
      </div>
      <h2 class="text-2xl font-bold mb-3 leading-tight">
       Journey Through The Alps
       </h2>
      <p class="text-[#0f3c4b] mb-6 leading-relaxed text-base">
      Experience breathtaking landscapes and unforgettable moments on a journey through the majestic Alps....
      </p>
      <a class="text-[#0f3c4b] underline font-normal text-base hover:text-[#0a2a35]" href="#">
       Read More
      </a>
     </div>
    </article>
   </div>
   <!-- Right Sidebar -->
   <aside>
    <!-- Search -->
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
     <h2 class="text-slate-900 font-serif text-xl mb-6">
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
     <h2 class="text-slate-900 font-serif text-xl mb-6">
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
   
   </aside>
  </div>
  <!-- Scroll to top button -->
  <button aria-label="Scroll to top" class="fixed bottom-10 right-10 bg-[#d9f4ff] rounded-lg p-5 shadow-md text-[#0f3c4b] hover:bg-[#c0e9ff] transition">
   <i class="fas fa-chevron-up text-lg">
   </i>
  </button>
  


<script>
  document.getElementById("reset-search").addEventListener("click", () => {
    document.querySelector("form input").value = "";
    document.querySelectorAll("#blog-posts article").forEach(post => {
      post.style.display = "";
    });
  });
</script>
 <br><br><br>









<?php include("footer.php") ?>