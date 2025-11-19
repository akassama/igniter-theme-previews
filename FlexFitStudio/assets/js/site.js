// Preloader
document.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
    const preloader = document.getElementById("preloader");
    preloader.style.opacity = "0";
    setTimeout(function () {
      preloader.style.display = "none";
    }, 600);
  }, 1000);
});

// Navbar scroll effect
window.addEventListener("scroll", function () {
  const navbar = document.querySelector(".navbar");
  if (window.scrollY > 50) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});

// Scroll to top button
const scrollToTopButton = document.querySelector(".scroll-top");

window.addEventListener("scroll", function () {
  if (window.scrollY > 300) {
    scrollToTopButton.classList.add("show");
  } else {
    scrollToTopButton.classList.remove("show");
  }
});

// Add click event to scroll to top button
scrollToTopButton.addEventListener("click", function (e) {
  e.preventDefault();
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    // Skip for scroll-top button as we handle it separately
    if (this.classList.contains("scroll-top")) {
      return;
    }

    e.preventDefault();
    const targetId = this.getAttribute("href");
    if (targetId === "#") return;

    const targetElement = document.querySelector(targetId);
    if (targetElement) {
      const navbarHeight = document.querySelector(".navbar").offsetHeight;
      const targetPosition = targetElement.offsetTop - navbarHeight;

      window.scrollTo({
        top: targetPosition,
        behavior: "smooth",
      });
    }
  });
});

// Initialize Swiper for Testimonials
const testimonialSwiper = new Swiper(".testimonial-swiper", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    992: {
      slidesPerView: 3,
      spaceBetween: 50,
    },
  },
});

// Animation on scroll
const animateOnScroll = function () {
  const elements = document.querySelectorAll(".animate-on-scroll");
  const windowHeight = window.innerHeight;

  elements.forEach((element) => {
    const elementTop = element.getBoundingClientRect().top;
    if (elementTop < windowHeight - 100) {
      element.classList.add("animated");
    }
  });
};

// Run on scroll
window.addEventListener("scroll", animateOnScroll);

// Run once on load
window.addEventListener("load", animateOnScroll);

// Initialize GLightbox for gallery (if needed)
const lightbox = GLightbox({
  selector: ".glightbox",
  touchNavigation: true,
  loop: true,
});

// Initialize Bootstrap Tabs
const tabTrigger = document.querySelectorAll('button[data-bs-toggle="tab"]');
tabTrigger.forEach((trigger) => {
  trigger.addEventListener("shown.bs.tab", function (e) {
    // You can add animations or other effects when tabs change
    const activeTab = e.target; // newly activated tab
    const previousTab = e.relatedTarget; // previous active tab
  });
});

// Ensure footer appears after all content
document.addEventListener("DOMContentLoaded", function () {
  // Add a small delay to ensure all elements are rendered
  setTimeout(function () {
    // Force recalculation of document height
    document.body.style.minHeight = "100vh";
  }, 100);
});
