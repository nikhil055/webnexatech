<?php 
$page_title = 'Case Studies';
 include_once __DIR__ . '/../config.php'; include_once __DIR__ . '/../header.php'; ?>
<?php include_once __DIR__ . '/../backend/db.php'; ?>

    <style>
        .page-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo BASE_URL; ?>assets/images/banner/banner-04.jpg');
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
        .case-study-item-v2 {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            margin-bottom: 40px;
            transition: all 0.4s ease;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            height: 100%;
        }
        .case-study-item-v2:hover {
            transform: translateY(-10px);
            box-shadow: 0 18px 45px rgba(0, 0, 0, 0.15);
        }
        .case-study-item-v2 .image-wrapper {
            position: relative;
            height: 250px;
            overflow: hidden;
        }
        .case-study-item-v2 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }
        .case-study-item-v2:hover img {
            transform: scale(1.08);
        }
        .case-study-item-v2 .content-body {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .case-study-item-v2 .client-info {
            font-size: 14px;
            color: #555;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        .case-study-item-v2 .client-info i {
            margin-right: 8px;
            color: #3C72FC;
        }
        .case-study-item-v2 .main-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 15px;
            line-height: 1.3;
        }
        .case-study-item-v2 .main-title a {
            color: #333;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .case-study-item-v2 .main-title a:hover {
            color: #3C72FC;
        }
        .case-study-item-v2 .brief-description {
            font-size: 16px;
            color: #666;
            margin-bottom: 25px;
            flex-grow: 1;
        }
        .case-study-item-v2 .read-more-link {
            color: #3C72FC;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            margin-top: auto;
        }
        .case-study-item-v2 .read-more-link i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }
        .case-study-item-v2:hover .read-more-link i {
            transform: translateX(5px);
        }
    </style>

    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12" data-aos="zoom-in">
                    <h2>Our Success Stories</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom">
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>work/work.php">Work</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Case Studies</li>
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
                         <span>Real-World Impact</span>
                         <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                      </div>
                      <h3>Transforming Businesses with Innovative Solutions</h3>
                   </div>
                </div>
           </div>

            <div class="row justify-content-center">
                <?php
                $cs_sql = "SELECT * FROM case_studies ORDER BY reg_date DESC";
                $cs_result = $conn->query($cs_sql);
                if ($cs_result && $cs_result->num_rows > 0):
                    while($row = $cs_result->fetch_assoc()):
                ?>
                <!-- Dynamic Case Study Item -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="case-study-item-v2">
                        <div class="image-wrapper">
                            <?php if(!empty($row['image_url'])): ?>
                                <img src="<?php echo $row['image_url']; ?>" class="img-fluid" alt="<?php echo htmlspecialchars($row['title']); ?>">
                            <?php else: ?>
                                <img src="<?php echo BASE_URL; ?>assets/images/work/project-placeholder.jpg" class="img-fluid" alt="Placeholder">
                            <?php endif; ?>
                        </div>
                        <div class="content-body">
                            <div class="client-info">
                                <i class="fas fa-user-tie"></i> <?php echo htmlspecialchars($row['client_name'] ?? 'Client'); ?> &nbsp; | &nbsp; <i class="fas fa-industry"></i> <?php echo htmlspecialchars($row['industry'] ?? 'Technology'); ?>
                            </div>
                            <h4 class="main-title">
                                <?php if(!empty($row['case_study_link'])): ?>
                                    <a href="<?php echo $row['case_study_link']; ?>" target="_blank"><?php echo htmlspecialchars($row['title']); ?></a>
                                <?php else: ?>
                                    <?php echo htmlspecialchars($row['title']); ?>
                                <?php endif; ?>
                            </h4>
                            <p class="brief-description"><?php echo htmlspecialchars($row['description'] ?? ''); ?></p>
                            <?php if(!empty($row['case_study_link'])): ?>
                                <a href="<?php echo $row['case_study_link']; ?>" target="_blank" class="read-more-link">Read Case Study <i class="fa-solid fa-arrow-right"></i></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php 
                    endwhile;
                else:
                ?>
                    <div class="col-12 text-center">
                        <p>No case studies found at the moment.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php include_once __DIR__ . '/../footer.php'; ?>
