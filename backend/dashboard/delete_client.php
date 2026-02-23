<?php
include 'auth.php';
include '../db.php';

$message = '';
$message_type = '';

if (isset($_GET['id'])) {
    $client_id = $conn->real_escape_string($_GET['id']);

    // Before deleting, get logo_url to delete file from server
    $getLogoSql = "SELECT logo_url FROM clients WHERE id = '$client_id'";
    $logoResult = $conn->query($getLogoSql);
    if ($logoResult && $logoResult->num_rows > 0) {
        $row = $logoResult->fetch_assoc();
        $logo_url = $row['logo_url'];
        if (!empty($logo_url) && file_exists("../../" . $logo_url)) {
            unlink("../../" . $logo_url); // Delete file from server
        }
    }


    $sql = "DELETE FROM clients WHERE id = '$client_id'";

    if ($conn->query($sql) === TRUE) {
        $message = "Client deleted successfully!";
        $message_type = 'success';
    } else {
        $message = "Error deleting client: " . $conn->error;
        $message_type = 'danger';
    }
} else {
    $message = "No client ID provided for deletion.";
    $message_type = 'danger';
}

$conn->close();

// Redirect back to manage_clients.php with status message
header("Location: manage_clients.php?message=" . urlencode($message) . "&type=" . urlencode($message_type));
exit;
?>