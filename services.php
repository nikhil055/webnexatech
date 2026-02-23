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
            color: #EB7700;
            font-weight: 700;
        }
        .content-section {
            padding-bottom: 80px;
        }
        /* Service Category Card */
        .service-category-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            margin-bottom: 30px;
            padding: 30px;
            transition: all 0.3s ease-in-out;
            border: 1px solid #e9ecef;
            text-align: center;
        }
        .service-category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(60, 114, 252, 0.2);
            border-color: #EB7700;
        }
        .service-category-card .icon-header {
            font-size: 45px;
            color: #EB7700;
            margin-bottom: 20px;
        }
        .service-category-card h4 {
            font-weight: 700;
            margin-bottom: 15px;
        }
        .service-category-card p {
            color: #666;
            font-size: 15px;
            line-height: 1.7;
            margin-bottom: 20px;
        }
        .service-category-card .btn-style-one {
            text-decoration: none;
            color: #fff;
            background: #EB7700;
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: 600;
            transition: background 0.3s;
        }
         .service-category-card .btn-style-one:hover {
            background: #3361d1;
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
    const pageSlug = 'services'; // IMPORTANT: Set the slug for the current page

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
            case 'service_categories':
                 if (section.content_json && Array.isArray(section.content_json)) {
                    const cards = section.content_json.map(card => `
                        <div class="col-lg-4 col-md-6">
                            <div class="service-category-card">
                                <div class="icon-header"><i class="${card.icon || 'fa-solid fa-star'}"></i></div>
                                <h4>${card.title || ''}</h4>
                                <p>${card.description || ''}</p>
                                <a href="${card.url || '#'}" class="btn-style-one">Learn More</a>
                            </div>
                        </div>
                    `).join('');
                    content = `
                        <section class="content-section bg-light">
                            <div class="container">
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
            "title": "Our Services | Web Nexa Technologies",
            "meta_description": "Explore our comprehensive digital services, including SEO, creative design, paid media, content creation, and technology development.",
            "banner_image_url": "assets/images/services/service-bg-3.jpg",
            "banner_title": "Our Services",
            "breadcrumb_items": [
                {"label": "Home", "url": "index.php"},
                {"label": "Services", "url": "services.php"}
            ],
            "status": "published",
            "sections": [
                {
                    "section_order": 0,
                    "type": "hero",
                    "subtitle": "What We Do",
                    "title": "A Full Suite of Digital Services to Grow Your Business",
                    "content_json": {
                        "text": "<p>Web Nexa Technologies offers a complete range of digital services to help you succeed online. We combine strategy, creativity, and technology to deliver solutions that are not only effective but also aligned with your long-term goals. Explore our core service areas below.</p>"
                    }
                },
                {
                    "section_order": 1,
                    "type": "service_categories",
                    "content_json": [
                        {"icon": "fa-solid fa-chart-line", "title": "SEO Services", "description": "Enhance your organic visibility, drive targeted traffic, and climb search engine rankings with our expert SEO strategies.", "url": "seo-services.php"},
                        {"icon": "fa-solid fa-palette", "title": "Creative Services", "description": "From branding and web design to video production, our creative team brings your vision to life with stunning visuals.", "url": "creative-services.php"},
                        {"icon": "fa-solid fa-bullhorn", "title": "Paid Media", "description": "Achieve instant impact and a high return on investment with targeted advertising campaigns across multiple platforms.", "url": "paid-media-services.php"},
                        {"icon": "fa-solid fa-pen-nib", "title": "Content Services", "description": "Engage and inform your audience with compelling content that builds authority and drives conversions.", "url": "content-services.php"},
                        {"icon": "fa-solid fa-code", "title": "Technology Services", "description": "Custom websites, mobile apps, and software solutions built with cutting-edge technology to power your business.", "url": "technology-services.php"},
                         {"icon": "fa-solid fa-lightbulb", "title": "Our Solutions", "description": "Discover our industry-specific solutions tailored for E-commerce, Healthcare, and more to solve unique challenges.", "url": "solutions.php"}
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

