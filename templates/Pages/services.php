<?php
/**
 * @var \App\View\AppView $this
 */
$this->assign('title', 'Our Services');
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
                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link active" href="/services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                <li class="nav-item ms-lg-2"><a class="btn btn-primary" href="/contact">Book a Consultation</a></li>
            </ul>
        </div>
    </div>
</nav>

<header class="hero" style="background: linear-gradient(120deg, rgba(7,60,115,0.82), rgba(10,94,168,0.82)), url('https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat; padding-top: 150px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="badge"><i class="fa-solid fa-briefcase"></i> Our Core Services</div>
                <h1>End-to-end travel and migration support.</h1>
                <p>We provide dependable and personalized services to help clients travel, relocate, and process essential documentation with fewer hassles.</p>
            </div>
        </div>
    </div>
</header>

<main>
    <section class="section">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="icon-box"><i class="fa-solid fa-plane"></i></div>
                        <h3>Flight Bookings</h3>
                        <ul>
                            <li>International and domestic flight reservations</li>
                            <li>Budget and business fare guidance</li>
                            <li>Fast and reliable ticket assistance</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="icon-box"><i class="fa-solid fa-passport"></i></div>
                        <h3>Visitor Visa Services</h3>
                        <ul>
                            <li>Tourist and business visa applications</li>
                            <li>Multiple country documentation support</li>
                            <li>Application preparation and review</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="icon-box"><i class="fa-solid fa-house-heart"></i></div>
                        <h3>USA Immigration</h3>
                        <ul>
                            <li>USA family immigration filing support</li>
                            <li>Case review and application guidance</li>
                            <li>Professional filing assistance</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="icon-box"><i class="fa-solid fa-flag"></i></div>
                        <h3>Canada Visa Services</h3>
                        <ul>
                            <li>Spouse visa support</li>
                            <li>Permanent residence guidance</li>
                            <li>Citizen and PR case assistance</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="icon-box"><i class="fa-solid fa-id-card"></i></div>
                        <h3>Passport & PCC</h3>
                        <ul>
                            <li>Indian passport applications</li>
                            <li>Police clearance certificates</li>
                            <li>Renewal and document processing support</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="icon-box"><i class="fa-solid fa-suitcase-rolling"></i></div>
                        <h3>Travel Packages</h3>
                        <ul>
                            <li>Domestic holiday packages</li>
                            <li>International FIT and custom tours</li>
                            <li>Personalized trip planning</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="icon-box"><i class="fa-solid fa-globe"></i></div>
                        <h3>OCI & Renewals</h3>
                        <ul>
                            <li>Passport renewals</li>
                            <li>India visa applications</li>
                            <li>OCI applications and extensions</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="icon-box"><i class="fa-solid fa-file-circle-check"></i></div>
                        <h3>Document Assistance</h3>
                        <ul>
                            <li>Checklist preparation</li>
                            <li>Form completion support</li>
                            <li>Application tracking guidance</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="service-card">
                        <div class="icon-box"><i class="fa-solid fa-headset"></i></div>
                        <h3>Personalized Support</h3>
                        <ul>
                            <li>One-to-one consultation</li>
                            <li>Transparent guidance</li>
                            <li>Friendly and responsive service</li>
                        </ul>
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
                    <li><a href="mailto:visa@skyedgetravels.com">visa@skyedgetravels.com</a></li>
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
