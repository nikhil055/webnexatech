<?php
header("Content-Type: application/json; charset=UTF-8");
include '../db.php';

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    if (isset($_GET['id'])) {
        // Get a single case study
        $id = $_GET['id'];
        $sql = "SELECT * FROM case_studies WHERE id = $id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo json_encode($row);
        } else {
            echo json_encode(["message" => "No case study found with that ID."]);
        }
    } else {
        // Get all case studies
        $sql = "SELECT id, title, description, image_url, client_name, industry, link_url, reg_date FROM case_studies ORDER BY reg_date DESC";
        $result = $conn->query($sql);
        $case_studies = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $case_studies[] = $row;
            }
        }
        echo json_encode($case_studies);
    }
} elseif ($method === 'POST') {
    // This will be used for creating and updating case studies from the dashboard
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
    $client_name = isset($data->client_name) ? $conn->real_escape_string($data->client_name) : '';
    $industry = isset($data->industry) ? $conn->real_escape_string($data->industry) : '';
    $link_url = isset($data->link_url) ? $conn->real_escape_string($data->link_url) : '';

    if (isset($data->id)) {
        // Update existing case study
        $id = $data->id;
        $sql = "UPDATE case_studies SET title='$title', description='$description', image_url='$image_url', client_name='$client_name', industry='$industry', link_url='$link_url' WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            http_response_code(200);
            echo json_encode(["message" => "Case study updated successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Error updating case study: " . $conn->error]);
        }
    } else {
        // Create new case study
        $sql = "INSERT INTO case_studies (title, description, image_url, client_name, industry, link_url) VALUES ('$title', '$description', '$image_url', '$client_name', '$industry', '$link_url')";
        if ($conn->query($sql) === TRUE) {
            http_response_code(201);
            echo json_encode(["message" => "Case study created successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Error creating case study: " . $conn->error]);
        }
    }
} elseif ($method === 'DELETE') {
    // This will be used for deleting case studies from the dashboard
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM case_studies WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            http_response_code(200);
            echo json_encode(["message" => "Case study deleted successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Error deleting case study: " . $conn->error]);
        }
    } else {
        http_response_code(400);
        echo json_encode(["message" => "No case study ID provided to delete."]);
    }
}

$conn->close();
?>