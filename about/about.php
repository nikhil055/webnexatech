<?php 
$page_title = 'Our Journey & Core | WebNexa';
include_once __DIR__ . '/../config.php'; 
include_once __DIR__ . '/../header-new.php'; 
?>

<style>
    .about-main-v2 { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    .about-fixed-bg { position: fixed; inset: 0; z-index: 1; pointer-events: none; opacity: 0.2; }
    .data-drop { position: absolute; width: 1px; height: 100px; background: linear-gradient(to bottom, transparent, rgb(114, 79, 255), transparent); animation: dropMove 5s infinite linear; }
    @keyframes dropMove { 0% { transform: translateY(-100px); opacity: 0; } 100% { transform: translateY(100vh); opacity: 0; } }

    /* ELITE BANNER */
    .about-hero { position: relative; padding: 220px 0 120px; background: #080b12; overflow: hidden; text-align: center; }
    .hero-grid { position: absolute; inset: 0; background-image: radial-gradient(rgba(114, 79, 255, 0.05) 1px, transparent 1px); background-size: 50px 50px; transform: perspective(500px) rotateX(60deg); }
    .hero-glow { position: absolute; top: 50%; left: 50%; width: 800px; height: 800px; background: radial-gradient(circle, rgba(114, 79, 255, 0.1) 0%, transparent 70%); transform: translate(-50%, -50%); filter: blur(100px); }
    .about-hero h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; line-height: 0.95; margin-bottom: 30px; position: relative; z-index: 10; }

    /* SHARED STYLES */
    .content-block { padding: 120px 0; position: relative; z-index: 10; }
    .tech-badge { display: inline-flex; align-items: center; gap: 8px; background: rgba(114, 79, 255, 0.1); border: 1px solid rgba(114, 79, 255, 0.2); padding: 6px 18px; border-radius: 100px; font-size: 12px; font-weight: 800; color: rgb(216, 115, 255); text-transform: uppercase; letter-spacing: 2px; margin-bottom: 25px; }
    .section-title { font-size: clamp(32px, 4.5vw, 54px); font-weight: 900; line-height: 1.1; letter-spacing: -2px; margin-bottom: 30px; }

    .glass-card { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; backdrop-filter: blur(40px); transition: 0.4s; padding: 50px; }
    .glass-card:hover { border-color: rgba(114, 79, 255, 0.4); transform: translateY(-10px); background: rgba(114, 79, 255, 0.03); }

    .core-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; margin-top: 60px; }
    .core-card { text-align: center; }
    .core-icon { font-size: 40px; color: rgb(114, 79, 255); margin-bottom: 25px; display: block; }
    .core-card h4 { font-size: 24px; font-weight: 800; margin-bottom: 15px; }
    .core-card p { color: #94a3b8; font-size: 16px; line-height: 1.7; }

    @media (max-width: 991px) { .core-grid { grid-template-columns: 1fr; } }
</style>

<div class="about-main-v2">
    <div class="about-fixed-bg" id="about-fx-bg"></div>

    <section class="about-hero">
        <div class="hero-grid"></div>
        <div class="hero-glow"></div>
        <div class="container">
            <div class="tech-badge" data-aos="fade-down">The WebNexa Origin</div>
            <h1 data-aos="zoom-in">Architecting the <br> <span class="gradient-tech-text">Digital Vanguard</span></h1>
            <p style="color: #94a3b8; max-width: 750px; margin: 0 auto; font-size: 19px; line-height: 1.8;" data-aos="fade-up">Founded on the principles of engineering perfection and data-driven growth, WebNexa transforms complex business challenges into elite digital ecosystems.</p>
        </div>
    </section>

    <section class="content-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="glass-card" style="padding: 0; overflow: hidden; border-radius: 50px;">
                        <img src="<?php echo BASE_URL; ?>assets/images/about/about.png" class="img-fluid" style="filter: brightness(0.7) contrast(1.1);" alt="About WebNexa">
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5" data-aos="fade-left">
                    <div class="tech-badge">Our Philosophy</div>
                    <h2 class="section-title">Beyond Code: <br> <span class="gradient-tech-text">We Build Dominance</span></h2>
                    <p style="color: #94a3b8; font-size: 18px; line-height: 1.8; margin-bottom: 30px;">WebNexa is an elite digital engineering firm. We don't just deliver projects; we architect sustainable growth engines. Our journey is defined by a relentless pursuit of sub-second latency, fortified security, and pixel-perfect brand storytelling.</p>
                    <div style="display: flex; gap: 30px;">
                        <div><h5 style="margin:0; font-weight:900; font-size:32px;">10+</h5><span style="font-size:11px; color:rgb(216, 115, 255); text-transform:uppercase; font-weight:800;">Years of Innovation</span></div>
                        <div><h5 style="margin:0; font-weight:900; font-size:32px;">500+</h5><span style="font-size:11px; color:rgb(216, 115, 255); text-transform:uppercase; font-weight:800;">Systems Deployed</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-block" style="background: #080b12; border-top: 1px solid rgba(255,255,255,0.05);">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="tech-badge">Core Principles</div>
                <h2 class="section-title">Driving the <span class="gradient-tech-text">WebNexa Engine</span></h2>
            </div>

            <div class="core-grid">
                <div class="glass-card core-card" data-aos="fade-up">
                    <i class="fas fa-bullseye core-icon"></i>
                    <h4>The Mission</h4>
                    <p>To engineer hyper-scalable digital solutions that empower enterprises to dominate their market share through technical excellence.</p>
                </div>
                <div class="glass-card core-card" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-eye core-icon"></i>
                    <h4>The Vision</h4>
                    <p>To be the world's most trusted digital vanguard, recognized for architecting the most complex and secure systems on the web.</p>
                </div>
                <div class="glass-card core-card" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-microchip core-icon"></i>
                    <h4>The Values</h4>
                    <p>Integrity, Precision, Innovation, and Zero-Debt Engineering. These are the four pillars of every line of code we write.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include_once __DIR__ . '/../contact-section-shared.php'; ?>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const bg = document.getElementById('about-fx-bg');
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
