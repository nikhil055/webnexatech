<?php
include 'auth.php';
include '../db.php';
include_once __DIR__ . '/../../config.php';

$page = null;
$page_sections = [];
$page_id = null;
$api_endpoint = BASE_URL . 'backend/api/pages.php'; // Use BASE_URL from config.php

// If ID is provided, fetch existing page data
if (isset($_GET['id'])) {
    $page_id = $conn->real_escape_string($_GET['id']);
    $page_sql = "SELECT * FROM pages WHERE id = '$page_id'";
    $page_result = $conn->query($page_sql);

    if ($page_result && $page_result->num_rows > 0) {
        $page = $page_result->fetch_assoc();
        // Fetch sections for this page
        $sections_sql = "SELECT section_order, type, title, subtitle, content_json FROM page_sections WHERE page_id = '$page_id' ORDER BY section_order ASC";
        $sections_result = $conn->query($sections_sql);
        if ($sections_result) {
            while ($row = $sections_result->fetch_assoc()) {
                $page_sections[] = $row;
            }
        }
    } else {
        // Page not found, redirect to manage_pages.php
        header("Location: manage_pages.php?message=" . urlencode("Page not found.") . "&type=" . urlencode("danger"));
        exit;
    }
}

$message = '';
$message_type = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $slug = $conn->real_escape_string($_POST['slug']);
    $title = $conn->real_escape_string($_POST['title']);
    $meta_description = $conn->real_escape_string($_POST['meta_description']);
    $meta_keywords = $conn->real_escape_string($_POST['meta_keywords']);
    $banner_image_url = $conn->real_escape_string($_POST['banner_image_url']);
    $banner_title = $conn->real_escape_string($_POST['banner_title']);
    $status = $conn->real_escape_string($_POST['status']);

    $breadcrumb_items = '[]'; // Default empty JSON array
    $sections_array = [];
    $section_order_counter = 0;

    // --- Conditional processing based on slug ---
    if ($page['slug'] === 'about' || (empty($page_id) && $slug === 'about')) { // If it's the 'about' page or creating a new 'about' page
        // Process breadcrumb items from dynamic fields
        $breadcrumb_items_array = [];
        if (isset($_POST['breadcrumb_label']) && isset($_POST['breadcrumb_url'])) {
            foreach ($_POST['breadcrumb_label'] as $key => $label) {
                $url = $_POST['breadcrumb_url'][$key] ?? '';
                if (!empty($label)) {
                    $breadcrumb_items_array[] = ['label' => $label, 'url' => $url];
                }
            }
        }
        $breadcrumb_items = json_encode($breadcrumb_items_array);

        // Hero Section
        $hero_text = $_POST['hero_text'] ?? '';
        $hero_title = $_POST['hero_title'] ?? '';
        $hero_subtitle = $_POST['hero_subtitle'] ?? '';
        if (!empty($hero_text) || !empty($hero_title) || !empty($hero_subtitle)) {
            $sections_array[] = [
                'section_order' => $section_order_counter++,
                'type' => 'hero',
                'title' => $hero_title,
                'subtitle' => $hero_subtitle,
                'content_json' => ['text' => $hero_text]
            ];
        }

        // Generic Cards Section
        if (isset($_POST['card_title']) && isset($_POST['card_description'])) {
            $cards = [];
            foreach ($_POST['card_title'] as $key => $card_title) {
                $card_description = $_POST['card_description'][$key] ?? '';
                if (!empty($card_title)) {
                    $cards[] = ['title' => $card_title, 'description' => $card_description];
                }
            }
            if (!empty($cards)) {
                $sections_array[] = [
                    'section_order' => $section_order_counter++,
                    'type' => 'generic_cards',
                    'title' => $_POST['generic_cards_title'] ?? '',
                    'subtitle' => $_POST['generic_cards_subtitle'] ?? '',
                    'content_json' => $cards
                ];
            }
        }

        // Team Members Section
        if (isset($_POST['member_name']) && isset($_POST['member_role'])) {
            $members = [];
            foreach ($_POST['member_name'] as $key => $member_name) {
                $member_role = $_POST['member_role'][$key] ?? '';
                $member_image_url = $_POST['member_image_url'][$key] ?? '';
                $member_description = $_POST['member_description'][$key] ?? '';
                $member_linkedin = $_POST['member_linkedin'][$key] ?? '';
                $member_github = $_POST['member_github'][$key] ?? '';
                $member_email = $_POST['member_email'][$key] ?? '';
                $member_tech_stack = $_POST['member_tech_stack'][$key] ?? '';

                if (!empty($member_name)) {
                    $member_data = [
                        'name' => $member_name,
                        'role' => $member_role,
                        'image_url' => $member_image_url,
                        'description' => $member_description,
                        'linkedin' => $member_linkedin,
                        'github' => $member_github,
                        'email' => $member_email,
                    ];
                    if (!empty($member_tech_stack)) {
                        $member_data['tech_stack'] = array_map('trim', explode(',', $member_tech_stack));
                    }
                    $members[] = $member_data;
                }
            }
            if (!empty($members)) {
                $sections_array[] = [
                    'section_order' => $section_order_counter++,
                    'type' => 'team_members',
                    'title' => $_POST['team_members_title'] ?? '',
                    'subtitle' => $_POST['team_members_subtitle'] ?? '',
                    'content_json' => $members
                ];
            }
        }
    } else { // Generic processing for other pages (using JSON textareas)
        $breadcrumb_items = $_POST['breadcrumb_items'];
        $sections_json_input = $_POST['sections_json_input'];

        // Validate JSON inputs
        $decoded_breadcrumb_items = json_decode($breadcrumb_items, true);
        $decoded_sections = json_decode($sections_json_input, true);

        if (!empty($breadcrumb_items) && json_last_error() !== JSON_ERROR_NONE) {
            $message = "Error: Invalid JSON for Breadcrumb Items. " . json_last_error_msg();
            $message_type = 'danger';
            goto end_post_processing; // Jump to end of POST processing
        } elseif (!empty($sections_json_input) && json_last_error() !== JSON_ERROR_NONE) {
            $message = "Error: Invalid JSON for Sections. " . json_last_error_msg();
            $message_type = 'danger';
            goto end_post_processing; // Jump to end of POST processing
        }
        $sections_array = $decoded_sections;
    }
    // --- End Conditional processing ---

    // Prepare data for API call
    $data_to_send = [
        'slug' => $slug,
        'title' => $title,
        'meta_description' => $meta_description,
        'meta_keywords' => $meta_keywords,
        'banner_image_url' => $banner_image_url,
        'banner_title' => $banner_title,
        'breadcrumb_items' => json_decode($breadcrumb_items, true),
        'status' => $status,
        'sections' => $sections_array
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    if ($page_id) {
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_URL, $api_endpoint . '?id=' . $page_id);
    } else {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_URL, $api_endpoint);
    }
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data_to_send));

    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    error_log("API Response (raw): " . $response);
    error_log("API HTTP Code: " . $http_code);
    curl_close($ch);

    $api_response = json_decode($response, true);

    if ($http_code >= 200 && $http_code < 300) {
        $message = $api_response['message'] ?? ($page_id ? 'Page updated successfully!' : 'Page created successfully!');
        $message_type = 'success';
        if (!$page_id && isset($api_response['id'])) {
            header("Location: edit_page.php?id=" . $api_response['id'] . "&message=" . urlencode($message) . "&type=" . urlencode($message_type));
            exit;
        } else if ($page_id) {
            header("Location: edit_page.php?id=" . $page_id . "&message=" . urlencode($message) . "&type=" . urlencode($message_type));
            exit;
        }
    } else {
        $message = "API Error: " . ($api_response['message'] ?? 'Unknown error occurred.') . " (HTTP " . $http_code . ")";
        $message_type = 'danger';
    }

    end_post_processing: // Label for goto statement
}

