<?php
include 'auth.php';
include '../db.php';

$post = null;
$post_id = null;

// If ID is provided, fetch existing post data
if (isset($_GET['id'])) {
    $post_id = $conn->real_escape_string($_GET['id']);
    $sql = "SELECT * FROM posts WHERE id = '$post_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $post = $result->fetch_assoc();
    } else {
        // Post not found, redirect to manage_blog_posts.php
        header("Location: manage_blog_posts.php?message=" . urlencode("Post not found.") . "&type=" . urlencode("danger"));
        exit;
    }
}

$message = '';
$message_type = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $conn->real_escape_string($_POST['title']);
    $author = $conn->real_escape_string($_POST['author']);
    $content_text = $conn->real_escape_string($_POST['content_text']);
    $image_url = $conn->real_escape_string($_POST['existing_image_url'] ?? ''); // Get existing image URL

    // Handle image upload
    if (isset($_FILES['post_image']) && $_FILES['post_image']['error'] === UPLOAD_ERR_OK) {
        $target_dir = "../../assets/images/blog/";
        $file_name = uniqid() . "_" . basename($_FILES["post_image"]["name"]);
        $target_file = $target_dir . $file_name;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Validate file type
        $allowed_types = array('jpg', 'png', 'jpeg', 'gif');
        if (!in_array($imageFileType, $allowed_types)) {
            $message = "Sorry, only JPG, JPEG, PNG & GIF files are allowed for images.";
            $message_type = 'danger';
        } else {
            if (move_uploaded_file($_FILES["post_image"]["tmp_name"], $target_file)) {
                // If a new image is uploaded, update the image_url
                $image_url = "assets/images/blog/" . $file_name;
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
    } elseif ($post_id) {
        // Update existing post
        $update_sql = "UPDATE posts SET title = '$title', author = '$author', content = '$content_text', image_url = " . ($image_url ? "'$image_url'" : "NULL") . " WHERE id = '$post_id'";
        if ($conn->query($update_sql) === TRUE) {
            $message = "Post updated successfully!";
            $message_type = 'success';
            // Reload post data to reflect changes
            $sql = "SELECT * FROM posts WHERE id = '$post_id'";
            $result = $conn->query($sql);
            $post = $result->fetch_assoc();
        } else {
            $message = "Error updating post: " . $conn->error;
            $message_type = 'danger';
        }
    } else {
        // Add new post
        $insert_sql = "INSERT INTO posts (title, author, content, image_url) VALUES ('$title', '$author', '$content_text', " . ($image_url ? "'$image_url'" : "NULL") . ")";
        if ($conn->query($insert_sql) === TRUE) {
            $post_id = $conn->insert_id;
            $message = "Post added successfully!";
            $message_type = 'success';
            // Redirect to edit the newly created post
            header("Location: manage_blog_posts.php?message=" . urlencode($message) . "&type=" . urlencode($message_type));
            exit;
        } else {
            $message = "Error adding post: " . $conn->error;
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
        <h2><?php echo $post_id ? 'Edit Post: ' . htmlspecialchars($post['title'] ?? '') : 'Add New Post'; ?></h2>

        <?php if ($message): ?>
            <div class="alert alert-<?php echo $message_type; ?> alert-dismissible fade show" role="alert">
                <?php echo $message; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($post['title'] ?? ''); ?>" required>
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control" id="author" name="author" value="<?php echo htmlspecialchars($post['author'] ?? ''); ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="post_image" class="form-label">Post Image</label>
                <input type="file" class="form-control" id="post_image" name="post_image" accept="image/*">
                <?php if (!empty($post['image_url'])): ?>
                    <div class="mt-2">
                        <p>Current Image:</p>
                        <img src="../../<?php echo htmlspecialchars($post['image_url']); ?>" alt="Current Post Image" style="max-width: 200px; height: auto;">
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" value="1" id="delete_current_image" name="delete_current_image">
                            <label class="form-check-label" for="delete_current_image">
                                Delete current image
                            </label>
                        </div>
                        <input type="hidden" name="existing_image_url" value="<?php echo htmlspecialchars($post['image_url']); ?>">
                    </div>
                <?php endif; ?>
                <small class="form-text text-muted">Allowed types: JPG, JPEG, PNG, GIF. Max size: 2MB (check php.ini for actual limit).</small>
            </div>

            <div class="mb-3">
                <label for="content_text" class="form-label">Content</label>
                <textarea class="form-control" id="content_text" name="content_text" rows="10" required><?php echo htmlspecialchars($post['content'] ?? ''); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary"><?php echo $post_id ? 'Update Post' : 'Add Post'; ?></button>
            <a href="manage_blog_posts.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

<?php
$content = ob_get_clean(); // Get the buffered content and clean the buffer
$page_title = ($post_id ? 'Edit Post' : 'Add New Post') . ' - Dashboard'; // Set the page title

include '_dashboard_layout.php';

$conn->close();
?>
