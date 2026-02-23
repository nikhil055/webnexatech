<?php
include 'auth.php';
include '../db.php';

// Fetch all pages
$sql = "SELECT id, slug, title, status FROM pages ORDER BY created_at DESC";
$result = $conn->query($sql);

ob_start(); // Start output buffering
?>

    <div class="container-fluid">
        <h2>Manage Dynamic Pages</h2>
        <a href="edit_page.php" class="btn btn-success mb-3">Add New Page</a>

        <?php
        // Display messages from delete_page.php redirection
        if (isset($_GET['message']) && isset($_GET['type'])): ?>
            <div class="alert alert-<?php echo htmlspecialchars($_GET['type']); ?> alert-dismissible fade show" role="alert">
                <?php echo htmlspecialchars($_GET['message']); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Slug</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result && $result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['id']); ?></td>
                            <td><?php echo htmlspecialchars($row['slug']); ?></td>
                            <td><?php echo htmlspecialchars($row['title']); ?></td>
                            <td><?php echo htmlspecialchars($row['status']); ?></td>
                            <td>
                                <a href="edit_page.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="delete_page.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this page and all its sections?');">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">No dynamic pages found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

<?php
$content = ob_get_clean(); // Get the buffered content and clean the buffer
$page_title = "Manage Pages - Dashboard"; // Set the page title

include '_dashboard_layout.php';

$conn->close();
?>