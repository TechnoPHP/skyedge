<?php
/**
 * @var \App\View\AppView $this
 */
$this->assign('title', 'About Us');
?>

<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="/">
            <img src="<?= $this->Url->image('SkyEdge-Logo.png') ?>" alt="Skyedge Travels logo" class="brand-logo">
            <span class="brand-text"><span>Skyedge</span> Travels</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                <li class="nav-item ms-lg-2"><a class="btn btn-primary" href="/contact">Book a Consultation</a></li>
            </ul>
        </div>
    </div>
</nav>

<header class="hero" style="background: linear-gradient(120deg, rgba(7,60,115,0.82), rgba(10,94,168,0.82)), url('https://images.unsplash.com/photo-1527631746610-bca00a040d60?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat; padding-top: 150px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="badge"><i class="fa-solid fa-circle-info"></i> About Skyedge Travels</div>
                <h1>Trusted travel guidance for every journey.</h1>
                <p>At Skyedge Travels, we bring together personalized travel planning, immigration support, passport services, and destination expertise under one roof.</p>
            </div>
        </div>
    </div>
</header>

<main>
    <section class="section">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title">A partner focused on care, clarity, and confidence</h2>
                    <p class="mb-3">We serve travelers, families, and professionals with a deep understanding of documentation requirements, visa regulations, and trip planning. Our mission is to make travel and migration support simple, transparent, and reliable.</p>
                    <p class="mb-0">From flight bookings and holiday packages to citizenship, spouse visa, passport, and OCI applications, we provide services that are practical, compliant, and tailored to your needs.</p>
                </div>
                <div class="col-lg-6">
                    <div class="info-card p-4 p-lg-5">
                        <h3 class="mb-4">Why people trust us</h3>
                        <div class="d-flex gap-3 mb-4">
                            <div class="feature-icon"><i class="fa-solid fa-user-check"></i></div>
                            <div>
                                <h4>Client-first approach</h4>
                                <p>We listen carefully and advise based on your exact situation and timeline.</p>
                            </div>
                        </div>
                        <div class="d-flex gap-3 mb-4">
                            <div class="feature-icon"><i class="fa-solid fa-file-lines"></i></div>
                            <div>
                                <h4>Accurate documentation</h4>
                                <p>We organize forms, check supporting documents, and reduce avoidable errors.</p>
                            </div>
                        </div>
                        <div class="d-flex gap-3">
                            <div class="feature-icon"><i class="fa-solid fa-route"></i></div>
                            <div>
                                <h4>End-to-end support</h4>
                                <p>From travel planning to final submission, we stay with you through the process.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-light">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="section-title">Our strengths</h2>
                    <p class="section-subtitle">We combine experience, responsiveness, and practical knowledge to deliver dependable support across travel and immigration services.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card h-100">
                        <div class="feature-icon"><i class="fa-solid fa-earth-americas"></i></div>
                        <h3>Global Travel</h3>
                        <p>Booking support for both international and domestic flights with smart value options.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card h-100">
                        <div class="feature-icon"><i class="fa-solid fa-passport"></i></div>
                        <h3>Visa & Passport</h3>
                        <p>Professional help for visitor visas, passport renewals, OCI, and document processing.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card h-100">
                        <div class="feature-icon"><i class="fa-solid fa-people-roof"></i></div>
                        <h3>Family & Migration</h3>
                        <p>Guidance for spouse visa, family immigration, PR applications, and relocation support.</p>
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
                <h5>Contact</h5>
                <ul class="list-unstyled">
                    <li><a href="tel:+919409970033">+91 940 997 0033</a></li>
                    <li><a href="tel:+919227100680">+91 922 710 0680</a></li>
                    <li><a href="mailto:info@skyedgetravels.com">info@skyedgetravels.com</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h5>Office</h5>
                <p># 108 Samanvay Saptrshi, Manjalpur, Vadodara, Gujarat, India - 390011</p>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <p>© <span id="year"></span> Skyedge Travels. All rights reserved.</p>
        </div>
    </div>
</footer>
