<?php
header("Content-Type: application/json");

// Include database connection
require_once '../db.php';

// Ensure the database is selected
if (!$conn->select_db($dbname)) {
    die(json_encode(["error" => "Database selection failed: " . $conn->error]));
}

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        handleGet($conn);
        break;
    case 'POST':
        handlePost($conn);
        break;
    case 'PUT':
        handlePut($conn); // Not implemented yet
        break;
    case 'DELETE':
        handleDelete($conn); // Not implemented yet
        break;
    default:
        http_response_code(405);
        echo json_encode(["message" => "Method not allowed"]);
        break;
}

function handleGet($conn) {
    if (!isset($_GET['slug'])) {
        http_response_code(400);
        echo json_encode(["message" => "Missing 'slug' parameter"]);
        return;
    }

    $slug = $conn->real_escape_string($_GET['slug']);

    // Fetch page data
    $page_sql = "SELECT id, slug, title, meta_description, meta_keywords, banner_image_url, banner_title, breadcrumb_items FROM pages WHERE slug = '$slug' AND status = 'published'";
    $page_result = $conn->query($page_sql);

    if ($page_result->num_rows === 0) {
        http_response_code(404);
        echo json_encode(["message" => "Page not found or not published"]);
        return;
    }

    $page = $page_result->fetch_assoc();

    // Fetch page sections
    $page_id = $page['id'];
    $sections_sql = "SELECT section_order, type, title, subtitle, content_json FROM page_sections WHERE page_id = $page_id ORDER BY section_order ASC";
    $sections_result = $conn->query($sections_sql);

    $sections = [];
    while ($row = $sections_result->fetch_assoc()) {
        // Decode JSON content if it exists
        if (!empty($row['content_json'])) {
            $row['content_json'] = json_decode($row['content_json'], true);
        }
        $sections[] = $row;
    }

    $page['sections'] = $sections;
    // Decode breadcrumb_items if it exists
    if (!empty($page['breadcrumb_items'])) {
        $page['breadcrumb_items'] = json_decode($page['breadcrumb_items'], true);
    }

    http_response_code(200);
    echo json_encode($page);
}

function handlePost($conn) {
    $data = json_decode(file_get_contents("php://input"), true);

    if (!isset($data['slug']) || !isset($data['title'])) {
        http_response_code(400);
        echo json_encode(["message" => "Missing 'slug' or 'title' in request body"]);
        return;
    }

    $slug = $conn->real_escape_string($data['slug']);
    $title = $conn->real_escape_string($data['title']);
    $meta_description = isset($data['meta_description']) ? $conn->real_escape_string($data['meta_description']) : null;
    $meta_keywords = isset($data['meta_keywords']) ? $conn->real_escape_string($data['meta_keywords']) : null;
    $banner_image_url = isset($data['banner_image_url']) ? $conn->real_escape_string($data['banner_image_url']) : null;
    $banner_title = isset($data['banner_title']) ? $conn->real_escape_string($data['banner_title']) : null;
    $breadcrumb_items = isset($data['breadcrumb_items']) ? json_encode($data['breadcrumb_items']) : null;
    $status = isset($data['status']) ? $conn->real_escape_string($data['status']) : 'draft';


    // Check if page with slug already exists
    $check_sql = "SELECT id FROM pages WHERE slug = '$slug'";
    $check_result = $conn->query($check_sql);
    if ($check_result->num_rows > 0) {
        http_response_code(409); // Conflict
        echo json_encode(["message" => "Page with this slug already exists"]);
        return;
    }

    $insert_page_sql = "INSERT INTO pages (slug, title, meta_description, meta_keywords, banner_image_url, banner_title, breadcrumb_items, status) VALUES (
        '$slug',
        '$title',
        " . ($meta_description ? "'$meta_description'" : "NULL") . ",
        " . ($meta_keywords ? "'$meta_keywords'" : "NULL") . ",
        " . ($banner_image_url ? "'$banner_image_url'" : "NULL") . ",
        " . ($banner_title ? "'$banner_title'" : "NULL") . ",
        " . ($breadcrumb_items ? "'$breadcrumb_items'" : "NULL") . ",
        '$status'
    )";

    if ($conn->query($insert_page_sql) === TRUE) {
        $page_id = $conn->insert_id;
        $sections = isset($data['sections']) ? $data['sections'] : [];

        foreach ($sections as $order => $section) {
            $type = $conn->real_escape_string($section['type']);
            $section_title = isset($section['title']) ? $conn->real_escape_string($section['title']) : null;
            $subtitle = isset($section['subtitle']) ? $conn->real_escape_string($section['subtitle']) : null;
            $content_json = isset($section['content_json']) ? json_encode($section['content_json']) : null;

            $insert_section_sql = "INSERT INTO page_sections (page_id, section_order, type, title, subtitle, content_json) VALUES (
                $page_id,
                $order,
                '$type',
                " . ($section_title ? "'$section_title'" : "NULL") . ",
                " . ($subtitle ? "'$subtitle'" : "NULL") . ",
                " . ($content_json ? "'$content_json'" : "NULL") . "
            )";
            $conn->query($insert_section_sql); // Error handling could be added here
        }

        http_response_code(201); // Created
        echo json_encode(["message" => "Page created successfully", "id" => $page_id]);
    } else {
        http_response_code(500);
        echo json_encode(["message" => "Error creating page: " . $conn->error]);
    }
}

