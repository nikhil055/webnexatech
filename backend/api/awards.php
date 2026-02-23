<?php
header("Content-Type: application/json; charset=UTF-8");
include '../db.php';

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    if (isset($_GET['id'])) {
        // Get a single award
        $id = $_GET['id'];
        $sql = "SELECT * FROM awards WHERE id = $id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo json_encode($row);
        } else {
            echo json_encode(["message" => "No award found with that ID."]);
        }
    } else {
        // Get all awards
        $sql = "SELECT id, title, awarding_body, award_year, description, image_url, link_url, reg_date FROM awards ORDER BY award_year DESC, reg_date DESC";
        $result = $conn->query($sql);
        $awards = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $awards[] = $row;
            }
        }
        echo json_encode($awards);
    }
} elseif ($method === 'POST') {
    // This will be used for creating and updating awards from the dashboard
    $data = json_decode(file_get_contents("php://input"));

    // Simple validation
    if (empty($data->title)) {
        http_response_code(400);
        echo json_encode(["message" => "Award title is required."]);
        return;
    }

    $title = $conn->real_escape_string($data->title);
    $awarding_body = isset($data->awarding_body) ? $conn->real_escape_string($data->awarding_body) : '';
    $award_year = isset($data->award_year) ? (int)$data->award_year : NULL;
    $description = isset($data->description) ? $conn->real_escape_string($data->description) : '';
    $image_url = isset($data->image_url) ? $conn->real_escape_string($data->image_url) : '';
    $link_url = isset($data->link_url) ? $conn->real_escape_string($data->link_url) : '';

    if (isset($data->id)) {
        // Update existing award
        $id = $data->id;
        $sql = "UPDATE awards SET title='$title', awarding_body='$awarding_body', award_year=" . ($award_year ? $award_year : "NULL") . ", description='$description', image_url='$image_url', link_url='$link_url' WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            http_response_code(200);
            echo json_encode(["message" => "Award updated successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Error updating award: " . $conn->error]);
        }
    } else {
        // Create new award
        $sql = "INSERT INTO awards (title, awarding_body, award_year, description, image_url, link_url) VALUES ('$title', '$awarding_body', " . ($award_year ? $award_year : "NULL") . ", '$description', '$image_url', '$link_url')";
        if ($conn->query($sql) === TRUE) {
            http_response_code(201);
            echo json_encode(["message" => "Award created successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Error creating award: " . $conn->error]);
        }
    }
} elseif ($method === 'DELETE') {
    // This will be used for deleting awards from the dashboard
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM awards WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            http_response_code(200);
            echo json_encode(["message" => "Award deleted successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Error deleting award: " . $conn->error]);
        }
    } else {
        http_response_code(400);
        echo json_encode(["message" => "No award ID provided to delete."]);
    }
}

$conn->close();
?>