<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Site Under Maintenance | We'll Be Back Soon</title>
    <!-- Bootstrap 5 CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <!-- Animate CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Oswald:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <!-- Site CSS -->
    <link rel="stylesheet" href="assets/css/site.css" />
    <!--Favicon-->
    <link
      rel="icon"
      type="image/png"
      href="https://assets.aktools.net/image-stocks/logos/favicon/bootstrap.png"
      sizes="96x96"
    />
  </head>
  <body>
    <!-- Preloader is not needed for maintenance page -->

    <main class="main">
      <div class="maintenance-container">
        <!-- Floating decorative elements -->
        <div class="floating-element">
          <i
            class="bi bi-tools"
            style="font-size: 4rem; color: var(--accent-color)"
          ></i>
        </div>
        <div class="floating-element">
          <i
            class="bi bi-hammer"
            style="font-size: 3rem; color: var(--accent-color)"
          ></i>
        </div>
        <div class="floating-element">
          <i
            class="bi bi-wrench"
            style="font-size: 3.5rem; color: var(--accent-color)"
          ></i>
        </div>
        <div class="floating-element">
          <i
            class="bi bi-screwdriver"
            style="font-size: 3rem; color: var(--accent-color)"
          ></i>
        </div>

        <!-- Main Content -->
        <div class="maintenance-icon animate__animated animate__fadeIn">
          <i class="bi bi-cone-striped"></i>
        </div>

        <h1 class="maintenance-title animate__animated animate__fadeInUp">
          Site Under Maintenance
        </h1>
        <p
          class="maintenance-subtitle animate__animated animate__fadeInUp"
          data-wow-delay="0.3s"
        >
          We're currently making improvements to our website. We'll be back
          better than ever!
        </p>

        <!-- Countdown Timer -->
        <div class="countdown-container">
          <div
            class="countdown-item animate__animated animate__fadeInUp"
            data-wow-delay="0.5s"
          >
            <div class="countdown-number" id="days">02</div>
            <div class="countdown-label">Days</div>
          </div>
          <div
            class="countdown-item animate__animated animate__fadeInUp"
            data-wow-delay="0.6s"
          >
            <div class="countdown-number" id="hours">12</div>
            <div class="countdown-label">Hours</div>
          </div>
          <div
            class="countdown-item animate__animated animate__fadeInUp"
            data-wow-delay="0.7s"
          >
            <div class="countdown-number" id="minutes">45</div>
            <div class="countdown-label">Minutes</div>
          </div>
          <div
            class="countdown-item animate__animated animate__fadeInUp"
            data-wow-delay="0.8s"
          >
            <div class="countdown-number" id="seconds">30</div>
            <div class="countdown-label">Seconds</div>
          </div>
        </div>

        <!-- Progress Bar -->
        <div
          class="progress-container animate__animated animate__fadeInUp"
          data-wow-delay="0.9s"
        >
          <div class="progress-label">
            <span>Site Update Progress</span>
            <span>75% Complete</span>
          </div>
          <div class="progress-bar">
            <div class="progress-fill"></div>
          </div>
        </div>

        <!-- Notification -->
        <div
          class="notification-text animate__animated animate__fadeInUp"
          data-wow-delay="1s"
        >
          <h4 class="notification-title">What we're working on:</h4>
          <ul style="text-align: left; padding-left: 20px">
            <li>Improved website performance and loading speed</li>
            <li>New features and functionality for better user experience</li>
            <li>Enhanced security measures to protect your data</li>
            <li>Mobile optimization for all devices</li>
            <li>Content updates and new service offerings</li>
          </ul>
        </div>

        <!-- Contact Options -->
        <h3 class="animate__animated animate__fadeInUp" data-wow-delay="1.1s">
          Need immediate assistance?
        </h3>
        <div class="contact-options">
          <a
            href="tel:+15551234567"
            class="contact-option animate__animated animate__fadeInUp"
            data-wow-delay="1.2s"
          >
            <i class="bi bi-telephone contact-icon"></i>
            <span>Call Us: (555) 123-4567</span>
          </a>
          <a
            href="mailto:support@website.com"
            class="contact-option animate__animated animate__fadeInUp"
            data-wow-delay="1.3s"
          >
            <i class="bi bi-envelope contact-icon"></i>
            <span>Email: support@website.com</span>
          </a>
        </div>

        <!-- Newsletter Signup -->
        <div
          class="newsletter-section animate__animated animate__fadeInUp"
          data-wow-delay="1.4s"
        >
          <h3 class="newsletter-title">Stay Updated</h3>
          <p>
            Subscribe to our newsletter and we'll notify you when we're back
            online.
          </p>
          <form class="newsletter-form">
            <input
              type="email"
              class="form-control"
              placeholder="Your Email Address"
              required
            />
            <button type="submit" class="btn">Subscribe</button>
          </form>
        </div>

        <!-- Social Media Links -->
        <div
          class="social-links animate__animated animate__fadeInUp"
          data-wow-delay="1.5s"
        >
          <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
          <a href="#" class="social-link"><i class="bi bi-twitter"></i></a>
          <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
          <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
        </div>

        <!-- Footer -->
        <div class="footer-section">
          <div class="brand-logo">Main<span>Tain</span></div>
          <p>&copy; 2023 Your Company. All Rights Reserved.</p>
        </div>
      </div>
    </main>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Site JS -->
    <script src="assets/js/site.js"></script>
  </body>
</html>
