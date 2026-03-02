<?php include_once 'config.php'; ?>
<style>
    .how-pipeline-v2 {
        position: relative;
        padding: 140px 0;
        background: #080b12;
        color: #fff;
        font-family: 'Inter', sans-serif;
        overflow: hidden;
    }

    /* Ambient BG */
    .pipeline-bg-glow {
        position: absolute;
        top: 20%; left: -10%;
        width: 600px; height: 600px;
        background: radial-gradient(circle, rgba(114, 79, 255, 0.05) 0%, transparent 70%);
        filter: blur(80px);
        z-index: 1;
    }

    .container { position: relative; z-index: 10; }

    /* PIPELINE GRID */
    .pipeline-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 0; /* Cards will be connected by lines */
        margin-top: 80px;
        position: relative;
    }

    /* THE CONNECTING LINE */
    .pipeline-line {
        position: absolute;
        top: 100px;
        left: 10%;
        right: 10%;
        height: 2px;
        background: rgba(255, 255, 255, 0.05);
        z-index: 1;
    }

    .pipeline-line-active {
        position: absolute;
        top: 0; left: 0; height: 100%;
        width: 0;
        background: linear-gradient(90deg, rgb(114, 79, 255), rgb(221, 0, 184));
        box-shadow: 0 0 15px rgba(114, 79, 255, 0.5);
        transition: 2s ease-in-out;
    }

    /* PIPELINE STEP CARD */
    .pipeline-step {
        position: relative;
        z-index: 5;
        text-align: center;
        padding: 0 20px;
    }

    .step-node {
        width: 80px; height: 80px;
        background: #0a0f1a;
        border: 2px solid rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        margin: 0 auto 40px;
        display: flex; align-items: center; justify-content: center;
        font-size: 24px; color: #94a3b8;
        position: relative;
        transition: 0.4s;
        box-shadow: 0 0 30px rgba(0,0,0,0.5);
    }

    .step-number {
        position: absolute;
        top: -10px; right: -10px;
        width: 30px; height: 30px;
        background: rgb(114, 79, 255);
        border-radius: 50%;
        font-size: 12px; font-weight: 900;
        display: flex; align-items: center; justify-content: center;
        color: #fff;
        box-shadow: 0 5px 15px rgba(114, 79, 255, 0.4);
    }

    .step-card {
        background: rgba(255, 255, 255, 0.015);
        border: 1px solid rgba(255, 255, 255, 0.05);
        padding: 35px 25px;
        border-radius: 30px;
        backdrop-filter: blur(20px);
        transition: 0.4s;
    }

    /* Interaction Logic */
    .pipeline-step:hover .step-node {
        border-color: rgb(114, 79, 255);
        color: #fff;
        transform: scale(1.1);
        box-shadow: 0 0 40px rgba(114, 79, 255, 0.3);
    }

    .pipeline-step:hover .step-card {
        background: rgba(114, 79, 255, 0.05);
        border-color: rgba(114, 79, 255, 0.3);
        transform: translateY(-10px);
    }

    .step-card h4 { font-size: 20px; font-weight: 800; margin-bottom: 15px; letter-spacing: -0.5px; }
    .step-card p { font-size: 14px; color: #94a3b8; line-height: 1.6; margin: 0; }

    .phase-tag {
        font-size: 10px; font-weight: 800; color: rgb(216, 115, 255);
        text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 10px; display: block;
    }

    @media (max-width: 991px) {
        .pipeline-grid { grid-template-columns: 1fr; gap: 50px; }
        .pipeline-line { display: none; }
        .step-node { margin-bottom: 20px; }
    }
</style>

<section class="how-pipeline-v2" id="how-it-works">
    <div class="pipeline-bg-glow"></div>
    
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <div class="tech-badge-v3"><i class="fas fa-microchip"></i> Strategic Flow</div>
            <h2>Our High-Performance <br> <span class="gradient-tech-text">Development Pipeline</span></h2>
        </div>

        <div class="pipeline-grid">
            <div class="pipeline-line">
                <div class="pipeline-line-active" id="active-pipe"></div>
            </div>

            <!-- Step 01 -->
            <div class="pipeline-step" data-aos="fade-up" data-aos-delay="100">
                <div class="step-node">
                    <i class="fas fa-magnifying-glass-chart"></i>
                    <div class="step-number">01</div>
                </div>
                <div class="step-card">
                    <span class="phase-tag">Phase: ARCHITECTURE</span>
                    <h4>Consultation & <br> Strategic Planning</h4>
                    <p>We deep-dive into your business logic to architect a blueprint for scalability and market dominance.</p>
                </div>
            </div>

            <!-- Step 02 -->
            <div class="pipeline-step" data-aos="fade-up" data-aos-delay="200">
                <div class="step-node">
                    <i class="fas fa-code"></i>
                    <div class="step-number">02</div>
                </div>
                <div class="step-card">
                    <span class="phase-tag">Phase: PRODUCTION</span>
                    <h4>Agile Design & <br> Engineering</h4>
                    <p>Our engineers craft pixel-perfect UIs and robust back-end systems using modern, clean-code standards.</p>
                </div>
            </div>

            <!-- Step 03 -->
            <div class="pipeline-step" data-aos="fade-up" data-aos-delay="300">
                <div class="step-node">
                    <i class="fas fa-shield-halved"></i>
                    <div class="step-number">03</div>
                </div>
                <div class="step-card">
                    <span class="phase-tag">Phase: VALIDATION</span>
                    <h4>QA & Security <br> Hardening</h4>
                    <p>Every line of code undergoes rigorous automated testing and military-grade security penetration checks.</p>
                </div>
            </div>

            <!-- Step 04 -->
            <div class="pipeline-step" data-aos="fade-up" data-aos-delay="400">
                <div class="step-node">
                    <i class="fas fa-cloud-arrow-up"></i>
                    <div class="step-number">04</div>
                </div>
                <div class="step-card">
                    <span class="phase-tag">Phase: DEPLOYMENT</span>
                    <h4>Cloud Launch & <br> 24/7 Monitoring</h4>
                    <p>We scale your product globally with cloud-native deployment and continuous optimization support.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Simple intersection observer to animate the pipeline line
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    document.getElementById('active-pipe').style.width = '100%';
                }
            });
        }, { threshold: 0.5 });

        observer.observe(document.querySelector('.pipeline-grid'));
    });
</script>
