<?php 
$page_title = 'iOS App Engineering | WebNexa';
include_once __DIR__ . '/../config.php'; 
include_once __DIR__ . '/../header-new.php'; 
?>

<style>
    .web-dev-main { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    .web-fixed-bg { position: fixed; inset: 0; z-index: 1; pointer-events: none; opacity: 0.2; }
    .data-drop { position: absolute; width: 1px; height: 100px; background: linear-gradient(to bottom, transparent, rgb(0, 122, 255), transparent); animation: dropMove 5s infinite linear; }
    @keyframes dropMove { 0% { transform: translateY(-100px); opacity: 0; } 50% { opacity: 0.5; } 100% { transform: translateY(100vh); opacity: 0; } }

    .tech-badge { display: inline-flex; align-items: center; gap: 8px; background: rgba(0, 122, 255, 0.1); border: 1px solid rgba(0, 122, 255, 0.2); padding: 6px 18px; border-radius: 100px; font-size: 12px; font-weight: 800; color: rgb(100, 170, 255); text-transform: uppercase; letter-spacing: 2px; margin-bottom: 25px; }
    .section-title { font-size: clamp(32px, 4.5vw, 54px); font-weight: 900; line-height: 1.1; letter-spacing: -2px; }
    .gradient-ios-text { background: linear-gradient(90deg, #007aff, #5ac8fa); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    
    .content-block { padding: 120px 0; position: relative; z-index: 10; }
    .container { position: relative; z-index: 10; max-width: 1350px; }
    .glass-card { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; backdrop-filter: blur(40px); transition: 0.4s; padding: 45px; height: 100%; display: flex; flex-direction: column; }
    .glass-card:hover { border-color: rgba(0, 122, 255, 0.4); transform: translateY(-10px); background: rgba(0, 122, 255, 0.03); }

    .web-hero { position: relative; padding: 220px 0 120px; background: #080b12; overflow: hidden; text-align: center; }
    .hero-grid { position: absolute; inset: 0; background-image: radial-gradient(rgba(0, 122, 255, 0.05) 1px, transparent 1px); background-size: 50px 50px; transform: perspective(500px) rotateX(60deg); }
    .web-hero h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; line-height: 0.95; margin-bottom: 30px; }

    .flow-timeline { position: relative; max-width: 900px; margin: 60px auto 0; padding-left: 80px; }
    .flow-timeline::before { content: ""; position: absolute; left: 30px; top: 0; height: 100%; width: 2px; background: linear-gradient(to bottom, #007aff, transparent); }
    .flow-step { position: relative; margin-bottom: 60px; }
    .flow-step::after { content: ""; position: absolute; left: -58px; top: 0; width: 16px; height: 18px; background: #05070a; border: 4px solid #007aff; border-radius: 50%; box-shadow: 0 0 20px #007aff; z-index: 5; }
    .flow-step h5 { font-size: 22px; font-weight: 800; color: #fff; margin-bottom: 10px; }
    .flow-step p { font-size: 16px; color: #94a3b8; }

    .cap-grid-massive { display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; margin-top: 60px; }
    .cap-icon { width: 55px; height: 55px; background: rgba(0, 122, 255, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 24px; color: rgb(100, 170, 255); margin-bottom: 25px; transition: 0.4s; }
    .glass-card h4 { font-size: 22px; font-weight: 800; margin-bottom: 15px; color: #fff; }
    .cap-feat-list { list-style: none; padding: 0; margin: auto 0 0; display: flex; flex-wrap: wrap; gap: 8px; }
    .cap-feat-list li { background: rgba(255,255,255,0.03); padding: 5px 12px; border-radius: 6px; font-size: 10px; font-weight: 800; color: rgb(100, 170, 255); border: 1px solid rgba(255,255,255,0.05); text-transform: uppercase; }

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
            <div class="tech-badge" data-aos="fade-down">Apple Ecosystem</div>
            <h1 data-aos="zoom-in">Premium iOS <br> <span class="gradient-ios-text">App Engineering</span></h1>
            <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 19px; line-height: 1.8;" data-aos="fade-up">We craft pixel-perfect, hyper-fast native iOS applications utilizing the full power of Swift, SwiftUI, and deep Apple hardware integration.</p>
        </div>
    </section>

    <section class="content-block" style="background: #080b12; border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Execution Protocol</div>
                <h2 class="section-title">The iOS <br> <span class="gradient-ios-text">Production Line</span></h2>
            </div>
            <div class="flow-timeline">
                <div class="flow-step" data-aos="fade-right">
                    <h5>Interface Blue-printing</h5>
                    <p>Designing native Human Interface Guidelines (HIG) compliant UIs with SwiftUI prototypes.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="100">
                    <h5>Core Logic Engineering</h5>
                    <p>Developing robust native Swift code with Combine and direct Apple hardware API access.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="200">
                    <h5>TestFlight Validation</h5>
                    <p>Rigorous beta testing across all iPhone and iPad models to ensure zero-crash performance.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="300">
                    <h5>App Store Orchestration</h5>
                    <p>Managing the strict Apple review protocol and optimizing App Store Connect metadata for launch.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="content-block">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">System Scope</div>
                <h2 class="section-title">iOS Engineering <span class="gradient-ios-text">Matrix</span></h2>
            </div>
            <div class="cap-grid-massive">
                <div class="glass-card" data-aos="fade-up">
                    <div class="cap-icon"><i class="fab fa-apple"></i></div>
                    <h4>Native Swift <br> Apps</h4>
                    <p>Flawless interfaces with SwiftUI maximizing performance with direct hardware access.</p>
                    <ul class="cap-feat-list"><li>SwiftUI</li><li>Animations</li><li>Zero Lag</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="cap-icon"><i class="fas fa-heart-pulse"></i></div>
                    <h4>HealthKit & <br> Wearables</h4>
                    <p>Deep integration with Apple Watch to track and analyze biometric data securely.</p>
                    <ul class="cap-feat-list"><li>WatchOS</li><li>HealthKit</li><li>HIPAA</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="cap-icon"><i class="fas fa-vr-cardboard"></i></div>
                    <h4>Spatial <br> Reality</h4>
                    <p>Immersive AR experiences for retail try-ons, real estate, and VisionOS.</p>
                    <ul class="cap-feat-list"><li>ARKit 6</li><li>VisionOS</li><li>3D Stacks</li></ul>
                </div>
            </div>
        </div>
    </section>

    <section class="content-block" style="background: #080b12;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Competitive Analysis</div>
                <h2 class="section-title">Standard iOS vs <br> <span class="gradient-ios-text">WebNexa Engineering</span></h2>
            </div>
            <div class="comp-box" data-aos="zoom-in">
                <div class="comp-row comp-header"><span>Features</span><span>Standard Agency</span><span style="color:#5ac8fa;">WebNexa Elite</span></div>
                <div class="comp-row"><span>Performance</span><span class="comp-val">Hybrid Lag</span><span class="comp-val best"><i class="fas fa-bolt"></i> Pure Native 120Hz</span></div>
                <div class="comp-row"><span>Security</span><span class="comp-val">Basic Encrypt</span><span class="comp-val best"><i class="fas fa-fingerprint"></i> Biometric Crypto Vault</span></div>
                <div class="comp-row"><span>Hardware Sync</span><span class="comp-val">Limited API</span><span class="comp-val best"><i class="fas fa-microchip"></i> Direct Metal Access</span></div>
                <div class="comp-row" style="border:none;"><span>Support</span><span class="comp-val">Email Only</span><span class="comp-val best"><i class="fas fa-headset"></i> Senior iOS Consultant</span></div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background: #007aff; color:#fff;">
        <div class="container d-flex justify-content-between align-items-center flex-wrap gap-3">
            <h4 style="margin:0; font-weight:900;">24/7 APPLE ECOSYSTEM MONITORING ACTIVE</h4>
            <div style="font-weight:700; letter-spacing:1px; background:rgba(0,0,0,0.2); padding:10px 25px; border-radius:50px;">STATUS: NATIVE EXCELLENCE</div>
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