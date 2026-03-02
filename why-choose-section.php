<?php include_once 'config.php'; ?>
<style>
    .why-tech-v2 {
        position: relative;
        padding: 140px 0;
        background: #080b12;
        color: #fff;
        font-family: 'Inter', sans-serif;
        overflow: hidden;
    }

    /* ANIMATED TECH BACKGROUND */
    .why-bg-elements { position: absolute; inset: 0; z-index: 1; pointer-events: none; }
    
    .floating-shape {
        position: absolute;
        color: rgba(114, 79, 255, 0.15);
        font-size: 20px;
        animation: floatAround 15s infinite linear;
    }

    @keyframes floatAround {
        0% { transform: translate(0, 0) rotate(0deg); opacity: 0; }
        20% { opacity: 0.4; }
        80% { opacity: 0.4; }
        100% { transform: translate(100px, -100px) rotate(360deg); opacity: 0; }
    }

    .glow-sphere {
        position: absolute;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(114, 79, 255, 0.08) 0%, transparent 70%);
        filter: blur(60px);
        animation: moveGlow 12s infinite alternate ease-in-out;
    }

    @keyframes moveGlow {
        0% { transform: translate(-10%, -10%); }
        100% { transform: translate(20%, 20%); }
    }

    .container { position: relative; z-index: 10; }

    .why-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(114, 79, 255, 0.1);
        border: 1px solid rgba(114, 79, 255, 0.2);
        padding: 6px 18px;
        border-radius: 100px;
        font-size: 12px;
        font-weight: 700;
        color: rgb(216, 115, 255);
        margin-bottom: 25px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .why-tech-v2 h2 {
        font-size: clamp(32px, 4.5vw, 54px);
        font-weight: 900;
        line-height: 1.1;
        margin-bottom: 60px;
        letter-spacing: -2px;
    }

    /* WHY CARDS - ENHANCED */
    .why-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 25px; }

    .why-card {
        background: rgba(255, 255, 255, 0.015);
        border: 1px solid rgba(255, 255, 255, 0.06);
        padding: 50px 35px;
        border-radius: 35px;
        transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        backdrop-filter: blur(20px);
        position: relative;
        overflow: hidden;
    }

    /* Scanner Sweep Effect */
    .why-card::after {
        content: "";
        position: absolute;
        top: -100%;
        left: -100%;
        width: 300%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(114, 79, 255, 0.05), transparent);
        transform: rotate(45deg);
        transition: 0s;
    }

    .why-card:hover::after {
        top: 100%;
        left: 100%;
        transition: 1s;
    }

    .why-card:hover {
        transform: translateY(-15px) scale(1.02);
        border-color: rgba(114, 79, 255, 0.4);
        background: rgba(255, 255, 255, 0.03);
        box-shadow: 0 30px 60px -15px rgba(0,0,0,0.6);
    }

    .w-icon-box {
        width: 65px;
        height: 65px;
        background: rgba(114, 79, 255, 0.1);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 30px;
        font-size: 26px;
        color: rgb(114, 79, 255);
        transition: 0.4s;
        position: relative;
    }

    /* Icon Pulse Animation */
    .w-icon-box::before {
        content: "";
        position: absolute;
        inset: -5px;
        border: 2px solid rgba(114, 79, 255, 0.2);
        border-radius: 24px;
        animation: iconPulse 2s infinite;
        opacity: 0;
    }

    .why-card:hover .w-icon-box::before { opacity: 1; }

    @keyframes iconPulse {
        0% { transform: scale(1); opacity: 0.5; }
        100% { transform: scale(1.3); opacity: 0; }
    }

    .why-card h4 { font-size: 22px; font-weight: 800; margin-bottom: 15px; letter-spacing: -0.5px; }
    .why-card p { font-size: 15px; color: #94a3b8; line-height: 1.7; margin: 0; }

    /* STATS BAR */
    .why-stats-bar {
        margin-top: 100px;
        background: linear-gradient(90deg, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.01) 100%);
        border: 1px solid rgba(255, 255, 255, 0.06);
        padding: 50px;
        border-radius: 45px;
        display: flex;
        justify-content: space-around;
        backdrop-filter: blur(15px);
    }

    .stat-node { text-align: center; position: relative; }
    .stat-node h3 { 
        font-size: 48px; 
        font-weight: 900; 
        margin-bottom: 8px; 
        background: linear-gradient(to bottom, #fff 30%, rgba(255,255,255,0.4) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .stat-node span { font-size: 11px; font-weight: 800; color: rgb(216, 115, 255); text-transform: uppercase; letter-spacing: 2px; }

    @media (max-width: 1199px) { .why-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 767px) { 
        .why-grid { grid-template-columns: 1fr; } 
        .why-stats-bar { flex-direction: column; gap: 50px; text-align: center; }
        .why-tech-v2 { padding: 80px 0; text-align: center; }
        .w-icon-box { margin: 0 auto 30px; }
    }
</style>

<section class="why-tech-v2">
    <!-- Animated Background Elements -->
    <div class="why-bg-elements">
        <div class="glow-sphere" style="top: 10%; right: 10%;"></div>
        <div class="glow-sphere" style="bottom: 10%; left: 5%; animation-delay: -6s;"></div>
        
        <!-- Floating Symbols -->
        <i class="fas fa-plus floating-shape" style="top: 20%; left: 15%; animation-delay: 0s;"></i>
        <i class="fas fa-plus floating-shape" style="top: 60%; right: 20%; animation-delay: 3s;"></i>
        <i class="fas fa-circle floating-shape" style="top: 40%; left: 40%; font-size: 8px; animation-delay: 5s;"></i>
        <i class="fas fa-hexagon floating-shape" style="bottom: 20%; left: 30%; animation-delay: 7s;"></i>
    </div>

    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="why-badge"><i class="fas fa-shield-halved"></i> The WebNexa Edge</div>
            <h2>Engineering Excellence <br> <span class="gradient-tech-text">Beyond Expectations</span></h2>
        </div>

        <div class="why-grid mt-5">
            <!-- 01: Speed -->
            <div class="why-card" data-aos="fade-up" data-aos-delay="100">
                <div class="w-icon-box"><i class="fas fa-bolt-lightning"></i></div>
                <h4>Hyper Speed <br> Performance</h4>
                <p>Our code is benchmarked for sub-second responses, ensuring zero latency even under high user loads.</p>
            </div>

            <!-- 02: Scale -->
            <div class="why-card" data-aos="fade-up" data-aos-delay="200">
                <div class="w-icon-box"><i class="fas fa-layer-group"></i></div>
                <h4>Cloud-Native <br> Scalability</h4>
                <p>We architect modular systems that scale horizontally, growing effortlessly as your business explodes.</p>
            </div>

            <!-- 03: Security -->
            <div class="why-card" data-aos="fade-up" data-aos-delay="300">
                <div class="w-icon-box"><i class="fas fa-fingerprint"></i></div>
                <h4>Fortified <br> Security</h4>
                <p>Military-grade encryption and HIPAA/PCI compliance are baked into the core of our development flow.</p>
            </div>

            <!-- 04: Logic -->
            <div class="why-card" data-aos="fade-up" data-aos-delay="400">
                <div class="w-icon-box"><i class="fas fa-brain"></i></div>
                <h4>Intelligent <br> Engineering</h4>
                <p>From AI-matching to automated workflows, we build systems that think and work for your business.</p>
            </div>
        </div>

        <!-- Animated Stats Bar -->
        <div class="why-stats-bar" data-aos="zoom-in" data-aos-delay="500">
            <div class="stat-node">
                <h3>99.9%</h3>
                <span>Infrastructure Uptime</span>
            </div>
            <div class="stat-node">
                <h3>500+</h3>
                <span>Systems Deployed</span>
            </div>
            <div class="stat-node">
                <h3>10+</h3>
                <span>Years Innovation</span>
            </div>
            <div class="stat-node">
                <h3>24/7</h3>
                <span>Engineer Support</span>
            </div>
        </div>
    </div>
</section>
