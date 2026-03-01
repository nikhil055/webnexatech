<?php
// _dashboard_layout.php
// This file assumes $page_title and $content will be set by the including file.
// It also assumes 'auth.php' has been included before this layout file.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?? 'Dashboard'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            background-color: #f8f9fa;
        }
        #sidebar {
            width: 250px;
            flex-shrink: 0;
            background-color: #343a40; /* Dark sidebar */
            color: #fff;
            padding-top: 1rem;
            position: fixed; /* Fixed sidebar */
            height: 100%; /* Full height */
            overflow-y: auto; /* Scrollable if content overflows */
        }
        #sidebar .nav-link {
            color: #adb5bd;
            padding: 0.75rem 1rem;
        }
        #sidebar .nav-link:hover {
            color: #fff;
            background-color: #495057;
        }
        #sidebar .nav-link.active {
            color: #fff;
            background-color: #007bff; /* Primary blue for active */
            border-left: 3px solid #fff;
        }
        #content {
            margin-left: 250px; /* Offset for fixed sidebar */
            flex-grow: 1;
            padding: 20px;
        }
        .navbar-top {
            background-color: #fff;
            border-bottom: 1px solid #dee2e6;
            padding: 1rem;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .navbar-top .navbar-brand {
            margin-left: 250px; /* Align brand with content area */
        }
        .navbar-top .navbar-nav {
            margin-right: 1rem;
        }

        /* Custom styles for dashboard cards */
        .dashboard-card {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            border: none; /* Remove default border */
        }
        .dashboard-card:hover {
            transform: translateY(-5px); /* Lift card on hover */
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important; /* Enhanced shadow on hover */
        }
        .dashboard-card .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }
        .dashboard-card .card-title {
            color: #343a40; /* Darker title for professionalism */
            font-weight: 600;
        }
        .dashboard-card .card-text {
            color: #6c757d; /* Muted text */
            flex-grow: 1; /* Allow description to grow */
        }
        .dashboard-card .btn {
            align-self: flex-start; /* Align button to start */
        }
    </style>
</head>
<body>
    <div id="sidebar">
        <h4 class="text-center my-3 text-white">Admin Panel</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>" href="index.php">
                    <i class="fas fa-tachometer-alt me-2"></i> Dashboard Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'manage_blog_posts.php' || basename($_SERVER['PHP_SELF']) == 'edit_post.php') ? 'active' : ''; ?>" href="manage_blog_posts.php">
                    <i class="fas fa-newspaper me-2"></i> Manage Blog Posts
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'manage_work_items.php' || basename($_SERVER['PHP_SELF']) == 'edit_work_item.php') ? 'active' : ''; ?>" href="manage_work_items.php">
                    <i class="fas fa-briefcase me-2"></i> Manage Work Items
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'manage_featured_items.php' || basename($_SERVER['PHP_SELF']) == 'edit_featured_item.php') ? 'active' : ''; ?>" href="manage_featured_items.php">
                    <i class="fas fa-star me-2"></i> Manage Featured Items
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'manage_clients.php' || basename($_SERVER['PHP_SELF']) == 'edit_client.php') ? 'active' : ''; ?>" href="manage_clients.php">
                    <i class="fas fa-users me-2"></i> Manage Clients
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'manage_banners.php') ? 'active' : ''; ?>" href="manage_banners.php">
                    <i class="fas fa-image me-2"></i> Manage Banners
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'manage_pages.php' || basename($_SERVER['PHP_SELF']) == 'edit_page.php') ? 'active' : ''; ?>" href="manage_pages.php">
                    <i class="fas fa-file-alt me-2"></i> Manage Pages
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'manage_contacts.php') ? 'active' : ''; ?>" href="manage_contacts.php">
                    <i class="fas fa-envelope me-2"></i> Manage Contacts
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'manage_job_posts.php' || basename($_SERVER['PHP_SELF']) == 'edit_job_post.php') ? 'active' : ''; ?>" href="manage_job_posts.php">
                    <i class="fas fa-briefcase me-2"></i> Manage Job Posts
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'manage_applications.php' || basename($_SERVER['PHP_SELF']) == 'view_application.php') ? 'active' : ''; ?>" href="manage_applications.php">
                    <i class="fas fa-users-cog me-2"></i> Manage Applications
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <i class="fas fa-sign-out-alt me-2"></i> Logout
                </a>
            </li>
        </ul>
    </div>

    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Dashboard</a>
                <div class="ms-auto">
                    <ul class="navbar-nav">
                         <li class="nav-item">
                            <span class="nav-link">Welcome, Admin</span>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            <?php echo $content; // This is where the page-specific content will be injected ?>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
