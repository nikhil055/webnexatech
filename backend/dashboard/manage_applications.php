<?php
error_reporting(E_ALL); // Report all errors
ini_set('display_errors', 1); // Display errors on screen

include 'auth.php';
include '../db.php';

$sql = "SELECT ja.id, ja.applicant_name, ja.applicant_email, ja.applicant_phone, ja.application_date, ja.status, jp.title AS job_title
        FROM job_applications ja
        JOIN job_posts jp ON ja.job_id = jp.id
        ORDER BY ja.application_date DESC";
$result = $conn->query($sql);

ob_start(); // Start output buffering
?>

    <div class="container-fluid">
        <h2>Manage Job Applications</h2>
        <?php
        // Display messages (e.g., from view_application.php or other actions)
        if (isset($_GET['message']) && isset($_GET['type'])): ?>
            <div class="alert alert-<?php echo htmlspecialchars($_GET['type']); ?> alert-dismissible fade show" role="alert">
                <?php echo htmlspecialchars($_GET['message']); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Applicant Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Job Applied For</th>
                    <th>Application Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result && $result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['applicant_name']); ?></td>
                            <td><?php echo htmlspecialchars($row['applicant_email']); ?></td>
                            <td><?php echo htmlspecialchars($row['applicant_phone']); ?></td>
                            <td><?php echo htmlspecialchars($row['job_title']); ?></td>
                            <td><?php echo date('M d, Y H:i', strtotime($row['application_date'])); ?></td>
                            <td><?php echo htmlspecialchars($row['status']); ?></td>
                            <td>
                                <a href="view_application.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-sm">View</a>
                                <!-- Optionally, add a delete button directly here, or handle delete from view_application.php -->
                                <!-- <a href="delete_application.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this application?');">Delete</a> -->
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7" class="text-center">No job applications found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

<?php
$content = ob_get_clean(); // Get the buffered content and clean the buffer
$page_title = "Manage Job Applications - Dashboard"; // Set the page title

include '_dashboard_layout.php';

$conn->close();
?>
