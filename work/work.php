<?php include_once __DIR__ . '/../config.php'; include_once __DIR__ . '/../header.php'; ?>
<?php include_once __DIR__ . '/../backend/db.php'; ?>

    <style>
        .page-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo BASE_URL; ?>assets/images/banner/banner-03.jpg');
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
            color: #EB7700;
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
            color: #EB7700;
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
        .work-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            margin-bottom: 30px;
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .work-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }
        .work-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .work-card:hover img {
            transform: scale(1.05);
        }
        .work-card .card-body {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .work-card .project-title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 10px;
            line-height: 1.4;
            transition: color 0.3s ease;
        }
        .work-card .project-title a {
            color: inherit;
            text-decoration: none;
        }
        .work-card:hover .project-title a {
            color: #EB7700;
        }
        .work-card .project-description {
            font-size: 15px;
            color: #666;
            margin-bottom: 20px;
            flex-grow: 1;
        }
        .work-card .view-project {
            color: #EB7700;
            font-weight: 600;
            text-decoration: none;
            transition: transform 0.3s ease;
            margin-top: auto; /* Push to bottom */
        }
        .work-card .view-project i {
            margin-left: 5px;
            transition: transform 0.3s ease;
        }
        .work-card:hover .view-project i {
            transform: translateX(5px);
        }
        .work-card .project-date {
            font-size: 13px;
            color: #999;
            margin-top: 15px;
            border-top: 1px solid #eee;
            padding-top: 10px;
        }
    </style>

    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12" data-aos="zoom-in">
                    <h2>Our Work</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom">
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Work</li>
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
                         <span>Our Creative Projects</span>
                         <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                      </div>
                      <h3>Explore Our Latest Creations</h3>
                   </div>
                </div>
           </div>
            <div class="row justify-content-center">
                <?php
                $work_sql = "SELECT * FROM work_items ORDER BY reg_date DESC";
                $work_result = $conn->query($work_sql);
                if ($work_result && $work_result->num_rows > 0):
                    while($row = $work_result->fetch_assoc()):
                ?>
                <!-- Dynamic Work Item -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="work-card">
                        <?php if(!empty($row['image_url'])): ?>
                            <img src="<?php echo $row['image_url']; ?>" class="img-fluid" alt="<?php echo htmlspecialchars($row['title']); ?>">
                        <?php else: ?>
                            <img src="<?php echo BASE_URL; ?>assets/images/work/project-placeholder.jpg" class="img-fluid" alt="Placeholder">
                        <?php endif; ?>
                        <div class="card-body">
                            <h4 class="project-title">
                                <?php if(!empty($row['project_link'])): ?>
                                    <a href="<?php echo $row['project_link']; ?>" target="_blank"><?php echo htmlspecialchars($row['title']); ?></a>
                                <?php else: ?>
                                    <?php echo htmlspecialchars($row['title']); ?>
                                <?php endif; ?>
                            </h4>
                            <p class="project-description"><?php echo htmlspecialchars($row['description'] ?? ''); ?></p>
                            <?php if(!empty($row['project_link'])): ?>
                                <a href="<?php echo $row['project_link']; ?>" target="_blank" class="view-project">View Project <i class="fa-solid fa-arrow-right"></i></a>
                            <?php endif; ?>
                            <div class="project-date"><?php echo date('F d, Y', strtotime($row['reg_date'])); ?></div>
                        </div>
                    </div>
                </div>
                <?php 
                    endwhile;
                else:
                ?>
                    <div class="col-12 text-center">
                        <p>No projects found in our portfolio yet.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php include_once __DIR__ . '/../footer.php'; ?>
