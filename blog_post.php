<?php
include 'header.php';
include 'backend/db.php'; // Include database connection

$post_id = isset($_GET['id']) && is_numeric($_GET['id']) ? (int)$_GET['id'] : 0;
$post = null;

if ($post_id > 0) {
    $post_sql = "SELECT id, title, author, content, reg_date, image_url FROM posts WHERE id = $post_id";
    $post_result = $conn->query($post_sql);
    if ($post_result && $post_result->num_rows > 0) {
        $post = $post_result->fetch_assoc();
    }
}

// Default values if post not found
if (!$post) {
    $banner_title = 'Post Not Found';
    $post_title = 'Error: Post Not Found';
    $post_author = 'N/A';
    $post_date = 'N/A';
    $post_image_url = 'assets/images/default-blog-post-image.jpg';
    $post_content = '<p>The requested blog post could not be found.</p>';
    $breadcrumb_active = 'Not Found';
} else {
    $banner_title = htmlspecialchars($post['title']);
    $post_title = htmlspecialchars($post['title']);
    $post_author = htmlspecialchars($post['author']);
    $post_date = date('F d, Y', strtotime($post['reg_date']));
    $post_image_url = htmlspecialchars($post['image_url'] ?? 'assets/images/default-blog-post-image.jpg');
    $post_content = $post['content']; // HTML content
    $breadcrumb_active = htmlspecialchars($post['title']);
}

// --- Fetch Dynamic Banner Image ---
$page_file = 'blog_post.php';
$banner_res = $conn->query("SELECT * FROM page_banners WHERE page_name = '$page_file'");
$banner_data = ($banner_res && $banner_res->num_rows > 0) ? $banner_res->fetch_assoc() : null;

$display_banner_img = ($banner_data && !empty($banner_data['banner_image'])) ? $banner_data['banner_image'] : BASE_URL . 'assets/images/banner/banner.webp';
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

        /* Additional styling for blog post page content if needed */
        .blog-post-content-section {
            padding: 80px 0;
        }
        .blog-post-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }
        .blog-post-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
        .blog-post-card .card-body {
            padding: 30px;
        }
        .blog-post-card .post-meta {
            font-size: 14px;
            color: #888;
            margin-bottom: 15px;
        }
        .blog-post-card .post-meta span {
            margin-right: 15px;
        }
        .blog-post-card .post-meta i {
            margin-right: 5px;
            color: #3C72FC;
        }
        .blog-post-card .post-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #1a1a1a;
        }
        .blog-post-card .post-content p {
            font-size: 16px;
            line-height: 1.8;
            color: #555;
            margin-bottom: 20px;
        }
        blockquote {
            background: #f8f9fa;
            border-left: 5px solid #3C72FC;
            margin: 1.5em 0;
            padding: 1em 1.5em;
            font-style: italic;
            color: #6c757d;
        }
        blockquote footer {
            display: block;
            margin-top: 0.8em;
            font-size: 0.9em;
            text-align: right;
        }
    </style>

    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12" data-aos="zoom-in">
                    <h2><?php echo $banner_title; ?></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="blog.php">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $breadcrumb_active; ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-post-content-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="blog-post-card">
                        <img src="<?php echo $post_image_url; ?>" class="img-fluid" alt="<?php echo $post_title; ?>">
                        <div class="card-body">
                            <div class="post-meta">
                                <span><i class="fa-solid fa-calendar-alt"></i> <?php echo $post_date; ?></span>
                                <span><i class="fa-solid fa-user"></i> <?php echo $post_author; ?></span>
                                
                            </div>
                            <h1 class="post-title"><?php echo $post_title; ?></h1>
                            <div class="post-content">
                                <?php echo $post_content; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>
<?php $conn->close(); // Close DB connection after all queries ?>