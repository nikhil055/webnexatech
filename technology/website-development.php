<?php
$page_title = 'Enterprise Web Engineering | WebNexa';
include_once __DIR__ . '/../config.php';
include_once __DIR__ . '/../header-new.php';
?>

<style>
    .web-dev-main {
        background: #05070a;
        color: #fff;
        font-family: 'Inter', sans-serif;
        overflow-x: hidden;
    }

    /* GLOBAL BG FX */
    .web-fixed-bg {
        position: fixed;
        inset: 0;
        z-index: 1;
        pointer-events: none;
        opacity: 0.2;
    }

    .data-drop {
        position: absolute;
        width: 1px;
        height: 100px;
        background: linear-gradient(to bottom, transparent, rgb(114, 79, 255), transparent);
        animation: dropMove 5s infinite linear;
    }

    @keyframes dropMove {
        0% {
            transform: translateY(-100px);
            opacity: 0;
        }

        50% {
            opacity: 0.5;
        }

        100% {
            transform: translateY(100vh);
            opacity: 0;
        }
    }

    /* SHARED STYLES */
    .tech-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(114, 79, 255, 0.1);
        border: 1px solid rgba(114, 79, 255, 0.2);
        padding: 6px 18px;
        border-radius: 100px;
        font-size: 12px;
        font-weight: 800;
        color: rgb(216, 115, 255);
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 25px;
    }

    .section-title {
        font-size: clamp(32px, 4.5vw, 54px);
        font-weight: 900;
        line-height: 1.1;
        letter-spacing: -2px;
    }

    .content-block {
        padding: 140px 0;
        position: relative;
        z-index: 10;
    }

    .container {
        position: relative;
        z-index: 10;
        max-width: 1350px;
    }

    .glass-card {
        background: rgba(255, 255, 255, 0.015);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 40px;
        backdrop-filter: blur(40px);
        transition: 0.4s;
        padding: 45px;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .glass-card:hover {
        border-color: rgba(114, 79, 255, 0.4);
        transform: translateY(-10px);
        background: rgba(114, 79, 255, 0.03);
    }

    /* 1. HERO */
    .web-hero {
        position: relative;
        padding: 220px 0 120px;
        background: #080b12;
        overflow: hidden;
        text-align: center;
    }

    .hero-grid {
        position: absolute;
        inset: 0;
        background-image: radial-gradient(rgba(114, 79, 255, 0.05) 1px, transparent 1px);
        background-size: 50px 50px;
        transform: perspective(500px) rotateX(60deg);
    }

    .web-hero h1 {
        font-size: clamp(40px, 7vw, 85px);
        font-weight: 900;
        letter-spacing: -4px;
        line-height: 0.95;
        margin-bottom: 30px;
    }

    /* 2. CAPABILITIES EXPANDED */
    .cap-grid-massive {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 40px;
        margin-top: 60px;
    }

    .cap-icon {
        width: 55px;
        height: 55px;
        background: rgba(114, 79, 255, 0.1);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        color: rgb(114, 79, 255);
        margin-bottom: 25px;
        transition: 0.4s;
    }

    .glass-card:hover .cap-icon {
        background: rgb(114, 79, 255);
        color: #fff;
        box-shadow: 0 0 30px rgba(114, 79, 255, 0.4);
    }

    .glass-card h4 {
        font-size: 22px;
        font-weight: 800;
        margin-bottom: 15px;
        color: #fff;
    }

    .glass-card p {
        font-size: 15px;
        color: #94a3b8;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .cap-feat-list {
        list-style: none;
        padding: 0;
        margin: auto 0 0;
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .cap-feat-list li {
        background: rgba(255, 255, 255, 0.03);
        padding: 5px 12px;
        border-radius: 6px;
        font-size: 10px;
        font-weight: 800;
        color: rgb(216, 115, 255);
        border: 1px solid rgba(255, 255, 255, 0.05);
        text-transform: uppercase;
    }

    /* 3. ASSEMBLY LINE */
    .assembly-section {
        background: #080b12;
        padding: 120px 0;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
    }

    .assembly-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 20px;
        margin-top: 60px;
        position: relative;
    }

    .assembly-grid::before {
        content: "";
        position: absolute;
        top: 40px;
        left: 0;
        width: 100%;
        height: 2px;
        background: rgba(255, 255, 255, 0.05);
        z-index: 1;
    }

    .assembly-item {
        position: relative;
        z-index: 5;
        text-align: center;
    }

    .assembly-node {
        width: 80px;
        height: 80px;
        background: #05070a;
        border: 2px solid rgba(114, 79, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 30px;
        font-size: 22px;
        color: rgb(114, 79, 255);
        transition: 0.4s;
    }

    .assembly-item:hover .assembly-node {
        background: rgb(114, 79, 255);
        color: #fff;
        transform: scale(1.1);
        box-shadow: 0 0 30px rgba(114, 79, 255, 0.4);
    }

    .assembly-item h5 {
        font-size: 16px;
        font-weight: 800;
        color: #fff;
        margin-bottom: 10px;
        text-transform: uppercase;
    }

    .assembly-item p {
        font-size: 13px;
        color: #64748b;
        line-height: 1.5;
        padding: 0 10px;
    }

    /* 4. COMPONENT VIEW */
    .component-view {
        padding: 120px 0;
        background: radial-gradient(circle at top right, rgba(114, 79, 255, 0.05) 0%, transparent 50%);
    }

    .exploded-viz {
        position: relative;
        height: 500px;
        background: rgba(255, 255, 255, 0.01);
        border: 1px dashed rgba(255, 255, 255, 0.1);
        border-radius: 40px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .modular-block {
        position: absolute;
        background: rgba(114, 79, 255, 0.1);
        border: 1px solid rgba(114, 79, 255, 0.3);
        padding: 15px 25px;
        border-radius: 12px;
        font-family: monospace;
        font-size: 12px;
        color: #fff;
        animation: blockFloat 6s infinite alternate ease-in-out;
    }

    @keyframes blockFloat {
        from {
            transform: translateY(0);
        }

        to {
            transform: translateY(-30px);
        }
    }

    /* 5. TECH STRIP */
    .tech-strip {
        background: #080b12;
        padding: 80px 0;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
    }

    .stack-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 30px;
        text-align: center;
    }

    .stack-item i {
        font-size: 40px;
        color: rgba(255, 255, 255, 0.2);
        margin-bottom: 15px;
        display: block;
    }

    @media (max-width: 1199px) {
        .cap-grid-massive {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 991px) {

        .cap-grid-massive,
        .assembly-grid,
        .stack-grid {
            grid-template-columns: 1fr;
        }

        .assembly-grid::before {
            display: none;
        }
    }
</style>

<div class="web-dev-main">
    <div class="web-fixed-bg" id="web-data-bg"></div>

    <!-- 1. HERO -->
    <section class="web-hero">
        <div class="hero-grid"></div>
        <div class="container">
            <div class="tech-badge" data-aos="fade-down">Architecture & Systems</div>
            <h1 data-aos="zoom-in">Elite Web <br> <span class="gradient-tech-text">Engineering Core</span></h1>
            <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 19px; line-height: 1.8;" data-aos="fade-up">We architect high-performance web ecosystems designed for absolute scale, zero-latency delivery, and military-grade security.</p>
        </div>
    </section>

    <!-- 2. CAPABILITIES (WHAT WE ENGINEER - EXPANDED) -->
    <section class="content-block py-5">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">System Scope</div>
                <h2 class="section-title">Enterprise <span class="gradient-tech-text">Web Engineering Matrix</span></h2>
            </div>

            <div class="cap-grid-massive">
                <!-- 01: E-Commerce -->
                <div class="glass-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="cap-icon"><i class="fas fa-cart-shopping"></i></div>
                    <h4>Multi-Vendor <br> E-Commerce</h4>
                    <p>End-to-end retail ecosystems with vendor onboarding, global payment hubs, and automated order logic.</p>
                    <ul class="cap-feat-list">
                        <li>Vendor Apps</li>
                        <li>Super Admin</li>
                        <li>Payout Logic</li>
                        <li>Live Tracking</li>
                    </ul>
                </div>

                <!-- 02: SaaS Dashboards -->
                <div class="glass-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="cap-icon"><i class="fas fa-chart-line"></i></div>
                    <h4>Enterprise SaaS <br> & CRM Portals</h4>
                    <p>Internal high-security dashboards for data visualization, user governance, and automated workflow sync.</p>
                    <ul class="cap-feat-list">
                        <li>RBAC Security</li>
                        <li>API First</li>
                        <li>Data Viz</li>
                        <li>Audit Logs</li>
                    </ul>
                </div>

                <!-- 03: Booking Systems -->
                <div class="glass-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="cap-icon"><i class="fas fa-calendar-check"></i></div>
                    <h4>Dynamic <br> Booking Engines</h4>
                    <p>Real-time availability platforms for Hotels, Car Rentals, and Appointment-based professional services.</p>
                    <ul class="cap-feat-list">
                        <li>Slot Logic</li>
                        <li>IoT GPS Sync</li>
                        <li>KYC Flow</li>
                        <li>Auto Invoicing</li>
                    </ul>
                </div>

                <!-- 04: Institutional Web -->
                <div class="glass-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="cap-icon"><i class="fas fa-graduation-cap"></i></div>
                    <h4>LMS & Educational <br> Ecosystems</h4>
                    <p>Integrated learning platforms with video streaming, student databases, and automated assessment tools.</p>
                    <ul class="cap-feat-list">
                        <li>WebRTC Stream</li>
                        <li>Smart Quizzes</li>
                        <li>Cert Engine</li>
                        <li>Parent Apps</li>
                    </ul>
                </div>

                <!-- 05: FinTech Portals -->
                <div class="glass-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="cap-icon"><i class="fas fa-wallet"></i></div>
                    <h4>Secure FinTech <br> & Wealth Hubs</h4>
                    <p>Ultra-secure financial dashboards featuring multi-currency wallets, high-speed indexing, and PCI compliance.</p>
                    <ul class="cap-feat-list">
                        <li>AES-256</li>
                        <li>KYC Gateway</li>
                        <li>Live Market</li>
                        <li>Wealth Sync</li>
                    </ul>
                </div>

                <!-- 06: AI-Enabled Apps -->
                <div class="glass-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="cap-icon"><i class="fas fa-brain"></i></div>
                    <h4>AI-Integrated <br> Intelligence Apps</h4>
                    <p>Next-gen web tools with integrated LLMs, automated matching algorithms, and smart customer insights.</p>
                    <ul class="cap-feat-list">
                        <li>OpenAI API</li>
                        <li>Neural Search</li>
                        <li>Auto-Summarize</li>
                        <li>Voice Ops</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. PRODUCTION ASSEMBLY -->
    <section class="assembly-section">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Execution Protocol</div>
                <h2 class="section-title">The Engineering <span class="gradient-tech-text">Assembly Line</span></h2>
            </div>

            <div class="assembly-grid">
                <div class="assembly-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="assembly-node"><i class="fas fa-microchip"></i></div>
                    <h5>Logic Mapping</h5>
                    <p>Translating business flow into complex technical architecture.</p>
                </div>
                <div class="assembly-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="assembly-node"><i class="fas fa-network-wired"></i></div>
                    <h5>API Hardening</h5>
                    <p>Building secure, redundant and high-speed data endpoints.</p>
                </div>
                <div class="assembly-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="assembly-node"><i class="fas fa-code"></i></div>
                    <h5>UI/UX Sync</h5>
                    <p>Synchronizing the logic with pixel-perfect interactive UIs.</p>
                </div>
                <div class="assembly-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="assembly-node"><i class="fas fa-shield-virus"></i></div>
                    <h5>Stress Tests</h5>
                    <p>Rigorous pen-testing and high-concurrency load simulations.</p>
                </div>
                <div class="assembly-item" data-aos="fade-up" data-aos-delay="500">
                    <div class="assembly-node"><i class="fas fa-cloud-bolt"></i></div>
                    <h5>Cloud Launch</h5>
                    <p>Automated deployment to global serverless clusters.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. MODULAR ARCHITECTURE -->
    <section class="component-view">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="tech-badge">Clean Code Standards</div>
                    <h2 class="section-title">Component-Driven <br> <span class="gradient-tech-text">Architecture</span></h2>
                    <p style="color: #94a3b8; font-size: 18px; line-height: 1.8;">Our code is built as a library of modular components. This makes your project faster to build, easier to scale, and incredibly secure against technical debt.</p>
                </div>
                <div class="col-lg-6 ps-lg-5" data-aos="zoom-in">
                    <div class="exploded-viz">
                        <div class="modular-block" style="top: 20%; left: 10%; animation-delay: 0s;">&lt;AuthHandler /&gt;</div>
                        <div class="modular-block" style="top: 40%; right: 15%; animation-delay: 1s;">&lt;DataGrid /&gt;</div>
                        <div class="modular-block" style="bottom: 25%; left: 20%; animation-delay: 2s;">&lt;SecureAPI /&gt;</div>
                        <div class="modular-block" style="top: 10%; right: 30%; animation-delay: 0.5s;">&lt;ReduxStore /&gt;</div>
                        <i class="fas fa-cube" style="font-size: 150px; color: rgba(114, 79, 255, 0.1);"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. TECH STRIP -->
    <section class="tech-strip">
        <div class="container">
            <div class="stack-grid">
                <div class="stack-item"><i class="fab fa-react"></i>
                    <h6>React & Next.js</h6>
                </div>
                <div class="stack-item"><i class="fab fa-node-js"></i>
                    <h6>Node & MERN</h6>
                </div>
                <div class="stack-item"><i class="fab fa-laravel"></i>
                    <h6>PHP & Laravel</h6>
                </div>
                <div class="stack-item"><i class="fab fa-wordpress"></i>
                    <h6>Headless WP</h6>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. CALL TO ACTION -->
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