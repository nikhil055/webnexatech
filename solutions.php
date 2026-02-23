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
        /* Solution Card Styling */
        .solution-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            margin-bottom: 30px;
            transition: all 0.3s ease-in-out;
            border: 1px solid #e9ecef;
            overflow: hidden;
        }
        .solution-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(60, 114, 252, 0.2);
        }
        .solution-card .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        .solution-card .card-body {
            padding: 25px;
            text-align: center;
        }
        .solution-card h4 {
            font-weight: 700;
            margin-bottom: 10px;
        }
        .solution-card p {
            color: #666;
            font-size: 15px;
            line-height: 1.7;
            margin-bottom: 20px;
        }
        .solution-card .btn-style-one {
            text-decoration: none;
            color: #fff;
            background: #EB7700;
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: 600;
            transition: background 0.3s;
        }
         .solution-card .btn-style-one:hover {
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
    const pageSlug = 'solutions'; // IMPORTANT: Set the slug for the current page

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
            case 'solution_cards':
                 if (section.content_json && Array.isArray(section.content_json)) {
                    const cards = section.content_json.map(card => `
                        <div class="col-lg-4 col-md-6">
                            <div class="solution-card">
                                <img src="${card.image_url || 'assets/images/placeholder.jpg'}" class="card-img-top" alt="${card.title}">
                                <div class="card-body">
                                    <h4>${card.title || ''}</h4>
                                    <p>${card.description || ''}</p>
                                    <a href="${card.url || '#'}" class="btn-style-one">Explore Solution</a>
                                </div>
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
            "title": "Our Solutions | Web Nexa Technologies",
            "meta_description": "Discover our tailored technology and marketing solutions designed for specific industries, including E-commerce and Healthcare.",
            "banner_image_url": "assets/images/services/service-bg-3.jpg",
            "banner_title": "Our Solutions",
            "breadcrumb_items": [
                {"label": "Home", "url": "index.php"},
                {"label": "Solutions", "url": "solutions.php"}
            ],
            "status": "published",
            "sections": [
                {
                    "section_order": 0,
                    "type": "hero",
                    "subtitle": "Purpose-Built for Your Needs",
                    "title": "Tailored Solutions for Your Industry",
                    "content_json": {
                        "text": "<p>We go beyond one-size-fits-all services by offering specialized solutions crafted for the unique challenges and opportunities within your industry. Our solutions combine our expertise in technology and marketing to deliver powerful, integrated systems that drive growth and create a competitive advantage.</p>"
                    }
                },
                {
                    "section_order": 1,
                    "type": "solution_cards",
                    "content_json": [
                        {"title": "E-commerce Solutions", "description": "Comprehensive solutions for online retail, from apparel and jewellery to furniture and cosmetics.", "url": "#", "image_url": "assets/images/header-icon/Industries/eCommerce (2).png"},
                        {"title": "Healthcare Solutions", "description": "Specialized software and management systems for clinics and hospitals to improve patient care and operational efficiency.", "url": "#", "image_url": "assets/images/header-icon/solution/Hospital Management.png"}
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

