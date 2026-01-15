<?php include('navbar.php')?>
<section class="relative w-full h-[200px] sm:h-[300px] md:h-[280px] lg:h-[350px] xl:h-[300px] flex items-center px-6 sm:px-10 md:px-16 bg-[#0f3a47]/90">
   <img alt="Couple looking at ocean from car side view, tinted with dark teal overlay" id="img" class="absolute inset-0 w-full h-full object-cover object-center -z-10" decoding="async" height="380" loading="lazy" src="https://wanderlustcrew.com/wp-content/uploads/2018/08/Best-Road-Trips-USA-Canada-Mexico-1.jpg" width="1920"/>
   <div class="max-w-5xl">
    <h1 class="text-white text-4xl sm:text-5xl font-serif font-bold leading-tight">
     Frequently Asked Questions
    </h1>
    <nav aria-label="Breadcrumb" class="mt-3 text-white text-sm font-normal flex space-x-2 select-none">
     <a class="hover:underline" href="index.php">
      Home
     </a>
     <span class="text-white/70">
      /
     </span>
     <span aria-current="page" class="opacity-80">
      Frequent QA's
     </span>
    </nav>
   </div>
  </section>
  <br><br>
 
  <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dynamic FAQ Tabs</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
    body {
      font-family: 'Playfair Display', serif;
    }
    .faq-tab.active {
      background-color: #0f3a44;
      color:white;
    }
  </style>
