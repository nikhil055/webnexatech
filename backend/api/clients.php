<?php
header("Content-Type: application/json; charset=UTF-8");
include '../db.php';

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    if (isset($_GET['id'])) {
        // Get a single client
        $id = $_GET['id'];
        $sql = "SELECT * FROM clients WHERE id = $id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo json_encode($row);
        } else {
            echo json_encode(["message" => "No client found with that ID."]);
        }
    } else {
        // Get all active clients, ordered by sort_order
        $sql = "SELECT id, name, logo_url, website_url, testimonial, sort_order, is_active FROM clients WHERE is_active = TRUE ORDER BY sort_order ASC, name ASC";
        $result = $conn->query($sql);
        $clients = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $clients[] = $row;
            }
        }
        echo json_encode($clients);
    }
} elseif ($method === 'POST') {
    // This will be used for creating and updating clients from the dashboard
    $data = json_decode(file_get_contents("php://input"));

    // Simple validation
    if (empty($data->name)) {
        http_response_code(400);
        echo json_encode(["message" => "Client name is required."]);
        return;
    }

    $name = $conn->real_escape_string($data->name);
    $logo_url = isset($data->logo_url) ? $conn->real_escape_string($data->logo_url) : '';
    $website_url = isset($data->website_url) ? $conn->real_escape_string($data->website_url) : '';
    $testimonial = isset($data->testimonial) ? $conn->real_escape_string($data->testimonial) : '';
    $sort_order = isset($data->sort_order) ? (int)$data->sort_order : 0;
    $is_active = isset($data->is_active) ? (int)$data->is_active : 1; // Default to active

    if (isset($data->id)) {
        // Update existing client
        $id = $data->id;
        $sql = "UPDATE clients SET name='$name', logo_url='$logo_url', website_url='$website_url', testimonial='$testimonial', sort_order=$sort_order, is_active=$is_active WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            http_response_code(200);
            echo json_encode(["message" => "Client updated successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Error updating client: " . $conn->error]);
        }
    } else {
        // Create new client
        $sql = "INSERT INTO clients (name, logo_url, website_url, testimonial, sort_order, is_active) VALUES ('$name', '$logo_url', '$website_url', '$testimonial', $sort_order, $is_active)";
        if ($conn->query($sql) === TRUE) {
            http_response_code(201);
            echo json_encode(["message" => "Client created successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Error creating client: " . $conn->error]);
        }
    }
} elseif ($method === 'DELETE') {
    // This will be used for deleting clients from the dashboard
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM clients WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            http_response_code(200);
            echo json_encode(["message" => "Client deleted successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Error deleting client: " . $conn->error]);
        }
    } else {
        http_response_code(400);
        echo json_encode(["message" => "No client ID provided to delete."]);
    }
}

$conn->close();
?>