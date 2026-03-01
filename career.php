<?php 
$page_title = 'Career';
 include_once 'config.php'; ?><?php
include 'header.php';
include 'backend/db.php'; // Include database connection

// --- Pagination Setup ---
$items_per_page = 5; // Display 5 job posts per page
$current_page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($current_page - 1) * $items_per_page;

// --- Fetch Active Job Posts ---
$job_posts_sql = "SELECT id, title, description, location, employment_type, salary_range, application_deadline, posted_date FROM job_posts WHERE is_active = TRUE AND (application_deadline IS NULL OR application_deadline >= CURDATE()) ORDER BY posted_date DESC LIMIT $items_per_page OFFSET $offset";
$job_posts_result = $conn->query($job_posts_sql);
$job_posts = [];
if ($job_posts_result && $job_posts_result->num_rows > 0) {
    while ($row = $job_posts_result->fetch_assoc()) {
        // Simple truncation for description if needed
        $row['short_description'] = strip_tags($row['description']);
        if (strlen($row['short_description']) > 200) {
            $row['short_description'] = substr($row['short_description'], 0, 200) . '...';
        }
        $job_posts[] = $row;
    }
}

// --- Calculate Total Pages for Pagination ---
$total_items_sql = "SELECT COUNT(*) AS total FROM job_posts WHERE is_active = TRUE AND (application_deadline IS NULL OR application_deadline >= CURDATE())";
$total_items_result = $conn->query($total_items_sql);
$total_items = 0;
if ($total_items_result) {
    $total_items = $total_items_result->fetch_assoc()['total'];
}
$total_pages = ceil($total_items / $items_per_page);

