
@extends('layouts.app')

@section('title', 'Dashboard | UCC IT Portal')
@section('header', 'Student Dashboard')

@section('content')

<style>
    /* HERO BANNER */

    .hero-banner {
        position: relative;
        display: flex;
        align-items: center;
        min-height: 225px;
        overflow: hidden;
        border-radius: 16px;
        background: linear-gradient(120deg, #061e3d, #0b356c);
        color: white;
        margin-bottom: 24px;
        box-shadow: 0 5px 20px rgba(8,43,80,.08);
    }

    .hero-text {
        position: relative;
        z-index: 3;
        padding: 32px 42px;
        width: 68%;
    }

    .hero-text h1 {
        font-size: clamp(26px, 3vw, 42px);
        font-weight: 750;
        line-height: 1.12;
        margin-bottom: 8px;
    }

    .hero-text h2 {
        color: #f0c54b;
        font-size: clamp(17px, 2vw, 27px);
        margin-bottom: 12px;
        max-width: 620px;
    }

    .hero-text p {
        font-size: 19px;
        font-style: italic;
        color: #edf3fc;
    }

    .hero-photo {
        position: absolute;
        right: 0;
        top: 0;
        width: 38%;
        height: 100%;
        object-fit: cover;
        z-index: 1;
    }

    .hero-curve {
        position: absolute;
        right: 35%;
        top: -65%;
        width: 90px;
        height: 230%;
        background: #f0c54b;
        transform: rotate(-28deg);
        border-radius: 50%;
        z-index: 2;
        pointer-events: none;
    }

    /* QUICK NAVIGATION */

    .quick-nav {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 16px;
        margin-bottom: 28px;
    }

    .quick-link {
        display: flex;
        align-items: center;
        gap: 15px;
        background: white;
        padding: 22px 20px;
        border-radius: 14px;
        border: 1px solid #dce5f3;
        color: #082b50;
        box-shadow: 0 5px 15px rgba(8,43,80,.06);
        transition: .2s ease;
        min-width: 0;
    }

    .quick-link:hover {
        transform: translateY(-3px);
        border-color: #f0c54b;
    }

    .quick-link > i:first-child {
        font-size: 30px;
        flex-shrink: 0;
    }

    .quick-link span {
        font-size: 16px;
        font-weight: 650;
        flex: 1;
    }

    .quick-arrow {
        font-size: 16px;
    }

    /* WELCOME SECTION */

    .welcome-row {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 25px;
        align-items: center;
        margin-bottom: 28px;
    }

    .welcome-message h2 {
        color: #082b50;
        font-size: clamp(27px, 3vw, 42px);
        margin-bottom: 10px;
    }

    .welcome-message p {
        color: #50617e;
        font-size: 19px;
        line-height: 1.4;
    }

    .academic-panel {
        background: linear-gradient(135deg, #e6edf8, #f2f6fc);
        border-radius: 15px;
        padding: 24px;
        display: flex;
        align-items: flex-start;
        gap: 18px;
    }

    .academic-panel > i {
        color: #082b50;
        font-size: 42px;
    }

    .academic-panel p {
        color: #082b50;
        font-size: 17px;
        font-weight: 600;
    }

    .academic-panel strong {
        display: block;
        color: #082b50;
        font-size: 28px;
        margin: 4px 0 12px;
    }

    .academic-panel a {
        display: inline-block;
        background: #f0c54b;
        color: #082b50;
        padding: 9px 24px;
        border-radius: 25px;
        font-weight: 700;
        font-size: 14px;
    }

    /* FEATURE CARDS */

    .feature-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 22px;
        margin-bottom: 27px;
    }

    .feature-card {
        min-height: 210px;
        padding: 25px;
        border-radius: 15px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        overflow: hidden;
        box-shadow: 0 5px 16px rgba(8,43,80,.06);
    }

    .feature-card.navy {
        background: linear-gradient(140deg, #082b50, #061e3d);
        color: white;
    }

    .feature-card.gold {
        background: linear-gradient(135deg, #f0c54b, #e8b93e);
        color: #082b50;
    }

    .feature-card > i {
        font-size: 34px;
        margin-bottom: 10px;
    }

    .feature-card h3 {
        font-size: 17px;
        margin-bottom: 8px;
    }

    .feature-number {
        font-size: 33px;
        font-weight: 800;
    }

    .feature-card p {
        font-size: 15px;
    }

    .feature-button {
        display: block;
        border: 1px solid currentColor;
        border-radius: 25px;
        padding: 9px 12px;
        text-align: center;
        color: inherit;
        font-size: 13px;
        font-weight: 650;
        margin-top: 18px;
        transition: .2s ease;
    }

    .feature-button:hover {
        background: rgba(255,255,255,.15);
    }

    /* SOCIAL MEDIA BAR */

    .social-bar {
        background: linear-gradient(120deg, #e8effa, #f3f6fc);
        border: 1px solid #dce5f3;
        border-radius: 15px;
        padding: 22px 26px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
    }

    .social-info {
        display: flex;
        align-items: center;
        gap: 18px;
    }

    .social-info > i {
        color: #082b50;
        font-size: 38px;
    }

    .social-info h3 {
        color: #082b50;
        font-size: 17px;
        margin-bottom: 4px;
    }

    .social-info p {
        color: #50617e;
        font-size: 13px;
    }

    .social-icons {
        display: flex;
        align-items: center;
        gap: 14px;
    }

    .social-icons a {
        width: 39px;
        height: 39px;
        background: #082b50;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 19px;
        transition: .2s ease;
    }

    .social-icons a:hover {
        background: #d6ad45;
        color: #082b50;
        transform: translateY(-3px);
    }

    /* RESPONSIVE */

    @media (max-width: 1200px) {
        .quick-nav,
        .feature-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (max-width: 768px) {
        .hero-banner {
            min-height: 240px;
        }

        .hero-text {
            width: 100%;
            padding: 30px 25px;
        }

        .hero-photo {
            width: 100%;
            opacity: .18;
        }

        .hero-curve {
            display: none;
        }

        .welcome-row {
            grid-template-columns: 1fr;
        }

        .welcome-message p {
            font-size: 16px;
        }

        .social-bar {
            flex-direction: column;
            align-items: flex-start;
        }

        .social-icons {
            flex-wrap: wrap;
        }
    }

    @media (max-width: 480px) {
        .quick-nav,
        .feature-grid {
            grid-template-columns: 1fr;
        }

        .hero-text h1 {
            font-size: 26px;
        }

        .hero-text h2 {
            font-size: 19px;
        }

        .academic-panel {
            padding: 18px;
        }
    }
</style>

<!-- UNIVERSITY BANNER -->

<section class="hero-banner">

    <div class="hero-text">
        <h1>
            University of the<br>
            Commonwealth Caribbean
        </h1>

        <h2>Information Technology Student Portal</h2>

       <p>Fostering Leadership &amp; Innovation</p>
    </div>

    <div class="hero-curve"></div>

    <img
        src="{{ asset('images/ucc-campus.jpg') }}"
        alt="University campus"
        class="hero-photo"
    >

</section>

<!-- QUICK NAVIGATION -->

<section class="quick-nav">

    <a href="/courses" class="quick-link">
        <i class="fa-solid fa-graduation-cap"></i>
        <span>Courses</span>
        <i class="fa-solid fa-chevron-right quick-arrow"></i>
    </a>

    <a href="/directory" class="quick-link">
        <i class="fa-solid fa-users"></i>
        <span>Faculty Directory</span>
        <i class="fa-solid fa-chevron-right quick-arrow"></i>
    </a>

    <a href="/admissions" class="quick-link">
        <i class="fa-solid fa-file-lines"></i>
        <span>Admissions</span>
        <i class="fa-solid fa-chevron-right quick-arrow"></i>
    </a>

    <a href="/social-media" class="quick-link">
        <i class="fa-solid fa-share-nodes"></i>
        <span>Social Media</span>
        <i class="fa-solid fa-chevron-right quick-arrow"></i>
    </a>

</section>

<!-- WELCOME AND ACADEMIC YEAR -->

<section class="welcome-row">

    <div class="welcome-message">
        <h2>Welcome to UCC IT Portal!</h2>

        <p>
            Your one-stop portal for information, resources and
            opportunities in the School of Mathematics,
            Science and Technology.
        </p>
    </div>

    <div class="academic-panel">
        <i class="fa-regular fa-calendar-days"></i>

        <div>
            <p>Academic Year</p>
            <strong>2026 – 2027</strong>

            <a href="https://www.ucc.edu.jm/"
               target="_blank"
               rel="noopener noreferrer">
                Go UCC!
            </a>
        </div>
    </div>

</section>

<!-- FEATURE CARDS -->

<section class="feature-grid">

    <div class="feature-card navy">
        <div>
            <i class="fa-solid fa-graduation-cap"></i>
            <div class="feature-number">10</div>
            <p>Courses Available</p>
        </div>

        <a href="/courses" class="feature-button">
            View Courses &nbsp; →
        </a>
    </div>

    <div class="feature-card gold">
        <div>
            <i class="fa-solid fa-users"></i>
            <h3>Faculty & Staff</h3>
            <div class="feature-number">4</div>
        </div>

        <a href="/directory" class="feature-button">
            View Directory &nbsp; →
        </a>
    </div>

    <div class="feature-card navy">
        <div>
            <i class="fa-solid fa-file-lines"></i>
            <h3>Admissions</h3>
            <p>Explore admission opportunities</p>
        </div>

        <a href="/admissions" class="feature-button">
            Apply Today &nbsp; →
        </a>
    </div>

    <div class="feature-card gold">
        <div>
            <i class="fa-solid fa-star"></i>
            <h3>Social Media</h3>
            <p>Stay connected with UCC for the latest
    news, events and announcements.</p>
        </div>

        <a href="/social-media" class="feature-button">
            Explore Social Media &nbsp; →
        </a>
    </div>

</section>

<!-- SOCIAL MEDIA -->

<section class="social-bar">

    <div class="social-info">
        <i class="fa-solid fa-globe"></i>

        <div>
            <h3>Stay Connected</h3>
            <p>
                Follow us on social media for the latest
                updates, events and announcements.
            </p>
        </div>
    </div>

    <div class="social-icons">

        <a href="https://www.facebook.com/uccjamaica"
           target="_blank" rel="noopener noreferrer"
           aria-label="Facebook">
            <i class="fa-brands fa-facebook-f"></i>
        </a>

        <a href="https://www.instagram.com/uccjamaica/"
           target="_blank" rel="noopener noreferrer"
           aria-label="Instagram">
            <i class="fa-brands fa-instagram"></i>
        </a>

        <a href="https://www.youtube.com/uccjamaica"
           target="_blank" rel="noopener noreferrer"
           aria-label="YouTube">
            <i class="fa-brands fa-youtube"></i>
        </a>

        <a href="https://www.linkedin.com/company/uccjamaica"
           target="_blank" rel="noopener noreferrer"
           aria-label="LinkedIn">
            <i class="fa-brands fa-linkedin-in"></i>
        </a>

        <a href="https://x.com/UCCjamaica"
           target="_blank" rel="noopener noreferrer"
           aria-label="X">
            <i class="fa-brands fa-x-twitter"></i>
        </a>

    </div>

</section>

@endsection

@section('fab')
    <a href="mailto:ithod@ucc.edu.jm"
       class="email-fab"
       aria-label="Email Head of Department"
       title="Email Head of Department">
        <i class="fa-regular fa-envelope"></i>
    </a>
@endsection

