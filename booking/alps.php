<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Alps Trip Booking
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
    }
    /* Custom scrollbar for trip details */
    .trip-details::-webkit-scrollbar-thumb {
      background-color: #4b5563; /* Gray-700 */
      border-radius: 10px;
    }
    /* Timeline styles */
    .timeline {
      position: relative;
      padding-left: 2.5rem;
      margin-left: 1rem;
      border-left: 3px solid #4b5563; /* Gray-700 */
    }
    .timeline-item {
      position: relative;
      margin-bottom: 2.5rem;
    }
    .timeline-item:last-child {
      margin-bottom: 0;
    }
    .timeline-item::before {
      content: '';
      position: absolute;
      left: -1.3rem;
      top: 0.3rem;
      width: 1rem;
      height: 1rem;
      background: #374151; /* Gray-800 */
      border-radius: 50%;
      border: 3px solid #fbbf24; /* Yellow-400 */
      box-shadow: 0 0 0 3px #374151;
    }
    /* Card style for sections */
    .card {
      background: white;
      border-radius: 1rem;
      box-shadow: 0 10px 25px rgba(107, 114, 128, 0.15); /* Gray shadow */
      padding: 1.5rem 2rem;
      transition: transform 0.3s ease;
    }
    .card:hover {
      transform: translateY(-6px);
      box-shadow: 0 15px 30px rgba(107, 114, 128, 0.3);
    }
    /* Custom bullet for included items */
    .included-list li::marker {
      color: #fbbf24; /* Yellow-400 */
      font-weight: 700;
    }
    /* Important info box */
    .info-box {
      background: #fef3c7; /* Yellow-100 */
      border-left: 6px solid #fbbf24; /* Yellow-400 */
      padding: 1rem 1.5rem;
      border-radius: 0.75rem;
      color: #92400e; /* Yellow-800 */
      font-weight: 600;
      font-size: 1rem;
      line-height: 1.5;
    }
    /* Header and footer colors */
    header, footer {
      background-color: #374151; /* Gray-800 */
      color: #fbbf24; /* Yellow-400 */
    }
    header a, footer a {
      color: #fbbf24;
    }
    header a:hover, footer a:hover {
      color: #fde68a; /* Yellow-300 */
    }
    /* Hero button */
    .btn-hero {
      background-color: #fbbf24;
      color: #374151;
      font-weight: 700;
      padding: 0.75rem 2rem;
      border-radius: 0.75rem;
      box-shadow: 0 8px 15px rgba(251, 191, 36, 0.3);
      transition: background-color 0.3s ease;
      display: inline-block;
      text-decoration: none;
    }
    .btn-hero:hover {
      background-color: #fde68a;
    }
    /* Form input focus */
    input:focus, textarea:focus {
      outline: none;
      box-shadow: 0 0 0 3px #fbbf24;
      border-color: #fbbf24;
    }
    /* Scrollbar for mobile menu */
    #mobile-menu {
      max-height: 300px;
      overflow-y: auto;
    }
    #loader {
  position: fixed;
  top: 10px;
  left: 50%;
  transform: translateX(-50%);
  background-color: #FFB800;
  color: #000;
  font-weight: bold;
  font-size: 1.2rem;
  padding: 8px 20px;
  border-radius: 5px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.2);
  z-index: 9999;
  visibility: hidden;  /* Hidden by default */
  pointer-events: none; /* Let clicks pass through */
}

@keyframes loadingBar {
  0% { width: 0; }
  50% { width: 80%; }
  100% { width: 0; }
}
  </style>
  
 </head>
 <body>
  <!-- Header -->
