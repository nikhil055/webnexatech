<?php
include 'auth.php';
include '../db.php'; // Include database connection

// Fetch dynamic counts
$total_blog_posts = 0;
$result_posts = $conn->query("SELECT COUNT(*) AS total FROM posts");
if ($result_posts) {
    $total_blog_posts = $result_posts->fetch_assoc()['total'];
}

$total_work_items = 0;
$result_work = $conn->query("SELECT COUNT(*) AS total FROM work_items");
if ($result_work) {
    $total_work_items = $result_work->fetch_assoc()['total'];
}

$total_clients = 0;
$result_clients = $conn->query("SELECT COUNT(*) AS total FROM clients WHERE is_active = TRUE"); // Only active clients
if ($result_clients) {
    $total_clients = $result_clients->fetch_assoc()['total'];
}

$total_awards = 0;
$result_awards = $conn->query("SELECT COUNT(*) AS total FROM awards");
if ($result_awards) {
    $total_awards = $result_awards->fetch_assoc()['total'];
}

$total_contacts = 0;
$result_contacts = $conn->query("SELECT COUNT(*) AS total FROM contacts");
if ($result_contacts) {
    $total_contacts = $result_contacts->fetch_assoc()['total'];
}

ob_start(); // Start output buffering
?>

    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard Overview</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Total Blog Posts Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Blog Posts</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_blog_posts; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Work Items Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Total Work Items</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_work_items; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-briefcase fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Clients Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Clients
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_clients; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Awards Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Total Awards</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_awards; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-trophy fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Contact Submissions Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Total Contact Submissions</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_contacts; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-envelope fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="h3 mb-4 text-gray-800">Content Management</h2>


        <div class="row mt-4">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-sm dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-newspaper me-2"></i> Manage Blog Posts</h5>
                        <p class="card-text">View, add, edit, or delete your blog articles.</p>
                        <a href="manage_blog_posts.php" class="btn btn-outline-primary mt-3">Go to Blog Posts</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-sm dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-briefcase me-2"></i> Manage Work Items</h5>
                        <p class="card-text">View, add, edit, or delete your portfolio work items.</p>
                        <a href="manage_work_items.php" class="btn btn-outline-primary mt-3">Go to Work Items</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-sm dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-star me-2"></i> Manage Featured Items</h5>
                        <p class="card-text">View, add, edit, or delete your highlight featured items.</p>
                        <a href="manage_featured_items.php" class="btn btn-outline-primary mt-3">Go to Featured Items</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-sm dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-folder-open me-2"></i> Manage Case Studies</h5>
                        <p class="card-text">View, add, edit, or delete your client case studies.</p>
                        <a href="manage_case_studies.php" class="btn btn-outline-primary mt-3">Go to Case Studies</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-sm dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-trophy me-2"></i> Manage Awards</h5>
                        <p class="card-text">View, add, edit, or delete your company awards and recognition.</p>
                        <a href="manage_awards.php" class="btn btn-outline-primary mt-3">Go to Awards</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-sm dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-users me-2"></i> Manage Clients</h5>
                        <p class="card-text">View, add, edit, or delete your client information.</p>
                        <a href="manage_clients.php" class="btn btn-outline-primary mt-3">Go to Clients</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-sm dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-file-alt me-2"></i> Manage Pages</h5>
                        <p class="card-text">Update content, banner, and sections for all dynamic pages.</p>
                        <a href="manage_pages.php" class="btn btn-outline-primary mt-3">Go to Pages</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-sm dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-briefcase me-2"></i> Manage Job Posts</h5>
                        <p class="card-text">View, add, edit, or delete available job openings.</p>
                        <a href="manage_job_posts.php" class="btn btn-outline-primary mt-3">Go to Job Posts</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-sm dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-users-cog me-2"></i> Manage Applications</h5>
                        <p class="card-text">View and manage submitted job applications.</p>
                        <a href="manage_applications.php" class="btn btn-outline-primary mt-3">Go to Applications</a>
                    </div>
                </div>
            </div>

            <!-- Manage Contacts Card -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-sm dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-envelope me-2"></i> Manage Contacts</h5>
                        <p class="card-text">View and manage contact form submissions.</p>
                        <a href="manage_contacts.php" class="btn btn-outline-primary mt-3">Go to Contacts</a>
                    </div>
                </div>
            </div>
             <!-- Add more cards for other sections as needed -->
        </div>
    </div>

<?php
$content = ob_get_clean(); // Get the buffered content and clean the buffer
$page_title = "Dashboard Home"; // Set the page title

include '_dashboard_layout.php';

$conn->close(); // Close DB connection
?>