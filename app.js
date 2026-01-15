const slide = document.querySelector('.slide');
let items = document.querySelectorAll('.item');
const nextButton = document.querySelector('.next');
const prevButton = document.querySelector('.prev');

// Move to next slide
nextButton.addEventListener('click', () => {
    slide.appendChild(items[0]); // Move first item to the end
    updateItems(); // Re-query items
});

// Move to previous slide
prevButton.addEventListener('click', () => {
    slide.insertBefore(items[items.length - 1], items[0]); // Move last item to front
    updateItems(); // Re-query items
});

function updateItems() {
    items = document.querySelectorAll('.item');
}
setInterval(() => {
    slide.appendChild(items[0]);
    updateItems();
}, 10000); // slides every 10 seconds
