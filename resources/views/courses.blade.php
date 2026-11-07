@extends('layouts.app')

@section('title', 'Courses | UCC IT Portal')

@section('header', 'IT Programme Courses')

@section('content')

<style>
    /* COURSES HEADER */

    .courses-header {
        background: linear-gradient(120deg, #061e3d, #103a6c);
        color: white;
        padding: 35px;
        border-radius: 16px;
        border-left: 6px solid #f0c54b;
        margin-bottom: 25px;
    }

    .courses-header h1 {
        font-size: 28px;
        margin-bottom: 12px;
        color: white;
    }

    .courses-header p {
        color: #e0e9f5;
        font-size: 15px;
        line-height: 1.7;
    }

    /* COURSE SUMMARY */

    .courses-summary {
        display: flex;
        align-items: center;
        gap: 15px;
        background: white;
        border: 1px solid #dce5f3;
        border-radius: 14px;
        padding: 22px 26px;
        margin-bottom: 25px;
        box-shadow: 0 4px 15px rgba(8,43,80,.05);
    }

    .summary-icon {
        width: 55px;
        height: 55px;
        border-radius: 12px;
        background: #e8effa;
        color: #082b50;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        flex-shrink: 0;
    }

    .summary-info h2 {
        font-size: 26px;
        color: #082b50;
        margin: 0 0 5px;
    }

    .summary-info p {
        color: #64748b;
        font-size: 14px;
        margin: 0;
    }

    /* COURSE GRID */

    .course-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 22px;
        margin-bottom: 30px;
    }

    .course-card {
        background: white;
        border: 1px solid #dce5f3;
        border-radius: 14px;
        padding: 26px;
        box-shadow: 0 4px 15px rgba(8,43,80,.05);
        transition: transform .2s ease, box-shadow .2s ease;
        min-width: 0;
    }

    .course-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 24px rgba(8,43,80,.1);
    }

    .course-card-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 18px;
    }

    .course-code {
        background: #e8effa;
        color: #082b50;
        padding: 8px 13px;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: .4px;
    }

    .credits {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: #fff6d8;
        color: #805b00;
        padding: 8px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 700;
    }

    .course-card h3 {
        color: #082b50;
        font-size: 19px;
        margin-bottom: 15px;
        line-height: 1.4;
    }

    .course-divider {
        height: 1px;
        background: #e8edf5;
        margin: 18px 0;
    }

    .course-detail {
        margin-bottom: 13px;
    }

    .course-detail strong {
        display: block;
        color: #082b50;
        font-size: 13px;
        margin-bottom: 6px;
    }

    .course-detail p {
        color: #50617e;
        font-size: 14px;
        line-height: 1.7;
        margin: 0;
        overflow-wrap: anywhere;
    }

    .course-empty {
        background: white;
        padding: 35px;
        border-radius: 14px;
        text-align: center;
        color: #64748b;
        grid-column: 1 / -1;
    }

    /* RESPONSIVE DESIGN */

    @media (max-width: 850px) {
        .course-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 600px) {
        .courses-header {
            padding: 23px;
        }

        .courses-header h1 {
            font-size: 24px;
        }

        .course-card {
            padding: 22px;
        }

        .courses-summary {
            padding: 18px;
        }
    }
</style>

<!-- COURSES HEADER -->

<section class="courses-header">

    <h1>
        <i class="fa-solid fa-book-open"></i>
        IT Programme Courses
    </h1>

    <p>
        Explore courses offered in the Bachelor of Science
        in Information Technology programme at the
        University of the Commonwealth Caribbean.
    </p>

</section>

<!-- COURSE SUMMARY -->

<section class="courses-summary">

    <div class="summary-icon">
        <i class="fa-solid fa-graduation-cap"></i>
    </div>

    <div class="summary-info">
        <h2>{{ $courses->count() }}</h2>
        <p>Courses Available in the Portal</p>
    </div>

</section>

<!-- COURSE LIST -->

<div class="course-grid">

    @forelse($courses as $course)

        <article class="course-card">

            <div class="course-card-top">

                <span class="course-code">
                    {{ $course->course_code }}
                </span>

                <span class="credits">
                    <i class="fa-solid fa-clock"></i>
                    {{ $course->credits }}
                    Credit Hours
                </span>

            </div>

            <h3>
                {{ $course->course_name }}
            </h3>

            <div class="course-divider"></div>

            <div class="course-detail">

                <strong>
                    <i class="fa-solid fa-list-check"></i>
                    Prerequisites
                </strong>

                <p>
                    {{ $course->prerequisites ?: 'None' }}
                </p>

            </div>

            <div class="course-detail">

                <strong>
                    <i class="fa-solid fa-circle-info"></i>
                    Course Description
                </strong>

                <p>
                    {{ $course->description ?: 'No description available.' }}
                </p>

            </div>

        </article>

    @empty

        <div class="course-empty">

            <i class="fa-solid fa-book-open fa-2x"></i>

            <p>
                No courses have been added yet.
            </p>

        </div>

    @endforelse

</div>

@endsection

