//Write site JavaScript here
document.addEventListener("DOMContentLoaded", () => {
  "use strict";

  // Preloader
  const preloader = document.querySelector("#preloader");
  if (preloader) {
    window.addEventListener("load", () => {
      setTimeout(() => {
        preloader.classList.add("fade");
        setTimeout(() => {
          preloader.remove();
        }, 600);
      }, 500); // Give it a short delay to show the animation
    });
  }

  // Scroll to top button
  const scrollTop = document.querySelector(".scroll-top");
  if (scrollTop) {
    const togglescrollTop = function () {
      window.scrollY > 100
        ? scrollTop.classList.add("active")
        : scrollTop.classList.remove("active");
    };
    window.addEventListener("load", togglescrollTop);
    document.addEventListener("scroll", togglescrollTop);
    scrollTop.addEventListener(
      "click",
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      })
    );
  }

  // Navbar links active state on scroll
  let navbarlinks = document.querySelectorAll("#navbar .scrollto");

  function navbarlinksActive() {
    navbarlinks.forEach((navbarlink) => {
      if (!navbarlink.hash) return;
      let section = document.querySelector(navbarlink.hash);
      if (!section) return;
      let position = window.scrollY + 200;
      if (
        position >= section.offsetTop &&
        position <= section.offsetTop + section.offsetHeight
      ) {
        navbarlink.classList.add("active");
      } else {
        navbarlink.classList.remove("active");
      }
    });
  }
  window.addEventListener("load", navbarlinksActive);
  document.addEventListener("scroll", navbarlinksActive);

  // Mobile nav toggle
  const mobileNavToggle = document.querySelector(".mobile-nav-toggle");
  const navbar = document.querySelector("#navbar");

  if (mobileNavToggle) {
    mobileNavToggle.addEventListener("click", function (e) {
      navbar.classList.toggle("navbar-mobile");
      this.classList.toggle("bi-list");
      this.classList.toggle("bi-x");
    });
  }

  // Mobile nav dropdowns activate
  document.querySelectorAll(".navbar .dropdown > a").forEach((a) => {
    a.addEventListener("click", function (e) {
      if (navbar.classList.contains("navbar-mobile")) {
        e.preventDefault();
        this.nextElementSibling.classList.toggle("dropdown-active");
      }
    });
  });

  // Swiper slider for testimonials
  new Swiper(".testimonials-slider", {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    slidesPerView: "auto",
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true,
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
    },
  });

  // GLightbox
  const lightbox = GLightbox({
    selector: ".glightbox",
  });

  // Animate on scroll (if needed more complex than CSS animate.css)
  // You can extend this with Intersection Observer for more granular control
  function animateOnScroll() {
    const elements = document.querySelectorAll(
      ".animate__animated:not(.animate__appeared)"
    );
    elements.forEach((el) => {
      if (el.getBoundingClientRect().top < window.innerHeight - 100) {
        el.classList.add("animate__appeared"); // Custom class to prevent re-animation
      }
    });
  }

  window.addEventListener("load", animateOnScroll);
  document.addEventListener("scroll", animateOnScroll);
});

// Basic contact form submission (for demo purposes, not production-ready)
document
  .querySelector(".php-email-form")
  .addEventListener("submit", function (e) {
    e.preventDefault();
    const form = this;
    const formData = new FormData(form);

    form.querySelector(".loading").style.display = "block";
    form.querySelector(".error-message").style.display = "none";
    form.querySelector(".sent-message").style.display = "none";

    // Simulate API call
    setTimeout(() => {
      form.querySelector(".loading").style.display = "none";
      // In a real scenario, you'd send this to a server
      // and check the response for success/failure.
      // For now, assume success.
      form.querySelector(".sent-message").style.display = "block";
      Swal.fire({
        title: "Success!",
        text: "Your message has been sent. We will get back to you shortly.",
        icon: "success",
        confirmButtonText: "Ok",
      }).then(() => {
        form.reset(); // Clear the form after success
      });
    }, 2000); // Simulate 2-second delay for submission
  });
