<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GreenScape Landscaping - Your Outdoor Oasis Awaits</title>
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
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Playfair+Display:wght@700&display=swap"
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

    <!-- Header / Navbar -->
    <header id="header" class="fixed-top">
      <nav
        id="navbar"
        class="navbar navbar-expand-lg bg-light navbar-light p-3 p-lg-0"
      >
        <div class="container">
          <a class="navbar-brand text-success fs-3 fw-bold" href="index.html"
            >GreenScape<span class="text-dark">.</span></a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto py-3 py-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#hero"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portfolio">Portfolio</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  More
                </a>
                <ul class="dropdown-menu fade-up">
                  <li><a class="dropdown-item" href="#team">Our Team</a></li>
                  <li>
                    <a class="dropdown-item" href="#offers">Seasonal Offers</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#testimonials"
                      >Testimonials</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
            <a href="#contact" class="btn btn-primary rounded-pill px-4 ms-lg-3"
              >Get a Quote</a
            >
          </div>
        </div>
      </nav>
    </header>
    <!-- End Header -->

    <main class="main">
      <!-- Hero Section -->
      <section
        id="hero"
        class="d-flex align-items-center min-vh-100"
        style="
          background-image: url('https://assets.aktools.net/image-stocks/landscaping/landscaping-1.jpg');
        "
      >
        <div class="container text-center text-md-start">
          <div class="row align-items-center">
            <div class="col-lg-8 animate__animated animate__fadeInUp">
              <h1 class="display-3 fw-bold mb-4">
                Crafting Your <span class="text-success">Dream</span> Outdoor
                Space
              </h1>
              <p class="lead mb-4">
                From lush lawns to intricate garden designs, we bring your
                landscaping visions to life.
              </p>
              <div
                class="d-flex justify-content-center justify-content-md-start gap-3"
              >
                <a
                  href="#services"
                  class="btn btn-primary btn-lg rounded-pill animate__animated animate__bounceIn"
                  data-wow-delay="0.5s"
                  >Our Services</a
                >
                <a
                  href="#contact"
                  class="btn btn-outline-light btn-lg rounded-pill animate__animated animate__bounceIn"
                  data-wow-delay="0.7s"
                  >Get a Free Quote</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Hero Section -->

      <!-- About Section -->
      <section id="about" class="about section-bg py-5">
        <div class="container" data-aos="fade-up">
          <div class="row gy-4 align-items-center">
            <div
              class="col-lg-6 order-2 order-lg-1 animate__animated animate__fadeInLeft"
            >
              <img
                src="https://assets.aktools.net/image-stocks/landscaping/landscaping-2.jpg"
                class="img-fluid rounded-3 shadow-lg"
                alt="About Us"
              />
            </div>
            <div
              class="col-lg-6 order-1 order-lg-2 ps-lg-5 animate__animated animate__fadeInRight"
            >
              <h2 class="display-5 fw-bold mb-4">
                About <span class="text-success">GreenScape</span> Landscaping
              </h2>
              <p class="lead text-muted mb-4">
                With over 15 years of experience, GreenScape Landscaping is
                dedicated to creating beautiful and functional outdoor spaces
                for homes and businesses. We pride ourselves on attention to
                detail, sustainable practices, and exceeding client
                expectations.
              </p>
              <div class="row gy-3">
                <div class="col-md-6">
                  <p class="d-flex align-items-start">
                    <i
                      class="bi bi-check-circle-fill text-success fs-5 me-2"
                    ></i
                    ><span>Expert Craftsmanship</span>
                  </p>
                </div>
                <div class="col-md-6">
                  <p class="d-flex align-items-start">
                    <i
                      class="bi bi-check-circle-fill text-success fs-5 me-2"
                    ></i
                    ><span>Eco-Friendly Solutions</span>
                  </p>
                </div>
                <div class="col-md-6">
                  <p class="d-flex align-items-start">
                    <i
                      class="bi bi-check-circle-fill text-success fs-5 me-2"
                    ></i
                    ><span>Customer Satisfaction Guaranteed</span>
                  </p>
                </div>
                <div class="col-md-6">
                  <p class="d-flex align-items-start">
                    <i
                      class="bi bi-check-circle-fill text-success fs-5 me-2"
                    ></i
                    ><span>Timely Project Completion</span>
                  </p>
                </div>
              </div>
              <a href="#contact" class="btn btn-primary rounded-pill mt-4"
                >Learn More</a
              >
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- Services Section -->
      <section id="services" class="services py-5">
        <div class="container" data-aos="fade-up">
          <div class="section-title text-center mb-5">
            <h2 class="display-5 fw-bold">
              Our <span class="text-success">Services</span>
            </h2>
            <p class="text-muted lead mx-auto" style="max-width: 600px">
              We offer a comprehensive range of landscaping services to keep
              your property looking its best year-round.
            </p>
          </div>

          <div class="row gy-4">
            <div
              class="col-lg-4 col-md-6 animate__animated animate__fadeInUp"
              data-wow-delay="0.1s"
            >
              <div class="service-card">
                <i class="bi bi-flower1 icon"></i>
                <h4 class="mb-3">Lawn Care & Maintenance</h4>
                <p class="text-muted">
                  Keep your lawn lush and healthy with our expert mowing,
                  fertilization, and pest control services.
                </p>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 animate__animated animate__fadeInUp"
              data-wow-delay="0.2s"
            >
              <div class="service-card">
                <i class="bi bi-tree icon"></i>
                <h4 class="mb-3">Tree & Shrub Services</h4>
                <p class="text-muted">
                  Professional tree trimming, removal, and disease management to
                  ensure the health and safety of your landscape.
                </p>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 animate__animated animate__fadeInUp"
              data-wow-delay="0.3s"
            >
              <div class="service-card">
                <i class="bi bi-tools icon"></i>
                <h4 class="mb-3">Landscape Design & Installation</h4>
                <p class="text-muted">
                  Custom landscape designs tailored to your vision, from concept
                  to complete installation.
                </p>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 animate__animated animate__fadeInUp"
              data-wow-delay="0.4s"
            >
              <div class="service-card">
                <i class="bi bi-water icon"></i>
                <h4 class="mb-3">Irrigation Systems</h4>
                <p class="text-muted">
                  Efficient and smart irrigation solutions to ensure your plants
                  get the right amount of water, saving you time and resources.
                </p>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 animate__animated animate__fadeInUp"
              data-wow-delay="0.5s"
            >
              <div class="service-card">
                <i class="bi bi-bricks icon"></i>
                <h4 class="mb-3">Hardscaping & Patios</h4>
                <p class="text-muted">
                  Create stunning outdoor living areas with our patio, walkway,
                  and retaining wall installations.
                </p>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 animate__animated animate__fadeInUp"
              data-wow-delay="0.6s"
            >
              <div class="service-card">
                <i class="bi bi-snow icon"></i>
                <h4 class="mb-3">Seasonal Cleanups</h4>
                <p class="text-muted">
                  Prepare your property for changing seasons with our thorough
                  spring and fall cleanup services.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Services Section -->

      <!-- Portfolio Section -->
      <section id="portfolio" class="portfolio section-bg py-5">
        <div class="container" data-aos="fade-up">
          <div class="section-title text-center mb-5">
            <h2 class="display-5 fw-bold">
              Our <span class="text-success">Portfolio</span>
            </h2>
            <p class="text-muted lead mx-auto" style="max-width: 600px">
              Explore some of our recent projects and see how we've transformed
              outdoor spaces into stunning landscapes.
            </p>
          </div>

          <div
            class="row gy-4 portfolio-container"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div
              class="col-lg-4 col-md-6 portfolio-item animate__animated animate__zoomIn"
            >
              <div class="portfolio-item">
                <img
                  src="https://assets.aktools.net/image-stocks/landscaping/landscaping-3.jpg"
                  class="img-fluid"
                  alt="Modern Garden Design"
                />
                <div class="portfolio-info">
                  <h4>Modern Garden Design</h4>
                  <p>Residential Project</p>
                  <a
                    href="https://assets.aktools.net/image-stocks/landscaping/landscaping-3.jpg"
                    data-gallery="portfolio-gallery"
                    class="glightbox glightbox-btn"
                    title="Modern Garden Design"
                    ><i class="bi bi-plus"></i
                  ></a>
                </div>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 portfolio-item animate__animated animate__zoomIn"
              data-wow-delay="0.1s"
            >
              <div class="portfolio-item">
                <img
                  src="https://assets.aktools.net/image-stocks/landscaping/landscaping-4.jpg"
                  class="img-fluid"
                  alt="Commercial Landscape Renovation"
                />
                <div class="portfolio-info">
                  <h4>Commercial Landscape Renovation</h4>
                  <p>Commercial Project</p>
                  <a
                    href="https://assets.aktools.net/image-stocks/landscaping/landscaping-4.jpg"
                    data-gallery="portfolio-gallery"
                    class="glightbox glightbox-btn"
                    title="Commercial Landscape Renovation"
                    ><i class="bi bi-plus"></i
                  ></a>
                </div>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 portfolio-item animate__animated animate__zoomIn"
              data-wow-delay="0.2s"
            >
              <div class="portfolio-item">
                <img
                  src="https://assets.aktools.net/image-stocks/landscaping/landscaping-5.jpg"
                  class="img-fluid"
                  alt="Backyard Oasis Creation"
                />
                <div class="portfolio-info">
                  <h4>Backyard Oasis Creation</h4>
                  <p>Residential Project</p>
                  <a
                    href="https://assets.aktools.net/image-stocks/landscaping/landscaping-5.jpg"
                    data-gallery="portfolio-gallery"
                    class="glightbox glightbox-btn"
                    title="Backyard Oasis Creation"
                    ><i class="bi bi-plus"></i
                  ></a>
                </div>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 portfolio-item animate__animated animate__zoomIn"
              data-wow-delay="0.3s"
            >
              <div class="portfolio-item">
                <img
                  src="https://assets.aktools.net/image-stocks/landscaping/landscaping-6.jpg"
                  class="img-fluid"
                  alt="Sustainable Garden Design"
                />
                <div class="portfolio-info">
                  <h4>Sustainable Garden Design</h4>
                  <p>Eco-Friendly Project</p>
                  <a
                    href="https://assets.aktools.net/image-stocks/landscaping/landscaping-6.jpg"
                    data-gallery="portfolio-gallery"
                    class="glightbox glightbox-btn"
                    title="Sustainable Garden Design"
                    ><i class="bi bi-plus"></i
                  ></a>
                </div>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 portfolio-item animate__animated animate__zoomIn"
              data-wow-delay="0.4s"
            >
              <div class="portfolio-item">
                <img
                  src="https://assets.aktools.net/image-stocks/landscaping/landscaping-7.jpg"
                  class="img-fluid"
                  alt="Tree Care and Maintenance"
                />
                <div class="portfolio-info">
                  <h4>Tree Care and Maintenance</h4>
                  <p>Arboriculture Project</p>
                  <a
                    href="https://assets.aktools.net/image-stocks/landscaping/landscaping-7.jpg"
                    data-gallery="portfolio-gallery"
                    class="glightbox glightbox-btn"
                    title="Tree Care and Maintenance"
                    ><i class="bi bi-plus"></i
                  ></a>
                </div>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 portfolio-item animate__animated animate__zoomIn"
              data-wow-delay="0.5s"
            >
              <div class="portfolio-item">
                <img
                  src="https://assets.aktools.net/image-stocks/landscaping/landscaping-8.jpg"
                  class="img-fluid"
                  alt="Urban Green Space"
                />
                <div class="portfolio-info">
                  <h4>Urban Green Space</h4>
                  <p>Public Project</p>
                  <a
                    href="https://assets.aktools.net/image-stocks/landscaping/landscaping-8.jpg"
                    data-gallery="portfolio-gallery"
                    class="glightbox glightbox-btn"
                    title="Urban Green Space"
                    ><i class="bi bi-plus"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Portfolio Section -->

      <!-- Call to Action Section -->
      <section id="cta" class="py-5">
        <div class="container text-center animate__animated animate__fadeInUp">
          <h2 class="display-4 fw-bold mb-4">
            Ready to Transform Your Outdoor Space?
          </h2>
          <p class="lead mb-5" style="max-width: 800px; margin: 0 auto">
            Contact us today for a free consultation and let our experts help
            you design and create the landscape of your dreams.
          </p>
          <a
            class="btn btn-light btn-lg rounded-pill px-5 animate__animated animate__bounceIn"
            href="#contact"
            >Get a Free Consultation</a
          >
        </div>
      </section>
      <!-- End Call to Action Section -->

      <!-- Team Section -->
      <section id="team" class="team py-5">
        <div class="container" data-aos="fade-up">
          <div class="section-title text-center mb-5">
            <h2 class="display-5 fw-bold">
              Meet Our <span class="text-success">Team</span>
            </h2>
            <p class="text-muted lead mx-auto" style="max-width: 600px">
              Our dedicated team of professionals brings passion, expertise, and
              creativity to every project.
            </p>
          </div>

          <div class="row gy-4">
            <div
              class="col-lg-4 col-md-6 animate__animated animate__fadeInUp"
              data-wow-delay="0.1s"
            >
              <div class="team-member">
                <img
                  src="https://assets.aktools.net/image-stocks/contractor/engineer-1.jpg"
                  class="img-fluid"
                  alt="John Doe"
                />
                <h4 class="mt-3 mb-1">John Doe</h4>
                <span class="text-muted">Lead Landscape Designer</span>
                <p class="small mt-3">
                  John combines artistic vision with practical knowledge to
                  create breathtaking and sustainable designs.
                </p>
                <div class="social-links mt-3">
                  <a href="#" class="text-secondary mx-2"
                    ><i class="bi bi-twitter"></i
                  ></a>
                  <a href="#" class="text-secondary mx-2"
                    ><i class="bi bi-facebook"></i
                  ></a>
                  <a href="#" class="text-secondary mx-2"
                    ><i class="bi bi-instagram"></i
                  ></a>
                  <a href="#" class="text-secondary mx-2"
                    ><i class="bi bi-linkedin"></i
                  ></a>
                </div>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 animate__animated animate__fadeInUp"
              data-wow-delay="0.2s"
            >
              <div class="team-member">
                <img
                  src="https://assets.aktools.net/image-stocks/contractor/engineer-2.jpg"
                  class="img-fluid"
                  alt="Jane Smith"
                />
                <h4 class="mt-3 mb-1">Jane Smith</h4>
                <span class="text-muted">Horticulturist</span>
                <p class="small mt-3">
                  Jane ensures that every plant thrives with her deep knowledge
                  of plant science and garden care.
                </p>
                <div class="social-links mt-3">
                  <a href="#" class="text-secondary mx-2"
                    ><i class="bi bi-twitter"></i
                  ></a>
                  <a href="#" class="text-secondary mx-2"
                    ><i class="bi bi-facebook"></i
                  ></a>
                  <a href="#" class="text-secondary mx-2"
                    ><i class="bi bi-instagram"></i
                  ></a>
                  <a href="#" class="text-secondary mx-2"
                    ><i class="bi bi-linkedin"></i
                  ></a>
                </div>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 animate__animated animate__fadeInUp"
              data-wow-delay="0.3s"
            >
              <div class="team-member">
                <img
                  src="https://assets.aktools.net/image-stocks/contractor/engineer-3.jpg"
                  class="img-fluid"
                  alt="David Lee"
                />
                <h4 class="mt-3 mb-1">David Lee</h4>
                <span class="text-muted">Project Manager</span>
                <p class="small mt-3">
                  David meticulously oversees every project, ensuring quality,
                  efficiency, and client satisfaction.
                </p>
                <div class="social-links mt-3">
                  <a href="#" class="text-secondary mx-2"
                    ><i class="bi bi-twitter"></i
                  ></a>
                  <a href="#" class="text-secondary mx-2"
                    ><i class="bi bi-facebook"></i
                  ></a>
                  <a href="#" class="text-secondary mx-2"
                    ><i class="bi bi-instagram"></i
                  ></a>
                  <a href="#" class="text-secondary mx-2"
                    ><i class="bi bi-linkedin"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Team Section -->

      <!-- Seasonal Offers Section -->
      <section id="offers" class="offers section-bg py-5">
        <div class="container" data-aos="fade-up">
          <div class="section-title text-center mb-5">
            <h2 class="display-5 fw-bold">
              Seasonal <span class="text-success">Offers</span>
            </h2>
            <p class="text-muted lead mx-auto" style="max-width: 600px">
              Take advantage of our special seasonal deals and enhance your
              landscape for less!
            </p>
          </div>

          <div class="row gy-4">
            <div
              class="col-lg-4 col-md-6 animate__animated animate__fadeInUp"
              data-wow-delay="0.1s"
            >
              <div class="card offer-card">
                <img
                  src="https://assets.aktools.net/image-stocks/landscaping/landscaping-9.jpg"
                  class="card-img-top"
                  alt="Spring Cleanup Offer"
                />
                <div class="card-body">
                  <h5 class="card-title fw-bold">Spring Refresh Package</h5>
                  <p class="card-text text-muted">
                    Get your garden ready for the growing season with our
                    comprehensive cleanup, mulching, and planting service.
                  </p>
                  <p class="lead fw-bold text-accent">
                    Save <span class="text-danger">20%</span> this Spring!
                  </p>
                  <a href="#contact" class="btn btn-primary rounded-pill"
                    >Claim Offer</a
                  >
                </div>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 animate__animated animate__fadeInUp"
              data-wow-delay="0.2s"
            >
              <div class="card offer-card">
                <img
                  src="https://assets.aktools.net/image-stocks/landscaping/landscaping-8.jpg"
                  class="card-img-top"
                  alt="Tree Trimming Offer"
                />
                <div class="card-body">
                  <h5 class="card-title fw-bold">Summer Tree Care Special</h5>
                  <p class="card-text text-muted">
                    Ensure your trees are healthy and safe with our professional
                    trimming and pruning services. Limited time offer!
                  </p>
                  <p class="lead fw-bold text-accent">
                    <span class="text-danger">$50 OFF</span> all tree services!
                  </p>
                  <a href="#contact" class="btn btn-primary rounded-pill"
                    >Claim Offer</a
                  >
                </div>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 animate__animated animate__fadeInUp"
              data-wow-delay="0.3s"
            >
              <div class="card offer-card">
                <img
                  src="https://assets.aktools.net/image-stocks/contractor/contractor-1.jpg"
                  class="card-img-top"
                  alt="Fall Leaf Cleanup Offer"
                />
                <div class="card-body">
                  <h5 class="card-title fw-bold">Autumn Leaf Removal Deal</h5>
                  <p class="card-text text-muted">
                    Don't let fallen leaves overwhelm your yard. Our efficient
                    cleanup service will leave your property pristine.
                  </p>
                  <p class="lead fw-bold text-accent">
                    Book now and get <span class="text-danger">15% OFF</span>!
                  </p>
                  <a href="#contact" class="btn btn-primary rounded-pill"
                    >Claim Offer</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Seasonal Offers Section -->

      <!-- Testimonials Section (Swiper) -->
      <section id="testimonials" class="testimonials py-5">
        <div class="container" data-aos="fade-up">
          <div class="section-title text-center mb-5">
            <h2 class="display-5 fw-bold">
              What Our <span class="text-success">Clients Say</span>
            </h2>
            <p class="text-muted lead mx-auto" style="max-width: 600px">
              Hear from satisfied customers who have experienced the GreenScape
              difference.
            </p>
          </div>

          <div
            class="testimonials-slider swiper animate__animated animate__fadeInUp"
            data-wow-delay="0.1s"
          >
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img
                    src="https://assets.aktools.net/image-stocks/testimonials/testimonial-1.jpg"
                    class="img-fluid"
                    alt="Client 1"
                  />
                  <h5>Michael Johnson</h5>
                  <span>Homeowner</span>
                  <p>
                    "GreenScape completely transformed our backyard! Their
                    design team understood our vision perfectly, and the
                    execution was flawless. Highly recommended!"
                  </p>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img
                    src="https://assets.aktools.net/image-stocks/testimonials/testimonial-2.jpg"
                    class="img-fluid"
                    alt="Client 2"
                  />
                  <h5>Emily White</h5>
                  <span>Business Owner</span>
                  <p>
                    "Our commercial property always looks pristine thanks to
                    GreenScape's regular maintenance services. Professional,
                    reliable, and a pleasure to work with."
                  </p>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img
                    src="https://assets.aktools.net/image-stocks/testimonials/testimonial-3.jpg"
                    class="img-fluid"
                    alt="Client 3"
                  />
                  <h5>David Rodriguez</h5>
                  <span>Estate Manager</span>
                  <p>
                    "From intricate hardscaping to extensive planting,
                    GreenScape handled our large estate project with incredible
                    skill and precision. Truly top-tier service."
                  </p>
                </div>
              </div>
              <!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img
                    src="https://assets.aktools.net/image-stocks/testimonials/testimonial-4.jpg"
                    class="img-fluid"
                    alt="Client 4"
                  />
                  <h5>Sarah Chen</h5>
                  <span>New Homeowner</span>
                  <p>
                    "We moved into a new home with an undeveloped yard.
                    GreenScape designed and installed a beautiful,
                    low-maintenance garden that we absolutely adore. Fantastic
                    job!"
                  </p>
                </div>
              </div>
              <!-- End testimonial item -->
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!-- End Testimonials Section -->

      <!-- Contact Section -->
      <section id="contact" class="contact section-bg py-5">
        <div class="container" data-aos="fade-up">
          <div class="section-title text-center mb-5">
            <h2 class="display-5 fw-bold">
              Contact <span class="text-success">Us</span>
            </h2>
            <p class="text-muted lead mx-auto" style="max-width: 600px">
              Have questions or ready to start your project? Get in touch with
              us today!
            </p>
          </div>

          <div class="row gy-4">
            <div class="col-lg-6">
              <div class="row gy-4">
                <div
                  class="col-md-6 animate__animated animate__fadeInUp"
                  data-wow-delay="0.1s"
                >
                  <div class="info-item">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Our Address</h3>
                    <p>123 Green Valley St</p>
                    <p>Landscapia, LA 90210</p>
                  </div>
                </div>
                <!-- End Info Item -->

                <div
                  class="col-md-6 animate__animated animate__fadeInUp"
                  data-wow-delay="0.2s"
                >
                  <div class="info-item">
                    <i class="bi bi-telephone"></i>
                    <h3>Call Us</h3>
                    <p>+1 5589 55488 55</p>
                    <p>+1 6678 25444 56</p>
                  </div>
                </div>
                <!-- End Info Item -->

                <div
                  class="col-md-6 animate__animated animate__fadeInUp"
                  data-wow-delay="0.3s"
                >
                  <div class="info-item">
                    <i class="bi bi-envelope"></i>
                    <h3>Email Us</h3>
                    <p>info@greenscape.com</p>
                    <p>contact@greenscape.com</p>
                  </div>
                </div>
                <!-- End Info Item -->

                <div
                  class="col-md-6 animate__animated animate__fadeInUp"
                  data-wow-delay="0.4s"
                >
                  <div class="info-item">
                    <i class="bi bi-clock"></i>
                    <h3>Open Hours</h3>
                    <p>Monday - Friday</p>
                    <p>9:00 AM - 5:00 PM</p>
                  </div>
                </div>
                <!-- End Info Item -->
              </div>
            </div>

            <div
              class="col-lg-6 animate__animated animate__fadeInRight"
              data-wow-delay="0.5s"
            >
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
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">
                    Your message has been sent. Thank you!
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary rounded-pill">
                    Send Message
                  </button>
                </div>
              </form>
            </div>
            <!-- End Contact Form -->
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- Footer -->
    <footer class="mt-auto">
      <div class="container py-4">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-info">
            <a
              href="index.html"
              class="d-flex align-items-center mb-3 text-success fs-4 fw-bold text-decoration-none"
              >GreenScape<span class="text-white">.</span></a
            >
            <p class="text-white-50">
              Your trusted partner for creating and maintaining beautiful
              outdoor spaces. We are passionate about nature and design.
            </p>
            <div class="social-links d-flex mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4 class="text-white">Useful Links</h4>
            <ul>
              <li>
                <i class="bi bi-chevron-right me-2"></i> <a href="#">Home</a>
              </li>
              <li>
                <i class="bi bi-chevron-right me-2"></i>
                <a href="#about">About us</a>
              </li>
              <li>
                <i class="bi bi-chevron-right me-2"></i>
                <a href="#services">Services</a>
              </li>
              <li>
                <i class="bi bi-chevron-right me-2"></i>
                <a href="#">Terms of service</a>
              </li>
              <li>
                <i class="bi bi-chevron-right me-2"></i>
                <a href="#">Privacy policy</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4 class="text-white">Our Services</h4>
            <ul>
              <li>
                <i class="bi bi-chevron-right me-2"></i>
                <a href="#">Lawn Care</a>
              </li>
              <li>
                <i class="bi bi-chevron-right me-2"></i>
                <a href="#">Tree Services</a>
              </li>
              <li>
                <i class="bi bi-chevron-right me-2"></i>
                <a href="#">Landscape Design</a>
              </li>
              <li>
                <i class="bi bi-chevron-right me-2"></i>
                <a href="#">Hardscaping</a>
              </li>
              <li>
                <i class="bi bi-chevron-right me-2"></i>
                <a href="#">Irrigation</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4 class="text-white">Our Newsletter</h4>
            <p class="text-white-50">
              Subscribe to our newsletter for the latest updates, tips, and
              exclusive offers!
            </p>
            <form action="" method="post">
              <div class="input-group mb-3">
                <input
                  type="email"
                  name="email"
                  class="form-control"
                  placeholder="Your Email"
                  aria-label="Your Email"
                  aria-describedby="button-addon2"
                  required
                />
                <button
                  class="btn btn-primary btn-outline-secondary text-white"
                  type="button"
                  id="button-addon2"
                >
                  Subscribe
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="container-fluid copyright bg-dark text-white-50 p-3">
        <div class="text-center">
          &copy; Copyright <strong><span>GreenScape</span></strong
          >. All Rights Reserved
        </div>
        <div class="credits text-center">
          Designed by <a href="https://ignitercms.com/">Igniter CMS</a>
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
