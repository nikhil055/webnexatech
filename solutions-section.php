<?php include_once 'config.php'; ?>
<style>
    /* Sticky Container */
    .solutions-pin-container {
        position: relative;
        height: 600vh;
        /* Increased for smoother locking of the last card */
        background: #05070a;
        overflow: clip;
    }

    .sticky-wrapper {
        position: sticky;
        top: 0;
        height: 100vh;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        overflow: hidden;
    }

    .tech-bg-anim {
        position: absolute;
        inset: 0;
        z-index: 1;
        overflow: hidden;
    }

    .data-drop {
        position: absolute;
        width: 1px;
        height: 100px;
        background: linear-gradient(to bottom, transparent, rgb(114, 79, 255), transparent);
        opacity: 0.2;
        animation: dataFall 4s infinite linear;
    }

    @keyframes dataFall {
        0% {
            transform: translateY(-100px);
            opacity: 0;
        }

        50% {
            opacity: 0.3;
        }

        100% {
            transform: translateY(100vh);
            opacity: 0;
        }
    }

    .neon-glow-ball {
        position: absolute;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(114, 79, 255, 0.05) 0%, transparent 70%);
        border-radius: 50%;
        filter: blur(80px);
        animation: pulseGlow 10s infinite alternate;
    }

    @keyframes pulseGlow {
        0% {
            transform: scale(1);
            opacity: 0.3;
        }

        100% {
            transform: scale(1.3);
            opacity: 0.5;
        }
    }

    .container-full {
        position: relative;
        z-index: 10;
        width: 100%;
        padding: 0 50px;
    }

    /* Heading Style */
    .section-head-match {
        margin-bottom: 40px;
        text-align: center;
    }

    .solutions-badge {
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

    .section-head-match h2 {
        font-size: clamp(32px, 4.5vw, 54px);
        font-weight: 900;
        line-height: 1.1;
        letter-spacing: -2px;
        color: #fff;
    }

    /* Premium Tabs */
    .solutions-top-nav {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-bottom: 40px;
        position: relative;
        max-width: 850px;
        margin-left: auto;
        margin-right: auto;
        background: rgba(255, 255, 255, 0.02);
        padding: 6px;
        border-radius: 100px;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .top-nav-item {
        color: #94a3b8;
        font-weight: 700;
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        cursor: pointer;
        transition: 0.4s;
        padding: 10px 25px;
        border-radius: 100px;
        position: relative;
        z-index: 2;
    }

    .top-nav-item.active {
        color: #fff;
    }

    .nav-indicator {
        position: absolute;
        height: calc(100% - 12px);
        background: linear-gradient(90deg, rgb(114, 79, 255), rgb(221, 0, 184));
        box-shadow: 0 5px 15px rgba(114, 79, 255, 0.4);
        border-radius: 100px;
        transition: 0.5s cubic-bezier(0.23, 1, 0.32, 1);
        z-index: 1;
        top: 6px;
    }

    /* Slider Canvas */
    .slider-canvas {
        display: flex;
        width: 400%;
        height: 650px;
        transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .matrix-slide {
        width: 100vw;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 8vw;
        flex-shrink: 0;
    }

    /* Glass Card */
    .glass-card-inner {
        background: rgba(255, 255, 255, 0.01);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 40px;
        width: 100%;
        max-width: 1300px;
        height: 100%;
        padding: 50px;
        backdrop-filter: blur(40px);
        display: grid;
        grid-template-columns: 1fr 450px;
        gap: 50px;
        align-items: center;
    }

    .info-zone h3 {
        font-size: 42px;
        font-weight: 900;
        letter-spacing: -1.5px;
        margin-bottom: 20px;
        line-height: 1.1;
    }

    .info-zone p {
        font-size: 16px;
        color: #94a3b8;
        line-height: 1.7;
        margin-bottom: 30px;
    }

    /* Feature Grid in Card */
    .feature-points {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
        margin-bottom: 30px;
    }

    .f-point {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 13px;
        color: #fff;
        font-weight: 600;
    }

    .f-point i {
        color: #22c55e;
        font-size: 14px;
    }

    .tech-pill {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.08);
        padding: 8px 16px;
        border-radius: 10px;
        font-size: 11px;
        font-weight: 700;
        color: #fff;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .tech-pill i {
        color: rgb(216, 115, 255);
    }

    .detail-zone {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 30px;
        padding: 35px;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .detail-zone h6 {
        font-size: 11px;
        font-weight: 800;
        color: rgb(216, 115, 255);
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 25px;
    }

    .module-item {
        display: flex;
        align-items: flex-start;
        gap: 15px;
        margin-bottom: 20px;
    }

    .m-icon-box {
        width: 38px;
        height: 38px;
        background: rgba(114, 79, 255, 0.1);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: rgb(114, 79, 255);
        font-size: 14px;
        flex-shrink: 0;
    }

    .m-text-box h5 {
        margin: 0;
        font-size: 14px;
        font-weight: 700;
    }

    .m-text-box span {
        font-size: 11px;
        color: #64748b;
        line-height: 1.4;
        display: block;
        margin-top: 4px;
    }

    .stat-row {
        display: flex;
        gap: 30px;
        margin-top: auto;
        padding-top: 25px;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
    }

    .stat-box h4 {
        margin: 0;
        font-size: 24px;
        font-weight: 800;
        color: #fff;
    }

    .stat-box span {
        font-size: 10px;
        color: #64748b;
        text-transform: uppercase;
    }

    @media (max-width: 1199px) {
        .glass-card-inner {
            grid-template-columns: 1fr;
            padding: 40px;
        }

        .detail-zone {
            display: none;
        }

        .info-zone h3 {
            font-size: 32px;
        }

        .slider-canvas {
            height: 500px;
        }
    }
</style>

<section class="solutions-pin-container" id="solutions-pin">
    <div class="sticky-wrapper">
        <div class="tech-bg-anim" id="data-rain-container">
            <div class="neon-glow-ball" style="top: -10%; left: -10%;"></div>
            <div class="neon-glow-ball" style="bottom: -10%; right: -10%; animation-delay: -5s;"></div>
        </div>

        <div class="container-full">
            <div class="section-head-match" data-aos="fade-up">
                <div class="solutions-badge"><i class="fas fa-microchip"></i> Enterprise Solutions</div>
                <h2>End-to-End <span class="gradient-tech-text">Digital Ecosystems</span></h2>
            </div>

            <div class="solutions-top-nav">
                <div class="top-nav-item active">E-Commerce</div>
                <div class="top-nav-item">Healthcare</div>
                <div class="top-nav-item">Job Portals</div>
                <div class="top-nav-item">Car Rental</div>
                <div class="nav-indicator" id="nav-indicator"></div>
            </div>

            <div class="slider-canvas" id="slider-canvas">

                <!-- 01: Multi-Vendor E-Commerce -->
                <div class="matrix-slide">
                    <div class="glass-card-inner">
                        <div class="info-zone">
                            <div class="tech-pill mb-4" style="background:rgba(34,197,94,0.1); border-color:rgba(34,197,94,0.2); color:#22c55e;">
                                <i class="fas fa-circle-check"></i> FULL FLOW: VENDOR -> ADMIN -> CUSTOMER
                            </div>
                            <h3>Multi-Vendor <br> <span class="gradient-tech-text">E-Commerce Ecosystem</span></h3>
                            <p>Complete MERN & Laravel based marketplace with dedicated Vendor Apps, Customer Apps, and a powerful Super Admin Panel. We build the full logic from vendor onboarding to global payouts.</p>

                            <div class="feature-points">
                                <div class="f-point"><i class="fas fa-check-circle"></i> Vendor Approval Flow</div>
                                <div class="f-point"><i class="fas fa-check-circle"></i> Super Admin Dashboard</div>
                                <div class="f-point"><i class="fas fa-check-circle"></i> Native Android & iOS</div>
                                <div class="f-point"><i class="fas fa-check-circle"></i> Custom Promo Engine</div>
                            </div>

                            <div class="d-flex flex-wrap gap-2">
                                <div class="tech-pill"><i class="fab fa-react"></i> React / MERN</div>
                                <div class="tech-pill"><i class="fab fa-laravel"></i> Laravel Admin</div>
                                <div class="tech-pill"><i class="fas fa-mobile-screen"></i> Flutter App</div>
                                <div class="tech-pill"><i class="fas fa-shield-halved"></i> Payment Gateway</div>
                            </div>
                        </div>
                        <div class="detail-zone">
                            <h6>Module Architecture</h6>
                            <div class="module-item">
                                <div class="m-icon-box"><i class="fas fa-user-shield"></i></div>
                                <div class="m-text-box">
                                    <h5>Super Admin Control</h5><span>Manage commissions, vendors, and global site settings.</span>
                                </div>
                            </div>
                            <div class="module-item">
                                <div class="m-icon-box"><i class="fas fa-shop"></i></div>
                                <div class="m-text-box">
                                    <h5>Vendor App/Panel</h5><span>Inventory, orders, and earnings tracking for sellers.</span>
                                </div>
                            </div>
                            <div class="stat-row">
                                <div class="stat-box">
                                    <h4>99.9%</h4><span>Scale</span>
                                </div>
                                <div class="stat-box">
                                    <h4>Laravel</h4><span>Backend</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 02: Healthcare -->
                <div class="matrix-slide">
                    <div class="glass-card-inner">
                        <div class="info-zone">
                            <div class="tech-pill mb-4" style="background:rgba(59,130,246,0.1); border-color:rgba(59,130,246,0.2); color:#3b82f6;">
                                <i class="fas fa-shield-halved"></i> HIPAA SECURE FLOW
                            </div>
                            <h3>Digital Health <br> <span class="gradient-tech-text">Management System</span></h3>
                            <p>Integrated Healthcare ecosystems connecting Doctors, Patients, and Labs. Built on React Native and PHP Laravel for 100% uptime and data encryption.</p>

                            <div class="feature-points">
                                <div class="f-point"><i class="fas fa-check-circle"></i> Doctor App & Panel</div>
                                <div class="f-point"><i class="fas fa-check-circle"></i> E-Prescription Flow</div>
                                <div class="f-point"><i class="fas fa-check-circle"></i> Lab Integration</div>
                                <div class="f-point"><i class="fas fa-check-circle"></i> Patient Vault (Cloud)</div>
                            </div>

                            <div class="d-flex flex-wrap gap-2">
                                <div class="tech-pill"><i class="fab fa-react"></i> React Native</div>
                                <div class="tech-pill"><i class="fab fa-laravel"></i> Laravel Core</div>
                                <div class="tech-pill"><i class="fas fa-mobile-screen"></i> Flutter UI</div>
                                <div class="tech-pill"><i class="fas fa-cloud-medical"></i> AWS Health</div>
                            </div>
                        </div>
                        <div class="detail-zone">
                            <h6>Core Modules</h6>
                            <div class="module-item">
                                <div class="m-icon-box"><i class="fas fa-stethoscope"></i></div>
                                <div class="m-text-box">
                                    <h5>Doctor Dashboard</h5><span>Manage consultations, patients, and digital records.</span>
                                </div>
                            </div>
                            <div class="module-item">
                                <div class="m-icon-box"><i class="fas fa-vial-virus"></i></div>
                                <div class="m-text-box">
                                    <h5>Laboratory Sync</h5><span>Auto-sync lab reports directly to patient apps.</span>
                                </div>
                            </div>
                            <div class="stat-row">
                                <div class="stat-box">
                                    <h4>100%</h4><span>Secure</span>
                                </div>
                                <div class="stat-box">
                                    <h4>React</h4><span>Native</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 03: Job Portals -->
                <div class="matrix-slide">
                    <div class="glass-card-inner">
                        <div class="info-zone">
                            <div class="tech-pill mb-4" style="background:rgba(168,85,247,0.1); border-color:rgba(168,85,247,0.2); color:#a855f7;">
                                <i class="fas fa-brain"></i> AI MATCHING & ATS
                            </div>
                            <h3>Smart Talent <br> <span class="gradient-tech-text">Recruitment Portal</span></h3>
                            <p>Comprehensive recruitment engine with Employer and Candidate ecosystems. Features AI-based resume parsing and a complete interview-to-onboarding workflow.</p>

                            <div class="feature-points">
                                <div class="f-point"><i class="fas fa-check-circle"></i> Employer Dashboard</div>
                                <div class="f-point"><i class="fas fa-check-circle"></i> AI Resume Parsing</div>
                                <div class="f-point"><i class="fas fa-check-circle"></i> Candidate App</div>
                                <div class="f-point"><i class="fas fa-check-circle"></i> Admin Job Approval</div>
                            </div>

                            <div class="d-flex flex-wrap gap-2">
                                <div class="tech-pill"><i class="fab fa-react"></i> React.js / MERN</div>
                                <div class="tech-pill"><i class="fab fa-laravel"></i> Laravel Hub</div>
                                <div class="tech-pill"><i class="fas fa-brain"></i> AI Matching</div>
                                <div class="tech-pill"><i class="fas fa-server"></i> MySQL / Elastic</div>
                            </div>
                        </div>
                        <div class="detail-zone">
                            <h6>Workflow Hub</h6>
                            <div class="module-item">
                                <div class="m-icon-box"><i class="fas fa-briefcase"></i></div>
                                <div class="m-text-box">
                                    <h5>Employer Console</h5><span>Post jobs, track applicants, and schedule interviews.</span>
                                </div>
                            </div>
                            <div class="module-item">
                                <div class="m-icon-box"><i class="fas fa-file-invoice"></i></div>
                                <div class="m-text-box">
                                    <h5>ATS Engine</h5><span>Complete Applicant Tracking System with custom status.</span>
                                </div>
                            </div>
                            <div class="stat-row">
                                <div class="stat-box">
                                    <h4>0.2s</h4><span>Search</span>
                                </div>
                                <div class="stat-box">
                                    <h4>MERN</h4><span>Stack</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 04: Car Rental -->
                <div class="matrix-slide">
                    <div class="glass-card-inner">
                        <div class="info-zone">
                            <div class="tech-pill mb-4" style="background:rgba(249,115,22,0.1); border-color:rgba(249,115,22,0.2); color:#f97316;">
                                <i class="fas fa-location-crosshairs"></i> IOT & GPS TRACKING
                            </div>
                            <h3>Enterprise <br> <span class="gradient-tech-text">Car Rental Solution</span></h3>
                            <p>Self-drive portals and professional fleet management. Integrated with real-time GPS telemetry, digital KYC verification, and automated booking engines.</p>

                            <div class="feature-points">
                                <div class="f-point"><i class="fas fa-check-circle"></i> Live Fleet Tracking</div>
                                <div class="f-point"><i class="fas fa-check-circle"></i> Digital KYC Flow</div>
                                <div class="f-point"><i class="fas fa-check-circle"></i> Booking App (Flutter)</div>
                                <div class="f-point"><i class="fas fa-check-circle"></i> Fleet Admin Panel</div>
                            </div>

                            <div class="d-flex flex-wrap gap-2">
                                <div class="tech-pill"><i class="fas fa-mobile-screen"></i> Flutter / RN</div>
                                <div class="tech-pill"><i class="fab fa-node-js"></i> Node.js IoT</div>
                                <div class="tech-pill"><i class="fas fa-location-dot"></i> Maps Sync</div>
                                <div class="tech-pill"><i class="fab fa-laravel"></i> Laravel Core</div>
                            </div>
                        </div>
                        <div class="detail-zone">
                            <h6>Fleet Intelligence</h6>
                            <div class="module-item">
                                <div class="m-icon-box"><i class="fas fa-satellite"></i></div>
                                <div class="m-text-box">
                                    <h5>GPS Live Core</h5><span>Track vehicle position, speed, and health in real-time.</span>
                                </div>
                            </div>
                            <div class="module-item">
                                <div class="m-icon-box"><i class="fas fa-address-card"></i></div>
                                <div class="m-text-box">
                                    <h5>Auto-KYC Sync</h5><span>Verify licenses and identity via automated API flows.</span>
                                </div>
                            </div>
                            <div class="stat-row">
                                <div class="stat-box">
                                    <h4>24/7</h4><span>IoT Sync</span>
                                </div>
                                <div class="stat-box">
                                    <h4>Flutter</h4><span>Mobile</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const rainContainer = document.getElementById('data-rain-container');
        for (let i = 0; i < 30; i++) {
            const drop = document.createElement('div');
            drop.className = 'data-drop';
            drop.style.left = Math.random() * 100 + '%';
            drop.style.animationDuration = (Math.random() * 3 + 2) + 's';
            drop.style.animationDelay = Math.random() * 5 + 's';
            rainContainer.appendChild(drop);
        }

        const pinSection = document.getElementById('solutions-pin');
        const canvas = document.getElementById('slider-canvas');
        const navItems = document.querySelectorAll('.top-nav-item');
        const indicator = document.getElementById('nav-indicator');

        function handleScroll() {
            const rect = pinSection.getBoundingClientRect();
            const containerHeight = pinSection.offsetHeight;
            const windowHeight = window.innerHeight;

            let progress = -rect.top / (containerHeight - windowHeight);
            progress = Math.max(0, Math.min(1, progress));

            const moveX = progress * 75;
            canvas.style.transform = `translateX(-${moveX}%)`;

            const currentIdx = Math.min(3, Math.floor(progress * 4.2));

            navItems.forEach((item, idx) => {
                if (idx === currentIdx) {
                    item.classList.add('active');
                    indicator.style.width = item.offsetWidth + 'px';
                    indicator.style.left = item.offsetLeft + 'px';
                } else {
                    item.classList.remove('active');
                }
            });
        }

        window.addEventListener('scroll', handleScroll);
        setTimeout(() => {
            const first = navItems[0];
            indicator.style.width = first.offsetWidth + 'px';
            indicator.style.left = first.offsetLeft + 'px';
        }, 300);
        handleScroll();
    });
</script>