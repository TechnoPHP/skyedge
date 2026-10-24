<?php
/**
 * @var \App\View\AppView $this
 */
$this->assign('title', 'Sky Travel & Visa Services');
?>

<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="#home">
            <img src="<?= $this->Url->image('SkyEdge-Logo.png') ?>" alt="Skyedge Travels logo" class="brand-logo">
            <span class="brand-text"><span>Skyedge</span> Travels</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                <li class="nav-item ms-lg-2"><a class="btn btn-primary" href="/contact">Book a Consultation</a></li>
            </ul>
        </div>
    </div>
</nav>

<header class="hero" id="home">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <div class="badge"><i class="fa-solid fa-plane-departure"></i> Trusted Global Travel Partner</div>
                <h1>Flights, visas, immigration, and unforgettable journeys.</h1>
                <p>We help individuals, families, and business travelers with smooth flight bookings, visa support, passport assistance, immigration guidance, and customized holiday packages worldwide.</p>

                <div class="hero-actions">
                    <a href="/contact" class="btn btn-primary">Speak to an Expert</a>
                    <a href="/services" class="btn btn-outline-light">Explore Services</a>
                </div>

                <div class="hero-stats">
                    <div class="stat-box">
                        <strong>15+</strong>
                        <span>Years of experience</span>
                    </div>
                    <div class="stat-box">
                        <strong>50K+</strong>
                        <span>Travelers assisted</span>
                    </div>
                    <div class="stat-box">
                        <strong>120+</strong>
                        <span>Destinations</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="hero-card">
                    <div class="card-mini">
                        <small>Featured Service</small>
                        <strong>USA Family Immigration</strong>
                    </div>
                    <div class="card-mini">
                        <small>Popular Visa Support</small>
                        <strong>Canada Spouse Visa</strong>
                    </div>
                    <div class="card-mini">
                        <small>Passport Assistance</small>
                        <strong>India Passport & PCC</strong>
                    </div>
                    <div class="card-mini">
                        <small>Travel Packages</small>
                        <strong>Domestic + International FIT</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<main>
    <section class="section" id="services">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="section-title">Comprehensive travel and visa solutions</h2>
                    <p class="section-subtitle">From flight reservations to migration and passports, we support every stage of your travel and documentation journey with clarity, professionalism, and personal attention.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="icon-box"><i class="fa-solid fa-plane"></i></div>
                        <h3>Flight Bookings</h3>
                        <ul>
                            <li>International flights</li>
                            <li>Domestic air tickets</li>
                            <li>Best fare guidance</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="icon-box"><i class="fa-solid fa-passport"></i></div>
                        <h3>Visitor Visa Support</h3>
                        <ul>
                            <li>Tourist and business visas</li>
                            <li>Multiple country applications</li>
                            <li>Document review and filing</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="icon-box"><i class="fa-solid fa-house-heart"></i></div>
                        <h3>USA Immigration</h3>
                        <ul>
                            <li>Family immigration filing</li>
                            <li>Application preparation</li>
                            <li>Expert case guidance</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="icon-box"><i class="fa-solid fa-flag"></i></div>
                        <h3>Canada Immigration</h3>
                        <ul>
                            <li>Spouse visa support</li>
                            <li>Permanent residence assistance</li>
                            <li>Citizen and PR cases</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="icon-box"><i class="fa-solid fa-id-card"></i></div>
                        <h3>Passport Application Services</h3>
                        <ul>
                            <li>Indian passport applications</li>
                            <li>Police clearance certificates</li>
                            <li>Fast document support</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="icon-box"><i class="fa-solid fa-map-location-dot"></i></div>
                        <h3>FIT Tour Packages</h3>
                        <ul>
                            <li>Domestic holiday packages</li>
                            <li>International FIT itineraries</li>
                            <li>Custom travel planning</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-light" id="visa">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h2 class="section-title">Visa, passport, and migration support you can trust</h2>
                    <p class="mb-4">Whether you need to travel, relocate, or renew essential documents, our specialists provide step-by-step guidance for all categories of applications and renewals.</p>

                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="feature-card h-100">
                                <div class="feature-icon"><i class="fa-solid fa-file-circle-check"></i></div>
                                <h3>Visitor Visas</h3>
                                <p>Support for multiple countries and business, tourist, and family travel requirements.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-card h-100">
                                <div class="feature-icon"><i class="fa-solid fa-earth-americas"></i></div>
                                <h3>OCI & Visa Renewals</h3>
                                <p>Assistance for foreign citizens seeking passport renewals, India visa applications, and extensions.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-card h-100">
                                <div class="feature-icon"><i class="fa-solid fa-briefcase"></i></div>
                                <h3>Work & Family Cases</h3>
                                <p>Expert help for immigration filings, family reunification, and spouse visa applications.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-card h-100">
                                <div class="feature-icon"><i class="fa-solid fa-user-shield"></i></div>
                                <h3>Document Care</h3>
                                <p>Clear guidance for passports, police clearance certificates, OCI applications, and renewals.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="info-card p-4 p-lg-5">
                        <h3 class="mb-4">Why clients choose us</h3>
                        <div class="d-flex gap-3 mb-4">
                            <div class="feature-icon"><i class="fa-solid fa-award"></i></div>
                            <div>
                                <h4>Professional guidance</h4>
                                <p>Our team keeps you informed about eligibility, paperwork, and timelines for each case.</p>
                            </div>
                        </div>
                        <div class="d-flex gap-3 mb-4">
                            <div class="feature-icon"><i class="fa-solid fa-clock"></i></div>
                            <div>
                                <h4>Fast processing support</h4>
                                <p>We help organize forms, supporting documents, and appointments efficiently.</p>
                            </div>
                        </div>
                        <div class="d-flex gap-3">
                            <div class="feature-icon"><i class="fa-solid fa-headset"></i></div>
                            <div>
                                <h4>Personalized service</h4>
                                <p>From first inquiry to final approval, we provide attentive support for every traveler and family.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="process">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="section-title">How we work</h2>
                    <p class="section-subtitle">A simple process built around your goals, timeline, and documentation needs.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <h3>Consultation</h3>
                        <p>We discuss your travel, visa, or immigration requirements and advise the best path forward.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="process-step">
                        <div class="step-number">2</div>
                        <h3>Document Review</h3>
                        <p>We verify forms, prepare necessary documents, and check all details before submission.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="process-step">
                        <div class="step-number">3</div>
                        <h3>Application Filing</h3>
                        <p>We handle the filing process carefully to reduce errors and improve the chance of approval.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="process-step">
                        <div class="step-number">4</div>
                        <h3>Follow-up & Travel</h3>
                        <p>We stay involved until your application progresses and your travel plans are ready.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-light" id="packages">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="section-title">Customized travel packages</h2>
                    <p class="section-subtitle">Plan your next trip with confidence through our domestic and international holiday packages designed around your budget and preferences.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="icon-box"><i class="fa-solid fa-mountain-sun"></i></div>
                        <h3>Domestic Escapes</h3>
                        <p>Relaxing holidays, family tours, and short getaways within India.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="icon-box"><i class="fa-solid fa-globe"></i></div>
                        <h3>International FIT</h3>
                        <p>Flexible independent travel plans for destinations across the world.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <div class="icon-box"><i class="fa-solid fa-suitcase-rolling"></i></div>
                        <h3>Family & Group Trips</h3>
                        <p>Custom packages built for family vacations, group tours, and special occasions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2>Ready to plan your next move abroad or across the country?</h2>
                    <p>Talk to our team for travel planning, visa support, immigration help, or passport assistance.</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="#contact" class="btn btn-light btn-lg">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="contact">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="section-title">Contact our travel experts</h2>
                    <p class="section-subtitle">Reach out for bookings, visa guidance, passport support, or a personalized trip plan.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="contact-box">
                        <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                        <h4>Office</h4>
                        <p>Skyedge Travels</p>
                        <p># 108 Samanvay Saptrshi, Old More megastore campus, Nr. Monalisa, Manjalpur, Vadodara, Gujarat, India - 390011</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-box">
                        <div class="icon"><i class="fa-solid fa-phone"></i></div>
                        <h4>Call Us</h4>
                        <p>+91 940 997 0033</p>
                        <p>+91 922 710 0680</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-box">
                        <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                        <h4>Email</h4>
                        <p>visa@skyedgetravels.com</p>
                        <p>tickets@skyedgetravels.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <h5>Skyedge Travels</h5>
                <p>Professional travel, visa, immigration, passport, and holiday package services for individuals and families.</p>
            </div>
            <div class="col-lg-2">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h5>Popular Services</h5>
                <ul class="list-unstyled">
                    <li><a href="#visa">Visitor visas</a></li>
                    <li><a href="#visa">USA immigration</a></li>
                    <li><a href="#visa">Passport renewal</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h5>Contact</h5>
                <ul class="list-unstyled">
                    <li><a href="tel:+919409970033">+91 940 997 0033</a></li>
                    <li><a href="tel:+919227100680">+91 922 710 0680</a></li>
                    <li><a href="mailto:visa@skyedgetravels.com">visa@skyedgetravels.com</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <p>© <span id="year"></span> Skyedge Travels. All rights reserved.</p>
        </div>
    </div>
</footer>
