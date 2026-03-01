<?php
include 'auth.php';
include '../db.php';

$message = '';

// Handle Actions (Save or Delete)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $page_name = $conn->real_escape_string($_POST['page_name']);

    if (isset($_POST['delete'])) {
        // Handle Delete
        $sql = "DELETE FROM page_banners WHERE page_name = '$page_name'";
        if ($conn->query($sql)) {
            $message = "Banner configuration removed successfully!";
        } else {
            $message = "Error removing banner: " . $conn->error;
        }
    } else {
        // Handle Save/Update
        $banner_image = $conn->real_escape_string($_POST['banner_image']);
        $banner_title = $conn->real_escape_string($_POST['banner_title']);

        $sql = "INSERT INTO page_banners (page_name, banner_image, banner_title) 
                VALUES ('$page_name', '$banner_image', '$banner_title')
                ON DUPLICATE KEY UPDATE banner_image = '$banner_image', banner_title = '$banner_title'";
        
        if ($conn->query($sql)) {
            $message = "Banner updated successfully!";
        } else {
            $message = "Error updating banner: " . $conn->error;
        }
    }
}

// Fetch all banners
$banners = [];
$res = $conn->query("SELECT * FROM page_banners");
while($row = $res->fetch_assoc()) {
    $banners[$row['page_name']] = $row;
}

// Grouped Pages
$sections = [
    'Blog Section' => [
        'blog.php' => 'Blog Listing',
        'blog_post.php' => 'Blog Detail'
    ],
    'Work Section' => [
        'work/work.php' => 'Featured Work',
        'work/clients.php' => 'Clients'
    ],
    'Contact Section' => [
        'contact.php' => 'Contact Us',
        'career.php' => 'Careers',
        'get-in-touch.php' => 'Get in Touch'
    ],
    'About Section' => [
        'about/about.php' => 'About Us',
        'about/leadership.php' => 'Leadership',
        'about/team.php' => 'Team',
        'about/future.php' => 'Future',
        'about/gallery.php' => 'Gallery'
    ],
    'Solutions Section' => [
        'solutions/e-commerce/apparel-solution.php' => 'Apparel Solution',
        'solutions/e-commerce/jewellery-solution.php' => 'Jewellery Solution',
        'solutions/e-commerce/furniture-solution.php' => 'Furniture Solution',
        'solutions/e-commerce/cosmetics-solution.php' => 'Cosmetics Solution',
        'solutions/healthcare/clinics-management-solution.php' => 'Clinics Management',
        'solutions/healthcare/hospital-management-solution.php' => 'Hospital Management',
        'solutions/healthcare/multi-vendor-hospital-solution.php' => 'Multi-Vendor Hospital',
        'solutions/job-portal/job-portal-solution.php' => 'Job Portal Overview',
        'solutions/job-portal/candidate-management.php' => 'Candidate Management',
        'solutions/job-portal/employer-dashboard.php' => 'Employer Dashboard',
        'solutions/car-rental/car-rental-solution.php' => 'Car Rental Overview',
        'solutions/car-rental/self-drive-portal.php' => 'Self-Drive Portal',
        'solutions/car-rental/fleet-management.php' => 'Fleet Management'
    ],
    'Service Section' => [
        'seo/seo-services.php' => 'SEO Services',
        'seo/technical-seo-audit.php' => 'Technical SEO Audit',
        'seo/local-seo.php' => 'Local SEO',
        'seo/e-commerce-seo.php' => 'E-Commerce SEO',
        'seo/youtube-seo.php' => 'YouTube SEO',
        'creative/creative-services.php' => 'Creative Services',
        'creative/creative-strategy.php' => 'Creative Strategy',
        'creative/communication.php' => 'Communication',
        'creative/branding.php' => 'Branding',
        'creative/production.php' => 'Production',
        'creative/graphics-motion.php' => 'Graphics & Motion',
        'creative/web-design.php' => 'Web Design',
        'creative/photoshoot.php' => 'Photoshoot',
        'paid-media/paid-media-services.php' => 'Paid Media Services',
        'paid-media/media-strategy-planning.php' => 'Media Strategy & Planning',
        'paid-media/search-ads.php' => 'Search Ads',
        'paid-media/social-ads.php' => 'Social Ads',
        'paid-media/programmatic-display-ads.php' => 'Programmatic & Display Ads',
        'paid-media/ooh-advertising.php' => 'OOH Advertising',
        'paid-media/ott-ads.php' => 'OTT Ads',
        'content/content-services.php' => 'Content Services',
        'content/content-writing.php' => 'Content Writing',
        'content/content-marketing.php' => 'Content Marketing',
        'content/technical-writing.php' => 'Technical Writing',
        'technology/technology-services.php' => 'Technology Services',
        'technology/website-development.php' => 'Website Development',
        'technology/wordpress-development.php' => 'WordPress Development',
        'technology/shopify-development.php' => 'Shopify Development',
        'technology/software-development.php' => 'Software Development',
        'technology/mobile-apps.php' => 'Mobile Apps',
        'technology/ios-apps.php' => 'iOS Apps'
    ]
];

