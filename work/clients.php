<?php include_once __DIR__ . '/../config.php'; include_once __DIR__ . '/../header.php'; ?>
<?php include_once __DIR__ . '/../backend/db.php'; ?>

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
                <?php
                $clients_sql = "SELECT * FROM clients WHERE is_active = TRUE ORDER BY reg_date DESC";
                $clients_result = $conn->query($clients_sql);
                if ($clients_result && $clients_result->num_rows > 0):
                    while($row = $clients_result->fetch_assoc()):
                ?>
                <!-- Dynamic Client Item -->
                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up">
                    <div class="client-logo-item-v2">
                        <?php if(!empty($row['website_url'])): ?>
                            <a href="<?php echo $row['website_url']; ?>" target="_blank">
                        <?php endif; ?>
                        
                        <?php if(!empty($row['logo_url'])): ?>
                            <img src="<?php echo $row['logo_url']; ?>" class="client-logo-img" alt="<?php echo htmlspecialchars($row['name']); ?>">
                        <?php else: ?>
                            <div class="client-name"><?php echo htmlspecialchars($row['name']); ?></div>
                        <?php endif; ?>

                        <?php if(!empty($row['website_url'])): ?>
                            </a>
                            <a href="<?php echo $row['website_url']; ?>" target="_blank" class="client-website-link"><?php echo parse_url($row['website_url'], PHP_URL_HOST); ?></a>
                        <?php endif; ?>

                        <?php if(!empty($row['testimonial'])): ?>
                            <p class="client-testimonial">"<?php echo htmlspecialchars($row['testimonial']); ?>"</p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php 
                    endwhile;
                else:
                ?>
                    <div class="col-12 text-center">
                        <p>No clients found at the moment.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php include_once __DIR__ . '/../footer.php'; ?>
