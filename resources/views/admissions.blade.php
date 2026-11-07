
@extends('layouts.app')

@section('title', 'Admissions | UCC IT Portal')

@section('header', 'Admissions')

@section('content')

<style>
    /* ADMISSIONS HEADER */

    .admissions-header {
        background: linear-gradient(120deg, #061e3d, #103a6c);
        color: white;
        padding: 35px;
        border-radius: 16px;
        border-left: 6px solid #f0c54b;
        margin-bottom: 25px;
    }

    .admissions-header h1 {
        font-size: 28px;
        margin-bottom: 12px;
    }

    .admissions-header p {
        color: #e0e9f5;
        font-size: 15px;
        line-height: 1.7;
    }

    /* ADMISSIONS CARDS */

    .admissions-card {
        background: white;
        border: 1px solid #dce5f3;
        border-radius: 14px;
        padding: 30px;
        margin-bottom: 24px;
        box-shadow: 0 4px 15px rgba(8,43,80,.05);
    }

    .admissions-card h2 {
        color: #082b50;
        font-size: 22px;
        margin-bottom: 15px;
    }

    .admissions-card p,
    .admissions-card li {
        color: #50617e;
        font-size: 15px;
        line-height: 1.8;
    }

    .admissions-card ul {
        padding-left: 23px;
        margin-top: 12px;
    }

    /* PROGRAMME LINKS */

    .programme-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 20px;
        margin-top: 20px;
    }

    .programme-item {
        background: #f5f8fd;
        border: 1px solid #dce5f3;
        border-radius: 12px;
        padding: 23px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .programme-item i {
        color: #082b50;
        font-size: 28px;
        margin-bottom: 15px;
    }

    .programme-item h3 {
        color: #082b50;
        font-size: 18px;
        margin-bottom: 10px;
    }

    .programme-item p {
        flex: 1;
        font-size: 14px;
        line-height: 1.7;
    }

    /* BUTTONS */

    .apply-button {
        display: inline-block;
        background: #f0c54b;
        color: #082b50;
        padding: 12px 20px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 700;
        text-decoration: none;
        margin-top: 20px;
        transition: .2s ease;
    }

    .apply-button:hover {
        background: #e3b53c;
        transform: translateY(-2px);
    }

    /* APPLICATION SECTION */

    .application-card {
        background: linear-gradient(120deg, #082b50, #103a6c);
        border-radius: 14px;
        padding: 30px;
        margin-bottom: 24px;
        color: white;
    }

    .application-card h2 {
        color: #f0c54b;
        font-size: 22px;
        margin-bottom: 15px;
    }

    .application-card p {
        color: #e0e9f5;
        font-size: 15px;
        line-height: 1.8;
    }

    /* MOBILE */

    @media (max-width: 768px) {
        .programme-grid {
            grid-template-columns: 1fr;
        }

        .admissions-header,
        .admissions-card,
        .application-card {
            padding: 23px;
        }

        .admissions-header h1 {
            font-size: 24px;
        }
    }
</style>

<!-- HEADER -->

<section class="admissions-header">

    <h1>IT Department Admissions</h1>

    <p>
        Begin your academic journey in Information Technology
        at the University of the Commonwealth Caribbean.
        Explore admission requirements, available programmes
        and application information.
    </p>

</section>

<!-- ADMISSION REQUIREMENTS -->

<section class="admissions-card">

    <h2>
        <i class="fa-solid fa-clipboard-check"></i>
        Admission Requirements
    </h2>

    <p>
        Students interested in pursuing the Bachelor of Science
        in Information Technology at UCC should meet the
        university's undergraduate admission requirements.
    </p>

    <ul>
        <li>
            Five CSEC/GCE subjects, including English Language
            and Mathematics, are generally required for standard
            undergraduate entry.
        </li>

        <li>
            Applicants must provide the required academic
            qualifications and supporting documents.
        </li>

        <li>
            Applicants who do not meet the standard entry
            requirements may be considered through alternative
            admission pathways, subject to UCC's policies.
        </li>
    </ul>

</section>

<!-- IT PROGRAMMES -->

<section class="admissions-card">

    <h2>
        <i class="fa-solid fa-laptop-code"></i>
        Explore IT Programmes
    </h2>

    <p>
        Learn more about the Information Technology programme
        and explore additional technology-related study
        opportunities at UCC.
    </p>

    <div class="programme-grid">

        <!-- BSC INFORMATION TECHNOLOGY -->

        <div class="programme-item">

            <i class="fa-solid fa-computer"></i>

            <h3>BSc. Information Technology</h3>

            <p>
                Explore the Bachelor of Science in Information
                Technology programme, including its course
                structure, learning outcomes and admission
                requirements.
            </p>

            <a
                href="https://ucc.edu.jm/programmes/tm/bsc-in-information-technology"
                target="_blank"
                rel="noopener noreferrer"
                class="apply-button">
                View IT Programme →
            </a>

        </div>

        <!-- ADDITIONAL PROGRAMMES -->

        <div class="programme-item">

            <i class="fa-solid fa-network-wired"></i>

            <h3>Additional IT Programmes</h3>

            <p>
                Discover other technology-related programmes
                offered by UCC, including areas such as
                Artificial Intelligence, Data Science,
                Electronics Engineering and Networking
                with Cyber Security.
            </p>

            <a
                href="https://ucc.edu.jm/programmes/undergraduate"
                target="_blank"
                rel="noopener noreferrer"
                class="apply-button">
                Explore Programmes →
            </a>

        </div>

    </div>

</section>

<!-- HOW TO APPLY -->

<section class="application-card">

    <h2>
        <i class="fa-solid fa-file-signature"></i>
        How to Apply
    </h2>

    <p>
        Ready to begin your journey at UCC?
        Complete the official undergraduate application
        online. Review the admission requirements and
        prepare your supporting documents before
        submitting your application.
    </p>

    <a
        href="https://www.ucc.edu.jm/apply/undergraduate"
        target="_blank"
        rel="noopener noreferrer"
        class="apply-button">
        Apply to UCC →
    </a>

</section>

@endsection
