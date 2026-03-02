<?php 
$page_title = 'Furniture E-Commerce Engineering | WebNexa';
include_once __DIR__ . '/../../config.php'; 
include_once __DIR__ . '/../../header-new.php'; 
?>

<style>
    .solution-main { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    .solution-hero { position: relative; padding: 220px 0 120px; background: #080b12; overflow: hidden; }
    .hero-visual { position: absolute; top: 0; right: -10%; width: 60%; height: 100%; background: radial-gradient(circle, rgba(114, 79, 255, 0.1) 0%, transparent 70%); filter: blur(100px); }
    
    .tech-matrix { display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; padding: 100px 0; }
    .matrix-card { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; padding: 45px; backdrop-filter: blur(40px); transition: 0.4s; }
    .matrix-card:hover { border-color: rgb(114, 79, 255); transform: translateY(-12px); background: rgba(114, 79, 255, 0.03); }
    .matrix-card i { font-size: 35px; color: rgb(216, 115, 255); margin-bottom: 25px; display: block; }
    
    .advantage-table { background: rgba(255, 255, 255, 0.01); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; overflow: hidden; margin-top: 60px; }
    .advantage-table th { background: rgba(114, 79, 255, 0.1); padding: 25px; font-weight: 900; color: #fff; text-transform: uppercase; letter-spacing: 2px; border-bottom: 1px solid rgba(255,255,255,0.1); }
    .advantage-table td { padding: 20px 25px; border-bottom: 1px solid rgba(255,255,255,0.05); color: #94a3b8; font-size: 15px; }
    .check-v { color: #10b981; margin-right: 10px; }
</style>

<div class="solution-main">
    <section class="solution-hero">
        <div class="hero-visual"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="tech-badge">Spatial Commerce Protocol</div>
                    <h1 class="display-3 fw-900 mb-4">Furniture Store <br> <span class="gradient-tech-text">Engineering</span></h1>
                    <p class="lead opacity-75 mb-5">Architecting immersive commerce for home decor. We deploy 3D room planners, AR product placement, and high-load logistics engines for enterprise furniture retailers.</p>
                    <div class="d-flex gap-3">
                        <a href="#matrix" class="btn btn-style-one">Technical Specs</a>
                        <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn-style-one outline">System Audit</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATUS STRIP -->
    <div style="background: #000; border-y: 1px solid rgba(255,255,255,0.1); padding: 15px 0;">
        <div class="container d-flex justify-content-between align-items-center font-monospace opacity-50 small">
            <span>MODELS: GLB / USDZ</span>
            <span>ENGINE: THREE.JS + ARCORE</span>
            <span>LOGISTICS: BULK INTEGRATED</span>
            <span>UX: 360° SPATIAL RENDER</span>
        </div>
    </div>

    <section class="container py-5" id="matrix">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="tech-badge">The Mastery Matrix</div>
            <h2 class="display-5 fw-900">Furniture <span class="gradient-tech-text">Tech Modules</span></h2>
        </div>

        <div class="tech-matrix">
            <div class="matrix-card" data-aos="fade-up">
                <i class="fas fa-couch"></i>
                <h4>3D Room Visualizer</h4>
                <p>Interactive 3D environment using Three.js allowing users to drag and drop furniture into a virtual version of their living space.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-expand-arrows-alt"></i>
                <h4>AR Core Placement</h4>
                <p>Augmented Reality module that uses the device camera to place true-to-scale 3D furniture models in a real room.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="200">
                <i class="fas fa-truck-loading"></i>
                <h4>Bulk Logistics API</h4>
                <p>Custom logistics engine integrated with heavy-freight carriers for automated shipping quotes and white-glove delivery scheduling.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="300">
                <i class="fas fa-palette"></i>
                <h4>Texture Swatcher</h4>
                <p>High-fidelity material switcher allowing users to see real-time changes in fabric, wood grain, and leather textures.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="400">
                <i class="fas fa-layer-group"></i>
                <h4>Bundle Engineering</h4>
                <p>Smart "Shop the Look" logic that automatically calculates discounts for full-room furniture sets.</p>
            </div>
            <div class="matrix-card" data-aos="fade-up" data-aos-delay="500">
                <i class="fas fa-calendar-check"></i>
                <h4>Installation Sync</h4>
                <p>Post-purchase module that syncs local installation teams with delivery windows for a seamless customer experience.</p>
            </div>
        </div>

        <div class="advantage-table" data-aos="fade-up">
            <table class="w-100">
                <thead>
                    <tr>
                        <th style="width: 40%;">Technical Advantage</th>
                        <th style="width: 30%;">Standard Solution</th>
                        <th style="width: 30%;">WebNexa Elite</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Product View</td>
                        <td>2D Static Images</td>
                        <td><i class="fas fa-check-circle check-v"></i> 360° Interactive 3D</td>
                    </tr>
                    <tr>
                        <td>Scale Accuracy</td>
                        <td>Generic Dimensions</td>
                        <td><i class="fas fa-check-circle check-v"></i> AR True-to-Scale</td>
                    </tr>
                    <tr>
                        <td>Shipping Logic</td>
                        <td>Flat Rate / Simple</td>
                        <td><i class="fas fa-check-circle check-v"></i> Dynamic Freight Matrix</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <?php include_once __DIR__ . '/../../contact-section-shared.php'; ?>
</div>

<?php include_once __DIR__ . '/../../footer.php'; ?>
