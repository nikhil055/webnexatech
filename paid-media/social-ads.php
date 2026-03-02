<?php 
$page_title = 'Social Media Scaling | WebNexa';
include_once __DIR__ . '/../config.php'; 
include_once __DIR__ . '/../header-new.php'; 
?>

<style>
    .paid-main { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    .web-fixed-bg { position: fixed; inset: 0; z-index: 1; pointer-events: none; opacity: 0.2; }
    .data-drop { position: absolute; width: 1px; height: 100px; background: linear-gradient(to bottom, transparent, #e91e63, transparent); animation: dropMove 5s infinite linear; }
    @keyframes dropMove { 0% { transform: translateY(-100px); opacity: 0; } 50% { opacity: 0.5; } 100% { transform: translateY(100vh); opacity: 0; } }

    .tech-badge { display: inline-flex; align-items: center; gap: 8px; background: rgba(233, 30, 99, 0.1); border: 1px solid rgba(233, 30, 99, 0.2); padding: 6px 18px; border-radius: 100px; font-size: 12px; font-weight: 800; color: #e91e63; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 25px; }
    .section-title { font-size: clamp(32px, 4.5vw, 54px); font-weight: 900; line-height: 1.1; letter-spacing: -2px; }
    .gradient-social-text { background: linear-gradient(90deg, #e91e63, #9c27b0); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    
    .content-block { padding: 120px 0; position: relative; z-index: 10; }
    .container { position: relative; z-index: 10; max-width: 1350px; }
    .glass-card { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; backdrop-filter: blur(40px); transition: 0.4s; padding: 45px; height: 100%; display: flex; flex-direction: column; }
    .glass-card:hover { border-color: #e91e63; transform: translateY(-10px); background: rgba(233, 30, 99, 0.03); }

    .web-hero { position: relative; padding: 220px 0 120px; background: #080b12; overflow: hidden; text-align: center; }
    .hero-grid { position: absolute; inset: 0; background-image: radial-gradient(rgba(233, 30, 99, 0.05) 1px, transparent 1px); background-size: 50px 50px; transform: perspective(500px) rotateX(60deg); }
    .web-hero h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; line-height: 0.95; margin-bottom: 30px; }

    .cap-grid-massive { display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; margin-top: 60px; }
    .cap-icon { width: 55px; height: 55px; background: rgba(233, 30, 99, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 22px; color: #e91e63; margin-bottom: 25px; transition: 0.4s; }
    .cap-feat-list { list-style: none; padding: 0; margin: auto 0 0; display: flex; flex-wrap: wrap; gap: 8px; }
    .cap-feat-list li { background: rgba(255,255,255,0.03); padding: 5px 12px; border-radius: 6px; font-size: 10px; font-weight: 800; color: #e91e63; border: 1px solid rgba(255,255,255,0.05); text-transform: uppercase; }

    .flow-timeline { position: relative; max-width: 900px; margin: 60px auto 0; padding-left: 80px; }
    .flow-timeline::before { content: ""; position: absolute; left: 30px; top: 0; height: 100%; width: 2px; background: linear-gradient(to bottom, #e91e63, transparent); }
    .flow-step { position: relative; margin-bottom: 60px; }
    .flow-step::after { content: ""; position: absolute; left: -58px; top: 0; width: 16px; height: 18px; background: #05070a; border: 4px solid #e91e63; border-radius: 50%; box-shadow: 0 0 20px #e91e63; z-index: 5; }
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

<div class="paid-main">
    <div class="web-fixed-bg" id="paid-fx-bg"></div>

    <section class="web-hero">
        <div class="hero-grid"></div>
        <div class="container">
            <div class="tech-badge" data-aos="fade-down">Full-Funnel Scaling</div>
            <h1 data-aos="zoom-in">Social Media <br> <span class="gradient-social-text">Paid Dominance</span></h1>
            <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 19px; line-height: 1.8;" data-aos="fade-up">Scaling brands on Meta, LinkedIn, and TikTok through psychological creative triggers and algorithmic audience modeling.</p>
        </div>
    </section>

    <!-- ASSEMBLY LINE -->
    <section class="content-block" style="background: #080b12; border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Execution Protocol</div>
                <h2 class="section-title">The Social <br> <span class="gradient-social-text">Scaling Engine</span></h2>
            </div>
            <div class="flow-timeline">
                <div class="flow-step" data-aos="fade-right">
                    <h5>Audience Modeling</h5>
                    <p>Utilizing first-party data and LAL modeling to identify high-converting user personas.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="100">
                    <h5>Creative Sprint</h5>
                    <p>Producing high-impact UGC and motion assets designed for maximum retention and CTR.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="200">
                    <h5>Algorithmic Testing</h5>
                    <p>Executing rapid A/B testing on copy, visuals, and landing page logic to lock in winners.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="300">
                    <h5>Horizontal Scaling</h5>
                    <p>Aggressive budget expansion through CBO/ABO logic once winning creative metrics are verified.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CAPABILITIES -->
    <section class="content-block">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">System Scope</div>
                <h2 class="section-title">Social Engineering <span class="gradient-social-text">Matrix</span></h2>
            </div>
            <div class="cap-grid-massive">
                <div class="glass-card" data-aos="fade-up">
                    <div class="cap-icon"><i class="fab fa-facebook"></i></div>
                    <h4>Meta Ads <br> (FB & IG)</h4>
                    <p>Executing direct response campaigns with advanced CAPI integration and dynamic catalog logic.</p>
                    <ul class="cap-feat-list"><li>CAPI Sync</li><li>Dynamic Ads</li><li>LAL Logic</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="cap-icon"><i class="fab fa-linkedin-in"></i></div>
                    <h4>LinkedIn B2B <br> Lead Gen</h4>
                    <p>Connecting with decision makers through ABM and secure lead sync workflows.</p>
                    <ul class="cap-feat-list"><li>ABM Stacks</li><li>InMail Logic</li><li>Lead Sync</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="cap-icon"><i class="fab fa-tiktok"></i></div>
                    <h4>TikTok & <br> Reels Growth</h4>
                    <p>Dominating attention with UGC content and high-speed viral participation logic.</p>
                    <ul class="cap-feat-list"><li>UGC Creative</li><li>Trend Sync</li><li>Spark Ads</li></ul>
                </div>
            </div>
        </div>
    </section>

    <!-- COMPARISON -->
    <section class="content-block" style="background: #080b12;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Competitive Analysis</div>
                <h2 class="section-title">Generic Agency vs <br> <span class="gradient-social-text">WebNexa Performance</span></h2>
            </div>
            <div class="comp-box" data-aos="zoom-in">
                <div class="comp-row comp-header"><span>Features</span><span>Generic Ads</span><span style="color:#e91e63;">WebNexa Elite</span></div>
                <div class="comp-row"><span>Creatives</span><span class="comp-val">Stock Images</span><span class="comp-val best"><i class="fas fa-bolt"></i> High-Retention UGC</span></div>
                <div class="comp-row"><span>Tracking</span><span class="comp-val">Basic Pixel</span><span class="comp-val best"><i class="fas fa-microchip"></i> Full CAPI + UTM Stacks</span></div>
                <div class="comp-row"><span>Optimization</span><span class="comp-val">Weekly Checks</span><span class="comp-val best"><i class="fas fa-chart-line"></i> Hourly Data Refinement</span></div>
                <div class="comp-row" style="border:none;"><span>Reporting</span><span class="comp-val">Static PDF</span><span class="comp-val best"><i class="fas fa-desktop"></i> Live ROAS Dashboard</span></div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background: #e91e63; color:#fff;">
        <div class="container d-flex justify-content-between align-items-center flex-wrap gap-3">
            <h4 style="margin:0; font-weight:900;">24/7 AD ACCOUNT GOVERNANCE ACTIVE</h4>
            <div style="font-weight:700; letter-spacing:1px; background:rgba(0,0,0,0.2); padding:10px 25px; border-radius:50px;">STATUS: SCALING PHASE</div>
        </div>
    </section>

    <?php include_once __DIR__ . '/../contact-section-shared.php'; ?>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const bg = document.getElementById('paid-fx-bg');
        for (let i = 0; i < 25; i++) {
            const drop = document.createElement('div');
            drop.className = 'data-drop';
            drop.style.left = Math.random() * 100 + '%';
            drop.style.animationDelay = Math.random() * 5 + 's';
            drop.style.animationDuration = (Math.random() * 3 + 2) + 's';
            bg.appendChild(drop);
        }
    });
</script>

<?php include_once __DIR__ . '/../footer.php'; ?>