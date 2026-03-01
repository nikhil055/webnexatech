<?php 
$page_title = 'Gallery';
 include_once __DIR__ . '/../config.php'; include_once __DIR__ . '/../header.php'; ?>
<?php 
include_once __DIR__ . '/../backend/db.php';
$page_file = 'about/gallery.php';
$banner_res = $conn->query("SELECT * FROM page_banners WHERE page_name = '$page_file'");
$banner_data = ($banner_res && $banner_res->num_rows > 0) ? $banner_res->fetch_assoc() : null;

$display_banner_img = ($banner_data && !empty($banner_data['banner_image'])) ? $banner_data['banner_image'] : 'https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=2070&auto=format&fit=crop';
$display_banner_title = ($banner_data && !empty($banner_data['banner_title'])) ? $banner_data['banner_title'] : 'Our Gallery';
?>

    <style>
        .page-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo $display_banner_img; ?>');
            background-size: cover;
            background-position: center;
            padding-top: 220px;
            padding-bottom: 100px;
            text-align: center;
            color: #fff;
        }

        .page-banner h2 {
            font-size: 55px;
            font-weight: 800;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .breadcrumb-custom {
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            display: inline-flex;
            padding: 10px 20px;
            border-radius: 30px;
            backdrop-filter: blur(5px);
        }

        .breadcrumb-custom .breadcrumb-item a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
        }

        .breadcrumb-custom .breadcrumb-item.active {
            color: #3C72FC;
            font-weight: 700;
        }

        /* Filter Section */
        .gallery-section { padding: 80px 0; }

        .filter-tabs {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 50px;
            flex-wrap: wrap;
        }

        .filter-btn {
            background: #f8f9fa;
            border: 1px solid #eee;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 700;
            color: #1a1a1a;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn.active, .filter-btn:hover {
            background: var(--primary-blue);
            color: #fff;
            border-color: var(--primary-blue);
            box-shadow: 0 5px 15px rgba(60, 114, 252, 0.3);
        }

        /* Gallery Grid */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            grid-auto-rows: 300px;
            grid-gap: 25px;
            grid-auto-flow: dense;
        }

        .gallery-item {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: all 0.5s ease;
        }

        .gallery-item.hide { display: none; }

        /* Masonry variations */
        .gallery-item.wide { grid-column: span 2; }
        .gallery-item.tall { grid-row: span 2; }
        .gallery-item.big { grid-column: span 2; grid-row: span 2; }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.6s ease;
        }

        .gallery-item:hover img { transform: scale(1.1); }

        .gallery-overlay {
            position: absolute;
            inset: 0;
            background: rgba(60, 114, 252, 0.85);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: 0.4s;
        }

        .gallery-item:hover .gallery-overlay { opacity: 1; }

        .overlay-text {
            text-align: center;
            color: #fff;
            padding: 20px;
            transform: translateY(20px);
            transition: 0.4s;
        }

        .gallery-item:hover .overlay-text { transform: translateY(0); }

        .overlay-text i { font-size: 30px; margin-bottom: 10px; display: block; }
        .overlay-text h5 { font-weight: 700; margin: 0; text-transform: uppercase; letter-spacing: 1px; }

        @media (max-width: 992px) {
            .gallery-item.wide, .gallery-item.big { grid-column: span 1; }
            .gallery-grid { grid-auto-rows: 250px; }
        }
    </style>

<section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12" data-aos="zoom-in">
                    <h2><?php echo $display_banner_title; ?></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom">
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery-section">
        <div class="container-fluid px-lg-5">
            
            <div class="filter-tabs" data-aos="fade-up">
                <button class="filter-btn active" data-target="all">All Highlights</button>
                <button class="filter-btn" data-target="corporate">Corporate</button>
                <button class="filter-btn" data-target="creative">Creative Hub</button>
                <button class="filter-btn" data-target="team">Team Culture</button>
                <button class="filter-btn" data-target="events">Global Events</button>
            </div>

            <div class="gallery-grid" id="galleryGrid" data-aos="fade-up">
                
                <div class="gallery-item big corporate">
                    <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?q=80&w=2070&auto=format&fit=crop" alt="Corporate">
                    <div class="gallery-overlay">
                        <div class="overlay-text">
                            <i class="fa-solid fa-expand"></i>
                            <h5>Modern Workspace</h5>
                        </div>
                    </div>
                </div>

                <div class="gallery-item tall team">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop" alt="Team">
                    <div class="gallery-overlay">
                        <div class="overlay-text">
                            <i class="fa-solid fa-users"></i>
                            <h5>Our Experts</h5>
                        </div>
                    </div>
                </div>

                <div class="gallery-item creative">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070&auto=format&fit=crop" alt="Creative">
                    <div class="gallery-overlay">
                        <div class="overlay-text">
                            <i class="fa-solid fa-lightbulb"></i>
                            <h5>Ideation Session</h5>
                        </div>
                    </div>
                </div>

                <div class="gallery-item wide events">
                    <img src="https://images.unsplash.com/photo-1540575861501-7cf05a4b125a?q=80&w=2070&auto=format&fit=crop" alt="Events">
                    <div class="gallery-overlay">
                        <div class="overlay-text">
                            <i class="fa-solid fa-microphone"></i>
                            <h5>Tech Summit 2025</h5>
                        </div>
                    </div>
                </div>

                <div class="gallery-item creative tall">
                    <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?q=80&w=2070&auto=format&fit=crop" alt="Creative">
                    <div class="gallery-overlay">
                        <div class="overlay-text">
                            <i class="fa-solid fa-pen-nib"></i>
                            <h5>UI/UX Design</h5>
                        </div>
                    </div>
                </div>

                <div class="gallery-item team wide">
                    <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=2032&auto=format&fit=crop" alt="Team">
                    <div class="gallery-overlay">
                        <div class="overlay-text">
                            <i class="fa-solid fa-handshake"></i>
                            <h5>Culture & Growth</h5>
                        </div>
                    </div>
                </div>

                <div class="gallery-item corporate">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop" alt="Corporate">
                    <div class="gallery-overlay">
                        <div class="overlay-text">
                            <i class="fa-solid fa-building"></i>
                            <h5>Innovation Hub</h5>
                        </div>
                    </div>
                </div>

                <div class="gallery-item big events">
                    <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?q=80&w=2069&auto=format&fit=crop" alt="Events">
                    <div class="gallery-overlay">
                        <div class="overlay-text">
                            <i class="fa-solid fa-glass-cheers"></i>
                            <h5>Grand Celebration</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const galleryItems = document.querySelectorAll('.gallery-item');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    filterBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');

                    const target = btn.getAttribute('data-target');

                    galleryItems.forEach(item => {
                        item.classList.remove('hide');
                        if (target !== 'all' && !item.classList.contains(target)) {
                            item.classList.add('hide');
                        }
                    });
                    
                    if(typeof AOS !== 'undefined') { AOS.refresh(); }
                });
            });
        });
    </script>

<?php include_once __DIR__ . '/../footer.php'; ?>
