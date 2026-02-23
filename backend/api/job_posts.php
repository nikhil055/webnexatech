<?php
header("Content-Type: application/json; charset=UTF-8");
include '../db.php';

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    if (isset($_GET['id'])) {
        // Get a single job post
        $id = $_GET['id'];
        $sql = "SELECT * FROM job_posts WHERE id = $id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo json_encode($row);
        } else {
            echo json_encode(["message" => "No job post found with that ID."]);
        }
    } else {
        // Get all active job posts
        $sql = "SELECT id, title, description, location, employment_type, salary_range, posted_date, application_deadline, is_active FROM job_posts WHERE is_active = TRUE AND (application_deadline IS NULL OR application_deadline >= CURDATE()) ORDER BY posted_date DESC";
        $result = $conn->query($sql);
        $job_posts = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $job_posts[] = $row;
            }
        }
        echo json_encode($job_posts);
    }
} elseif ($method === 'POST') {
    // This will be used for creating and updating job posts from the dashboard
    $data = json_decode(file_get_contents("php://input"));

    // Simple validation
    if (empty($data->title) || empty($data->description) || empty($data->location) || empty($data->employment_type)) {
        http_response_code(400);
        echo json_encode(["message" => "Title, description, location, and employment type are required."]);
        return;
    }

    $title = $conn->real_escape_string($data->title);
    $description = $conn->real_escape_string($data->description);
    $requirements = isset($data->requirements) ? $conn->real_escape_string($data->requirements) : '';
    $location = $conn->real_escape_string($data->location);
    $employment_type = $conn->real_escape_string($data->employment_type);
    $salary_range = isset($data->salary_range) ? $conn->real_escape_string($data->salary_range) : '';
    $application_deadline = isset($data->application_deadline) && $data->application_deadline ? "'" . $conn->real_escape_string($data->application_deadline) . "'" : "NULL";
    $is_active = isset($data->is_active) ? (int)$data->is_active : 1;

    if (isset($data->id)) {
        // Update existing job post
        $id = $data->id;
        $sql = "UPDATE job_posts SET title='$title', description='$description', requirements='$requirements', location='$location', employment_type='$employment_type', salary_range='$salary_range', application_deadline=$application_deadline, is_active=$is_active WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            http_response_code(200);
            echo json_encode(["message" => "Job post updated successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Error updating job post: " . $conn->error]);
        }
    } else {
        // Create new job post
        $sql = "INSERT INTO job_posts (title, description, requirements, location, employment_type, salary_range, application_deadline, is_active) VALUES ('$title', '$description', '$requirements', '$location', '$employment_type', '$salary_range', $application_deadline, $is_active)";
        if ($conn->query($sql) === TRUE) {
            http_response_code(201);
            echo json_encode(["message" => "Job post created successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Error creating job post: " . $conn->error]);
        }
    }
} elseif ($method === 'DELETE') {
    // This will be used for deleting job posts from the dashboard
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM job_posts WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            http_response_code(200);
            echo json_encode(["message" => "Job post deleted successfully."]);
        } else {
            http_response_code(500);
            echo json_encode(["message" => "Error deleting job post: " . $conn->error]);
        }
    } else {
        http_response_code(400);
        echo json_encode(["message" => "No job post ID provided to delete."]);
    }
}

$conn->close();
?>