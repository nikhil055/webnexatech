<?php 
$page_title = 'Strategic Content Writing | WebNexa';
include_once __DIR__ . '/../config.php'; 
include_once __DIR__ . '/../header-new.php'; 
?>

<style>
    .content-main { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    .web-fixed-bg { position: fixed; inset: 0; z-index: 1; pointer-events: none; opacity: 0.2; }
    .data-drop { position: absolute; width: 1px; height: 100px; background: linear-gradient(to bottom, transparent, #00bcd4, transparent); animation: dropMove 5s infinite linear; }
    @keyframes dropMove { 0% { transform: translateY(-100px); opacity: 0; } 50% { opacity: 0.5; } 100% { transform: translateY(100vh); opacity: 0; } }

    .tech-badge { display: inline-flex; align-items: center; gap: 8px; background: rgba(0, 188, 212, 0.1); border: 1px solid rgba(0, 188, 212, 0.2); padding: 6px 18px; border-radius: 100px; font-size: 12px; font-weight: 800; color: #00bcd4; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 25px; }
    .section-title { font-size: clamp(32px, 4.5vw, 54px); font-weight: 900; line-height: 1.1; letter-spacing: -2px; }
    .gradient-content-text { background: linear-gradient(90deg, #00bcd4, #4dd0e1); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    
    .content-block { padding: 120px 0; position: relative; z-index: 10; }
    .container { position: relative; z-index: 10; max-width: 1350px; }
    .glass-card { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; backdrop-filter: blur(40px); transition: 0.4s; padding: 45px; height: 100%; display: flex; flex-direction: column; }
    .glass-card:hover { border-color: #00bcd4; transform: translateY(-10px); background: rgba(0, 188, 212, 0.03); }

    .web-hero { position: relative; padding: 220px 0 120px; background: #080b12; overflow: hidden; text-align: center; }
    .hero-grid { position: absolute; inset: 0; background-image: radial-gradient(rgba(0, 188, 212, 0.05) 1px, transparent 1px); background-size: 50px 50px; transform: perspective(500px) rotateX(60deg); }
    .web-hero h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; line-height: 0.95; margin-bottom: 30px; }

    .flow-timeline { position: relative; max-width: 900px; margin: 60px auto 0; padding-left: 80px; }
    .flow-timeline::before { content: ""; position: absolute; left: 30px; top: 0; height: 100%; width: 2px; background: linear-gradient(to bottom, #00bcd4, transparent); }
    .flow-step { position: relative; margin-bottom: 60px; }
    .flow-step::after { content: ""; position: absolute; left: -58px; top: 0; width: 16px; height: 18px; background: #05070a; border: 4px solid #00bcd4; border-radius: 50%; box-shadow: 0 0 20px #00bcd4; z-index: 5; }
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

<div class="content-main">
    <div class="web-fixed-bg" id="write-fx-bg"></div>

    <section class="web-hero">
        <div class="hero-grid"></div>
        <div class="container">
            <div class="tech-badge" data-aos="fade-down">Linguistic Engineering</div>
            <h1 data-aos="zoom-in">Persuasive High-ROI <br> <span class="gradient-content-text">Content Architecture</span></h1>
            <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 19px; line-height: 1.8;" data-aos="fade-up">We engineer words that convert. Our content protocol combines semantic SEO with high-conversion psychological triggers.</p>
        </div>
    </section>

    <!-- ASSEMBLY LINE -->
    <section class="content-block" style="background: #080b12; border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Linguistic Protocol</div>
                <h2 class="section-title">The Content <br> <span class="gradient-content-text">Production Line</span></h2>
            </div>
            <div class="flow-timeline">
                <div class="flow-step" data-aos="fade-right">
                    <h5>Contextual Discovery</h5>
                    <p>Mapping brand tone, target psychological triggers, and market competitive gaps.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="100">
                    <h5>Semantic Blueprint</h5>
                    <p>Engineering keyword-rich content structures designed for absolute topical authority.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="200">
                    <h5>Linguistic Engineering</h5>
                    <p>Drafting high-conversion copy utilizing persuasive storytelling and technical precision.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="300">
                    <h5>Quality Hardening</h5>
                    <p>Rigorous editorial review focusing on readability scores, SEO integrity, and brand consistency.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="content-block">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">System Scope</div>
                <h2 class="section-title">Content Engineering <span class="gradient-content-text">Matrix</span></h2>
            </div>
            <div class="cap-grid-massive">
                <div class="glass-card" data-aos="fade-up">
                    <div class="cap-icon"><i class="fas fa-bullseye"></i></div>
                    <h4>High-Conversion <br> Sales Copy</h4>
                    <p>Landing page and ad copy designed to trigger psychological actions and drive revenue.</p>
                    <ul class="cap-feat-list"><li>Psych Stacks</li><li>Action Driven</li><li>A/B Tested</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="cap-icon"><i class="fas fa-magnifying-glass-chart"></i></div>
                    <h4>Semantic SEO <br> Blog Systems</h4>
                    <p>Engineering long-form content that dominates topical authority and builds search trust.</p>
                    <ul class="cap-feat-list"><li>Topical Map</li><li>NLP Engine</li><li>Cluster Logic</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="cap-icon"><i class="fas fa-id-card-clip"></i></div>
                    <h4>Thought Leadership <br> & PR Content</h4>
                    <p>Expert-level articles positioning your brand as a global market leader.</p>
                    <ul class="cap-feat-list"><li>Expert Stacks</li><li>PR Logic</li><li>Authority Core</li></ul>
                </div>
            </div>
        </div>
    </section>

    <!-- COMPARISON -->
    <section class="content-block" style="background: #080b12;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Competitive Analysis</div>
                <h2 class="section-title">Generic Content vs <br> <span class="gradient-content-text">WebNexa Engineering</span></h2>
            </div>
            <div class="comp-box" data-aos="zoom-in">
                <div class="comp-row comp-header"><span>Features</span><span>Generic Writer</span><span style="color:#00bcd4;">WebNexa Elite</span></div>
                <div class="comp-row"><span>Logic</span><span class="comp-val">Purely Descriptive</span><span class="comp-val best"><i class="fas fa-bolt"></i> Conversion Psychology Driven</span></div>
                <div class="comp-row"><span>SEO Flow</span><span class="comp-val">Keyword Stuffing</span><span class="comp-val best"><i class="fas fa-microchip"></i> Semantic Entity Optimization</span></div>
                <div class="comp-row"><span>Readability</span><span class="comp-val">Standard Paragraphs</span><span class="comp-val best"><i class="fas fa-chart-line"></i> High-Retention Scannable Flow</span></div>
                <div class="comp-row" style="border:none;"><span>Result</span><span class="comp-val">Informational</span><span class="comp-val best"><i class="fas fa-desktop"></i> Direct Transactional ROI</span></div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background: #00bcd4; color:#000;">
        <div class="container d-flex justify-content-between align-items-center flex-wrap gap-3">
            <h4 style="margin:0; font-weight:900;">24/7 CONTENT PERFORMANCE GOVERNANCE ACTIVE</h4>
            <div style="font-weight:700; letter-spacing:1px; background:rgba(0,0,0,0.1); padding:10px 25px; border-radius:50px;">STATUS: RANKING READY</div>
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