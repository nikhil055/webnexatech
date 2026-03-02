<?php include_once 'config.php'; ?>
<style>
    .faq-terminal-v1 {
        position: relative;
        padding: 140px 0;
        background: #05070a;
        color: #fff;
        font-family: 'Inter', sans-serif; /* Back to standard for main UI */
        overflow: hidden;
    }

    .container { position: relative; z-index: 10; }

    /* Heading Match */
    .faq-badge {
        display: inline-flex;
        align-items: center; gap: 8px;
        background: rgba(114, 79, 255, 0.1);
        border: 1px solid rgba(114, 79, 255, 0.2);
        padding: 6px 18px; border-radius: 100px;
        font-size: 12px; font-weight: 700; color: rgb(216, 115, 255);
        margin-bottom: 25px; text-transform: uppercase; letter-spacing: 2px;
    }

    .faq-terminal-v1 h2 {
        font-size: clamp(32px, 4.5vw, 54px);
        font-weight: 900;
        line-height: 1.1;
        margin-bottom: 30px;
        letter-spacing: -2px;
    }

    /* TERMINAL WINDOW ENHANCED */
    .terminal-window {
        background: rgba(10, 15, 26, 0.8);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 30px;
        overflow: hidden;
        backdrop-filter: blur(30px);
        box-shadow: 0 50px 100px rgba(0,0,0,0.7);
        max-width: 1100px;
        margin: 60px auto 0;
        font-family: 'Fira Code', monospace; /* Monospace only inside terminal */
    }

    /* Terminal Header */
    .term-header {
        background: rgba(255, 255, 255, 0.03);
        padding: 15px 25px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .term-dots { display: flex; gap: 8px; }
    .dot { width: 12px; height: 12px; border-radius: 50%; }
    .dot-r { background: #ff5f56; }
    .dot-y { background: #ffbd2e; }
    .dot-g { background: #27c93f; }
    .term-title { font-size: 11px; color: #475569; text-transform: uppercase; letter-spacing: 2px; }

    /* Terminal Body */
    .term-body {
        padding: 40px;
        min-height: 500px;
        display: grid;
        grid-template-columns: 350px 1fr;
        gap: 40px;
    }

    /* Left: Question Commands */
    .term-questions {
        display: flex;
        flex-direction: column;
        gap: 15px;
        border-right: 1px solid rgba(255, 255, 255, 0.05);
        padding-right: 20px;
    }

    .q-cmd {
        color: #94a3b8;
        font-size: 14px;
        cursor: pointer;
        transition: 0.3s;
        display: flex;
        align-items: flex-start;
        gap: 10px;
    }

    .q-cmd::before { content: ">"; color: rgb(114, 79, 255); font-weight: 800; }
    .q-cmd:hover, .q-cmd.active { color: #fff; transform: translateX(5px); }
    .q-cmd.active { color: rgb(216, 115, 255); }

    /* Right: Response Output */
    .term-output {
        position: relative;
    }

    .output-text {
        font-size: 16px;
        line-height: 1.8;
        color: #cbd5e1;
    }

    .cursor-blink {
        display: inline-block;
        width: 10px;
        height: 20px;
        background: rgb(114, 79, 255);
        margin-left: 5px;
        animation: blink 1s infinite;
        vertical-align: middle;
    }

    @keyframes blink { 0%, 100% { opacity: 1; } 50% { opacity: 0; } }

    /* Scanning Line Effect */
    .scanline {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: linear-gradient(rgba(18, 16, 16, 0) 50%, rgba(0, 0, 0, 0.1) 50%), linear-gradient(90deg, rgba(255, 0, 0, 0.02), rgba(0, 255, 0, 0.01), rgba(0, 0, 255, 0.02));
        z-index: 2;
        background-size: 100% 4px, 3px 100%;
        pointer-events: none;
    }

    @media (max-width: 991px) {
        .term-body { grid-template-columns: 1fr; }
        .term-questions { border-right: none; padding-right: 0; border-bottom: 1px solid rgba(255,255,255,0.05); padding-bottom: 30px; }
    }
</style>

<section class="faq-terminal-v1">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <div class="tech-badge-v3"><i class="fas fa-terminal"></i> Intelligence Hub</div>
            <h2 style="font-family: 'Inter', sans-serif;">System Queries & <br> <span class="gradient-tech-text">Core Knowledge</span></h2>
        </div>

        <div class="terminal-window" data-aos="zoom-in">
            <div class="term-header">
                <div class="term-dots"><div class="dot dot-r"></div><div class="dot dot-y"></div><div class="dot dot-g"></div></div>
                <div class="term-title">webnexa_intelligence_unit.exe</div>
                <div></div>
            </div>
            <div class="term-body">
                <div class="scanline"></div>
                
                <!-- Commands -->
                <div class="term-questions">
                    <div class="q-cmd active" onclick="runQuery('timeline', this)">query --project-timeline</div>
                    <div class="q-cmd" onclick="runQuery('pricing', this)">query --pricing-model</div>
                    <div class="q-cmd" onclick="runQuery('support', this)">query --post-deployment</div>
                    <div class="q-cmd" onclick="runQuery('stack', this)">query --custom-stack</div>
                    <div class="q-cmd" onclick="runQuery('security', this)">query --data-encryption</div>
                </div>

                <!-- Output -->
                <div class="term-output">
                    <div class="output-text" id="termOutput">
                        // INITIALIZING...<br>
                        // SYSTEM READY.<br><br>
                        Our typical project timeline ranges from 4 to 12 weeks depending on complexity. We follow an agile sprint-based methodology to ensure transparency and speed.
                    </div>
                    <span class="cursor-blink"></span>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const faqs = {
        timeline: "// INITIALIZING TIMELINE QUERY...<br>// STATUS: OPTIMIZED<br><br>Typical delivery cycles range from 4-12 weeks. We utilize 2-week agile sprints, providing live staging links for every phase of development.",
        pricing: "// INITIALIZING PRICING QUERY...<br>// STATUS: FLEXIBLE<br><br>We offer Milestone-Based and Retainer models. Every project starts with a detailed Technical Requirement Document (TRD) to ensure zero hidden costs.",
        support: "// INITIALIZING SUPPORT QUERY...<br>// STATUS: ACTIVE 24/7<br><br>Post-launch, we provide 3 months of priority technical support and performance monitoring. Extended AMC packages are available for global scale.",
        stack: "// INITIALIZING STACK QUERY...<br>// STATUS: MULTI-LAYERED<br><br>While we master MERN, Laravel, and Flutter, we select the specific architecture that best suits your user-load and security requirements.",
        security: "// INITIALIZING SECURITY QUERY...<br>// STATUS: FORTIFIED<br><br>We implement AES-256 encryption, HIPAA/PCI standards, and automated penetration testing to ensure your system is enterprise-grade and secure."
    };

    function runQuery(key, btn) {
        document.querySelectorAll('.q-cmd').forEach(c => c.classList.remove('active'));
        btn.classList.add('active');

        const output = document.getElementById('termOutput');
        const text = faqs[key];
        
        output.innerHTML = "";
        let i = 0;
        
        function typing() {
            if (i < text.length) {
                if (text.substring(i, i + 4) === "<br>") {
                    output.innerHTML += "<br>";
                    i += 4;
                } else {
                    output.innerHTML += text.charAt(i);
                    i++;
                }
                setTimeout(typing, 5); // Fast typing speed
            }
        }
        typing();
    }
</script>