<?php include("navbar.php")  ?>

  <!-- Hero Section -->
  <section class="relative text-gray-800">
   <img alt="Panoramic view of a beautiful mountain trip landscape with clear blue skies and lush green valleys" class="w-full h-80 object-cover brightness-90" height="600" loading="lazy" src="https://storage.googleapis.com/a1aa/image/48e102ed-c071-4ed1-f2f3-2dd118f44c60.jpg" width="1920"/>
   <div class="absolute inset-0 flex flex-col justify-center items-center px-6 text-center bg-gradient-to-b from-transparent via-white/70 to-white/90">
    <h1 class="text-3xl md:text-4xl font-extrabold max-w-4xl drop-shadow-md text-gray-900"><br><Br><br>
     Explore the Majestic Alps - 7 Days Adventure Trip
    </h1>
    <p class="mt-4 text-medium md:text-xl max-w-3xl drop-shadow-sm text-gray-700">
     Experience breathtaking views, thrilling hikes, and cozy alpine villages.
    </p>
    <a class="mt-8 btn-hero" href="#booking" role="button" tabindex="0">
     Book Your Spot Now
    </a>
   </div>
  </section>
  <!-- Main Content -->
   
  <main class="container mx-auto px-6 py-12 flex flex-col md:flex-row gap-10 md:gap-16">
   <!-- Trip Information -->
   <section aria-label="Trip Details" class="md:w-2/3 space-y-10 trip-details max-h-[10000px] overflow-y-auto pr-6" id="trip-info" tabindex="0">
    <h2 class="text-4xl font-bold text-gray-800 border-b-4 border-yellow-400 inline-block pb-2 select-none"><br><Br>
     Trip Details
    </h2>
    <div aria-labelledby="overview-title" class="card" role="region" tabindex="0">
     <h3 class="text-2xl font-semibold text-gray-700 mb-3 flex items-center gap-3 select-none" id="overview-title">
      <i aria-hidden="true" class="fas fa-info-circle text-yellow-400">
      </i>
      Overview
     </h3>
     <p class="text-gray-700 leading-relaxed text-lg">
      Join us on a 7-day journey through the stunning Alps, where you'll hike scenic trails, visit charming alpine villages, and enjoy local cuisine. This trip is perfect for adventure seekers and nature lovers alike.
     </p>
    </div>
    <div aria-labelledby="itinerary-title" class="card" role="region" tabindex="0">
     <h3 class="text-2xl font-semibold text-gray-700 mb-6 flex items-center gap-3 select-none" id="itinerary-title">
      <i aria-hidden="true" class="fas fa-map-marked-alt text-yellow-400">
      </i>
      Itinerary
     </h3>
     <div class="timeline" role="list">
      <div aria-label="Day 1: Arrival and Orientation" class="timeline-item" role="listitem" tabindex="0">
       <h4 class="font-bold text-gray-800 text-lg mb-1">
        Day 1: Arrival &amp; Orientation
       </h4>
       <p class="text-gray-700">
        Arrival in Geneva, welcome dinner and orientation to get you ready for the adventure.
       </p>
      </div>
      <div aria-label="Day 2: Mont Blanc Hike" class="timeline-item" role="listitem" tabindex="0">
       <h4 class="font-bold text-gray-800 text-lg mb-1">
        Day 2: Mont Blanc Hike
       </h4>
       <p class="text-gray-700">
        Guided hike to Mont Blanc base camp with a scenic picnic lunch surrounded by nature.
       </p>
      </div>
      <div aria-label="Day 3: Chamonix Village" class="timeline-item" role="listitem" tabindex="0">
       <h4 class="font-bold text-gray-800 text-lg mb-1">
        Day 3: Chamonix Village
       </h4>
       <p class="text-gray-700">
        Visit the charming Chamonix village and take a cable car ride to Aiguille du Midi for breathtaking views.
       </p>
      </div>
      <div aria-label="Day 4: Alpine Lakes and Waterfalls" class="timeline-item" role="listitem" tabindex="0">
       <h4 class="font-bold text-gray-800 text-lg mb-1">
        Day 4: Alpine Lakes &amp; Waterfalls
       </h4>
       <p class="text-gray-700">
        Explore crystal-clear alpine lakes and stunning waterfalls with a professional photography session.
       </p>
      </div>
      <div aria-label="Day 5: Free Day" class="timeline-item" role="listitem" tabindex="0">
       <h4 class="font-bold text-gray-800 text-lg mb-1">
        Day 5: Free Day
       </h4>
       <p class="text-gray-700">
        Optional activities like paragliding or relaxing at a spa to recharge.
       </p>
      </div>
      <div aria-label="Day 6: Annecy Cultural Tour" class="timeline-item" role="listitem" tabindex="0">
       <h4 class="font-bold text-gray-800 text-lg mb-1">
        Day 6: Annecy Cultural Tour
       </h4>
       <p class="text-gray-700">
        Discover Annecy, the "Venice of the Alps", with its canals, markets, and historic sites.
       </p>
      </div>
      <div aria-label="Day 7: Departure" class="timeline-item" role="listitem" tabindex="0">
       <h4 class="font-bold text-gray-800 text-lg mb-1">
        Day 7: Departure
       </h4>
       <p class="text-gray-700">
        Enjoy breakfast and transfer to the airport for your journey home.
       </p>
      </div>
     </div>
    </div>
    <div aria-labelledby="included-title" class="card" role="region" tabindex="0">
     <h3 class="text-2xl font-semibold text-gray-700 mb-4 flex items-center gap-3 select-none" id="included-title">
      <i aria-hidden="true" class="fas fa-check-circle text-yellow-400">
      </i>
      What's Included
     </h3>
     <ul class="included-list list-disc list-inside text-gray-700 text-lg space-y-2">
      <li>
       6 nights accommodation in 3-star hotels
      </li>
      <li>
       Daily breakfast and 4 dinners
      </li>
      <li>
       All guided tours and entrance fees
      </li>
      <li>
       Transportation during the trip
      </li>
      <li>
       Travel insurance (optional)
      </li>
     </ul>
    </div>
    <div class="info-box" role="alert" tabindex="0">
     <i aria-hidden="true" class="fas fa-exclamation-triangle mr-2">
     </i>
     Please ensure you have a valid passport and travel insurance. The trip involves moderate hiking; comfortable walking shoes and weather-appropriate clothing are recommended. Group size is limited to 15 participants for a personalized experience.
    </div>
   </section>
  