// --- Page Data for Banner & Header ---
$banner_title = 'Join Our Team';
$banner_image = 'assets/images/banner/banner-04.jpg'; // Adjust as needed
$breadcrumb_active = 'Careers';
$section_subtitle = 'Your Next Career Move';
$section_main_title = 'Explore Exciting Opportunities';
?>

    <style>
        /* General Page Banner Styling */
        .page-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo $banner_image; ?>');
            background-size: cover;
            background-position: center;
            padding-top: 220px;
            padding-bottom: 100px;
            text-align: center;
            color: #fff;
            margin-bottom: 50px;
        }

        .page-banner h2 {
            font-size: 55px;
            font-weight: 800;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .breadcrumb-custom {
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            display: inline-flex;
            padding: 10px 20px;
            border-radius: 30px;
            backdrop-filter: blur(5px);
        }

        .breadcrumb-custom .breadcrumb-item a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
        }

        .breadcrumb-custom .breadcrumb-item.active {
            color: #EB7700;
            font-weight: 700;
        }

        /* Distinct UI for Job Posts - job-post-card */
        .careers-section {
            padding-bottom: 80px;
        }
        .job-post-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
            padding: 30px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .job-post-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }
        .job-post-card .job-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 15px;
        }
        .job-post-card .job-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 20px;
            font-size: 0.95rem;
            color: #555;
        }
        .job-post-card .job-meta div {
            display: flex;
            align-items: center;
        }
        .job-post-card .job-meta i {
            margin-right: 8px;
            color: #EB7700;
        }
        .job-post-card .job-description {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
            margin-bottom: 25px;
        }
        .job-post-card .apply-btn {
            background-color: #EB7700;
            color: #fff;
            border: none;
            padding: 12px 25px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }
        .job-post-card .apply-btn:hover {
            background-color: #2a5ddb;
        }
        .job-post-card .application-deadline {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #f8f9fa;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.85rem;
            color: #777;
        }

        /* Modal Styling */
        .modal-content {
            border-radius: 15px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }
        .modal-header {
            background: linear-gradient(to right, #EB7700 0%, #004E91 100%); /* Gradient background */
            color: #fff;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            padding: 1.5rem;
        }
        .modal-header .modal-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #fff;
        }
        .modal-header .btn-close {
            filter: invert(1);
            color: #fff; /* Ensure close button is visible */
        }
        .form-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }
        .form-control {
            border-radius: 8px;
            border: 1px solid #ced4da;
            padding: 0.75rem 1rem;
            transition: all 0.2s ease-in-out;
        }
        .form-control:focus {
            border-color: #EB7700;
            box-shadow: 0 0 0 0.25rem rgba(60, 114, 252, 0.25);
        }
        .btn-custom-apply { /* Custom class for the submit button */
            background-color: #EB7700;
            color: #fff;
            border: none;
            padding: 12px 25px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .btn-custom-apply:hover {
            background-color: #2a5ddb;
            transform: translateY(-2px);
            color: #fff; /* Ensure hover color is white */
        }

        /* Pagination Styling */
        .pagination-custom .page-item.active .page-link {
            background-color: #EB7700;
            border-color: #EB7700;
            color: #fff;
        }
        .pagination-custom .page-link {
            color: #EB7700;
        }
        .pagination-custom .page-link:hover {
            color: #000;
        }
    </style>

    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12" data-aos="zoom-in">
                    <h2><?php echo $banner_title; ?></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom">
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $breadcrumb_active; ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="careers-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <div class="ser-head text-center mb-5" data-aos="fade-up">
                      <div class="hed text-center">
                         <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                         <span><?php echo $section_subtitle; ?></span>
                         <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                      </div>
                      <h3><?php echo $section_main_title; ?></h3>
                   </div>
                </div>
           </div>

            <div class="row justify-content-center">
                <?php if (!empty($job_posts)): ?>
                    <?php foreach ($job_posts as $job): ?>
                    <div class="col-lg-8 col-md-10" data-aos="fade-up">
                        <div class="job-post-card">
                            <h4 class="job-title"><?php echo htmlspecialchars($job['title']); ?></h4>
                            <div class="job-meta">
                                <div><i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($job['location']); ?></div>
                                <div><i class="fas fa-briefcase"></i> <?php echo htmlspecialchars($job['employment_type']); ?></div>
                                <?php if (!empty($job['salary_range'])): ?>
                                    <div><i class="fas fa-money-bill-wave"></i> <?php echo htmlspecialchars($job['salary_range']); ?></div>
                                <?php endif; ?>
                            </div>
                            <p class="job-description"><?php echo nl2br(htmlspecialchars($job['short_description'])); ?></p>
                            <a href="#" class="apply-btn" data-bs-toggle="modal" data-bs-target="#applyModal" data-job-id="<?php echo $job['id']; ?>" data-job-title="<?php echo htmlspecialchars($job['title']); ?>">Apply Now</a>
                            <?php if (!empty($job['application_deadline'])): ?>
                                <span class="application-deadline">Deadline: <?php echo date('M d, Y', strtotime($job['application_deadline'])); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12 text-center">
                        <p>No job openings currently available. Please check back later!</p>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Pagination -->
            <?php if ($total_pages > 1): ?>
            <div class="row mt-5">
                <div class="col-12">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center pagination-custom">
                            <li class="page-item <?php echo ($current_page <= 1) ? 'disabled' : ''; ?>">
                                <a class="page-link" href="?page=<?php echo $current_page - 1; ?>" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                            <li class="page-item <?php echo ($current_page == $i) ? 'active' : ''; ?>">
                                <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                            </li>
                            <?php endfor; ?>
                            <li class="page-item <?php echo ($current_page >= $total_pages) ? 'disabled' : ''; ?>">
                                <a class="page-link" href="?page=<?php echo $current_page + 1; ?>">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <?php endif; ?>

        </div>
    </section>

    <!-- Application Modal -->
    <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="applyModalLabel">Apply for: <span id="jobTitleModal"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="applicationForm" enctype="multipart/form-data">
                        <input type="hidden" id="jobIdInput" name="job_id">
                        <div class="mb-3">
                            <label for="applicantName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="applicantName" name="applicant_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="applicantEmail" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="applicantEmail" name="applicant_email" required>
                        </div>
                        <div class="mb-3">
                            <label for="applicantPhone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="applicantPhone" name="applicant_phone">
                        </div>
                        <div class="mb-3">
                            <label for="resumeFile" class="form-label">Upload Resume (PDF only)</label>
                            <input type="file" class="form-control" id="resumeFile" name="resume_file" accept=".pdf" required>
                        </div>
                        <button type="submit" class="btn btn-custom-apply">Submit Application</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Success/Error Toast Notifications -->
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto" id="toastHeader"></strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" id="toastBody">
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>
<?php $conn->close(); // Close DB connection after all queries ?>

<script>
    // JavaScript to handle modal population and form submission
    document.addEventListener('DOMContentLoaded', function() {
        var applyModal = document.getElementById('applyModal');
        applyModal.addEventListener('show.bs.modal', function(event) {
            // Button that triggered the modal
            var button = event.relatedTarget;
            // Extract info from data-bs-* attributes
            var jobId = button.getAttribute('data-job-id');
            var jobTitle = button.getAttribute('data-job-title');

            // Update the modal's content.
            var modalTitle = applyModal.querySelector('#jobTitleModal');
            var jobIdInput = applyModal.querySelector('#jobIdInput');

            modalTitle.textContent = jobTitle;
            jobIdInput.value = jobId;
        });

        var applicationForm = document.getElementById('applicationForm');
        applicationForm.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            var formData = new FormData(this);

            // Show a loading indicator if desired
            var submitButton = this.querySelector('button[type="submit"]');
            submitButton.disabled = true;
            submitButton.textContent = 'Submitting...';

            fetch('backend/api/apply_job.php', { // This API endpoint will be created in a later step
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                var toastElement = document.getElementById('liveToast');
                var toastHeader = document.getElementById('toastHeader');
                var toastBody = document.getElementById('toastBody');
                var bsToast = new bootstrap.Toast(toastElement);

                if (data.success) {
                    toastHeader.textContent = 'Success';
                    toastElement.classList.add('bg-success', 'text-white');
                    toastElement.classList.remove('bg-danger');
                    applicationForm.reset(); // Clear the form
                    bootstrap.Modal.getInstance(applyModal).hide(); // Hide the modal
                } else {
                    toastHeader.textContent = 'Error';
                    toastElement.classList.add('bg-danger', 'text-white');
                    toastElement.classList.remove('bg-success');
                }
                toastBody.textContent = data.message;
                bsToast.show();
            })
            .catch(error => {
                console.error('Error:', error);
                var toastElement = document.getElementById('liveToast');
                var toastHeader = document.getElementById('toastHeader');
                var toastBody = document.getElementById('toastBody');
                var bsToast = new bootstrap.Toast(toastElement);

                toastHeader.textContent = 'Error';
                toastElement.classList.add('bg-danger', 'text-white');
                toastElement.classList.remove('bg-success');
                toastBody.textContent = 'An unexpected error occurred. Please try again.';
                bsToast.show();
            })
            .finally(() => {
                submitButton.disabled = false;
                submitButton.textContent = 'Submit Application';
            });
        });
    });
</script>

