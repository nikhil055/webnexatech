<?php include_once 'config.php'; ?>
<style>
    .stats-tech-v2 {
        position: relative;
        padding: 100px 0;
        background: #080b12;
        overflow: hidden;
    }

    /* Moving Data Background */
    .stats-bg-anim {
        position: absolute;
        inset: 0;
        background-image: radial-gradient(circle at 50% 50%, rgba(114, 79, 255, 0.05) 0%, transparent 70%);
        z-index: 1;
    }

    .container { position: relative; z-index: 10; }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 40px;
    }

    .stat-card-v2 {
        text-align: center;
        padding: 40px 20px;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 30px;
        backdrop-filter: blur(10px);
        transition: 0.4s;
    }

    .stat-card-v2:hover {
        border-color: rgb(114, 79, 255);
        background: rgba(114, 79, 255, 0.05);
        transform: scale(1.05);
    }

    .stat-card-v2 h3 {
        font-size: 54px;
        font-weight: 900;
        margin-bottom: 10px;
        background: linear-gradient(to bottom, #fff, #94a3b8);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        letter-spacing: -2px;
    }

    .stat-card-v2 span {
        font-size: 12px;
        font-weight: 800;
        color: rgb(216, 115, 255);
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .stat-icon-glow {
        width: 50px; height: 50px;
        background: rgba(114, 79, 255, 0.1);
        border-radius: 50%;
        margin: 0 auto 25px;
        display: flex; align-items: center; justify-content: center;
        color: rgb(114, 79, 255);
        font-size: 20px;
        box-shadow: 0 0 20px rgba(114, 79, 255, 0.2);
    }

    @media (max-width: 991px) { .stats-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 575px) { .stats-grid { grid-template-columns: 1fr; } }
</style>

<section class="stats-tech-v2">
    <div class="stats-bg-anim"></div>
    <div class="container">
        <div class="stats-grid">
            <!-- Stat 01 -->
            <div class="stat-card-v2" data-aos="zoom-in" data-aos-delay="100">
                <div class="stat-icon-glow"><i class="fas fa-code-branch"></i></div>
                <h3 class="counter">500</h3>
                <span>Projects Completed</span>
            </div>

            <!-- Stat 02 -->
            <div class="stat-card-v2" data-aos="zoom-in" data-aos-delay="200">
                <div class="stat-icon-glow"><i class="fas fa-users"></i></div>
                <h3 class="counter">150</h3>
                <span>Expert Engineers</span>
            </div>

            <!-- Stat 03 -->
            <div class="stat-icon-glow" style="display:none;"></div> <!-- Spacer fix -->
            
            <div class="stat-card-v2" data-aos="zoom-in" data-aos-delay="300">
                <div class="stat-icon-glow"><i class="fas fa-globe"></i></div>
                <h3 class="counter">12</h3>
                <span>Global Offices</span>
            </div>

            <!-- Stat 04 -->
            <div class="stat-card-v2" data-aos="zoom-in" data-aos-delay="400">
                <div class="stat-icon-glow"><i class="fas fa-award"></i></div>
                <h3 class="counter">25</h3>
                <span>Industry Awards</span>
            </div>
        </div>
    </div>
</section>

<script>
    // Simple counter logic
    document.addEventListener('DOMContentLoaded', () => {
        const counters = document.querySelectorAll('.counter');
        const speed = 200;

        const animate = (counter) => {
            const value = +counter.innerText;
            const data = +counter.getAttribute('data-target');
            const time = value / speed;
            if(value < data) {
                counter.innerText = Math.ceil(value + time);
                setTimeout(() => animate(counter), 1);
            } else {
                counter.innerText = data + '+';
            }
        }

        // Set targets and reset to 0
        counters.forEach(c => {
            const target = c.innerText;
            c.setAttribute('data-target', target);
            c.innerText = '0';
        });

        // Intersection Observer to trigger on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    const c = entry.target.querySelector('.counter');
                    if(c && c.innerText === '0') animate(c);
                }
            });
        }, { threshold: 0.5 });

        document.querySelectorAll('.stat-card-v2').forEach(card => observer.observe(card));
    });
</script>
