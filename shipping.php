<?php include("navbar.php") ?>

<section class="relative w-full h-[200px] sm:h-[300px] md:h-[280px] lg:h-[350px] xl:h-[300px] flex items-center px-6 sm:px-10 md:px-16 bg-[#0f3a47]/90">
  <img alt="Couple looking at ocean" id="img" class="absolute inset-0 w-full h-full object-cover object-center -z-10" src="https://wanderlustcrew.com/wp-content/uploads/2018/08/Best-Road-Trips-USA-Canada-Mexico-1.jpg" />
  <div class="max-w-5xl">
    <h1 class="text-white text-4xl sm:text-5xl font-serif font-bold leading-tight">Shipping Details</h1>
    <nav class="mt-3 text-white text-sm font-normal flex space-x-2 select-none" aria-label="Breadcrumb">
      <a class="hover:underline" href="index.php">Home</a>
      <span class="text-white/70">/</span>
      <span aria-current="page" class="opacity-80">Shipping Details</span>
    </nav>
  </div>
</section>
<br><br><br>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Shipping Information</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Open+Sans&display=swap');
    body {
      font-family: 'Open Sans', sans-serif;
    }
    h1 {
      font-family: 'Merriweather', serif;
    }
  </style>
</head>
<body class="bg-white text-[#0f3a47] p-6 md:p-10 lg:p-14">
<main class="max-w-5xl mx-auto">
  <h2 class="text-4xl font-bold mb-6 leading-tight">Strategic Growth:</h2>
  <p class="text-base leading-relaxed mb-8">
    This section highlights the importance of structured growth and flexibility. Strong foundations and clear direction help in building stability. Engaging in focused actions leads to better results. Creating a balanced approach allows teams and individuals to grow with confidence. Our aim is to provide support, adaptability, and effective solutions that encourage long-term development and positive outcomes.
  </p>
  <ul class="mb-12 space-y-4">
    <li class="flex items-start gap-3">
      <i class="fas fa-star text-[#0f3a47] mt-1" aria-hidden="true"></i>
      <span>We promote growth through consistency and a focus on practical results.</span>
    </li>
    <li class="flex items-start gap-3">
      <i class="fas fa-star text-[#0f3a47] mt-1" aria-hidden="true"></i>
      <span>Our strategies encourage flexibility while maintaining long-term stability.</span>
    </li>
    <li class="flex items-start gap-3">
      <i class="fas fa-star text-[#0f3a47] mt-1" aria-hidden="true"></i>
      <span>We build environments that support productivity and positive progress.</span>
    </li>
    <li class="flex items-start gap-3">
      <i class="fas fa-star text-[#0f3a47] mt-1" aria-hidden="true"></i>
      <span>Our focus is on results-driven actions that align with your goals.</span>
    </li>
  </ul>

  <h2 class="text-4xl font-bold mb-6 leading-tight">Efficient Solutions:</h2>
  <p class="text-base leading-relaxed mb-8">
    We emphasize collaboration, creativity, and smart decision-making. Our systems are designed to simplify complex tasks and deliver efficient results. With attention to detail and a clear vision, we help you stay ahead in a competitive world. Every solution is built with your needs in mind—helping you achieve more while doing less.
  </p>
  <ul class="space-y-4">
    <li class="flex items-start gap-3">
      <i class="fas fa-star text-[#0f3a47] mt-1" aria-hidden="true"></i>
      <span>Our approach combines innovation with ease of use for maximum impact.</span>
    </li>
    <li class="flex items-start gap-3">
      <i class="fas fa-star text-[#0f3a47] mt-1" aria-hidden="true"></i>
      <span>Smart systems simplify your workflow and reduce unnecessary steps.</span>
    </li>
    <li class="flex items-start gap-3">
      <i class="fas fa-star text-[#0f3a47] mt-1" aria-hidden="true"></i>
      <span>Creative solutions are tailored to meet your unique challenges.</span>
    </li>
    <li class="flex items-start gap-3">
      <i class="fas fa-star text-[#0f3a47] mt-1" aria-hidden="true"></i>
      <span>We ensure every project aligns with your goals and delivers real value.</span>
    </li>
  </ul>
<br><br>
    <h2 class="text-4xl font-bold mb-6 leading-tight">Smooth & Reliable Shipping:</h2>
    <p class="text-base leading-relaxed mb-8">
      We provide flexible shipping methods tailored to your needs. Whether you're in a hurry or looking to save on delivery costs, we’ve got you covered. All orders are handled with care, packed securely, and dispatched promptly. Choose the delivery method that suits your schedule and budget below.
    </p>

    <table class="w-full border border-gray-200 rounded-lg overflow-hidden text-[#0f3a4a]">
      <thead class="bg-white border-b border-gray-200">
        <tr>
          <th class="text-left font-semibold text-xl px-6 py-5 border-r border-gray-200">Shipping Method</th>
          <th class="text-left font-semibold text-xl px-6 py-5 border-r border-gray-200">Shipping Time</th>
          <th class="text-left font-semibold text-xl px-6 py-5">Shipping Fee</th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">
        <tr>
          <td class="px-6 py-6">Standard</td>
          <td class="px-6 py-6">2-3 Working Days</td>
          <td class="px-6 py-6">₹10 or Free Shipping on Orders Over ₹250</td>
        </tr>
        <tr>
          <td class="px-6 py-6">Premium</td>
          <td class="px-6 py-6">1 Working Day</td>
          <td class="px-6 py-6">Additional ₹25</td>
        </tr>
        <tr>
          <td class="px-6 py-6">One-Day</td>
          <td class="px-6 py-6">Within 12 Hours</td>
          <td class="px-6 py-6">Additional ₹50</td>
        </tr>
      </tbody>
    </table>
    <button
      aria-label="Scroll to top"
      class="fixed bottom-6 right-6 bg-[#c9db6e] rounded-tl-xl rounded-bl-xl p-4 shadow-md hover:bg-[#b4ca5a] transition"
      onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
    >
      <i class="fas fa-chevron-up text-[#0f3a47] text-lg"></i>
    </button>
</div>

</main>
<br><br><br>

<?php include("footer.php") ?>