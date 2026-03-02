<?php include_once 'config.php'; ?>
<style>
    .tech-kinetic-v5 {
        position: relative;
        padding: 120px 0;
        background: #05070a;
        color: #fff;
        font-family: 'Inter', sans-serif;
        overflow: hidden;
        perspective: 1500px;
    }

    /* BACKGROUND ELEMENTS */
    .bg-flux-layer { position: absolute; inset: 0; z-index: 1; pointer-events: none; }
    .orbital-ring { position: absolute; top: 50%; left: 50%; border: 1px solid rgba(114, 79, 255, 0.05); border-radius: 50%; transform: translate(-50%, -50%); animation: rotateRing 20s linear infinite; }
    .ring-1 { width: 600px; height: 600px; border-style: dashed; }
    .ring-2 { width: 900px; height: 900px; animation-duration: 30s; animation-direction: reverse; }
    @keyframes rotateRing { from { transform: translate(-50%, -50%) rotate(0deg); } to { transform: translate(-50%, -50%) rotate(360deg); } }

    .code-fragment { position: absolute; font-family: monospace; font-size: 10px; color: rgb(114, 79, 255); opacity: 0.1; animation: floatCode 10s infinite linear; }
    @keyframes floatCode { 0% { transform: translateY(100vh); opacity: 0; } 50% { opacity: 0.2; } 100% { transform: translateY(-100px); opacity: 0; } }

    .container { position: relative; z-index: 10; }

    /* Standardized Heading Styling */
    .tech-badge-v3 {
        display: inline-flex;
        align-items: center; gap: 8px;
        background: rgba(114, 79, 255, 0.1);
        border: 1px solid rgba(114, 79, 255, 0.2);
        padding: 6px 18px; border-radius: 100px;
        font-size: 12px; font-weight: 700; color: rgb(216, 115, 255);
        margin-bottom: 25px; text-transform: uppercase; letter-spacing: 2px;
    }

    .tech-kinetic-v5 h2 {
        font-size: clamp(32px, 4.5vw, 54px);
        font-weight: 900;
        line-height: 1.1;
        margin-bottom: 30px;
        letter-spacing: -2px;
    }

    /* HEX GRID SYSTEM */
    .hex-matrix-wrapper {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 15px; 
        max-width: 1100px;
        margin: 60px auto 0;
        transform-style: preserve-3d;
        animation: activeBreathe 12s infinite alternate ease-in-out;
    }

    @keyframes activeBreathe {
        0% { transform: rotateX(5deg) rotateY(-5deg); }
        100% { transform: rotateX(-5deg) rotateY(5deg); }
    }

    .hex-item {
        position: relative;
        width: 160px;
        height: 180px;
        clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.08);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        z-index: 5;
    }

    .hex-item.system-active, .hex-item:hover {
        background: rgba(114, 79, 255, 0.2);
        border-color: rgb(114, 79, 255);
        transform: translateZ(80px) scale(1.05);
        z-index: 100;
        box-shadow: 0 0 40px rgba(114, 79, 255, 0.4);
    }

    .hex-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        padding: 20px;
        text-align: center;
    }

    .hex-content i {
        font-size: 40px; 
        color: rgba(255, 255, 255, 0.3);
        margin-bottom: 10px;
        transition: 0.4s;
        display: inline-block;
    }

    .hex-item.system-active i, .hex-item:hover i {
        color: #fff;
        filter: drop-shadow(0 0 15px rgb(114, 79, 255));
    }

    .hex-content span {
        font-size: 12px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #475569;
        transition: 0.4s;
        display: block;
    }

    .hex-item.system-active span, .hex-item:hover span { color: #fff; }

    @media (max-width: 767px) {
        .hex-item { width: 120px; height: 140px; }
        .hex-content i { font-size: 28px; }
        .hex-content span { font-size: 10px; }
        .hex-matrix-wrapper { gap: 10px; }
    }
</style>

<section class="tech-kinetic-v5" id="tech-neural-core">
    <div class="bg-flux-layer" id="flux-container">
        <div class="orbital-ring ring-1"></div>
        <div class="orbital-ring ring-2"></div>
    </div>
    
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="tech-badge-v3">
                <i class="fas fa-layer-group"></i> Tools & Technologies
            </div>
            <h2>Empowering Innovation with <br> <span class="gradient-tech-text">Cutting-Edge Technologies</span></h2>
            <p style="color: #94a3b8; max-width: 650px; margin: 20px auto 0; font-size: 17px;">A unified delivery ecosystem powered by the world's leading technical frameworks and modern engineering standards.</p>
        </div>

        <div class="hex-matrix-wrapper" id="neural-grid">
            <div class="hex-item"><div class="hex-content"><i class="fab fa-react"></i><span>React</span></div></div>
            <div class="hex-item"><div class="hex-content"><i class="fab fa-node-js"></i><span>Node.js</span></div></div>
            <div class="hex-item"><div class="hex-content"><i class="fab fa-laravel"></i><span>Laravel</span></div></div>
            <div class="hex-item"><div class="hex-content"><i class="fas fa-mobile-screen"></i><span>Flutter</span></div></div>
            <div class="hex-item"><div class="hex-content"><i class="fas fa-leaf"></i><span>MongoDB</span></div></div>
            <div class="hex-item"><div class="hex-content"><i class="fab fa-aws"></i><span>AWS</span></div></div>
            <div class="hex-item"><div class="hex-content"><i class="fab fa-python"></i><span>Python</span></div></div>
            <div class="hex-item"><div class="hex-content"><i class="fas fa-server"></i><span>MySQL</span></div></div>
            <div class="hex-item"><div class="hex-content"><i class="fab fa-docker"></i><span>Docker</span></div></div>
            <div class="hex-item"><div class="hex-content"><i class="fab fa-angular"></i><span>Angular</span></div></div>
            <div class="hex-item"><div class="hex-content"><i class="fab fa-php"></i><span>PHP 8</span></div></div>
            <div class="hex-item"><div class="hex-content"><i class="fab fa-vuejs"></i><span>Vue.js</span></div></div>
            <div class="hex-item"><div class="hex-content"><i class="fas fa-fire"></i><span>Firebase</span></div></div>
            <div class="hex-item"><div class="hex-content"><i class="fab fa-github"></i><span>GitOps</span></div></div>
            <div class="hex-item"><div class="hex-content"><i class="fas fa-brain"></i><span>AI / ML</span></div></div>
            <div class="hex-item"><div class="hex-content"><i class="fab fa-js"></i><span>JS / TS</span></div></div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const flux = document.getElementById('flux-container');
        const snippets = ['const app = express()', '<div>WebNexa</div>', 'SELECT * FROM users', 'flutter run', 'git push origin'];

        for (let i = 0; i < 12; i++) {
            const code = document.createElement('div');
            code.className = 'code-fragment';
            code.innerText = snippets[Math.floor(Math.random() * snippets.length)];
            code.style.left = Math.random() * 100 + '%';
            code.style.animationDelay = Math.random() * 10 + 's';
            flux.appendChild(code);
        }

        const hexItems = document.querySelectorAll('.hex-item');
        let currentIndex = 0;
        setInterval(() => {
            hexItems.forEach(item => item.classList.remove('system-active'));
            hexItems[currentIndex].classList.add('system-active');
            currentIndex = (currentIndex + 1) % hexItems.length;
        }, 1500);

        const scene = document.getElementById('tech-neural-core');
        const grid = document.getElementById('neural-grid');
        scene.addEventListener('mousemove', (e) => {
            const xAxis = (window.innerWidth / 2 - e.pageX) / 40;
            const yAxis = (window.innerHeight / 2 - e.pageY) / 40;
            grid.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
        });
    });
</script>
