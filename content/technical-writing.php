<?php 
$page_title = 'Technical Writing & Documentation | WebNexa';
include_once __DIR__ . '/../config.php'; 
include_once __DIR__ . '/../header-new.php'; 
?>

<style>
    .content-main { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    .web-fixed-bg { position: fixed; inset: 0; z-index: 1; pointer-events: none; opacity: 0.2; }
    .data-drop { position: absolute; width: 1px; height: 100px; background: linear-gradient(to bottom, transparent, #9c27b0, transparent); animation: dropMove 5s infinite linear; }
    @keyframes dropMove { 0% { transform: translateY(-100px); opacity: 0; } 50% { opacity: 0.5; } 100% { transform: translateY(100vh); opacity: 0; } }

    .tech-badge { display: inline-flex; align-items: center; gap: 8px; background: rgba(156, 39, 176, 0.1); border: 1px solid rgba(156, 39, 176, 0.2); padding: 6px 18px; border-radius: 100px; font-size: 12px; font-weight: 800; color: #9c27b0; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 25px; }
    .section-title { font-size: clamp(32px, 4.5vw, 54px); font-weight: 900; line-height: 1.1; letter-spacing: -2px; }
    .gradient-tech-text { background: linear-gradient(90deg, #9c27b0, #ba68c8); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    
    .content-block { padding: 120px 0; position: relative; z-index: 10; }
    .container { position: relative; z-index: 10; max-width: 1350px; }
    .glass-card { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; backdrop-filter: blur(40px); transition: 0.4s; padding: 45px; height: 100%; display: flex; flex-direction: column; }
    .glass-card:hover { border-color: #9c27b0; transform: translateY(-10px); background: rgba(156, 39, 176, 0.03); }

    .web-hero { position: relative; padding: 220px 0 120px; background: #080b12; overflow: hidden; text-align: center; }
    .hero-grid { position: absolute; inset: 0; background-image: radial-gradient(rgba(156, 39, 176, 0.05) 1px, transparent 1px); background-size: 50px 50px; transform: perspective(500px) rotateX(60deg); }
    .web-hero h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; line-height: 0.95; margin-bottom: 30px; }

    .flow-timeline { position: relative; max-width: 900px; margin: 60px auto 0; padding-left: 80px; }
    .flow-timeline::before { content: ""; position: absolute; left: 30px; top: 0; height: 100%; width: 2px; background: linear-gradient(to bottom, #9c27b0, transparent); }
    .flow-step { position: relative; margin-bottom: 60px; }
    .flow-step::after { content: ""; position: absolute; left: -58px; top: 0; width: 16px; height: 18px; background: #05070a; border: 4px solid #9c27b0; border-radius: 50%; box-shadow: 0 0 20px #9c27b0; z-index: 5; }
    .flow-step h5 { font-size: 22px; font-weight: 800; color: #fff; margin-bottom: 10px; }
    .flow-step p { font-size: 16px; color: #94a3b8; }

    .cap-grid-massive { display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; margin-top: 60px; }
    .cap-icon { width: 55px; height: 55px; background: rgba(156, 39, 176, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 22px; color: #9c27b0; margin-bottom: 25px; transition: 0.4s; }
    .glass-card h4 { font-size: 22px; font-weight: 800; margin-bottom: 15px; color: #fff; }
    .cap-feat-list { list-style: none; padding: 0; margin: auto 0 0; display: flex; flex-wrap: wrap; gap: 8px; }
    .cap-feat-list li { background: rgba(255,255,255,0.03); padding: 5px 12px; border-radius: 6px; font-size: 10px; font-weight: 800; color: #ba68c8; border: 1px solid rgba(255,255,255,0.05); text-transform: uppercase; }

    .comp-box { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; padding: 60px; margin-top: 60px; }
    .comp-row { display: grid; grid-template-columns: 1.5fr 1fr 1fr; gap: 40px; padding: 25px 0; border-bottom: 1px solid rgba(255,255,255,0.05); }
    .comp-header { font-weight: 800; color: #fff; text-transform: uppercase; letter-spacing: 1px; font-size: 12px; }
    .comp-val { font-size: 15px; color: #94a3b8; display: flex; align-items: center; gap: 10px; }
    .comp-val.best { color: #fff; font-weight: 700; }
    .comp-val.best i { color: #22c55e; }

    @media (max-width: 1199px) { .cap-grid-massive { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 991px) { .cap-grid-massive, .comp-row { grid-template-columns: 1fr; } }
</style>

<div class="content-main">
    <div class="web-fixed-bg" id="tech-fx-bg"></div>

    <section class="web-hero">
        <div class="hero-grid"></div>
        <div class="container">
            <div class="tech-badge" data-aos="fade-down">Complex Info Simplification</div>
            <h1 data-aos="zoom-in">High-Precision <br> <span class="gradient-tech-text">Technical Writing</span></h1>
            <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 19px; line-height: 1.8;" data-aos="fade-up">Converting complex technical architectures into clear, high-authority documentation, whitepapers, and API guides for global scale.</p>
        </div>
    </section>

    <!-- ASSEMBLY LINE -->
    <section class="content-block" style="background: #080b12; border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Documentation Protocol</div>
                <h2 class="section-title">The Technical <br> <span class="gradient-tech-text">Authoring Flow</span></h2>
            </div>
            <div class="flow-timeline">
                <div class="flow-step" data-aos="fade-right">
                    <h5>System Discovery</h5>
                    <p>Deep-dive into source code, API logic, and architectural blueprints with your engineering team.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="100">
                    <h5>Logical Structuring</h5>
                    <p>Mapping complex technical hierarchies into easy-to-follow, scannable documentation flows.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="200">
                    <h5>Precision Authoring</h5>
                    <p>Drafting high-accuracy guides using industry standards like OpenAPI (Swagger) and clear technical English.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="300">
                    <h5>Peer Hardening</h5>
                    <p>Rigorous technical review by senior developers to ensure 100% accuracy and zero ambiguity.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="content-block">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">System Scope</div>
                <h2 class="section-title">Authoring Mastery <span class="gradient-tech-text">Matrix</span></h2>
            </div>
            <div class="cap-grid-massive">
                <div class="glass-card" data-aos="fade-up">
                    <div class="cap-icon"><i class="fas fa-code"></i></div>
                    <h4>API & SDK <br> Documentation</h4>
                    <p>Engineering thorough API references and SDK guides that empower seamless integrations.</p>
                    <ul class="cap-feat-list"><li>OpenAPI Sync</li><li>SDK Guides</li><li>Postman Hub</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="cap-icon"><i class="fas fa-file-contract"></i></div>
                    <h4>Enterprise <br> Whitepapers</h4>
                    <p>Producing high-authority technical papers that detail your system architecture and innovation.</p>
                    <ul class="cap-feat-list"><li>Arch Stacks</li><li>C-Suite Ready</li><li>Market Data</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="cap-icon"><i class="fas fa-screwdriver-wrench"></i></div>
                    <h4>System & <br> SOP Manuals</h4>
                    <p>Architecting comprehensive user manuals and internal guides focusing on UX clarity.</p>
                    <ul class="cap-feat-list"><li>UX Guides</li><li>Admin SOPs</li><li>Process Hub</li></ul>
                </div>
            </div>
        </div>
    </section>

    <!-- COMPARISON -->
    <section class="content-block" style="background: #080b12;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Competitive Analysis</div>
                <h2 class="section-title">General Writer vs <br> <span class="gradient-tech-text">WebNexa Technical</span></h2>
            </div>
            <div class="comp-box" data-aos="zoom-in">
                <div class="comp-row comp-header"><span>Features</span><span>Standard Writer</span><span style="color:#ba68c8;">WebNexa Elite</span></div>
                <div class="comp-row"><span>Logic Depth</span><span class="comp-val">Surface Level Only</span><span class="comp-val best"><i class="fas fa-bolt"></i> Full Architectural Understanding</span></div>
                <div class="comp-row"><span>Accuracy</span><span class="comp-val">Prone to Logic Errors</span><span class="comp-val best"><i class="fas fa-microchip"></i> Engineering-Verified Content</span></div>
                <div class="comp-row"><span>Clarity</span><span class="comp-val">Wordy/Ambiguous</span><span class="comp-val best"><i class="fas fa-chart-line"></i> High-Precision Scannable Flow</span></div>
                <div class="comp-row" style="border:none;"><span>Compliance</span><span class="comp-val">Basic Markdown</span><span class="comp-val best"><i class="fas fa-desktop"></i> Full OpenAPI/REST Standards</span></div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background: #9c27b0; color:#fff;">
        <div class="container d-flex justify-content-between align-items-center flex-wrap gap-3">
            <h4 style="margin:0; font-weight:900;">24/7 DOCUMENTATION INTEGRITY ACTIVE</h4>
            <div style="font-weight:700; letter-spacing:1px; background:rgba(0,0,0,0.2); padding:10px 25px; border-radius:50px;">STATUS: TECHNICAL CLARITY</div>
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