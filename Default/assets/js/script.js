document.addEventListener("DOMContentLoaded", function () {
  // Top bar and navbar scroll effects
  const topbar = document.getElementById("topbar");
  const navbar = document.getElementById("navbar");

  window.addEventListener("scroll", function () {
    if (window.scrollY > 50) {
      topbar.classList.add("scrolled");
      navbar.classList.add("scrolled");
      document.querySelector(".navbar-brand img").style.height = "40px";
    } else {
      topbar.classList.remove("scrolled");
      navbar.classList.remove("scrolled");
      document.querySelector(".navbar-brand img").style.height = "50px";
    }
  });

  // Scroll to Top Button
  const scrollToTopBtn = document.getElementById("scrollToTop");

  window.addEventListener("scroll", function () {
    if (window.pageYOffset > 300) {
      scrollToTopBtn.classList.add("active");
    } else {
      scrollToTopBtn.classList.remove("active");
    }
  });

  scrollToTopBtn.addEventListener("click", function (e) {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });

  // Smooth scrolling for navigation links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();

      const targetId = this.getAttribute("href");
      if (targetId === "#") return;

      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        const offset = 120; // Adjust for fixed navbar and topbar height
        const targetPosition =
          targetElement.getBoundingClientRect().top +
          window.pageYOffset -
          offset;

        window.scrollTo({
          top: targetPosition,
          behavior: "smooth",
        });

        // Update active nav item
        document.querySelectorAll(".nav-link").forEach((link) => {
          link.classList.remove("active");
        });
        this.classList.add("active");
      }
    });
  });

  // Active section highlighting in navigation
  const sections = document.querySelectorAll("section");
  const navItems = document.querySelectorAll(".nav-link");

  window.addEventListener("scroll", function () {
    let current = "";

    sections.forEach((section) => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.clientHeight;

      if (pageYOffset >= sectionTop - 100) {
        current = section.getAttribute("id");
      }
    });

    navItems.forEach((item) => {
      item.classList.remove("active");
      if (item.getAttribute("href") === `#${current}`) {
        item.classList.add("active");
      }
    });
  });

  // Initialize GLightbox
  const lightbox = GLightbox({
    selector: ".glightbox",
  });
});

document.addEventListener("DOMContentLoaded", function () {
  // FAQ Toggle functionality
  const faqItems = document.querySelectorAll(".faq-item");

  faqItems.forEach((item) => {
    const header = item.querySelector("h3");
    const toggle = item.querySelector(".faq-toggle");

    header.addEventListener("click", () => {
      // Close all other items
      faqItems.forEach((otherItem) => {
        if (otherItem !== item) {
          otherItem.classList.remove("faq-active");
        }
      });

      // Toggle current item
      item.classList.toggle("faq-active");
    });

    // Also make the toggle icon clickable
    toggle.addEventListener("click", (e) => {
      e.stopPropagation();
      item.classList.toggle("faq-active");
    });
  });
});

// Counter animation for stats section
const counters = document.querySelectorAll(".counter");
const speed = 400;

counters.forEach((counter) => {
  const target = +counter.getAttribute("data-target");
  const count = +counter.innerText;
  const increment = target / speed;
  const hasPlusSign =
    counter.nextElementSibling &&
    counter.nextElementSibling.classList.contains("plus-sign");

  const updateCount = () => {
    const currentCount = +counter.innerText;

    if (currentCount < target) {
      counter.innerText = Math.ceil(currentCount + increment);
      setTimeout(updateCount, 1);
    } else {
      counter.innerText = target;
      // Show plus sign after animation completes if it exists
      if (hasPlusSign) {
        counter.nextElementSibling.style.opacity = "1";
      }
    }
  };

  // Hide plus sign initially if it exists
  if (hasPlusSign) {
    counter.nextElementSibling.style.opacity = "0";
  }

  // Start counting when element is in viewport
  const observer = new IntersectionObserver(
    (entries) => {
      if (entries[0].isIntersecting) {
        updateCount();
        observer.unobserve(counter);
      }
    },
    { threshold: 0.5 }
  );

  observer.observe(counter);
});

// Initialize Swiper.js for Portfolio Carousel
document.addEventListener("DOMContentLoaded", function () {
  const swiper = new Swiper(".portfolioCarousel", {
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    speed: 800,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  // Scroll to Top Button
  const scrollToTopBtn = document.getElementById("scrollToTop");
  window.addEventListener("scroll", () => {
    if (window.scrollY > 300) {
      scrollToTopBtn.style.display = "block";
    } else {
      scrollToTopBtn.style.display = "none";
    }
  });
  scrollToTopBtn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
});

// Portfolio Filtering
document.addEventListener("DOMContentLoaded", () => {
  const filterButtons = document.querySelectorAll(".filter-btn");
  const portfolioItems = document.querySelectorAll(".portfolio-item");

  filterButtons.forEach((button) => {
    button.addEventListener("click", () => {
      // Remove active class from all buttons
      filterButtons.forEach((btn) => btn.classList.remove("active"));
      // Add active class to clicked button
      button.classList.add("active");

      const filter = button.dataset.filter;

      portfolioItems.forEach((item) => {
        if (filter === "*" || item.classList.contains(filter.slice(1))) {
          item.style.display = "block";
        } else {
          item.style.display = "none";
        }
      });
    });
  });
});

// Product Details Page Functionality
document.addEventListener("DOMContentLoaded", function () {
  // Initialize Swiper for thumbnails
  const thumbnailSwiper = new Swiper(".thumbnailSwiper", {
    slidesPerView: 4,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      576: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 15,
      },
      992: {
        slidesPerView: 4,
        spaceBetween: 20,
      },
    },
  });

  // Initialize GLightbox for image zoom
  const lightbox = GLightbox({
    selector: ".glightbox",
  });

  // Thumbnail click handler
  document.querySelectorAll(".thumbnail-item img").forEach((thumb) => {
    thumb.addEventListener("click", function () {
      const mainImg = document.getElementById("mainProductImage");
      const newSrc = this.src.replace("200x200", "800x800");
      mainImg.src = newSrc;

      // Update lightbox
      const parentLink = mainImg.parentElement;
      parentLink.setAttribute("href", newSrc);

      // Highlight active thumbnail
      document.querySelectorAll(".thumbnail-item").forEach((item) => {
        item.classList.remove("active");
      });
      this.parentElement.classList.add("active");
    });
  });

  // Quantity controls
  document
    .getElementById("incrementQty")
    .addEventListener("click", function () {
      const qtyInput = document.getElementById("productQty");
      qtyInput.value = parseInt(qtyInput.value) + 1;
    });

  document
    .getElementById("decrementQty")
    .addEventListener("click", function () {
      const qtyInput = document.getElementById("productQty");
      if (parseInt(qtyInput.value) > 1) {
        qtyInput.value = parseInt(qtyInput.value) - 1;
      }
    });

  // Ensure quantity is at least 1
  document.getElementById("productQty").addEventListener("change", function () {
    if (parseInt(this.value) < 1 || isNaN(parseInt(this.value))) {
      this.value = 1;
    }
  });
});

// Initialize Similar Products Swiper
const similarProductsSwiper = new Swiper(".similarProductsSwiper", {
  slidesPerView: 1,
  spaceBetween: 20,
  navigation: {
    nextEl: ".similar-products-next",
    prevEl: ".similar-products-prev",
  },
  breakpoints: {
    576: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 25,
    },
    992: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
    1200: {
      slidesPerView: 5,
      spaceBetween: 30,
    },
  },
});
