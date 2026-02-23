<?php
error_reporting(E_ALL); // Report all errors
ini_set('display_errors', 1); // Display errors on screen

include 'auth.php';
include '../db.php';

$sql = "SELECT id, title, location, employment_type, application_deadline, is_active, posted_date FROM job_posts ORDER BY posted_date DESC";
$result = $conn->query($sql);

ob_start(); // Start output buffering
?>

    <div class="container-fluid">
        <h2>Job Posts Management</h2>
        <?php
        // Display messages from delete_job_post.php redirection
        if (isset($_GET['message']) && isset($_GET['type'])): ?>
            <div class="alert alert-<?php echo htmlspecialchars($_GET['type']); ?> alert-dismissible fade show" role="alert">
                <?php echo htmlspecialchars($_GET['message']); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <a href="edit_job_post.php" class="btn btn-success mb-3">Add New Job Post</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Type</th>
                    <th>Deadline</th>
                    <th>Active</th>
                    <th>Posted Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result && $result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['title']); ?></td>
                            <td><?php echo htmlspecialchars($row['location']); ?></td>
                            <td><?php echo htmlspecialchars($row['employment_type']); ?></td>
                            <td><?php echo $row['application_deadline'] ? date('M d, Y', strtotime($row['application_deadline'])) : 'N/A'; ?></td>
                            <td><?php echo $row['is_active'] ? 'Yes' : 'No'; ?></td>
                            <td><?php echo date('M d, Y', strtotime($row['posted_date'])); ?></td>
                            <td>
                                <a href="edit_job_post.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="delete_job_post.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this job post?');">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7" class="text-center">No job posts found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

<?php
$content = ob_get_clean(); // Get the buffered content and clean the buffer
$page_title = "Manage Job Posts - Dashboard"; // Set the page title

include '_dashboard_layout.php';

$conn->close();
?>
