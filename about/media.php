<?php 
$page_title = 'Media Engine | WebNexa';
include_once __DIR__ . '/../config.php'; 
include_once __DIR__ . '/../header-new.php'; 
?>

<style>
    .media-main { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    
    .media-hero { position: relative; padding: 220px 0 100px; background: #080b12; overflow: hidden; text-align: center; }
    .media-hero h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; position: relative; z-index: 10; }

    .media-content { padding: 100px 0; position: relative; z-index: 10; }

    /* SPOTLIGHT */
    .spotlight-v2 { background: rgba(255,255,255,0.015); border: 1px solid rgba(255,255,255,0.08); border-radius: 50px; overflow: hidden; display: flex; align-items: center; margin-bottom: 100px; backdrop-filter: blur(40px); }
    .spotlight-img { flex: 1; height: 500px; }
    .spotlight-img img { width: 100%; height: 100%; object-fit: cover; filter: brightness(0.7); }
    .spotlight-text { flex: 1; padding: 60px; }
    .spotlight-text h3 { font-size: 38px; font-weight: 900; margin-bottom: 25px; line-height: 1.1; }
    .spotlight-text p { color: #94a3b8; font-size: 18px; line-height: 1.7; margin-bottom: 30px; }

    /* NEWS FEED */
    .news-feed-v2 { position: relative; padding-left: 60px; border-left: 1px solid rgba(114, 79, 255, 0.2); }
    .news-item-v2 { position: relative; margin-bottom: 70px; }
    .news-item-v2::before { content: ""; position: absolute; left: -66px; top: 10px; width: 12px; height: 12px; background: rgb(114, 79, 255); border-radius: 50%; box-shadow: 0 0 15px rgb(114, 79, 255); }
    .news-date { font-size: 12px; font-weight: 800; color: rgb(216, 115, 255); text-transform: uppercase; letter-spacing: 2px; margin-bottom: 10px; display: block; }
    .news-item-v2 h4 { font-size: 24px; font-weight: 800; margin-bottom: 15px; }
    .news-item-v2 p { color: #94a3b8; line-height: 1.6; font-size: 15px; }

    /* ASSETS */
    .asset-card-v2 { background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.08); border-radius: 30px; padding: 40px; text-align: center; transition: 0.4s; }
    .asset-card-v2:hover { border-color: rgb(114, 79, 255); transform: translateY(-10px); }
    .asset-card-v2 i { font-size: 40px; color: rgb(114, 79, 255); margin-bottom: 20px; display: block; }
    .asset-btn { display: inline-flex; align-items: center; gap: 10px; background: #fff; color: #000; padding: 12px 25px; border-radius: 12px; text-decoration: none; font-weight: 800; font-size: 13px; margin-top: 20px; transition: 0.3s; }
    .asset-btn:hover { background: rgb(114, 79, 255); color: #fff; }

    @media (max-width: 991px) { .spotlight-v2 { flex-direction: column; } .spotlight-img { height: 300px; width: 100%; } }
</style>

<div class="media-main">
    <section class="media-hero">
        <div class="hero-glow"></div>
        <div class="container">
            <div class="tech-badge" data-aos="fade-down">Press & Media Hub</div>
            <h1 data-aos="zoom-in">The Global <br> <span class="gradient-tech-text">Press Engine</span></h1>
        </div>
    </section>

    <section class="media-content">
        <div class="container">
            <!-- FEATURED -->
            <div class="spotlight-v2" data-aos="fade-up">
                <div class="spotlight-img">
                    <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=2072&auto=format&fit=crop" alt="Press">
                </div>
                <div class="spotlight-text">
                    <div class="tech-badge">Top Story</div>
                    <h3>WebNexa Unveils Autonomous Commerce Engine for 2026</h3>
                    <p>The next generation of hyper-scalable retail is here. Our new AI-driven protocol allows enterprises to manage global inventories with zero manual intervention.</p>
                    <a href="#" class="btn btn-style-one">Full Press Release</a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="news-feed-v2">
                        <div class="news-item-v2" data-aos="fade-up">
                            <span class="news-date">Dec 12, 2025</span>
                            <h4>Expansion into the MENA Region</h4>
                            <p>WebNexa officially opens its Dubai HQ, targeting the rapid digital transformation across the Middle East and North Africa.</p>
                        </div>
                        <div class="news-item-v2" data-aos="fade-up" data-aos-delay="100">
                            <span class="news-date">Oct 05, 2025</span>
                            <h4>Agency of the Year: Global Tech Awards</h4>
                            <p>Recognized for architectural excellence and sub-second latency engineering in high-frequency trading platforms.</p>
                        </div>
                        <div class="news-item-v2" data-aos="fade-up" data-aos-delay="200">
                            <span class="news-date">Aug 22, 2025</span>
                            <h4>Partnership with CloudVanguard</h4>
                            <p>Strategic alliance to provide 100% fortified serverless infrastructures for our enterprise tier clients.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="asset-card-v2 mb-4" data-aos="fade-left">
                        <i class="fas fa-file-pdf"></i>
                        <h4>Media Kit 2025</h4>
                        <p style="color:#94a3b8; font-size:14px;">Logos, brand guidelines, and executive headshots for press use.</p>
                        <a href="#" class="asset-btn"><i class="fas fa-download"></i> Download Kit</a>
                    </div>
                    <div class="asset-card-v2" data-aos="fade-left" data-aos-delay="100">
                        <i class="fas fa-camera"></i>
                        <h4>Image Gallery</h4>
                        <p style="color:#94a3b8; font-size:14px;">High-resolution office and team action shots for editorial.</p>
                        <a href="#" class="asset-btn"><i class="fas fa-download"></i> Browse Library</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once __DIR__ . '/../contact-section-shared.php'; ?>
</div>

<?php include_once __DIR__ . '/../footer.php'; ?>
