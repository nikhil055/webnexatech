<?php 
$page_title = 'Enterprise E-Commerce SEO | WebNexa';
include_once __DIR__ . '/../config.php'; 
include_once __DIR__ . '/../header-new.php'; 
?>

<style>
    .seo-main { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    .web-fixed-bg { position: fixed; inset: 0; z-index: 1; pointer-events: none; opacity: 0.2; }
    .data-drop { position: absolute; width: 1px; height: 100px; background: linear-gradient(to bottom, transparent, #d500f9, transparent); animation: dropMove 5s infinite linear; }
    @keyframes dropMove { 0% { transform: translateY(-100px); opacity: 0; } 50% { opacity: 0.5; } 100% { transform: translateY(100vh); opacity: 0; } }

    .tech-badge { display: inline-flex; align-items: center; gap: 8px; background: rgba(213, 0, 249, 0.1); border: 1px solid rgba(213, 0, 249, 0.2); padding: 6px 18px; border-radius: 100px; font-size: 12px; font-weight: 800; color: #d500f9; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 25px; }
    .section-title { font-size: clamp(32px, 4.5vw, 54px); font-weight: 900; line-height: 1.1; letter-spacing: -2px; }
    .gradient-eco-text { background: linear-gradient(90deg, #d500f9, #f50057); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    
    .content-block { padding: 120px 0; position: relative; z-index: 10; }
    .container { position: relative; z-index: 10; max-width: 1350px; }
    .glass-card { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; backdrop-filter: blur(40px); transition: 0.4s; padding: 45px; height: 100%; display: flex; flex-direction: column; }
    .glass-card:hover { border-color: #d500f9; transform: translateY(-10px); background: rgba(213, 0, 249, 0.03); }

    .web-hero { position: relative; padding: 220px 0 120px; background: #080b12; overflow: hidden; text-align: center; }
    .hero-grid { position: absolute; inset: 0; background-image: radial-gradient(rgba(213, 0, 249, 0.05) 1px, transparent 1px); background-size: 50px 50px; transform: perspective(500px) rotateX(60deg); }
    .web-hero h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; line-height: 0.95; margin-bottom: 30px; }

    .flow-timeline { position: relative; max-width: 900px; margin: 60px auto 0; padding-left: 80px; }
    .flow-timeline::before { content: ""; position: absolute; left: 30px; top: 0; height: 100%; width: 2px; background: linear-gradient(to bottom, #d500f9, transparent); }
    .flow-step { position: relative; margin-bottom: 60px; }
    .flow-step::after { content: ""; position: absolute; left: -58px; top: 0; width: 16px; height: 18px; background: #05070a; border: 4px solid #d500f9; border-radius: 50%; box-shadow: 0 0 20px #d500f9; z-index: 5; }
    .flow-step h5 { font-size: 22px; font-weight: 800; color: #fff; margin-bottom: 10px; }
    .flow-step p { font-size: 16px; color: #94a3b8; }

    .comp-box { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; padding: 60px; margin-top: 60px; }
    .comp-row { display: grid; grid-template-columns: 1.5fr 1fr 1fr; gap: 40px; padding: 25px 0; border-bottom: 1px solid rgba(255,255,255,0.05); }
    .comp-header { font-weight: 800; color: #fff; text-transform: uppercase; letter-spacing: 1px; font-size: 12px; }
    .comp-val { font-size: 15px; color: #94a3b8; display: flex; align-items: center; gap: 10px; }
    .comp-val.best { color: #fff; font-weight: 700; }
    .comp-val.best i { color: #22c55e; }

    @media (max-width: 1199px) { .cap-grid-massive { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 991px) { .cap-grid-massive, .comp-row { grid-template-columns: 1fr; } }
</style>

<div class="seo-main">
    <div class="web-fixed-bg" id="eco-fx-bg"></div>

    <section class="web-hero">
        <div class="hero-grid"></div>
        <div class="container">
            <div class="tech-badge" data-aos="fade-down">Retail Performance Engineering</div>
            <h1 data-aos="zoom-in">High-Velocity <br> <span class="gradient-eco-text">E-Commerce SEO</span></h1>
            <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 19px; line-height: 1.8;" data-aos="fade-up">Converting casual browsers into buyers through technical catalog optimization and specialized retail ranking protocols for massive inventories.</p>
        </div>
    </section>

    <!-- ASSEMBLY LINE -->
    <section class="content-block" style="background: #080b12; border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Execution Protocol</div>
                <h2 class="section-title">The Retail <br> <span class="gradient-eco-text">Ranking Matrix</span></h2>
            </div>
            <div class="flow-timeline">
                <div class="flow-step" data-aos="fade-right">
                    <h5>Catalog Mapping</h5>
                    <p>Deep-layer intent mapping across thousands of SKUs to identify high-converting "Money Keywords."</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="100">
                    <h5>Faceted Hardening</h5>
                    <p>Optimizing filter and category URLs to capture long-tail searches while maintaining a clean crawl budget.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="200">
                    <h5>Dynamic Schema Markups</h5>
                    <p>Injecting Product v3 and AggregateReview JSON-LD to dominate visual SERP features and price comparison blocks.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="300">
                    <h5>Revenue Attribution</h5>
                    <p>Syncing search data with transaction logs to verify 1:1 ROI from organic ranking growth.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="content-block">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">System Scope</div>
                <h2 class="section-title">E-Comm SEO <span class="gradient-eco-text">Matrix</span></h2>
            </div>
            <div class="cap-grid-massive">
                <div class="glass-card" data-aos="fade-up">
                    <div class="cap-icon"><i class="fas fa-boxes-stacked"></i></div>
                    <h4>Product & Category <br> Optimization</h4>
                    <p>Engineering semantic category pages optimized for maximum purchase-intent visibility.</p>
                    <ul class="cap-feat-list"><li>Meta Logic</li><li>SKU Mapping</li><li>Topical Flow</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="cap-icon"><i class="fas fa-barcode"></i></div>
                    <h4>Dynamic Product <br> Schema Stacks</h4>
                    <p>Implementing rich snippets for pricing and reviews to dominate visual search.</p>
                    <ul class="cap-feat-list"><li>Offer Mark</li><li>Live Stock</li><li>Review Logic</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="cap-icon"><i class="fas fa-cart-shopping"></i></div>
                    <h4>Conversion Led <br> Technical SEO</h4>
                    <p>Optimizing faceted navigation and checkout speeds for massive enterprise retail scale.</p>
                    <ul class="cap-feat-list"><li>Faceted SEO</li><li>Cart Speed</li><li>Checkout Sync</li></ul>
                </div>
            </div>
        </div>
    </section>

    <!-- COMPARISON -->
    <section class="content-block" style="background: #080b12;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Competitive Analysis</div>
                <h2 class="section-title">Basic SEO vs <br> <span class="gradient-eco-text">WebNexa Retail SEO</span></h2>
            </div>
            <div class="comp-box" data-aos="zoom-in">
                <div class="comp-row comp-header"><span>Features</span><span>Standard SEO</span><span style="color:#d500f9;">WebNexa Elite</span></div>
                <div class="comp-row"><span>Logic</span><span class="comp-val">Keyword Density</span><span class="comp-val best"><i class="fas fa-bolt"></i> Behavioral Intent Architecture</span></div>
                <div class="comp-row"><span>Scale</span><span class="comp-val">Manual 1-by-1 Edit</span><span class="comp-val best"><i class="fas fa-microchip"></i> Bulk Dynamic Meta-Generation</span></div>
                <div class="comp-row"><span>Visuals</span><span class="comp-val">Plain Text Links</span><span class="comp-val best"><i class="fas fa-chart-line"></i> Full Rich Snippet Dominance</span></div>
                <div class="comp-row" style="border:none;"><span>Focus</span><span class="comp-val">Traffic Counts</span><span class="comp-val best"><i class="fas fa-desktop"></i> Cart Conversion & ROAS</span></div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background: #d500f9; color:#fff;">
        <div class="container d-flex justify-content-between align-items-center flex-wrap gap-3">
            <h4 style="margin:0; font-weight:900;">24/7 E-COMMERCE RANKING GOVERNANCE ACTIVE</h4>
            <div style="font-weight:700; letter-spacing:1px; background:rgba(0,0,0,0.2); padding:10px 25px; border-radius:50px;">STATUS: TRANSACTIONAL SYNC</div>
        </div>
    </section>

    <?php include_once __DIR__ . '/../contact-section-shared.php'; ?>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
...
            bg.appendChild(drop);
        }
    });
</script>

<?php include_once __DIR__ . '/../footer.php'; ?>