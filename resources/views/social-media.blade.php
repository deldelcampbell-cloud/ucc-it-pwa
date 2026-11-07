
@extends('layouts.app')

@section('title', 'Social Media | UCC IT Portal')

@section('header', 'Social Media')

@section('content')

<style>
    /* SOCIAL MEDIA HEADER */

    .social-header {
        background: linear-gradient(120deg, #061e3d, #103a6c);
        color: white;
        padding: 35px;
        border-radius: 16px;
        border-left: 6px solid #f0c54b;
        margin-bottom: 25px;
    }

    .social-header h1 {
        color: white;
        font-size: 28px;
        margin-bottom: 12px;
    }

    .social-header p {
        color: #e0e9f5;
        font-size: 15px;
        line-height: 1.7;
    }

    /* SOCIAL MEDIA GRID */

    .social-grid {
        display: grid;
        grid-template-columns: repeat(
            auto-fit,
            minmax(min(100%, 230px), 1fr)
        );
        gap: 20px;
        margin-bottom: 35px;
    }

    .social-card {
        background: white;
        border: 1px solid #dce5f3;
        border-radius: 14px;
        padding: 26px;
        box-shadow: 0 4px 15px rgba(8,43,80,.05);
        text-align: center;
        transition: transform .2s ease,
                    box-shadow .2s ease;
    }

    .social-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 24px rgba(8,43,80,.1);
    }

    .social-icon {
        width: 65px;
        height: 65px;
        border-radius: 16px;
        background: #e8effa;
        color: #082b50;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 30px;
        margin: 0 auto 18px;
    }

    .social-card h3 {
        color: #082b50;
        font-size: 19px;
        margin-bottom: 10px;
    }

    .social-card p {
        color: #64748b;
        font-size: 14px;
        line-height: 1.7;
        margin-bottom: 18px;
    }

    .social-button {
        display: inline-block;
        background: #f0c54b;
        color: #082b50;
        padding: 11px 18px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 13px;
        font-weight: 700;
        transition: .2s ease;
    }

    .social-button:hover {
        background: #e3b53c;
        transform: translateY(-2px);
    }

    /* EMBEDDED CONTENT */

    .social-section-title {
        color: #082b50;
        font-size: 23px;
        margin-bottom: 20px;
    }

    .embed-section {
        background: white;
        border: 1px solid #dce5f3;
        padding: 28px;
        margin-bottom: 25px;
        border-radius: 14px;
        box-shadow: 0 4px 15px rgba(8,43,80,.05);
        min-width: 0;
    }

    .embed-section h2 {
        color: #082b50;
        font-size: 21px;
        margin-bottom: 12px;
    }

    .embed-section p {
        color: #50617e;
        font-size: 14px;
        line-height: 1.7;
    }

    .embed-container {
        width: 100%;
        max-width: 650px;
        margin: 22px auto;
        overflow: hidden;
        border-radius: 12px;
        background: #f5f8fd;
    }

    .embed-container iframe {
        display: block;
        width: 100%;
        border: none;
        border-radius: 10px;
    }

    .facebook-frame {
        height: 600px;
    }

    .youtube-frame {
        aspect-ratio: 16 / 9;
        height: auto;
    }

    .instagram-frame {
        height: 500px;
    }

    .embed-note {
        color: #64748b;
        font-size: 13px;
        line-height: 1.7;
    }

    /* RESPONSIVE DESIGN */

    @media (max-width: 768px) {
        .social-header,
        .embed-section {
            padding: 23px;
        }

        .social-header h1 {
            font-size: 24px;
        }

        .social-section-title {
            font-size: 21px;
        }
    }
</style>

<!-- SOCIAL MEDIA HEADER -->

<section class="social-header">

    <h1>
        <i class="fa-solid fa-share-nodes"></i>
        Connect With UCC
    </h1>

    <p>
        Stay connected with the University of the Commonwealth
        Caribbean. Follow UCC for university news, events,
        student activities, announcements and educational videos.
    </p>

</section>

<!-- SOCIAL MEDIA LINKS -->

