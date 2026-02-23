<?php
include 'auth.php';
include '../db.php';

$message = '';
$message_type = '';

if (isset($_GET['id'])) {
    $post_id = $conn->real_escape_string($_GET['id']);

    // Before deleting the job post, delete all associated applications and their resumes
    $applications_sql = "SELECT resume_path FROM job_applications WHERE job_id = '$post_id'";
    $applications_result = $conn->query($applications_sql);
    if ($applications_result && $applications_result->num_rows > 0) {
        while ($row = $applications_result->fetch_assoc()) {
            $resume_path = $row['resume_path'];
            if (!empty($resume_path) && file_exists("../../" . $resume_path)) {
                unlink("../../" . $resume_path); // Delete resume file from server
            }
        }
    }
    // The FOREIGN KEY ON DELETE CASCADE in job_applications table will handle deleting
    // the application records when the job_post is deleted. So no explicit DELETE from job_applications needed here.

    $sql = "DELETE FROM job_posts WHERE id = '$post_id'";

    if ($conn->query($sql) === TRUE) {
        $message = "Job post and associated applications/resumes deleted successfully!";
        $message_type = 'success';
    } else {
        $message = "Error deleting job post: " . $conn->error;
        $message_type = 'danger';
    }
} else {
    $message = "No job post ID provided for deletion.";
    $message_type = 'danger';
}

$conn->close();

// Redirect back to manage_job_posts.php with status message
header("Location: manage_job_posts.php?message=" . urlencode($message) . "&type=" . urlencode($message_type));
exit;
?>