// Display messages from redirection
if (isset($_GET['message']) && isset($_GET['type'])) {
    $message = htmlspecialchars($_GET['message']);
    $message_type = htmlspecialchars($_GET['type']);
}

// Extract section data for pre-filling form
$hero_section = ['title' => '', 'subtitle' => '', 'text' => ''];
$generic_cards_section = ['title' => '', 'subtitle' => '', 'cards' => []];
$team_members_section = ['title' => '', 'subtitle' => '', 'members' => []];

foreach ($page_sections as $sec) {
    if ($sec['type'] === 'hero') {
        $hero_section['title'] = $sec['title'];
        $hero_section['subtitle'] = $sec['subtitle'];
        if (isset($sec['content_json']['text'])) {
            $hero_section['text'] = $sec['content_json']['text'];
        }
    } elseif ($sec['type'] === 'generic_cards') {
        $generic_cards_section['title'] = $sec['title'];
        $generic_cards_section['subtitle'] = $sec['subtitle'];
        if (isset($sec['content_json']) && is_array($sec['content_json'])) {
            $generic_cards_section['cards'] = $sec['content_json'];
        }
    } elseif ($sec['type'] === 'team_members') {
        $team_members_section['title'] = $sec['title'];
        $team_members_section['subtitle'] = $sec['subtitle'];
        if (isset($sec['content_json']) && is_array($sec['content_json'])) {
            $team_members_section['members'] = $sec['content_json'];
        }
    }
}

