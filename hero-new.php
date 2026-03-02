<?php include_once 'config.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    /* High-Tech Premium Hero */
    .hero-tech-v2 {
        position: relative;
        min-height: 100vh;
        background: #080b12;
        /* Deep Tech Navy */
        overflow: hidden;
        display: flex;
        align-items: center;
        padding: 140px 0 100px;
        font-family: 'Inter', sans-serif;
        color: #ffffff;
    }

    /* Modern Grid & Glow Background */
    .tech-bg-layers {
        position: absolute;
        inset: 0;
        z-index: 1;
        overflow: hidden;
    }

    /* Subtle Tech Grid */
    .tech-grid {
        position: absolute;
        width: 200%;
        height: 200%;
        top: -50%;
        left: -50%;
        background-image:
            linear-gradient(rgba(114, 79, 255, 0.05) 1px, transparent 1px),
            linear-gradient(90deg, rgba(114, 79, 255, 0.05) 1px, transparent 1px);
        background-size: 50px 50px;
        transform: perspective(500px) rotateX(60deg);
        animation: gridMove 20s linear infinite;
    }

    @keyframes gridMove {
        0% {
            transform: perspective(500px) rotateX(60deg) translateY(0);
        }

        100% {
            transform: perspective(500px) rotateX(60deg) translateY(50px);
        }
    }

    /* Futuristic Glow Spots */
    .tech-glow {
        position: absolute;
        border-radius: 50%;
        filter: blur(120px);
        opacity: 0.15;
        z-index: 2;
        animation: pulseGlow 8s infinite alternate ease-in-out;
    }

    .glow-cyan {
        width: 500px;
        height: 500px;
        background: rgb(114, 79, 255);
        top: -100px;
        right: -50px;
    }

    .glow-purple {
        width: 600px;
        height: 600px;
        background: rgb(221, 0, 184);
        bottom: -150px;
        left: -100px;
        animation-delay: -4s;
    }

    @keyframes pulseGlow {
        0% {
            transform: scale(1) translate(0, 0);
            opacity: 0.15;
        }

        100% {
            transform: scale(1.3) translate(50px, 30px);
            opacity: 0.25;
        }
    }

    /* Scanning Laser Effect */
    .scan-line {
        position: absolute;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, rgba(114, 79, 255, 0.5), transparent);
        z-index: 4;
        top: 0;
        animation: scanMove 6s infinite linear;
    }

    @keyframes scanMove {
        0% {
            top: -10%;
            opacity: 0;
        }

        10% {
            opacity: 1;
        }

        90% {
            opacity: 1;
        }

        100% {
            top: 110%;
            opacity: 0;
        }
    }

    /* Circuit Paths */
    .circuit-path {
        position: absolute;
        background: rgba(114, 79, 255, 0.2);
        z-index: 2;
    }

    .cp-v {
        width: 1px;
        height: 0;
        animation: drawV 4s infinite;
    }

    .cp-h {
        height: 1px;
        width: 0;
        animation: drawH 4s infinite;
    }

    @keyframes drawV {
        0% {
            height: 0;
            opacity: 0;
        }

        50% {
            height: 300px;
            opacity: 1;
        }

        100% {
            height: 300px;
            opacity: 0;
        }
    }

    @keyframes drawH {
        0% {
            width: 0;
            opacity: 0;
        }

        50% {
            width: 300px;
            opacity: 1;
        }

        100% {
            width: 300px;
            opacity: 0;
        }
    }

    /* Floating Particles */
    .particles-container {
        position: absolute;
        inset: 0;
        z-index: 3;
        pointer-events: none;
    }

    .particle {
        position: absolute;
        background: #fff;
        border-radius: 50%;
        opacity: 0.3;
        animation: floatParticle 15s infinite linear;
    }

    @keyframes floatParticle {
        0% {
            transform: translateY(0) translateX(0);
            opacity: 0;
        }

        10% {
            opacity: 0.4;
        }

        90% {
            opacity: 0.4;
        }

        100% {
            transform: translateY(-100vh) translateX(50px);
            opacity: 0;
        }
    }

    .container-fluid {
        position: relative;
        z-index: 10;
    }

    /* Tech Typography */
    .tech-tag {
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
        margin-bottom: 30px;
        text-transform: uppercase;
        letter-spacing: 2px;
        backdrop-filter: blur(5px);
    }

    .hero-tech-v2 h1 {
        font-size: clamp(32px, 4.5vw, 80px);
        /* Reduced from 68px */
        font-weight: 800;
        line-height: 1.15;
        margin-bottom: 20px;
        letter-spacing: -1.5px;
    }

    .gradient-tech-text {
        background: linear-gradient(90deg, rgb(114, 79, 255) 0%, rgb(216, 115, 255) 50%, rgb(221, 0, 184) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: inline-block;
    }

    .hero-tech-v2 p {
        font-size: 17px;
        /* Reduced from 19px */
        color: #94a3b8;
        max-width: 540px;
        line-height: 1.7;
        margin-bottom: 40px;
        font-weight: 400;
    }

    /* Cyber Buttons */
    .tech-actions {
        display: flex;
        gap: 20px;
        align-items: center;
    }

    .btn-cyber-primary {
        background: linear-gradient(90deg, rgb(114, 79, 255) 0%, rgb(221, 0, 184) 100%);
        color: #fff !important;
        padding: 18px 45px;
        border-radius: 100px;
        font-weight: 700;
        font-size: 16px;
        text-decoration: none;
        position: relative;
        overflow: hidden;
        transition: 0.4s;
        box-shadow: 0 15px 35px rgba(114, 79, 255, 0.3);
        border: none;
    }

    .btn-cyber-primary:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 45px rgba(221, 0, 184, 0.4);
    }

    .btn-cyber-outline {
        color: #fff !important;
        padding: 18px 35px;
        border-radius: 100px;
        font-weight: 600;
        font-size: 16px;
        text-decoration: none;
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: 0.3s;
        backdrop-filter: blur(10px);
    }

    .btn-cyber-outline:hover {
        background: rgba(255, 255, 255, 0.05);
        border-color: rgb(216, 115, 255);
        color: rgb(216, 115, 255) !important;
    }

    /* Right Side - Digital Core Visual */
    .tech-visual-container {
        position: relative;
        height: 600px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Hexagon/Circle Tech Frame */
    .tech-frame {
        position: relative;
        width: 450px;
        height: 450px;
        border-radius: 50%;
        border: 2px dashed rgba(114, 79, 255, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        animation: rotateFrame 60s linear infinite;
    }

    @keyframes rotateFrame {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .core-module {
        position: absolute;
        width: 280px;
        height: 280px;
        background: rgba(15, 23, 42, 0.8);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(114, 79, 255, 0.3);
        border-radius: 30px;
        z-index: 5;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        box-shadow: 0 0 50px rgba(114, 79, 255, 0.15);
        animation: pulseCore 4s infinite alternate ease-in-out;
    }

    @keyframes pulseCore {
        0% {
            transform: scale(1);
            box-shadow: 0 0 30px rgba(114, 79, 255, 0.15);
        }

        100% {
            transform: scale(1.05);
            box-shadow: 0 0 60px rgba(114, 79, 255, 0.3);
        }
    }

    /* Orbiting Tech Nodes */
    .tech-node {
        position: absolute;
        width: 75px;
        height: 75px;
        background: rgba(15, 23, 42, 0.95);
        border: 1px solid rgba(114, 79, 255, 0.4);
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: rgb(216, 115, 255);
        z-index: 10;
        transition: 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        cursor: pointer;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
    }

    .tech-node span {
        font-size: 9px;
        font-weight: 800;
        margin-top: 5px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #94a3b8;
    }

    .tech-node:hover {
        background: rgb(114, 79, 255);
        color: #ffffff;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) scale(1.15) !important;
        box-shadow: 0 0 40px rgba(114, 79, 255, 0.6);
        animation-play-state: paused;
    }

    .tech-node:hover span {
        color: #ffffff;
    }

    /* 6-Node Circular Positioning */
    .node-1 {
        top: 0;
        left: 50%;
        transform: translate(-50%, -50%);
        animation: floatNode 4s infinite alternate ease-in-out;
    }

    .node-2 {
        top: 25%;
        right: 0;
        transform: translate(50%, -50%);
        animation: floatNode 4.5s infinite alternate ease-in-out -0.5s;
    }

    .node-3 {
        top: 75%;
        right: 0;
        transform: translate(50%, -50%);
        animation: floatNode 5s infinite alternate ease-in-out -1s;
    }

    .node-4 {
        bottom: 0;
        left: 50%;
        transform: translate(-50%, 50%);
        animation: floatNode 4.2s infinite alternate ease-in-out -1.5s;
    }

    .node-5 {
        top: 75%;
        left: 0;
        transform: translate(-50%, -50%);
        animation: floatNode 4.8s infinite alternate ease-in-out -2s;
    }

    .node-6 {
        top: 25%;
        left: 0;
        transform: translate(-50%, -50%);
        animation: floatNode 5.2s infinite alternate ease-in-out -2.5s;
    }

    @keyframes floatNode {
        0% {
            transform: translate(var(--tw-translate-x, -50%), var(--tw-translate-y, -50%)) translateY(0);
        }

        100% {
            transform: translate(var(--tw-translate-x, -50%), var(--tw-translate-y, -50%)) translateY(-12px);
        }
    }

    /* Specific translations for each node to keep them centered on the border */
    .node-1 {
        --tw-translate-x: -50%;
        --tw-translate-y: -50%;
    }

    .node-2 {
        --tw-translate-x: 50%;
        --tw-translate-y: -50%;
    }

    .node-3 {
        --tw-translate-x: 50%;
        --tw-translate-y: -50%;
    }

    .node-4 {
        --tw-translate-x: -50%;
        --tw-translate-y: 50%;
    }

    .node-5 {
        --tw-translate-x: -50%;
        --tw-translate-y: -50%;
    }

    .node-6 {
        --tw-translate-x: -50%;
        --tw-translate-y: -50%;
    }

    /* Floating Lines/Data */
    .data-stream {
        position: absolute;
        width: 1px;
        height: 100px;
        background: linear-gradient(to bottom, transparent, rgb(114, 79, 255), transparent);
        opacity: 0.3;
        animation: streamMove 3s infinite linear;
    }

    @keyframes streamMove {
        0% {
            transform: translateY(-100px);
            opacity: 0;
        }

        50% {
            opacity: 0.5;
        }

        100% {
            transform: translateY(300px);
            opacity: 0;
        }
    }

    /* Service Marquee */
    .hero-marquee-wrap {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(10px);
        border-top: 1px solid rgba(255, 255, 255, 0.05);
        padding: 20px 0;
        z-index: 20;
        overflow: hidden;
    }

    .marquee-content {
        display: flex;
        gap: 60px;
        animation: marqueeScroll 30s linear infinite;
        width: max-content;
    }

    .marquee-item {
        display: flex;
        align-items: center;
        gap: 12px;
        color: rgba(255, 255, 255, 0.7);
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        white-space: nowrap;
    }

    .marquee-item i {
        color: rgb(216, 115, 255);
        font-size: 18px;
    }

    @keyframes marqueeScroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    /* Edge Fade */
    .hero-marquee-wrap::before,
    .hero-marquee-wrap::after {
        content: "";
        position: absolute;
        top: 0;
        width: 150px;
        height: 100%;
        z-index: 2;
        pointer-events: none;
    }

    .hero-marquee-wrap::before {
        left: 0;
        background: linear-gradient(to right, #080b12, transparent);
    }

    .hero-marquee-wrap::after {
        right: 0;
        background: linear-gradient(to left, #080b12, transparent);
    }

    /* Responsive Adjustments */
    @media (max-width: 991px) {
        .hero-tech-v2 {
            text-align: center;
            padding: 120px 0 80px;
        }

        .hero-tech-v2 p {
            margin-left: auto;
            margin-right: auto;
        }

        .tech-actions {
            justify-content: center;
        }

        .tech-visual-container {
            height: 450px;
            margin-top: 50px;
        }

        .tech-frame {
            width: 300px;
            height: 300px;
        }

        .core-module {
            width: 180px;
            height: 180px;
        }

        .tech-node {
            width: 50px;
            height: 50px;
            font-size: 18px;
        }
    }
</style>

<section class="hero-tech-v2">
    <div class="tech-bg-layers">
        <div class="tech-grid"></div>
        <div class="tech-glow glow-cyan"></div>
        <div class="tech-glow glow-purple"></div>

        <!-- Scanning Laser -->
        <div class="scan-line"></div>

        <!-- Circuit Paths -->
        <div class="circuit-path cp-v" style="left: 20%; top: 10%;"></div>
        <div class="circuit-path cp-h" style="left: 20%; top: 10%;"></div>
        <div class="circuit-path cp-v" style="right: 15%; bottom: 20%; animation-delay: -2s;"></div>
        <div class="circuit-path cp-h" style="right: 45%; bottom: 20%; animation-delay: -2s;"></div>

        <!-- Animated Particles -->
        <div class="particles-container">
            <div class="particle" style="width: 2px; height: 2px; left: 10%; top: 80%; animation-delay: 0s;"></div>
            <div class="particle" style="width: 3px; height: 3px; left: 25%; top: 90%; animation-delay: 2s;"></div>
            <div class="particle" style="width: 2px; height: 2px; left: 40%; top: 85%; animation-delay: 4s;"></div>
            <div class="particle" style="width: 4px; height: 4px; left: 60%; top: 95%; animation-delay: 1s;"></div>
            <div class="particle" style="width: 2px; height: 2px; left: 80%; top: 70%; animation-delay: 5s;"></div>
            <div class="particle" style="width: 3px; height: 3px; left: 90%; top: 80%; animation-delay: 3s;"></div>
        </div>

        <!-- Animated Streams -->
        <div class="data-stream" style="left: 15%; animation-delay: 0s;"></div>
        <div class="data-stream" style="left: 45%; animation-delay: 1.5s;"></div>
        <div class="data-stream" style="left: 85%; animation-delay: 0.8s;"></div>
    </div>

    <div class="container-fluid px-lg-5">
        <div class="row align-items-center">
            <!-- Left Side: Content -->
            <div class="col-lg-6">
                <div class="tech-content-box" data-aos="fade-right">
                    <div class="tech-tag">
                        <i class="fas fa-rocket pulse-anim"></i> Premium Software & Digital Agency
                    </div>
                    <h1>
                        Next-Gen Solutions for <br>
                        <span class="gradient-tech-text" id="typed-tech"></span>
                    </h1>
                    <p>
                        We deliver end-to-end digital solutions by combining expert website development with high-performance software engineering. Our data-driven marketing and SEO strategies ensure your business stays ahead in the digital landscape.
                    </p>
                    <div class="tech-actions">
                        <a href="<?php echo BASE_URL; ?>/contact.php" class="btn-cyber-primary">
                            Talk to an Expert <i class="fas fa-phone-volume ms-2"></i>
                        </a>
                        <a href="<?php echo BASE_URL; ?>/services.php" class="btn-cyber-outline">
                            Our Services <i class="fas fa-layer-group ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Side: Visual -->
            <div class="col-lg-6">
                <div class="tech-visual-container" data-aos="zoom-in" data-aos-delay="200">
                    <div class="tech-frame">
                        <!-- Orbiting Nodes: All Core Services -->
                        <div class="tech-node node-1" title="Software Development">
                            <i class="fas fa-laptop-code"></i>
                            <span>Software</span>
                        </div>
                        <div class="tech-node node-2" title="SEO Mastery">
                            <i class="fas fa-magnifying-glass-chart"></i>
                            <span>SEO</span>
                        </div>
                        <div class="tech-node node-3" title="Web Engineering">
                            <i class="fas fa-code"></i>
                            <span>Web</span>
                        </div>
                        <div class="tech-node node-4" title="Mobile App Development">
                            <i class="fas fa-mobile-screen-button"></i>
                            <span>Mobile</span>
                        </div>
                        <div class="tech-node node-5" title="UI/UX Experience">
                            <i class="fas fa-bezier-curve"></i>
                            <span>UI/UX</span>
                        </div>
                        <div class="tech-node node-6" title="Cloud & Scale">
                            <i class="fas fa-cloud-arrow-up"></i>
                            <span>Cloud</span>
                        </div>
                    </div>

                    <div class="core-module">
                        <div class="core-icon">
                            <i class="fas fa-atom fa-spin" style="font-size: 60px; color: rgb(114, 79, 255);"></i>
                        </div>
                        <div class="core-text mt-3 text-center">
                            <div style="font-size: 14px; color: rgb(216, 115, 255); font-weight: 800; letter-spacing: 2px;">CORE SYSTEM</div>
                            <div style="font-size: 11px; color: #94a3b8;">ELITE & SCALABLE</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Marquee -->
    <div class="hero-marquee-wrap">
        <div class="marquee-content">
            <!-- First Set -->
            <div class="marquee-item"><i class="fas fa-code"></i> Website Development</div>
            <div class="marquee-item"><i class="fas fa-mobile-alt"></i> App Development</div>
            <div class="marquee-item"><i class="fas fa-search-dollar"></i> SEO Optimization</div>
            <div class="marquee-item"><i class="fas fa-ad"></i> Digital Marketing</div>
            <div class="marquee-item"><i class="fas fa-laptop-code"></i> Software Engineering</div>
            <div class="marquee-item"><i class="fas fa-paint-brush"></i> UI/UX Design</div>
            <div class="marquee-item"><i class="fas fa-cloud-upload-alt"></i> Cloud Solutions</div>
            <div class="marquee-item"><i class="fas fa-shopping-cart"></i> E-Commerce Solutions</div>
            <!-- Duplicate for Seamless Loop -->
            <div class="marquee-item"><i class="fas fa-code"></i> Website Development</div>
            <div class="marquee-item"><i class="fas fa-mobile-alt"></i> App Development</div>
            <div class="marquee-item"><i class="fas fa-search-dollar"></i> SEO Optimization</div>
            <div class="marquee-item"><i class="fas fa-ad"></i> Digital Marketing</div>
            <div class="marquee-item"><i class="fas fa-laptop-code"></i> Software Engineering</div>
            <div class="marquee-item"><i class="fas fa-paint-brush"></i> UI/UX Design</div>
            <div class="marquee-item"><i class="fas fa-cloud-upload-alt"></i> Cloud Solutions</div>
            <div class="marquee-item"><i class="fas fa-shopping-cart"></i> E-Commerce Solutions</div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Typed('#typed-tech', {
            strings: ['App Development.', 'Digital Marketing.', 'SEO Strategies.', 'Software Design.'],
            typeSpeed: 60,
            backSpeed: 40,
            backDelay: 2000,
            loop: true,
            cursorChar: '_'
        });
    });
</script>