<?php
$page_title = "Home";
include 'header-new.php';
?>

<?php include 'hero-new.php'; ?>
<?php include 'about-section.php'; ?>
<?php include 'services-section.php'; ?>

<!-- NEW: High-Impact Portfolio -->
<?php include 'portfolio-section.php'; ?>

<?php include 'how-it-works-section.php'; ?>

<?php include 'solutions-section.php'; ?>
<?php include 'why-choose-section.php'; ?>
<?php include 'tech-ecosystem-section.php'; ?>

<?php include 'faq-terminal-section.php'; ?>


<!-- ELITE CONTACT ECOSYSTEM -->
<style>
  .contact-tech-v2 {
    position: relative;
    padding: 140px 0;
    background: #05070a;
    color: #fff;
    font-family: 'Inter', sans-serif;
    overflow: hidden;
  }

  .contact-bg-glow {
    position: absolute;
    bottom: -10%;
    left: -10%;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(114, 79, 255, 0.1) 0%, transparent 70%);
    filter: blur(80px);
    z-index: 1;
  }

  .container {
    position: relative;
    z-index: 10;
  }

  /* Contact Card Deck */
  .contact-deck {
    display: grid;
    grid-template-columns: 1fr 450px;
    gap: 50px;
    background: rgba(255, 255, 255, 0.01);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 50px;
    padding: 60px;
    backdrop-filter: blur(40px);
    box-shadow: 0 50px 100px rgba(0, 0, 0, 0.5);
  }

  /* High-Tech Form */
  .tech-form .form-group {
    position: relative;
    margin-bottom: 25px;
  }

  .tech-form .form-control {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 15px;
    padding: 18px 25px;
    color: #fff;
    font-size: 15px;
    transition: 0.4s;
  }

  .tech-form .form-control:focus {
    background: rgba(114, 79, 255, 0.05);
    border-color: rgb(114, 79, 255);
    box-shadow: 0 0 20px rgba(114, 79, 255, 0.2);
    outline: none;
  }

  /* Info Column */
  .info-column {
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .info-glass-card {
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.05);
    padding: 30px;
    border-radius: 25px;
    display: flex;
    align-items: center;
    gap: 20px;
    transition: 0.4s;
  }

  .info-glass-card:hover {
    background: rgba(114, 79, 255, 0.05);
    border-color: rgba(114, 79, 255, 0.3);
    transform: translateX(10px);
  }

  .info-icon {
    width: 50px;
    height: 50px;
    background: rgba(114, 79, 255, 0.1);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    color: rgb(114, 79, 255);
  }

  .info-txt h6 {
    margin: 0;
    font-size: 14px;
    font-weight: 800;
    color: rgb(216, 115, 255);
    text-transform: uppercase;
    letter-spacing: 1px;
  }

  .info-txt p {
    margin: 5px 0 0;
    font-size: 15px;
    color: #94a3b8;
    line-height: 1.5;
  }

  @media (max-width: 1199px) {
    .contact-deck {
      grid-template-columns: 1fr;
      padding: 40px;
    }
  }
</style>

<section class="contact-tech-v2">
  <div class="contact-bg-glow"></div>
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <div class="tech-badge-v3"><i class="fas fa-headset"></i> Connect With Us</div>
      <h2>Initialize <span class="gradient-tech-text">Project Dialogue</span></h2>
    </div>

    <div class="contact-deck" data-aos="zoom-in">
      <!-- Left: Form -->
      <div class="tech-form">
        <form id="contactFormIndex">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" class="form-control" name="fullname" placeholder="Full Name" required>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="email" placeholder="Email Protocol" required>
            </div>
            <div class="col-md-6 form-group">
              <input type="tel" class="form-control" name="phone" placeholder="Phone Link">
            </div>
            <div class="col-md-6 form-group">
              <input type="text" class="form-control" name="country" placeholder="Global Location">
            </div>
            <div class="col-md-12 form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Your Requirements & Logic..." required></textarea>
            </div>
          </div>
          <button type="submit" class="btn-cyber-primary w-100 py-4 mt-2">
            Transmit Message <i class="fas fa-paper-plane ms-2"></i>
          </button>
          <div id="formMessageIndex" class="mt-4"></div>
        </form>
      </div>

      <!-- Right: Info -->
      <div class="info-column">
        <div class="info-glass-card">
          <div class="info-icon"><i class="fas fa-map-location-dot"></i></div>
          <div class="info-txt">
            <h6>Headquarters</h6>
            <p>Sector 87, Neharpar, Faridabad, Haryana</p>
          </div>
        </div>
        <div class="info-glass-card">
          <div class="info-icon"><i class="fas fa-phone-volume"></i></div>
          <div class="info-txt">
            <h6>Voice Line</h6>
            <p>+91 9910893885</p>
          </div>
        </div>
        <div class="info-glass-card">
          <div class="info-icon"><i class="fas fa-envelope-open-text"></i></div>
          <div class="info-txt">
            <h6>Secure Mail</h6>
            <p>info@webnexatechnologies.com</p>
          </div>
        </div>

        <div class="mt-auto p-4 text-center" style="background: rgba(34, 197, 94, 0.05); border-radius: 20px; border: 1px solid rgba(34, 197, 94, 0.1);">
          <div style="font-size: 11px; font-weight: 800; color: #22c55e; text-transform: uppercase; letter-spacing: 2px;">
            <i class="fas fa-circle-dot fa-beat me-2"></i> System Response Active
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="assets/js/custom.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const contactFormIndex = document.getElementById('contactFormIndex');
    if (contactFormIndex) {
      contactFormIndex.addEventListener('submit', function(event) {
        event.preventDefault();

        const form = event.target;
        const formData = new FormData(form);
        const formProps = Object.fromEntries(formData);
        const formMessage = document.getElementById('formMessageIndex');

        formMessage.innerHTML = '';

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
    }
  });
</script>