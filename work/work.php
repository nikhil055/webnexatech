<?php 
$page_title = 'Engineering Portfolio | WebNexa';
include_once __DIR__ . '/../config.php'; 
include_once __DIR__ . '/../header-new.php'; 
include_once __DIR__ . '/../backend/db.php';
?>

<style>
    .work-main-v2 { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    
    /* WORK HERO */
    .work-hero-v2 { position: relative; padding: 220px 0 100px; background: #080b12; overflow: hidden; text-align: center; }
    .work-hero-v2 h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; line-height: 0.95; position: relative; z-index: 10; }
    .hero-scanner { position: absolute; top: 0; left: 0; width: 100%; height: 2px; background: linear-gradient(90deg, transparent, rgb(114, 79, 255), transparent); animation: scanLine 4s infinite linear; opacity: 0.3; }
    @keyframes scanLine { 0% { top: 0; } 100% { top: 100%; } }

    /* PORTFOLIO GRID */
    .portfolio-grid-v2 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; padding: 100px 0; }
    
    .project-card-v2 { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; overflow: hidden; backdrop-filter: blur(40px); transition: 0.5s; position: relative; height: 100%; display: flex; flex-direction: column; }
    .project-card-v2:hover { border-color: rgb(114, 79, 255); transform: translateY(-12px); box-shadow: 0 30px 60px -12px rgba(0,0,0,0.5); }

    .p-img-v2 { height: 280px; position: relative; overflow: hidden; }
    .p-img-v2 img { width: 100%; height: 100%; object-fit: cover; transition: 0.6s cubic-bezier(0.165, 0.84, 0.44, 1); filter: contrast(1.1) brightness(0.8); }
    .project-card-v2:hover .p-img-v2 img { transform: scale(1.1); filter: contrast(1) brightness(1); }

    .p-status-strip { position: absolute; bottom: 0; left: 0; width: 100%; background: rgba(0,0,0,0.8); padding: 8px 20px; display: flex; justify-content: space-between; font-family: 'Fira Code', monospace; font-size: 10px; color: rgb(216, 115, 255); border-top: 1px solid rgba(255,255,255,0.1); }

    .p-content-v2 { padding: 40px; flex-grow: 1; display: flex; flex-direction: column; }
    .p-cat-v2 { font-size: 10px; font-weight: 800; color: #94a3b8; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 15px; display: block; }
    .p-content-v2 h4 { font-size: 26px; font-weight: 900; margin-bottom: 15px; letter-spacing: -1px; }
    .p-content-v2 p { color: #94a3b8; font-size: 15px; line-height: 1.7; margin-bottom: 30px; }

    .p-link-v2 { margin-top: auto; display: inline-flex; align-items: center; gap: 12px; color: #fff; text-decoration: none; font-weight: 800; font-size: 12px; text-transform: uppercase; letter-spacing: 1px; transition: 0.3s; }
    .p-link-v2 i { font-size: 14px; transition: 0.3s; }
    .project-card-v2:hover .p-link-v2 { color: rgb(216, 115, 255); }
    .project-card-v2:hover .p-link-v2 i { transform: translateX(5px); }

    @media (max-width: 1200px) { .portfolio-grid-v2 { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 767px) { .portfolio-grid-v2 { grid-template-columns: 1fr; } }
</style>

<div class="work-main-v2">
    <section class="work-hero-v2">
        <div class="hero-scanner"></div>
        <div class="hero-glow"></div>
        <div class="container">
            <div class="tech-badge" data-aos="fade-down">The Masterpiece Bento-Deck</div>
            <h1 data-aos="zoom-in">Architecting <br> <span class="gradient-tech-text">Digital Excellence</span></h1>
        </div>
    </section>

    <div class="container">
        <div class="portfolio-grid-v2">
            <?php
            $work_sql = "SELECT * FROM work_items ORDER BY reg_date DESC";
            $work_result = $conn->query($work_sql);
            if ($work_result && $work_result->num_rows > 0):
                while($row = $work_result->fetch_assoc()):
            ?>
            <div class="project-card-v2" data-aos="fade-up">
                <div class="p-img-v2">
                    <img src="<?php echo $row['image_url'] ?: BASE_URL . 'assets/images/work/project-placeholder.jpg'; ?>" alt="<?php echo htmlspecialchars($row['title']); ?>">
                    <div class="p-status-strip">
                        <span><i class="fas fa-microchip"></i> SYSTEM_ACTIVE</span>
                        <span>LATENCY: 42ms</span>
                    </div>
                </div>
                <div class="p-content-v2">
                    <span class="p-cat-v2">Deployed: <?php echo date('Y', strtotime($row['reg_date'])); ?></span>
                    <h4><?php echo htmlspecialchars($row['title']); ?></h4>
                    <p><?php echo htmlspecialchars($row['description']); ?></p>
                    <a href="<?php echo $row['project_link'] ?: '#'; ?>" class="p-link-v2">Access System <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <?php endwhile; else: ?>
                <div class="col-12 text-center py-5">
                    <h3 class="opacity-30">No active deployments found.</h3>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php include_once __DIR__ . '/../contact-section-shared.php'; ?>
</div>

<?php include_once __DIR__ . '/../footer.php'; ?>
