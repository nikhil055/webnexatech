<?php 
$page_title = 'Graphics & Motion Design | WebNexa';
include_once __DIR__ . '/../config.php'; 
include_once __DIR__ . '/../header-new.php'; 
?>

<style>
    .creative-main { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    .web-fixed-bg { position: fixed; inset: 0; z-index: 1; pointer-events: none; opacity: 0.2; }
    .data-drop { position: absolute; width: 1px; height: 100px; background: linear-gradient(to bottom, transparent, #6200ea, transparent); animation: dropMove 5s infinite linear; }
    @keyframes dropMove { 0% { transform: translateY(-100px); opacity: 0; } 50% { opacity: 0.5; } 100% { transform: translateY(100vh); opacity: 0; } }

    .tech-badge { display: inline-flex; align-items: center; gap: 8px; background: rgba(98, 0, 234, 0.1); border: 1px solid rgba(98, 0, 234, 0.2); padding: 6px 18px; border-radius: 100px; font-size: 12px; font-weight: 800; color: #6200ea; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 25px; }
    .section-title { font-size: clamp(32px, 4.5vw, 54px); font-weight: 900; line-height: 1.1; letter-spacing: -2px; }
    .gradient-motion-text { background: linear-gradient(90deg, #6200ea, #aa00ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    
    .content-block { padding: 120px 0; position: relative; z-index: 10; }
    .container { position: relative; z-index: 10; max-width: 1350px; }
    .glass-card { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; backdrop-filter: blur(40px); transition: 0.4s; padding: 45px; height: 100%; display: flex; flex-direction: column; }
    .glass-card:hover { border-color: #6200ea; transform: translateY(-10px); background: rgba(98, 0, 234, 0.03); }

    .web-hero { position: relative; padding: 220px 0 120px; background: #080b12; overflow: hidden; text-align: center; }
    .hero-grid { position: absolute; inset: 0; background-image: radial-gradient(rgba(98, 0, 234, 0.05) 1px, transparent 1px); background-size: 50px 50px; transform: perspective(500px) rotateX(60deg); }
    .web-hero h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; line-height: 0.95; margin-bottom: 30px; }

    .flow-timeline { position: relative; max-width: 900px; margin: 60px auto 0; padding-left: 80px; }
    .flow-timeline::before { content: ""; position: absolute; left: 30px; top: 0; height: 100%; width: 2px; background: linear-gradient(to bottom, #6200ea, transparent); }
    .flow-step { position: relative; margin-bottom: 60px; }
    .flow-step::after { content: ""; position: absolute; left: -58px; top: 0; width: 16px; height: 18px; background: #05070a; border: 4px solid #6200ea; border-radius: 50%; box-shadow: 0 0 20px #6200ea; z-index: 5; }
    .flow-step h5 { font-size: 22px; font-weight: 800; color: #fff; margin-bottom: 10px; }
    .flow-step p { font-size: 16px; color: #94a3b8; }

    .cap-grid-massive { display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; margin-top: 60px; }
    .cap-icon { width: 55px; height: 55px; background: rgba(98, 0, 234, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 22px; color: #6200ea; margin-bottom: 25px; transition: 0.4s; }
    .cap-feat-list { list-style: none; padding: 0; margin: auto 0 0; display: flex; flex-wrap: wrap; gap: 8px; }
    .cap-feat-list li { background: rgba(255,255,255,0.03); padding: 5px 12px; border-radius: 6px; font-size: 10px; font-weight: 800; color: #6200ea; border: 1px solid rgba(255,255,255,0.05); text-transform: uppercase; }

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
    <div class="web-fixed-bg" id="motion-fx-bg"></div>

    <section class="web-hero">
        <div class="hero-grid"></div>
        <div class="container">
            <div class="tech-badge" data-aos="fade-down">Kinetic Storytelling</div>
            <h1 data-aos="zoom-in">Dynamic Graphics <br> <span class="gradient-motion-text">& Motion Engineering</span></h1>
            <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 19px; line-height: 1.8;" data-aos="fade-up">Breathing life into brands through high-end visual effects and complex kinetic typography systems.</p>
        </div>
    </section>

    <!-- ASSEMBLY LINE -->
    <section class="content-block" style="background: #080b12; border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Studio Protocol</div>
                <h2 class="section-title">The Motion <br> <span class="gradient-motion-text">Production Line</span></h2>
            </div>
            <div class="flow-timeline">
                <div class="flow-step" data-aos="fade-right">
                    <h5>Storyboarding</h5>
                    <p>Architecting frame-by-phase storyboards to map out visual flow and emotional impact.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="100">
                    <h5>Mesh & VFX Setup</h5>
                    <p>Engineering 3D meshes and high-end visual effect environments in After Effects and Cinema 4D.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="200">
                    <h5>Kinetic Rendering</h5>
                    <p>High-speed rendering of complex keyframe animations with focus on fluid motion curves.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="300">
                    <h5>Post-Pro Mastering</h5>
                    <p>Professional color grading and sound design to ensure absolute cinematic quality.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="content-block">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">System Scope</div>
                <h2 class="section-title">Motion Engineering <span class="gradient-motion-text">Matrix</span></h2>
            </div>
            <div class="cap-grid-massive">
                <div class="glass-card" data-aos="fade-up">
                    <div class="cap-icon"><i class="fas fa-film"></i></div>
                    <h4>High-End <br> Motion Graphics</h4>
                    <p>Explainer videos and brand assets using industry-standard Adobe After Effects workflows.</p>
                    <ul class="cap-feat-list"><li>Lottie UI</li><li>Keyframe Pro</li><li>Visual FX</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="cap-icon"><i class="fas fa-cubes"></i></div>
                    <h4>3D Visual <br> Engineering</h4>
                    <p>High-fidelity 3D product renders and animations using Cinema 4D and Blender.</p>
                    <ul class="cap-feat-list"><li>Octane Render</li><li>Mesh Logic</li><li>PBR Stacks</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="cap-icon"><i class="fas fa-keyboard"></i></div>
                    <h4>Kinetic <br> Typography</h4>
                    <p>Engineering complex text animations that communicate messages with absolute clarity.</p>
                    <ul class="cap-feat-list"><li>Dynamic Font</li><li>Bezier Sync</li><li>Tempo Maps</li></ul>
                </div>
            </div>
        </div>
    </section>

    <!-- COMPARISON -->
    <section class="content-block" style="background: #080b12;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Competitive Analysis</div>
                <h2 class="section-title">Stock Motion vs <br> <span class="gradient-motion-text">WebNexa Engineering</span></h2>
            </div>
            <div class="comp-box" data-aos="zoom-in">
                <div class="comp-row comp-header"><span>Features</span><span>Standard Motion</span><span style="color:#aa00ff;">WebNexa Elite</span></div>
                <div class="comp-row"><span>Rendering</span><span class="comp-val">Compressed Low-Bit</span><span class="comp-val best"><i class="fas fa-bolt"></i> Ultra-HD Lossless</span></div>
                <div class="comp-row"><span>Logic</span><span class="comp-val">Random Movement</span><span class="comp-val best"><i class="fas fa-microchip"></i> Math-Based Curve Flow</span></div>
                <div class="comp-row"><span>VFX</span><span class="comp-val">Basic Filters</span><span class="comp-val best"><i class="fas fa-chart-line"></i> Technical Visual Effects</span></div>
                <div class="comp-row" style="border:none;"><span>Audio</span><span class="comp-val">Stock SFX</span><span class="comp-val best"><i class="fas fa-desktop"></i> Custom Sound Engineering</span></div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background: #6200ea; color:#fff;">
        <div class="container d-flex justify-content-between align-items-center flex-wrap gap-3">
            <h4 style="margin:0; font-weight:900;">24/7 RENDERING ENGINE ACTIVE</h4>
            <div style="font-weight:700; letter-spacing:1px; background:rgba(0,0,0,0.2); padding:10px 25px; border-radius:50px;">STATUS: KINETIC PERFECTION</div>
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