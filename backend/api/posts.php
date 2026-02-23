<?php
header("Content-Type: application/json; charset=UTF-8");
include '../db.php';

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    if (isset($_GET['id'])) {
        // Get a single post
        $id = $_GET['id'];
        $sql = "SELECT * FROM posts WHERE id = $id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo json_encode($row);
        } else {
            echo json_encode(["message" => "No post found with that ID."]);
        }
    } else {
        // Get all posts
        $sql = "SELECT * FROM posts ORDER BY reg_date DESC";
        $result = $conn->query($sql);
        $posts = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $posts[] = $row;
            }
        }
        echo json_encode($posts);
    }
} elseif ($method === 'POST') {
    // This will be used for creating and updating posts from the dashboard
    $data = json_decode(file_get_contents("php://input"));

    // Simple validation
    if (empty($data->title) || empty($data->content)) {
        http_response_code(400);
        echo json_encode(["message" => "Title and content are required."]);
        return;
    }

    $title = $conn->real_escape_string($data->title);
    $content = $conn->real_escape_string($data->content);
    $image = isset($data->image) ? $conn->real_escape_string($data->image) : '';
    $author = isset($data->author) ? $conn->real_escape_string($data->author) : '';

    if (isset($data->id)) {
        // Update existing post
        $id = $data->id;
        $sql = "UPDATE posts SET title='$title', content='$content', image='$image', author='$author' WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            http_response_code(200);
            echo json_encode(["message" => "Post updated successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Error updating post: " . $conn->error]);
        }
    } else {
        // Create new post
        $sql = "INSERT INTO posts (title, content, image, author) VALUES ('$title', '$content', '$image', '$author')";
        if ($conn->query($sql) === TRUE) {
            http_response_code(201);
            echo json_encode(["message" => "Post created successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Error creating post: " . $conn->error]);
        }
    }
} elseif ($method === 'DELETE') {
    // This will be used for deleting posts from the dashboard
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM posts WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            http_response_code(200);
            echo json_encode(["message" => "Post deleted successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Error deleting post: " . $conn->error]);
        }
    } else {
        http_response_code(400);
        echo json_encode(["message" => "No post ID provided to delete."]);
    }
}

$conn->close();
?>
