<?php 
$page_title = 'Product Photoshoot & Production | WebNexa';
include_once __DIR__ . '/../config.php'; 
include_once __DIR__ . '/../header-new.php'; 
?>

<style>
    .creative-main { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    .web-fixed-bg { position: fixed; inset: 0; z-index: 1; pointer-events: none; opacity: 0.2; }
    .data-drop { position: absolute; width: 1px; height: 100px; background: linear-gradient(to bottom, transparent, #607d8b, transparent); animation: dropMove 5s infinite linear; }
    @keyframes dropMove { 0% { transform: translateY(-100px); opacity: 0; } 50% { opacity: 0.5; } 100% { transform: translateY(100vh); opacity: 0; } }

    .tech-badge { display: inline-flex; align-items: center; gap: 8px; background: rgba(96, 125, 139, 0.1); border: 1px solid rgba(96, 125, 139, 0.2); padding: 6px 18px; border-radius: 100px; font-size: 12px; font-weight: 800; color: #607d8b; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 25px; }
    .section-title { font-size: clamp(32px, 4.5vw, 54px); font-weight: 900; line-height: 1.1; letter-spacing: -2px; }
    .gradient-shoot-text { background: linear-gradient(90deg, #607d8b, #90a4ae); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    
    .content-block { padding: 120px 0; position: relative; z-index: 10; }
    .container { position: relative; z-index: 10; max-width: 1350px; }
    .glass-card { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; backdrop-filter: blur(40px); transition: 0.4s; padding: 45px; height: 100%; display: flex; flex-direction: column; }
    .glass-card:hover { border-color: #607d8b; transform: translateY(-10px); background: rgba(96, 125, 139, 0.03); }

    .web-hero { position: relative; padding: 220px 0 120px; background: #080b12; overflow: hidden; text-align: center; }
    .hero-grid { position: absolute; inset: 0; background-image: radial-gradient(rgba(96, 125, 139, 0.05) 1px, transparent 1px); background-size: 50px 50px; transform: perspective(500px) rotateX(60deg); }
    .web-hero h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; line-height: 0.95; margin-bottom: 30px; }

    .flow-timeline { position: relative; max-width: 900px; margin: 60px auto 0; padding-left: 80px; }
    .flow-timeline::before { content: ""; position: absolute; left: 30px; top: 0; height: 100%; width: 2px; background: linear-gradient(to bottom, #607d8b, transparent); }
    .flow-step { position: relative; margin-bottom: 60px; }
    .flow-step::after { content: ""; position: absolute; left: -58px; top: 0; width: 16px; height: 18px; background: #05070a; border: 4px solid #607d8b; border-radius: 50%; box-shadow: 0 0 20px #607d8b; z-index: 5; }
    .flow-step h5 { font-size: 22px; font-weight: 800; color: #fff; margin-bottom: 10px; }
    .flow-step p { font-size: 16px; color: #94a3b8; }

    .cap-grid-massive { display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; margin-top: 60px; }
    .cap-icon { width: 55px; height: 55px; background: rgba(96, 125, 139, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 22px; color: #607d8b; margin-bottom: 25px; transition: 0.4s; }
    .cap-feat-list { list-style: none; padding: 0; margin: auto 0 0; display: flex; flex-wrap: wrap; gap: 8px; }
    .cap-feat-list li { background: rgba(255,255,255,0.03); padding: 5px 12px; border-radius: 6px; font-size: 10px; font-weight: 800; color: #607d8b; border: 1px solid rgba(255,255,255,0.05); text-transform: uppercase; }

    .comp-box { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; padding: 60px; margin-top: 60px; }
    .comp-row { display: grid; grid-template-columns: 1.5fr 1fr 1fr; gap: 40px; padding: 25px 0; border-bottom: 1px solid rgba(255,255,255,0.05); }
    .comp-header { font-weight: 800; color: #fff; text-transform: uppercase; letter-spacing: 1px; font-size: 12px; }
    .comp-val { font-size: 15px; color: #94a3b8; display: flex; align-items: center; gap: 10px; }
    .comp-val.best { color: #fff; font-weight: 700; }
    .comp-val.best i { color: #22c55e; }

    @media (max-width: 1199px) { .cap-grid-massive { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 991px) { .cap-grid-massive, .comp-row { grid-template-columns: 1fr; } }
</style>

<div class="creative-main">
    <div class="web-fixed-bg" id="shoot-fx-bg"></div>

    <section class="web-hero">
        <div class="hero-grid"></div>
        <div class="container">
            <div class="tech-badge" data-aos="fade-down">High-Fidelity Capture</div>
            <h1 data-aos="zoom-in">Commercial <br> <span class="gradient-shoot-text">Photoshoot Excellence</span></h1>
            <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 19px; line-height: 1.8;" data-aos="fade-up">Engineering visual perfection through professional lighting, high-res optics, and high-end post-production workflows.</p>
        </div>
    </section>

    <!-- ASSEMBLY LINE -->
    <section class="content-block" style="background: #080b12; border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Production Protocol</div>
                <h2 class="section-title">The Capture <br> <span class="gradient-shoot-text">Delivery Flow</span></h2>
            </div>
            <div class="flow-timeline">
                <div class="flow-step" data-aos="fade-right">
                    <h5>Pre-Production</h5>
                    <p>Architecting lighting maps, gear selection, and location scouting for absolute visual control.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="100">
                    <h5>RAW Capture</h5>
                    <p>Executing high-fidelity photoshoots using professional sensors and ultra-sharp lens arrays.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="200">
                    <h5>Technical Retouching</h5>
                    <p>Post-processing using non-destructive workflows, focus stacking, and color correction protocols.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="300">
                    <h5>Final Mastering</h5>
                    <p>Exporting high-speed digital assets and print-ready high-resolution deliverables.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="content-block">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">System Scope</div>
                <h2 class="section-title">Capture Engineering <span class="gradient-shoot-text">Matrix</span></h2>
            </div>
            <div class="cap-grid-massive">
                <div class="glass-card" data-aos="fade-up">
                    <div class="cap-icon"><i class="fas fa-boxes-packing"></i></div>
                    <h4>Product <br> Photography</h4>
                    <p>Clean, high-fidelity shots optimized for e-commerce conversion and catalogues.</p>
                    <ul class="cap-feat-list"><li>Macro Stacks</li><li>Pure White</li><li>Lifestyle</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="cap-icon"><i class="fas fa-video"></i></div>
                    <h4>Commercial <br> Video</h4>
                    <p>Directing high-end video ads for television and high-authority digital platforms.</p>
                    <ul class="cap-feat-list"><li>4K / 8K RAW</li><li>Audio Stacks</li><li>Post-Pro</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="cap-icon"><i class="fas fa-wand-magic"></i></div>
                    <h4>Elite <br> Retouching</h4>
                    <p>Technical post-production utilizing AI-upscaling and professional color grading.</p>
                    <ul class="cap-feat-list"><li>Raw Edit</li><li>Color Grade</li><li>AI Fill</li></ul>
                </div>
            </div>
        </div>
    </section>

    <!-- COMPARISON -->
    <section class="content-block" style="background: #080b12;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Competitive Analysis</div>
                <h2 class="section-title">Phone Shoot vs <br> <span class="gradient-shoot-text">WebNexa Production</span></h2>
            </div>
            <div class="comp-box" data-aos="zoom-in">
                <div class="comp-row comp-header"><span>Features</span><span>Standard Shoot</span><span style="color:#90a4ae;">WebNexa Elite</span></div>
                <div class="comp-row"><span>Optics</span><span class="comp-val">Commercial Lenses</span><span class="comp-val best"><i class="fas fa-bolt"></i> Prime Cinema Glass</span></div>
                <div class="comp-row"><span>Editing</span><span class="comp-val">Basic Filters</span><span class="comp-val best"><i class="fas fa-microchip"></i> High-End RAW Post-Pro</span></div>
                <div class="comp-row"><span>Lighting</span><span class="comp-val">Natural/Ambient</span><span class="comp-val best"><i class="fas fa-chart-line"></i> 3-Point Controlled Strobe</span></div>
                <div class="comp-row" style="border:none;"><span>Detail</span><span class="comp-val">Compressed JPEG</span><span class="comp-val best"><i class="fas fa-desktop"></i> Uncompressed 16-Bit</span></div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background: #607d8b; color:#fff;">
        <div class="container d-flex justify-content-between align-items-center flex-wrap gap-3">
            <h4 style="margin:0; font-weight:900;">STUDIO PRODUCTION PROTOCOL ACTIVE</h4>
            <div style="font-weight:700; letter-spacing:1px; background:rgba(0,0,0,0.2); padding:10px 25px; border-radius:50px;">STATUS: VISUAL PERFECTION</div>
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