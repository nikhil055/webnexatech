<?php include_once 'config.php'; ?>
<style>
    .global-network-v1 {
        position: relative;
        padding: 140px 0;
        background: #080b12;
        color: #fff;
        font-family: 'Inter', sans-serif;
        overflow: hidden;
    }

    .container { position: relative; z-index: 10; }

    /* MAP CONTAINER */
    .map-wrapper {
        position: relative;
        width: 100%;
        max-width: 1100px;
        margin: 60px auto 0;
        aspect-ratio: 16/9;
        background: url('https://upload.wikimedia.org/wikipedia/commons/8/80/World_map_dots_blue.png'); /* Stylized dot map */
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        filter: invert(1) brightness(0.5) sepia(1) hue-rotate(220deg) saturate(2);
        opacity: 0.6;
    }

    /* GLOWING NODES */
    .map-node {
        position: absolute;
        width: 12px; height: 12px;
        background: rgb(216, 115, 255);
        border-radius: 50%;
        box-shadow: 0 0 20px rgb(114, 79, 255);
        cursor: pointer;
        z-index: 20;
    }

    .map-node::after {
        content: "";
        position: absolute;
        inset: -10px;
        border: 1px solid rgba(114, 79, 255, 0.4);
        border-radius: 50%;
        animation: nodePulse 2s infinite;
    }

    @keyframes nodePulse {
        0% { transform: scale(1); opacity: 1; }
        100% { transform: scale(3); opacity: 0; }
    }

    /* Node Tooltips */
    .node-info {
        position: absolute;
        bottom: 25px; left: 50%;
        transform: translateX(-50%) translateY(10px);
        background: rgba(15, 23, 42, 0.9);
        border: 1px solid rgba(114, 79, 255, 0.3);
        padding: 15px 20px;
        border-radius: 15px;
        backdrop-filter: blur(10px);
        width: 200px;
        opacity: 0;
        visibility: hidden;
        transition: 0.3s;
        pointer-events: none;
        text-align: center;
    }

    .map-node:hover .node-info {
        opacity: 1;
        visibility: visible;
        transform: translateX(-50%) translateY(0);
    }

    .node-info h6 { font-size: 14px; font-weight: 800; margin-bottom: 5px; }
    .node-info span { font-size: 10px; color: #94a3b8; text-transform: uppercase; letter-spacing: 1px; }

    /* Moving Connection Lines */
    .data-line {
        position: absolute;
        height: 1px;
        background: linear-gradient(90deg, transparent, rgb(114, 79, 255), transparent);
        z-index: 15;
        opacity: 0.3;
        transform-origin: left center;
    }

    @media (max-width: 767px) {
        .map-wrapper { height: 300px; background-size: cover; }
    }
</style>

<section class="global-network-v1">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <div class="tech-badge-v3"><i class="fas fa-network-wired"></i> Global Deployment</div>
            <h2>Universal <span class="gradient-tech-text">Systems Reach</span></h2>
            <p style="color: #94a3b8; max-width: 600px; margin: 20px auto 0;">Our architectures power businesses across 12+ countries, maintaining 99.9% global uptime through distributed cloud nodes.</p>
        </div>

        <div class="map-wrapper" data-aos="zoom-in">
            <!-- Node: India -->
            <div class="map-node" style="top: 55%; left: 72%;">
                <div class="node-info">
                    <h6>Main HQ (Faridabad)</h6>
                    <span>Development Hub</span>
                </div>
            </div>

            <!-- Node: USA -->
            <div class="map-node" style="top: 40%; left: 20%;">
                <div class="node-info">
                    <h6>New York, USA</h6>
                    <span>Cloud Active: 12 Systems</span>
                </div>
            </div>

            <!-- Node: UK -->
            <div class="map-node" style="top: 35%; left: 48%;">
                <div class="node-info">
                    <h6>London, UK</h6>
                    <span>E-Comm Core Deployed</span>
                </div>
            </div>

            <!-- Node: Dubai -->
            <div class="map-node" style="top: 50%; left: 62%;">
                <div class="node-info">
                    <h6>Dubai, UAE</h6>
                    <span>Fleet Systems Active</span>
                </div>
            </div>

            <!-- Node: Singapore -->
            <div class="map-node" style="top: 65%; left: 82%;">
                <div class="node-info">
                    <h6>Singapore</h6>
                    <span>FinTech Node Active</span>
                </div>
            </div>
        </div>
    </div>
</section>
