<?php 
$page_title = "Get in Touch";
include_once 'config.php'; ?><?php include 'header.php'; ?>

<section class="contact-section py-5" style="background-image: url(assets/images/solution/bg.png); background-size: cover; background-position: center;">
    <div class="container">
        <div class="ser-head text-center mb-5">
            <div class="hed text-center">
                <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                <span>GET IN TOUCH</span>
                <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
            </div>
            <h3>Contact Us for Any Query</h3>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card shadow-lg p-4 h-100" style="border-radius: 15px; border: none;">
                    <h4 class="mb-4" style="color: var(--blue);">Send us a Message</h4>
                    <form id="contactForm">
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" required style="border-radius: 8px;">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required style="border-radius: 8px;">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" style="border-radius: 8px;">
                        </div>
                        <div class="mb-3">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" class="form-control" id="country" name="country" style="border-radius: 8px;">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required style="border-radius: 8px;"></textarea>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg btn-style-one">Submit</button>
                        </div>
                        <div id="formMessage" class="mt-3 text-center"></div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card shadow-lg p-4 h-100 d-flex flex-column justify-content-center" style="background-color: var(--blue); color: #fff; border-radius: 15px; border: none;">
                    <h4 class="mb-4" style="color: #fff;">Our Contact Details</h4>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-map-marker-alt fa-2x" style="color: var(--red); margin-right: 15px;"></i>
                        <div>
                            <h6 class="mb-0">Address:</h6>
                            <p class="mb-0">Gali No. 9, near Star Furniture, Bharat Colony, Sector 87, Neharpar Faridabad, Faridabad, Haryana 121002</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-phone-alt fa-2x" style="color: var(--red); margin-right: 15px;"></i>
                        <div>
                            <h6 class="mb-0">Phone:</h6>
                            <p class="mb-0">+91 9910893885</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-envelope fa-2x" style="color: var(--red); margin-right: 15px;"></i>
                        <div>
                            <h6 class="mb-0">Email:</h6>
                            <p class="mb-0">info@webnexatechnologies.com</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h6 class="mb-3">Follow Us:</h6>
                        <a href="#" class="me-3" style="color: #fff;"><i class="fab fa-facebook-f fa-2x"></i></a>
                        <a href="#" class="me-3" style="color: #fff;"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="#" class="me-3" style="color: #fff;"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="#" style="color: #fff;"><i class="fab fa-linkedin-in fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

<script>
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission

    const form = event.target;
    const formData = new FormData(form);
    const formProps = Object.fromEntries(formData);
    const formMessage = document.getElementById('formMessage');

    formMessage.innerHTML = ''; // Clear previous messages

    fetch('backend/api/contact.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(formProps),
    })
    .then(response => {
        if (!response.ok) {
            return response.json().then(errorData => {
                throw new Error(errorData.message || 'Server error');
            });
        }
        return response.json();
    })
    .then(data => {
        formMessage.innerHTML = '<div class="alert alert-success">' + data.message + '</div>';
        form.reset();
    })
    .catch(error => {
        console.error('Error:', error);
        formMessage.innerHTML = '<div class="alert alert-danger">' + error.message + '</div>';
    });
});
</script>
