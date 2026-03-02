<?php 
$page_title = 'The Engineering Vanguard | WebNexa';
include_once __DIR__ . '/../config.php'; 
include_once __DIR__ . '/../header-new.php'; 
?>

<style>
    .team-main { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    
    .team-hero { position: relative; padding: 220px 0 100px; background: #080b12; overflow: hidden; text-align: center; }
    .team-hero h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; position: relative; z-index: 10; }

    .team-grid-v3 { display: grid; grid-template-columns: repeat(4, 1fr); gap: 25px; padding: 100px 0; }
    
    .team-card-v3 { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 40px; overflow: hidden; backdrop-filter: blur(40px); transition: 0.4s; height: 100%; display: flex; flex-direction: column; }
    .team-card-v3:hover { border-color: rgba(114, 79, 255, 0.4); transform: translateY(-12px); background: rgba(114, 79, 255, 0.03); }

    .team-img-v3 { height: 320px; position: relative; overflow: hidden; }
    .team-img-v3 img { width: 100%; height: 100%; object-fit: cover; filter: grayscale(100%) contrast(1.1); transition: 0.5s; }
    .team-card-v3:hover .team-img-v3 img { filter: grayscale(0%); transform: scale(1.05); }

    .team-info-v3 { padding: 30px; text-align: center; flex-grow: 1; display: flex; flex-direction: column; }
    .team-info-v3 h4 { font-size: 24px; font-weight: 900; margin-bottom: 5px; }
    .team-info-v3 .role-v3 { display: block; font-size: 11px; font-weight: 800; text-transform: uppercase; color: rgb(216, 115, 255); letter-spacing: 2px; margin-bottom: 15px; }
    
    .tech-badges-v3 { display: flex; justify-content: center; gap: 8px; flex-wrap: wrap; margin-top: auto; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.05); }
    .t-badge { font-size: 10px; font-weight: 700; background: rgba(255,255,255,0.05); padding: 4px 10px; border-radius: 4px; color: #94a3b8; }

    @media (max-width: 1400px) { .team-grid-v3 { grid-template-columns: repeat(3, 1fr); } }
    @media (max-width: 991px) { .team-grid-v3 { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 575px) { .team-grid-v3 { grid-template-columns: 1fr; } }
</style>

<div class="team-main">
    <section class="team-hero">
        <div class="hero-glow"></div>
        <div class="container">
            <div class="tech-badge" data-aos="fade-down">The Engineering Vanguard</div>
            <h1 data-aos="zoom-in">Mastering the <br> <span class="gradient-tech-text">Modern Stack</span></h1>
            <p style="color: #94a3b8; max-width: 800px; margin: 30px auto 0; font-size: 19px; line-height: 1.8;" data-aos="fade-up">Our team consists of elite-level engineers, researchers, and creative strategists who eat, sleep, and breathe high-performance code.</p>
        </div>
    </section>

    <div class="container">
        <div class="team-grid-v3">
            
            <div class="team-card-v3" data-aos="fade-up">
                <div class="team-img-v3">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1974&auto=format&fit=crop" alt="Pranshu">
                </div>
                <div class="team-info-v3">
                    <span class="role-v3">MERN Architecture Lead</span>
                    <h4>Pranshu Sharma</h4>
                    <p style="color:#94a3b8; font-size:14px; margin-bottom:20px;">Master of high-concurrency Node.js environments and React performance tuning.</p>
                    <div class="tech-badges-v3">
                        <span class="t-badge">Node.js</span>
                        <span class="t-badge">React</span>
                        <span class="t-badge">Redis</span>
                        <span class="t-badge">AWS</span>
                    </div>
                </div>
            </div>

            <div class="team-card-v3" data-aos="fade-up" data-aos-delay="100">
                <div class="team-img-v3">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=1974&auto=format&fit=crop" alt="Nikhil">
                </div>
                <div class="team-info-v3">
                    <span class="role-v3">Senior Systems Engineer</span>
                    <h4>Nikhil Singh</h4>
                    <p style="color:#94a3b8; font-size:14px; margin-bottom:20px;">Specializes in core algorithmic design and low-level system optimization.</p>
                    <div class="tech-badges-v3">
                        <span class="t-badge">Python</span>
                        <span class="t-badge">C++</span>
                        <span class="t-badge">Go</span>
                        <span class="t-badge">Docker</span>
                    </div>
                </div>
            </div>

            <div class="team-card-v3" data-aos="fade-up" data-aos-delay="200">
                <div class="team-img-v3">
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=1976&auto=format&fit=crop" alt="Jay">
                </div>
                <div class="team-info-v3">
                    <span class="role-v3">Mobile Dev Ops</span>
                    <h4>Jay Vishwakarma</h4>
                    <p style="color:#94a3b8; font-size:14px; margin-bottom:20px;">Architecting seamless cross-platform experiences with Flutter and Swift.</p>
                    <div class="tech-badges-v3">
                        <span class="t-badge">Flutter</span>
                        <span class="t-badge">Swift</span>
                        <span class="t-badge">Kotlin</span>
                        <span class="t-badge">Firebase</span>
                    </div>
                </div>
            </div>

            <div class="team-card-v3" data-aos="fade-up" data-aos-delay="300">
                <div class="team-img-v3">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1974&auto=format&fit=crop" alt="Prince">
                </div>
                <div class="team-info-v3">
                    <span class="role-v3">Performance Marketing Head</span>
                    <h4>Prince Thakur</h4>
                    <p style="color:#94a3b8; font-size:14px; margin-bottom:20px;">Driving growth through advanced data-modeling and algorithmic SEO.</p>
                    <div class="tech-badges-v3">
                        <span class="t-badge">Analytics</span>
                        <span class="t-badge">SEO</span>
                        <span class="t-badge">Growth</span>
                        <span class="t-badge">Data</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include_once __DIR__ . '/../contact-section-shared.php'; ?>
</div>

<?php include_once __DIR__ . '/../footer.php'; ?>
