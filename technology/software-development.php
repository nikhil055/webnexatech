<?php 
$page_title = 'Enterprise Software Engineering | WebNexa';
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
    .content-block { padding: 140px 0; position: relative; z-index: 10; }
    .container { position: relative; z-index: 10; max-width: 1350px; }
    .glass-card { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; backdrop-filter: blur(40px); transition: 0.4s; padding: 50px; height: 100%; display: flex; flex-direction: column; }
    .glass-card:hover { border-color: rgba(114, 79, 255, 0.4); transform: translateY(-10px); background: rgba(114, 79, 255, 0.03); }

    /* 1. HERO */
    .web-hero { position: relative; padding: 220px 0 120px; background: #080b12; overflow: hidden; text-align: center; }
    .hero-grid { position: absolute; inset: 0; background-image: radial-gradient(rgba(114, 79, 255, 0.05) 1px, transparent 1px); background-size: 50px 50px; transform: perspective(500px) rotateX(60deg); }
    .web-hero h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; line-height: 0.95; margin-bottom: 30px; }

    /* 2. ASSEMBLY LINE */
    .flow-timeline { position: relative; max-width: 900px; margin: 60px auto 0; padding-left: 80px; }
    .flow-timeline::before { content: ""; position: absolute; left: 30px; top: 0; height: 100%; width: 2px; background: linear-gradient(to bottom, rgb(114, 79, 255), transparent); }
    .flow-step { position: relative; margin-bottom: 60px; }
    .flow-step::after { content: ""; position: absolute; left: -58px; top: 0; width: 16px; height: 18px; background: #05070a; border: 4px solid rgb(114, 79, 255); border-radius: 50%; box-shadow: 0 0 20px rgb(114, 79, 255); z-index: 5; }
    .flow-step h5 { font-size: 22px; font-weight: 800; color: #fff; margin-bottom: 10px; }
    .flow-step p { font-size: 16px; color: #94a3b8; }

    /* 3. CAPABILITIES */
    .cap-grid-massive { display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; margin-top: 60px; }
    .cap-icon { width: 55px; height: 55px; background: rgba(114, 79, 255, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 22px; color: rgb(114, 79, 255); margin-bottom: 25px; transition: 0.4s; }
    .glass-card h4 { font-size: 22px; font-weight: 800; margin-bottom: 15px; color: #fff; }
    .cap-feat-list { list-style: none; padding: 0; margin: auto 0 0; display: flex; flex-wrap: wrap; gap: 8px; }
    .cap-feat-list li { background: rgba(255,255,255,0.03); padding: 5px 12px; border-radius: 6px; font-size: 10px; font-weight: 800; color: rgb(216, 115, 255); border: 1px solid rgba(255,255,255,0.05); text-transform: uppercase; }

    /* 4. COMPARISON */
    .comp-box { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; padding: 60px; margin-top: 60px; }
    .comp-row { display: grid; grid-template-columns: 1.5fr 1fr 1fr; gap: 40px; padding: 25px 0; border-bottom: 1px solid rgba(255,255,255,0.05); }
    .comp-header { font-weight: 800; color: #fff; text-transform: uppercase; letter-spacing: 1px; font-size: 12px; }
    .comp-val { font-size: 15px; color: #94a3b8; display: flex; align-items: center; gap: 10px; }
    .comp-val.best { color: #fff; font-weight: 700; }
    .comp-val.best i { color: #22c55e; }

    /* 5. PERF BOX */
    .perf-box { background: rgba(114, 79, 255, 0.05); border: 1px solid rgba(114, 79, 255, 0.1); border-radius: 40px; padding: 60px; display: flex; align-items: center; gap: 60px; }
    .perf-circle { width: 180px; height: 180px; border: 8px solid rgba(34, 197, 94, 0.1); border-radius: 50%; display: flex; flex-direction: column; align-items: center; justify-content: center; background: rgba(0,0,0,0.3); }
    .perf-circle h2 { font-size: 64px; font-weight: 900; color: #22c55e; margin: 0; }

    @media (max-width: 1199px) { .cap-grid-massive { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 991px) { .cap-grid-massive, .comp-row { grid-template-columns: 1fr; } .perf-box { flex-direction: column; text-align: center; } }
</style>

<div class="web-dev-main">
    <div class="web-fixed-bg" id="web-data-bg"></div>

    <!-- 1. HERO -->
    <section class="web-hero">
        <div class="hero-grid"></div>
        <div class="container">
            <div class="tech-badge" data-aos="fade-down">Enterprise Systems</div>
            <h1 data-aos="zoom-in">Custom Software <br> <span class="gradient-tech-text">Engineering</span></h1>
            <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 19px; line-height: 1.8;" data-aos="fade-up">We architect bespoke software systems, automating complex workflows and scaling enterprise operations through rigorous logic mapping.</p>
        </div>
    </section>

    <!-- 2. ASSEMBLY LINE -->
    <section class="content-block" style="background: #080b12; border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Execution Protocol</div>
                <h2 class="section-title">The Engineering <br> <span class="gradient-tech-text">Production Line</span></h2>
            </div>
            <div class="flow-timeline">
                <div class="flow-step" data-aos="fade-right">
                    <h5>Architectural Discovery</h5>
                    <p>Mapping legacy system gaps and defining the future microservices blueprint.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="100">
                    <h5>Core Logic Development</h5>
                    <p>Engineering robust backends with Python, Node, or Java focusing on data integrity.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="200">
                    <h5>API & Security Layer</h5>
                    <p>Building secure REST/GraphQL endpoints with AES-256 encrypted data tunnels.</p>
                </div>
                <div class="flow-step" data-aos="fade-right" data-aos-delay="300">
                    <h5>DevOps Orchestration</h5>
                    <p>Containerized deployment using Docker and Kubernetes for zero-downtime scaling.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. CAPABILITIES -->
    <section class="content-block">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">System Scope</div>
                <h2 class="section-title">Software Engineering <span class="gradient-tech-text">Matrix</span></h2>
            </div>
            <div class="cap-grid-massive">
                <div class="glass-card" data-aos="fade-up">
                    <div class="cap-icon"><i class="fas fa-sitemap"></i></div>
                    <h4>Enterprise ERP <br> Ecosystems</h4>
                    <p>Centralized resource planning platforms linking inventory, HR, and finance.</p>
                    <ul class="cap-feat-list"><li>API First</li><li>RBAC Auth</li><li>Live Sync</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="cap-icon"><i class="fas fa-users-gear"></i></div>
                    <h4>Custom CRM <br> Portals</h4>
                    <p>Intelligent customer relationship managers built to automate sales pipelines.</p>
                    <ul class="cap-feat-list"><li>Auto-Assign</li><li>Email Sync</li><li>Sales Viz</li></ul>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="cap-icon"><i class="fas fa-database"></i></div>
                    <h4>Big Data <br> Architecture</h4>
                    <p>Engineering robust data pipelines for real-time processing and BI reporting.</p>
                    <ul class="cap-feat-list"><li>ElasticSearch</li><li>Redis</li><li>Data Lakes</li></ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. COMPARISON -->
    <section class="content-block" style="background: #080b12;">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Competitive Analysis</div>
                <h2 class="section-title">Standard Dev vs <br> <span class="gradient-tech-text">WebNexa Engineering</span></h2>
            </div>
            <div class="comp-box" data-aos="zoom-in">
                <div class="comp-row comp-header"><span>Features</span><span>Standard Dev</span><span style="color:rgb(216, 115, 255);">WebNexa Elite</span></div>
                <div class="comp-row"><span>Architecture</span><span class="comp-val">Monolithic</span><span class="comp-val best"><i class="fas fa-layer-group"></i> Microservices</span></div>
                <div class="comp-row"><span>Testing</span><span class="comp-val">Manual Unit</span><span class="comp-val best"><i class="fas fa-shield-halved"></i> Automated CI/CD</span></div>
                <div class="comp-row"><span>Maintenance</span><span class="comp-val">Reactive Only</span><span class="comp-val best"><i class="fas fa-heart-pulse"></i> 24/7 Predictive</span></div>
                <div class="comp-row" style="border:none;"><span>Database</span><span class="comp-val">Static DB</span><span class="comp-val best"><i class="fas fa-database"></i> High-Load Sharding</span></div>
            </div>
        </div>
    </section>

    <!-- 5. BENCHMARKING -->
    <section class="content-block">
        <div class="container">
            <div class="perf-box" data-aos="zoom-in">
                <div class="perf-circle"><h2>99.9</h2><span>Uptime %</span></div>
                <div class="flex-grow-1">
                    <h3 style="font-weight: 900; margin-bottom: 25px;">Engineered for <br> <span class="gradient-tech-text">Zero-Fault Reliability</span></h3>
                    <p style="color: #94a3b8; font-size: 17px;">Our software architectures are designed to maintain 100% data integrity even under extreme operational stress.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. MAINTENANCE STRIP -->
    <section class="py-5" style="background: rgb(114, 79, 255); color:#fff;">
        <div class="container d-flex justify-content-between align-items-center flex-wrap gap-3">
            <h4 style="margin:0; font-weight:900;">24/7 SYSTEM GOVERNANCE ACTIVE</h4>
            <div style="font-weight:700; letter-spacing:1px; background:rgba(0,0,0,0.2); padding:10px 25px; border-radius:50px;">STATUS: FULLY OPERATIONAL</div>
        </div>
    </section>

    <!-- 7. CTA -->
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
