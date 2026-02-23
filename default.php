<?php include 'header.php'; ?>
<?php
// Simulate data coming from a backend/database for a 'Default' page
$page_data = [
    'title' => 'Default Page',
    'banner_title' => 'Welcome to Our Page',
    'banner_image' => 'assets/images/banner/banner.webp', // Placeholder, ideally dynamic
    'breadcrumb_active' => 'Default',
    'section_subtitle' => 'Generic Content',
    'section_main_title' => 'This is a Generic Page Layout',
    'content_paragraph1' => 'This page serves as a default template for new content. Its structure mirrors our core design principles, providing a consistent user experience across the site.',
    'content_paragraph2' => 'You can populate this area with any specific information, features, or details relevant to this particular page. The layout is designed to be flexible and easily adaptable to various content types.',
    'image_main' => 'assets/images/about/about.png', // Reusing an existing image for placeholder
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

        /* Additional styling for default page content */
        .default-content-section {
            padding-bottom: 80px;
        }
    </style>

    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12" data-aos="zoom-in">
                    <h2><?php echo $page_data['banner_title']; ?></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $page_data['breadcrumb_active']; ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="default-content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <div class="ser-head text-center mb-5" data-aos="fade-up">
                      <div class="hed text-center">
                         <img src="assets/images/about/arrowLeft.svg" width="6%" alt="">
                         <span><?php echo $page_data['section_subtitle']; ?></span>
                         <img src="assets/images/about/arrowRight.svg" width="6%" alt="">
                      </div>
                      <h3><?php echo $page_data['section_main_title']; ?></h3>
                   </div>
                </div>
           </div>

            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <p class="lead text-center"><?php echo $page_data['content_paragraph1']; ?></p>
                    <p class="text-center"><?php echo $page_data['content_paragraph2']; ?></p>
                    <div class="text-center mt-4">
                        <img src="<?php echo $page_data['image_main']; ?>" class="img-fluid rounded shadow" alt="Generic Content Image">
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
