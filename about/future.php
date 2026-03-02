<?php 
$page_title = 'Future Roadmap | WebNexa';
include_once __DIR__ . '/../config.php'; 
include_once __DIR__ . '/../header-new.php'; 
?>

<style>
    .future-main { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    
    /* FUTURISTIC BANNER */
    .future-hero { position: relative; padding: 220px 0 120px; background: #080b12; overflow: hidden; text-align: center; }
    .neon-pulse { position: absolute; top: 50%; left: 50%; width: 600px; height: 600px; background: radial-gradient(circle, rgba(221, 0, 184, 0.15) 0%, transparent 70%); transform: translate(-50%, -50%); filter: blur(80px); animation: pulseNeon 4s infinite alternate; }
    @keyframes pulseNeon { 0% { transform: translate(-50%, -50%) scale(1); opacity: 0.5; } 100% { transform: translate(-50%, -50%) scale(1.2); opacity: 0.8; } }
    
    .future-hero h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; line-height: 0.95; position: relative; z-index: 10; }

    /* PILLAR GRID */
    .pillar-section { padding: 120px 0; position: relative; z-index: 10; }
    .pillar-grid-v2 { display: grid; grid-template-columns: repeat(4, 1fr); gap: 25px; }
    .pillar-card-v2 { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 35px; padding: 45px 35px; backdrop-filter: blur(40px); transition: 0.4s; }
    .pillar-card-v2:hover { border-color: rgb(216, 115, 255); transform: translateY(-12px); background: rgba(216, 115, 255, 0.03); }
    .pillar-card-v2 i { font-size: 35px; color: rgb(216, 115, 255); margin-bottom: 25px; display: block; }
    .pillar-card-v2 h4 { font-size: 22px; font-weight: 800; margin-bottom: 15px; }
    .pillar-card-v2 p { color: #94a3b8; font-size: 14.5px; line-height: 1.6; }

    /* TIMELINE */
    .timeline-v2 { position: relative; padding: 100px 0; }
    .timeline-v2::before { content: ""; position: absolute; left: 50%; top: 0; bottom: 0; width: 1px; background: linear-gradient(to bottom, transparent, rgba(114, 79, 255, 0.3), transparent); transform: translateX(-50%); }
    .timeline-item-v2 { display: flex; justify-content: space-between; align-items: center; margin-bottom: 100px; width: 100%; position: relative; }
    .timeline-item-v2:nth-child(even) { flex-direction: row-reverse; }
    .t-content { width: 45%; background: rgba(255, 255, 255, 0.01); border: 1px solid rgba(255, 255, 255, 0.08); padding: 50px; border-radius: 40px; position: relative; backdrop-filter: blur(30px); }
    .t-dot { position: absolute; left: 50%; width: 16px; height: 16px; background: rgb(114, 79, 255); border-radius: 50%; transform: translateX(-50%); box-shadow: 0 0 20px rgb(114, 79, 255); }
    .t-year { position: absolute; top: -15px; left: 50px; font-size: 45px; font-weight: 900; color: rgba(255, 255, 255, 0.03); z-index: -1; }

    @media (max-width: 991px) {
        .pillar-grid-v2 { grid-template-columns: repeat(2, 1fr); }
        .timeline-v2::before { left: 30px; }
        .timeline-item-v2, .timeline-item-v2:nth-child(even) { flex-direction: column; align-items: flex-start; padding-left: 70px; }
        .t-content { width: 100%; margin-bottom: 40px; }
        .t-dot { left: 30px; }
    }
    @media (max-width: 767px) { .pillar-grid-v2 { grid-template-columns: 1fr; } }
</style>

<div class="future-main">
    <section class="future-hero">
        <div class="neon-pulse"></div>
        <div class="container">
            <div class="tech-badge" data-aos="fade-down">Roadmap 2030</div>
            <h1 data-aos="zoom-in">The Quantum <br> <span class="gradient-tech-text">Future of Tech</span></h1>
            <p style="color: #94a3b8; max-width: 800px; margin: 30px auto 0; font-size: 19px; line-height: 1.8;" data-aos="fade-up">We aren't just observing the evolution of technology—we are architecting the protocols that will define the next decade of digital dominance.</p>
        </div>
    </section>

    <section class="pillar-section">
        <div class="container">
            <div class="pillar-grid-v2">
                <div class="pillar-card-v2" data-aos="fade-up">
                    <i class="fas fa-brain"></i>
                    <h4>Cognitive AI</h4>
                    <p>Transitioning from static automation to autonomous self-healing enterprise neural networks.</p>
                </div>
                <div class="pillar-item-v2 pillar-card-v2" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-microchip"></i>
                    <h4>Quantum Ready</h4>
                    <p>Architecting security protocols that are fortified against the next generation of quantum decryption.</p>
                </div>
                <div class="pillar-card-v2" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-server"></i>
                    <h4>Edge Supremacy</h4>
                    <p>Deploying sub-5ms latency systems through globally distributed edge-compute clusters.</p>
                </div>
                <div class="pillar-card-v2" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-leaf"></i>
                    <h4>Zero-Carbon</h4>
                    <p>Committing to 100% carbon-neutral code architectures by optimizing algorithmic efficiency.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="timeline-section" style="background: #080b12; border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="tech-badge">Strategic Milestones</div>
                <h2 class="section-title">Our Path to <span class="gradient-tech-text">Global Leadership</span></h2>
            </div>

            <div class="timeline-v2">
                <div class="timeline-item-v2" data-aos="fade-right">
                    <div class="t-dot"></div>
                    <div class="t-content">
                        <span class="t-year">2026</span>
                        <h4 class="gradient-tech-text">AI-Native Ecosystem</h4>
                        <p>Fully integrating autonomous AI agents into our development lifecycle, reducing deployment cycles by 60% while maintaining absolute code integrity.</p>
                    </div>
                    <div style="width: 45%;"></div>
                </div>

                <div class="timeline-item-v2" data-aos="fade-left">
                    <div class="t-dot"></div>
                    <div class="t-content">
                        <span class="t-year">2027</span>
                        <h4 class="gradient-tech-text">Global Hub Expansion</h4>
                        <p>Establishing three new "Excellence Centers" in London, Singapore, and New York to provide 24/7 localized high-tech support.</p>
                    </div>
                    <div style="width: 45%;"></div>
                </div>

                <div class="timeline-item-v2" data-aos="fade-right">
                    <div class="t-dot"></div>
                    <div class="t-content">
                        <span class="t-year">2028</span>
                        <h4 class="gradient-tech-text">Web 4.0 Governance</h4>
                        <p>Launching the WebNexa Decentralized Governance Protocol for enterprise-grade secure asset management.</p>
                    </div>
                    <div style="width: 45%;"></div>
                </div>

                <div class="timeline-item-v2" data-aos="fade-left">
                    <div class="t-dot"></div>
                    <div class="t-content">
                        <span class="t-year">2030</span>
                        <h4 class="gradient-tech-text">Singularity Milestone</h4>
                        <p>Achieving the world's first fully autonomous digital transformation engine for Fortune 500 enterprises.</p>
                    </div>
                    <div style="width: 45%;"></div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once __DIR__ . '/../contact-section-shared.php'; ?>
</div>

<?php include_once __DIR__ . '/../footer.php'; ?>
