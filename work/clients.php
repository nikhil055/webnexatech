<?php 
$page_title = 'Strategic Partnerships | WebNexa';
include_once __DIR__ . '/../config.php'; 
include_once __DIR__ . '/../header-new.php'; 
include_once __DIR__ . '/../backend/db.php';
?>

<style>
    .clients-main { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    
    .clients-hero { position: relative; padding: 220px 0 100px; background: #080b12; overflow: hidden; text-align: center; }
    .clients-hero h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; position: relative; z-index: 10; }

    /* CLIENT GRID */
    .client-grid-v2 { display: grid; grid-template-columns: repeat(4, 1fr); gap: 25px; padding: 100px 0; }
    
    .client-card-v2 { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; padding: 50px 30px; text-align: center; backdrop-filter: blur(40px); transition: 0.4s; display: flex; flex-direction: column; align-items: center; justify-content: center; min-height: 280px; }
    .client-card-v2:hover { border-color: rgb(114, 79, 255); transform: translateY(-10px); background: rgba(114, 79, 255, 0.03); }

    .client-logo-v2 { max-width: 150px; max-height: 80px; filter: grayscale(100%) brightness(1.5) opacity(0.5); transition: 0.4s; margin-bottom: 25px; }
    .client-card-v2:hover .client-logo-v2 { filter: grayscale(0%) brightness(1) opacity(1); transform: scale(1.1); }

    .client-name-v2 { font-size: 20px; font-weight: 800; margin-bottom: 10px; }
    .client-link-v2 { font-size: 11px; font-weight: 800; color: rgb(216, 115, 255); text-transform: uppercase; letter-spacing: 2px; text-decoration: none; }
    
    .client-testimonial-v2 { margin-top: 25px; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.05); color: #94a3b8; font-size: 13px; font-style: italic; line-height: 1.6; }

    @media (max-width: 1200px) { .client-grid-v2 { grid-template-columns: repeat(3, 1fr); } }
    @media (max-width: 991px) { .client-grid-v2 { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 575px) { .client-grid-v2 { grid-template-columns: 1fr; } }
</style>

<div class="clients-main">
    <section class="clients-hero">
        <div class="hero-glow"></div>
        <div class="container">
            <div class="tech-badge" data-aos="fade-down">Strategic Partnerships</div>
            <h1 data-aos="zoom-in">Powering the <br> <span class="gradient-tech-text">Global Vanguard</span></h1>
            <p style="color: #94a3b8; max-width: 800px; margin: 30px auto 0; font-size: 19px; line-height: 1.8;" data-aos="fade-up">From fast-growth startups to Fortune 500 giants, we architect the technical foundations for industry leaders.</p>
        </div>
    </section>

    <div class="container">
        <div class="client-grid-v2">
            <?php
            $clients_sql = "SELECT * FROM clients WHERE is_active = TRUE ORDER BY reg_date DESC";
            $clients_result = $conn->query($clients_sql);
            if ($clients_result && $clients_result->num_rows > 0):
                while($row = $clients_result->fetch_assoc()):
            ?>
            <div class="client-card-v2" data-aos="fade-up">
                <?php if(!empty($row['logo_url'])): ?>
                    <img src="<?php echo $row['logo_url']; ?>" class="client-logo-v2" alt="<?php echo htmlspecialchars($row['name']); ?>">
                <?php else: ?>
                    <h4 class="client-name-v2"><?php echo htmlspecialchars($row['name']); ?></h4>
                <?php endif; ?>

                <?php if(!empty($row['website_url'])): ?>
                    <a href="<?php echo $row['website_url']; ?>" target="_blank" class="client-link-v2"><?php echo parse_url($row['website_url'], PHP_URL_HOST); ?></a>
                <?php endif; ?>

                <?php if(!empty($row['testimonial'])): ?>
                    <p class="client-testimonial-v2">"<?php echo htmlspecialchars($row['testimonial']); ?>"</p>
                <?php endif; ?>
            </div>
            <?php endwhile; else: ?>
                <div class="col-12 text-center py-5">
                    <h3 class="opacity-30">No active partnerships registered.</h3>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php include_once __DIR__ . '/../contact-section-shared.php'; ?>
</div>

<?php include_once __DIR__ . '/../footer.php'; ?>
