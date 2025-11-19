// Set the launch date (hard coded)
// Format: Year, Month (0-11), Day, Hour, Minute, Second
const launchDate = new Date(2024, 2, 15, 12, 0, 0); // March 15, 2024 at 12:00 PM

// Display the launch date on the page
document.addEventListener("DOMContentLoaded", function () {
  const options = { year: "numeric", month: "long", day: "numeric" };
  document.getElementById("launch-date").textContent =
    launchDate.toLocaleDateString("en-US", options);
});

// Update countdown every second
const countdown = setInterval(function () {
  const now = new Date().getTime();
  const distance = launchDate - now;

  // Calculate days, hours, minutes, seconds
  const days = Math.floor(distance / (1000 * 60 * 60 * 24));
  const hours = Math.floor(
    (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
  );
  const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the results
  document.getElementById("days").innerHTML = days.toString().padStart(2, "0");
  document.getElementById("hours").innerHTML = hours
    .toString()
    .padStart(2, "0");
  document.getElementById("minutes").innerHTML = minutes
    .toString()
    .padStart(2, "0");
  document.getElementById("seconds").innerHTML = seconds
    .toString()
    .padStart(2, "0");

  // If the countdown is over
  if (distance < 0) {
    clearInterval(countdown);
    document.getElementById("days").innerHTML = "00";
    document.getElementById("hours").innerHTML = "00";
    document.getElementById("minutes").innerHTML = "00";
    document.getElementById("seconds").innerHTML = "00";
    document.querySelector(".countdown").innerHTML =
      '<div class="launch-message">We\'re Live!</div>';
  }
}, 1000);

// Preloader
window.addEventListener("load", () => {
  const preloader = document.getElementById("preloader");
  preloader.style.opacity = "0";
  setTimeout(() => {
    preloader.style.display = "none";
  }, 500);
});

// Scroll to Top Button
const scrollTop = document.querySelector(".scroll-top");
window.addEventListener("scroll", () => {
  if (window.pageYOffset > 100) {
    scrollTop.classList.add("active");
  } else {
    scrollTop.classList.remove("active");
  }
});

scrollTop.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

// Form submission
document.querySelectorAll("form").forEach((form) => {
  form.addEventListener("submit", (e) => {
    e.preventDefault();
    const email = form.querySelector('input[type="email"]').value;

    // In a real application, you would send this to your backend
    // For this demo, we'll just show an alert
    alert(`Thank you! We'll notify you at ${email} when we launch.`);
    form.reset();
  });
});

// Animation on scroll
function animateOnScroll() {
  const elements = document.querySelectorAll(".animate__animated");

  elements.forEach((element) => {
    const position = element.getBoundingClientRect();

    // If element is in viewport
    if (
      position.top < window.innerHeight - 100 &&
      !element.classList.contains("animate__fadeInUp")
    ) {
      element.classList.add("animate__fadeInUp");
    }
  });
}

window.addEventListener("scroll", animateOnScroll);
// Initial call to check elements already in view
animateOnScroll();
