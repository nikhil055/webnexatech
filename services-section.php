<?php include_once 'config.php'; ?>
<style>
    .services-tech-v2 {
        position: relative;
        padding: 140px 0;
        background: #080b12;
        color: #ffffff;
        font-family: 'Inter', sans-serif;
        overflow: hidden;
    }

    .services-tech-v2::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image: 
            linear-gradient(rgba(114, 79, 255, 0.03) 1px, transparent 1px),
            linear-gradient(90deg, rgba(114, 79, 255, 0.03) 1px, transparent 1px);
        background-size: 40px 40px;
        z-index: 1;
    }

    .container-fluid { position: relative; z-index: 10; padding: 0 60px; }

    .services-tag {
        display: inline-flex;
        align-items: center; gap: 8px;
        background: rgba(114, 79, 255, 0.1); border: 1px solid rgba(114, 79, 255, 0.2);
        padding: 6px 18px; border-radius: 100px;
        font-size: 12px; font-weight: 700; color: rgb(216, 115, 255);
        margin-bottom: 25px; text-transform: uppercase; letter-spacing: 2px;
    }

    .services-tech-v2 h2 {
        font-size: clamp(32px, 4.5vw, 54px);
        font-weight: 900; line-height: 1.1;
        margin-bottom: 60px; letter-spacing: -2px;
    }

    .service-tech-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 25px;
    }

    .service-card-v2 {
        position: relative;
        background: rgba(255, 255, 255, 0.015);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 35px;
        padding: 40px 30px;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        backdrop-filter: blur(40px);
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .service-card-v2:hover {
        transform: translateY(-12px);
        border-color: rgba(114, 79, 255, 0.4);
        background: rgba(255, 255, 255, 0.03);
        box-shadow: 0 30px 60px -12px rgba(0,0,0,0.5);
    }

    .service-number {
        position: absolute; top: 30px; right: 35px;
        font-size: 40px; font-weight: 900;
        color: rgba(255, 255, 255, 0.03);
        line-height: 1; transition: 0.4s;
    }

    .s-icon-box {
        width: 55px; height: 55px;
        background: rgba(114, 79, 255, 0.1);
        border-radius: 12px;
        display: flex; align-items: center; justify-content: center;
        margin-bottom: 25px; color: rgb(114, 79, 255);
        font-size: 22px; transition: 0.4s;
    }

    .service-card-v2:hover .s-icon-box { background: rgb(114, 79, 255); color: #fff; box-shadow: 0 10px 25px rgba(114, 79, 255, 0.4); }

    .service-card-v2 h4 { font-size: 20px; font-weight: 800; margin-bottom: 12px; line-height: 1.2; }
    .service-card-v2 p { color: #94a3b8; font-size: 13.5px; line-height: 1.6; margin-bottom: 25px; }

    .s-link {
        margin-top: auto; display: inline-flex; align-items: center; gap: 10px;
        color: #fff; text-decoration: none; font-size: 11px; font-weight: 700;
        text-transform: uppercase; letter-spacing: 1px; transition: 0.3s;
    }

    .service-card-v2:hover .s-link { color: rgb(216, 115, 255); }
    .service-card-v2:hover .s-link i { transform: translateX(5px); }

    .cat-divider { grid-column: span 4; margin: 60px 0 30px; border-bottom: 1px solid rgba(255,255,255,0.05); padding-bottom: 15px; font-size: 14px; font-weight: 800; color: #475569; text-transform: uppercase; letter-spacing: 3px; }

    @media (max-width: 1400px) { .service-tech-grid { grid-template-columns: repeat(3, 1fr); } .cat-divider { grid-column: span 3; } }
    @media (max-width: 1100px) { .service-tech-grid { grid-template-columns: repeat(2, 1fr); } .cat-divider { grid-column: span 2; } }
    @media (max-width: 767px) { .service-tech-grid { grid-template-columns: 1fr; } .cat-divider { grid-column: span 1; } .container-fluid { padding: 0 25px; } }
</style>

<section class="services-tech-v2">
    <div class="container-fluid">
        <div class="text-center" data-aos="fade-up">
            <div class="services-tag"><i class="fas fa-layer-group"></i> Master Capabilities</div>
            <h2>The WebNexa <span class="gradient-tech-text">Elite Service Grid</span></h2>
        </div>

        <div class="service-tech-grid mt-5">
            
            <div class="cat-divider">01. Technology & Engineering</div>
            <div class="service-card-v2" data-aos="fade-up">
                <div class="service-number">01</div>
                <div class="s-icon-box"><i class="fas fa-code"></i></div>
                <h4>Web <br> Development</h4>
                <p>Architecting high-performance React & Next.js web systems.</p>
                <a href="<?php echo BASE_URL; ?>technology/website-development.php" class="s-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card-v2" data-aos="fade-up">
                <div class="service-number">02</div>
                <div class="s-icon-box"><i class="fas fa-laptop-code"></i></div>
                <h4>Software <br> Development</h4>
                <p>Bespoke enterprise ERPs and custom logic engines.</p>
                <a href="<?php echo BASE_URL; ?>technology/software-development.php" class="s-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card-v2" data-aos="fade-up">
                <div class="service-number">03</div>
                <div class="s-icon-box"><i class="fas fa-mobile-screen"></i></div>
                <h4>Mobile App <br> Development</h4>
                <p>Native-speed iOS and Android apps with Flutter.</p>
                <a href="<?php echo BASE_URL; ?>technology/mobile-apps.php" class="s-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card-v2" data-aos="fade-up">
                <div class="service-number">04</div>
                <div class="s-icon-box"><i class="fab fa-shopify"></i></div>
                <h4>Shopify <br> Development</h4>
                <p>Conversion-obsessed Shopify Plus stores and custom apps.</p>
                <a href="<?php echo BASE_URL; ?>technology/shopify-development.php" class="s-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card-v2" data-aos="fade-up">
                <div class="service-number">05</div>
                <div class="s-icon-box"><i class="fab fa-wordpress"></i></div>
                <h4>WordPress <br> Development</h4>
                <p>Enterprise custom themes and headless CMS solutions.</p>
                <a href="<?php echo BASE_URL; ?>technology/wordpress-development.php" class="s-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card-v2" data-aos="fade-up">
                <div class="service-number">06</div>
                <div class="s-icon-box"><i class="fab fa-apple"></i></div>
                <h4>iOS App <br> Engineering</h4>
                <p>Premium native iPhone apps using Swift and SwiftUI.</p>
                <a href="<?php echo BASE_URL; ?>technology/ios-apps.php" class="s-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="cat-divider">02. Search Engine Optimization</div>
            <div class="service-card-v2" data-aos="fade-up">
                <div class="service-number">07</div>
                <div class="s-icon-box"><i class="fas fa-magnifying-glass-chart"></i></div>
                <h4>SEO <br> Main Services</h4>
                <p>Full-funnel organic growth and topical authority strategy.</p>
                <a href="<?php echo BASE_URL; ?>seo/seo-services.php" class="s-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card-v2" data-aos="fade-up">
                <div class="service-number">08</div>
                <div class="s-icon-box"><i class="fas fa-spider"></i></div>
                <h4>Technical <br> SEO Audit</h4>
                <p>Deep technical scans to identify and fix crawl bottlenecks.</p>
                <a href="<?php echo BASE_URL; ?>seo/technical-seo-audit.php" class="s-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card-v2" data-aos="fade-up">
                <div class="service-number">09</div>
                <div class="s-icon-box"><i class="fas fa-location-dot"></i></div>
                <h4>Local <br> SEO Mastery</h4>
                <p>Dominating map packs and city-specific search intent.</p>
                <a href="<?php echo BASE_URL; ?>seo/local-seo.php" class="s-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card-v2" data-aos="fade-up">
                <div class="service-number">10</div>
                <div class="s-icon-box"><i class="fas fa-cart-shopping"></i></div>
                <h4>E-Commerce <br> SEO</h4>
                <p>Aggressive ranking for massive retail SKU catalogs.</p>
                <a href="<?php echo BASE_URL; ?>seo/e-commerce-seo.php" class="s-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card-v2" data-aos="fade-up">
                <div class="service-number">11</div>
                <div class="s-icon-box"><i class="fab fa-youtube"></i></div>
                <h4>YouTube <br> VSEO Growth</h4>
                <p>Algorithmic video optimization for retention and views.</p>
                <a href="<?php echo BASE_URL; ?>seo/youtube-seo.php" class="s-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="cat-divider">03. Paid Media & Performance</div>
            <div class="service-card-v2" data-aos="fade-up">
                <div class="service-number">12</div>
                <div class="s-icon-box"><i class="fas fa-search-dollar"></i></div>
                <h4>Search Ads <br> (PPC)</h4>
                <p>High-intent Google Ads optimized for maximum ROI.</p>
                <a href="<?php echo BASE_URL; ?>paid-media/search-ads.php" class="s-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card-v2" data-aos="fade-up">
                <div class="service-number">13</div>
                <div class="s-icon-box"><i class="fas fa-share-nodes"></i></div>
                <h4>Social <br> Ads</h4>
                <p>Scaling brands on Meta, LinkedIn, and TikTok platforms.</p>
                <a href="<?php echo BASE_URL; ?>paid-media/social-ads.php" class="s-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card-v2" data-aos="fade-up">
                <div class="service-number">14</div>
                <div class="s-icon-box"><i class="fas fa-tv"></i></div>
                <h4>OTT & <br> Streaming Ads</h4>
                <p>Premium non-skippable video placements on CTV apps.</p>
                <a href="<?php echo BASE_URL; ?>paid-media/ott-ads.php" class="s-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card-v2" data-aos="fade-up">
                <div class="service-number">15</div>
                <div class="s-icon-box"><i class="fas fa-robot"></i></div>
                <h4>Programmatic <br> Display</h4>
                <p>Automated real-time bidding across global ad exchanges.</p>
                <a href="<?php echo BASE_URL; ?>paid-media/programmatic-display-ads.php" class="s-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card-v2" data-aos="fade-up">
                <div class="service-number">16</div>
                <div class="s-icon-box"><i class="fas fa-road"></i></div>
                <h4>OOH <br> Advertising</h4>
                <p>Strategic physical billboard and digital outdoor placements.</p>
                <a href="<?php echo BASE_URL; ?>paid-media/ooh-advertising.php" class="s-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="cat-divider">04. Creative Studio</div>
            <div class="service-card-v2" data-aos="fade-up">
                <div class="service-number">17</div>
                <div class="s-icon-box"><i class="fas fa-pen-nib"></i></div>
                <h4>Branding <br> & Identity</h4>
                <p>Architecting iconic brand visual systems and DNA.</p>
                <a href="<?php echo BASE_URL; ?>creative/branding.php" class="s-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card-v2" data-aos="fade-up">
                <div class="service-number">18</div>
                <div class="s-icon-box"><i class="fas fa-bezier-curve"></i></div>
                <h4>Web & <br> UI/UX Design</h4>
                <p>Crafting futuristic, high-engagement user interfaces.</p>
                <a href="<?php echo BASE_URL; ?>creative/web-design.php" class="s-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card-v2" data-aos="fade-up">
                <div class="service-number">19</div>
                <div class="s-icon-box"><i class="fas fa-clapperboard"></i></div>
                <h4>Graphics <br> & Motion</h4>
                <p>High-end motion visuals and cinematic effects.</p>
                <a href="<?php echo BASE_URL; ?>creative/graphics-motion.php" class="s-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card-v2" data-aos="fade-up">
                <div class="service-number">20</div>
                <div class="s-icon-box"><i class="fas fa-camera-retro"></i></div>
                <h4>Product <br> Photoshoot</h4>
                <p>Commercial photography using prime optical stacks.</p>
                <a href="<?php echo BASE_URL; ?>creative/photoshoot.php" class="s-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card-v2" data-aos="fade-up">
                <div class="service-number">21</div>
                <div class="s-icon-box"><i class="fas fa-film"></i></div>
                <h4>Cinematic <br> Production</h4>
                <p>Full-scale video commercial and brand film production.</p>
                <a href="<?php echo BASE_URL; ?>creative/production.php" class="s-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="cat-divider">05. Content Engineering</div>
            <div class="service-card-v2" data-aos="fade-up">
                <div class="service-number">22</div>
                <div class="s-icon-box"><i class="fas fa-feather-pointed"></i></div>
                <h4>Content <br> Writing</h4>
                <p>High-conversion sales copy and semantic storytelling.</p>
                <a href="<?php echo BASE_URL; ?>content/content-writing.php" class="s-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card-v2" data-aos="fade-up">
                <div class="service-number">23</div>
                <div class="s-icon-box"><i class="fas fa-bullhorn"></i></div>
                <h4>Content <br> Marketing</h4>
                <p>Strategic distribution and omnichannel growth loops.</p>
                <a href="<?php echo BASE_URL; ?>content/content-marketing.php" class="s-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-card-v2" data-aos="fade-up">
                <div class="service-number">24</div>
                <div class="s-icon-box"><i class="fas fa-book-medical"></i></div>
                <h4>Technical <br> Writing</h4>
                <p>Precise API docs, whitepapers and system manuals.</p>
                <a href="<?php echo BASE_URL; ?>content/technical-writing.php" class="s-link">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>