</head>
<body class="bg-white min-h-screen p-6 md:p-10">
  <div class="max-w-7xl mx-auto">
    <!-- Navigation Buttons -->
    <div class="flex flex-wrap justify-start gap-4 mb-10">
      <button class="faq-tab bg-[#9fbf43] text-[#2f4a56] px-6 py-3 rounded-md" data-target="general">General Enquiries</button>
      <button class="faq-tab bg-[#9fbf43] text-[#2f4a56] px-6 py-3 rounded-md" data-target="food">Food & Accommodation</button>
      <button class="faq-tab bg-[#9fbf43] text-[#2f4a56] px-6 py-3 rounded-md" data-target="flights">Flights</button>
      <button class="faq-tab bg-[#9fbf43] text-[#2f4a56] px-6 py-3 rounded-md" data-target="visa">Visa Process</button>
      <button class="faq-tab bg-[#9fbf43] text-[#2f4a56] px-6 py-3 rounded-md" data-target="customized">Customized Plans</button>
      <button class="faq-tab bg-[#9fbf43] text-[#2f4a56] px-6 py-3 rounded-md" data-target="payment">Payment Process</button>
    </div>

    <!-- FAQ Content Sections -->
    <div id="faq-general" class="faq-content block space-y-4">
      <div class="bg-[#d4f0fc] rounded-lg p-6">
        <h3 class="text-[#16404f] font-semibold text-xl mb-2">What services are included in general enquiries?</h3>
        <p class="text-[#2f4a56]">Support with booking, travel guidance, and pre-travel information.</p>
      </div>
      <div class="bg-[#d4f0fc] rounded-lg p-6">
        <h3 class="text-[#16404f] font-semibold text-xl mb-2">Do you provide itinerary suggestions?</h3>
        <p class="text-[#2f4a56]">Yes, our team helps with custom and preset itinerary ideas tailored to your interests.</p>
      </div>
      <div class="bg-[#d4f0fc] rounded-lg p-6">
        <h3 class="text-[#16404f] font-semibold text-xl mb-2">How can I contact customer service?</h3>
        <p class="text-[#2f4a56]">You can contact us via phone, email, or live chat available 24/7 on our website.</p>
      </div>
      <div class="bg-[#d4f0fc] rounded-lg p-6">
        <h3 class="text-[#16404f] font-semibold text-xl mb-2">Is travel insurance included?</h3>
        <p class="text-[#2f4a56]">No, but we highly recommend it. We can guide you on purchasing it separately.</p>
      </div>
    </div>

    <div id="faq-food" class="faq-content hidden space-y-4">
      <div class="bg-[#d4f0fc] rounded-lg p-6">
        <h3 class="text-[#16404f] font-semibold text-xl mb-2">Are meals customizable?</h3>
        <p class="text-[#2f4a56]">Yes, we accommodate vegetarian, vegan, and special dietary requests upon notice.</p>
      </div>
      <div class="bg-[#d4f0fc] rounded-lg p-6">
        <h3 class="text-[#16404f] font-semibold text-xl mb-2">What type of accommodations do you offer?</h3>
        <p class="text-[#2f4a56]">We offer 3-star to 5-star hotels, homestays, and boutique resorts based on preference.</p>
      </div>
      <div class="bg-[#d4f0fc] rounded-lg p-6">
        <h3 class="text-[#16404f] font-semibold text-xl mb-2">Do accommodations include breakfast?</h3>
        <p class="text-[#2f4a56]">Most of our packages include breakfast. Options vary based on accommodation type.</p>
      </div>
      <div class="bg-[#d4f0fc] rounded-lg p-6">
        <h3 class="text-[#16404f] font-semibold text-xl mb-2">Can I choose my hotel?</h3>
        <p class="text-[#2f4a56]">Yes, our plans are flexible to allow you to choose preferred hotel chains or specific hotels.</p>
      </div>
    </div>

    <div id="faq-flights" class="faq-content hidden space-y-4">
      <div class="bg-[#d4f0fc] rounded-lg p-6">
        <h3 class="text-[#16404f] font-semibold text-xl mb-2">What airlines do you partner with?</h3>
        <p class="text-[#2f4a56]">We work with top airlines worldwide to offer flexibility and competitive pricing.</p>
      </div>
      <div class="bg-[#d4f0fc] rounded-lg p-6">
        <h3 class="text-[#16404f] font-semibold text-xl mb-2">Can I book business class?</h3>
        <p class="text-[#2f4a56]">Yes, you can select from economy, premium economy, business, and first-class options.</p>
      </div>
      <div class="bg-[#d4f0fc] rounded-lg p-6">
        <h3 class="text-[#16404f] font-semibold text-xl mb-2">Are flight changes allowed?</h3>
        <p class="text-[#2f4a56]">Changes depend on fare type. We help coordinate modifications and cancellations.</p>
      </div>
      <div class="bg-[#d4f0fc] rounded-lg p-6">
        <h3 class="text-[#16404f] font-semibold text-xl mb-2">Do you offer flight + hotel bundles?</h3>
        <p class="text-[#2f4a56]">Yes, bundle packages are available and offer additional savings and convenience.</p>
      </div>
    </div>

    <div id="faq-visa" class="faq-content hidden space-y-4">
      <div class="bg-[#d4f0fc] rounded-lg p-6">
        <h3 class="text-[#16404f] font-semibold text-xl mb-2">How long does visa processing take?</h3>
        <p class="text-[#2f4a56]">It may take 5-15 business days depending on destination and documentation provided.</p>
      </div>
      <div class="bg-[#d4f0fc] rounded-lg p-6">
        <h3 class="text-[#16404f] font-semibold text-xl mb-2">What documents are required?</h3>
        <p class="text-[#2f4a56]">Commonly required documents include passport, itinerary, photos, and financial proof.</p>
      </div>
      <div class="bg-[#d4f0fc] rounded-lg p-6">
        <h3 class="text-[#16404f] font-semibold text-xl mb-2">Do you assist with visa appointments?</h3>
        <p class="text-[#2f4a56]">Yes, we help schedule embassy appointments and provide form-filling support.</p>
      </div>
      <div class="bg-[#d4f0fc] rounded-lg p-6">
        <h3 class="text-[#16404f] font-semibold text-xl mb-2">Can you guarantee visa approval?</h3>
        <p class="text-[#2f4a56]">We offer support but approval is subject to embassy discretion and documentation.</p>
      </div>
    </div>

    <div id="faq-customized" class="faq-content hidden space-y-4">
      <div class="bg-[#d4f0fc] rounded-lg p-6">
        <h3 class="text-[#16404f] font-semibold text-xl mb-2">How do I customize my tour?</h3>
        <p class="text-[#2f4a56]">Contact our advisors to tailor itinerary, destinations, transport, and stay.</p>
      </div>
      <div class="bg-[#d4f0fc] rounded-lg p-6">
        <h3 class="text-[#16404f] font-semibold text-xl mb-2">Can I add activities to my trip?</h3>
        <p class="text-[#2f4a56]">Yes, we help you add adventure, leisure, or cultural activities to your plan.</p>
      </div>
      <div class="bg-[#d4f0fc] rounded-lg p-6">
        <h3 class="text-[#16404f] font-semibold text-xl mb-2">Is there a cost difference for custom plans?</h3>
        <p class="text-[#2f4a56]">Prices vary based on inclusions and time of booking. We'll provide detailed quotes.</p>
      </div>
      <div class="bg-[#d4f0fc] rounded-lg p-6">
        <h3 class="text-[#16404f] font-semibold text-xl mb-2">How early should I plan a custom tour?</h3>
        <p class="text-[#2f4a56]">We recommend planning at least 30 days in advance for smooth execution.</p>
      </div>
    </div>

    <div id="faq-payment" class="faq-content hidden space-y-4">
      <div class="bg-[#d4f0fc] rounded-lg p-6">
        <h3 class="text-[#16404f] font-semibold text-xl mb-2">Is there an installment plan?</h3>
        <p class="text-[#2f4a56]">Yes, for packages above a certain value, subject to terms and approval.</p>
      </div>
      <div class="bg-[#d4f0fc] rounded-lg p-6">
        <h3 class="text-[#16404f] font-semibold text-xl mb-2">What payment methods are accepted?</h3>
        <p class="text-[#2f4a56]">We accept credit/debit cards, UPI, bank transfers, and select digital wallets.</p>
      </div>
      <div class="bg-[#d4f0fc] rounded-lg p-6">
        <h3 class="text-[#16404f] font-semibold text-xl mb-2">Is my payment information secure?</h3>
        <p class="text-[#2f4a56]">Yes, our site uses industry-standard encryption for secure transactions.</p>
      </div>
      <div class="bg-[#d4f0fc] rounded-lg p-6">
        <h3 class="text-[#16404f] font-semibold text-xl mb-2">Can I get a refund?</h3>
        <p class="text-[#2f4a56]">Refunds are subject to cancellation policy and booking terms. Contact support for help.</p>
      </div>
    </div>
  </div>

  <!-- JavaScript to handle tab switching -->
  <script>
    const tabs = document.querySelectorAll('.faq-tab');
    const contents = document.querySelectorAll('.faq-content');

    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        const target = tab.getAttribute('data-target');

        tabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');

        contents.forEach(content => content.classList.add('hidden'));
        document.getElementById('faq-' + target).classList.remove('hidden');
      });
    });
  </script>
  <br><br><br>
<?php include('footer.php')?>
