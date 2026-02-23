<?php
include 'auth.php';
include '../db.php';

$message = '';
$message_type = '';

if (isset($_GET['id'])) {
    $item_id = $conn->real_escape_string($_GET['id']);

    // Before deleting, get image_url to delete file from server
    $getImageSql = "SELECT image_url FROM featured_items WHERE id = '$item_id'";
    $imageResult = $conn->query($getImageSql);
    if ($imageResult && $imageResult->num_rows > 0) {
        $row = $imageResult->fetch_assoc();
        $image_url = $row['image_url'];
        if (!empty($image_url) && file_exists("../../" . $image_url)) {
            unlink("../../" . $image_url); // Delete file from server
        }
    }


    $sql = "DELETE FROM featured_items WHERE id = '$item_id'";

    if ($conn->query($sql) === TRUE) {
        $message = "Featured item deleted successfully!";
        $message_type = 'success';
    } else {
        $message = "Error deleting featured item: " . $conn->error;
        $message_type = 'danger';
    }
} else {
    $message = "No featured item ID provided for deletion.";
    $message_type = 'danger';
}

$conn->close();

// Redirect back to manage_featured_items.php with status message
header("Location: manage_featured_items.php?message=" . urlencode($message) . "&type=" . urlencode($message_type));
exit;
?>