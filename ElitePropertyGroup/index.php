<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EliteProperty Group | Premium Real Estate Services</title>
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
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
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
    <div id="preloader">
      <div class="preloader-content">
        <div class="preloader-logo">EliteProperty<span>Group</span></div>
        <div class="preloader-spinner"></div>
      </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="#">EliteProperty<span>Group</span></a>
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
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNav"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#properties">Properties</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#agents">Agents</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#testimonials">Reviews</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="main">
      <!-- Updated Hero Slider Section -->
      <section class="hero-slider" id="home">
        <div class="swiper heroSwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide hero-slide">
              <img
                src="https://assets.aktools.net/image-stocks/contractor/real-estate-1.jpg"
                class="hero-bg"
                alt="Luxury Property"
              />
              <div class="hero-overlay"></div>
              <div class="container hero-content">
                <h1 class="animate-on-scroll">Find Your Dream Home</h1>
                <p class="animate-on-scroll" data-wow-delay="0.2s">
                  Explore luxury properties with our dedicated real estate
                  experts who guide you every step of the way.
                </p>
                <div class="hero-btns animate-on-scroll" data-wow-delay="0.4s">
                  <a href="#properties" class="btn btn-primary"
                    >Browse Properties</a
                  >
                  <a href="#contact" class="btn btn-outline-light"
                    >Schedule Consultation</a
                  >
                </div>
              </div>
            </div>
            <div class="swiper-slide hero-slide">
              <img
                src="https://assets.aktools.net/image-stocks/contractor/contractor-1.jpg"
                class="hero-bg"
                alt="Modern Architecture"
              />
              <div class="hero-overlay"></div>
              <div class="container hero-content">
                <h1 class="animate-on-scroll">Expert Property Management</h1>
                <p class="animate-on-scroll" data-wow-delay="0.2s">
                  Our professional team handles everything from tenant screening
                  to maintenance for hassle-free ownership.
                </p>
                <div class="hero-btns animate-on-scroll" data-wow-delay="0.4s">
                  <a href="#services" class="btn btn-primary">Learn More</a>
                  <a href="#contact" class="btn btn-outline-light"
                    >Get Started</a
                  >
                </div>
              </div>
            </div>
            <div class="swiper-slide hero-slide">
              <img
                src="https://assets.aktools.net/image-stocks/contractor/real-estate-3.jpg"
                class="hero-bg"
                alt="Waterfront Property"
              />
              <div class="hero-overlay"></div>
              <div class="container hero-content">
                <h1 class="animate-on-scroll">Invest in Your Future</h1>
                <p class="animate-on-scroll" data-wow-delay="0.2s">
                  Build wealth with strategic real estate investments tailored
                  to your financial goals.
                </p>
                <div class="hero-btns animate-on-scroll" data-wow-delay="0.4s">
                  <a href="#services" class="btn btn-primary"
                    >Investment Options</a
                  >
                  <a href="#contact" class="btn btn-outline-light"
                    >Talk to Expert</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
      </section>

      <!-- Property Search Section -->
      <section class="search-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <h3 class="text-center mb-4">Search Properties</h3>
              <form class="search-form">
                <div class="row">
                  <div class="col-md-3">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Location"
                    />
                  </div>
                  <div class="col-md-3">
                    <select class="form-control">
                      <option value="">Property Type</option>
                      <option value="house">House</option>
                      <option value="apartment">Apartment</option>
                      <option value="condo">Condo</option>
                      <option value="townhouse">Townhouse</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <select class="form-control">
                      <option value="">Bedrooms</option>
                      <option value="1">1+</option>
                      <option value="2">2+</option>
                      <option value="3">3+</option>
                      <option value="4">4+</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <select class="form-control">
                      <option value="">Price Range</option>
                      <option value="100k-300k">$100K - $300K</option>
                      <option value="300k-500k">$300K - $500K</option>
                      <option value="500k-1m">$500K - $1M</option>
                      <option value="1m+">$1M+</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">
                      Search
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <!-- Services Section -->
      <section class="section-padding bg-white" id="services">
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
              <h2 class="animate-on-scroll">Our Professional Services</h2>
              <p class="lead animate-on-scroll" data-wow-delay="0.2s">
                We provide comprehensive real estate solutions for buyers,
                sellers, and investors.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 mb-4">
              <div class="feature-card animate-on-scroll">
                <div class="feature-icon">
                  <i class="bi bi-house-door"></i>
                </div>
                <h3>Buyer Representation</h3>
                <p>
                  Our expert agents guide you through the home buying process,
                  from property search to closing, ensuring you find the perfect
                  home.
                </p>
                <a href="#" class="btn btn-link p-0"
                  >Learn More <i class="bi bi-arrow-right"></i
                ></a>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="feature-card animate-on-scroll" data-wow-delay="0.2s">
                <div class="feature-icon">
                  <i class="bi bi-cash"></i>
                </div>
                <h3>Seller Services</h3>
                <p>
                  Maximize your property's value with our professional
                  marketing, staging, and negotiation services to get the best
                  possible price.
                </p>
                <a href="#" class="btn btn-link p-0"
                  >Learn More <i class="bi bi-arrow-right"></i
                ></a>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="feature-card animate-on-scroll" data-wow-delay="0.4s">
                <div class="feature-icon">
                  <i class="bi bi-building"></i>
                </div>
                <h3>Property Management</h3>
                <p>
                  Our full-service property management handles tenant screening,
                  rent collection, maintenance, and more for stress-free
                  ownership.
                </p>
                <a href="#" class="btn btn-link p-0"
                  >Learn More <i class="bi bi-arrow-right"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Properties Section -->
      <section class="section-padding" id="properties">
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
              <h2 class="animate-on-scroll">Featured Listings</h2>
              <p class="lead animate-on-scroll" data-wow-delay="0.2s">
                Explore our premium properties currently available on the
                market.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="property-card animate-on-scroll">
                <div class="position-relative">
                  <img
                    src="https://assets.aktools.net/image-stocks/contractor/real-estate-4.jpg"
                    class="property-img"
                    alt="Modern Downtown Condo"
                  />
                  <div class="position-absolute top-0 end-0 p-3">
                    <span class="badge bg-success">New Listing</span>
                  </div>
                </div>
                <div class="property-details">
                  <div class="property-price">$875,000</div>
                  <h5>Modern Downtown Condo</h5>
                  <p class="property-address">456 City Center, New York, NY</p>
                  <div class="property-info">
                    <span><i class="bi bi-bed"></i> 2 Beds</span>
                    <span><i class="bi bi-bath"></i> 2 Baths</span>
                    <span><i class="bi bi-square"></i> 1,450 sqft</span>
                  </div>
                  <div class="property-tags">
                    <span class="property-tag">City View</span>
                    <span class="property-tag">Gym</span>
                    <span class="property-tag">Pool</span>
                  </div>
                  <a href="#" class="btn btn-primary w-100">View Details</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div
                class="property-card animate-on-scroll"
                data-wow-delay="0.2s"
              >
                <div class="position-relative">
                  <img
                    src="https://assets.aktools.net/image-stocks/contractor/contractor-2.jpg"
                    class="property-img"
                    alt="Suburban Family Home"
                  />
                  <div class="position-absolute top-0 end-0 p-3">
                    <span class="badge bg-primary">For Sale</span>
                  </div>
                </div>
                <div class="property-details">
                  <div class="property-price">$650,000</div>
                  <h5>Suburban Family Home</h5>
                  <p class="property-address">789 Maple Street, Austin, TX</p>
                  <div class="property-info">
                    <span><i class="bi bi-bed"></i> 4 Beds</span>
                    <span><i class="bi bi-bath"></i> 3 Baths</span>
                    <span><i class="bi bi-square"></i> 2,800 sqft</span>
                  </div>
                  <div class="property-tags">
                    <span class="property-tag">Garden</span>
                    <span class="property-tag">Garage</span>
                    <span class="property-tag">Renovated</span>
                  </div>
                  <a href="#" class="btn btn-primary w-100">View Details</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div
                class="property-card animate-on-scroll"
                data-wow-delay="0.4s"
              >
                <div class="position-relative">
                  <img
                    src="https://assets.aktools.net/image-stocks/contractor/contractor-3.jpg"
                    class="property-img"
                    alt="Luxury Waterfront Villa"
                  />
                  <div class="position-absolute top-0 end-0 p-3">
                    <span class="badge bg-warning text-dark"
                      >Price Reduced</span
                    >
                  </div>
                </div>
                <div class="property-details">
                  <div class="property-price">$2,450,000</div>
                  <h5>Luxury Waterfront Villa</h5>
                  <p class="property-address">123 Ocean Drive, Miami, FL</p>
                  <div class="property-info">
                    <span><i class="bi bi-bed"></i> 5 Beds</span>
                    <span><i class="bi bi-bath"></i> 4 Baths</span>
                    <span><i class="bi bi-square"></i> 4,200 sqft</span>
                  </div>
                  <div class="property-tags">
                    <span class="property-tag">Waterfront</span>
                    <span class="property-tag">Pool</span>
                    <span class="property-tag">Boat Dock</span>
                  </div>
                  <a href="#" class="btn btn-primary w-100">View Details</a>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center mt-4">
            <a href="#" class="btn btn-outline-primary">View All Properties</a>
          </div>
        </div>
      </section>

      <!-- Agents Section -->
      <section class="section-padding bg-light" id="agents">
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
              <h2 class="animate-on-scroll">Our Professional Team</h2>
              <p class="lead animate-on-scroll" data-wow-delay="0.2s">
                Meet our experienced real estate professionals dedicated to your
                success.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="agent-card animate-on-scroll">
                <img
                  src="https://assets.aktools.net/image-stocks/contractor/engineer-1.jpg"
                  class="agent-img"
                  alt="Sarah Johnson"
                />
                <div class="agent-info">
                  <span class="agent-specialty">Luxury Properties</span>
                  <h4>Sarah Johnson</h4>
                  <p class="text-muted">Senior Real Estate Agent</p>
                  <p>
                    With over 15 years of experience, Sarah specializes in
                    luxury properties and has helped hundreds of clients find
                    their dream homes.
                  </p>
                  <div class="social-links">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="agent-card animate-on-scroll" data-wow-delay="0.2s">
                <img
                  src="https://assets.aktools.net/image-stocks/contractor/engineer-2.jpg"
                  class="agent-img"
                  alt="Michael Chen"
                />
                <div class="agent-info">
                  <span class="agent-specialty">Investment Properties</span>
                  <h4>Michael Chen</h4>
                  <p class="text-muted">Property Investment Specialist</p>
                  <p>
                    Michael focuses on investment properties and commercial real
                    estate, helping clients build wealth through strategic
                    property acquisitions.
                  </p>
                  <div class="social-links">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="agent-card animate-on-scroll" data-wow-delay="0.4s">
                <img
                  src="https://assets.aktools.net/image-stocks/contractor/engineer-3.jpg"
                  class="agent-img"
                  alt="Emily Rodriguez"
                />
                <div class="agent-info">
                  <span class="agent-specialty">First-Time Buyers</span>
                  <h4>Emily Rodriguez</h4>
                  <p class="text-muted">First-Time Home Buyer Expert</p>
                  <p>
                    Emily specializes in helping first-time home buyers navigate
                    the complex real estate market with confidence and ease.
                  </p>
                  <div class="social-links">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Testimonials Section -->
      <section class="section-padding" id="testimonials">
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
              <h2 class="animate-on-scroll">Client Testimonials</h2>
              <p class="lead animate-on-scroll" data-wow-delay="0.2s">
                Hear what our satisfied clients have to say about their
                experience with us.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 mb-4">
              <div class="testimonial-card animate-on-scroll">
                <div class="testimonial-content">
                  <p>
                    "Sarah helped us find our dream home in just three weeks!
                    Her knowledge of the local market and negotiation skills
                    saved us thousands. We couldn't be happier!"
                  </p>
                </div>
                <div class="client-info">
                  <img
                    src="https://assets.aktools.net/image-stocks/testimonials/testimonial-1.jpg"
                    class="client-img"
                    alt="James & Lisa Thompson"
                  />
                  <div class="client-details">
                    <h5>James & Lisa Thompson</h5>
                    <p>Home Buyers</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <div
                class="testimonial-card animate-on-scroll"
                data-wow-delay="0.2s"
              >
                <div class="testimonial-content">
                  <p>
                    "Michael managed my rental properties for the past 5 years.
                    His attention to detail and proactive approach has ensured
                    consistent occupancy and minimal headaches. Highly
                    recommend!"
                  </p>
                </div>
                <div class="client-info">
                  <img
                    src="https://assets.aktools.net/image-stocks/testimonials/testimonial-2.jpg"
                    class="client-img"
                    alt="Robert Kim"
                  />
                  <div class="client-details">
                    <h5>Robert Kim</h5>
                    <p>Property Investor</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <div
                class="testimonial-card animate-on-scroll"
                data-wow-delay="0.4s"
              >
                <div class="testimonial-content">
                  <p>
                    "As first-time home buyers, we were nervous about the
                    process. Emily walked us through every step, answered all
                    our questions, and found us the perfect starter home within
                    our budget."
                  </p>
                </div>
                <div class="client-info">
                  <img
                    src="https://assets.aktools.net/image-stocks/testimonials/testimonial-3.jpg"
                    class="client-img"
                    alt="Amanda & David Wilson"
                  />
                  <div class="client-details">
                    <h5>Amanda & David Wilson</h5>
                    <p>First-Time Home Buyers</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- CTA Section -->
      <section class="section-padding cta-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center cta-content">
              <h2 class="animate-on-scroll">
                Ready to Start Your Real Estate Journey?
              </h2>
              <p class="animate-on-scroll" data-wow-delay="0.2s">
                Contact us today to schedule a consultation with one of our
                expert real estate professionals. We're here to help you every
                step of the way.
              </p>
              <a
                href="#contact"
                class="btn btn-light animate-on-scroll"
                data-wow-delay="0.4s"
                >Get in Touch</a
              >
            </div>
          </div>
        </div>
      </section>

      <!-- Contact Section -->
      <section class="section-padding" id="contact">
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
              <h2 class="animate-on-scroll">Contact Us</h2>
              <p class="lead animate-on-scroll" data-wow-delay="0.2s">
                Have questions or ready to start your real estate journey? Reach
                out to us today.
              </p>
            </div>
          </div>
          <div class="row align-items-stretch">
            <div class="col-lg-7 mb-4">
              <div class="contact-form animate-on-scroll">
                <form id="contactForm">
                  <div class="row">
                    <div class="col-md-6">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Your Name"
                        required
                      />
                    </div>
                    <div class="col-md-6">
                      <input
                        type="email"
                        class="form-control"
                        placeholder="Your Email"
                        required
                      />
                    </div>
                  </div>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Subject"
                  />
                  <textarea
                    class="form-control"
                    placeholder="Your Message"
                    required
                  ></textarea>
                  <button type="submit" class="btn btn-primary w-100">
                    Send Message
                  </button>
                </form>
              </div>
            </div>
            <div class="col-lg-5 mb-4">
              <div class="contact-info animate-on-scroll" data-wow-delay="0.2s">
                <h4>Contact Information</h4>
                <p>
                  Get in touch with us using the information below or fill out
                  the form and we'll get back to you as soon as possible.
                </p>

                <div class="contact-item">
                  <div class="contact-icon">
                    <i class="bi bi-geo-alt"></i>
                  </div>
                  <div>
                    <h6>Our Location</h6>
                    <p>
                      1234 Elite Property Lane, Suite 500<br />Los Angeles, CA
                      90210
                    </p>
                  </div>
                </div>

                <div class="contact-item">
                  <div class="contact-icon">
                    <i class="bi bi-telephone"></i>
                  </div>
                  <div>
                    <h6>Call Us</h6>
                    <p>(555) 123-4567<br />Mon-Fri, 9AM-6PM</p>
                  </div>
                </div>

                <div class="contact-item">
                  <div class="contact-icon">
                    <i class="bi bi-envelope"></i>
                  </div>
                  <div>
                    <h6>Email Us</h6>
                    <p>info@elitepropertygroup.com</p>
                  </div>
                </div>

                <div class="contact-item">
                  <div class="contact-icon">
                    <i class="bi bi-envelope"></i>
                  </div>
                  <div>
                    <h6>Working Hours</h6>
                    <p>
                      Monday - Friday: 8:00 AM - 5:00 PM<br />Saturday: 9:00 AM
                      - 1:00 PM<br />Sunday: Closed
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Map stays separate -->
            <div class="row mt-2">
              <div class="col-12">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.0199999999995!2d-122.41941568468194!3d37.77492977975959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809c5b5b5b5b%3A0x5b5b5b5b5b5b5b5b!2sLuxury%20District%2C%20CA!5e0!3m2!1sen!2sus!4v1600000000000!5m2!1sen!2sus"
                  width="100%"
                  height="300"
                  style="border: 0; border-radius: 10px"
                  frameborder="0"
                  allowfullscreen=""
                  aria-hidden="false"
                  tabindex="0"
                ></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer class="mt-auto">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-4">
            <h3 class="footer-logo">EliteProperty<span>Group</span></h3>
            <p>
              Your trusted partner in real estate. With decades of experience
              and a commitment to excellence, we make your property journey
              seamless and successful.
            </p>
            <div class="social-footer">
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-twitter"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
              <a href="#"><i class="bi bi-youtube"></i></a>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 mb-4">
            <div class="footer-links">
              <h5>Quick Links</h5>
              <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#properties">Properties</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#agents">Agents</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mb-4">
            <div class="footer-links">
              <h5>Our Services</h5>
              <ul>
                <li><a href="#">Buyer Representation</a></li>
                <li><a href="#">Seller Services</a></li>
                <li><a href="#">Property Management</a></li>
                <li><a href="#">Investment Consulting</a></li>
                <li><a href="#">Market Analysis</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mb-4">
            <div class="footer-links">
              <h5>Newsletter</h5>
              <p>
                Subscribe to our newsletter for the latest property listings and
                real estate tips.
              </p>
              <div class="input-group newsletter-group">
                <input
                  type="email"
                  class="form-control"
                  placeholder="Your Email"
                />
                <button class="btn btn-primary" type="button">Subscribe</button>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom">
          <p>
            &copy; 2023 EliteProperty Group. All Rights Reserved. | Privacy
            Policy | Terms of Service
          </p>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button -->
    <a href="#" class="scroll-top">
      <i class="bi bi-arrow-up"></i>
    </a>

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
