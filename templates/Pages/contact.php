<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Form\ContactForm|null $contact
 */
$this->assign('title', 'Contact Us');
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
                <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
                <li class="nav-item"><a class="nav-link active" href="/contact">Contact</a></li>
                <li class="nav-item ms-lg-2"><a class="btn btn-primary" href="/contact">Book a Consultation</a></li>
            </ul>
        </div>
    </div>
</nav>

<header class="hero" style="background: linear-gradient(120deg, rgba(7,60,115,0.82), rgba(10,94,168,0.82)), url('https://images.unsplash.com/photo-1467269204594-9661b134dd2b?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat; padding-top: 150px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="badge"><i class="fa-solid fa-address-book"></i> Contact Us</div>
                <h1>Speak with our travel consultants today.</h1>
                <p>We are ready to help with visa guidance, flight bookings, immigration support, and custom travel planning.</p>
            </div>
        </div>
    </div>
</header>

<main>
    <section class="section">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="contact-box">
                        <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                        <h4>Office Address</h4>
                        <p># 108 Samanvay Saptrshi, Old More megastore campus, Nr. Monalisa, Manjalpur, Vadodara, Gujarat, India - 390011</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-box">
                        <div class="icon"><i class="fa-solid fa-phone"></i></div>
                        <h4>Call Us</h4>
                        <p><a href="tel:+919409970033">+91 940 997 0033</a></p>
                        <p><a href="tel:+919227100680">+91 922 710 0680</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-box">
                        <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                        <h4>Email</h4>
                        <p><a href="mailto:visa@skyedgetravels.com">visa@skyedgetravels.com</a></p>
                        <p><a href="mailto:tickets@skyedgetravels.com">tickets@skyedgetravels.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="info-card p-4 p-lg-5" id="enquiry">
                        <h2 class="section-title text-center">Request a consultation</h2>
                        <p class="text-center mb-4">Tell us about your travel, visa, or immigration requirement, and our team will guide you to the best next step.</p>
                        <?= $this->Flash->render() ?>
                        <?= $this->Form->create($contact ?? null, ['url' => '/contact#enquiry']) ?>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="name">Full Name</label>
                                    <?= $this->Form->text('name', ['id' => 'name', 'class' => 'form-control', 'placeholder' => 'Your name', 'required' => true, 'maxlength' => 100]) ?>
                                    <?= $this->Form->error('name') ?>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="phone">Phone Number</label>
                                    <?= $this->Form->tel('phone', ['id' => 'phone', 'class' => 'form-control', 'placeholder' => 'Your contact number', 'maxlength' => 30]) ?>
                                    <?= $this->Form->error('phone') ?>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="email">Email</label>
                                    <?= $this->Form->email('email', ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'Your email address', 'required' => true]) ?>
                                    <?= $this->Form->error('email') ?>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="message">Your Requirement</label>
                                    <?= $this->Form->textarea('message', ['id' => 'message', 'class' => 'form-control', 'rows' => 5, 'placeholder' => 'Tell us what service you need', 'required' => true, 'maxlength' => 5000]) ?>
                                    <?= $this->Form->error('message') ?>
                                </div>
                                <div class="contact-website" aria-hidden="true">
                                    <label for="website">Leave this field empty</label>
                                    <?= $this->Form->text('website', ['id' => 'website', 'tabindex' => '-1', 'autocomplete' => 'off']) ?>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Send Enquiry</button>
                                </div>
                            </div>
                        <?= $this->Form->end() ?>
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
