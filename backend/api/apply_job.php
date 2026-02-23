<?php
header("Content-Type: application/json; charset=UTF-8");
include '../db.php'; // Include database connection

$response = ['success' => false, 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $job_id = $_POST['job_id'] ?? null;
    $applicant_name = $_POST['applicant_name'] ?? null;
    $applicant_email = $_POST['applicant_email'] ?? null;
    $applicant_phone = $_POST['applicant_phone'] ?? null;
    $resume_file = $_FILES['resume_file'] ?? null;

    // --- Input Validation ---
    if (!$job_id || !is_numeric($job_id)) {
        $response['message'] = 'Invalid Job ID.';
        echo json_encode($response);
        exit;
    }
    if (empty($applicant_name) || empty($applicant_email)) {
        $response['message'] = 'Name and Email are required.';
        echo json_encode($response);
        exit;
    }
    if (!filter_var($applicant_email, FILTER_VALIDATE_EMAIL)) {
        $response['message'] = 'Invalid email format.';
        echo json_encode($response);
        exit;
    }
    if (!$resume_file || $resume_file['error'] !== UPLOAD_ERR_OK) {
        $response['message'] = 'Resume file is required.';
        echo json_encode($response);
        exit;
    }

    // --- Resume File Upload ---
    $upload_dir = '../../assets/resumes/';
    // Create the directory if it doesn't exist
    if (!is_dir($upload_dir)) {
        if (!mkdir($upload_dir, 0777, true)) {
            $response['message'] = 'Failed to create upload directory.';
            echo json_encode($response);
            exit;
        }
    }

    $file_extension = strtolower(pathinfo($resume_file['name'], PATHINFO_EXTENSION));
    if ($file_extension !== 'pdf') {
        $response['message'] = 'Only PDF files are allowed for resumes.';
        echo json_encode($response);
        exit;
    }

    $unique_filename = uniqid('resume_') . '.' . $file_extension;
    $target_file_path = $upload_dir . $unique_filename;
    $db_resume_path = 'assets/resumes/' . $unique_filename; // Path to store in DB

    if (move_uploaded_file($resume_file['tmp_name'], $target_file_path)) {
        // --- Save Application to Database ---
        $job_id = $conn->real_escape_string($job_id);
        $applicant_name = $conn->real_escape_string($applicant_name);
        $applicant_email = $conn->real_escape_string($applicant_email);
        $applicant_phone = $conn->real_escape_string($applicant_phone);
        $db_resume_path = $conn->real_escape_string($db_resume_path);

        $sql = "INSERT INTO job_applications (job_id, applicant_name, applicant_email, applicant_phone, resume_path) 
                VALUES ('$job_id', '$applicant_name', '$applicant_email', '$applicant_phone', '$db_resume_path')";

        if ($conn->query($sql) === TRUE) {
            $response['success'] = true;
            $response['message'] = 'Application submitted successfully!';
        } else {
            // If DB insert fails, try to delete the uploaded file
            if (file_exists($target_file_path)) {
                unlink($target_file_path);
            }
            $response['message'] = 'Database error: ' . $conn->error;
        }
    } else {
        $response['message'] = 'Failed to upload resume file.';
    }
} else {
    $response['message'] = 'Invalid request method.';
}

echo json_encode($response);
$conn->close();
?>