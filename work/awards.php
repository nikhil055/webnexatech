<?php include_once __DIR__ . '/../config.php'; include_once __DIR__ . '/../header.php'; ?>
<?php include_once __DIR__ . '/../backend/db.php'; ?>

    <style>
        .page-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo BASE_URL; ?>assets/images/banner/banner-02.jpg');
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
        .award-item-v2 {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
            margin-bottom: 30px;
            transition: all 0.3s ease;
            text-align: center;
            padding: 25px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }
        .award-item-v2:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
        }
        .award-item-v2 .award-image {
            width: 100px;
            height: 100px;
            object-fit: contain;
            margin: 0 auto 20px auto;
            transition: transform 0.3s ease;
        }
        .award-item-v2:hover .award-image {
            transform: scale(1.05);
        }
        .award-item-v2 .award-year {
            font-size: 1.1rem;
            font-weight: 700;
            color: #3C72FC;
            margin-bottom: 10px;
        }
        .award-item-v2 .award-title {
            font-size: 1.4rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }
        .award-item-v2 .awarding-body {
            font-size: 0.95rem;
            color: #666;
            margin-bottom: 15px;
        }
        .award-item-v2 .award-description {
            font-size: 0.9rem;
            color: #777;
            margin-bottom: 15px;
            flex-grow: 1;
        }
        .award-item-v2 .award-link {
            display: inline-block;
            color: #3C72FC;
            font-weight: 500;
            text-decoration: none;
            border: 1px solid #3C72FC;
            padding: 8px 15px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        .award-item-v2 .award-link:hover {
            background-color: #3C72FC;
            color: #fff;
        }
    </style>

    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12" data-aos="zoom-in">
                    <h2>Our Awards & Recognition</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom">
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>work/work.php">Work</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Awards</li>
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
                         <span>Recognition of Excellence</span>
                         <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                      </div>
                      <h3>Celebrating Our Achievements and Industry Recognition</h3>
                   </div>
                </div>
           </div>

            <div class="row justify-content-center">
                <?php
                $awards_sql = "SELECT * FROM awards ORDER BY award_year DESC, reg_date DESC";
                $awards_result = $conn->query($awards_sql);
                if ($awards_result && $awards_result->num_rows > 0):
                    while($row = $awards_result->fetch_assoc()):
                ?>
                <!-- Dynamic Award Item -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="award-item-v2">
                        <?php if(!empty($row['image_url'])): ?>
                            <img src="<?php echo $row['image_url']; ?>" class="award-image" alt="<?php echo htmlspecialchars($row['title']); ?>">
                        <?php else: ?>
                            <img src="<?php echo BASE_URL; ?>assets/images/awards/award-placeholder.png" class="award-image" alt="Placeholder">
                        <?php endif; ?>
                        <div class="award-year"><?php echo htmlspecialchars($row['award_year']); ?></div>
                        <h4 class="award-title"><?php echo htmlspecialchars($row['title']); ?></h4>
                        <p class="awarding-body"><?php echo htmlspecialchars($row['awarding_body'] ?? ''); ?></p>
                        <p class="award-description"><?php echo htmlspecialchars($row['description'] ?? ''); ?></p>
                        <?php if(!empty($row['link_url'])): ?>
                            <a href="<?php echo $row['link_url']; ?>" target="_blank" class="award-link">View Details</a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php 
                    endwhile;
                else:
                ?>
                    <div class="col-12 text-center">
                        <p>No awards or recognition records found at the moment.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php include_once __DIR__ . '/../footer.php'; ?>
