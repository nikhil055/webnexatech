<?php 
$page_title = 'Digital Outdoor (DOOH) | WebNexa';
include_once __DIR__ . '/../config.php'; 
include_once __DIR__ . '/../header-new.php'; 
?>

<style>
    .paid-main { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    .web-fixed-bg { position: fixed; inset: 0; z-index: 1; pointer-events: none; opacity: 0.2; }
    .data-drop { position: absolute; width: 1px; height: 100px; background: linear-gradient(to bottom, transparent, #ff9800, transparent); animation: dropMove 5s infinite linear; }
    @keyframes dropMove { 0% { transform: translateY(-100px); opacity: 0; } 50% { opacity: 0.5; } 100% { transform: translateY(100vh); opacity: 0; } }

    .tech-badge { display: inline-flex; align-items: center; gap: 8px; background: rgba(255, 152, 0, 0.1); border: 1px solid rgba(255, 152, 0, 0.2); padding: 6px 18px; border-radius: 100px; font-size: 12px; font-weight: 800; color: #ff9800; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 25px; }
    .section-title { font-size: clamp(32px, 4.5vw, 54px); font-weight: 900; line-height: 1.1; letter-spacing: -2px; }
    .gradient-ooh-text { background: linear-gradient(90deg, #ff9800, #f44336); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    
    .content-block { padding: 120px 0; position: relative; z-index: 10; }
    .container { position: relative; z-index: 10; max-width: 1350px; }
    .glass-card { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; backdrop-filter: blur(40px); transition: 0.4s; padding: 45px; height: 100%; display: flex; flex-direction: column; }
    .glass-card:hover { border-color: #ff9800; transform: translateY(-10px); background: rgba(255, 152, 0, 0.03); }

    .web-hero { position: relative; padding: 220px 0 120px; background: #080b12; overflow: hidden; text-align: center; }
    .hero-grid { position: absolute; inset: 0; background-image: radial-gradient(rgba(255, 152, 0, 0.05) 1px, transparent 1px); background-size: 50px 50px; transform: perspective(500px) rotateX(60deg); }
    .web-hero h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; line-height: 0.95; margin-bottom: 30px; }

    .flow-timeline { position: relative; max-width: 900px; margin: 60px auto 0; padding-left: 80px; }
    .flow-timeline::before { content: ""; position: absolute; left: 30px; top: 0; height: 100%; width: 2px; background: linear-gradient(to bottom, #ff9800, transparent); }
    .flow-step { position: relative; margin-bottom: 60px; }
    .flow-step::after { content: ""; position: absolute; left: -58px; top: 0; width: 16px; height: 18px; background: #05070a; border: 4px solid #ff9800; border-radius: 50%; box-shadow: 0 0 20px #ff9800; z-index: 5; }
    .flow-step h5 { font-size: 22px; font-weight: 800; color: #fff; margin-bottom: 10px; }
    .flow-step p { font-size: 16px; color: #94a3b8; }

    .cap-grid-massive { display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; margin-top: 60px; }
    .cap-icon { width: 55px; height: 55px; background: rgba(255, 152, 0, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 22px; color: #ff9800; margin-bottom: 25px; transition: 0.4s; }
    .cap-feat-list { list-style: none; padding: 0; margin: auto 0 0; display: flex; flex-wrap: wrap; gap: 8px; }
    .cap-feat-list li { background: rgba(255,255,255,0.03); padding: 5px 12px; border-radius: 6px; font-size: 10px; font-weight: 800; color: #ff9800; border: 1px solid rgba(255,255,255,0.05); text-transform: uppercase; }

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
    <div class="web-fixed-bg" id="ooh-fx-bg"></div>

    <section class="web-hero">
        <div class="hero-grid"></div>
        <div class="container">
            <div class="tech-badge" data-aos="fade-down">Physical & Digital Hybrid</div>
            <h1 data-aos="zoom-in">OOH & Digital <br> <span class="gradient-ooh-text">Outdoor Excellence</span></h1>
            <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 19px; line-height: 1.8;" data-aos="fade-up">Strategic placement in high-traffic real-world zones. We combine traditional OOH authority with programmatic DOOH data precision.</p>
        </div>
    </section>

    <!-- ASSEMBLY LINE -->
    <section class="content-block" style="background: #080b12; border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Execution Protocol</div>
                <h2 class="section-title">The Outdoor <br> <span class="gradient-ooh-text">Deployment Flow</span></h2>
            </div>
            <div class="flow-timeline">
                <div class="flow-step" data-aos="fade-right">
                    <h5>GEO-Fencing Analysis</h5>
                    <p>Mapping high-traffic landmarks and audience movement patterns across targeted city zones.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="100">
                    <h5>Dynamic Asset Design</h5>
                    <p>Engineering high-readability digital billboard assets optimized for 3-second exposure windows.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="200">
                    <h5>Programmatic Launch</h5>
                    <p>Automated deployment based on real-time triggers like weather, time, or local event data.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="300">
                    <h5>Device Retargeting</h5>
                    <p>Capturing billboard-exposed IDs and retargeting them on mobile apps to drive digital action.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="content-block">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">System Scope</div>
                <h2 class="section-title">The OOH <br> <span class="gradient-ooh-text">Placement Matrix</span></h2>
            </div>
            <div class="cap-grid-massive">
                <div class="glass-card" data-aos="fade-up">
                    <div class="cap-icon"><i class="fas fa-mountain-city"></i></div>
                    <h4>Programmatic <br> DOOH</h4>
                    <p>Automated digital billboard buying with real-time environment-based triggers.</p>
                    <ul class="cap-feat-list"><li>Live Triggers</li><li>City Stacks</li><li>Data Core</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="cap-icon"><i class="fas fa-location-arrow"></i></div>
                    <h4>Strategic <br> Landmarks</h4>
                    <p>High-impact placements at airports and transit hubs for maximum brand authority.</p>
                    <ul class="cap-feat-list"><li>Airport Hubs</li><li>Transit Wrap</li><li>Iconic Sites</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="cap-icon"><i class="fas fa-mobile-screen"></i></div>
                    <h4>Mobile <br> Sync Retargeting</h4>
                    <p>Retargeting users on their mobile devices after exposure to outdoor billboard ads.</p>
                    <ul class="cap-feat-list"><li>GEO-Fencing</li><li>Sync Logic</li><li>Device ID</li></ul>
                </div>
            </div>
        </div>
    </section>

    <section class="content-block" style="background: #080b12;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Competitive Analysis</div>
                <h2 class="section-title">Generic Billboard vs <br> <span class="gradient-ooh-text">WebNexa DOOH</span></h2>
            </div>
            <div class="comp-box" data-aos="zoom-in">
                <div class="comp-row comp-header"><span>Features</span><span>Generic OOH</span><span style="color:#ff9800;">WebNexa Elite</span></div>
                <div class="comp-row"><span>Content</span><span class="comp-val">Static Static Image</span><span class="comp-val best"><i class="fas fa-bolt"></i> Dynamic Real-time Video</span></div>
                <div class="comp-row"><span>Targeting</span><span class="comp-val">Broad (Anyone passing)</span><span class="comp-val best"><i class="fas fa-microchip"></i> Time/Event Triggered</span></div>
                <div class="comp-row"><span>Retargeting</span><span class="comp-val">None (One-way)</span><span class="comp-val best"><i class="fas fa-chart-line"></i> Mobile Retargeting Sync</span></div>
                <div class="comp-row" style="border:none;"><span>Reporting</span><span class="comp-val">Estimated Traffic</span><span class="comp-val best"><i class="fas fa-desktop"></i> Precise Impression Data</span></div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background: #ff9800; color:#000;">
        <div class="container d-flex justify-content-between align-items-center flex-wrap gap-3">
            <h4 style="margin:0; font-weight:900;">24/7 DOOH SYSTEM GOVERNANCE ACTIVE</h4>
            <div style="font-weight:700; letter-spacing:1px; background:rgba(0,0,0,0.1); padding:10px 25px; border-radius:50px;">STATUS: PHYSICAL SCALE ACTIVE</div>
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