<div class="max-w-5xl mx-auto p-4 space-y-12">
   <!-- Booking Form -->
   <section aria-label="Booking Form" class="md:w-3/2 bg-white rounded-xl shadow-lg p-8 top-20 " id="booking" tabindex="0">
    <h2 class="text-3xl font-bold text-gray-800 mb-6 border-b-4 border-yellow-400 inline-block pb-2 select-none">
      Book Your Trip
    </h2>
    <form action="booking.php" class="space-y-6" id="bookingForm" method="POST">
      <div>
      <label class="block text-gray-800 font-semibold mb-1" for="fullName">
       Full Name
       <span aria-hidden="true" class="text-yellow-500">
        *
       </span>
      </label>
      <input required class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400" id="fullName" name="fullName" placeholder="John Doe" type="text"/>
     </div>
     <div>
      <label class="block text-gray-800 font-semibold mb-1" for="email">
       Email Address
       <span aria-hidden="true" class="text-yellow-500">
        *
       </span>
      </label>
      <input required  class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400" id="email" name="email" placeholder="john@example.com"  type="email"/>
     </div>
     <div>
      <label class="block text-gray-800 font-semibold mb-1" for="phone">
       Phone Number
       <span aria-hidden="true" class="text-yellow-500">
        *
       </span>
      </label>
      <input required  class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400" id="phone" name="phone" pattern="^\+?[0-9\s\-]{7,15}$" placeholder="+1234567890" type="tel"/>
     </div>
     <div>
      <label class="block text-gray-800 font-semibold mb-1" for="guests">
       Number of Guests
       <span aria-hidden="true" class="text-yellow-500">
        *
       </span>
      </label>
      <!-- Guests input -->
<input
  required
  class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400"
  id="guests"
  max="10"
  min="1"
  name="guests"
  type="number"
  value="1"
/>

   </div>

<div id="totalAmountWrapper" class="text-lg font-semibold text-gray-800">
  Total Amount: <span id="totalAmount" class="text-yellow-600">₹150000.00</span>
  
</div>
<input type="hidden" name="totalAmount" id="totalAmountInput" value="150000">
     <div>
      <label class="block text-gray-800 font-semibold mb-1" for="startDate">
       Preferred Start Date
       <span aria-hidden="true" class="text-yellow-500">
        *
       </span>
      </label>
      <input required  class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400" id="startDate" min="" name="startDate" type="date"/>
     </div>
     <div>
      <label class="block text-gray-800 font-semibold mb-1" for="message">
       Additional Requests
      </label>
      <textarea class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400 resize-none" id="message" name="message" placeholder="Any special requirements or questions?" rows="3"></textarea>
     </div>
    <button
  type="submit"
  onclick="openConfirmModal(event)"
  class="w-full bg-gray-800 text-yellow-400 font-bold py-3 rounded-lg hover:bg-gray-900 hover:text-yellow-300 transition"
>
  Confirm Booking
</button>
    <div id="formMessageWrapper" class="mt-6">
  <div id="formMessage" role="alert" aria-live="polite" class="hidden text-sm text-center rounded-md px-4 py-3 font-semibold"></div>
</div>
    </form>
    <!-- Confirmation Modal -->
