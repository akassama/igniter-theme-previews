<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SparkleClean - Professional Cleaning Services</title>
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
    <!-- Swiper CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <!-- Glightbox CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.1/css/glightbox.css"
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
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Raleway:wght@400;600;700&display=swap"
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
  <body
    class="d-flex flex-column min-vh-100"
    data-bs-spy="scroll"
    data-bs-target="#navbar"
  >
    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Navigation -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">Spark Clean</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="bi bi-list"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="servicesDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Services
              </a>
              <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                <li>
                  <a class="dropdown-item" href="#services"
                    >Residential Cleaning</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#services"
                    >Commercial Cleaning</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#services">Deep Cleaning</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#services"
                    >Specialized Services</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#pricing">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#team">Our Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item ms-lg-2">
              <a
                class="btn btn-primary btn-sm rounded-pill px-3 mt-1"
                href="#quote"
              >
                Get a Quote <i class="bi bi-arrow-right ms-1"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="main">
      <!-- Hero Section -->
      <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="hero-container animate__animated animate__fadeIn">
          <h1>Experience the SparkleClean Difference</h1>
          <p>Professional Cleaning Services for a Brighter Space</p>
          <a
            href="#about"
            class="btn-get-started animate__animated animate__bounceIn"
            >Learn More</a
          >
        </div>
      </section>
      <!-- End Hero -->

      <!-- About Section -->
      <section id="about" class="about">
        <div class="container">
          <div class="row content">
            <div class="col-lg-6 animate__animated animate__fadeInLeft">
              <img
                src="https://assets.aktools.net/image-stocks/cleaning/cleaning-2.jpg"
                class="img-fluid rounded shadow-sm"
                alt="Cleaning in progress"
              />
            </div>
            <div
              class="col-lg-6 pt-4 pt-lg-0 animate__animated animate__fadeInRight"
            >
              <div class="section-title text-start">
                <h2>About Us</h2>
                <p>
                  At SparkleClean, we are dedicated to providing exceptional
                  cleaning services that leave your home or business spotless
                  and refreshed.
                </p>
              </div>
              <h3>
                We are passionate about creating cleaner, healthier environments
                for our clients.
              </h3>
              <p class="fst-italic">
                With a team of highly trained and experienced professionals, we
                guarantee satisfaction with every clean. Our commitment to
                quality and attention to detail sets us apart.
              </p>
              <ul>
                <li>
                  <i class="bi bi-check-circle"></i> Eco-friendly cleaning
                  products.
                </li>
                <li>
                  <i class="bi bi-check-circle"></i> Experienced and vetted
                  cleaners.
                </li>
                <li>
                  <i class="bi bi-check-circle"></i> Customized cleaning plans
                  to suit your needs.
                </li>
              </ul>
              <p>
                From routine maintenance to deep cleaning, SparkleClean is your
                trusted partner for a pristine space. We understand the
                importance of a clean environment and strive to exceed your
                expectations every time.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- Services Section -->
      <section id="services" class="services">
        <div class="container">
          <div class="section-title">
            <h2>Our Services</h2>
            <p>
              We offer a comprehensive range of cleaning services tailored to
              meet your specific requirements.
            </p>
          </div>

          <div class="row">
            <div
              class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0 animate__animated animate__zoomIn"
              data-wow-delay="0.1s"
            >
              <div class="icon-box">
                <div class="icon"><i class="bi bi-house-door"></i></div>
                <h4 class="title"><a href="#">Residential Cleaning</a></h4>
                <p class="description">
                  Keep your home sparkling clean with our regular or one-time
                  residential cleaning services.
                </p>
              </div>
            </div>

            <div
              class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0 animate__animated animate__zoomIn"
              data-wow-delay="0.2s"
            >
              <div class="icon-box">
                <div class="icon"><i class="bi bi-building"></i></div>
                <h4 class="title"><a href="#">Commercial Cleaning</a></h4>
                <p class="description">
                  Maintain a professional and hygienic workplace for your
                  employees and clients.
                </p>
              </div>
            </div>

            <div
              class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0 animate__animated animate__zoomIn"
              data-wow-delay="0.3s"
            >
              <div class="icon-box">
                <div class="icon"><i class="bi bi-gem"></i></div>
                <h4 class="title"><a href="#">Deep Cleaning</a></h4>
                <p class="description">
                  A thorough top-to-bottom cleaning service to refresh your
                  entire space.
                </p>
              </div>
            </div>

            <div
              class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0 mt-4 animate__animated animate__zoomIn"
              data-wow-delay="0.4s"
            >
              <div class="icon-box">
                <div class="icon"><i class="bi bi-sun"></i></div>
                <h4 class="title"><a href="#">Window Cleaning</a></h4>
                <p class="description">
                  Crystal clear windows to let the light shine in.
                </p>
              </div>
            </div>

            <div
              class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0 mt-4 animate__animated animate__zoomIn"
              data-wow-delay="0.5s"
            >
              <div class="icon-box">
                <div class="icon"><i class="bi bi-truck"></i></div>
                <h4 class="title"><a href="#">Move-in/out Cleaning</a></h4>
                <p class="description">
                  Ensure your new or old place is spotless for a smooth
                  transition.
                </p>
              </div>
            </div>

            <div
              class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0 mt-4 animate__animated animate__zoomIn"
              data-wow-delay="0.6s"
            >
              <div class="icon-box">
                <div class="icon"><i class="bi bi-flower1"></i></div>
                <h4 class="title"><a href="#">Eco-Friendly Cleaning</a></h4>
                <p class="description">
                  Sustainable cleaning practices for a healthier planet and
                  home.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Services Section -->

      <!-- Pricing Section -->
      <section id="pricing" class="pricing">
        <div class="container">
          <div class="section-title">
            <h2>Pricing</h2>
            <p>Flexible pricing plans to suit every need and budget.</p>
          </div>

          <div class="row">
            <div
              class="col-lg-4 col-md-6 animate__animated animate__fadeInUp"
              data-wow-delay="0.1s"
            >
              <div class="box">
                <h3>Basic Clean</h3>
                <h4><sup>$</sup>99<span> / visit</span></h4>
                <ul>
                  <li><i class="bi bi-check"></i> Dusting & wiping surfaces</li>
                  <li>
                    <i class="bi bi-check"></i> Vacuuming & mopping floors
                  </li>
                  <li><i class="bi bi-check"></i> Bathroom sanitization</li>
                  <li><i class="bi bi-check"></i> Kitchen surface wipe-down</li>
                  <li class="na">
                    <i class="bi bi-x"></i> <span>Deep scrubbing</span>
                  </li>
                  <li class="na">
                    <i class="bi bi-x"></i> <span>Window cleaning</span>
                  </li>
                </ul>
                <div class="btn-wrap">
                  <a href="#contact" class="btn-buy">Book Now</a>
                </div>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 mt-4 mt-md-0 animate__animated animate__fadeInUp"
              data-wow-delay="0.2s"
            >
              <div class="box featured">
                <h3>Standard Clean</h3>
                <h4><sup>$</sup>149<span> / visit</span></h4>
                <ul>
                  <li><i class="bi bi-check"></i> Dusting & wiping surfaces</li>
                  <li>
                    <i class="bi bi-check"></i> Vacuuming & mopping floors
                  </li>
                  <li><i class="bi bi-check"></i> Bathroom sanitization</li>
                  <li><i class="bi bi-check"></i> Kitchen deep clean</li>
                  <li><i class="bi bi-check"></i> Baseboard wiping</li>
                  <li class="na">
                    <i class="bi bi-x"></i> <span>Window cleaning</span>
                  </li>
                </ul>
                <div class="btn-wrap">
                  <a href="#contact" class="btn-buy">Book Now</a>
                </div>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 mt-4 mt-lg-0 animate__animated animate__fadeInUp"
              data-wow-delay="0.3s"
            >
              <div class="box">
                <h3>Premium Deep Clean</h3>
                <h4><sup>$</sup>249<span> / visit</span></h4>
                <ul>
                  <li>
                    <i class="bi bi-check"></i> All Standard Clean features
                  </li>
                  <li><i class="bi bi-check"></i> Deep scrubbing all areas</li>
                  <li><i class="bi bi-check"></i> Interior window cleaning</li>
                  <li><i class="bi bi-check"></i> Cabinet cleaning</li>
                  <li>
                    <i class="bi bi-check"></i> Appliance exterior cleaning
                  </li>
                  <li><i class="bi bi-check"></i> Wall spot cleaning</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#contact" class="btn-buy">Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Pricing Section -->

      <!-- Testimonials Section -->
      <section id="testimonials" class="testimonials">
        <div class="container">
          <div class="section-title">
            <h2>Testimonials</h2>
            <p>What our happy clients say about our cleaning services.</p>
          </div>

          <div
            class="testimonials-slider swiper animate__animated animate__fadeIn"
          >
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    SparkleClean transformed my home! Their team was
                    professional, thorough, and very respectful of my space. I
                    highly recommend them for anyone looking for top-notch
                    cleaning services.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                  <img
                    src="https://assets.aktools.net/image-stocks/testimonials/testimonial-1.jpg"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3>John Doe</h3>
                  <h4>Homeowner</h4>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    We've been using SparkleClean for our office for months, and
                    they consistently deliver excellent results. Our workspace
                    is always clean and fresh, which is vital for our business.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                  <img
                    src="https://assets.aktools.net/image-stocks/testimonials/testimonial-2.jpg"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3>Jane Smith</h3>
                  <h4>Office Manager</h4>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    The deep clean service was incredible! Every nook and cranny
                    was spotless. It was worth every penny, and I'll definitely
                    be booking again.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                  <img
                    src="https://assets.aktools.net/image-stocks/testimonials/testimonial-3.jpg"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3>David Lee</h3>
                  <h4>Apartment Resident</h4>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    SparkleClean provided an amazing move-out clean. It made the
                    transition so much easier knowing the old place was left in
                    perfect condition. Thank you!
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                  <img
                    src="https://assets.aktools.net/image-stocks/testimonials/testimonial-4.jpg"
                    class="testimonial-img"
                    alt=""
                  />
                  <h3>Emily White</h3>
                  <h4>Relocator</h4>
                </div>
              </div>
              <!-- End testimonial item -->
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!-- End Testimonials Section -->

      <!-- Cta Section -->
      <section id="cta" class="cta">
        <div class="container text-center animate__animated animate__zoomIn">
          <h3>Ready for a Sparkly Clean Space?</h3>
          <p>
            Get in touch with us today for a free estimate and discover the
            difference professional cleaning can make.
          </p>
          <a class="cta-btn" href="#contact">Get Your Free Quote Now</a>
        </div>
      </section>
      <!-- End Cta Section -->

      <!-- Get A Quote Section -->
      <section id="quote" class="get-a-quote">
        <div class="container">
          <div class="section-title">
            <h2>Get A Free Quote</h2>
            <p>
              Fill out the form below to get a personalized quote for your
              cleaning needs.
            </p>
          </div>

          <div
            class="row justify-content-center animate__animated animate__fadeInUp"
          >
            <div class="col-lg-10">
              <form
                action="forms/quote.php"
                method="post"
                role="form"
                class="php-email-form"
              >
                <div class="row gy-4">
                  <div class="col-md-6">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      placeholder="Your Name"
                      required
                    />
                  </div>
                  <div class="col-md-6">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      placeholder="Your Email"
                      required
                    />
                  </div>
                  <div class="col-md-6">
                    <input
                      type="text"
                      class="form-control"
                      name="phone"
                      placeholder="Your Phone (Optional)"
                    />
                  </div>
                  <div class="col-md-6">
                    <select class="form-select" name="service" required>
                      <option value="">Select Service Type</option>
                      <option value="residential">Residential Cleaning</option>
                      <option value="commercial">Commercial Cleaning</option>
                      <option value="deep-clean">Deep Cleaning</option>
                      <option value="move-in-out">Move-in/out Cleaning</option>
                      <option value="window">Window Cleaning</option>
                      <option value="other">Other</option>
                    </select>
                  </div>
                  <div class="col-md-12">
                    <input
                      type="text"
                      class="form-control"
                      name="address"
                      placeholder="Your Address (e.g., 123 Main St, City, Zip)"
                      required
                    />
                  </div>
                  <div class="col-md-12">
                    <textarea
                      class="form-control"
                      name="message"
                      rows="5"
                      placeholder="Tell us more about your cleaning needs (e.g., number of rooms, specific requests, preferred date)"
                    ></textarea>
                  </div>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">
                    Your quote request has been sent. We will contact you
                    shortly!
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit">Request a Quote</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- End Get A Quote Section -->

      <!-- Team Section -->
      <section id="team" class="team">
        <div class="container">
          <div class="section-title">
            <h2>Our Dedicated Team</h2>
            <p>Meet the passionate professionals behind SparkleClean.</p>
          </div>

          <div class="row">
            <div
              class="col-lg-3 col-md-6 d-flex align-items-stretch animate__animated animate__fadeInUp"
            >
              <div class="member">
                <div class="pic">
                  <img
                    src="https://assets.aktools.net/image-stocks/cleaning/cleaner-1.jpg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <h4>Sarah Johnson</h4>
                <span>Founder & CEO</span>
                <p>
                  Leading with a vision for exceptional service and customer
                  satisfaction.
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>

            <div
              class="col-lg-3 col-md-6 d-flex align-items-stretch animate__animated animate__fadeInUp"
              data-wow-delay="0.1s"
            >
              <div class="member">
                <div class="pic">
                  <img
                    src="https://assets.aktools.net/image-stocks/cleaning/cleaner-2.jpg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <h4>Michelle Brown</h4>
                <span>Operations Manager</span>
                <p>
                  Ensuring smooth operations and high-quality service delivery.
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>

            <div
              class="col-lg-3 col-md-6 d-flex align-items-stretch animate__animated animate__fadeInUp"
              data-wow-delay="0.2s"
            >
              <div class="member">
                <div class="pic">
                  <img
                    src="https://assets.aktools.net/image-stocks/cleaning/cleaner-3.jpg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <h4>Jessica Davis</h4>
                <span>Lead Cleaner (Residential)</span>
                <p>
                  Bringing meticulous attention to detail to every residential
                  space.
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>

            <div
              class="col-lg-3 col-md-6 d-flex align-items-stretch animate__animated animate__fadeInUp"
              data-wow-delay="0.3s"
            >
              <div class="member">
                <div class="pic">
                  <img
                    src="https://assets.aktools.net/image-stocks/cleaning/cleaner-4.jpg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <h4>Ruby Green</h4>
                <span>Lead Cleaner (Commercial)</span>
                <p>
                  Specializing in efficient and effective commercial cleaning
                  solutions.
                </p>
                <div class="social">
                  <a href=""><i class="bi bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Team Section -->

      <!-- Contact Section -->
      <section id="contact" class="contact">
        <div class="container">
          <div class="section-title">
            <h2>Contact Us</h2>
            <p>Have questions or need a custom quote? Reach out to us today!</p>
          </div>

          <div class="row">
            <div class="col-lg-4 animate__animated animate__fadeInLeft">
              <div class="info-item">
                <i class="bi bi-geo-alt"></i>
                <h3>Our Location</h3>
                <p>123 Cleaning Lane, Sparkle City, SC 12345</p>
              </div>
            </div>

            <div class="col-lg-4 animate__animated animate__fadeInUp">
              <div class="info-item">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>info@sparkleclean.com</p>
              </div>
            </div>

            <div class="col-lg-4 animate__animated animate__fadeInRight">
              <div class="info-item">
                <i class="bi bi-phone"></i>
                <h3>Call Us</h3>
                <p>+44 20 1234 5678</p>
              </div>
            </div>
          </div>

          <div
            class="row mt-5 justify-content-center animate__animated animate__fadeInUp"
          >
            <div class="col-lg-8">
              <form
                action="forms/contact.php"
                method="post"
                role="form"
                class="php-email-form"
              >
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      id="name"
                      placeholder="Your Name"
                      required
                    />
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email"
                      placeholder="Your Email"
                      required
                    />
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input
                    type="text"
                    class="form-control"
                    name="subject"
                    id="subject"
                    placeholder="Subject"
                    required
                  />
                </div>
                <div class="form-group mt-3">
                  <textarea
                    class="form-control"
                    name="message"
                    rows="5"
                    placeholder="Message"
                    required
                  ></textarea>
                </div>
                <div class="form-group mt-3">
                  <select
                    class="form-select"
                    id="serviceType"
                    name="serviceType"
                    required
                  >
                    <option value="">Select Service Type</option>
                    <option value="residential">Residential Cleaning</option>
                    <option value="commercial">Commercial Cleaning</option>
                    <option value="deep-clean">Deep Cleaning</option>
                    <option value="other">Other</option>
                  </select>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">
                    Your message has been sent. Thank you!
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit">Send Message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>

    <!-- Footer -->
    <footer class="mt-auto">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-4 col-md-6">
            <div class="footer-about">
              <a class="d-flex align-items-center mb-4">
                <img
                  src="https://placehold.co/250x60/0d6efd/ffffff?text=SparkleClean"
                  alt="SparkleClean Logo"
                />
              </a>
              <p class="mb-4">
                At SparkleClean, we are dedicated to providing exceptional
                cleaning services that leave your home or business spotless and
                refreshed..
              </p>
              <div class="social-links">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-youtube"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6">
            <h5>Quick Links</h5>
            <ul class="list-unstyled">
              <li><a href="index.html">Home</a></li>
              <li><a href="#about">About Us</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#pricing">Pricing</a></li>
              <li><a href="#team">Our Team</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6">
            <h5>Our Services</h5>
            <ul class="list-unstyled">
              <li><a href="#services">Residential Cleaning</a></li>
              <li><a href="#services">Commercial Cleaning</a></li>
              <li><a href="#services">Deep Cleaning</a></li>
              <li><a href="#services">Carpet Cleaning</a></li>
              <li><a href="#services">Window Cleaning</a></li>
              <li><a href="#services">Move-in/out Cleaning</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6">
            <h5>Contact Info</h5>
            <ul class="footer-contact-info list-unstyled">
              <li>
                <i class="bi bi-geo-alt"></i>
                <div>
                  <strong>Address:</strong>
                  123 Tech Park, Watford, UK
                </div>
              </li>
              <li>
                <i class="bi bi-envelope"></i>
                <div>
                  <strong>Email:</strong>
                  info@sparkleclean.com
                </div>
              </li>
              <li>
                <i class="bi bi-phone"></i>
                <div>
                  <strong>Phone:</strong>
                  +44 20 1234 5678
                </div>
              </li>
              <li>
                <i class="bi bi-clock"></i>
                <div>
                  <strong>Hours:</strong>
                  Mon-Fri: 9AM - 6PM
                </div>
              </li>
            </ul>
          </div>
        </div>

        <div class="copyright">
          <div class="row">
            <div class="col-md-6 text-center text-md-start">
              <p class="mb-0">
                &copy; 2023 <strong>SparkleClean</strong>. All Rights Reserved.
              </p>
            </div>
            <div class="col-md-6 text-center text-md-end">
              <p class="mb-0">
                <a href="#" class="me-3">Privacy Policy</a>
                <a href="#">Terms of Service</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <a
      href="#"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper.js JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- Glightbox.js JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.1/js/glightbox.min.js"></script>
    <!-- CountUp JS -->
    <script src="https://cdn.jsdelivr.net/npm/countup.js@2.9.0/dist/countUp.min.js"></script>
    <!--ImagesLoaded CDN-->
    <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
    <!--SweetAlert2 CDN-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Site JS -->
    <script src="assets/js/site.js"></script>
  </body>
</html>
