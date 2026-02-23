<?php
header("Content-Type: application/json; charset=UTF-8");
include '../db.php';

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    if (isset($_GET['id'])) {
        // Get a single work item
        $id = $_GET['id'];
        $sql = "SELECT * FROM work_items WHERE id = $id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo json_encode($row);
        } else {
            echo json_encode(["message" => "No work item found with that ID."]);
        }
    } else {
        // Get all work items
        $sql = "SELECT * FROM work_items ORDER BY reg_date DESC";
        $result = $conn->query($sql);
        $work_items = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $work_items[] = $row;
            }
        }
        echo json_encode($work_items);
    }
} elseif ($method === 'POST') {
    // This will be used for creating and updating work items from the dashboard
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
    $project_link = isset($data->project_link) ? $conn->real_escape_string($data->project_link) : '';

    if (isset($data->id)) {
        // Update existing work item
        $id = $data->id;
        $sql = "UPDATE work_items SET title='$title', description='$description', image_url='$image_url', project_link='$project_link' WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            http_response_code(200);
            echo json_encode(["message" => "Work item updated successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Error updating work item: " . $conn->error]);
        }
    } else {
        // Create new work item
        $sql = "INSERT INTO work_items (title, description, image_url, project_link) VALUES ('$title', '$description', '$image_url', '$project_link')";
        if ($conn->query($sql) === TRUE) {
            http_response_code(201);
            echo json_encode(["message" => "Work item created successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Error creating work item: " . $conn->error]);
        }
    }
} elseif ($method === 'DELETE') {
    // This will be used for deleting work items from the dashboard
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM work_items WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            http_response_code(200);
            echo json_encode(["message" => "Work item deleted successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Error deleting work item: " . $conn->error]);
        }
    } else {
        http_response_code(400);
        echo json_encode(["message" => "No work item ID provided to delete."]);
    }
}

$conn->close();
?>