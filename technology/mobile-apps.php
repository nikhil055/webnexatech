<?php 
$page_title = 'Elite Mobile Apps | WebNexa';
include_once __DIR__ . '/../config.php'; 
include_once __DIR__ . '/../header-new.php'; 
?>

<style>
    .web-dev-main { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    .web-fixed-bg { position: fixed; inset: 0; z-index: 1; pointer-events: none; opacity: 0.2; }
    .data-drop { position: absolute; width: 1px; height: 100px; background: linear-gradient(to bottom, transparent, rgb(114, 79, 255), transparent); animation: dropMove 5s infinite linear; }
    @keyframes dropMove { 0% { transform: translateY(-100px); opacity: 0; } 50% { opacity: 0.5; } 100% { transform: translateY(100vh); opacity: 0; } }

    .tech-badge { display: inline-flex; align-items: center; gap: 8px; background: rgba(114, 79, 255, 0.1); border: 1px solid rgba(114, 79, 255, 0.2); padding: 6px 18px; border-radius: 100px; font-size: 12px; font-weight: 800; color: rgb(216, 115, 255); text-transform: uppercase; letter-spacing: 2px; margin-bottom: 25px; }
    .section-title { font-size: clamp(32px, 4.5vw, 54px); font-weight: 900; line-height: 1.1; letter-spacing: -2px; }
    .content-block { padding: 120px 0; position: relative; z-index: 10; }
    .container { position: relative; z-index: 10; max-width: 1350px; }
    .glass-card { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; backdrop-filter: blur(40px); transition: 0.4s; padding: 45px; height: 100%; display: flex; flex-direction: column; }
    .glass-card:hover { border-color: rgba(114, 79, 255, 0.4); transform: translateY(-10px); background: rgba(114, 79, 255, 0.03); }

    .web-hero { position: relative; padding: 220px 0 120px; background: #080b12; overflow: hidden; text-align: center; }
    .hero-grid { position: absolute; inset: 0; background-image: radial-gradient(rgba(114, 79, 255, 0.05) 1px, transparent 1px); background-size: 50px 50px; transform: perspective(500px) rotateX(60deg); }
    .web-hero h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; line-height: 0.95; margin-bottom: 30px; }

    .cap-grid-massive { display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; margin-top: 60px; }
    .cap-icon { width: 55px; height: 55px; background: rgba(114, 79, 255, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 22px; color: rgb(114, 79, 255); margin-bottom: 25px; transition: 0.4s; }
    .cap-feat-list { list-style: none; padding: 0; margin: auto 0 0; display: flex; flex-wrap: wrap; gap: 8px; }
    .cap-feat-list li { background: rgba(255,255,255,0.03); padding: 5px 12px; border-radius: 6px; font-size: 10px; font-weight: 800; color: rgb(216, 115, 255); border: 1px solid rgba(255,255,255,0.05); text-transform: uppercase; }

    .flow-timeline { position: relative; max-width: 900px; margin: 60px auto 0; padding-left: 80px; }
    .flow-timeline::before { content: ""; position: absolute; left: 30px; top: 0; height: 100%; width: 2px; background: linear-gradient(to bottom, rgb(114, 79, 255), transparent); }
    .flow-step { position: relative; margin-bottom: 60px; }
    .flow-step::after { content: ""; position: absolute; left: -58px; top: 0; width: 16px; height: 18px; background: #05070a; border: 4px solid rgb(114, 79, 255); border-radius: 50%; box-shadow: 0 0 20px rgb(114, 79, 255); z-index: 5; }
    .flow-step h5 { font-size: 22px; font-weight: 800; color: #fff; margin-bottom: 10px; }
    .flow-step p { font-size: 16px; color: #94a3b8; }

    .comp-box { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; padding: 60px; margin-top: 60px; }
    .comp-row { display: grid; grid-template-columns: 1.5fr 1fr 1fr; gap: 40px; padding: 25px 0; border-bottom: 1px solid rgba(255,255,255,0.05); }
    .comp-header { font-weight: 800; color: #fff; text-transform: uppercase; letter-spacing: 1px; font-size: 12px; }
    .comp-val { font-size: 15px; color: #94a3b8; display: flex; align-items: center; gap: 10px; }
    .comp-val.best { color: #fff; font-weight: 700; }
    .comp-val.best i { color: #22c55e; }

    @media (max-width: 991px) { .cap-grid-massive, .comp-row { grid-template-columns: 1fr; } }
</style>

<div class="web-dev-main">
    <div class="web-fixed-bg" id="web-data-bg"></div>

    <section class="web-hero">
        <div class="hero-grid"></div>
        <div class="container">
            <div class="tech-badge" data-aos="fade-down">Native & Hybrid</div>
            <h1 data-aos="zoom-in">Elite Mobile <br> <span class="gradient-tech-text">App Engineering</span></h1>
            <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 19px; line-height: 1.8;" data-aos="fade-up">We build high-performance mobile applications that deliver native speed, flawless UX, and deep hardware integration across iOS and Android.</p>
        </div>
    </section>

    <section class="content-block" style="background: #080b12; border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Execution Protocol</div>
                <h2 class="section-title">The App <br> <span class="gradient-tech-text">Production Line</span></h2>
            </div>
            <div class="flow-timeline">
                <div class="flow-step" data-aos="fade-right">
                    <h5>UX Architecture</h5>
                    <p>Mapping complex user journeys into high-fidelity wireframes and motion prototypes.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="100">
                    <h5>Cross-Platform Build</h5>
                    <p>Engineering native-speed apps using Flutter or React Native with modular components.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="200">
                    <h5>API Integration</h5>
                    <p>Syncing mobile interfaces with secure cloud backends via encrypted REST/GraphQL endpoints.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="300">
                    <h5>Global Launch</h5>
                    <p>App Store & Play Store deployment with automated CI/CD pipelines and live monitoring.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="content-block">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">System Scope</div>
                <h2 class="section-title">Mobile Engineering <span class="gradient-tech-text">Matrix</span></h2>
            </div>
            <div class="cap-grid-massive">
                <div class="glass-card" data-aos="fade-up">
                    <div class="cap-icon"><i class="fas fa-mobile-screen"></i></div>
                    <h4>Consumer <br> Applications</h4>
                    <p>High-retention apps for retail and social networks designed for millions of downloads.</p>
                    <ul class="cap-feat-list"><li>Push Logic</li><li>Deep Links</li><li>Apple Pay</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="cap-icon"><i class="fas fa-briefcase"></i></div>
                    <h4>Enterprise <br> Field Tools</h4>
                    <p>Robust apps that empower workers with live data, GPS, and automated reporting.</p>
                    <ul class="cap-feat-list"><li>MDM Ready</li><li>Role Access</li><li>GPS Live</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="cap-icon"><i class="fas fa-wifi"></i></div>
                    <h4>IoT & Hardware <br> Sync</h4>
                    <p>Connecting mobile interfaces to smart hardware via BLE and Wi-Fi protocols.</p>
                    <ul class="cap-feat-list"><li>BLE Sync</li><li>Smart Home</li><li>Firmware OTA</li></ul>
                </div>
            </div>
        </div>
    </section>

    <section class="content-block" style="background: #080b12;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Competitive Analysis</div>
                <h2 class="section-title">Standard Apps vs <br> <span class="gradient-tech-text">WebNexa Engineering</span></h2>
            </div>
            <div class="comp-box" data-aos="zoom-in">
                <div class="comp-row comp-header"><span>Features</span><span>Standard App</span><span style="color:rgb(216, 115, 255);">WebNexa Elite</span></div>
                <div class="comp-row"><span>Performance</span><span class="comp-val">Web-View Lag</span><span class="comp-val best"><i class="fas fa-bolt"></i> Native 60FPS</span></div>
                <div class="comp-row"><span>Offline Logic</span><span class="comp-val">Inconsistent</span><span class="comp-val best"><i class="fas fa-database"></i> Full Local Sync</span></div>
                <div class="comp-row"><span>Security</span><span class="comp-val">Basic Auth</span><span class="comp-val best"><i class="fas fa-fingerprint"></i> Biometric FaceID</span></div>
                <div class="comp-row" style="border:none;"><span>Backend</span><span class="comp-val">Shared API</span><span class="comp-val best"><i class="fas fa-server"></i> Serverless Lambda</span></div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background: rgb(114, 79, 255); color:#fff;">
        <div class="container d-flex justify-content-between align-items-center flex-wrap gap-3">
            <h4 style="margin:0; font-weight:900;">24/7 MOBILE SYSTEM GOVERNANCE ACTIVE</h4>
            <div style="font-weight:700; letter-spacing:1px; background:rgba(0,0,0,0.2); padding:10px 25px; border-radius:50px;">STATUS: CONTINUOUS DELIVERY</div>
        </div>
    </section>

    <?php include_once __DIR__ . '/../contact-section-shared.php'; ?>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const bg = document.getElementById('web-data-bg');
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