<div id="confirmModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
  <div class="bg-white rounded-xl shadow-lg p-6 w-full max-w-md">
    <h3 class="text-xl font-semibold text-gray-800 mb-4">Confirm Your Booking</h3>
    <p class="text-gray-700 mb-6">Are you sure you want to book this trip?</p>
    <div class="flex justify-end space-x-4">
      <button onclick="closeConfirmModal()" class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">Cancel</button>
      <button onclick="submitBooking()" class="px-4 py-2 bg-yellow-500 text-white font-bold rounded hover:bg-yellow-600">Yes, Book</button>
    </div>
  </div>
</div>

<!-- Success/Error Popup -->
<div id="responseModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
  <div class="bg-white rounded-xl shadow-lg p-6 w-full max-w-md text-center">
    <h3 id="responseMessage" class="text-lg font-semibold text-gray-800 mb-4"></h3>
    <button onclick="closeResponseModal()" class="mt-2 px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">Close</button>
  </div>
</div>





   </section>
     <section aria-label="Query Form" class="md:w-3/2 bg-white rounded-xl shadow-lg p-8 mt-8 md:mt-0" id="query" tabindex="0">
    <h2 class="text-3xl font-bold text-gray-800 mb-6 border-b-4 border-yellow-400 inline-block pb-2 select-none">
      Send a Query
    </h2>
    <form action="submit.php" method="POST" class="space-y-6" id="queryForm" >
      <input type="hidden" name="_subject" value="New Query from Website" />
      <input type="hidden" name="_template" value="table" />
      <div>
        <label class="block text-gray-800 font-semibold mb-1" for="queryName">
          Full Name <span class="text-yellow-500">*</span>
        </label>
        <input  class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400" id="queryName" name="name" type="text" required placeholder="Jane Doe" />
      </div>
      <div>
        <label class="block text-gray-800 font-semibold mb-1" for="queryName">
         Phone <span class="text-yellow-500"></span>
        </label>
        <input class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400" id="queryphone" name="phone" type="text"  placeholder="+91 7895254781" />
      </div>
      <div>
        <label class="block text-gray-800 font-semibold mb-1" for="queryEmail">
          Email Address <span class="text-yellow-500">*</span>
        </label>
        <input  class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400" id="queryEmail" name="email" type="email" required placeholder="jane@example.com" />
      </div>
      <div>
        <label class="block text-gray-800 font-semibold mb-1" for="queryMessage">
          Your Message <span class="text-yellow-500">*</span>
        </label>
        <textarea required class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400 resize-none" id="queryMessage" name="query" rows="4"  placeholder="How can we help you?"></textarea>
      </div>
      
      <button type="submit" class="w-full bg-gray-800 text-yellow-400 font-bold py-3 rounded-lg hover:bg-gray-900 hover:text-yellow-300 transition">
        Send Message
      </button>
      <div id="queryFormMessageWrapper" class="mt-6">
        <div id="queryFormMessage" role="alert" aria-live="polite" class="hidden text-sm text-center rounded-md px-4 py-3 font-semibold"></div>
      </div>
  </form>
