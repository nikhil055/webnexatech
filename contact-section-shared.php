<!-- SHARED CONTACT SECTION -->
<style>
    .contact-tech-shared {
        position: relative;
        padding: 120px 0;
        background: #05070a;
        color: #fff;
        font-family: 'Inter', sans-serif;
        overflow: hidden;
    }

    .contact-bg-glow {
        position: absolute;
        bottom: -10%; left: -10%;
        width: 600px; height: 600px;
        background: radial-gradient(circle, rgba(114, 79, 255, 0.1) 0%, transparent 70%);
        filter: blur(80px);
        z-index: 1;
    }

    .container { position: relative; z-index: 10; }

    /* Contact Card Deck */
    .contact-deck-shared {
        display: grid;
        grid-template-columns: 1fr 450px;
        gap: 50px;
        background: rgba(255, 255, 255, 0.01);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 50px;
        padding: 60px;
        backdrop-filter: blur(40px);
        box-shadow: 0 50px 100px rgba(0,0,0,0.5);
    }

    /* High-Tech Form */
    .tech-form-shared .form-group { position: relative; margin-bottom: 25px; }
    .tech-form-shared .form-control {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 15px;
        padding: 18px 25px;
        color: #fff;
        font-size: 15px;
        transition: 0.4s;
    }
    .tech-form-shared .form-control:focus {
        background: rgba(114, 79, 255, 0.05);
        border-color: rgb(114, 79, 255);
        box-shadow: 0 0 20px rgba(114, 79, 255, 0.2);
        outline: none;
    }

    /* Info Column */
    .info-column-shared {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .info-glass-card-shared {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        padding: 30px;
        border-radius: 25px;
        display: flex;
        align-items: center;
        gap: 20px;
        transition: 0.4s;
    }

    .info-glass-card-shared:hover {
        background: rgba(114, 79, 255, 0.05);
        border-color: rgba(114, 79, 255, 0.3);
        transform: translateX(10px);
    }

    .info-icon-shared {
        width: 50px; height: 50px;
        background: rgba(114, 79, 255, 0.1);
        border-radius: 15px;
        display: flex; align-items: center; justify-content: center;
        font-size: 20px; color: rgb(114, 79, 255);
    }

    .info-txt-shared h6 { margin: 0; font-size: 14px; font-weight: 800; color: rgb(216, 115, 255); text-transform: uppercase; letter-spacing: 1px; }
    .info-txt-shared p { margin: 5px 0 0; font-size: 15px; color: #94a3b8; line-height: 1.5; }

    .btn-cyber-primary {
        background: linear-gradient(90deg, rgb(114, 79, 255) 0%, rgb(221, 0, 184) 100%);
        color: #fff !important;
        padding: 18px 45px;
        border-radius: 100px;
        font-weight: 700;
        font-size: 16px;
        text-decoration: none;
        border: none;
        transition: 0.4s;
        box-shadow: 0 15px 35px rgba(114, 79, 255, 0.3);
        cursor: pointer;
    }
    
    .btn-cyber-primary:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 45px rgba(221, 0, 184, 0.4);
    }

    @media (max-width: 1199px) { .contact-deck-shared { grid-template-columns: 1fr; padding: 40px; } }
</style>

<section class="contact-tech-shared">
    <div class="contact-bg-glow"></div>
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="tech-badge-v3"><i class="fas fa-headset"></i> Project Inquiry</div>
            <h2 style="font-size: clamp(32px, 4.5vw, 54px); font-weight: 900; letter-spacing: -2px;">Initialize <span class="gradient-tech-text">Consultation</span></h2>
        </div>

        <div class="contact-deck-shared" data-aos="zoom-in">
            <!-- Left: Form -->
            <div class="tech-form-shared">
                <form id="sharedContactForm">
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
                            <textarea class="form-control" name="message" rows="5" placeholder="Project Logic & Requirements..." required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn-cyber-primary w-100 py-4 mt-2">
                        Transmit Data <i class="fas fa-paper-plane ms-2"></i>
                    </button>
                    <div id="sharedFormMessage" class="mt-4"></div>
                </form>
            </div>

            <!-- Right: Info -->
            <div class="info-column-shared">
                <div class="info-glass-card-shared">
                    <div class="info-icon-shared"><i class="fas fa-map-location-dot"></i></div>
                    <div class="info-txt-shared">
                        <h6>Location</h6>
                        <p>Sector 87, Neharpar, Faridabad</p>
                    </div>
                </div>
                <div class="info-glass-card-shared">
                    <div class="info-icon-shared"><i class="fas fa-phone-volume"></i></div>
                    <div class="info-txt-shared">
                        <h6>Direct Line</h6>
                        <p>+91 9910893885</p>
                    </div>
                </div>
                <div class="info-glass-card-shared">
                    <div class="info-icon-shared"><i class="fas fa-envelope-open-text"></i></div>
                    <div class="info-txt-shared">
                        <h6>Support Hub</h6>
                        <p>info@webnexatechnologies.com</p>
                    </div>
                </div>
                
                <div class="mt-auto p-4 text-center" style="background: rgba(34, 197, 94, 0.05); border-radius: 20px; border: 1px solid rgba(34, 197, 94, 0.1);">
                    <div style="font-size: 11px; font-weight: 800; color: #22c55e; text-transform: uppercase; letter-spacing: 2px;">
                        <i class="fas fa-circle-dot fa-beat me-2"></i> System Ready
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const sharedForm = document.getElementById('sharedContactForm');
    if (sharedForm) {
      sharedForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const form = event.target;
        const formData = new FormData(form);
        const formProps = Object.fromEntries(formData);
        const formMessage = document.getElementById('sharedFormMessage');

        formMessage.innerHTML = '<div class="alert alert-info">Processing Protocol...</div>';

        fetch('<?php echo BASE_URL; ?>backend/api/contact.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(formProps),
          })
          .then(response => response.json())
          .then(data => {
            formMessage.innerHTML = '<div class="alert alert-success">' + data.message + '</div>';
            form.reset();
          })
          .catch(error => {
            formMessage.innerHTML = '<div class="alert alert-danger">Transmission Error.</div>';
          });
      });
    }
  });
</script>
