<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Elite Auto Repair - Your Trusted Car Service</title>
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
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <!-- Site CSS -->
    <link rel="stylesheet" href="assets/css/site.css" />
  </head>
  <body
    class="d-flex flex-column min-vh-100"
    data-bs-spy="scroll"
    data-bs-target="#navbar"
  >
    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Header -->
    <header id="header" class="header fixed-top">
      <nav id="navbar" class="navbar navbar-expand-lg">
        <div
          class="container-fluid container-xl d-flex align-items-center justify-content-between"
        >
          <a href="index.html" class="logo d-flex align-items-center logo">
            <span class="d-none d-lg-block">Elite Auto Repair</span>
          </a>
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
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#hero"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#mechanics">Mechanics</a>
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
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="#gallery">Gallery</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#reviews">Reviews</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#booking">Book Now</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- End Header -->

    <main class="main">
      <!-- Hero Section -->
      <section id="hero" class="d-flex flex-column justify-content-center">
        <video
          autoplay
          loop
          muted
          playsinline
          poster="https://assets.aktools.net/image-stocks/auto-repair/auto-repair-1.jpg"
        >
          <source
            src="https://assets.aktools.net/image-stocks/auto-repair/auto-repair-2.mp4"
            type="video/mp4"
          />
          Your browser does not support the video tag.
        </video>
        <div class="hero-overlay"></div>
        <div class="container text-center">
          <h1 class="animate__animated animate__fadeInDown">
            Your Trusted Partner for Auto Care
          </h1>
          <p class="animate__animated animate__fadeInUp">
            Quality auto repair and maintenance services you can rely on.
          </p>
          <a
            href="#booking"
            class="btn-get-started animate__animated animate__zoomIn scrollto"
            >Book an Appointment</a
          >
        </div>
      </section>
      <!-- End Hero Section -->

      <!-- About Section -->
      <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>About Us</h2>
            <p>
              Learn more about Elite Auto Repair and our commitment to quality
              service.
            </p>
          </div>

          <div class="row gy-4">
            <div class="col-lg-6">
              <div class="card h-100">
                <div class="card-img">
                  <img
                    src="https://assets.aktools.net/image-stocks/auto-repair/auto-repair-2.jpg"
                    class="img-fluid"
                    alt="Auto Repair Shop"
                  />
                </div>
                <div class="card-body">
                  <h3>We're Passionate About Cars</h3>
                  <p>
                    At Elite Auto Repair, our team shares a deep passion for
                    automobiles. We believe in providing honest, transparent,
                    and high-quality service to keep your vehicle running
                    smoothly. From routine maintenance to complex repairs, we
                    treat every car with the care it deserves.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card h-100">
                <div class="card-img">
                  <img
                    src="https://assets.aktools.net/image-stocks/auto-repair/auto-repair-3.jpg"
                    class="img-fluid"
                    alt="Mechanic working on car"
                  />
                </div>
                <div class="card-body">
                  <h3>Our Commitment to Excellence</h3>
                  <p>
                    With years of experience and state-of-the-art equipment, our
                    certified technicians are dedicated to delivering
                    excellence. We constantly update our skills and knowledge to
                    stay ahead of automotive advancements, ensuring you receive
                    the best possible service for your modern vehicle.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- Services Section -->
      <section id="services" class="services">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Our Services</h2>
            <p>
              We offer a comprehensive range of auto repair and maintenance
              services.
            </p>
          </div>

          <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-gear"></i></div>
                <h4><a href="">Engine Diagnostics & Repair</a></h4>
                <p>
                  Advanced diagnostics to pinpoint engine issues and expert
                  repair services to get you back on the road.
                </p>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="icon-box">
                <div class="icon"><i class="bi bi-car-front"></i></div>
                <h4><a href="">Brake Service & Repair</a></h4>
                <p>
                  From brake pad replacement to fluid flush, we ensure your
                  brakes are in perfect working condition for your safety.
                </p>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="icon-box">
                <div class="icon"><i class="bi bi-paint-bucket"></i></div>
                <h4><a href="">Body Work & Paint</a></h4>
                <p>
                  Restore your vehicle's aesthetic with our professional body
                  and paint repair services, from minor dents to major
                  collision.
                </p>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="icon-box">
                <div class="icon"><i class="bi bi-water"></i></div>
                <h4><a href="">Oil Change & Fluid Checks</a></h4>
                <p>
                  Regular oil changes and fluid checks are crucial for your
                  vehicle's longevity and performance.
                </p>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <div class="icon-box">
                <div class="icon"><i class="bi bi-battery-charging"></i></div>
                <h4><a href="">Battery & Electrical</a></h4>
                <p>
                  Comprehensive battery checks, replacement, and electrical
                  system diagnostics and repair.
                </p>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <div class="icon-box">
                <div class="icon"><i class="bi bi-snow"></i></div>
                <h4><a href="">AC & Heating Repair</a></h4>
                <p>
                  Ensure your comfort with our expert AC and heating system
                  inspection, repair, and recharge services.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Services Section -->

      <!-- Mechanics Section -->
      <section id="mechanics" class="mechanics section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Our Expert Mechanics</h2>
            <p>
              Meet the skilled professionals who keep your car in top shape.
            </p>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <div class="pic">
                    <img
                      src="https://assets.aktools.net/image-stocks/auto-repair/mechanic-1.jpg"
                      class="img-fluid"
                      alt="Mechanic John Doe"
                    />
                  </div>
                </div>
                <div class="member-info">
                  <h4>John Smith</h4>
                  <span>Chief Mechanic</span>
                  <p>
                    With over 20 years of experience, John is our lead
                    diagnostician.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="200">
                <div class="member-img">
                  <div class="pic">
                    <img
                      src="https://assets.aktools.net/image-stocks/auto-repair/mechanic-2.jpg"
                      class="img-fluid"
                      alt="Mechanic Sarah Johnson"
                    />
                  </div>
                </div>
                <div class="member-info">
                  <h4>Sarah Johnson</h4>
                  <span>Engine Specialist</span>
                  <p>Sarah excels in engine rebuilds and performance tuning.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="300">
                <div class="member-img">
                  <div class="pic">
                    <img
                      src="https://assets.aktools.net/image-stocks/auto-repair/mechanic-3.jpg"
                      class="img-fluid"
                      alt="Mechanic David Lee"
                    />
                  </div>
                </div>
                <div class="member-info">
                  <h4>David Lee</h4>
                  <span>Body Shop Manager</span>
                  <p>
                    David ensures all body work is pristine and showroom-ready.
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="400">
                <div class="member-img">
                  <div class="pic">
                    <img
                      src="https://assets.aktools.net/image-stocks/auto-repair/mechanic-4.jpg"
                      class="img-fluid"
                      alt="Mechanic Emily White"
                    />
                  </div>
                </div>
                <div class="member-info">
                  <h4>Emily White</h4>
                  <span>Brake & Suspension Expert</span>
                  <p>
                    Emily is your go-to for precise brake and suspension
                    adjustments.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Mechanics Section -->

      <!-- Booking Section -->
      <section id="booking" class="booking">
        <div class="container" data-aos="fade-up">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="booking-form">
                <h3>Book Your Appointment</h3>
                <p>Schedule your service with our expert mechanics today.</p>
                <form action="#" method="post" role="form" class="row gy-4">
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
                  <div class="col-md-6 form-group">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email"
                      placeholder="Your Email"
                      required
                    />
                  </div>
                  <div class="col-md-6 form-group">
                    <input
                      type="text"
                      class="form-control"
                      name="phone"
                      id="phone"
                      placeholder="Your Phone"
                      required
                    />
                  </div>
                  <div class="col-md-6 form-group">
                    <input
                      type="text"
                      class="form-control"
                      name="car-model"
                      id="car-model"
                      placeholder="Car Make/Model"
                      required
                    />
                  </div>
                  <div class="col-md-6 form-group">
                    <input
                      type="date"
                      class="form-control"
                      placeholder="Appointment Date"
                      id="appointment_date"
                      name="appointment_date"
                      required
                    />
                  </div>
                  <div class="col-md-6 form-group">
                    <input
                      type="time"
                      class="form-control"
                      placeholder="Appointment Time"
                      id="appointment_time"
                      name="appointment_time"
                      min="08:00"
                      max="18:00"
                      required
                    />
                  </div>
                  <div class="col-md-12 form-group">
                    <textarea
                      class="form-control"
                      name="message"
                      rows="5"
                      placeholder="Describe the service you need..."
                      required
                    ></textarea>
                  </div>
                  <div class="text-center">
                    <button type="submit">Book Now</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Booking Section -->

      <!-- Reviews Section -->
      <section id="reviews" class="reviews section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Customer Reviews</h2>
            <p>
              Read what our satisfied customers have to say about our service.
            </p>
          </div>
          <div class="swiper testimonials-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="d-flex justify-content-center">
                    <img
                      src="https://assets.aktools.net/image-stocks/testimonials/testimonial-1.jpg"
                      class="testimonial-img"
                      alt="Customer Sarah H."
                    />
                  </div>
                  <h3>Sarah H.</h3>
                  <h4>Regular Client</h4>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    The team at Elite Auto Repair is fantastic! They are always
                    professional, honest, and get the job done right the first
                    time. I won't go anywhere else.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="d-flex justify-content-center">
                    <img
                      src="https://assets.aktools.net/image-stocks/testimonials/testimonial-2.jpg"
                      class="testimonial-img"
                      alt="Customer Michael B."
                    />
                  </div>
                  <h3>Michael B.</h3>
                  <h4>First-time Visitor</h4>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    I was so impressed with their quick service and fair
                    pricing. They diagnosed a tricky issue with my car and fixed
                    it perfectly. Highly recommend!
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="d-flex justify-content-center">
                    <img
                      src="https://assets.aktools.net/image-stocks/testimonials/testimonial-3.jpg"
                      class="testimonial-img"
                      alt="Customer Jessica L."
                    />
                  </div>
                  <h3>Jessica L.</h3>
                  <h4>Emergency Service</h4>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    My car broke down late at night, and they were a lifesaver.
                    The mechanic was so helpful and got me back on the road
                    safely. Truly a reliable team.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!-- End Reviews Section -->

      <!-- Gallery Section -->
      <section id="gallery" class="gallery">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Our Gallery</h2>
            <p>
              A glimpse into our workshop and some of the vehicles we've
              serviced.
            </p>
          </div>

          <div class="row g-3">
            <div class="col-lg-3 col-md-4 col-6">
              <div class="gallery-item">
                <img
                  src="https://assets.aktools.net/image-stocks/auto-repair/auto-repair-4.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="gallery-info">
                  <h4>Engine Bay Cleaning</h4>
                  <a
                    href="https://assets.aktools.net/image-stocks/auto-repair/auto-repair-4.jpg"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
              <div class="gallery-item">
                <img
                  src="https://assets.aktools.net/image-stocks/auto-repair/auto-repair-5.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="gallery-info">
                  <h4>Brake Service</h4>
                  <a
                    href="https://assets.aktools.net/image-stocks/auto-repair/auto-repair-5.jpg"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
              <div class="gallery-item">
                <img
                  src="https://assets.aktools.net/image-stocks/auto-repair/auto-repair-6.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="gallery-info">
                  <h4>Wheel Alignment</h4>
                  <a
                    href="https://assets.aktools.net/image-stocks/auto-repair/auto-repair-6.jpg"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
              <div class="gallery-item">
                <img
                  src="https://assets.aktools.net/image-stocks/auto-repair/auto-repair-7.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="gallery-info">
                  <h4>Diagnostic Check</h4>
                  <a
                    href="https://assets.aktools.net/image-stocks/auto-repair/auto-repair-7.jpg"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
              <div class="gallery-item">
                <img
                  src="https://assets.aktools.net/image-stocks/auto-repair/auto-repair-8.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="gallery-info">
                  <h4>Oil Change</h4>
                  <a
                    href="https://assets.aktools.net/image-stocks/auto-repair/auto-repair-8.jpg"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
              <div class="gallery-item">
                <img
                  src="https://assets.aktools.net/image-stocks/auto-repair/auto-repair-9.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="gallery-info">
                  <h4>Tire Rotation</h4>
                  <a
                    href="https://assets.aktools.net/image-stocks/auto-repair/auto-repair-9.jpg"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
              <div class="gallery-item">
                <img
                  src="https://assets.aktools.net/image-stocks/auto-repair/auto-repair-10.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="gallery-info">
                  <h4>Suspension Work</h4>
                  <a
                    href="https://assets.aktools.net/image-stocks/auto-repair/auto-repair-10.jpg"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
              <div class="gallery-item">
                <img
                  src="https://assets.aktools.net/image-stocks/auto-repair/auto-repair-11.jpg"
                  class="img-fluid"
                  alt=""
                />
                <div class="gallery-info">
                  <h4>Detailing</h4>
                  <a
                    href="https://assets.aktools.net/image-stocks/auto-repair/auto-repair-11.jpg"
                    class="glightbox preview-link"
                    ><i class="bi bi-zoom-in"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Gallery Section -->

      <!-- Contact Section -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Contact Us</h2>
            <p>
              Get in touch with us for any inquiries or to schedule a service.
            </p>
          </div>
          <div class="row gy-4">
            <div class="col-lg-6">
              <div class="row gy-4">
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Address</h3>
                    <p>123 Auto Repair Lane,<br />Springfield, IL 62704</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-telephone"></i>
                    <h3>Call Us</h3>
                    <p>+1 5589 55488 55<br />+1 6678 254445 41</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-envelope"></i>
                    <h3>Email Us</h3>
                    <p>
                      info@eliteautorepair.com<br />contact@eliteautorepair.com
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-box">
                    <i class="bi bi-clock"></i>
                    <h3>Opening Hours</h3>
                    <p>Mon - Fri: 9:00AM - 5:00PM<br />Sat: 9:00AM - 1:00PM</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <form
                action="forms/contact.php"
                method="post"
                role="form"
                class="php-email-form"
              >
                <div class="row gy-4">
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
                  <div class="col-md-6 form-group">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email"
                      placeholder="Your Email"
                      required
                    />
                  </div>
                  <div class="col-md-12 form-group">
                    <input
                      type="text"
                      class="form-control"
                      name="subject"
                      id="subject"
                      placeholder="Subject"
                      required
                    />
                  </div>
                  <div class="col-md-12 form-group">
                    <textarea
                      class="form-control"
                      name="message"
                      rows="5"
                      placeholder="Message"
                      required
                    ></textarea>
                  </div>
                  <div class="text-center">
                    <button type="submit">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- Footer -->
    <footer class="footer mt-auto">
      <div class="container">
        <div class="footer-top">
          <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
              <div class="footer-about">
                <a
                  href="index.html"
                  class="footer-logo d-inline-flex align-items-center"
                >
                  <img
                    src="https://placehold.co/200x60?text=Elite+Auto+Repair"
                    alt="AK THEMES Logo"
                  />
                </a>
                <p>
                  Your trusted partner for comprehensive IT solutions and
                  services. Empowering businesses through technology since 2010.
                </p>
                <div class="footer-social d-flex">
                  <a href="#" class="animate__animated animate__fadeIn"
                    ><i class="bi bi-twitter-x"></i
                  ></a>
                  <a
                    href="#"
                    class="animate__animated animate__fadeIn animate__delay-100ms"
                    ><i class="bi bi-facebook"></i
                  ></a>
                  <a
                    href="#"
                    class="animate__animated animate__fadeIn animate__delay-200ms"
                    ><i class="bi bi-instagram"></i
                  ></a>
                  <a
                    href="#"
                    class="animate__animated animate__fadeIn animate__delay-300ms"
                    ><i class="bi bi-linkedin"></i
                  ></a>
                </div>
              </div>
            </div>

            <div class="col-lg-2 col-md-6">
              <div class="footer-links">
                <h4>Quick Links</h4>
                <ul>
                  <li>
                    <i class="bi bi-chevron-right"></i
                    ><a href="index.html">Home</a>
                  </li>
                  <li>
                    <i class="bi bi-chevron-right"></i
                    ><a href="#about">About Us</a>
                  </li>
                  <li>
                    <i class="bi bi-chevron-right"></i
                    ><a href="#services">Services</a>
                  </li>
                  <li>
                    <i class="bi bi-chevron-right"></i
                    ><a href="#portfolio">Portfolio</a>
                  </li>
                  <li>
                    <i class="bi bi-chevron-right"></i><a href="#team">Team</a>
                  </li>
                  <li>
                    <i class="bi bi-chevron-right"></i
                    ><a href="#contact">Contact</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-lg-2 col-md-6">
              <div class="footer-links">
                <h4>Our Services</h4>
                <ul>
                  <li>
                    <i class="bi bi-chevron-right"></i
                    ><a href="#">Engine Diagnostics</a>
                  </li>
                  <li>
                    <i class="bi bi-chevron-right"></i
                    ><a href="#">Brake Service</a>
                  </li>
                  <li>
                    <i class="bi bi-chevron-right"></i><a href="#">Body Work</a>
                  </li>
                  <li>
                    <i class="bi bi-chevron-right"></i
                    ><a href="#">Oil Change</a>
                  </li>
                  <li>
                    <i class="bi bi-chevron-right"></i
                    ><a href="#">Battery & Electrical</a>
                  </li>
                  <li>
                    <i class="bi bi-chevron-right"></i
                    ><a href="#">AC & Heating Repair</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="footer-contact">
                <h4>Contact Info</h4>
                <p><i class="bi bi-geo-alt"></i> 123 Tech Park, Watford, UK</p>
                <p><i class="bi bi-telephone"></i> +44 20 1234 5678</p>
                <p><i class="bi bi-envelope"></i> info@AK THEMES.com</p>
              </div>

              <div class="footer-newsletter mt-4">
                <h4>Our Newsletter</h4>
                <p>Subscribe to our newsletter for the latest updates</p>
                <form id="newsletterForm">
                  <input
                    type="email"
                    name="email"
                    placeholder="Your Email"
                    required
                  />
                  <button type="submit"><i class="bi bi-send"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="copyright">
          &copy; Copyright <strong><span>AK THEMES</span></strong
          >. All Rights Reserved
        </div>
        <div class="credits">Designed by <a href="#">IgniterCMS</a></div>
      </div>
    </footer>
    <!-- End Footer -->

    <a
      href="#"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.1/js/glightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!-- Site JS -->
    <script src="assets/js/site.js"></script>
  </body>
</html>
