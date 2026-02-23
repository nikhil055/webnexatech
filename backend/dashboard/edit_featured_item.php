<?php
error_reporting(E_ALL); // Report all errors
ini_set('display_errors', 1); // Display errors on screen

include 'auth.php';
include '../db.php';

$featured_item = null;
$item_id = null;

// If ID is provided, fetch existing featured item data
if (isset($_GET['id'])) {
    $item_id = $conn->real_escape_string($_GET['id']);
    $sql = "SELECT * FROM featured_items WHERE id = '$item_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $featured_item = $result->fetch_assoc();
    } else {
        // Featured item not found, redirect to manage_featured_items.php
        header("Location: manage_featured_items.php?message=" . urlencode("Featured item not found.") . "&type=" . urlencode("danger"));
        exit;
    }
}

$message = '';
$message_type = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $conn->real_escape_string($_POST['title']);
    $description = $conn->real_escape_string($_POST['description']);
    $link_url = $conn->real_escape_string($_POST['link_url']);
    $sort_order = isset($_POST['sort_order']) ? (int)$_POST['sort_order'] : 0;
    $is_active = isset($_POST['is_active']) ? 1 : 0; // Checkbox value
    $image_url = $conn->real_escape_string($_POST['existing_image_url'] ?? ''); // Get existing image URL

    // Handle image upload
    if (isset($_FILES['item_image']) && $_FILES['item_image']['error'] === UPLOAD_ERR_OK) {
        $target_dir = "../../assets/images/featured/"; // Assuming a 'featured' folder for images
        // Create directory if it doesn't exist
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $file_name = uniqid() . "_" . basename($_FILES["item_image"]["name"]);
        $target_file = $target_dir . $file_name;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Validate file type
        $allowed_types = array('jpg', 'png', 'jpeg', 'gif', 'webp');
        if (!in_array($imageFileType, $allowed_types)) {
            $message = "Sorry, only JPG, JPEG, PNG, GIF & WEBP files are allowed for images.";
            $message_type = 'danger';
        } else {
            if (move_uploaded_file($_FILES["item_image"]["tmp_name"], $target_file)) {
                // If a new image is uploaded, update the image_url
                $image_url = "assets/images/featured/" . $file_name;
            } else {
                $message = "Sorry, there was an error uploading your image.";
                $message_type = 'danger';
            }
        }
    } elseif (isset($_POST['delete_current_image']) && $_POST['delete_current_image'] === '1') {
        // If user selected to delete current image
        if (!empty($image_url) && file_exists("../../" . $image_url)) {
            unlink("../../" . $image_url); // Delete file from server
        }
        $image_url = null; // Remove from database
    }


    if ($message_type === 'danger') { // If there was an image upload error, stop here
        // No further action, message is already set
    } elseif ($item_id) {
        // Update existing featured item
        $update_sql = "UPDATE featured_items SET title = '$title', description = '$description', link_url = '$link_url', sort_order = $sort_order, is_active = $is_active, image_url = " . ($image_url ? "'$image_url'" : "NULL") . " WHERE id = '$item_id'";
        if ($conn->query($update_sql) === TRUE) {
            $message = "Featured item updated successfully!";
            $message_type = 'success';
            // Reload featured item data to reflect changes
            $sql = "SELECT * FROM featured_items WHERE id = '$item_id'";
            $result = $conn->query($sql);
            $featured_item = $result->fetch_assoc();
        } else {
            $message = "Error updating featured item: " . $conn->error;
            $message_type = 'danger';
        }
    } else {
        // Add new featured item
        $insert_sql = "INSERT INTO featured_items (title, description, link_url, sort_order, is_active, image_url) VALUES ('$title', '$description', '$link_url', $sort_order, $is_active, " . ($image_url ? "'$image_url'" : "NULL") . ")";
        if ($conn->query($insert_sql) === TRUE) {
            $item_id = $conn->insert_id;
            $message = "Featured item added successfully!";
            $message_type = 'success';
            // Redirect to manage the newly created featured item (or list)
            header("Location: manage_featured_items.php?message=" . urlencode($message) . "&type=" . urlencode($message_type));
            exit;
        } else {
            $message = "Error adding featured item: " . $conn->error;
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
        <h2><?php echo $item_id ? 'Edit Featured Item: ' . htmlspecialchars($featured_item['title'] ?? '') : 'Add New Featured Item'; ?></h2>

        <?php if ($message): ?>
            <div class="alert alert-<?php echo $message_type; ?> alert-dismissible fade show" role="alert">
                <?php echo $message; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($featured_item['title'] ?? ''); ?>" required>
            </div>
            <div class="mb-3">
                <label for="link_url" class="form-label">Link URL</label>
                <input type="url" class="form-control" id="link_url" name="link_url" value="<?php echo htmlspecialchars($featured_item['link_url'] ?? ''); ?>">
            </div>
            
            <div class="mb-3">
                <label for="item_image" class="form-label">Featured Item Image</label>
                <input type="file" class="form-control" id="item_image" name="item_image" accept="image/*">
                <?php if (!empty($featured_item['image_url'])): ?>
                    <div class="mt-2">
                        <p>Current Image:</p>
                        <img src="../../<?php echo htmlspecialchars($featured_item['image_url']); ?>" alt="Current Featured Item Image" style="max-width: 200px; height: auto;">
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" value="1" id="delete_current_image" name="delete_current_image">
                            <label class="form-check-label" for="delete_current_image">
                                Delete current image
                            </label>
                        </div>
                        <input type="hidden" name="existing_image_url" value="<?php echo htmlspecialchars($featured_item['image_url']); ?>">
                    </div>
                <?php endif; ?>
                <small class="form-text text-muted">Allowed types: JPG, JPEG, PNG, GIF, WEBP. Max size: 2MB (check php.ini for actual limit).</small>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="10" required><?php echo htmlspecialchars($featured_item['description'] ?? ''); ?></textarea>
            </div>

            <div class="mb-3">
                <label for="sort_order" class="form-label">Sort Order</label>
                <input type="number" class="form-control" id="sort_order" name="sort_order" value="<?php echo htmlspecialchars($featured_item['sort_order'] ?? '0'); ?>">
                <small class="form-text text-muted">Items with lower numbers appear first.</small>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="is_active" name="is_active" <?php echo (isset($featured_item['is_active']) && $featured_item['is_active']) ? 'checked' : ''; ?>>
                <label class="form-check-label" for="is_active">Active</label>
                <small class="form-text text-muted">Only active items will be displayed on the frontend.</small>
            </div>


            <button type="submit" class="btn btn-primary"><?php echo $item_id ? 'Update Featured Item' : 'Add Featured Item'; ?></button>
            <a href="manage_featured_items.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

<?php
$content = ob_get_clean(); // Get the buffered content and clean the buffer
$page_title = ($item_id ? 'Edit Featured Item' : 'Add New Featured Item') . ' - Dashboard'; // Set the page title

include '_dashboard_layout.php';

$conn->close();
?>