// Decode breadcrumb items for pre-filling form
$current_breadcrumb_items = json_decode($page['breadcrumb_items'] ?? '[]', true);


ob_start(); // Start output buffering
?>

    <div class="container-fluid">
        <h2><?php echo $page_id ? 'Edit Page: ' . htmlspecialchars($page['title'] ?? '') : 'Add New Page'; ?></h2>

        <?php if ($message): ?>
            <div class="alert alert-<?php echo $message_type; ?> alert-dismissible fade show" role="alert">
                <?php echo $message; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <form action="" method="post">
            <div class="mb-3">
                <label for="slug" class="form-label">Slug (URL identifier)</label>
                <input type="text" class="form-control" id="slug" name="slug" value="<?php echo htmlspecialchars($page['slug'] ?? ''); ?>" required <?php echo $page_id ? 'readonly' : ''; ?>/>
                <?php if ($page_id): ?><small class="form-text text-muted">Slug cannot be changed after creation.</small><?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Page Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($page['title'] ?? ''); ?>" required/>
            </div>
            <div class="mb-3">
                <label for="meta_description" class="form-label">Meta Description</label>
                <textarea class="form-control" id="meta_description" name="meta_description"><?php echo htmlspecialchars($page['meta_description'] ?? ''); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="meta_keywords" class="form-label">Meta Keywords</label>
                <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" value="<?php echo htmlspecialchars($page['meta_keywords'] ?? ''); ?>"/>
            </div>
            <div class="mb-3">
                <label for="banner_image_url" class="form-label">Banner Image URL</label>
                <input type="text" class="form-control" id="banner_image_url" name="banner_image_url" value="<?php echo htmlspecialchars($page['banner_image_url'] ?? ''); ?>"/>
            </div>
            <div class="mb-3">
                <label for="banner_title" class="form-label">Banner Title</label>
                <input type="text" class="form-control" id="banner_title" name="banner_title" value="<?php echo htmlspecialchars($page['banner_title'] ?? ''); ?>"/>
            </div>
            
            <?php if ($page['slug'] === 'about' || (empty($page_id) && ($_GET['slug'] ?? '') === 'about')): // Conditional rendering for 'about' page ?>
                <h4 class="mt-4">Breadcrumb Items</h4>
                <div id="breadcrumb-items-container">
                    <?php if (!empty($current_breadcrumb_items)): ?>
                        <?php foreach ($current_breadcrumb_items as $idx => $item): ?>
                            <div class="row g-3 mb-2 breadcrumb-item-row">
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="breadcrumb_label[]" placeholder="Label" value="<?php echo htmlspecialchars($item['label'] ?? ''); ?>">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="breadcrumb_url[]" placeholder="URL" value="<?php echo htmlspecialchars($item['url'] ?? ''); ?>">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-danger remove-breadcrumb-item">Remove</button>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <button type="button" class="btn btn-info btn-sm mt-2" id="add-breadcrumb-item">Add Breadcrumb Item</button>

                <div class="mb-3 mt-4">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="draft" <?php echo (($page['status'] ?? '') === 'draft') ? 'selected' : ''; ?>>Draft</option>
                        <option value="published" <?php echo (($page['status'] ?? '') === 'published') ? 'selected' : ''; ?>>Published</option>
                    </select>
                </div>

                <h4 class="mt-4">Hero Section</h4>
                <div class="mb-3">
                    <label for="hero_title" class="form-label">Hero Title</label>
                    <input type="text" class="form-control" id="hero_title" name="hero_title" value="<?php echo htmlspecialchars($hero_section['title'] ?? ''); ?>">
                </div>
                <div class="mb-3">
                    <label for="hero_subtitle" class="form-label">Hero Subtitle</label>
                    <input type="text" class="form-control" id="hero_subtitle" name="hero_subtitle" value="<?php echo htmlspecialchars($hero_section['subtitle'] ?? ''); ?>">
                </div>
                <div class="mb-3">
                    <label for="hero_text" class="form-label">Hero Content (HTML allowed)</label>
                    <textarea class="form-control" id="hero_text" name="hero_text" rows="5"><?php echo htmlspecialchars($hero_section['text'] ?? ''); ?></textarea>
                </div>

                <h4 class="mt-4">Generic Cards Section</h4>
                <div class="mb-3">
                    <label for="generic_cards_title" class="form-label">Cards Section Title</label>
                    <input type="text" class="form-control" id="generic_cards_title" name="generic_cards_title" value="<?php echo htmlspecialchars($generic_cards_section['title'] ?? ''); ?>">
                </div>
                <div class="mb-3">
                    <label for="generic_cards_subtitle" class="form-label">Cards Section Subtitle</label>
                    <input type="text" class="form-control" id="generic_cards_subtitle" name="generic_cards_subtitle" value="<?php echo htmlspecialchars($generic_cards_section['subtitle'] ?? ''); ?>">
                </div>
                <div id="generic-cards-container">
                    <?php if (!empty($generic_cards_section['cards'])): ?>
                        <?php foreach ($generic_cards_section['cards'] as $idx => $card): ?>
                            <div class="card p-3 mb-2 border generic-card-item">
                                <div class="mb-2">
                                    <input type="text" class="form-control" name="card_title[]" placeholder="Card Title" value="<?php echo htmlspecialchars($card['title'] ?? ''); ?>">
                                </div>
                                <div class="mb-2">
                                    <textarea class="form-control" name="card_description[]" placeholder="Card Description" rows="2"><?php echo htmlspecialchars($card['description'] ?? ''); ?></textarea>
                                </div>
                                <button type="button" class="btn btn-danger btn-sm remove-card-item">Remove Card</button>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <button type="button" class="btn btn-info btn-sm mt-2" id="add-generic-card">Add Generic Card</button>

                <h4 class="mt-4">Team Members Section</h4>
                <div class="mb-3">
                    <label for="team_members_title" class="form-label">Team Section Title</label>
                    <input type="text" class="form-control" id="team_members_title" name="team_members_title" value="<?php echo htmlspecialchars($team_members_section['title'] ?? ''); ?>">
                </div>
                <div class="mb-3">
                    <label for="team_members_subtitle" class="form-label">Team Section Subtitle</label>
                    <input type="text" class="form-control" id="team_members_subtitle" name="team_members_subtitle" value="<?php echo htmlspecialchars($team_members_section['subtitle'] ?? ''); ?>">
                </div>
                <div id="team-members-container">
                    <?php if (!empty($team_members_section['members'])): ?>
                        <?php foreach ($team_members_section['members'] as $idx => $member): ?>
                            <div class="card p-3 mb-2 border team-member-item">
                                <h5>Member <?php echo $idx + 1; ?></h5>
                                <div class="mb-2">
                                    <input type="text" class="form-control" name="member_name[]" placeholder="Name" value="<?php echo htmlspecialchars($member['name'] ?? ''); ?>">
                                </div>
                                <div class="mb-2">
                                    <input type="text" class="form-control" name="member_role[]" placeholder="Role" value="<?php echo htmlspecialchars($member['role'] ?? ''); ?>">
                                </div>
                                <div class="mb-2">
                                    <input type="text" class="form-control" name="member_image_url[]" placeholder="Image URL" value="<?php echo htmlspecialchars($member['image_url'] ?? ''); ?>">
                                </div>
                                <div class="mb-2">
                                    <textarea class="form-control" name="member_description[]" placeholder="Description" rows="2"><?php echo htmlspecialchars($member['description'] ?? ''); ?></textarea>
                                </div>
                                <div class="mb-2">
                                    <input type="text" class="form-control" name="member_linkedin[]" placeholder="LinkedIn URL" value="<?php echo htmlspecialchars($member['linkedin'] ?? ''); ?>">
                                </div>
                                <div class="mb-2">
                                    <input type="text" class="form-control" name="member_github[]" placeholder="GitHub URL" value="<?php echo htmlspecialchars($member['github'] ?? ''); ?>">
                                </div>
                                <div class="mb-2">
                                    <input type="text" class="form-control" name="member_email[]" placeholder="Email" value="<?php echo htmlspecialchars($member['email'] ?? ''); ?>">
                                </div>
                                <div class="mb-2">
                                    <input type="text" class="form-control" name="member_tech_stack[]" placeholder="Tech Stack (comma-separated)" value="<?php echo htmlspecialchars(implode(', ', $member['tech_stack'] ?? [])); ?>">
                                </div>
                                <button type="button" class="btn btn-danger btn-sm remove-member-item">Remove Member</button>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <button type="button" class="btn btn-info btn-sm mt-2" id="add-team-member">Add Team Member</button>
            <?php else: // Generic JSON textareas for other pages ?>
                <div class="mb-3">
                    <label for="breadcrumb_items" class="form-label">Breadcrumb Items (JSON Array)</label>
                    <textarea class="form-control" id="breadcrumb_items" name="breadcrumb_items" placeholder='[{"label": "Home", "url": "index.php"}, {"label": "Current Page", "url": "current.php"}]'><?php echo htmlspecialchars($page['breadcrumb_items'] ?? '[]'); ?></textarea>
                    <small class="form-text text-muted">Enter as a JSON array of objects, e.g., `[{"label": "Home", "url": "index.php"}]`</small>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="draft" <?php echo (($page['status'] ?? '') === 'draft') ? 'selected' : ''; ?>>Draft</option>
                        <option value="published" <?php echo (($page['status'] ?? '') === 'published') ? 'selected' : ''; ?>>Published</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="sections_json_input" class="form-label">Sections (JSON Array)</label>
                    <textarea class="form-control" id="sections_json_input" name="sections_json_input" placeholder='[{"section_order": 0, "type": "hero", "title": "...", "content_json": {"text": "..."}}]'><?php echo htmlspecialchars(json_encode($page_sections, JSON_PRETTY_PRINT) ?? '[]'); ?></textarea>
                    <small class="form-text text-muted">Enter as a JSON array of section objects. Each section needs `section_order`, `type`, `title`, and `content_json`.</small>
                </div>
            <?php endif; ?>

            <button type="submit" class="btn btn-primary mt-4"><?php echo $page_id ? 'Update Page' : 'Add Page'; ?></button>
            <?php if ($page_id): // Only show delete if page exists ?>
                <a href="delete_page.php?id=<?php echo $page_id; ?>" class="btn btn-danger mt-4" onclick="return confirm('Are you sure you want to delete the \'<?php echo htmlspecialchars($page['title'] ?? 'this page'); ?>\' and all its content? This action cannot be undone.');">Delete Page</a>
            <?php endif; ?>
            <a href="manage_pages.php" class="btn btn-secondary mt-4">Cancel</a>
        </form>
    </div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Check if the specific "about" form elements exist before attaching listeners
    const breadcrumbContainer = document.getElementById('breadcrumb-items-container');
    if (breadcrumbContainer) {
        document.getElementById('add-breadcrumb-item').addEventListener('click', function() {
            const row = document.createElement('div');
            row.classList.add('row', 'g-3', 'mb-2', 'breadcrumb-item-row');
            row.innerHTML = '
                <div class="col-md-5">
                    <input type="text" class="form-control" name="breadcrumb_label[]" placeholder="Label">
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" name="breadcrumb_url[]" placeholder="URL">
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger remove-breadcrumb-item">Remove</button>
                </div>
            ';
            breadcrumbContainer.appendChild(row);
        });

        breadcrumbContainer.addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('remove-breadcrumb-item')) {
                e.target.closest('.breadcrumb-item-row').remove();
            }
        });
    }

    const genericCardsContainer = document.getElementById('generic-cards-container');
    if (genericCardsContainer) {
        document.getElementById('add-generic-card').addEventListener('click', function() {
            const cardDiv = document.createElement('div');
            cardDiv.classList.add('card', 'p-3', 'mb-2', 'border', 'generic-card-item');
            cardDiv.innerHTML = '
                <div class="mb-2">
                    <input type="text" class="form-control" name="card_title[]" placeholder="Card Title">
                </div>
                <div class="mb-2">
                    <textarea class="form-control" name="card_description[]" placeholder="Card Description" rows="2"></textarea>
                </div>
                <button type="button" class="btn btn-danger btn-sm remove-card-item">Remove Card</button>
            ';
            genericCardsContainer.appendChild(cardDiv);
        });

        genericCardsContainer.addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('remove-card-item')) {
                e.target.closest('.generic-card-item').remove();
            }
        });
    }

    const teamMembersContainer = document.getElementById('team-members-container');
    if (teamMembersContainer) {
        document.getElementById('add-team-member').addEventListener('click', function() {
            const memberDiv = document.createElement('div');
            memberDiv.classList.add('card', 'p-3', 'mb-2', 'border', 'team-member-item');
            const memberCount = teamMembersContainer.querySelectorAll('.team-member-item').length + 1;
            memberDiv.innerHTML = '
                <h5>Member ' + memberCount + '</h5>
                <div class="mb-2">
                    <input type="text" class="form-control" name="member_name[]" placeholder="Name">
                </div>
                <div class="mb-2">
                    <input type="text" class="form-control" name="member_role[]" placeholder="Role">
                </div>
                <div class="mb-2">
                    <input type="text" class="form-control" name="member_image_url[]" placeholder="Image URL">
                </div>
                <div class="mb-2">
                    <textarea class="form-control" name="member_description[]" placeholder="Description" rows="2"></textarea>
                </div>
                <div class="mb-2">
                    <input type="text" class="form-control" name="member_linkedin[]" placeholder="LinkedIn URL">
                </div>
                <div class="mb-2">
                    <input type="text" class="form-control" name="member_github[]" placeholder="GitHub URL">
                </div>
                <div class="mb-2">
                    <input type="text" class="form-control" name="member_email[]" placeholder="Email">
                </div>
                <div class="mb-2">
                    <input type="text" class="form-control" name="member_tech_stack[]" placeholder="Tech Stack (comma-separated)">
                </div>
                <button type="button" class="btn btn-danger btn-sm remove-member-item">Remove Member</button>
            ';
            teamMembersContainer.appendChild(memberDiv);
        });

        teamMembersContainer.addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('remove-member-item')) {
                e.target.closest('.team-member-item').remove();
            }
        });
    }
});
</script>
<?php
$content = ob_get_clean(); // Get the buffered content and clean the buffer
$page_title = ($page_id ? 'Edit Page' : 'Add New Page') . ' - Dashboard'; // Set the page title

include '_dashboard_layout.php';

$conn->close();
?>
