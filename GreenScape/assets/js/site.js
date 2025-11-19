document.addEventListener("DOMContentLoaded", () => {
  "use strict";

  /**
   * Preloader
   */
  const preloader = document.querySelector("#preloader");
  if (preloader) {
    window.addEventListener("load", () => {
      preloader.remove();
    });
  }

  /**
   * Navbar active state on scroll
   */
  const navbarlinks = document.querySelectorAll("#navbar .scrollto");
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

  /**
   * Toggle .navbar-scrolled class to #navbar when page is scrolled
   */
  let selectNavbar = document.querySelector("#navbar");
  if (selectNavbar) {
    let navbarMethod = () => {
      if (window.scrollY > 100) {
        selectNavbar.classList.add("scrolled");
      } else {
        selectNavbar.classList.remove("scrolled");
      }
    };
    window.addEventListener("load", navbarMethod);
    document.addEventListener("scroll", navbarMethod);
  }

  /**
   * Scroll Top Button
   */
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

  /**
   * GLightbox
   */
  const glightbox = GLightbox({
    selector: ".glightbox",
    zoomable: true,
    openEffect: "zoomIn",
    closeEffect: "zoomOut",
  });

  /**
   * Testimonials Swiper Slider
   */
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

      1200: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
    },
  });

  /**
   * Init Animate on Scroll (Wow.js)
   */
  const wow = new WOW({
    boxClass: "animate__animated",
    animateClass: "animate__animated",
    offset: 0,
    mobile: true,
    live: true,
    callback: function (box) {},
    scrollContainer: null,
    resetAnimation: true,
  });
  wow.init();
});
