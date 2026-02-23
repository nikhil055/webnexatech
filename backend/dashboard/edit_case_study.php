<?php
error_reporting(E_ALL); // Report all errors
ini_set('display_errors', 1); // Display errors on screen

include 'auth.php';
include '../db.php';

$case_study = null;
$study_id = null;

// If ID is provided, fetch existing case study data
if (isset($_GET['id'])) {
    $study_id = $conn->real_escape_string($_GET['id']);
    $sql = "SELECT * FROM case_studies WHERE id = '$study_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $case_study = $result->fetch_assoc();
    } else {
        // Case study not found, redirect to manage_case_studies.php
        header("Location: manage_case_studies.php?message=" . urlencode("Case study not found.") . "&type=" . urlencode("danger"));
        exit;
    }
}

$message = '';
$message_type = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $conn->real_escape_string($_POST['title']);
    $description = $conn->real_escape_string($_POST['description']);
    $client_name = $conn->real_escape_string($_POST['client_name']);
    $industry = $conn->real_escape_string($_POST['industry']);
    $link_url = $conn->real_escape_string($_POST['link_url']);
    $image_url = $conn->real_escape_string($_POST['existing_image_url'] ?? ''); // Get existing image URL

    // Handle image upload
    if (isset($_FILES['study_image']) && $_FILES['study_image']['error'] === UPLOAD_ERR_OK) {
        $target_dir = "../../assets/images/case_studies/"; // Assuming a 'case_studies' folder for images
        // Create directory if it doesn't exist
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $file_name = uniqid() . "_" . basename($_FILES["study_image"]["name"]);
        $target_file = $target_dir . $file_name;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Validate file type
        $allowed_types = array('jpg', 'png', 'jpeg', 'gif', 'webp');
        if (!in_array($imageFileType, $allowed_types)) {
            $message = "Sorry, only JPG, JPEG, PNG, GIF & WEBP files are allowed for images.";
            $message_type = 'danger';
        } else {
            if (move_uploaded_file($_FILES["study_image"]["tmp_name"], $target_file)) {
                // If a new image is uploaded, update the image_url
                $image_url = "assets/images/case_studies/" . $file_name;
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
    } elseif ($study_id) {
        // Update existing case study
        $update_sql = "UPDATE case_studies SET title = '$title', description = '$description', client_name = '$client_name', industry = '$industry', link_url = '$link_url', image_url = " . ($image_url ? "'$image_url'" : "NULL") . " WHERE id = '$study_id'";
        if ($conn->query($update_sql) === TRUE) {
            $message = "Case study updated successfully!";
            $message_type = 'success';
            // Reload case study data to reflect changes
            $sql = "SELECT * FROM case_studies WHERE id = '$study_id'";
            $result = $conn->query($sql);
            $case_study = $result->fetch_assoc();
        } else {
            $message = "Error updating case study: " . $conn->error;
            $message_type = 'danger';
        }
    } else {
        // Add new case study
        $insert_sql = "INSERT INTO case_studies (title, description, client_name, industry, link_url, image_url) VALUES ('$title', '$description', '$client_name', '$industry', '$link_url', " . ($image_url ? "'$image_url'" : "NULL") . ")";
        if ($conn->query($insert_sql) === TRUE) {
            $study_id = $conn->insert_id;
            $message = "Case study added successfully!";
            $message_type = 'success';
            // Redirect to manage the newly created case study (or list)
            header("Location: manage_case_studies.php?message=" . urlencode($message) . "&type=" . urlencode($message_type));
            exit;
        } else {
            $message = "Error adding case study: " . $conn->error;
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
        <h2><?php echo $study_id ? 'Edit Case Study: ' . htmlspecialchars($case_study['title'] ?? '') : 'Add New Case Study'; ?></h2>

        <?php if ($message): ?>
            <div class="alert alert-<?php echo $message_type; ?> alert-dismissible fade show" role="alert">
                <?php echo $message; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($case_study['title'] ?? ''); ?>" required>
            </div>
            <div class="mb-3">
                <label for="client_name" class="form-label">Client Name</label>
                <input type="text" class="form-control" id="client_name" name="client_name" value="<?php echo htmlspecialchars($case_study['client_name'] ?? ''); ?>" required>
            </div>
            <div class="mb-3">
                <label for="industry" class="form-label">Industry</label>
                <input type="text" class="form-control" id="industry" name="industry" value="<?php echo htmlspecialchars($case_study['industry'] ?? ''); ?>">
            </div>
            <div class="mb-3">
                <label for="link_url" class="form-label">Link URL (to full case study page)</label>
                <input type="url" class="form-control" id="link_url" name="link_url" value="<?php echo htmlspecialchars($case_study['link_url'] ?? ''); ?>">
            </div>
            
            <div class="mb-3">
                <label for="study_image" class="form-label">Case Study Image</label>
                <input type="file" class="form-control" id="study_image" name="study_image" accept="image/*">
                <?php if (!empty($case_study['image_url'])): ?>
                    <div class="mt-2">
                        <p>Current Image:</p>
                        <img src="../../<?php echo htmlspecialchars($case_study['image_url']); ?>" alt="Current Case Study Image" style="max-width: 200px; height: auto;">
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" value="1" id="delete_current_image" name="delete_current_image">
                            <label class="form-check-label" for="delete_current_image">
                                Delete current image
                            </label>
                        </div>
                        <input type="hidden" name="existing_image_url" value="<?php echo htmlspecialchars($case_study['image_url']); ?>">
                    </div>
                <?php endif; ?>
                <small class="form-text text-muted">Allowed types: JPG, JPEG, PNG, GIF, WEBP. Max size: 2MB (check php.ini for actual limit).</small>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="10" required><?php echo htmlspecialchars($case_study['description'] ?? ''); ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary"><?php echo $study_id ? 'Update Case Study' : 'Add Case Study'; ?></button>
            <a href="manage_case_studies.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

<?php
$content = ob_get_clean(); // Get the buffered content and clean the buffer
$page_title = ($study_id ? 'Edit Case Study' : 'Add New Case Study') . ' - Dashboard'; // Set the page title

include '_dashboard_layout.php';

$conn->close();
?>
