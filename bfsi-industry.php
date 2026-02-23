<?php include_once 'config.php'; ?><?php include 'header.php'; ?>

    <style>
        /* Styles from about.php, ensuring consistency */
        .page-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7));
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
            color: #3C72FC;
            font-weight: 700;
        }
        .content-section {
            padding-bottom: 80px;
        }
        .generic-card {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            margin-bottom: 30px;
            border: 1px solid #f0f0f0;
            height: 100%;
            padding: 25px;
            text-align: center;
        }
        .generic-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(60, 114, 252, 0.15);
            border-color: #3C72FC;
        }
        .generic-card h4 {
            font-size: 20px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 10px;
        }
        .generic-card p {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
        }
        /* Icon card for feature listing */
        .icon-card {
            display: flex;
            align-items: flex-start;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.07);
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        .icon-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 35px rgba(0,0,0,0.1);
        }
        .icon-card .icon {
            font-size: 30px;
            color: #3C72FC;
            margin-right: 20px;
            min-width: 40px;
        }
        .icon-card h5 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 5px;
        }
        .icon-card p {
            font-size: 15px;
            color: #666;
            margin-bottom: 0;
            line-height: 1.6;
        }
    </style>

    <div id="page-content-wrapper">
        <section class="page-banner" id="dynamic-page-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" data-aos="zoom-in">
                        <h2 id="banner-title">Loading...</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-custom" id="breadcrumb-list">
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <div id="dynamic-page-sections">
            <div class="text-center p-5">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <p class="mt-2">Fetching page content...</p>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const dynamicPageBanner = document.getElementById('dynamic-page-banner');
    const bannerTitle = document.getElementById('banner-title');
    const breadcrumbList = document.getElementById('breadcrumb-list');
    const dynamicPageSections = document.getElementById('dynamic-page-sections');
    const pageSlug = 'bfsi-industry'; // IMPORTANT: Set the slug for the current page

    fetch(`backend/api/pages.php?slug=${pageSlug}`)
        .then(response => {
            if (!response.ok) {
                if (response.status === 404) {
                    return createPageContent(pageSlug)
                        .then(() => fetch(`backend/api/pages.php?slug=${pageSlug}`))
                        .then(refetchResponse => {
                            if (!refetchResponse.ok) throw new Error('Failed to refetch content after creation.');
                            return refetchResponse.json();
                        });
                }
                return response.text().then(text => { throw new Error(text) });
            }
            return response.json();
        })
        .then(data => {
            renderPage(data);
        })
        .catch(error => {
            console.error('Error handling page data:', error);
            dynamicPageSections.innerHTML = `<div class="alert alert-danger text-center" role="alert">Failed to load page content: ${error.message}</div>`;
        });

    function renderPage(data) {
        if (data.error || data.message) {
            dynamicPageSections.innerHTML = `<div class="alert alert-danger text-center" role="alert">Error loading page: ${data.message || data.error}</div>`;
            return;
        }

        document.title = data.title || 'Page';
        bannerTitle.innerText = data.banner_title || 'Welcome';
        if (data.banner_image_url) {
            dynamicPageBanner.style.backgroundImage = `linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('${data.banner_image_url}')`;
        }

        breadcrumbList.innerHTML = '';
        if (data.breadcrumb_items && Array.isArray(data.breadcrumb_items)) {
            data.breadcrumb_items.forEach((item, index) => {
                const li = document.createElement('li');
                li.classList.add('breadcrumb-item');
                if (index === data.breadcrumb_items.length - 1) {
                    li.classList.add('active');
                    li.setAttribute('aria-current', 'page');
                    li.innerText = item.label;
                } else {
                    const a = document.createElement('a');
                    a.href = item.url;
                    a.innerText = item.label;
                    li.appendChild(a);
                }
                breadcrumbList.appendChild(li);
            });
        }

        dynamicPageSections.innerHTML = '';
        if (data.sections && Array.isArray(data.sections)) {
            data.sections.forEach(section => {
                let sectionHtml = '';
                sectionHtml = renderSection(section);
                dynamicPageSections.innerHTML += sectionHtml;
            });
        }

        if (typeof AOS !== 'undefined') {
            AOS.refreshHard();
        }
    }

    function renderSection(section){
         let content = '';
         switch(section.type) {
            case 'hero':
                 content = `
                    <section class="content-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="ser-head text-center mb-5" data-aos="fade-up">
                                        <div class="hed text-center">
                                            <img src="<?php echo BASE_URL; ?>assets/images/about/arrowLeft.svg" width="6%" alt="">
                                            <span>${section.subtitle || ''}</span>
                                            <img src="<?php echo BASE_URL; ?>assets/images/about/arrowRight.svg" width="6%" alt="">
                                        </div>
                                        <h3>${section.title || ''}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2 text-center lead">
                                    ${section.content_json && section.content_json.text ? section.content_json.text : ''}
                                </div>
                            </div>
                        </div>
                    </section>
                `;
                break;
            case 'icon_cards':
                 if (section.content_json && Array.isArray(section.content_json)) {
                    const cards = section.content_json.map(card => `
                        <div class="col-lg-6">
                            <div class="icon-card">
                                <div class="icon"><i class="${card.icon || 'fa-solid fa-check'}"></i></div>
                                <div class="text">
                                    <h5>${card.title || ''}</h5>
                                    <p>${card.description || ''}</p>
                                </div>
                            </div>
                        </div>
                    `).join('');
                    content = `
                        <section class="content-section bg-light">
                            <div class="container">
                                 <div class="row">
                                    <div class="col-md-12">
                                        <div class="ser-head text-center mb-5" data-aos="fade-up">
                                            <h3>${section.title || ''}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    ${cards}
                                </div>
                            </div>
                        </section>
                    `;
                 }
                 break;
         }
         return content;
    }

    function createPageContent(slug) {
        const pageData = {
            "slug": slug,
            "title": "BFSI Industry Solutions | Web Nexa Technologies",
            "meta_description": "Secure, scalable, and compliant digital solutions for the Banking, Financial Services, and Insurance (BFSI) sector. We build fintech apps, secure portals, and more.",
            "banner_image_url": "assets/images/header-icon/Industries/BFSI.png",
            "banner_title": "BFSI Industry",
            "breadcrumb_items": [
                {"label": "Home", "url": "index.php"},
                {"label": "Industries", "url": "industries.php"},
                {"label": "BFSI", "url": "#"}
            ],
            "status": "published",
            "sections": [
                {
                    "section_order": 0,
                    "type": "hero",
                    "subtitle": "Secure, Compliant, and Innovative",
                    "title": "Digital Transformation for Financial Services",
                    "content_json": {
                        "text": "<p>The BFSI sector faces unique challenges, including stringent regulations, complex security requirements, and the need for high-speed transaction processing. We develop robust and secure digital solutions that help financial institutions innovate, improve customer experience, and maintain compliance in a rapidly changing digital landscape.</p>"
                    }
                },
                {
                    "section_order": 1,
                    "type": "icon_cards",
                    "title": "Our BFSI Solutions",
                    "content_json": [
                        {"icon": "fa-solid fa-mobile-screen-button", "title": "Mobile Banking & Fintech Apps", "description": "Developing secure and user-friendly mobile applications for banking, payments, and investment management."},
                        {"icon": "fa-solid fa-user-shield", "title": "Secure Customer Portals", "description": "Building encrypted web portals for customers to manage their accounts, view statements, and communicate securely."},
                        {"icon": "fa-solid fa-calculator", "title": "Loan & Insurance Quoting Engines", "description": "Creating custom calculators and quoting tools that integrate with your core systems to provide instant estimates."},
                        {"icon": "fa-solid fa-robot", "title": "AI & Chatbot Integration", "description": "Implementing AI-powered chatbots for customer support, fraud detection, and personalized financial advice."},
                        {"icon": "fa-solid fa-shield-halved", "title": "Compliance & Security Audits", "description": "Ensuring your digital assets are compliant with industry regulations like PCI DSS and GDPR through rigorous security audits."},
                        {"icon": "fa-solid fa-chart-line", "title": "Data Analytics & Reporting", "description": "Developing dashboards and analytics solutions to gain insights into customer behavior and financial performance."}
                    ]
                }
            ]
        };

        return fetch('backend/api/pages.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(pageData),
        })
        .then(response => {
            if (!response.ok) {
                return response.json().then(err => {
                    throw new Error(`Page creation failed: ${err.message || 'Unknown error'}`);
                });
            }
            return response.json();
        });
    }
});
</script>

