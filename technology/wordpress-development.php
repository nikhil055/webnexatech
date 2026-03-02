<?php 
$page_title = 'Custom WordPress | WebNexa';
include_once __DIR__ . '/../config.php'; 
include_once __DIR__ . '/../header-new.php'; 
?>

<style>
    .web-dev-main { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    .web-fixed-bg { position: fixed; inset: 0; z-index: 1; pointer-events: none; opacity: 0.2; }
    .data-drop { position: absolute; width: 1px; height: 100px; background: linear-gradient(to bottom, transparent, #21759b, transparent); animation: dropMove 5s infinite linear; }
    @keyframes dropMove { 0% { transform: translateY(-100px); opacity: 0; } 50% { opacity: 0.5; } 100% { transform: translateY(100vh); opacity: 0; } }

    .tech-badge { display: inline-flex; align-items: center; gap: 8px; background: rgba(33, 117, 155, 0.1); border: 1px solid rgba(33, 117, 155, 0.2); padding: 6px 18px; border-radius: 100px; font-size: 12px; font-weight: 800; color: #41b2e4; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 25px; }
    .section-title { font-size: clamp(32px, 4.5vw, 54px); font-weight: 900; line-height: 1.1; letter-spacing: -2px; }
    .gradient-wp-text { background: linear-gradient(90deg, #21759b, #41b2e4); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    
    .content-block { padding: 120px 0; position: relative; z-index: 10; }
    .container { position: relative; z-index: 10; max-width: 1350px; }
    .glass-card { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; backdrop-filter: blur(40px); transition: 0.4s; padding: 45px; height: 100%; display: flex; flex-direction: column; }
    .glass-card:hover { border-color: #21759b; transform: translateY(-10px); background: rgba(33, 117, 155, 0.03); }

    .web-hero { position: relative; padding: 220px 0 120px; background: #080b12; overflow: hidden; text-align: center; }
    .hero-grid { position: absolute; inset: 0; background-image: radial-gradient(rgba(33, 117, 155, 0.05) 1px, transparent 1px); background-size: 50px 50px; transform: perspective(500px) rotateX(60deg); }
    .web-hero h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; line-height: 0.95; margin-bottom: 30px; }

    .flow-timeline { position: relative; max-width: 900px; margin: 60px auto 0; padding-left: 80px; }
    .flow-timeline::before { content: ""; position: absolute; left: 30px; top: 0; height: 100%; width: 2px; background: linear-gradient(to bottom, #21759b, transparent); }
    .flow-step { position: relative; margin-bottom: 60px; }
    .flow-step::after { content: ""; position: absolute; left: -58px; top: 0; width: 16px; height: 18px; background: #05070a; border: 4px solid #21759b; border-radius: 50%; box-shadow: 0 0 20px #21759b; z-index: 5; }
    .flow-step h5 { font-size: 22px; font-weight: 800; color: #fff; margin-bottom: 10px; }
    .flow-step p { font-size: 16px; color: #94a3b8; }

    .cap-grid-massive { display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; margin-top: 60px; }
    .cap-icon { width: 55px; height: 55px; background: rgba(33, 117, 155, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 22px; color: #41b2e4; margin-bottom: 25px; transition: 0.4s; }
    .glass-card h4 { font-size: 22px; font-weight: 800; margin-bottom: 15px; color: #fff; }
    .cap-feat-list { list-style: none; padding: 0; margin: auto 0 0; display: flex; flex-wrap: wrap; gap: 8px; }
    .cap-feat-list li { background: rgba(255,255,255,0.03); padding: 5px 12px; border-radius: 6px; font-size: 10px; font-weight: 800; color: #41b2e4; border: 1px solid rgba(255,255,255,0.05); text-transform: uppercase; }

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
            <div class="tech-badge" data-aos="fade-down">Enterprise CMS</div>
            <h1 data-aos="zoom-in">Custom WordPress <br> <span class="gradient-wp-text">Engineering</span></h1>
            <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 19px; line-height: 1.8;" data-aos="fade-up">We push the limits of WordPress. From headless React integrations to high-load WooCommerce engines, we build secure CMS ecosystems.</p>
        </div>
    </section>

    <section class="content-block" style="background: #080b12; border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Execution Protocol</div>
                <h2 class="section-title">The WP <br> <span class="gradient-wp-text">Production Line</span></h2>
            </div>
            <div class="flow-timeline">
                <div class="flow-step" data-aos="fade-right">
                    <h5>Headless Discovery</h5>
                    <p>Determining the best data flow using WP REST API or GraphQL for decouple speed.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="100">
                    <h5>Clean Code Theme</h5>
                    <p>Engineering bespoke themes with Tailwind and PHP 8.2 standards—zero commercial bloat.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="200">
                    <h5>Security Lockdown</h5>
                    <p>Military-grade server-side hardening to prevent SQLi and XSS vulnerabilities at the source.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="300">
                    <h5>Performance Sync</h5>
                    <p>Configuring LSCache, Redis, and Cloudflare Edge for sub-second page delivery.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="content-block">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">System Scope</div>
                <h2 class="section-title">WordPress <span class="gradient-wp-text">Engineering Matrix</span></h2>
            </div>
            <div class="cap-grid-massive">
                <div class="glass-card" data-aos="fade-up">
                    <div class="cap-icon"><i class="fas fa-layer-group"></i></div>
                    <h4>Headless <br> Architecture</h4>
                    <p>Decoupled WordPress setups using React/Next.js for the elite SPA experience.</p>
                    <ul class="cap-feat-list"><li>WP REST API</li><li>GraphQL</li><li>Next.js UI</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="cap-icon"><i class="fas fa-cart-arrow-down"></i></div>
                    <h4>WooCommerce <br> Scale</h4>
                    <p>Optimized e-commerce environments handling massive SKU counts and traffic.</p>
                    <ul class="cap-feat-list"><li>Redis Cache</li><li>Elastic Search</li><li>ERP Sync</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="cap-icon"><i class="fas fa-puzzle-piece"></i></div>
                    <h4>Custom Plugin <br> Build</h4>
                    <p>Bespoke PHP plugins built from scratch to add precise enterprise business logic.</p>
                    <ul class="cap-feat-list"><li>PHP 8.x</li><li>Hooks API</li><li>Secure Stacks</li></ul>
                </div>
            </div>
        </div>
    </section>

    <section class="content-block" style="background: #080b12;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Competitive Analysis</div>
                <h2 class="section-title">Standard WP vs <br> <span class="gradient-wp-text">WebNexa Engineering</span></h2>
            </div>
            <div class="comp-box" data-aos="zoom-in">
                <div class="comp-row comp-header"><span>Features</span><span>Standard Blog</span><span style="color:#41b2e4;">WebNexa Elite</span></div>
                <div class="comp-row"><span>Speed Score</span><span class="comp-val">40 - 60 (Mobile)</span><span class="comp-val best"><i class="fas fa-bolt"></i> 95+ Lighthouse</span></div>
                <div class="comp-row"><span>Security</span><span class="comp-val">Plugin-Heavy</span><span class="comp-val best"><i class="fas fa-shield-halved"></i> Server-Level Lock</span></div>
                <div class="comp-row"><span>Theme Core</span><span class="comp-val">Commercial Template</span><span class="comp-val best"><i class="fas fa-code"></i> 100% Bespoke Code</span></div>
                <div class="comp-row" style="border:none;"><span>Database</span><span class="comp-val">Default Setup</span><span class="comp-val best"><i class="fas fa-database"></i> Query Optimized</span></div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background: #21759b; color:#fff;">
        <div class="container d-flex justify-content-between align-items-center flex-wrap gap-3">
            <h4 style="margin:0; font-weight:900;">24/7 CMS SECURITY GOVERNANCE ACTIVE</h4>
            <div style="font-weight:700; letter-spacing:1px; background:rgba(0,0,0,0.2); padding:10px 25px; border-radius:50px;">STATUS: HARDENED & SECURE</div>
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