</section>
  </div>
  </main>
  <!-- Gallery Section -->
  <section aria-label="Trip Gallery" class="container mx-auto px-6 py-12 bg-gray-100 rounded-xl shadow-inner mb-12" id="gallery" tabindex="0">
   <h2 class="text-4xl font-bold text-gray-800 border-b-4 border-yellow-400 inline-block pb-2 mb-8 text-center select-none">
    Trip Gallery
   </h2>
   <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    <img alt="Mountain trail with hikers walking along a narrow path surrounded by pine trees and rocky cliffs under a clear blue sky" class="rounded-lg shadow-md object-cover w-full h-48 sm:h-56 md:h-48" height="400" loading="lazy" src="https://storage.googleapis.com/a1aa/image/f68ff5ff-f0f0-4aea-fd4a-32b9c9c75c86.jpg" width="600"/>
    <img alt="Charming alpine village with wooden chalets covered in snow, nestled in a valley with mountains in the background during sunset" class="rounded-lg shadow-md object-cover w-full h-48 sm:h-56 md:h-48" height="400" loading="lazy" src="https://storage.googleapis.com/a1aa/image/3496e0d8-4bc4-4d61-6285-e769128b5562.jpg" width="600"/>
    <img alt="Crystal clear alpine lake reflecting surrounding pine trees and snow-capped mountains under a bright sunny sky" class="rounded-lg shadow-md object-cover w-full h-48 sm:h-56 md:h-48" height="400" loading="lazy" src="https://storage.googleapis.com/a1aa/image/8c092ed1-bb60-47e5-c03f-93aa0a4b62d8.jpg" width="600"/>
    <img alt="Vibrant sunset casting orange and purple hues over jagged mountain peaks with a silhouette of a lone hiker on a ridge" class="rounded-lg shadow-md object-cover w-full h-48 sm:h-56 md:h-48" height="400" loading="lazy" src="https://storage.googleapis.com/a1aa/image/d850f364-54c3-432e-866f-79c1e0f57299.jpg" width="600"/>
    <img alt="A colorful platter of local alpine cuisine including cheeses, cured meats, fresh bread, and vegetables on a rustic wooden table" class="rounded-lg shadow-md object-cover w-full h-48 sm:h-56 md:h-48" height="400" loading="lazy" src="https://storage.googleapis.com/a1aa/image/a1174204-8bd9-4b14-7c10-f676082f0757.jpg" width="600"/>
    <img alt="Paraglider soaring high above the Alps with panoramic views of mountains, valleys, and forests under a clear blue sky" class="rounded-lg shadow-md object-cover w-full h-48 sm:h-56 md:h-48" height="400" loading="lazy" src="https://storage.googleapis.com/a1aa/image/e8644a41-d740-4261-ba4d-d05258804c87.jpg" width="600"/>
   </div>
  </section>
  <!-- Contact Section -->
  <?php include("../footer.php") ?>

  <script>
document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('bookingForm');
  const guestsInput = document.getElementById("guests");
  const totalAmountDisplay = document.getElementById("totalAmount");
  const totalAmountInput = document.getElementById("totalAmountInput");
  const startDateInput = document.getElementById("startDate");
  const confirmModal = document.getElementById("confirmModal");
  const responseModal = document.getElementById("responseModal");
  const responseMessage = document.getElementById("responseMessage");

  const pricePerGuest = 150000;
  const today = new Date().toISOString().split('T')[0];
  startDateInput.setAttribute('min', today);

  function updateTotal() {
    const guests = parseInt(guestsInput.value) || 1;
    const total = guests * pricePerGuest;
    totalAmountDisplay.textContent = `₹${total.toLocaleString("en-IN")}`;
    totalAmountInput.value = total;
  }
  guestsInput.addEventListener("input", updateTotal);
  updateTotal();

  // Create and add page loader element
  const loader = document.createElement('div');
  loader.id = 'pageLoader';
  Object.assign(loader.style, {
    position: 'fixed',
    top: '0',
    left: '0',
    width: '100vw',
    height: '100vh',
    backgroundColor: 'rgba(255, 255, 255, 0.8)',
    display: 'flex',
    justifyContent: 'center',
    alignItems: 'center',
    fontSize: '1.5rem',
    fontWeight: 'bold',
    color: '#FFB800',
    zIndex: 9999,
    visibility: 'hidden'
  });
  loader.textContent = 'Loading...';
  document.body.appendChild(loader);

  function showLoader() {
    loader.style.visibility = 'visible';
  }
  function hideLoader() {
    loader.style.visibility = 'hidden';
  }

  window.openConfirmModal = (event) => {
    event.preventDefault();
    if (form.checkValidity()) {
      confirmModal.classList.remove("hidden");
    } else {
      form.reportValidity();
    }
  };

  window.closeConfirmModal = () => {
    confirmModal.classList.add("hidden");
  };

  window.openResponseModal = (message) => {
    responseMessage.textContent = message;
    responseModal.classList.remove("hidden");
  };

  window.closeResponseModal = () => {
    responseModal.classList.add("hidden");
  };

  window.submitBooking = () => {
    closeConfirmModal();
    showLoader();

    const formData = new FormData(form);

    fetch('booking.php', {
      method: 'POST',
      body: formData
    })
    .then(res => res.json())
    .then(data => {
      hideLoader();
      if (data.success) {
        openResponseModal("🎉 Booking successful! We'll contact you soon.");
        form.reset();
        updateTotal();
        startDateInput.setAttribute('min', today);
      } else {
        openResponseModal(`⚠️ Error: ${data.message || 'Unknown error occurred.'}`);
      }
    })
    .catch(err => {
      hideLoader();
      openResponseModal("❌ Network error. Please try again.");
      console.error(err);
    });
  };
});
</script>
<!-- Loader -->



 </body>
</html>
