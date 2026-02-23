<?php
include 'auth.php';
include '../db.php';

$message = '';
$message_type = '';

if (isset($_GET['id'])) {
    $page_id = $conn->real_escape_string($_GET['id']);

    // Delete the page from the 'pages' table
    // ON DELETE CASCADE in 'page_sections' table will automatically delete associated sections
    $sql = "DELETE FROM pages WHERE id = '$page_id'";

    if ($conn->query($sql) === TRUE) {
        $message = "Page deleted successfully!";
        $message_type = 'success';
    } else {
        $message = "Error deleting page: " . $conn->error;
        $message_type = 'danger';
    }
} else {
    $message = "No page ID provided for deletion.";
    $message_type = 'danger';
}

$conn->close();

// Redirect back to manage_pages.php with status message
header("Location: manage_pages.php?message=" . urlencode($message) . "&type=" . urlencode($message_type));
exit;
?>
