<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webnexa_db";

// Enable MySQLi error reporting for better debugging
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Select the database
if (!$conn->select_db($dbname)) {
    die("Database selection failed: " . $conn->error);
}
?>