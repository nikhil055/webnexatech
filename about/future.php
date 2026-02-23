<?php include 'header.php'; ?>
<?php
// Simulate data coming from a backend/database for the 'Future' page
$page_data = [
    'title' => 'Our Vision for the Future',
    'banner_title' => 'The Road Ahead',
    'banner_image' => 'assets/images/banner/banner.webp', // Placeholder, ideally dynamic
    'breadcrumb_active' => 'Future',
    'section_subtitle' => 'Innovation and Growth',
    'section_main_title' => 'Pioneering Tomorrow\'s Technology Solutions Today',
    'vision_statement' => 'At Web Nexa Technologies, we are constantly looking forward, anticipating the next wave of technological advancements and preparing our clients to thrive in a rapidly evolving digital world. Our vision is to be at the forefront of innovation, delivering solutions that are not just current, but future-proof.',
    'pillars' => [
        [
            'icon' => 'fa-solid fa-rocket',
            'title' => 'Sustainable Innovation',
            'description' => 'Investing in R&D to develop eco-friendly and sustainable tech solutions.'
        ],
        [
            'icon' => 'fa-solid fa-chart-line',
            'title' => 'Global Expansion',
            'description' => 'Extending our reach and services to new markets and diverse industries worldwide.'
        ],
        [
            'icon' => 'fa-solid fa-users',
            'title' => 'Talent Development',
            'description' => 'Fostering a culture of continuous learning and growth for our talented team.'
        ],
        [
            'icon' => 'fa-solid fa-shield-alt',
            'title' => 'Enhanced Security',
            'description' => 'Prioritizing advanced cybersecurity measures to protect digital assets and data.'
        ]
        // More future pillars/goals would come from the backend
    ],
    'future_image' => 'assets/images/why/side.jpg' // Reusing an existing image for placeholder
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

        /* Additional styling for future page content */
        .future-section {
            padding-bottom: 80px;
        }
        .vision-text {
            margin-bottom: 50px;
            font-size: 18px;
            line-height: 1.8;
            color: #444;
        }
        .pillar-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            padding: 30px;
            text-align: center;
            margin-bottom: 30px;
            transition: transform 0.3s ease;
        }
        .pillar-card:hover {
            transform: translateY(-5px);
        }
        .pillar-card .icon {
            font-size: 48px;
            color: #3C72FC;
            margin-bottom: 20px;
        }
        .pillar-card h4 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .pillar-card p {
            font-size: 16px;
            color: #666;
            margin-bottom: 0;
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

    <section class="future-section">
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

            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-delay="100">
                    <p class="vision-text"><?php echo $page_data['vision_statement']; ?></p>
                    <img src="<?php echo $page_data['future_image']; ?>" class="img-fluid rounded shadow-lg mt-4" alt="Future Vision">
                </div>
            </div>

            <div class="row justify-content-center mt-5">
                <?php foreach ($page_data['pillars'] as $pillar):
                ?>
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                    <div class="pillar-card">
                        <div class="icon">
                            <i class="<?php echo $pillar['icon']; ?>"></i>
                        </div>
                        <h4><?php echo $pillar['title']; ?></h4>
                        <p><?php echo $pillar['description']; ?></p>
                    </div>
                </div>
                <?php endforeach;
                ?>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>

