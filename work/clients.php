<?php include_once __DIR__ . '/../config.php'; include_once __DIR__ . '/../header.php'; ?>

    <style>
        .page-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo BASE_URL; ?>assets/images/banner/bg-slider1.jpg');
            background-size: cover;
            background-position: center;
            padding-top: 220px;
            padding-bottom: 100px;
            text-align: center;
            color: #fff;
        }

        .page-banner h2 {
            font-size: 55px;
            font-weight: 800;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .breadcrumb-custom {
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            display: inline-flex;
            padding: 10px 20px;
            border-radius: 30px;
            backdrop-filter: blur(5px);
        }

        .breadcrumb-custom .breadcrumb-item a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
        }

        .breadcrumb-custom .breadcrumb-item.active {
            color: #3C72FC;
            font-weight: 700;
        }

        .content-section {
            padding-top: 80px;
            padding-bottom: 80px;
        }
        .icon-card {
            display: flex;
            align-items: flex-start;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.07);
            margin-bottom: 20px;
            transition: all 0.3s ease;
            height: calc(100% - 20px);
        }
        .icon-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 35px rgba(0,0,0,0.1);
        }
        .icon-card .icon {
            font-size: 30px;
            color: #3C72FC;
            margin-right: 20px;
            min-width: 40px;
        }
        .icon-card h5 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 5px;
        }
        .icon-card p {
            font-size: 15px;
            color: #666;
            margin-bottom: 0;
            line-height: 1.6;
        }
        .client-logo-item-v2 {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            padding: 20px;
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .client-logo-item-v2:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        .client-logo-item-v2 .client-logo-img {
            max-width: 120px;
            max-height: 80px;
            object-fit: contain;
            margin-bottom: 15px;
            filter: grayscale(100%);
            opacity: 0.7;
            transition: all 0.3s ease;
        }
        .client-logo-item-v2:hover .client-logo-img {
            filter: grayscale(0%);
            opacity: 1;
        }
        .client-logo-item-v2 .client-name {
            font-size: 1.2rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
            text-decoration: none;
        }
        .client-logo-item-v2 .client-website-link {
            font-size: 0.9rem;
            color: #3C72FC;
            text-decoration: none;
            font-weight: 500;
        }
        .client-logo-item-v2 .client-website-link:hover {
            text-decoration: underline;
        }
        .client-logo-item-v2 .client-testimonial {
            font-size: 0.9rem;
            color: #666;
            font-style: italic;
            margin-top: 15px;
            border-top: 1px solid #eee;
            padding-top: 10px;
        }
    </style>

    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12" data-aos="zoom-in">
                    <h2>Our Valued Clients</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom">
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>work/work.php">Work</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Clients</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <div class="ser-head text-center mb-5" data-aos="fade-up">
                      <div class="hed text-center">
                         <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                         <span>Our Valued Partners</span>
                         <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                      </div>
                      <h3>Clientele That Drives Our Innovation</h3>
                   </div>
                </div>
           </div>

            <div class="row justify-content-center">
                <!-- Static Client Item 1 -->
                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up">
                    <div class="client-logo-item-v2">
                        <a href="https://example.com/client1" target="_blank">
                            <img src="<?php echo BASE_URL; ?>assets/images/clients/client1.png" class="client-logo-img" alt="Client 1 Logo">
                        </a>
                        <a href="https://example.com/client1" target="_blank" class="client-website-link">ClientCorp.com</a>
                        <p class="client-testimonial">"Web Nexa transformed our digital strategy. Highly recommended!"</p>
                    </div>
                </div>
                <!-- Static Client Item 2 -->
                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="client-logo-item-v2">
                        <a href="https://example.com/client2" target="_blank">
                            <img src="<?php echo BASE_URL; ?>assets/images/clients/client2.png" class="client-logo-img" alt="Client 2 Logo">
                        </a>
                        <a href="https://example.com/client2" target="_blank" class="client-website-link">InnovateSolutions.co</a>
                        <p class="client-testimonial">"Their software development was top-notch, exceeding all expectations."</p>
                    </div>
                </div>
                <!-- Static Client Item 3 -->
                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="client-logo-item-v2">
                        <a href="https://example.com/client3" target="_blank">
                            <img src="<?php echo BASE_URL; ?>assets/images/clients/client3.png" class="client-logo-img" alt="Client 3 Logo">
                        </a>
                        <a href="https://example.com/client3" target="_blank" class="client-website-link">GlobalConnect.net</a>
                        <p class="client-testimonial">"Exceptional design and seamless integration. A true partner."</p>
                    </div>
                </div>
                <!-- Static Client Item 4 -->
                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="client-logo-item-v2">
                        <a href="https://example.com/client4" target="_blank">
                            <img src="<?php echo BASE_URL; ?>assets/images/clients/client4.png" class="client-logo-img" alt="Client 4 Logo">
                        </a>
                        <a href="https://example.com/client4" target="_blank" class="client-website-link">FutureTech.org</a>
                        <p class="client-testimonial">"Their SEO expertise brought us to the first page of Google!"</p>
                    </div>
                </div>
                <!-- Static Client Item 5 -->
                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="client-logo-item-v2">
                        <a href="https://example.com/client5" target="_blank">
                            <img src="<?php echo BASE_URL; ?>assets/images/clients/client5.png" class="client-logo-img" alt="Client 5 Logo">
                        </a>
                        <a href="https://example.com/client5" target="_blank" class="client-website-link">GreenEnergy.com</a>
                        <p class="client-testimonial">"Sustainable growth and brilliant content marketing campaigns."</p>
                    </div>
                </div>
                <!-- Static Client Item 6 -->
                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="client-logo-item-v2">
                        <a href="https://example.com/client6" target="_blank">
                            <img src="<?php echo BASE_URL; ?>assets/images/clients/client6.png" class="client-logo-img" alt="Client 6 Logo">
                        </a>
                        <a href="https://example.com/client6" target="_blank" class="client-website-link">EcoInnovations.net</a>
                        <p class="client-testimonial">"Responsive web design and outstanding mobile app development."</p>
                    </div>
                </div>
                <!-- Static Client Item 7 -->
                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="client-logo-item-v2">
                        <a href="https://example.com/client7" target="_blank">
                            <img src="<?php echo BASE_URL; ?>assets/images/clients/client7.png" class="client-logo-img" alt="Client 7 Logo">
                        </a>
                        <a href="https://example.com/client7" target="_blank" class="client-website-link">HealthPlus.org</a>
                        <p class="client-testimonial">"Their healthcare solutions are simply revolutionary."</p>
                    </div>
                </div>
                <!-- Static Client Item 8 -->
                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="client-logo-item-v2">
                        <a href="https://example.com/client8" target="_blank">
                            <img src="<?php echo BASE_URL; ?>assets/images/clients/client8.png" class="client-logo-img" alt="Client 8 Logo">
                        </a>
                        <a href="https://example.com/client8" target="_blank" class="client-website-link">SportGear.shop</a>
                        <p class="client-testimonial">"Boosted our e-commerce sales with fantastic paid media campaigns."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include_once __DIR__ . '/../footer.php'; ?>