ob_start();
?>

<div class="container-fluid">
    <h2 class="mb-4">Global Banner Manager</h2>
    <?php if($message): ?><div class="alert alert-success"><?php echo $message; ?></div><?php endif; ?>

    <?php foreach($sections as $section_name => $pages): 
        $btn_class = 'btn-primary';
        $card_class = 'bg-primary';
        if(strpos($section_name, 'About') !== false) { $card_class = 'bg-success'; $btn_class = 'btn-success'; }
        if(strpos($section_name, 'Solution') !== false) { $card_class = 'bg-info'; $btn_class = 'btn-info text-white'; }
        if(strpos($section_name, 'Contact') !== false) { $card_class = 'bg-danger'; $btn_class = 'btn-danger'; }
        if(strpos($section_name, 'Work') !== false) { $card_class = 'bg-dark'; $btn_class = 'btn-dark'; }
        if(strpos($section_name, 'Blog') !== false) { $card_class = 'bg-warning text-dark'; $btn_class = 'btn-warning'; }
    ?>
    <div class="card shadow mb-5">
        <div class="card-header <?php echo $card_class; ?> <?php echo (strpos($section_name, 'Blog') !== false) ? 'text-dark' : 'text-white'; ?>">
            <h5 class="mb-0"><?php echo $section_name; ?> Banners</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th style="width: 20%;">Page Title</th>
                            <th style="width: 15%;">Preview</th>
                            <th>Image URL</th>
                            <th>Banner Title</th>
                            <th style="width: 15%;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($pages as $file => $title): 
                            $current = $banners[$file] ?? ['banner_image' => '', 'banner_title' => ''];
                        ?>
                        <form method="POST">
                            <input type="hidden" name="page_name" value="<?php echo $file; ?>">
                            <tr>
                                <td><strong><?php echo $title; ?></strong></td>
                                <td><?php if($current['banner_image']): ?><img src="<?php echo $current['banner_image']; ?>" style="height: 40px; border-radius: 5px;"><?php endif; ?></td>
                                <td><input type="text" name="banner_image" class="form-control form-control-sm" value="<?php echo $current['banner_image']; ?>" placeholder="URL"></td>
                                <td><input type="text" name="banner_title" class="form-control form-control-sm" value="<?php echo $current['banner_title']; ?>" placeholder="Heading"></td>
                                <td>
                                    <div class="btn-group w-100">
                                        <button type="submit" class="btn <?php echo $btn_class; ?> btn-sm" title="Save Changes">
                                            <i class="fas fa-save"></i>
                                        </button>
                                        <?php if($current['banner_image'] || $current['banner_title']): ?>
                                        <button type="submit" name="delete" class="btn btn-outline-danger btn-sm" title="Delete Configuration" onclick="return confirm('Are you sure you want to delete this banner configuration? It will revert to the default.')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <?php endif; ?>
                                    </div>
                                </td>
                            </tr>
                        </form>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php
$content = ob_get_clean();
$page_title = "Manage Banners";
include '_dashboard_layout.php';
?>
