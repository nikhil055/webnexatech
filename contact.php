<?php 
$page_title = 'Contact Protocol | WebNexa';
include_once 'config.php'; 
include_once 'header-new.php'; 
?>

<style>
    .contact-main-v2 { background: #05070a; color: #fff; font-family: 'Inter', sans-serif; overflow-x: hidden; }
    
    /* CONTACT HERO */
    .contact-hero-v2 { position: relative; padding: 220px 0 100px; background: #080b12; overflow: hidden; text-align: center; }
    .contact-hero-v2 h1 { font-size: clamp(40px, 7vw, 85px); font-weight: 900; letter-spacing: -4px; position: relative; z-index: 10; }
    .hero-scanner-line { position: absolute; top: 0; left: 0; width: 100%; height: 1px; background: rgba(114, 79, 255, 0.5); box-shadow: 0 0 20px rgb(114, 79, 255); animation: scanV 4s infinite linear; }
    @keyframes scanV { 0% { top: 0; } 100% { top: 100%; } }

    /* INFO NODES */
    .info-grid-v2 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px; margin-top: -50px; position: relative; z-index: 20; }
    .info-node-v2 { background: rgba(255, 255, 255, 0.015); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 35px; padding: 40px; backdrop-filter: blur(40px); transition: 0.4s; text-align: center; }
    .info-node-v2:hover { border-color: rgb(114, 79, 255); transform: translateY(-10px); background: rgba(114, 79, 255, 0.03); }
    .node-icon { width: 60px; height: 60px; background: rgba(114, 79, 255, 0.1); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin: 0 auto 25px; color: rgb(114, 79, 255); font-size: 24px; transition: 0.4s; }
    .info-node-v2:hover .node-icon { background: rgb(114, 79, 255); color: #fff; box-shadow: 0 0 20px rgba(114, 79, 255, 0.4); }
    .info-node-v2 h4 { font-size: 20px; font-weight: 800; margin-bottom: 10px; }
    .info-node-v2 p { color: #94a3b8; font-size: 15px; margin: 0; }

    /* FORM AREA */
    .contact-form-section { padding: 120px 0; display: flex; gap: 50px; align-items: flex-start; }
    .form-glass-v2 { flex: 1.5; background: rgba(255, 255, 255, 0.01); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 50px; padding: 60px; backdrop-filter: blur(50px); }
    
    .input-group-v2 { margin-bottom: 25px; }
    .input-group-v2 label { display: block; font-size: 11px; font-weight: 800; text-transform: uppercase; color: #475569; letter-spacing: 2px; margin-bottom: 10px; padding-left: 15px; }
    .input-group-v2 input, .input-group-v2 textarea, .input-group-v2 select { width: 100%; background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 18px; padding: 18px 25px; color: #fff; font-size: 15px; transition: 0.3s; }
    .input-group-v2 input:focus, .input-group-v2 textarea:focus { border-color: rgb(114, 79, 255); background: rgba(114, 79, 255, 0.02); outline: none; }

    /* SIDEBAR INFO */
    .contact-sidebar-v2 { flex: 1; position: sticky; top: 150px; }
    .social-stack-v2 { display: flex; flex-direction: column; gap: 15px; margin-top: 40px; }
    .social-link-v2 { display: flex; align-items: center; gap: 15px; background: rgba(255,255,255,0.03); padding: 15px 25px; border-radius: 20px; border: 1px solid rgba(255,255,255,0.05); text-decoration: none; color: #94a3b8; font-weight: 700; transition: 0.3s; }
    .social-link-v2:hover { background: #fff; color: #000; border-color: #fff; transform: translateX(10px); }

    /* MAP */
    .map-container-v2 { height: 500px; width: 100%; background: #000; border-radius: 50px; overflow: hidden; border: 1px solid rgba(255,255,255,0.08); margin-bottom: 100px; filter: invert(90%) hue-rotate(180deg) brightness(0.8) contrast(1.2); }

    @media (max-width: 991px) { .info-grid-v2 { grid-template-columns: 1fr; margin-top: 50px; } .contact-form-section { flex-direction: column; } .form-glass-v2 { width: 100%; } }
</style>

<div class="contact-main-v2">
    <section class="contact-hero-v2">
        <div class="hero-scanner-line"></div>
        <div class="hero-glow"></div>
        <div class="container">
            <div class="tech-badge" data-aos="fade-down">Access Communication Interface</div>
            <h1 data-aos="zoom-in">Initiate <br> <span class="gradient-tech-text">Contact Protocol</span></h1>
        </div>
    </section>

    <div class="container">
        <div class="info-grid-v2">
            <div class="info-node-v2" data-aos="fade-up">
                <div class="node-icon"><i class="fas fa-envelope-open-text"></i></div>
                <h4>Global Mail</h4>
                <p>info@webnexatechnologies.com</p>
                <p style="font-size: 12px; margin-top:5px; opacity:0.5;">Response Time: < 4 Hours</p>
            </div>
            <div class="info-node-v2" data-aos="fade-up" data-aos-delay="100">
                <div class="node-icon"><i class="fas fa-phone-volume"></i></div>
                <h4>Direct Line</h4>
                <p>+91 9910893885</p>
                <p style="font-size: 12px; margin-top:5px; opacity:0.5;">Mon - Sat | 10 AM - 7 PM</p>
            </div>
            <div class="info-node-v2" data-aos="fade-up" data-aos-delay="200">
                <div class="node-icon"><i class="fas fa-map-marker-alt"></i></div>
                <h4>Operations HQ</h4>
                <p>Noida, Sector 63, India</p>
                <p style="font-size: 12px; margin-top:5px; opacity:0.5;">Global Deployment Center</p>
            </div>
        </div>

        <section class="contact-form-section">
            <div class="form-glass-v2" data-aos="fade-right">
                <div class="mb-5">
                    <div class="tech-badge">Transmission Terminal</div>
                    <h2 class="display-6 fw-900">Send System <span class="gradient-tech-text">Enquiry</span></h2>
                </div>

                <form action="backend/api/contact.php" method="POST">
                    <div class="row">
                        <div class="col-md-6 input-group-v2">
                            <label>Agent Name</label>
                            <input type="text" name="name" placeholder="Enter Full Name" required>
                        </div>
                        <div class="col-md-6 input-group-v2">
                            <label>Return Address (Email)</label>
                            <input type="email" name="email" placeholder="Enter Email Address" required>
                        </div>
                        <div class="col-md-6 input-group-v2">
                            <label>Comms Channel (Phone)</label>
                            <input type="tel" name="phone" placeholder="Enter Phone Number">
                        </div>
                        <div class="col-md-6 input-group-v2">
                            <label>Objective Type</label>
                            <select name="subject">
                                <option>Tech Development</option>
                                <option>SEO Strategy</option>
                                <option>Creative Audit</option>
                                <option>General Enquiry</option>
                            </select>
                        </div>
                        <div class="col-12 input-group-v2">
                            <label>Message Payload</label>
                            <textarea name="message" rows="5" placeholder="Describe your project requirements..." required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-style-one w-100 py-4">Execute Transmission <i class="fas fa-paper-plane ms-2"></i></button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="contact-sidebar-v2" data-aos="fade-left">
                <div class="tech-badge">Network Sync</div>
                <h3 class="fw-900 mt-3">Follow the <br> <span class="gradient-tech-text">Digital Trail</span></h3>
                <p class="opacity-50 mt-3">Sync with our neural networks for daily technical updates and architecture highlights.</p>
                
                <div class="social-stack-v2">
                    <a href="#" class="social-link-v2"><i class="fab fa-linkedin-in"></i> LinkedIn Network</a>
                    <a href="#" class="social-link-v2"><i class="fab fa-twitter"></i> Terminal (X) Feed</a>
                    <a href="#" class="social-link-v2"><i class="fab fa-instagram"></i> Creative Studio</a>
                    <a href="#" class="social-link-v2"><i class="fab fa-github"></i> Repository Access</a>
                </div>
            </div>
        </section>

        <div class="map-container-v2" data-aos="zoom-in">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.562064775463!2d77.3873250755001!3d28.61291197567491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce561649da40d%3A0x2cae46781ad5672a!2sWebNexa%20Technologies!5e0!3m2!1sen!2sin!4v1740987654321!5m2!1sen!2sin" 
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </div>

    <?php include_once 'faq-terminal-section.php'; ?>
</div>

<?php include_once 'footer.php'; ?>
