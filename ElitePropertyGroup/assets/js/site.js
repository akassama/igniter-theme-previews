/**
 * Preloader
 */
document.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
    const preloader = document.getElementById("preloader");
    preloader.style.opacity = "0";
    setTimeout(() => {
      preloader.style.display = "none";
    }, 500);
  }, 1500);
});

/**
 * Navbar scroll effect
 */
window.addEventListener("scroll", function () {
  const navbar = document.querySelector(".navbar");
  if (window.scrollY > 50) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});

/**
 * Scroll to top button
 */
const scrollTopBtn = document.querySelector(".scroll-top");

window.addEventListener("scroll", function () {
  if (window.scrollY > 300) {
    scrollTopBtn.classList.add("show");
  } else {
    scrollTopBtn.classList.remove("show");
  }
});

/**
 * Fix scroll to top functionality
 */
scrollTopBtn.addEventListener("click", function (e) {
  e.preventDefault();
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

/**
 * Initialize Hero Swiper
 */
const heroSwiper = new Swiper(".heroSwiper", {
  spaceBetween: 0,
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
    dynamicBullets: true,
  },
  on: {
    init: function () {
      imagesLoaded(".heroSwiper", () => {
        this.update();
      });
    },
    slideChange: function () {
      const activeSlide = this.slides[this.activeIndex];
      const animatedElements =
        activeSlide.querySelectorAll(".animate-on-scroll");
      animatedElements.forEach((el, index) => {
        setTimeout(() => {
          el.classList.add("animated");
        }, index * 200);
      });
    },
  },
});

/**
 * Smooth scrolling for anchor links
 */
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  if (anchor.classList.contains("scroll-top")) {
    return;
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

/**
 * Initialize GLightbox for property images
 */
const lightbox = GLightbox({
  selector: ".glightbox",
  touchNavigation: true,
  loop: true,
  autoplayVideos: true,
});

/**
 * Animation on scroll
 */
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

/**
 * Run animations on scroll and load
 */
window.addEventListener("scroll", animateOnScroll);
window.addEventListener("load", animateOnScroll);

/**
 * Form submission
 */
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

/**
 * Add animation classes for Animate.css
 */
document.addEventListener("DOMContentLoaded", function () {
  const animatedElements = document.querySelectorAll(".animate__animated");
  animatedElements.forEach((el) => {
    el.style.animationDuration = "1s";
    el.style.animationFillMode = "both";
  });
});
