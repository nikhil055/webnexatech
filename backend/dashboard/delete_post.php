<?php
include 'auth.php';
include '../db.php';

$message = '';
$message_type = '';

if (isset($_GET['id'])) {
    $post_id = $conn->real_escape_string($_GET['id']);

    $sql = "DELETE FROM posts WHERE id = '$post_id'";

    if ($conn->query($sql) === TRUE) {
        $message = "Post deleted successfully!";
        $message_type = 'success';
    } else {
        $message = "Error deleting post: " . $conn->error;
        $message_type = 'danger';
    }
} else {
    $message = "No post ID provided for deletion.";
    $message_type = 'danger';
}

$conn->close();

// Redirect back to manage_blog_posts.php with status message
header("Location: manage_blog_posts.php?message=" . urlencode($message) . "&type=" . urlencode($message_type));
exit;
?>