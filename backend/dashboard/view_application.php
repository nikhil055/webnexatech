<?php
error_reporting(E_ALL); // Report all errors
ini_set('display_errors', 1); // Display errors on screen

include 'auth.php';
include '../db.php';

$application = null;
$job_post = null;
$application_id = null;

if (isset($_GET['id'])) {
    $application_id = $conn->real_escape_string($_GET['id']);

    // Fetch application details
    $sql_app = "SELECT ja.*, jp.title AS job_title, jp.location AS job_location, jp.employment_type AS job_employment_type
                FROM job_applications ja
                JOIN job_posts jp ON ja.job_id = jp.id
                WHERE ja.id = '$application_id'";
    $result_app = $conn->query($sql_app);

    if ($result_app && $result_app->num_rows > 0) {
        $application = $result_app->fetch_assoc();
    } else {
        header("Location: manage_applications.php?message=" . urlencode("Application not found.") . "&type=" . urlencode("danger"));
        exit;
    }
} else {
    header("Location: manage_applications.php?message=" . urlencode("No application ID provided.") . "&type=" . urlencode("danger"));
    exit;
}

$message = '';
$message_type = '';

// Handle status update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_status'])) {
    $new_status = $conn->real_escape_string($_POST['status']);
    $update_sql = "UPDATE job_applications SET status = '$new_status' WHERE id = '$application_id'";
    if ($conn->query($update_sql) === TRUE) {
        $message = "Application status updated successfully!";
        $message_type = 'success';
        $application['status'] = $new_status; // Update local data
    } else {
        $message = "Error updating status: " . $conn->error;
        $message_type = 'danger';
    }
}

// Handle delete action (if triggered from this page)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_application'])) {
    if (!empty($application['resume_path']) && file_exists("../../" . $application['resume_path'])) {
        unlink("../../" . $application['resume_path']); // Delete resume file from server
    }

    $delete_sql = "DELETE FROM job_applications WHERE id = '$application_id'";
    if ($conn->query($delete_sql) === TRUE) {
        header("Location: manage_applications.php?message=" . urlencode("Application deleted successfully!") . "&type=" . urlencode("success"));
        exit;
    } else {
        $message = "Error deleting application: " . $conn->error;
        $message_type = 'danger';
    }
}


ob_start(); // Start output buffering
?>

    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h3 mb-0 text-gray-800">Application Details for <?php echo htmlspecialchars($application['applicant_name']); ?></h2>
            <a href="manage_applications.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to Applications</a>
        </div>
        

        <?php if ($message): ?>
            <div class="alert alert-<?php echo $message_type; ?> alert-dismissible fade show" role="alert">
                <?php echo $message; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Applicant Information</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <strong>Name:</strong> <?php echo htmlspecialchars($application['applicant_name']); ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Email:</strong> <?php echo htmlspecialchars($application['applicant_email']); ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Phone:</strong> <?php echo htmlspecialchars($application['applicant_phone']); ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Applied For:</strong> <?php echo htmlspecialchars($application['job_title']); ?> (ID: <?php echo htmlspecialchars($application['job_id']); ?>)
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Location:</strong> <?php echo htmlspecialchars($application['job_location']); ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Employment Type:</strong> <?php echo htmlspecialchars($application['job_employment_type']); ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Application Date:</strong> <?php echo date('F d, Y H:i', strtotime($application['application_date'])); ?>
                    </div>
                    <div class="col-md-6 mb-3">
                        <strong>Resume:</strong> 
                        <?php if (!empty($application['resume_path'])): ?>
                            <a href="../../<?php echo htmlspecialchars($application['resume_path']); ?>" target="_blank" class="btn btn-sm btn-info"><i class="fas fa-download me-1"></i> Download Resume</a>
                        <?php else: ?>
                            N/A
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Application Status</h6>
            </div>
            <div class="card-body">
                <form method="POST" class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="status" class="col-form-label">Current Status:</label>
                    </div>
                    <div class="col-auto">
                        <select class="form-select" id="status" name="status">
                            <?php
                            $statuses = ['Pending', 'Reviewed', 'Interview', 'Rejected', 'Hired'];
                            foreach ($statuses as $s) {
                                $selected = ($application['status'] === $s) ? 'selected' : '';
                                echo "<option value=\"$s\" $selected>$s</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-auto">
                        <button type="submit" name="update_status" class="btn btn-primary">Update Status</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-danger">Danger Zone</h6>
            </div>
            <div class="card-body">
                <form method="POST" onsubmit="return confirm('Are you sure you want to delete this application? This action cannot be undone.');">
                    <button type="submit" name="delete_application" class="btn btn-danger">Delete Application</button>
                </form>
            </div>
        </div>

    </div>

<?php
$content = ob_get_clean(); // Get the buffered content and clean the buffer
$page_title = "View Application - Dashboard"; // Set the page title

include '_dashboard_layout.php';

$conn->close();
?>
