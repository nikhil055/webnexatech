<?php
error_reporting(E_ALL); // Report all errors
ini_set('display_errors', 1); // Display errors on screen

include 'auth.php';
include '../db.php';

$sql = "SELECT id, name, logo_url, website_url, testimonial, sort_order, is_active FROM clients ORDER BY sort_order ASC, name ASC";
$result = $conn->query($sql);

ob_start(); // Start output buffering
?>

    <div class="container-fluid">
        <h2>Clients Management</h2>
        <?php
        // Display messages from delete_client.php redirection
        if (isset($_GET['message']) && isset($_GET['type'])): ?>
            <div class="alert alert-<?php echo htmlspecialchars($_GET['type']); ?> alert-dismissible fade show" role="alert">
                <?php echo htmlspecialchars($_GET['message']); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <a href="edit_client.php" class="btn btn-success mb-3">Add New Client</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Logo</th>
                    <th>Website URL</th>
                    <th>Order</th>
                    <th>Active</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result && $result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td>
                                <?php if (!empty($row['logo_url'])): ?>
                                    <img src="../../<?php echo htmlspecialchars($row['logo_url']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?> Logo" style="max-width: 80px; max-height: 50px; object-fit: contain;">
                                <?php else: ?>
                                    No Logo
                                <?php endif; ?>
                            </td>
                            <td><a href="<?php echo htmlspecialchars($row['website_url']); ?>" target="_blank"><?php echo htmlspecialchars($row['website_url']); ?></a></td>
                            <td><?php echo htmlspecialchars($row['sort_order']); ?></td>
                            <td><?php echo $row['is_active'] ? 'Yes' : 'No'; ?></td>
                            <td>
                                <a href="edit_client.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="delete_client.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this client?');">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">No clients found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

<?php
$content = ob_get_clean(); // Get the buffered content and clean the buffer
$page_title = "Manage Clients - Dashboard"; // Set the page title

include '_dashboard_layout.php';

$conn->close();
?>
