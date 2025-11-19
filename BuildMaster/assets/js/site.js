// Preloader
document.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
    const preloader = document.getElementById("preloader");
    preloader.style.opacity = "0";
    setTimeout(() => {
      preloader.style.display = "none";
    }, 500);
  }, 1500);
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
const scrollTopBtn = document.querySelector(".scroll-top");

window.addEventListener("scroll", function () {
  if (window.scrollY > 300) {
    scrollTopBtn.classList.add("show");
  } else {
    scrollTopBtn.classList.remove("show");
  }
});

// Fix scroll to top functionality
scrollTopBtn.addEventListener("click", function (e) {
  e.preventDefault();
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

// Initialize Hero Swiper
const heroSwiper = new Swiper(".heroSwiper", {
  spaceBetween: 30,
  effect: "fade",
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

// Initialize Stats Counter
function animateCounters() {
  const counters = [
    { id: "projectsCount", endVal: 500 },
    { id: "clientsCount", endVal: 350 },
    { id: "experienceCount", endVal: 25 },
    { id: "awardsCount", endVal: 25 },
  ];

  counters.forEach((counter) => {
    const element = document.getElementById(counter.id);
    if (element) {
      const countUp = new CountUp(counter.id, counter.endVal);
      if (!countUp.error) {
        countUp.start();
      }
    }
  });
}

// Check if element is in viewport
function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.bottom >= 0
  );
}

// Trigger counter animation when about section is in view
let countersAnimated = false;
window.addEventListener("scroll", function () {
  const aboutSection = document.querySelector("#about");
  if (aboutSection && !countersAnimated && isInViewport(aboutSection)) {
    animateCounters();
    countersAnimated = true;
  }
});

// Initialize on page load
window.addEventListener("load", function () {
  const aboutSection = document.querySelector("#about");
  if (aboutSection && isInViewport(aboutSection)) {
    animateCounters();
    countersAnimated = true;
  }
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  if (anchor.classList.contains("scroll-top")) {
    return; // Skip scroll-top button
  }

  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    const targetId = this.getAttribute("href");
    if (targetId === "#") return;

    const targetElement = document.querySelector(targetId);
    if (targetElement) {
      const headerOffset = 80;
      const elementPosition = targetElement.getBoundingClientRect().top;
      const offsetPosition =
        elementPosition + window.pageYOffset - headerOffset;

      window.scrollTo({
        top: offsetPosition,
        behavior: "smooth",
      });
    }
  });
});

// Initialize GLightbox for project images
const lightbox = GLightbox({
  selector: ".glightbox",
  touchNavigation: true,
  loop: true,
  autoplayVideos: true,
});

// Animation on scroll
function animateOnScroll() {
  const elements = document.querySelectorAll(".animate-on-scroll");
  const windowHeight = window.innerHeight;

  elements.forEach((element) => {
    const elementTop = element.getBoundingClientRect().top;
    if (elementTop < windowHeight - 100) {
      element.classList.add("animated");
    }
  });
}

// Run on scroll
window.addEventListener("scroll", animateOnScroll);

// Run once on load
window.addEventListener("load", animateOnScroll);

// Form submission
const contactForm = document.getElementById("contactForm");
if (contactForm) {
  contactForm.addEventListener("submit", function (e) {
    e.preventDefault();
    Swal.fire({
      title: "Message Sent!",
      text: "Thank you for contacting us. We will get back to you soon.",
      icon: "success",
      confirmButtonText: "OK",
    });
    contactForm.reset();
  });
}

// Add animation classes for Animate.css
document.addEventListener("DOMContentLoaded", function () {
  const animatedElements = document.querySelectorAll(".animate__animated");
  animatedElements.forEach((el) => {
    el.style.animationDuration = "1s";
    el.style.animationFillMode = "both";
  });
});
