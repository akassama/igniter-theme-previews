// Countdown Timer
function updateCountdown() {
  // Set target date (2 days from now)
  const targetDate = new Date();
  targetDate.setDate(targetDate.getDate() + 2);
  targetDate.setHours(0, 0, 0, 0); // Set time to 00:00:00

  // Get current date
  const currentDate = new Date();

  // Calculate difference in milliseconds
  const diff = targetDate.getTime() - currentDate.getTime();

  // Calculate time values
  const days = Math.floor(diff / (1000 * 60 * 60 * 24));
  const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((diff % (1000 * 60)) / 1000);

  // Update DOM
  document.getElementById("days").textContent = days
    .toString()
    .padStart(2, "0");
  document.getElementById("hours").textContent = hours
    .toString()
    .padStart(2, "0");
  document.getElementById("minutes").textContent = minutes
    .toString()
    .padStart(2, "0");
  document.getElementById("seconds").textContent = seconds
    .toString()
    .padStart(2, "0");

  // Check if target date is reached
  if (diff < 0) {
    document.getElementById("days").textContent = "00";
    document.getElementById("hours").textContent = "00";
    document.getElementById("minutes").textContent = "00";
    document.getElementById("seconds").textContent = "00";
  }
}

// Initial call
updateCountdown();

// Update every second
setInterval(updateCountdown, 1000);

// Animation on scroll (for maintenance page, animate on load)
document.addEventListener("DOMContentLoaded", function () {
  setTimeout(() => {
    const elements = document.querySelectorAll(".animate__animated");
    elements.forEach((el, index) => {
      el.style.animationDelay = `${index * 0.1}s`;
      el.classList.add("animate__fadeIn");
    });
  }, 300);
});

// Form submission for newsletter
const newsletterForm = document.querySelector(".newsletter-form");
if (newsletterForm) {
  newsletterForm.addEventListener("submit", function (e) {
    e.preventDefault();
    const emailInput = this.querySelector('input[type="email"]');

    if (emailInput.value) {
      Swal.fire({
        title: "Thank You!",
        text: "We'll notify you when our site is back online.",
        icon: "success",
        confirmButtonText: "OK",
      });
      emailInput.value = "";
    }
  });
}

// Add subtle animations to interactive elements
document
  .querySelectorAll(".contact-option, .social-link, .newsletter-form .btn")
  .forEach((element) => {
    element.addEventListener("mouseenter", function () {
      this.style.transform = "translateY(-5px)";
    });

    element.addEventListener("mouseleave", function () {
      this.style.transform = "translateY(0)";
    });
  });
