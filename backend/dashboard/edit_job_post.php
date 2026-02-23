<?php
error_reporting(E_ALL); // Report all errors
ini_set('display_errors', 1); // Display errors on screen

include 'auth.php';
include '../db.php';

$job_post = null;
$post_id = null;

// If ID is provided, fetch existing job post data
if (isset($_GET['id'])) {
    $post_id = $conn->real_escape_string($_GET['id']);
    $sql = "SELECT * FROM job_posts WHERE id = '$post_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $job_post = $result->fetch_assoc();
    } else {
        // Job post not found, redirect to manage_job_posts.php
        header("Location: manage_job_posts.php?message=" . urlencode("Job post not found.") . "&type=" . urlencode("danger"));
        exit;
    }
}

$message = '';
$message_type = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $conn->real_escape_string($_POST['title']);
    $description = $conn->real_escape_string($_POST['description']);
    $requirements = $conn->real_escape_string($_POST['requirements']);
    $location = $conn->real_escape_string($_POST['location']);
    $employment_type = $conn->real_escape_string($_POST['employment_type']);
    $salary_range = $conn->real_escape_string($_POST['salary_range']);
    $application_deadline = $_POST['application_deadline'] ? "'" . $conn->real_escape_string($_POST['application_deadline']) . "'" : "NULL";
    $is_active = isset($_POST['is_active']) ? 1 : 0; // Checkbox value


    if ($post_id) {
        // Update existing job post
        $update_sql = "UPDATE job_posts SET title = '$title', description = '$description', requirements = '$requirements', location = '$location', employment_type = '$employment_type', salary_range = '$salary_range', application_deadline = $application_deadline, is_active = $is_active WHERE id = '$post_id'";
        if ($conn->query($update_sql) === TRUE) {
            $message = "Job post updated successfully!";
            $message_type = 'success';
            // Reload job post data to reflect changes
            $sql = "SELECT * FROM job_posts WHERE id = '$post_id'";
            $result = $conn->query($sql);
            $job_post = $result->fetch_assoc();
        } else {
            $message = "Error updating job post: " . $conn->error;
            $message_type = 'danger';
        }
    } else {
        // Add new job post
        $insert_sql = "INSERT INTO job_posts (title, description, requirements, location, employment_type, salary_range, application_deadline, is_active) VALUES ('$title', '$description', '$requirements', '$location', '$employment_type', '$salary_range', $application_deadline, $is_active)";
        if ($conn->query($insert_sql) === TRUE) {
            $post_id = $conn->insert_id;
            $message = "Job post added successfully!";
            $message_type = 'success';
            // Redirect to manage the newly created job post (or list)
            header("Location: manage_job_posts.php?message=" . urlencode($message) . "&type=" . urlencode($message_type));
            exit;
        } else {
            $message = "Error adding job post: " . $conn->error;
            $message_type = 'danger';
        }
    }
}

// Display messages from redirection
if (isset($_GET['message']) && isset($_GET['type'])) {
    $message = htmlspecialchars($_GET['message']);
    $message_type = htmlspecialchars($_GET['type']);
}

ob_start(); // Start output buffering
?>

    <div class="container-fluid">
        <h2><?php echo $post_id ? 'Edit Job Post: ' . htmlspecialchars($job_post['title'] ?? '') : 'Add New Job Post'; ?></h2>

        <?php if ($message): ?>
            <div class="alert alert-<?php echo $message_type; ?> alert-dismissible fade show" role="alert">
                <?php echo $message; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <form action="" method="post">
            <div class="mb-3">
                <label for="title" class="form-label">Job Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($job_post['title'] ?? ''); ?>" required>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location" value="<?php echo htmlspecialchars($job_post['location'] ?? ''); ?>" required>
            </div>
            <div class="mb-3">
                <label for="employment_type" class="form-label">Employment Type</label>
                <input type="text" class="form-control" id="employment_type" name="employment_type" value="<?php echo htmlspecialchars($job_post['employment_type'] ?? ''); ?>" placeholder="e.g., Full-time, Remote, Contract" required>
            </div>
            <div class="mb-3">
                <label for="salary_range" class="form-label">Salary Range (optional)</label>
                <input type="text" class="form-control" id="salary_range" name="salary_range" value="<?php echo htmlspecialchars($job_post['salary_range'] ?? ''); ?>" placeholder="e.g., $50,000 - $70,000">
            </div>
            <div class="mb-3">
                <label for="application_deadline" class="form-label">Application Deadline (optional)</label>
                <input type="date" class="form-control" id="application_deadline" name="application_deadline" value="<?php echo htmlspecialchars($job_post['application_deadline'] ?? ''); ?>">
            </div>
            
            <div class="mb-3">
                <label for="description" class="form-label">Job Description</label>
                <textarea class="form-control" id="description" name="description" rows="8" required><?php echo htmlspecialchars($job_post['description'] ?? ''); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="requirements" class="form-label">Requirements (optional)</label>
                <textarea class="form-control" id="requirements" name="requirements" rows="5"><?php echo htmlspecialchars($job_post['requirements'] ?? ''); ?></textarea>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" <?php echo (isset($job_post['is_active']) && $job_post['is_active']) ? 'checked' : ''; ?>>
                <label class="form-check-label" for="is_active">Active</label>
                <small class="form-text text-muted">Only active job posts will be displayed on the careers page.</small>
            </div>


            <button type="submit" class="btn btn-primary"><?php echo $post_id ? 'Update Job Post' : 'Add Job Post'; ?></button>
            <a href="manage_job_posts.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

<?php
$content = ob_get_clean(); // Get the buffered content and clean the buffer
$page_title = ($post_id ? 'Edit Job Post' : 'Add New Job Post') . ' - Dashboard'; // Set the page title

include '_dashboard_layout.php';

$conn->close();
?>