function handlePut($conn) {
    if (!isset($_GET['id'])) {
        http_response_code(400);
        echo json_encode(["message" => "Missing 'id' parameter for PUT request"]);
        return;
    }

    $page_id = $conn->real_escape_string($_GET['id']);
    $data = json_decode(file_get_contents("php://input"), true);

    if (!isset($data['slug']) || !isset($data['title'])) {
        http_response_code(400);
        echo json_encode(["message" => "Missing 'slug' or 'title' in request body"]);
        return;
    }

    $slug = $conn->real_escape_string($data['slug']);
    $title = $conn->real_escape_string($data['title']);
    $meta_description = isset($data['meta_description']) ? $conn->real_escape_string($data['meta_description']) : null;
    $meta_keywords = isset($data['meta_keywords']) ? $conn->real_escape_string($data['meta_keywords']) : null;
    $banner_image_url = isset($data['banner_image_url']) ? $conn->real_escape_string($data['banner_image_url']) : null;
    $banner_title = isset($data['banner_title']) ? $conn->real_escape_string($data['banner_title']) : null;
    $breadcrumb_items = isset($data['breadcrumb_items']) ? json_encode($data['breadcrumb_items']) : null;
    $status = isset($data['status']) ? $conn->real_escape_string($data['status']) : 'draft';

    // Update pages table
    $update_page_sql = "UPDATE pages SET
        slug = '$slug',
        title = '$title',
        meta_description = " . ($meta_description ? "'$meta_description'" : "NULL") . ",
        meta_keywords = " . ($meta_keywords ? "'$meta_keywords'" : "NULL") . ",
        banner_image_url = " . ($banner_image_url ? "'$banner_image_url'" : "NULL") . ",
        banner_title = " . ($banner_title ? "'$banner_title'" : "NULL") . ",
        breadcrumb_items = " . ($breadcrumb_items ? "'$breadcrumb_items'" : "NULL") . ",
        status = '$status'
    WHERE id = '$page_id'";

    if ($conn->query($update_page_sql) === TRUE) {
        // Delete existing sections for this page
        $delete_sections_sql = "DELETE FROM page_sections WHERE page_id = '$page_id'";
        $conn->query($delete_sections_sql);

        // Insert new sections
        $sections = isset($data['sections']) ? $data['sections'] : [];
        foreach ($sections as $section) {
            $section_order = $conn->real_escape_string($section['section_order'] ?? 0); // Use section_order
            $type = $conn->real_escape_string($section['type']);
            $section_title = isset($section['title']) ? $conn->real_escape_string($section['title']) : null;
            $subtitle = isset($section['subtitle']) ? $conn->real_escape_string($section['subtitle']) : null;
            $content_json = isset($section['content_json']) ? json_encode($section['content_json']) : null;

            $insert_section_sql = "INSERT INTO page_sections (page_id, section_order, type, title, subtitle, content_json) VALUES (
                $page_id,
                $section_order,
                '$type',
                " . ($section_title ? "'$section_title'" : "NULL") . ",
                " . ($subtitle ? "'$subtitle'" : "NULL") . ",
                " . ($content_json ? "'$content_json'" : "NULL") . "
            )";
            $conn->query($insert_section_sql);
        }

        http_response_code(200); // OK
        echo json_encode(["message" => "Page updated successfully", "id" => $page_id]);
    } else {
        http_response_code(500);
        echo json_encode(["message" => "Error updating page: " . $conn->error]);
    }
}

function handleDelete($conn) {
    http_response_code(501);
    echo json_encode(["message" => "DELETE method not implemented yet"]);
}

$conn->close();
?>
