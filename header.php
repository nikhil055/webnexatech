<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="<?php echo BASE_URL; ?>/assets/images/logo/logo.jpg">
    <!-- bootstrap cdn............................................. -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome cnd................................................. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.3.0/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.3.0/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.3.0/css/sharp-solid.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- aos cdn ...........................................................-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- custom cs........................................................... -->
    <link href="<?php echo BASE_URL; ?>/assets/css/style.css" rel="stylesheet"> <!-- Ensure the path is correct -->

    <!-- custom owl caruosel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

</head>

<body>

    <section class="topbar ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="top-left text-start">
                        <ul>
                            <li>  
                                   <a href="tel:+91 9910893885"><i class="fa-solid fa-headset"></i>+91 9910893885</a>
                                </li>
                              <li > 
                                 <a style="border: none;" href="Mailto:info@webnexatechnologies.com"><i class="fa-solid fa-envelope"></i>info@webnexatechnologies.com</a>
                            
                                </li>
                         
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="top-right text-end">
                        
                        <ul>
                            <li class="dropdown"><a style="border: none;" class="dropbtn" href="#">Help Center<i class="fa-solid fa-angle-down"></i></a> 
                                <div class="dropdown-content  text-start">
                                <a href="tel:+91 9910893885"> <i class="fa-solid fa-headset"></i>Call</a>
                                <a href="https://wa.me/+91 9910893885" target="_blank"> <i class="fa-brands fa-whatsapp"></i>WhatsApp</a>
                            </div></li>
                            <li><a href="<?php echo BASE_URL; ?>/policy.php">Our Policy</a></li>
                            <li><a href="<?php echo BASE_URL; ?>/about.php">About Us</a></li>
                            
                            
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <nav class="navbar navbar-01 navbar-expand-lg navbar-dark fixed-top head-lap">
      <div class="container">
        <a class="navbar-brand" href="<?php echo BASE_URL; ?>/index.php">
          <img src="<?php echo BASE_URL; ?>/assets/images/logo-web/logo.jpg" width="100%" alt=" logo"></a>
  
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
         <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="<?php echo BASE_URL; ?>/index.php">Home</a>
            </li>
         
            <li class="nav-item  front dropdown">
              <a class="nav-link dropdown-toggle" href="<?php echo BASE_URL; ?>/about.php" data-bs-toggle="dropdown">About</a>
              <ul class="dropdown-menu abbbtt">
                <li class="dropdown-item "> <a href="<?php echo BASE_URL; ?>/leadership.php"><i class="fa-solid fa-circle-caret-right"></i>Leadership</a> </li>
                <li class="dropdown-item "> <a href="<?php echo BASE_URL; ?>/team.php"><i class="fa-solid fa-circle-caret-right"></i>Team</a> </li>
                <li class="dropdown-item "> <a href="<?php echo BASE_URL; ?>/media.php"><i class="fa-solid fa-circle-caret-right"></i>Media</a> </li>
                <li class="dropdown-item "> <a href="<?php echo BASE_URL; ?>/future.php"><i class="fa-solid fa-circle-caret-right"></i>Future</a> </li>
                <li class="dropdown-item "> <a href="<?php echo BASE_URL; ?>/gallery.php"><i class="fa-solid fa-circle-caret-right"></i>Gallery</a> </li>
              </ul>
             </li>
            <li class="nav-item  front dropdown">
              <a class="nav-link dropdown-toggle" href="<?php echo BASE_URL; ?>/services.php" data-bs-toggle="dropdown"> Services </a>
              <ul class="dropdown-menu abbbt">
               <div class="container">
                
                <div class="row">
  
                  <div class="col" id="side-line">
                    
                    <h6> <div class="head-icon">
                      <img src="<?php echo BASE_URL; ?>/assets/images/header-icon/seo.png" width="100%" alt="">
                    </div><a href="<?php echo BASE_URL; ?>seo/seo-services.php"> SEO SERVICES</a></h6>
                    <li class="dropdown-item"> <a href="<?php echo BASE_URL; ?>seo/technical-seo-audit.php"><i class="fa-solid fa-circle-caret-right"></i>Technical SEO Audit</a> </li>
                    <li class="dropdown-item"> <a href="<?php echo BASE_URL; ?>seo/local-seo.php"><i class="fa-solid fa-circle-caret-right"></i>Local SEO</a> </li>
                    <li class="dropdown-item"> <a href="<?php echo BASE_URL; ?>seo/e-commerce-seo.php"><i class="fa-solid fa-circle-caret-right"></i>E-Commerce SEO</a> </li>
                    <li class="dropdown-item"> <a href="<?php echo BASE_URL; ?>seo/youtube-seo.php"><i class="fa-solid fa-circle-caret-right"></i>YouTube SEO</a> </li>
                  
                  </div>
                     
                  <div class="col" id="side-line">
                    
                    <h6> <div class="head-icon">
                      <img src="<?php echo BASE_URL; ?>/assets/images/header-icon/Creative.png" width="100%" alt="">
                    </div><a href="<?php echo BASE_URL; ?>creative/creative-services.php">Creative </a></h6>
                    <li class="dropdown-item"> <a href="<?php echo BASE_URL; ?>creative/creative-strategy.php"><i class="fa-solid fa-circle-caret-right"></i>Creative Strategy</a> </li>
                    <li class="dropdown-item"> <a href="<?php echo BASE_URL; ?>creative/communication.php"><i class="fa-solid fa-circle-caret-right"></i>Communication</a> </li>
                    <li class="dropdown-item"> <a href="<?php echo BASE_URL; ?>creative/branding.php"><i class="fa-solid fa-circle-caret-right"></i>Branding</a> </li>
                    <li class="dropdown-item"> <a href="<?php echo BASE_URL; ?>creative/production.php"><i class="fa-solid fa-circle-caret-right"></i>Production</a> </li>
                    <li class="dropdown-item"> <a href="<?php echo BASE_URL; ?>creative/graphics-motion.php"><i class="fa-solid fa-circle-caret-right"></i>Graphics & Motion</a> </li>
                    <li class="dropdown-item"> <a href="<?php echo BASE_URL; ?>creative/web-design.php"><i class="fa-solid fa-circle-caret-right"></i>Web Design</a> </li>
                    <li class="dropdown-item"> <a href="<?php echo BASE_URL; ?>creative/photoshoot.php"><i class="fa-solid fa-circle-caret-right"></i>Photoshoot</a> </li>
                   
                  </div>
                  <div class="col" id="side-line">
                    <h6> <div class="head-icon">
                      <img src="<?php echo BASE_URL; ?>/assets/images/header-icon/media.png" width="100%" alt="">
                    </div><a href="<?php echo BASE_URL; ?>paid-media/paid-media-services.php">Paid Media</a></h6>
                    <li class="dropdown-item"> <a href="<?php echo BASE_URL; ?>paid-media/media-strategy-planning.php"><i class="fa-solid fa-circle-caret-right"></i>Media Strategy & Planning</a> </li>
                    <li class="dropdown-item"> <a href="<?php echo BASE_URL; ?>paid-media/search-ads.php"><i class="fa-solid fa-circle-caret-right"></i>Search Ads</a> </li>
                    <li class="dropdown-item"> <a href="<?php echo BASE_URL; ?>paid-media/social-ads.php"><i class="fa-solid fa-circle-caret-right"></i>Social Ads </a> </li>
                    <li class="dropdown-item"> <a href="<?php echo BASE_URL; ?>paid-media/programmatic-display-ads.php"><i class="fa-solid fa-circle-caret-right"></i>Programmatic & Display Ads</a> </li>
                    <li class="dropdown-item"> <a href="<?php echo BASE_URL; ?>paid-media/ooh-advertising.php"><i class="fa-solid fa-circle-caret-right"></i>OOH Advertising</a> </li>
                    <li class="dropdown-item"> <a href="<?php echo BASE_URL; ?>paid-media/ott-ads.php"><i class="fa-solid fa-circle-caret-right"></i>OTT Ads</a> </li>
                   
                  </div>
             
                
                  <div class="col" id="side-line">
                    
                    <h6> <div class="head-icon">
                      <img src="<?php echo BASE_URL; ?>/assets/images/header-icon/Content.png" width="100%" alt="">
                    </div><a href="<?php echo BASE_URL; ?>content/content-services.php"> Content</a></h6>
                    <li class="dropdown-item"> <a href="<?php echo BASE_URL; ?>content/content-writing.php"><i class="fa-solid fa-circle-caret-right"></i>Content Writing</a> </li>
                    <li class="dropdown-item"> <a href="<?php echo BASE_URL; ?>content/content-marketing.php"><i class="fa-solid fa-circle-caret-right"></i>Content Marketing</a> </li>
                    <li class="dropdown-item"> <a href="<?php echo BASE_URL; ?>content/technical-writing.php"><i class="fa-solid fa-circle-caret-right"></i>Technical Writing</a> </li>
                   
                  </div>
                
                  <div class="col" id="side-line">
                    
                    <h6> <div class="head-icon">
                      <img src="<?php echo BASE_URL; ?>/assets/images/header-icon/Untitled-1.png" width="100%" alt="">
                    </div><a href="<?php echo BASE_URL; ?>technology/technology-services.php">Technology</a></h6>
                    <li class="dropdown-item"> <a href="<?php echo BASE_URL; ?>technology/website-development.php"><i class="fa-solid fa-circle-caret-right"></i>Website Development</a> </li>
                    <li class="dropdown-item"> <a href="<?php echo BASE_URL; ?>technology/software-development.php"><i class="fa-solid fa-circle-caret-right"></i>Software Development</a> </li>
                    <li class="dropdown-item"> <a href="<?php echo BASE_URL; ?>technology/mobile-apps.php"><i class="fa-solid fa-circle-caret-right"></i>Mobile Apps</a> </li>
                  </div>
                
  
                </div>

               </div>
              </ul>
            </li>
            <li class="nav-item  front dropdown">
              <a class="nav-link dropdown-toggle" href="<?php echo BASE_URL; ?>solutions.php" data-bs-toggle="dropdown">Solutions</a>
              <ul class="dropdown-menu abbbttt">
                <div class="row">
                  <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab-solutions" role="tablist" aria-orientation="vertical">
                      <button class="nav-link active" id="v-pills-ecommerce-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ecommerce" type="button" role="tab" aria-controls="v-pills-ecommerce" aria-selected="true">ECommerce</button>
                      <button class="nav-link" id="v-pills-healthcare-tab" data-bs-toggle="pill" data-bs-target="#v-pills-healthcare" type="button" role="tab" aria-controls="v-pills-healthcare" aria-selected="false">Healthcare</button>
                      <button class="nav-link" id="v-pills-jobportal-tab" data-bs-toggle="pill" data-bs-target="#v-pills-jobportal" type="button" role="tab" aria-controls="v-pills-jobportal" aria-selected="false">Job Portal</button>
                      <button class="nav-link" id="v-pills-carrental-tab" data-bs-toggle="pill" data-bs-target="#v-pills-carrental" type="button" role="tab" aria-controls="v-pills-carrental" aria-selected="false">Car Rental</button>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent-solutions">
                      <!-- E-commerce Solutions Tab -->
                      <div class="tab-pane fade show active" id="v-pills-ecommerce" role="tabpanel" aria-labelledby="v-pills-ecommerce-tab" tabindex="0">
                        <div class="row">
                          <div class="col-md-3">
                            <div class="solution-box text-center">
                              <div class="solution-img text-center">
                                <img src="<?php echo BASE_URL; ?>assets/images/header-icon/solution/apparel-stores.png" width="100%" alt="">
                              </div>
                              <div class="solution-text">
                                <a href="<?php echo BASE_URL; ?>solutions/e-commerce/apparel-solution.php">Explore more<i class="fa-solid fa-arrow-right"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="solution-box text-center">
                              <div class="solution-img text-center">
                                <img src="<?php echo BASE_URL; ?>assets/images/header-icon/solution/Jewellery.png" width="100%" alt="">
                              </div>
                              <div class="solution-text">
                                <a href="<?php echo BASE_URL; ?>solutions/e-commerce/jewellery-solution.php">Explore more<i class="fa-solid fa-arrow-right"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="solution-box text-center">
                              <div class="solution-img text-center">
                                <img src="<?php echo BASE_URL; ?>assets/images/header-icon/solution/Furniture.png" width="100%" alt="">
                              </div>
                              <div class="solution-text">
                                <h5>Furniture</h5>
                                <p>Transform your space with our stylish, durable furniture, designed for comfort, functionality, and to complement any modern home.</p>
                                <a href="<?php echo BASE_URL; ?>solutions/e-commerce/furniture-solution.php">Explore more<i class="fa-solid fa-arrow-right"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="solution-box text-center">
                              <div class="solution-img text-center">
                                <img src="<?php echo BASE_URL; ?>assets/images/header-icon/solution/Cosmetics.png" width="100%" alt="">
                              </div>
                              <div class="solution-text">
                                <a href="<?php echo BASE_URL; ?>solutions/e-commerce/cosmetics-solution.php">Explore more<i class="fa-solid fa-arrow-right"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Healthcare Solutions Tab -->
                      <div class="tab-pane fade" id="v-pills-healthcare" role="tabpanel" aria-labelledby="v-pills-healthcare-tab" tabindex="0">
                        <div class="row">
                          <div class="col-md-3">
                            <div class="solution-box text-center">
                              <div class="solution-img text-center">
                                <img src="<?php echo BASE_URL; ?>assets/images/header-icon/solution/Clinics Management.png" width="100%" alt="">
                              </div>
                              <div class="solution-text">
                                <h5>Clinics Management</h5>
                                <p>Streamline your clinic operations with our comprehensive management system, improving patient care, appointment scheduling, and staff efficiency.</p>
                                <a href="<?php echo BASE_URL; ?>solutions/healthcare/clinics-management-solution.php">Explore more<i class="fa-solid fa-arrow-right"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="solution-box text-center">
                              <div class="solution-img text-center">
                                <img src="<?php echo BASE_URL; ?>assets/images/header-icon/solution/Hospital Management.png" width="100%" alt="">
                              </div>
                              <div class="solution-text">
                                <a href="<?php echo BASE_URL; ?>solutions/healthcare/hospital-management-solution.php">Explore more<i class="fa-solid fa-arrow-right"></i></a>
                              </div>
                            </div>
                          </div>
                           <div class="col-md-3">
                            <div class="solution-box text-center">
                              <div class="solution-img text-center">
                                <img src="<?php echo BASE_URL; ?>assets/images/header-icon/solution/Hospital Management.png" width="100%" alt="">
                              </div>
                              <div class="solution-text">
                                <h5>Multi-Vendor Hospital</h5>
                                <p>An integrated platform for hospitals to manage multiple vendors, streamline procurement, and optimize supply chains.</p>
                                <a href="<?php echo BASE_URL; ?>solutions/healthcare/multi-vendor-hospital-solution.php">Explore more<i class="fa-solid fa-arrow-right"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3"></div>
                        </div>
                      </div>
                      <!-- Job Portal Solutions Tab -->
                      <div class="tab-pane fade" id="v-pills-jobportal" role="tabpanel" aria-labelledby="v-pills-jobportal-tab" tabindex="0">
                        <div class="row">
                          <div class="col-md-3">
                            <div class="solution-box text-center">
                              <div class="solution-img text-center">
                                <img src="<?php echo BASE_URL; ?>assets/images/header-icon/solution/job-portal.png" width="100%" alt="">
                              </div>
                              <div class="solution-text">
                                <h5>Job Portal Overview</h5>
                                <p>Comprehensive platform connecting job seekers with employers, offering advanced search, application tracking, and more.</p>
                                <a href="<?php echo BASE_URL; ?>solutions/job-portal/job-portal-solution.php">Explore more<i class="fa-solid fa-arrow-right"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="solution-box text-center">
                              <div class="solution-img text-center">
                                <img src="<?php echo BASE_URL; ?>assets/images/header-icon/solution/candidate-management.png" width="100%" alt="">
                              </div>
                              <div class="solution-text">
                                <h5>Candidate Management</h5>
                                <p>Tools for tracking applications, managing candidate profiles, and streamlining the hiring process for recruiters.</p>
                                <a href="<?php echo BASE_URL; ?>solutions/job-portal/candidate-management.php">Explore more<i class="fa-solid fa-arrow-right"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="solution-box text-center">
                              <div class="solution-img text-center">
                                <img src="<?php echo BASE_URL; ?>assets/images/header-icon/solution/employer-dashboard.png" width="100%" alt="">
                              </div>
                              <div class="solution-text">
                                <h5>Employer Dashboard</h5>
                                <p>Empowering employers with dashboards to post jobs, manage listings, and communicate with applicants efficiently.</p>
                                <a href="<?php echo BASE_URL; ?>solutions/job-portal/employer-dashboard.php">Explore more<i class="fa-solid fa-arrow-right"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3"></div>
                        </div>
                      </div>
                      <!-- Car Rental Solutions Tab -->
                      <div class="tab-pane fade" id="v-pills-carrental" role="tabpanel" aria-labelledby="v-pills-carrental-tab" tabindex="0">
                        <div class="row">
                          <div class="col-md-3">
                            <div class="solution-box text-center">
                              <div class="solution-img text-center">
                                <img src="<?php echo BASE_URL; ?>assets/images/header-icon/solution/car-rental.png" width="100%" alt="">
                              </div>
                              <div class="solution-text">
                                <h5>Car Rental Overview</h5>
                                <p>A complete solution for car rental businesses, managing bookings, fleet, and customer relations efficiently.</p>
                                <a href="<?php echo BASE_URL; ?>solutions/car-rental/car-rental-solution.php">Explore more<i class="fa-solid fa-arrow-right"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="solution-box text-center">
                              <div class="solution-img text-center">
                                <img src="<?php echo BASE_URL; ?>assets/images/header-icon/solution/self-drive.png" width="100%" alt="">
                              </div>
                              <div class="solution-text">
                                <h5>Self-Drive Portal</h5>
                                <p>User-friendly platform for customers to browse, book, and manage self-drive car rentals seamlessly.</p>
                                <a href="<?php echo BASE_URL; ?>solutions/car-rental/self-drive-portal.php">Explore more<i class="fa-solid fa-arrow-right"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="solution-box text-center">
                              <div class="solution-img text-center">
                                <img src="<?php echo BASE_URL; ?>assets/images/header-icon/solution/fleet-management.png" width="100%" alt="">
                              </div>
                              <div class="solution-text">
                                <h5>Fleet Management</h5>
                                <p>Tools to track, maintain, and optimize your car fleet, ensuring maximum utilization and operational efficiency.</p>
                                <a href="<?php echo BASE_URL; ?>solutions/car-rental/fleet-management.php">Explore more<i class="fa-solid fa-arrow-right"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <script>
                    // Add hover functionality for Bootstrap tabs
                    document.querySelectorAll('#v-pills-tab-solutions button').forEach(function (tab) {
                      tab.addEventListener('mouseover', function (event) {
                        var tabTrigger = new bootstrap.Tab(tab);
                        tabTrigger.show();
                      });
                    });
                  </script>
                </div>
              </ul>
            </li>

             <li class="nav-item  front dropdown">
              <a class="nav-link dropdown-toggle" href="<?php echo BASE_URL; ?>work/work.php" data-bs-toggle="dropdown">Work</a>
              <ul class="dropdown-menu abbbtt">
                <li class="dropdown-item "> <a href="<?php echo BASE_URL; ?>work/featured.php"><i class="fa-solid fa-circle-caret-right"></i>Featured</a> </li>
                <li class="dropdown-item "> <a href="<?php echo BASE_URL; ?>work/case-studies.php"><i class="fa-solid fa-circle-caret-right"></i>Case Studies</a> </li>
                <li class="dropdown-item "> <a href="<?php echo BASE_URL; ?>work/awards.php"><i class="fa-solid fa-circle-caret-right"></i>Awards</a> </li>
                <li class="dropdown-item "> <a href="<?php echo BASE_URL; ?>work/clients.php"><i class="fa-solid fa-circle-caret-right"></i>Clients</a> </li>
              </ul>
             </li>
             
             <li class="nav-item">
              <a class="nav-link " aria-current="page" href="<?php echo BASE_URL; ?>/blog.php">Blog</a>
            </li>
            <li class="nav-item  front dropdown">
              <a class="nav-link dropdown-toggle" href="<?php echo BASE_URL; ?>/contact.php" data-bs-toggle="dropdown">Contact</a>
              <ul class="dropdown-menu abbbtt">
                <li class="dropdown-item "> <a href="<?php echo BASE_URL; ?>/career.php"><i class="fa-solid fa-circle-caret-right"></i>Careers</a> </li>
                <li class="dropdown-item "> <a href="<?php echo BASE_URL; ?>/get-in-touch.php"><i class="fa-solid fa-circle-caret-right"></i>Get in Touch</a> </li>

              </ul>
             </li>
         
          
          </ul>
          <button id="openPopup" class="bars-btn">
            ☰
          </button>
          <!-- Popup Overlay -->
  <div id="popup" class="popup-overlay">
    <div class="popup-content">
      <span id="closePopup" class="close-btn">&times;</span>
      

      <img src="<?php echo BASE_URL; ?>/assets/images/logo-web/logo.jpg" width="100%" alt="">
    </div>
  </div>


        </div>
      
      </div>
    </nav>


























































