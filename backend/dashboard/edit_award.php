<?php
error_reporting(E_ALL); // Report all errors
ini_set('display_errors', 1); // Display errors on screen

include 'auth.php';
include '../db.php';

$award = null;
$award_id = null;

// If ID is provided, fetch existing award data
if (isset($_GET['id'])) {
    $award_id = $conn->real_escape_string($_GET['id']);
    $sql = "SELECT * FROM awards WHERE id = '$award_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $award = $result->fetch_assoc();
    } else {
        // Award not found, redirect to manage_awards.php
        header("Location: manage_awards.php?message=" . urlencode("Award not found.") . "&type=" . urlencode("danger"));
        exit;
    }
}

$message = '';
$message_type = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $conn->real_escape_string($_POST['title']);
    $awarding_body = $conn->real_escape_string($_POST['awarding_body']);
    $award_year = $_POST['award_year'] ? (int)$_POST['award_year'] : NULL;
    $description = $conn->real_escape_string($_POST['description']);
    $link_url = $conn->real_escape_string($_POST['link_url']);
    $image_url = $conn->real_escape_string($_POST['existing_image_url'] ?? ''); // Get existing image URL

    // Handle image upload
    if (isset($_FILES['award_image']) && $_FILES['award_image']['error'] === UPLOAD_ERR_OK) {
        $target_dir = "../../assets/images/awards/"; // Assuming an 'awards' folder for images
        // Create directory if it doesn't exist
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $file_name = uniqid() . "_" . basename($_FILES["award_image"]["name"]);
        $target_file = $target_dir . $file_name;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Validate file type
        $allowed_types = array('jpg', 'png', 'jpeg', 'gif', 'webp');
        if (!in_array($imageFileType, $allowed_types)) {
            $message = "Sorry, only JPG, JPEG, PNG, GIF & WEBP files are allowed for images.";
            $message_type = 'danger';
        } else {
            if (move_uploaded_file($_FILES["award_image"]["tmp_name"], $target_file)) {
                // If a new image is uploaded, update the image_url
                $image_url = "assets/images/awards/" . $file_name;
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
    } elseif ($award_id) {
        // Update existing award
        $update_sql = "UPDATE awards SET title = '$title', awarding_body = '$awarding_body', award_year = " . ($award_year ? $award_year : "NULL") . ", description = '$description', link_url = '$link_url', image_url = " . ($image_url ? "'$image_url'" : "NULL") . " WHERE id = '$award_id'";
        if ($conn->query($update_sql) === TRUE) {
            $message = "Award updated successfully!";
            $message_type = 'success';
            // Reload award data to reflect changes
            $sql = "SELECT * FROM awards WHERE id = '$award_id'";
            $result = $conn->query($sql);
            $award = $result->fetch_assoc();
        } else {
            $message = "Error updating award: " . $conn->error;
            $message_type = 'danger';
        }
    } else {
        // Add new award
        $sql_award_year = $award_year ? "'$award_year'" : "NULL";
        $sql_image_url = $image_url ? "'$image_url'" : "NULL";
        $sql_link_url = $link_url ? "'$link_url'" : "NULL";
        $sql_description = $description ? "'$description'" : "NULL";
        $sql_awarding_body = $awarding_body ? "'$awarding_body'" : "NULL";

        $insert_sql = "INSERT INTO awards (title, awarding_body, award_year, description, image_url, link_url) VALUES ('$title', $sql_awarding_body, $sql_award_year, $sql_description, $sql_image_url, $sql_link_url)";
        if ($conn->query($insert_sql) === TRUE) {
            $award_id = $conn->insert_id;
            $message = "Award added successfully!";
            $message_type = 'success';
            // Redirect to manage the newly created award (or list)
            header("Location: manage_awards.php?message=" . urlencode($message) . "&type=" . urlencode($message_type));
            exit;
        } else {
            $message = "Error adding award: " . $conn->error;
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
        <h2><?php echo $award_id ? 'Edit Award: ' . htmlspecialchars($award['title'] ?? '') : 'Add New Award'; ?></h2>

        <?php if ($message): ?>
            <div class="alert alert-<?php echo $message_type; ?> alert-dismissible fade show" role="alert">
                <?php echo $message; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($award['title'] ?? ''); ?>" required>
            </div>
            <div class="mb-3">
                <label for="awarding_body" class="form-label">Awarding Body</label>
                <input type="text" class="form-control" id="awarding_body" name="awarding_body" value="<?php echo htmlspecialchars($award['awarding_body'] ?? ''); ?>">
            </div>
            <div class="mb-3">
                <label for="award_year" class="form-label">Award Year</label>
                <input type="number" class="form-control" id="award_year" name="award_year" value="<?php echo htmlspecialchars($award['award_year'] ?? ''); ?>" min="1900" max="<?php echo date('Y') + 1; ?>">
            </div>
            <div class="mb-3">
                <label for="link_url" class="form-label">Link URL (optional)</label>
                <input type="url" class="form-control" id="link_url" name="link_url" value="<?php echo htmlspecialchars($award['link_url'] ?? ''); ?>">
            </div>
            
            <div class="mb-3">
                <label for="award_image" class="form-label">Award Image</label>
                <input type="file" class="form-control" id="award_image" name="award_image" accept="image/*">
                <?php if (!empty($award['image_url'])): ?>
                    <div class="mt-2">
                        <p>Current Image:</p>
                        <img src="../../<?php echo htmlspecialchars($award['image_url']); ?>" alt="Current Award Image" style="max-width: 200px; height: auto;">
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" value="1" id="delete_current_image" name="delete_current_image">
                            <label class="form-check-label" for="delete_current_image">
                                Delete current image
                            </label>
                        </div>
                        <input type="hidden" name="existing_image_url" value="<?php echo htmlspecialchars($award['image_url']); ?>">
                    </div>
                <?php endif; ?>
                <small class="form-text text-muted">Allowed types: JPG, JPEG, PNG, GIF, WEBP. Max size: 2MB (check php.ini for actual limit).</small>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description (optional)</label>
                <textarea class="form-control" id="description" name="description" rows="5"><?php echo htmlspecialchars($award['description'] ?? ''); ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary"><?php echo $award_id ? 'Update Award' : 'Add Award'; ?></button>
            <a href="manage_awards.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

<?php
$content = ob_get_clean(); // Get the buffered content and clean the buffer
$page_title = ($award_id ? 'Edit Award' : 'Add New Award') . ' - Dashboard'; // Set the page title

include '_dashboard_layout.php';

$conn->close();
?>
