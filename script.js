const slidesData = [
    {
      img: "https://storage.googleapis.com/a1aa/image/8764d213-3e9d-4586-6b9d-fc0d522a8989.jpg",
      alt: "Night camping scene with tents, campfire, chairs, and a dark blue starry sky",
      title1: "Summer",
      title2: "CAMPING",
      title3: "TRIP",
      description:
        "Explore the breathtaking beauty of nature on our summer hiking trip! Don't miss out on this opportunity to experience the wonders of nature firsthand!",
      date: "25-29 AUGUST",
    },
    {
      img: "https://tse4.mm.bing.net/th/id/OIP.qbK6KXO2uebjS34tuqnuAwHaHa?rs=1&pid=ImgDetMain",
      alt: "Mountain adventure with a river and trekking person",
      title1: "Mountain",
      title2: "ADVENTURE",
      title3: "TREK",
      description:
        "Join us for an exhilarating mountain trek and experience nature like never before!",
      date: "10-15 SEPTEMBER",
    },
    {
      img: "https://th.bing.com/th/id/OIP.6lP7OcVMcXy4glQdEH7qaAHaLJ?rs=1&pid=ImgDetMain",
      alt: "Beach holiday with palm trees and sunset",
      title1: "Beach",
      title2: "HOLIDAY",
      title3: "FUN",
      description:
        "Relax and unwind on the pristine beaches with our exclusive holiday packages.",
      date: "5-12 OCTOBER",
    },
  ];

  const slider = document.getElementById("slider");

  // Create slide elements dynamically
  function createSlide(slide, index) {
    const slideDiv = document.createElement("div");
    slideDiv.className = "absolute inset-0 transition-opacity duration-700 ease-in-out opacity-0";
    slideDiv.dataset.index = index;

    const img = document.createElement("img");
    img.src = slide.img;
    img.alt = slide.alt;
    img.className = "w-full h-full object-cover rounded-lg";
    slideDiv.appendChild(img);

    const overlay = document.createElement("div");
    overlay.className = "absolute inset-0 flex flex-col justify-center items-center text-white px-6 text-center";
    overlay.style.background = "rgba(0,0,0,0.3)";

    // Dots container
    const dotsContainer = document.createElement("div");
    dotsContainer.className = "flex justify-end w-full mb-4 space-x-2";
    slidesData.forEach((_, i) => {
      const dot = document.createElement("div");
      dot.className = "slider-dot";
      dot.dataset.dot = i;
      dotsContainer.appendChild(dot);
    });
    overlay.appendChild(dotsContainer);

    // Titles
    const h2 = document.createElement("h2");
    h2.className = "text-6xl font-[cursive] leading-none mb-0";
    h2.textContent = slide.title1;
    overlay.appendChild(h2);

    const h3_1 = document.createElement("h3");
    h3_1.className = "text-4xl font-extrabold uppercase mb-0";
    h3_1.textContent = slide.title2;
    overlay.appendChild(h3_1);

    const h3_2 = document.createElement("h3");
    h3_2.className = "text-6xl font-extrabold uppercase mb-6";
    h3_2.textContent = slide.title3;
    overlay.appendChild(h3_2);

    // Campfire icons (3)
    const campfireDiv = document.createElement("div");
    campfireDiv.className = "flex justify-center space-x-6 mb-6";
    for (let i = 0; i < 3; i++) {
      const icon = document.createElement("i");
      icon.className = "fas fa-campfire text-2xl";
      campfireDiv.appendChild(icon);
    }
    overlay.appendChild(campfireDiv);

    // Description
    const p = document.createElement("p");
    p.className = "max-w-[280px] text-xs leading-relaxed mb-6";
    p.textContent = slide.description;
    overlay.appendChild(p);

    // Date
    const dateDiv = document.createElement("div");
    dateDiv.className = "border-l border-r border-white px-6 py-2 text-3xl font-extrabold uppercase tracking-widest";
    dateDiv.textContent = slide.date;
    overlay.appendChild(dateDiv);

    slideDiv.appendChild(overlay);

    return slideDiv;
  }

  // Clear existing slides except the first (which we will remove)
  while (slider.firstChild) {
    slider.removeChild(slider.firstChild);
  }

  slidesData.forEach((slide, i) => {
    const slideEl = createSlide(slide, i);
    slider.appendChild(slideEl);
  });

  const slides = slider.querySelectorAll("div[data-index]");
  const dots = slider.querySelectorAll(".slider-dot");

  let currentIndex = 0;
  let intervalId;

  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.style.opacity = i === index ? "1" : "0";
      slide.style.zIndex = i === index ? "10" : "0";
    });
    dots.forEach((dot, i) => {
      if (i === index) {
        dot.classList.add("active");
      } else {
        dot.classList.remove("active");
      }
    });
    currentIndex = index;
  }

  function nextSlide() {
    let nextIndex = currentIndex + 1;
    if (nextIndex >= slides.length) nextIndex = 0;
    showSlide(nextIndex);
  }

  function startAutoSlide() {
    intervalId = setInterval(nextSlide, 5000);
  }

  function stopAutoSlide() {
    clearInterval(intervalId);
  }

  // Initialize
  showSlide(0);
  startAutoSlide();

  // Add click event to dots
  dots.forEach((dot) => {
    dot.addEventListener("click", () => {
      stopAutoSlide();
      const index = parseInt(dot.dataset.dot);
      showSlide(index);
      startAutoSlide();
    });
  });