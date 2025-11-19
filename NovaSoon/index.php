<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nova | Coming Soon</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap"
      rel="stylesheet"
    />
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
    <!-- Preloader -->
    <div id="preloader">
      <div class="spinner"></div>
    </div>

    <main class="main">
      <!-- Video Background -->
      <div class="video-background">
        <video autoplay muted loop playsinline>
          <source
            src="https://assets.aktools.net/image-stocks/videos/video-3.mp4"
            type="video/mp4"
          />
          Your browser does not support the video tag.
        </video>
        <div class="video-overlay"></div>
      </div>

      <!-- Hero Section -->
      <section class="hero">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="hero-content animate__animated animate__fadeIn">
                <div class="logo animate__animated animate__fadeInDown">
                  Nova<span>.</span>
                </div>
                <h1 class="animate__animated animate__fadeInUp">
                  Something Amazing Is Coming Soon
                </h1>
                <p class="animate__animated animate__fadeInUp">
                  We're working hard to bring you an incredible new experience.
                  Our team is putting the finishing touches on what will be a
                  revolutionary platform.
                </p>

                <div class="countdown animate__animated animate__fadeInUp">
                  <div class="countdown-item">
                    <div class="countdown-number" id="days">00</div>
                    <div class="countdown-label">Days</div>
                  </div>
                  <div class="countdown-item">
                    <div class="countdown-number" id="hours">00</div>
                    <div class="countdown-label">Hours</div>
                  </div>
                  <div class="countdown-item">
                    <div class="countdown-number" id="minutes">00</div>
                    <div class="countdown-label">Minutes</div>
                  </div>
                  <div class="countdown-item">
                    <div class="countdown-number" id="seconds">00</div>
                    <div class="countdown-label">Seconds</div>
                  </div>
                </div>

                <div
                  class="animate__animated animate__fadeInUp animate__delay-1s"
                >
                  <a href="#notify" class="btn btn-primary btn-lg me-3 pulse"
                    >Notify Me</a
                  >
                  <a href="#about" class="btn btn-outline-primary btn-lg"
                    >Learn More</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Notify Section -->
      <section id="notify" class="notify-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
              <h2 class="section-title text-center">
                Get Notified When We Launch
              </h2>
              <p>
                Be the first to know when we go live. Enter your email below and
                we'll send you an alert.
              </p>

              <form class="notify-form mt-5">
                <div class="input-group">
                  <input
                    type="email"
                    class="form-control"
                    placeholder="Your email address"
                    aria-label="Your email address"
                    required
                  />
                  <button class="btn btn-primary" type="submit">
                    Subscribe
                  </button>
                </div>
                <div class="form-text mt-2">
                  We respect your privacy and will never share your information.
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <!-- About Section -->
      <section id="about" class="about-section">
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
              <h2 class="section-title text-center">What To Expect</h2>
              <p>
                Our new platform is designed with innovation and user experience
                at its core. Here's a glimpse of what's coming.
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="feature-item animate__animated animate__fadeInUp">
                <div class="feature-icon">
                  <i class="bi bi-lightning-charge"></i>
                </div>
                <h3>Lightning Fast</h3>
                <p>
                  Experience blazing fast performance with our optimized
                  architecture and cutting-edge technology stack.
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div
                class="feature-item animate__animated animate__fadeInUp animate__delay-1s"
              >
                <div class="feature-icon">
                  <i class="bi bi-shield-check"></i>
                </div>
                <h3>Secure & Safe</h3>
                <p>
                  Your data's security is our top priority with enterprise-grade
                  encryption and protection measures.
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div
                class="feature-item animate__animated animate__fadeInUp animate__delay-2s"
              >
                <div class="feature-icon">
                  <i class="bi bi-phone"></i>
                </div>
                <h3>Mobile Friendly</h3>
                <p>
                  Fully responsive design that works perfectly on all devices
                  from desktop to mobile.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Social Section -->
      <section class="social-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
              <h2 class="section-title text-center">Follow Our Journey</h2>
              <p>
                Stay connected with us for updates, behind-the-scenes content,
                and exclusive previews.
              </p>

              <div class="social-links">
                <a href="#" class="social-link">
                  <i class="bi bi-facebook"></i>
                </a>
                <a href="#" class="social-link">
                  <i class="bi bi-twitter"></i>
                </a>
                <a href="#" class="social-link">
                  <i class="bi bi-instagram"></i>
                </a>
                <a href="#" class="social-link">
                  <i class="bi bi-linkedin"></i>
                </a>
                <a href="#" class="social-link">
                  <i class="bi bi-youtube"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer>
      <div class="container">
        <p>&copy; 2023 Nova. All rights reserved.</p>
      </div>
    </footer>

    <!-- Scroll to Top Button -->
    <div class="scroll-top">
      <i class="bi bi-arrow-up"></i>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Site JS -->
    <script src="assets/js/site.js"></script>
  </body>
</html>
