<?php
error_reporting(E_ALL); // Report all errors
ini_set('display_errors', 1); // Display errors on screen

include 'auth.php';
include '../db.php';

$sql = "SELECT id, title, awarding_body, award_year, link_url, reg_date FROM awards ORDER BY award_year DESC, reg_date DESC";
$result = $conn->query($sql);

ob_start(); // Start output buffering
?>

    <div class="container-fluid">
        <h2>Awards Management</h2>
        <?php
        // Display messages from delete_award.php redirection
        if (isset($_GET['message']) && isset($_GET['type'])): ?>
            <div class="alert alert-<?php echo htmlspecialchars($_GET['type']); ?> alert-dismissible fade show" role="alert">
                <?php echo htmlspecialchars($_GET['message']); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <a href="edit_award.php" class="btn btn-success mb-3">Add New Award</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Awarding Body</th>
                    <th>Year</th>
                    <th>Link URL</th>
                    <th>Date Added</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result && $result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['title']); ?></td>
                            <td><?php echo htmlspecialchars($row['awarding_body']); ?></td>
                            <td><?php echo htmlspecialchars($row['award_year']); ?></td>
                            <td><a href="<?php echo htmlspecialchars($row['link_url']); ?>" target="_blank"><?php echo htmlspecialchars($row['link_url']); ?></a></td>
                            <td><?php echo date('F d, Y', strtotime($row['reg_date'])); ?></td>
                            <td>
                                <a href="edit_award.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="delete_award.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this award?');">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">No awards found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

<?php
$content = ob_get_clean(); // Get the buffered content and clean the buffer
$page_title = "Manage Awards - Dashboard"; // Set the page title

include '_dashboard_layout.php';

$conn->close();
?>
