<?php include_once 'config.php'; ?>
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
    .portfolio-bento-v6 {
        position: relative;
        padding: 140px 0;
        background: #05070a;
        color: #fff;
        font-family: 'Inter', sans-serif;
        overflow: hidden;
        width: 100%;
    }

    /* Ambient Background Glow */
    .bento-bg-glow {
        position: absolute;
        bottom: -10%; left: -10%;
        width: 800px; height: 800px;
        background: radial-gradient(circle, rgba(114, 79, 255, 0.1) 0%, transparent 70%);
        filter: blur(100px);
        z-index: 1;
        pointer-events: none;
    }

    .container { position: relative; z-index: 10; max-width: 1400px; }

    /* THE BENTO SLIDER ENGINE */
    .bento-swiper {
        width: 100%;
        padding-top: 60px;
        padding-bottom: 100px;
        overflow: visible !important; /* Allow side slides to be seen */
        perspective: 2000px;
    }

    .bento-swiper .swiper-slide {
        width: 900px; /* Large professional width */
        height: 580px;
        opacity: 0.4; /* Visible but dimmed */
        transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        filter: blur(4px) grayscale(100%);
    }

    .bento-swiper .swiper-slide-active { 
        opacity: 1; 
        filter: blur(0px) grayscale(0%);
        transform: scale(1.05); /* Slight pop for the middle card */
    }

    /* THE BENTO CARD DESIGN */
    .bento-card {
        display: grid;
        grid-template-columns: 1fr 300px;
        grid-template-rows: 1fr 160px;
        gap: 20px;
        width: 100%;
        height: 100%;
        transform-style: preserve-3d;
    }

    .b-box {
        background: rgba(255, 255, 255, 0.015);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 40px;
        backdrop-filter: blur(40px);
        padding: 45px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 30px 60px rgba(0,0,0,0.4);
    }

    /* 1. Main Info Box */
    .b-main {
        grid-row: span 1;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        background-size: cover;
        background-position: center;
    }
    .b-main::after {
        content: ""; position: absolute; inset: 0;
        background: linear-gradient(to top, rgba(5, 7, 10, 0.95) 0%, transparent 100%);
    }

    .b-main-content { position: relative; z-index: 5; }
    .b-tag {
        font-size: 11px; font-weight: 800; color: rgb(216, 115, 255);
        text-transform: uppercase; letter-spacing: 2.5px; margin-bottom: 15px; display: block;
    }
    .b-main-content h3 { font-size: 44px; font-weight: 900; letter-spacing: -2px; line-height: 1; margin: 0; color: #fff; }

    /* 2. Side Stats Box */
    .b-stats {
        grid-row: span 2;
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 40px;
        background: linear-gradient(180deg, rgba(114, 79, 255, 0.05) 0%, transparent 100%);
    }
    .s-node h4 { font-size: 34px; font-weight: 900; color: #fff; margin: 0; line-height: 1; }
    .s-node span { font-size: 10px; font-weight: 800; color: #64748b; text-transform: uppercase; letter-spacing: 1.5px; margin-top: 5px; display: block; }

    /* 3. Tech Stack Box */
    .b-tech {
        display: flex;
        align-items: center;
        gap: 15px;
    }
    .t-item {
        display: flex; align-items: center; gap: 10px;
        background: rgba(255,255,255,0.03); padding: 12px 22px; border-radius: 15px;
        border: 1px solid rgba(255,255,255,0.08); font-size: 13px; font-weight: 700; color: #fff;
    }
    .t-item i { color: rgb(114, 79, 255); font-size: 18px; }

    /* FIXED NAVIGATION BUTTONS */
    .bento-nav-container {
        position: relative;
        display: flex;
        justify-content: center;
        gap: 30px;
        margin-top: 20px;
        z-index: 100;
    }
    .b-nav-btn {
        width: 65px; height: 65px; border-radius: 50%;
        background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.1);
        color: #fff; display: flex; align-items: center; justify-content: center;
        cursor: pointer; transition: all 0.3s; font-size: 20px;
    }
    .b-nav-btn:hover { 
        background: rgb(114, 79, 255); 
        border-color: rgb(114, 79, 255);
        box-shadow: 0 0 30px rgba(114, 79, 255, 0.4);
        transform: scale(1.1);
    }

    @media (max-width: 1199px) {
        .bento-swiper .swiper-slide { width: 85vw; height: auto; }
        .bento-card { grid-template-columns: 1fr; grid-template-rows: auto; }
        .b-stats { grid-row: span 1; flex-direction: row; padding: 30px; }
        .b-main { height: 320px; }
    }
</style>

<section class="portfolio-bento-v6">
    <div class="bento-bg-glow"></div>
    
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <div class="tech-badge-v3"><i class="fas fa-briefcase"></i> Project Vault</div>
            <h2>Next-Gen <span class="gradient-tech-text">Digital Case Studies</span></h2>
        </div>

        <!-- THE SWIPER -->
        <div class="swiper bento-swiper">
            <div class="swiper-wrapper">
                
                <!-- Project 01 -->
                <div class="swiper-slide">
                    <div class="bento-card">
                        <div class="b-box b-main" style="background-image: url('assets/images/services/web-development.jpg');">
                            <div class="b-main-content">
                                <span class="b-tag">E-Commerce Ecosystem</span>
                                <h3>Nexus Global <br> Retail Engine</h3>
                            </div>
                        </div>
                        <div class="b-box b-stats">
                            <div class="s-node"><h4>+240%</h4><span>Growth</span></div>
                            <div class="s-node"><h4>0.4s</h4><span>Latency</span></div>
                            <div class="s-node"><h4>1M+</h4><span>Active SKUs</span></div>
                        </div>
                        <div class="b-box b-tech">
                            <div class="t-item"><i class="fab fa-react"></i> React UI</div>
                            <div class="t-item"><i class="fab fa-node-js"></i> Node Engine</div>
                            <div class="t-item"><i class="fab fa-laravel"></i> Laravel</div>
                        </div>
                    </div>
                </div>

                <!-- Project 02 -->
                <div class="swiper-slide">
                    <div class="bento-card">
                        <div class="b-box b-main" style="background-image: url('assets/images/services/software.jpg');">
                            <div class="b-main-content">
                                <span class="b-tag">Healthcare ERP</span>
                                <h3>Health-Sync <br> Medical Network</h3>
                            </div>
                        </div>
                        <div class="b-box b-stats">
                            <div class="s-node"><h4>100%</h4><span>Secure</span></div>
                            <div class="s-node"><h4>50k+</h4><span>Patients</span></div>
                            <div class="s-node"><h4>HIPAA</h4><span>Certified</span></div>
                        </div>
                        <div class="b-box b-tech">
                            <div class="t-item"><i class="fas fa-shield-halved"></i> AES-256</div>
                            <div class="t-item"><i class="fas fa-server"></i> MySQL</div>
                            <div class="t-item"><i class="fas fa-cloud-medical"></i> AWS</div>
                        </div>
                    </div>
                </div>

                <!-- Project 03 -->
                <div class="swiper-slide">
                    <div class="bento-card">
                        <div class="b-box b-main" style="background-image: url('assets/images/services/mobile.jpg');">
                            <div class="b-main-content">
                                <span class="b-tag">Mobility App</span>
                                <h3>Drive-Go <br> Smart Rental</h3>
                            </div>
                        </div>
                        <div class="b-box b-stats">
                            <div class="s-node"><h4>+120k</h4><span>Installs</span></div>
                            <div class="s-node"><h4>4.9/5</h4><span>Rating</span></div>
                            <div class="s-node"><h4>24/7</h4><span>GPS Core</span></div>
                        </div>
                        <div class="b-box b-tech">
                            <div class="t-item"><i class="fas fa-mobile-screen"></i> Flutter</div>
                            <div class="t-item"><i class="fas fa-location-dot"></i> Maps API</div>
                            <div class="t-item"><i class="fas fa-fire"></i> Firebase</div>
                        </div>
                    </div>
                </div>

                <!-- Project 04 -->
                <div class="swiper-slide">
                    <div class="bento-card">
                        <div class="b-box b-main" style="background-image: url('assets/images/services/seo.jpg');">
                            <div class="b-main-content">
                                <span class="b-tag">FinTech Solution</span>
                                <h3>Wealth-Hub <br> AI Dashboard</h3>
                            </div>
                        </div>
                        <div class="b-box b-stats">
                            <div class="s-node"><h4>0.1s</h4><span>Sync</span></div>
                            <div class="s-node"><h4>98%</h4><span>Accuracy</span></div>
                            <div class="s-node"><h4>PCI-v3</h4><span>Secure</span></div>
                        </div>
                        <div class="b-box b-tech">
                            <div class="t-item"><i class="fab fa-react"></i> React MERN</div>
                            <div class="t-item"><i class="fas fa-brain"></i> AI Match</div>
                            <div class="t-item"><i class="fab fa-aws"></i> Lambda</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- FIXED NAVIGATION CONTROLS -->
        <div class="bento-nav-container">
            <div class="b-nav-btn bento-prev"><i class="fas fa-arrow-left"></i></div>
            <div class="b-nav-btn bento-next"><i class="fas fa-arrow-right"></i></div>
        </div>
    </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        new Swiper(".bento-swiper", {
            effect: "creative",
            speed: 1200, 
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            loop: true,
            autoplay: { delay: 4500, disableOnInteraction: false },
            creativeEffect: {
                prev: {
                    shadow: true,
                    translate: ["-130%", "10%", -800],
                    rotate: [0, 0, -30], /* The Circular Curve Exit */
                },
                next: {
                    translate: ["130%", "10%", -800],
                    rotate: [0, 0, 30], /* The Circular Curve Entry */
                },
            },
            navigation: {
                nextEl: ".bento-next",
                prevEl: ".bento-prev",
            },
        });
    });
</script>
