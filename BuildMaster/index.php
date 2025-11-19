<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BuildMaster | Professional Construction Services</title>
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
  <body
    class="d-flex flex-column min-vh-100"
    data-bs-spy="scroll"
    data-bs-target="#navbar"
  >
    <!-- Preloader -->
    <div id="preloader">
      <div class="preloader-content">
        <div class="preloader-logo">Build<span>Master</span></div>
        <div class="preloader-spinner"></div>
      </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="#">Build<span>Master</span></span></a>
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
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projects">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="main">
      <!-- Hero Slider Section -->
      <section class="hero-slider" id="home">
        <div class="swiper heroSwiper">
          <div class="swiper-wrapper">
            <div
              class="swiper-slide hero-slide"
              style="
                background-image: url('https://assets.aktools.net/image-stocks/contractor/contractor-1.jpg');
              "
            >
              <div class="hero-overlay"></div>
              <div class="container hero-content">
                <h1>Professional Construction Services</h1>
                <p>
                  From residential renovations to commercial builds, we deliver
                  quality craftsmanship with precision and expertise.
                </p>
                <div class="hero-btns">
                  <a href="#services" class="btn btn-primary">Our Services</a>
                  <a href="#contact" class="btn btn-outline-light"
                    >Get Free Quote</a
                  >
                </div>
              </div>
            </div>
            <div
              class="swiper-slide hero-slide"
              style="
                background-image: url('https://assets.aktools.net/image-stocks/contractor/contractor-2.jpg');
              "
            >
              <div class="hero-overlay"></div>
              <div class="container hero-content">
                <h1>Expert Roofing & Renovation</h1>
                <p>
                  Our specialized teams handle roofing, interior renovations,
                  and exterior improvements with unmatched quality and attention
                  to detail.
                </p>
                <div class="hero-btns">
                  <a href="#services" class="btn btn-primary">View Services</a>
                  <a href="#contact" class="btn btn-outline-light"
                    >Schedule Consultation</a
                  >
                </div>
              </div>
            </div>
            <div
              class="swiper-slide hero-slide"
              style="
                background-image: url('https://assets.aktools.net/image-stocks/contractor/contractor-3.jpg');
              "
            >
              <div class="hero-overlay"></div>
              <div class="container hero-content">
                <h1>Commercial Construction Experts</h1>
                <p>
                  Trust our experienced team for your commercial construction
                  projects, from office buildings to retail spaces and
                  industrial facilities.
                </p>
                <div class="hero-btns">
                  <a href="#projects" class="btn btn-primary">Our Projects</a>
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

      <!-- Services Section -->
      <section class="services-section" id="services">
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
              <h2>Our Construction Services</h2>
              <p class="lead">
                We offer comprehensive construction services for residential and
                commercial clients.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="service-card">
                <div class="service-icon">
                  <i class="bi bi-house"></i>
                </div>
                <h3>Residential Construction</h3>
                <p>
                  From custom home builds to renovations and additions, we
                  create living spaces that exceed your expectations.
                </p>
                <a href="#" class="btn btn-link p-0"
                  >Learn More <i class="bi bi-arrow-right"></i
                ></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="service-card">
                <div class="service-icon">
                  <i class="bi bi-building"></i>
                </div>
                <h3>Commercial Construction</h3>
                <p>
                  We handle office buildings, retail spaces, restaurants, and
                  industrial facilities with professional expertise.
                </p>
                <a href="#" class="btn btn-link p-0"
                  >Learn More <i class="bi bi-arrow-right"></i
                ></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="service-card">
                <div class="service-icon">
                  <i class="bi bi-cloud-rain"></i>
                </div>
                <h3>Roofing Services</h3>
                <p>
                  Installation, repair, and replacement of all types of roofing
                  systems with premium materials and expert craftsmanship.
                </p>
                <a href="#" class="btn btn-link p-0"
                  >Learn More <i class="bi bi-arrow-right"></i
                ></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="service-card">
                <div class="service-icon">
                  <i class="bi bi-palette"></i>
                </div>
                <h3>Interior Renovation</h3>
                <p>
                  Kitchen and bathroom remodels, flooring, painting, and custom
                  finishes to transform your interior spaces.
                </p>
                <a href="#" class="btn btn-link p-0"
                  >Learn More <i class="bi bi-arrow-right"></i
                ></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="service-card">
                <div class="service-icon">
                  <i class="bi bi-brush"></i>
                </div>
                <h3>Exterior Improvement</h3>
                <p>
                  Siding, windows, doors, decks, patios, and landscaping to
                  enhance your property's curb appeal and value.
                </p>
                <a href="#" class="btn btn-link p-0"
                  >Learn More <i class="bi bi-arrow-right"></i
                ></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="service-card">
                <div class="service-icon">
                  <i class="bi bi-tools"></i>
                </div>
                <h3>Maintenance & Repair</h3>
                <p>
                  Regular maintenance and emergency repairs to keep your
                  property in top condition year-round.
                </p>
                <a href="#" class="btn btn-link p-0"
                  >Learn More <i class="bi bi-arrow-right"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- About Section -->
      <section class="section-padding" id="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-4">
              <div class="about-section">
                <img
                  src="https://assets.aktools.net/image-stocks/contractor/contractor-4.jpg"
                  class="about-img"
                  alt="Our Team at Work"
                />
              </div>
            </div>
            
            <div class="col-lg-6 mb-4">
              <div class="about-section">
                <div class="about-content">
                  <h2>About BuildMaster</h2>
                  <p class="lead">
                    With over 25 years of experience in the construction
                    industry, we've built a reputation for excellence,
                    reliability, and customer satisfaction.
                  </p>

                  <div class="stats-container">
                    <div class="stat-item">
                      <div class="stat-number" id="projectsCount">500+</div>
                      <div class="stat-label">Projects Completed</div>
                    </div>
                    <div class="stat-item">
                      <div class="stat-number" id="clientsCount">350+</div>
                      <div class="stat-label">Happy Clients</div>
                    </div>
                    <div class="stat-item">
                      <div class="stat-number" id="experienceCount">25+</div>
                      <div class="stat-label">Years Experience</div>
                    </div>
                    <div class="stat-item">
                      <div class="stat-number" id="awardsCount">25</div>
                      <div class="stat-label">Industry Awards</div>
                    </div>
                  </div>

                  <p>
                    Whether you're planning a small renovation or a large-scale
                    construction project, our team has the expertise and
                    resources to bring your vision to life.
                  </p>
                  <a href="#contact" class="btn btn-primary"
                    >Contact Us Today</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Process Section -->
      <section class="section-padding bg-light">
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
              <h2>Our Construction Process</h2>
              <p class="lead">
                We follow a proven process to ensure your project is completed
                on time, within budget, and to your complete satisfaction.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="process-step">
                <div class="process-line"></div>
                <div class="step-number">1</div>
                <h4 class="step-title">Consultation</h4>
                <p class="step-description">
                  We meet to discuss your project goals, budget, and timeline to
                  develop a customized plan.
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="process-step">
                <div class="process-line"></div>
                <div class="step-number">2</div>
                <h4 class="step-title">Design & Planning</h4>
                <p class="step-description">
                  Our team creates detailed plans and 3D renderings to visualize
                  your project before construction begins.
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="process-step">
                <div class="process-line"></div>
                <div class="step-number">3</div>
                <h4 class="step-title">Permitting</h4>
                <p class="step-description">
                  We handle all necessary permits and approvals to ensure your
                  project complies with local regulations.
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="process-step">
                <div class="process-line"></div>
                <div class="step-number">4</div>
                <h4 class="step-title">Construction</h4>
                <p class="step-description">
                  Our skilled craftsmen execute the project with precision,
                  quality materials, and regular progress updates.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Projects Section -->
      <section class="section-padding" id="projects">
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
              <h2>Our Recent Projects</h2>
              <p class="lead">
                Take a look at some of our recently completed construction
                projects.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-3">
              <div class="project-card">
                <img
                  src="https://assets.aktools.net/image-stocks/contractor/contractor-5.jpg"
                  class="project-img"
                  alt="Modern Home Exterior"
                />
                <div class="project-details">
                  <span class="project-category">Residential</span>
                  <h4 class="project-title">Modern Family Home</h4>
                  <p class="project-description">
                    Complete construction of a 4,500 sqft modern family home
                    with custom finishes and energy-efficient features.
                  </p>
                  <a href="#" class="btn btn-outline-primary">View Project</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
              <div class="project-card">
                <img
                  src="https://assets.aktools.net/image-stocks/contractor/contractor-6.jpg"
                  class="project-img"
                  alt="Commercial Office Building"
                />
                <div class="project-details">
                  <span class="project-category">Commercial</span>
                  <h4 class="project-title">Downtown Office Building</h4>
                  <p class="project-description">
                    Construction of a 5-story office building with modern
                    amenities and sustainable design elements.
                  </p>
                  <a href="#" class="btn btn-outline-primary">View Project</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
              <div class="project-card">
                <img
                  src="https://assets.aktools.net/image-stocks/contractor/contractor-7.jpg"
                  class="project-img"
                  alt="Kitchen Renovation"
                />
                <div class="project-details">
                  <span class="project-category">Renovation</span>
                  <h4 class="project-title">Luxury Kitchen Remodel</h4>
                  <p class="project-description">
                    Complete renovation of a gourmet kitchen with custom
                    cabinetry, premium appliances, and quartz countertops.
                  </p>
                  <a href="#" class="btn btn-outline-primary">View Project</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
              <div class="project-card">
                <img
                  src="https://assets.aktools.net/image-stocks/contractor/contractor-8.jpg"
                  class="project-img"
                  alt="Roof Replacement"
                />
                <div class="project-details">
                  <span class="project-category">Roofing</span>
                  <h4 class="project-title">Commercial Roof Replacement</h4>
                  <p class="project-description">
                    Replacement of a 25,000 sqft commercial roof with premium
                    materials and enhanced insulation.
                  </p>
                  <a href="#" class="btn btn-outline-primary">View Project</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
              <div class="project-card">
                <img
                  src="https://assets.aktools.net/image-stocks/contractor/contractor-9.jpg"
                  class="project-img"
                  alt="Restaurant Interior"
                />
                <div class="project-details">
                  <span class="project-category">Commercial</span>
                  <h4 class="project-title">Upscale Restaurant</h4>
                  <p class="project-description">
                    Complete build-out of a 3,200 sqft upscale restaurant with
                    custom lighting, bar, and dining areas.
                  </p>
                  <a href="#" class="btn btn-outline-primary">View Project</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
              <div class="project-card">
                <img
                  src="https://assets.aktools.net/image-stocks/contractor/real-estate-1.jpg"
                  class="project-img"
                  alt="Bathroom Renovation"
                />
                <div class="project-details">
                  <span class="project-category">Renovation</span>
                  <h4 class="project-title">Spa Bathroom</h4>
                  <p class="project-description">
                    Luxury bathroom renovation featuring custom tile work,
                    freestanding tub, and smart technology.
                  </p>
                  <a href="#" class="btn btn-outline-primary">View Project</a>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center mt-4">
            <a href="#" class="btn btn-primary">View All Projects</a>
          </div>
        </div>
      </section>

      <!-- Testimonials Section -->
      <section class="section-padding" id="testimonials">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="testimonial-section">
                <div class="testimonial-content">
                  <div class="row justify-content-center mb-5">
                    <div class="col-lg-8 text-center">
                      <h2>Client Testimonials</h2>
                      <p class="lead">
                        Hear what our satisfied clients have to say about
                        working with us.
                      </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 mb-4">
                      <div class="testimonial-card">
                        <div class="quote-icon">
                          <i class="bi bi-quote"></i>
                        </div>
                        <p>
                          "BuildMaster transformed our outdated home
                          into a modern masterpiece. Their attention to detail
                          and commitment to quality exceeded our expectations.
                          The project was completed on time and within budget!"
                        </p>
                        <div class="client-info">
                          <img
                            src="https://assets.aktools.net/image-stocks/testimonials/testimonial-2.jpg"
                            class="client-img"
                            alt="Sarah & Michael Johnson"
                          />
                          <div class="client-details">
                            <h5>Sarah & Michael Johnson</h5>
                            <p>Homeowners</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                      <div class="testimonial-card">
                        <div class="quote-icon">
                          <i class="bi bi-quote"></i>
                        </div>
                        <p>
                          "We hired BuildMaster for our commercial office
                          building, and they delivered exceptional results.
                          Their team was professional, responsive, and solved
                          problems before they became issues. I highly recommend
                          them for any construction project."
                        </p>
                        <div class="client-info">
                          <img
                            src="https://assets.aktools.net/image-stocks/testimonials/testimonial-1.jpg"
                            class="client-img"
                            alt="Robert Chen"
                          />
                          <div class="client-details">
                            <h5>Robert Chen</h5>
                            <p>Business Owner</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                      <div class="testimonial-card">
                        <div class="quote-icon">
                          <i class="bi bi-quote"></i>
                        </div>
                        <p>
                          "After a storm damaged our roof, BuildMaster responded
                          immediately and completed the repair with top-quality
                          materials. Their roofing team is the best in the
                          business - professional, efficient, and thorough. Five
                          stars!"
                        </p>
                        <div class="client-info">
                          <img
                            src="https://assets.aktools.net/image-stocks/testimonials/testimonial-4.jpg"
                            class="client-img"
                            alt="Jennifer Rodriguez"
                          />
                          <div class="client-details">
                            <h5>Jennifer Rodriguez</h5>
                            <p>Property Manager</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Team Section -->
      <section class="section-padding bg-light" id="team">
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
              <h2>Our Expert Team</h2>
              <p class="lead">
                Meet the skilled professionals behind our successful
                construction projects.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="team-member">
                <img
                  src="https://assets.aktools.net/image-stocks/contractor/engineer-1.jpg"
                  class="member-img"
                  alt="David Thompson"
                />
                <div class="member-info">
                  <h4>David Thompson</h4>
                  <span class="member-position">Project Manager</span>
                  <p>
                    With 15+ years of experience, David oversees all
                    construction projects ensuring quality, timeline, and budget
                    adherence.
                  </p>
                  <div class="social-links">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="team-member">
                <img
                  src="https://assets.aktools.net/image-stocks/contractor/engineer-2.jpg"
                  class="member-img"
                  alt="Maria Garcia"
                />
                <div class="member-info">
                  <h4>Maria Garcia</h4>
                  <span class="member-position">Lead Architect</span>
                  <p>
                    Maria brings innovative design solutions to every project,
                    combining aesthetics with functionality and sustainability.
                  </p>
                  <div class="social-links">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="team-member">
                <img
                  src="https://assets.aktools.net/image-stocks/contractor/engineer-3.jpg"
                  class="member-img"
                  alt="James Wilson"
                />
                <div class="member-info">
                  <h4>James Wilson</h4>
                  <span class="member-position">Construction Supervisor</span>
                  <p>
                    James manages our on-site crews with expertise in all
                    aspects of construction, from foundation to finish work.
                  </p>
                  <div class="social-links">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="team-member">
                <img
                  src="https://assets.aktools.net/image-stocks/contractor/engineer-4.jpg"
                  class="member-img"
                  alt="Marcus Penn"
                />
                <div class="member-info">
                  <h4>Marcus Penn</h4>
                  <span class="member-position">Client Relations</span>
                  <p>
                    Marcus ensures seamless communication between our clients and
                    construction teams, making the process stress-free.
                  </p>
                  <div class="social-links">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Equipment Section -->
      <section class="section-padding">
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
              <h2>Our Professional Equipment</h2>
              <p class="lead">
                We use state-of-the-art equipment and tools to ensure precision
                and efficiency on every project.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-10 mx-auto">
              <div class="equipment-section">
                <div class="row">
                  <div class="col-lg-3 col-md-6 mb-4">
                    <div class="equipment-item">
                      <div class="equipment-icon">
                        <i class="bi bi-hammer"></i>
                      </div>
                      <h4>Power Tools</h4>
                      <p>
                        Professional-grade power tools for precision cutting,
                        drilling, and fastening.
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 mb-4">
                    <div class="equipment-item">
                      <div class="equipment-icon">
                        <i class="bi bi-cone"></i>
                      </div>
                      <h4>Safety Equipment</h4>
                      <p>
                        Comprehensive safety gear to protect our team and your
                        property during construction.
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 mb-4">
                    <div class="equipment-item">
                      <div class="equipment-icon">
                        <i class="bi bi-rulers"></i>
                      </div>
                      <h4>Measuring Tools</h4>
                      <p>
                        Advanced measuring and leveling equipment for perfect
                        alignment and dimensions.
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 mb-4">
                    <div class="equipment-item">
                      <div class="equipment-icon">
                        <i class="bi bi-truck"></i>
                      </div>
                      <h4>Heavy Machinery</h4>
                      <p>
                        Excavators, cranes, and other heavy equipment for
                        large-scale construction projects.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- CTA Section -->
      <section class="section-padding">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="cta-section">
                <div class="cta-content">
                  <h2>Ready to Start Your Construction Project?</h2>
                  <p>
                    Whether you're planning a home renovation, commercial build,
                    or need roofing services, our team is ready to bring your
                    vision to life. Contact us today for a free consultation and
                    quote.
                  </p>
                  <a href="#contact" class="btn btn-light">Get Free Quote</a>
                </div>
              </div>
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
            <h3 class="footer-logo">Build<span>Master</span></h3>
            <p>
              Professional construction services for residential and commercial
              clients. Quality craftsmanship, on-time completion, and customer
              satisfaction guaranteed.
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
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mb-4">
            <div class="footer-links">
              <h5>Our Services</h5>
              <ul>
                <li><a href="#">Residential Construction</a></li>
                <li><a href="#">Commercial Construction</a></li>
                <li><a href="#">Roofing Services</a></li>
                <li><a href="#">Interior Renovation</a></li>
                <li><a href="#">Exterior Improvement</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mb-4">
            <div class="footer-links">
              <h5>Newsletter</h5>
              <p>
                Subscribe to our newsletter for construction tips, project
                showcases, and special offers.
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
            &copy; 2023 BuildMaster. All Rights Reserved. | Privacy Policy |
            Terms of Service
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
