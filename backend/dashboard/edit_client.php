<?php
error_reporting(E_ALL); // Report all errors
ini_set('display_errors', 1); // Display errors on screen

include 'auth.php';
include '../db.php';

$client = null;
$client_id = null;

// If ID is provided, fetch existing client data
if (isset($_GET['id'])) {
    $client_id = $conn->real_escape_string($_GET['id']);
    $sql = "SELECT * FROM clients WHERE id = '$client_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $client = $result->fetch_assoc();
    } else {
        // Client not found, redirect to manage_clients.php
        header("Location: manage_clients.php?message=" . urlencode("Client not found.") . "&type=" . urlencode("danger"));
        exit;
    }
}

$message = '';
$message_type = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $website_url = $conn->real_escape_string($_POST['website_url']);
    $testimonial = $conn->real_escape_string($_POST['testimonial']);
    $sort_order = isset($_POST['sort_order']) ? (int)$_POST['sort_order'] : 0;
    $is_active = isset($_POST['is_active']) ? 1 : 0; // Checkbox value
    $logo_url = $conn->real_escape_string($_POST['existing_logo_url'] ?? ''); // Get existing logo URL

    // Handle logo upload
    if (isset($_FILES['client_logo']) && $_FILES['client_logo']['error'] === UPLOAD_ERR_OK) {
        $target_dir = "../../assets/images/clients/"; // Assuming a 'clients' folder for logos
        // Create directory if it doesn't exist
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $file_name = uniqid() . "_" . basename($_FILES["client_logo"]["name"]);
        $target_file = $target_dir . $file_name;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Validate file type
        $allowed_types = array('jpg', 'png', 'jpeg', 'gif', 'webp', 'svg'); // SVG added for logos
        if (!in_array($imageFileType, $allowed_types)) {
            $message = "Sorry, only JPG, JPEG, PNG, GIF, WEBP & SVG files are allowed for logos.";
            $message_type = 'danger';
        } else {
            if (move_uploaded_file($_FILES["client_logo"]["tmp_name"], $target_file)) {
                // If a new logo is uploaded, update the logo_url
                $logo_url = "assets/images/clients/" . $file_name;
            } else {
                $message = "Sorry, there was an error uploading your logo.";
                $message_type = 'danger';
            }
        }
    } elseif (isset($_POST['delete_current_logo']) && $_POST['delete_current_logo'] === '1') {
        // If user selected to delete current logo
        if (!empty($logo_url) && file_exists("../../" . $logo_url)) {
            unlink("../../" . $logo_url); // Delete file from server
        }
        $logo_url = null; // Remove from database
    }


    if ($message_type === 'danger') { // If there was a logo upload error, stop here
        // No further action, message is already set
    } elseif ($client_id) {
        // Update existing client
        $update_sql = "UPDATE clients SET name = '$name', website_url = '$website_url', testimonial = '$testimonial', sort_order = $sort_order, is_active = $is_active, logo_url = " . ($logo_url ? "'$logo_url'" : "NULL") . " WHERE id = '$client_id'";
        if ($conn->query($update_sql) === TRUE) {
            $message = "Client updated successfully!";
            $message_type = 'success';
            // Reload client data to reflect changes
            $sql = "SELECT * FROM clients WHERE id = '$client_id'";
            $result = $conn->query($sql);
            $client = $result->fetch_assoc();
        } else {
            $message = "Error updating client: " . $conn->error;
            $message_type = 'danger';
        }
    } else {
        // Add new client
        $insert_sql = "INSERT INTO clients (name, website_url, testimonial, sort_order, is_active, logo_url) VALUES ('$name', '$website_url', '$testimonial', $sort_order, $is_active, " . ($logo_url ? "'$logo_url'" : "NULL") . ")";
        if ($conn->query($insert_sql) === TRUE) {
            $client_id = $conn->insert_id;
            $message = "Client added successfully!";
            $message_type = 'success';
            // Redirect to manage the newly created client (or list)
            header("Location: manage_clients.php?message=" . urlencode($message) . "&type=" . urlencode($message_type));
            exit;
        } else {
            $message = "Error adding client: " . $conn->error;
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
        <h2><?php echo $client_id ? 'Edit Client: ' . htmlspecialchars($client['name'] ?? '') : 'Add New Client'; ?></h2>

        <?php if ($message): ?>
            <div class="alert alert-<?php echo $message_type; ?> alert-dismissible fade show" role="alert">
                <?php echo $message; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Client Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($client['name'] ?? ''); ?>" required>
            </div>
            <div class="mb-3">
                <label for="website_url" class="form-label">Website URL</label>
                <input type="url" class="form-control" id="website_url" name="website_url" value="<?php echo htmlspecialchars($client['website_url'] ?? ''); ?>">
            </div>
            
            <div class="mb-3">
                <label for="client_logo" class="form-label">Client Logo</label>
                <input type="file" class="form-control" id="client_logo" name="client_logo" accept="image/*">
                <?php if (!empty($client['logo_url'])): ?>
                    <div class="mt-2">
                        <p>Current Logo:</p>
                        <img src="../../<?php echo htmlspecialchars($client['logo_url']); ?>" alt="Current Client Logo" style="max-width: 200px; height: auto;">
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" value="1" id="delete_current_logo" name="delete_current_logo">
                            <label class="form-check-label" for="delete_current_logo">
                                Delete current logo
                            </label>
                        </div>
                        <input type="hidden" name="existing_logo_url" value="<?php echo htmlspecialchars($client['logo_url']); ?>">
                    </div>
                <?php endif; ?>
                <small class="form-text text-muted">Allowed types: JPG, JPEG, PNG, GIF, WEBP, SVG. Max size: 2MB (check php.ini for actual limit).</small>
            </div>

            <div class="mb-3">
                <label for="testimonial" class="form-label">Testimonial (optional)</label>
                <textarea class="form-control" id="testimonial" name="testimonial" rows="5"><?php echo htmlspecialchars($client['testimonial'] ?? ''); ?></textarea>
            </div>

            <div class="mb-3">
                <label for="sort_order" class="form-label">Sort Order</label>
                <input type="number" class="form-control" id="sort_order" name="sort_order" value="<?php echo htmlspecialchars($client['sort_order'] ?? '0'); ?>">
                <small class="form-text text-muted">Clients with lower numbers appear first.</small>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" <?php echo (isset($client['is_active']) && $client['is_active']) ? 'checked' : ''; ?>>
                <label class="form-check-label" for="is_active">Active</label>
                <small class="form-text text-muted">Only active clients will be displayed on the frontend.</small>
            </div>


            <button type="submit" class="btn btn-primary"><?php echo $client_id ? 'Update Client' : 'Add Client'; ?></button>
            <a href="manage_clients.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

<?php
$content = ob_get_clean(); // Get the buffered content and clean the buffer
$page_title = ($client_id ? 'Edit Client' : 'Add New Client') . ' - Dashboard'; // Set the page title

include '_dashboard_layout.php';

$conn->close();
?>
