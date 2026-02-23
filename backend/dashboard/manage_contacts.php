<?php
include '../db.php';
include 'auth.php'; // For authentication and session management

$page_title = "Manage Contacts";
$contacts = [];

// Fetch all contacts from the database
$sql = "SELECT id, fullname, email, phone, country, message, reg_date FROM contacts ORDER BY reg_date DESC";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $contacts[] = $row;
    }
}

// Check for deletion request
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $id = $conn->real_escape_string($_GET['id']);
    $delete_sql = "DELETE FROM contacts WHERE id = '$id'";
    if ($conn->query($delete_sql) === TRUE) {
        $_SESSION['message'] = "Contact deleted successfully!";
        $_SESSION['message_type'] = "success";
    } else {
        $_SESSION['message'] = "Error deleting contact: " . $conn->error;
        $_SESSION['message_type'] = "danger";
    }
    header("Location: manage_contacts.php");
    exit();
}

ob_start(); // Start output buffering
?>

<div class="container-fluid">
    <h1 class="mt-4">Manage Contacts</h1>

    <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-<?php echo $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['message']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
        unset($_SESSION['message']);
        unset($_SESSION['message_type']);
        ?>
    <?php endif; ?>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Contact Submissions
        </div>
        <div class="card-body">
            <?php if (!empty($contacts)): ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="contactsTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Country</th>
                                <th>Message</th>
                                <th>Submitted At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($contacts as $contact): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($contact['id']); ?></td>
                                    <td><?php echo htmlspecialchars($contact['fullname']); ?></td>
                                    <td><?php echo htmlspecialchars($contact['email']); ?></td>
                                    <td><?php echo htmlspecialchars($contact['phone']); ?></td>
                                    <td><?php echo htmlspecialchars($contact['country']); ?></td>
                                    <td><?php echo nl2br(htmlspecialchars($contact['message'])); ?></td>
                                    <td><?php echo htmlspecialchars($contact['reg_date']); ?></td>
                                    <td>
                                        <a href="manage_contacts.php?action=delete&id=<?php echo $contact['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this contact entry?');">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <p>No contact submissions found.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean(); // Get current buffer contents and delete current output buffer
include '_dashboard_layout.php'; // Include the dashboard layout
?>