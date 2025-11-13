

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
                        <div class="stat-card" style="grid-column: span 2;">
                            <div class="stat-number">150+</div>
                            <div class="stat-label">Conversion rate</div>
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

            <!-- Slide 3: GrowthCo -->
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
                        <div class="stat-card" style="grid-column: span 2;">
                            <div class="stat-number">$2M+</div>
                            <div class="stat-label">Generated revenue</div>
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

<script>
    // Initialize carousel with custom options
    const carousel = document.querySelector('#caseStudyCarousel');
    const bsCarousel = new bootstrap.Carousel(carousel, {
        interval: 5000,
        wrap: true,
        touch: true
    });

    // Add custom styling for previous and next items visibility
    carousel.addEventListener('slide.bs.carousel', function (e) {
        const items = document.querySelectorAll('.carousel-item');
        items.forEach(item => {
            item.style.display = 'block';
        });
    });
</script>

