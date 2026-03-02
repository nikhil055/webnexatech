<?php 
$page_title = 'High-Velocity Shopify | WebNexa';
include_once __DIR__ . '/../config.php'; 
include_once __DIR__ . '/../header-new.php'; 
?>

<style>
    .web-dev-main { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    .web-fixed-bg { position: fixed; inset: 0; z-index: 1; pointer-events: none; opacity: 0.2; }
    .data-drop { position: absolute; width: 1px; height: 100px; background: linear-gradient(to bottom, transparent, #96bf48, transparent); animation: dropMove 5s infinite linear; }
    @keyframes dropMove { 0% { transform: translateY(-100px); opacity: 0; } 50% { opacity: 0.5; } 100% { transform: translateY(100vh); opacity: 0; } }

    .tech-badge { display: inline-flex; align-items: center; gap: 8px; background: rgba(150, 191, 72, 0.1); border: 1px solid rgba(150, 191, 72, 0.2); padding: 6px 18px; border-radius: 100px; font-size: 12px; font-weight: 800; color: #96bf48; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 25px; }
    .section-title { font-size: clamp(32px, 4.5vw, 54px); font-weight: 900; line-height: 1.1; letter-spacing: -2px; }
    .gradient-shopify-text { background: linear-gradient(90deg, #96bf48, #5e8e3e); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    
    .content-block { padding: 120px 0; position: relative; z-index: 10; }
    .container { position: relative; z-index: 10; max-width: 1350px; }
    .glass-card { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; backdrop-filter: blur(40px); transition: 0.4s; padding: 45px; height: 100%; display: flex; flex-direction: column; }
    .glass-card:hover { border-color: #96bf48; transform: translateY(-10px); background: rgba(150, 191, 72, 0.03); }

    .web-hero { position: relative; padding: 220px 0 120px; background: #080b12; overflow: hidden; text-align: center; }
    .hero-grid { position: absolute; inset: 0; background-image: radial-gradient(rgba(150, 191, 72, 0.05) 1px, transparent 1px); background-size: 50px 50px; transform: perspective(500px) rotateX(60deg); }
    .web-hero h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; line-height: 0.95; margin-bottom: 30px; }

    .cap-grid-massive { display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; margin-top: 60px; }
    .cap-icon { width: 55px; height: 55px; background: rgba(150, 191, 72, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 22px; color: #96bf48; margin-bottom: 25px; transition: 0.4s; }
    .cap-feat-list { list-style: none; padding: 0; margin: auto 0 0; display: flex; flex-wrap: wrap; gap: 8px; }
    .cap-feat-list li { background: rgba(255,255,255,0.03); padding: 5px 12px; border-radius: 6px; font-size: 10px; font-weight: 800; color: #96bf48; border: 1px solid rgba(255,255,255,0.05); text-transform: uppercase; }

    .flow-timeline { position: relative; max-width: 900px; margin: 60px auto 0; padding-left: 80px; }
    .flow-timeline::before { content: ""; position: absolute; left: 30px; top: 0; height: 100%; width: 2px; background: linear-gradient(to bottom, #96bf48, transparent); }
    .flow-step { position: relative; margin-bottom: 60px; }
    .flow-step::after { content: ""; position: absolute; left: -58px; top: 0; width: 16px; height: 18px; background: #05070a; border: 4px solid #96bf48; border-radius: 50%; box-shadow: 0 0 20px #96bf48; z-index: 5; }
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

<div class="web-dev-main">
    <div class="web-fixed-bg" id="web-data-bg"></div>

    <section class="web-hero">
        <div class="hero-grid"></div>
        <div class="container">
            <div class="tech-badge" data-aos="fade-down">E-Commerce Scale</div>
            <h1 data-aos="zoom-in">High-Velocity <br> <span class="gradient-shopify-text">Shopify Development</span></h1>
            <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 19px; line-height: 1.8;" data-aos="fade-up">We architect conversion-obsessed Shopify Plus stores. From headless architecture to custom app integrations, we build engines for 8-figure brands.</p>
        </div>
    </section>

    <section class="content-block" style="background: #080b12; border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Execution Protocol</div>
                <h2 class="section-title">The Shopify <br> <span class="gradient-shopify-text">Delivery Engine</span></h2>
            </div>
            <div class="flow-timeline">
                <div class="flow-step" data-aos="fade-right">
                    <h5>UX & CRO Mapping</h5>
                    <p>Optimizing the buying journey for high-fidelity conversion and sub-second checkout speeds.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="100">
                    <h5>Custom Theme Build</h5>
                    <p>Building from-scratch Liquid themes with zero bloat and pixel-perfect brand DNA.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="200">
                    <h5>Headless Integration</h5>
                    <p>Decoupling the store with Hydrogen/React for infinite scalability and PWA speeds.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="300">
                    <h5>Migration Audit</h5>
                    <p>Zero-downtime data migration from legacy platforms with SEO and order integrity preservation.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="content-block">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">System Scope</div>
                <h2 class="section-title">Shopify Plus <span class="gradient-shopify-text">Capabilities</span></h2>
            </div>
            <div class="cap-grid-massive">
                <div class="glass-card" data-aos="fade-up">
                    <div class="cap-icon"><i class="fas fa-store"></i></div>
                    <h4>Custom Theme <br> Engineering</h4>
                    <p>Pixel-perfect Liquid themes built from scratch for maximum conversion ROI.</p>
                    <ul class="cap-feat-list"><li>Liquid Core</li><li>A/B Tested</li><li>Mobile First</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="cap-icon"><i class="fas fa-server"></i></div>
                    <h4>Headless <br> Commerce</h4>
                    <p>Decoupling the frontend using Hydrogen for blazing-fast edge performance.</p>
                    <ul class="cap-feat-list"><li>React Core</li><li>Storefront API</li><li>Next.js</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="cap-icon"><i class="fas fa-boxes-stacked"></i></div>
                    <h4>B2B wholesale <br> Portals</h4>
                    <p>Complex ecosystems with custom pricing tiers and deep ERP integrations.</p>
                    <ul class="cap-feat-list"><li>Price Logic</li><li>NetSuite Sync</li><li>Volume Stacks</li></ul>
                </div>
            </div>
        </div>
    </section>

    <section class="content-block" style="background: #080b12;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Competitive Analysis</div>
                <h2 class="section-title">Standard Shopify vs <br> <span class="gradient-shopify-text">WebNexa Engineering</span></h2>
            </div>
            <div class="comp-box" data-aos="zoom-in">
                <div class="comp-row comp-header"><span>Features</span><span>Standard Build</span><span style="color:#96bf48;">WebNexa Elite</span></div>
                <div class="comp-row"><span>Load Speed</span><span class="comp-val">3s - 6s (Bloated)</span><span class="comp-val best"><i class="fas fa-bolt"></i> Sub 1s (Liquid)</span></div>
                <div class="comp-row"><span>Customization</span><span class="comp-val">Limited Apps</span><span class="comp-val best"><i class="fas fa-code"></i> Custom App Logic</span></div>
                <div class="comp-row"><span>SEO Flow</span><span class="comp-val">Basic Config</span><span class="comp-val best"><i class="fas fa-magnifying-glass"></i> Technical Silos</span></div>
                <div class="comp-row" style="border:none;"><span>Support</span><span class="comp-val">Community Forums</span><span class="comp-val best"><i class="fas fa-headset"></i> Dedicated Success Mgr</span></div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background: #96bf48; color:#000;">
        <div class="container d-flex justify-content-between align-items-center flex-wrap gap-3">
            <h4 style="margin:0; font-weight:900;">24/7 E-COMMERCE OPS MONITORING ACTIVE</h4>
            <div style="font-weight:700; letter-spacing:1px; background:rgba(0,0,0,0.1); padding:10px 25px; border-radius:50px;">STATUS: REVENUE READY</div>
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