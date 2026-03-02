<?php 
$page_title = 'Board of Architects | WebNexa';
include_once __DIR__ . '/../config.php'; 
include_once __DIR__ . '/../header-new.php'; 
?>

<style>
    .leader-main { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    
    .leader-hero { position: relative; padding: 220px 0 100px; background: #080b12; overflow: hidden; text-align: center; }
    .leader-hero h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; line-height: 0.95; position: relative; z-index: 10; }

    .leader-section { padding: 120px 0; }
    
    .leader-grid-v2 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px; }
    .leader-card-v2 { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; padding: 50px 40px; backdrop-filter: blur(40px); transition: 0.4s; text-align: center; position: relative; overflow: hidden; }
    .leader-card-v2:hover { border-color: rgb(114, 79, 255); transform: translateY(-12px); background: rgba(114, 79, 255, 0.03); }

    .leader-img-v2 { width: 180px; height: 180px; border-radius: 50%; object-fit: cover; margin: 0 auto 30px; border: 4px solid rgba(114, 79, 255, 0.2); box-shadow: 0 0 40px rgba(114, 79, 255, 0.1); transition: 0.4s; }
    .leader-card-v2:hover .leader-img-v2 { border-color: rgb(114, 79, 255); transform: scale(1.05); }

    .leader-card-v2 h4 { font-size: 28px; font-weight: 900; margin-bottom: 8px; letter-spacing: -1px; }
    .leader-role-v2 { display: block; font-size: 12px; font-weight: 800; text-transform: uppercase; color: rgb(216, 115, 255); letter-spacing: 2px; margin-bottom: 25px; }
    .leader-bio-v2 { color: #94a3b8; font-size: 15px; line-height: 1.7; margin-bottom: 30px; }

    .leader-social-v2 { display: flex; justify-content: center; gap: 15px; }
    .leader-social-v2 a { width: 45px; height: 45px; background: rgba(255,255,255,0.05); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #fff; text-decoration: none; transition: 0.3s; }
    .leader-social-v2 a:hover { background: rgb(114, 79, 255); transform: translateY(-5px); }

    @media (max-width: 991px) { .leader-grid-v2 { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 767px) { .leader-grid-v2 { grid-template-columns: 1fr; } }
</style>

<div class="leader-main">
    <section class="leader-hero">
        <div class="hero-glow"></div>
        <div class="container">
            <div class="tech-badge" data-aos="fade-down">Strategic Council</div>
            <h1 data-aos="zoom-in">The Board of <br> <span class="gradient-tech-text">Architects</span></h1>
            <p style="color: #94a3b8; max-width: 800px; margin: 30px auto 0; font-size: 19px; line-height: 1.8;" data-aos="fade-up">Driven by a vision of global digital engineering excellence, our leadership defines the strategic roadmap for the world's most complex enterprises.</p>
        </div>
    </section>

    <section class="leader-section">
        <div class="container">
            <div class="leader-grid-v2">
                <div class="leader-card-v2" data-aos="fade-up">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1974&auto=format&fit=crop" class="leader-img-v2" alt="CEO">
                    <h4>Adrian Thorne</h4>
                    <span class="leader-role-v2">Chief Executive Officer</span>
                    <p class="leader-bio-v2">A visionary technologist with 20+ years in distributed systems and enterprise governance. Adrian founded WebNexa to bridge the gap between legacy commerce and high-frequency digital dominance.</p>
                    <div class="leader-social-v2">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>

                <div class="leader-card-v2" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=1974&auto=format&fit=crop" class="leader-img-v2" alt="CTO">
                    <h4>Elena Vance</h4>
                    <span class="leader-role-v2">Chief Technology Officer</span>
                    <p class="leader-bio-v2">Architect of the WebNexa Neural Core. Elena specializes in hyper-scalable React ecosystems and fortified cloud-native infrastructures for global retail giants.</p>
                    <div class="leader-social-v2">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>

                <div class="leader-card-v2" data-aos="fade-up" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=1976&auto=format&fit=crop" class="leader-img-v2" alt="CMO">
                    <h4>Marcus Sterling</h4>
                    <span class="leader-role-v2">Chief Marketing Officer</span>
                    <p class="leader-bio-v2">The master of performance-driven digital growth. Marcus leads our "Revenue-First" marketing protocol, scaling brand visibility across 40+ global markets.</p>
                    <div class="leader-social-v2">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once __DIR__ . '/../contact-section-shared.php'; ?>
</div>

<?php include_once __DIR__ . '/../footer.php'; ?>
