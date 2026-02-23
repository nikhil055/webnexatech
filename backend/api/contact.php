<?php
header("Content-Type: application/json; charset=UTF-8");
include '../db.php';

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {
    $data = json_decode(file_get_contents("php://input"));

    if (empty($data->fullname) || empty($data->email) || empty($data->message)) {
        http_response_code(400);
        echo json_encode(["message" => "Full name, email, and message are required."]);
        return;
    }

    $fullname = $conn->real_escape_string($data->fullname);
    $email = $conn->real_escape_string($data->email);
    $phone = isset($data->phone) ? $conn->real_escape_string($data->phone) : '';
    $country = isset($data->country) ? $conn->real_escape_string($data->country) : '';
    $message = $conn->real_escape_string($data->message);

    $sql = "INSERT INTO contacts (fullname, email, phone, country, message) VALUES ('$fullname', '$email', '$phone', '$country', '$message')";

    if ($conn->query($sql) === TRUE) {
        http_response_code(201);
        echo json_encode(["message" => "Contact form submitted successfully."]);
    } else {
        http_response_code(500);
        echo json_encode(["message" => "Error submitting contact form: " . $conn->error]);
    }
} else {
    http_response_code(405);
    echo json_encode(["message" => "Method not allowed."]);
}

$conn->close();
?>
