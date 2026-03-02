<?php 
$page_title = 'Visual Archive | WebNexa';
include_once __DIR__ . '/../config.php'; 
include_once __DIR__ . '/../header-new.php'; 
?>

<style>
    .gallery-main { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    
    .gallery-hero { position: relative; padding: 220px 0 100px; background: #080b12; overflow: hidden; text-align: center; }
    .gallery-hero h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; position: relative; z-index: 10; }

    .gallery-container { padding: 100px 0; }
    
    /* FILTER */
    .filter-wrap-v2 { display: flex; justify-content: center; gap: 12px; margin-bottom: 60px; flex-wrap: wrap; }
    .filter-btn-v2 { background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.1); padding: 10px 25px; border-radius: 100px; color: #94a3b8; font-weight: 700; font-size: 13px; cursor: pointer; transition: 0.3s; text-transform: uppercase; letter-spacing: 1px; }
    .filter-btn-v2.active, .filter-btn-v2:hover { background: rgb(114, 79, 255); color: #fff; border-color: rgb(114, 79, 255); box-shadow: 0 10px 20px rgba(114, 79, 255, 0.3); }

    /* MASONRY GRID */
    .gallery-grid-v2 { display: grid; grid-template-columns: repeat(4, 1fr); grid-auto-rows: 250px; gap: 20px; }
    .g-item-v2 { position: relative; border-radius: 30px; overflow: hidden; border: 1px solid rgba(255,255,255,0.08); transition: 0.5s; cursor: pointer; }
    .g-item-v2.wide { grid-column: span 2; }
    .g-item-v2.tall { grid-row: span 2; }
    .g-item-v2.big { grid-column: span 2; grid-row: span 2; }
    
    .g-item-v2 img { width: 100%; height: 100%; object-fit: cover; transition: 0.6s cubic-bezier(0.165, 0.84, 0.44, 1); filter: grayscale(100%) contrast(1.1) brightness(0.8); }
    .g-item-v2:hover img { transform: scale(1.1); filter: grayscale(0%) contrast(1) brightness(1); }

    .g-overlay-v2 { position: absolute; inset: 0; background: linear-gradient(to top, rgba(114, 79, 255, 0.8), transparent); opacity: 0; transition: 0.4s; display: flex; align-items: flex-end; padding: 30px; }
    .g-item-v2:hover .g-overlay-v2 { opacity: 1; }
    .g-info-v2 h5 { font-weight: 900; margin: 0; font-size: 18px; transform: translateY(20px); transition: 0.4s; }
    .g-item-v2:hover .g-info-v2 h5 { transform: translateY(0); }

    @media (max-width: 1200px) { .gallery-grid-v2 { grid-template-columns: repeat(3, 1fr); } }
    @media (max-width: 991px) { .gallery-grid-v2 { grid-template-columns: repeat(2, 1fr); } .g-item-v2.wide, .g-item-v2.big { grid-column: span 1; } }
    @media (max-width: 575px) { .gallery-grid-v2 { grid-template-columns: 1fr; } .g-item-v2.tall { grid-row: span 1; } }
</style>

<div class="gallery-main">
    <section class="gallery-hero">
        <div class="hero-glow"></div>
        <div class="container">
            <div class="tech-badge" data-aos="fade-down">The Visual Archive</div>
            <h1 data-aos="zoom-in">Inside the <br> <span class="gradient-tech-text">WebNexa Labs</span></h1>
        </div>
    </section>

    <section class="gallery-container">
        <div class="container-fluid px-lg-5">
            <div class="filter-wrap-v2" data-aos="fade-up">
                <button class="filter-btn-v2 active" data-target="all">Global Feed</button>
                <button class="filter-btn-v2" data-target="tech">Tech Labs</button>
                <button class="filter-btn-v2" data-target="creative">Creative Studio</button>
                <button class="filter-btn-v2" data-target="culture">Elite Culture</button>
            </div>

            <div class="gallery-grid-v2">
                <div class="g-item-v2 big tech" data-aos="fade-up">
                    <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?q=80&w=2070&auto=format&fit=crop" alt="Labs">
                    <div class="g-overlay-v2"><div class="g-info-v2"><h5>Neural Network Lab</h5></div></div>
                </div>
                <div class="g-item-v2 tall culture" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop" alt="Culture">
                    <div class="g-overlay-v2"><div class="g-info-v2"><h5>Engineering Sprint</h5></div></div>
                </div>
                <div class="g-item-v2 creative" data-aos="fade-up" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070&auto=format&fit=crop" alt="Creative">
                    <div class="g-overlay-v2"><div class="g-info-v2"><h5>Design Ideation</h5></div></div>
                </div>
                <div class="g-item-v2 wide tech" data-aos="fade-up" data-aos-delay="300">
                    <img src="https://images.unsplash.com/photo-1540575861501-7cf05a4b125a?q=80&w=2070&auto=format&fit=crop" alt="Tech">
                    <div class="g-overlay-v2"><div class="g-info-v2"><h5>System Architecture Summit</h5></div></div>
                </div>
                <div class="g-item-v2 tall creative" data-aos="fade-up">
                    <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?q=80&w=2070&auto=format&fit=crop" alt="Studio">
                    <div class="g-overlay-v2"><div class="g-info-v2"><h5>Pixel Perfection Lab</h5></div></div>
                </div>
                <div class="g-item-v2 big culture" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=2032&auto=format&fit=crop" alt="Team">
                    <div class="g-overlay-v2"><div class="g-info-v2"><h5>The Elite Circle</h5></div></div>
                </div>
                <div class="g-item-v2 tech" data-aos="fade-up" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop" alt="HQ">
                    <div class="g-overlay-v2"><div class="g-info-v2"><h5>Operations Command</h5></div></div>
                </div>
                <div class="g-item-v2 wide tech" data-aos="fade-up">
                    <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?q=80&w=2069&auto=format&fit=crop" alt="Events">
                    <div class="g-overlay-v2"><div class="g-info-v2"><h5>Annual Tech Gala</h5></div></div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const btns = document.querySelectorAll('.filter-btn-v2');
            const items = document.querySelectorAll('.g-item-v2');
            btns.forEach(btn => {
                btn.addEventListener('click', () => {
                    btns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    const target = btn.dataset.target;
                    items.forEach(item => {
                        item.style.display = (target === 'all' || item.classList.contains(target)) ? 'block' : 'none';
                    });
                });
            });
        });
    </script>

    <?php include_once __DIR__ . '/../contact-section-shared.php'; ?>
</div>

<?php include_once __DIR__ . '/../footer.php'; ?>
