<?php
header("Content-Type: application/json; charset=UTF-8");
include '../db.php';

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    if (isset($_GET['id'])) {
        // Get a single featured item
        $id = $_GET['id'];
        $sql = "SELECT * FROM featured_items WHERE id = $id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo json_encode($row);
        } else {
            echo json_encode(["message" => "No featured item found with that ID."]);
        }
    } else {
        // Get all active featured items, ordered by sort_order
        $sql = "SELECT id, title, description, image_url, link_url, reg_date, sort_order, is_active FROM featured_items WHERE is_active = TRUE ORDER BY sort_order ASC, reg_date DESC";
        $result = $conn->query($sql);
        $featured_items = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $featured_items[] = $row;
            }
        }
        echo json_encode($featured_items);
    }
} elseif ($method === 'POST') {
    // This will be used for creating and updating featured items from the dashboard
    $data = json_decode(file_get_contents("php://input"));

    // Simple validation
    if (empty($data->title) || empty($data->description)) {
        http_response_code(400);
        echo json_encode(["message" => "Title and description are required."]);
        return;
    }

    $title = $conn->real_escape_string($data->title);
    $description = $conn->real_escape_string($data->description);
    $image_url = isset($data->image_url) ? $conn->real_escape_string($data->image_url) : '';
    $link_url = isset($data->link_url) ? $conn->real_escape_string($data->link_url) : '';
    $sort_order = isset($data->sort_order) ? (int)$data->sort_order : 0;
    $is_active = isset($data->is_active) ? (int)$data->is_active : 1; // Default to active

    if (isset($data->id)) {
        // Update existing featured item
        $id = $data->id;
        $sql = "UPDATE featured_items SET title='$title', description='$description', image_url='$image_url', link_url='$link_url', sort_order=$sort_order, is_active=$is_active WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            http_response_code(200);
            echo json_encode(["message" => "Featured item updated successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Error updating featured item: " . $conn->error]);
        }
    } else {
        // Create new featured item
        $sql = "INSERT INTO featured_items (title, description, image_url, link_url, sort_order, is_active) VALUES ('$title', '$description', '$image_url', '$link_url', $sort_order, $is_active)";
        if ($conn->query($sql) === TRUE) {
            http_response_code(201);
            echo json_encode(["message" => "Featured item created successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Error creating featured item: " . $conn->error]);
        }
    }
} elseif ($method === 'DELETE') {
    // This will be used for deleting featured items from the dashboard
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM featured_items WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            http_response_code(200);
            echo json_encode(["message" => "Featured item deleted successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Error deleting featured item: " . $conn->error]);
        }
    } else {
        http_response_code(400);
        echo json_encode(["message" => "No featured item ID provided to delete."]);
    }
}

$conn->close();
?>