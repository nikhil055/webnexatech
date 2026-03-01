<?php 
$page_title = 'Contact';
 include_once 'config.php'; ?><?php include 'header.php'; ?>
<?php
// Simulate data coming from a backend/database for the 'Contact Us' page
$page_data = [
    'title' => 'Contact Us',
    'banner_title' => 'Get In Touch',
    'banner_image' => 'assets/images/banner/banner.webp', // Placeholder, ideally dynamic
    'breadcrumb_active' => 'Contact Us',
    'section_subtitle' => 'We\'d Love To Hear From You',
    'section_main_title' => 'Let\'s Connect and Build Something Great Together',
    'contact_info' => [
        [
            'icon_class' => 'fa-solid fa-map-marker-alt',
            'title' => 'Our Address',
            'details' => 'Gali No. 9, near Star Furniture, Bharat Colony, Sector 87, Neharpar Faridabad, Faridabad, Haryana 121002'
        ],
        [
            'icon_class' => 'fa-solid fa-phone-alt',
            'title' => 'Call Us',
            'details' => '+91 9910893885',
            'link' => 'tel:+919910893885'
        ],
        [
            'icon_class' => 'fa-solid fa-envelope',
            'title' => 'Email Us',
            'details' => 'info@webnexatechnologies.com',
            'link' => 'mailto:info@webnexatechnologies.com'
        ]
    ],
    'form_title' => 'Send Us a Message',
    'form_description' => 'Fill out the form below and we will get back to you as soon as possible.'
];
?>

    <style>
        /* General Page Banner Styling (similar to team.php) */
        .page-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo $page_data['banner_image']; ?>');
            background-size: cover;
            background-position: center;
            padding-top: 220px;
            padding-bottom: 100px;
            text-align: center;
            color: #fff;
            margin-bottom: 50px;
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

        /* Additional styling for contact page content */
        .contact-section {
            padding-bottom: 80px;
        }
        .contact-info-box {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            padding: 30px;
            text-align: center;
            margin-bottom: 30px;
            transition: transform 0.3s ease;
        }
        .contact-info-box:hover {
            transform: translateY(-5px);
        }
        .contact-info-box .icon {
            font-size: 48px;
            color: #3C72FC;
            margin-bottom: 20px;
        }
        .contact-info-box h4 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .contact-info-box p {
            font-size: 16px;
            color: #666;
            margin-bottom: 0;
        }
        .contact-info-box a {
            color: #3C72FC;
            font-weight: 600;
            text-decoration: none;
        }
    </style>

    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12" data-aos="zoom-in">
                    <h2><?php echo $page_data['banner_title']; ?></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom">
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $page_data['breadcrumb_active']; ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <div class="ser-head text-center mb-5" data-aos="fade-up">
                      <div class="hed text-center">
                         <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                         <span><?php echo $page_data['section_subtitle']; ?></span>
                         <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                      </div>
                      <h3><?php echo $page_data['section_main_title']; ?></h3>
                   </div>
                </div>
           </div>

            <div class="row justify-content-center">
                <?php foreach ($page_data['contact_info'] as $info):
                ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="contact-info-box">
                        <div class="icon">
                            <i class="<?php echo $info['icon_class']; ?>"></i>
                        </div>
                        <h4><?php echo $info['title']; ?></h4>
                        <?php if (isset($info['link'])):
                        ?>
                            <p><a href="<?php echo $info['link']; ?>"><?php echo $info['details']; ?></a></p>
                        <?php else:
                        ?>
                            <p><?php echo $info['details']; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach;
                ?>
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-lg-8">
                    <div class="contact-form-section" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="text-center mb-4"><?php echo $page_data['form_title']; ?></h3>
                        <p class="text-center text-muted mb-5"><?php echo $page_data['form_description']; ?></p>
                        <form action="backend/api/contact.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="Your Message" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>