<div class="social-grid">

    <!-- FACEBOOK -->

    <div class="social-card">

        <div class="social-icon">
            <i class="fa-brands fa-facebook-f"></i>
        </div>

        <h3>Facebook</h3>

        <p>News, photos, events and university videos.</p>

        <a
            href="https://www.facebook.com/uccjamaica"
            target="_blank"
            rel="noopener noreferrer"
            class="social-button">
            Visit Facebook →
        </a>

    </div>

    <!-- INSTAGRAM -->

    <div class="social-card">

        <div class="social-icon">
            <i class="fa-brands fa-instagram"></i>
        </div>

        <h3>Instagram</h3>

        <p>Photos, videos and campus activities.</p>

        <a
            href="https://www.instagram.com/uccjamaica/"
            target="_blank"
            rel="noopener noreferrer"
            class="social-button">
            Visit Instagram →
        </a>

    </div>

    <!-- YOUTUBE -->

    <div class="social-card">

        <div class="social-icon">
            <i class="fa-brands fa-youtube"></i>
        </div>

        <h3>YouTube</h3>

        <p>University videos and presentations.</p>

        <a
            href="https://www.youtube.com/uccjamaica"
            target="_blank"
            rel="noopener noreferrer"
            class="social-button">
            Visit YouTube →
        </a>

    </div>

    <!-- X / TWITTER -->

    <div class="social-card">

        <div class="social-icon">
            <i class="fa-brands fa-x-twitter"></i>
        </div>

        <h3>X (Twitter)</h3>

        <p>University updates and announcements.</p>

        <a
            href="https://x.com/UCCjamaica"
            target="_blank"
            rel="noopener noreferrer"
            class="social-button">
            Visit X →
        </a>

    </div>

    <!-- LINKEDIN -->

    <div class="social-card">

        <div class="social-icon">
            <i class="fa-brands fa-linkedin-in"></i>
        </div>

        <h3>LinkedIn</h3>

        <p>Professional and university updates.</p>

        <a
            href="https://www.linkedin.com/company/uccjamaica"
            target="_blank"
            rel="noopener noreferrer"
            class="social-button">
            Visit LinkedIn →
        </a>

    </div>

    <!-- TIKTOK -->

    <div class="social-card">

        <div class="social-icon">
            <i class="fa-brands fa-tiktok"></i>
        </div>

        <h3>TikTok</h3>

        <p>Campus life and student content.</p>

        <a
            href="https://www.tiktok.com/@uccjamaica"
            target="_blank"
            rel="noopener noreferrer"
            class="social-button">
            Visit TikTok →
        </a>

    </div>

    <!-- THREADS -->

    <div class="social-card">

        <div class="social-icon">
            <i class="fa-brands fa-threads"></i>
        </div>

        <h3>Threads</h3>

        <p>University news and community updates.</p>

        <a
            href="https://www.threads.net/@uccjamaica"
            target="_blank"
            rel="noopener noreferrer"
            class="social-button">
            Visit Threads →
        </a>

    </div>

</div>

<!-- SOCIAL MEDIA EMBEDS -->

<h2 class="social-section-title">
    <i class="fa-solid fa-photo-film"></i>
    UCC Social Media Highlights
</h2>

<!-- FACEBOOK EMBED -->

<section class="embed-section">

    <h2>
        <i class="fa-brands fa-facebook"></i>
        UCC on Facebook
    </h2>

    <p>
        View updates from UCC's Facebook page.
    </p>

    <div class="embed-container">

        <iframe
            class="facebook-frame"
            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fuccjamaica&amp;tabs=timeline&amp;width=500&amp;height=600&amp;small_header=true&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true"
            title="UCC Facebook Feed"
            loading="lazy"
            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
        </iframe>

    </div>

    <p class="embed-note">
        If the Facebook feed does not load,
        use the Facebook link above.
        Facebook may restrict embedded content.
    </p>

</section>

<!-- YOUTUBE EMBED -->

<section class="embed-section">

    <h2>
        <i class="fa-brands fa-youtube"></i>
        UCC on YouTube
    </h2>

    <p>
        Watch a video from UCC's YouTube channel.
    </p>

    <div class="embed-container">

        <iframe
            class="youtube-frame"
            src="https://www.youtube.com/embed/UtZwm6pc_GM"
            title="UCC Commencement 2025"
            loading="lazy"
            allowfullscreen>
        </iframe>

    </div>

    <p class="embed-note">
        Explore more university videos using
        the YouTube link above.
    </p>

</section>

<!-- INSTAGRAM EMBED -->

<section class="embed-section">

    <h2>
        <i class="fa-brands fa-instagram"></i>
        UCC on Instagram
    </h2>

    <p>
        Explore UCC's photographs, videos,
        student activities and university events.
    </p>

    <div class="embed-container">

        <iframe
            class="instagram-frame"
            src="https://www.instagram.com/uccjamaica/embed"
            title="UCC Instagram"
            loading="lazy">
        </iframe>

    </div>

    <p class="embed-note">
        Instagram may restrict profile embeds in some browsers.
        You can still visit the official profile using
        the Instagram link above.
    </p>

</section>

@endsection
