<?php include_once 'config.php'; ?><?php
include 'header.php';
include 'backend/db.php'; // Include database connection

// --- Pagination Setup ---
$posts_per_page = 6;
$current_page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($current_page - 1) * $posts_per_page;

// --- Fetch Blog Posts ---
$posts_sql = "SELECT id, title, author, content, reg_date, image_url FROM posts ORDER BY id DESC LIMIT $posts_per_page OFFSET $offset";
$posts_result = $conn->query($posts_sql);
$posts = [];
if ($posts_result && $posts_result->num_rows > 0) {
    while ($row = $posts_result->fetch_assoc()) {
        // Simple truncation for description
        $row['description'] = strip_tags($row['content']);
        if (strlen($row['description']) > 150) {
            $row['description'] = substr($row['description'], 0, 150) . '...';
        }
        $posts[] = $row;
    }
}

// --- Calculate Total Pages for Pagination ---
$total_posts_sql = "SELECT COUNT(*) AS total FROM posts";
$total_posts_result = $conn->query($total_posts_sql);
$total_posts = 0;
if ($total_posts_result) {
    $total_posts = $total_posts_result->fetch_assoc()['total'];
}
$total_pages = ceil($total_posts / $posts_per_page);

// --- Fetch Dynamic Banner ---
$page_file = 'blog.php';
$banner_res = $conn->query("SELECT * FROM page_banners WHERE page_name = '$page_file'");
$banner_data = ($banner_res && $banner_res->num_rows > 0) ? $banner_res->fetch_assoc() : null;

$display_banner_img = ($banner_data && !empty($banner_data['banner_image'])) ? $banner_data['banner_image'] : BASE_URL . 'assets/images/banner/banner.webp';
$display_banner_title = ($banner_data && !empty($banner_data['banner_title'])) ? $banner_data['banner_title'] : 'Latest Insights & Articles';

$breadcrumb_active = 'Blog';
$section_subtitle = 'Stay Updated';
$section_main_title = 'Explore Our Latest Blog Posts';
?>

    <style>
        /* General Page Banner Styling (similar to team.php) */
        .page-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo $display_banner_img; ?>');
            background-size: cover;
            background-position: center;
            padding-top: 220px;
            padding-bottom: 100px;
            text-align: center;
            color: #fff;
            margin-bottom: 50px;
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

        /* Additional styling for blog listing page content */
        .blog-listing-section {
            padding-bottom: 80px;
        }
        .blog-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            margin-bottom: 30px;
            transition: all 0.3s ease; /* Smooth transition for all changes */
            height: 100%; /* Ensure cards are same height */
            display: flex;
            flex-direction: column;
            position: relative;
        }
        .blog-card:hover {
            transform: translateY(-8px); /* Lift up slightly more */
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2); /* More prominent shadow */
        }
        .blog-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.3s ease; /* Smooth transition for image zoom */
        }
        .blog-card:hover img {
            transform: scale(1.05); /* Image zoom on hover */
        }
        .blog-card .card-body {
            padding: 25px;
            flex-grow: 1; /* Allow body to grow */
            display: flex;
            flex-direction: column;
        }
        .blog-card .post-category {
            display: inline-block;
            background: #eef4ff;
            color: #3C72FC;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 15px;
        }
        .blog-card .post-title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 10px;
            line-height: 1.4;
            opacity: 1 !important; /* Ensure always visible */
            visibility: visible !important; /* Ensure always visible */
            height: auto !important; /* Ensure not hidden by height: 0 */
            max-height: none !important; /* Ensure not hidden by max-height: 0 */
            overflow: visible !important; /* Ensure not hidden by overflow: hidden */
            position: static !important; /* Reset position that might be hiding it */
            z-index: auto !important; /* Reset z-index */
            transform: none !important; /* Reset transforms that might be hiding it */
            transition: color 0.3s ease !important; /* Add transition for color change */
        }
        .blog-card .post-title a {
            color: inherit !important; /* Ensure link color is not overridden */
            text-decoration: none !important; /* Ensure not underlined by default */
            opacity: 1 !important; /* Ensure always visible */
            visibility: visible !important; /* Ensure always visible */
            position: static !important;
            z-index: auto !important;
            transform: none !important;
            transition: color 0.3s ease !important; /* Add transition for color change */
        }
        .blog-card:hover .post-title a {
            color: #3C72FC !important; /* Change title color on hover */
        }

        .blog-card .post-description {
            font-size: 15px;
            color: #666;
            margin-bottom: 20px;
            flex-grow: 1; /* Allow description to grow */
        }
        .blog-card .read-more {
            color: #3C72FC;
            font-weight: 600;
            text-decoration: none;
            transition: transform 0.3s ease; /* Smooth transition for arrow */
        }
        .blog-card .read-more i {
            margin-left: 5px;
            transition: transform 0.3s ease; /* Smooth transition for arrow */
        }
        .blog-card:hover .read-more i {
            transform: translateX(5px); /* Move arrow to the right on hover */
        }
        .blog-card .post-date {
            font-size: 13px;
            color: #999;
            margin-top: 15px;
            border-top: 1px solid #eee;
            padding-top: 10px;
        }

        /* Pagination Styling */
        .pagination-custom .page-item.active .page-link {
            background-color: #3C72FC;
            border-color: #3C72FC;
            color: #fff;
        }
        .pagination-custom .page-link {
            color: #3C72FC;
        }
        .pagination-custom .page-link:hover {
            color: #000;
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
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $breadcrumb_active; ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-listing-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <div class="ser-head text-center mb-5" data-aos="fade-up">
                      <div class="hed text-center">
                         <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                         <span><?php echo $section_subtitle; ?></span>
                         <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                      </div>
                      <h3><?php echo $section_main_title; ?></h3>
                   </div>
                </div>
           </div>

            <div class="row justify-content-center">
                <?php if (!empty($posts)): ?>
                    <?php foreach ($posts as $post): ?>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="blog-card">
                            <img src="<?php echo htmlspecialchars($post['image_url'] ?? 'assets/images/placeholder.jpg'); ?>" class="img-fluid" alt="<?php echo htmlspecialchars($post['title']); ?>">
                            <div class="card-body">
                                
                                <h4 class="post-title"><a href="blog_post.php?id=<?php echo $post['id']; ?>"><?php echo htmlspecialchars($post['title']); ?></a></h4>
                                <p class="post-description"><?php echo htmlspecialchars($post['description']); ?></p>
                                <a href="blog_post.php?id=<?php echo $post['id']; ?>" class="read-more">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                <div class="post-date"><?php echo date('F d, Y', strtotime($post['reg_date'])); ?></div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12 text-center">
                        <p>No blog posts found.</p>
                        
                    </div>
                <?php endif; ?>
            </div>

            <!-- Pagination -->
            <?php if ($total_pages > 1): ?>
            <div class="row mt-5">
                <div class="col-12">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center pagination-custom">
                            <li class="page-item <?php echo ($current_page <= 1) ? 'disabled' : ''; ?>">
                                <a class="page-link" href="?page=<?php echo $current_page - 1; ?>" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                            <li class="page-item <?php echo ($current_page == $i) ? 'active' : ''; ?>">
                                <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                            </li>
                            <?php endfor; ?>
                            <li class="page-item <?php echo ($current_page >= $total_pages) ? 'disabled' : ''; ?>">
                                <a class="page-link" href="?page=<?php echo $current_page + 1; ?>">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <?php endif; ?>

        </div>
    </section>

<?php include 'footer.php'; ?>
<?php $conn->close(); // Close DB connection after all queries ?>
