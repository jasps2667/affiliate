<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Study Carousel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .case-study-carousel {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .carousel-item {
            padding: 0 15px;
        }

        .case-study-card {
            background: #0f1419;
            border-radius: 24px;
            padding: 50px;
            color: white;
            min-height: 500px;
            position: relative;
            overflow: hidden;
        }

        .case-study-badge {
            background: rgba(74, 222, 128, 0.2);
            color: #4ade80;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 14px;
            display: inline-block;
            margin-bottom: 30px;
        }

        .company-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 40px;
        }

        .company-logo img {
            width: 30px;
            height: 30px;
        }

        .case-study-title {
            font-size: 42px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 30px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 30px;
            text-align: center;
        }

        .stat-number {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.7);
        }

        .testimonial-text {
            font-size: 16px;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 25px;
        }

        .author-info {
            font-size: 15px;
        }

        .author-name {
            font-weight: 600;
            margin-bottom: 5px;
        }

        .author-title {
            color: rgba(255, 255, 255, 0.6);
            font-size: 14px;
        }

        .cta-button {
            background: #3b82f6;
            color: white;
            padding: 12px 28px;
            border-radius: 8px;
            border: none;
            font-weight: 600;
            font-size: 15px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .cta-button:hover {
            background: #2563eb;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            opacity: 1;
        }

        .carousel-control-prev {
            left: -70px;
        }

        .carousel-control-next {
            right: -70px;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .carousel-indicators {
            bottom: -50px;
        }

        .carousel-indicators button {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
        }

        .carousel-indicators button.active {
            background: white;
        }

        .decorative-image {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 300px;
            height: 300px;
            opacity: 0.3;
        }
    </style>
</head>
<body>

<div class="case-study-carousel">
    <div id="caseStudyCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#caseStudyCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#caseStudyCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#caseStudyCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <!-- Slide 1: Neuroflash -->
            <div class="carousel-item active" data-bs-interval="5000">
                <div class="case-study-card">
                    <span class="case-study-badge">Case Study</span>
                    
                    <div class="company-logo">
                        <span style="color: #3b82f6;">⚡</span>
                        <span>neuroflash</span>
                    </div>

                    <h2 class="case-study-title">How Neutoflash gained 8000 new users</h2>

                    <div class="stats-grid">
                        <div class="stat-card">
                            <div class="stat-number">8,000</div>
                            <div class="stat-label">New users</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-number">100</div>
                            <div class="stat-label">New paying customers/month</div>
                        </div>
                        <div class="stat-card" style="grid-column: span 2;">
                            <div class="stat-number">30+</div>
                            <div class="stat-label">Promoters/month</div>
                        </div>
                    </div>

                    <p class="testimonial-text">
                        "It has been gotten alot easier since the launch of V2 for sure! Honestly our work with FirstPromoter is currently very low since we have everything setup: new affiliate got onaboarded automatically and we offer to have a call with them. Rest of the work is go through new applications once a week, checkout data once a month, sent out emails for affiliate if we do campaign/product release."
                    </p>

                    <div class="author-info">
                        <div class="author-name">— Julia Schlocker</div>
                        <div class="author-title">Product OPs manager at neuroflash</div>
                    </div>

                    <button class="cta-button mt-4">Read Case Study</button>
                </div>
            </div>

            <!-- Slide 2: Submagic -->
            <div class="carousel-item" data-bs-interval="5000">
                <div class="case-study-card">
                    <span class="case-study-badge">Case Study</span>
                    
                    <div class="company-logo">
                        <span style="color: #f97316;">📱</span>
                        <span>submagic</span>
                    </div>

                    <h2 class="case-study-title">Submagic scaled to 25,000 users with FirstPromoter</h2>

                    <div class="stats-grid">
                        <div class="stat-card">
                            <div class="stat-number">25,000</div>
                            <div class="stat-label">Active users</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-number">500+</div>
                            <div class="stat-label">Affiliates</div>
                        </div>
                    </div>

                    <p class="testimonial-text">
                        "FirstPromoter has been great, been loving it much more cleaner and the new way of counting game changed us. Tracking is great and shows every thing that needs to be sent!"
                    </p>

                    <div class="author-info">
                        <div class="author-name">— David Zitoun</div>
                        <div class="author-title">Co-founder of Submagic</div>
                    </div>

                    <button class="cta-button mt-4">Read Case Study</button>
                </div>
            </div>

            <!-- Slide 3: Example Company -->
            <div class="carousel-item" data-bs-interval="5000">
                <div class="case-study-card">
                    <span class="case-study-badge">Case Study</span>
                    
                    <div class="company-logo">
                        <span style="color: #8b5cf6;">🚀</span>
                        <span>GrowthCo</span>
                    </div>

                    <h2 class="case-study-title">GrowthCo tripled revenue with affiliate marketing</h2>

                    <div class="stats-grid">
                        <div class="stat-card">
                            <div class="stat-number">3x</div>
                            <div class="stat-label">Revenue growth</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-number">150+</div>
                            <div class="stat-label">Active promoters</div>
                        </div>
                    </div>

                    <p class="testimonial-text">
                        "The automation and tracking capabilities have completely transformed how we manage our affiliate program. What used to take hours now happens automatically, and our affiliates love the transparency."
                    </p>

                    <div class="author-info">
                        <div class="author-name">— Sarah Johnson</div>
                        <div class="author-title">Marketing Director at GrowthCo</div>
                    </div>

                    <button class="cta-button mt-4">Read Case Study</button>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#caseStudyCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#caseStudyCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>