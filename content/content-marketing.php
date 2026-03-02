<?php 
$page_title = 'Content Marketing Strategy | WebNexa';
include_once __DIR__ . '/../config.php'; 
include_once __DIR__ . '/../header-new.php'; 
?>

<style>
    .content-main { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    .web-fixed-bg { position: fixed; inset: 0; z-index: 1; pointer-events: none; opacity: 0.2; }
    .data-drop { position: absolute; width: 1px; height: 100px; background: linear-gradient(to bottom, transparent, #009688, transparent); animation: dropMove 5s infinite linear; }
    @keyframes dropMove { 0% { transform: translateY(-100px); opacity: 0; } 50% { opacity: 0.5; } 100% { transform: translateY(100vh); opacity: 0; } }

    .tech-badge { display: inline-flex; align-items: center; gap: 8px; background: rgba(0, 150, 136, 0.1); border: 1px solid rgba(0, 150, 136, 0.2); padding: 6px 18px; border-radius: 100px; font-size: 12px; font-weight: 800; color: #009688; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 25px; }
    .section-title { font-size: clamp(32px, 4.5vw, 54px); font-weight: 900; line-height: 1.1; letter-spacing: -2px; }
    .gradient-mark-text { background: linear-gradient(90deg, #009688, #4db6ac); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    
    .content-block { padding: 120px 0; position: relative; z-index: 10; }
    .container { position: relative; z-index: 10; max-width: 1350px; }
    .glass-card { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; backdrop-filter: blur(40px); transition: 0.4s; padding: 45px; height: 100%; display: flex; flex-direction: column; }
    .glass-card:hover { border-color: #009688; transform: translateY(-10px); background: rgba(0, 150, 136, 0.03); }

    .web-hero { position: relative; padding: 220px 0 120px; background: #080b12; overflow: hidden; text-align: center; }
    .hero-grid { position: absolute; inset: 0; background-image: radial-gradient(rgba(0, 150, 136, 0.05) 1px, transparent 1px); background-size: 50px 50px; transform: perspective(500px) rotateX(60deg); }
    .web-hero h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; line-height: 0.95; margin-bottom: 30px; }

    .flow-timeline { position: relative; max-width: 900px; margin: 60px auto 0; padding-left: 80px; }
    .flow-timeline::before { content: ""; position: absolute; left: 30px; top: 0; height: 100%; width: 2px; background: linear-gradient(to bottom, #009688, transparent); }
    .flow-step { position: relative; margin-bottom: 60px; }
    .flow-step::after { content: ""; position: absolute; left: -58px; top: 0; width: 16px; height: 18px; background: #05070a; border: 4px solid #009688; border-radius: 50%; box-shadow: 0 0 20px #009688; z-index: 5; }
    .flow-step h5 { font-size: 22px; font-weight: 800; color: #fff; margin-bottom: 10px; }
    .flow-step p { font-size: 16px; color: #94a3b8; }

    .cap-grid-massive { display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; margin-top: 60px; }
    .cap-icon { width: 55px; height: 55px; background: rgba(0, 150, 136, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 22px; color: #009688; margin-bottom: 25px; transition: 0.4s; }
    .cap-feat-list { list-style: none; padding: 0; margin: auto 0 0; display: flex; flex-wrap: wrap; gap: 8px; }
    .cap-feat-list li { background: rgba(255,255,255,0.03); padding: 5px 12px; border-radius: 6px; font-size: 10px; font-weight: 800; color: #009688; border: 1px solid rgba(255,255,255,0.05); text-transform: uppercase; }

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
    <div class="web-fixed-bg" id="mark-fx-bg"></div>

    <section class="web-hero">
        <div class="hero-grid"></div>
        <div class="container">
            <div class="tech-badge" data-aos="fade-down">Strategic Growth Ecosystems</div>
            <h1 data-aos="zoom-in">Full-Funnel <br> <span class="gradient-mark-text">Content Marketing</span></h1>
            <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 19px; line-height: 1.8;" data-aos="fade-up">We don't just create content; we build ecosystems. Our engine focuses on distribution, engagement, and exponential brand reach.</p>
        </div>
    </section>

    <!-- ASSEMBLY LINE -->
    <section class="content-block" style="background: #080b12; border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Strategy Protocol</div>
                <h2 class="section-title">The Distribution <br> <span class="gradient-mark-text">Production Line</span></h2>
            </div>
            <div class="flow-timeline">
                <div class="flow-step" data-aos="fade-right">
                    <h5>Funnel Mapping</h5>
                    <p>Architecting user journeys from awareness to transaction through strategic content touchpoints.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="100">
                    <h5>Asset Production</h5>
                    <p>Engineering high-fidelity whitepapers, case studies, and cinematic social storytelling assets.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="200">
                    <h5>Multi-Channel Sync</h5>
                    <p>Coordinating simultaneous rollout across organic search, social, and targeted paid streams.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="300">
                    <h5>Retention Loops</h5>
                    <p>Implementing automated email and loyalty content to turn customers into brand advocates.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="content-block">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">System Scope</div>
                <h2 class="section-title">Growth Marketing <span class="gradient-mark-text">Matrix</span></h2>
            </div>
            <div class="cap-grid-massive">
                <div class="glass-card" data-aos="fade-up">
                    <div class="cap-icon"><i class="fas fa-diagram-project"></i></div>
                    <h4>Omni-Channel <br> Strategy</h4>
                    <p>Engineering unified content journeys across social, email, and organic search platforms.</p>
                    <ul class="cap-feat-list"><li>Omni-Sync</li><li>Flow Logic</li><li>Cross-Ad</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="cap-icon"><i class="fas fa-chart-line"></i></div>
                    <h4>Viral & Growth <br> Protocols</h4>
                    <p>Leveraging algorithmic triggers to drive massive organic reach and brand authority.</p>
                    <ul class="cap-feat-list"><li>Trend Engine</li><li>Share Logic</li><li>Loops</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="cap-icon"><i class="fas fa-envelope-circle-check"></i></div>
                    <h4>Lifecycle <br> Retention</h4>
                    <p>High-value automated email content that turns visitors into lifelong advocates.</p>
                    <ul class="cap-feat-list"><li>CRM Sync</li><li>Drip Flow</li><li>Loyalty</li></ul>
                </div>
            </div>
        </div>
    </section>

    <!-- COMPARISON -->
    <section class="content-block" style="background: #080b12;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Competitive Analysis</div>
                <h2 class="section-title">Basic Posting vs <br> <span class="gradient-mark-text">WebNexa Distribution</span></h2>
            </div>
            <div class="comp-box" data-aos="zoom-in">
                <div class="comp-row comp-header"><span>Features</span><span>Standard Marketing</span><span style="color:#009688;">WebNexa Elite</span></div>
                <div class="comp-row"><span>Logic</span><span class="comp-val">Random Posting</span><span class="comp-val best"><i class="fas fa-bolt"></i> Funnel-Locked Architecture</span></div>
                <div class="comp-row"><span>Reach</span><span class="comp-val">Followers Only</span><span class="comp-val best"><i class="fas fa-microchip"></i> Algorithmic Triggering</span></div>
                <div class="comp-row"><span>Retention</span><span class="comp-val">Zero Strategy</span><span class="comp-val best"><i class="fas fa-chart-line"></i> Automated Drip Sync</span></div>
                <div class="comp-row" style="border:none;"><span>Reporting</span><span class="comp-val">Like Counts Only</span><span class="comp-val best"><i class="fas fa-desktop"></i> Full Revenue Attribution</span></div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background: #009688; color:#fff;">
        <div class="container d-flex justify-content-between align-items-center flex-wrap gap-3">
            <h4 style="margin:0; font-weight:900;">24/7 CONTENT PERFORMANCE GOVERNANCE ACTIVE</h4>
            <div style="font-weight:700; letter-spacing:1px; background:rgba(0,0,0,0.2); padding:10px 25px; border-radius:50px;">STATUS: GROWTH SYNCED</div>
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