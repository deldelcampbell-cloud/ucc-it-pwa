@extends('layouts.app')

@section('title', 'Faculty & Staff | UCC IT Portal')

@section('header', 'Faculty & Staff Directory')

@section('content')

<style>
    .directory-intro {
        margin-bottom: 30px;
    }

    .directory-intro h2 {
        color: #082b50;
        font-size: 25px;
        margin-bottom: 8px;
    }

    .directory-intro p {
        color: #718096;
        font-size: 14px;
        line-height: 1.7;
        max-width: 750px;
    }

    .staff-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 24px;
    }

    .staff-card {
        background: #fff;
        padding: 30px 22px 24px;
        text-align: center;
        border-radius: 16px;
        border: 1px solid #e6eaf0;
        box-shadow: 0 5px 18px rgba(20,40,70,0.05);
        transition: transform .25s ease, box-shadow .25s ease;
    }

    .staff-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 26px rgba(20,40,70,0.11);
        border-color: #d6ad45;
    }

    .staff-photo,
    .staff-placeholder {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        margin: 0 auto 18px;
        border: 4px solid #f0e5c8;
    }

    .staff-photo {
        display: block;
        object-fit: cover;
        background: #f4f6fa;
    }

    .staff-placeholder {
        display: flex;
        align-items: center;
        justify-content: center;
        background: #082b50;
        color: #d6ad45;
        font-size: 32px;
        font-weight: 700;
        letter-spacing: 1px;
    }

    .staff-card h3 {
        color: #082b50;
        font-size: 17px;
        font-weight: 700;
        margin-bottom: 7px;
    }

    .staff-position {
        color: #718096;
        font-size: 13px;
        line-height: 1.5;
        min-height: 38px;
        margin-bottom: 18px;
    }

    .staff-divider {
        height: 1px;
        background: #edf0f4;
        margin-bottom: 17px;
    }

    .staff-contact {
        display: flex;
        align-items: center;
        gap: 9px;
        text-align: left;
        background: #f4f6fa;
        color: #174e7c;
        padding: 12px;
        border-radius: 8px;
        margin-top: 9px;
        font-size: 12px;
        text-decoration: none;
        overflow-wrap: anywhere;
        transition: background .2s ease;
    }

    .staff-contact:hover {
        background: #e8eef6;
        color: #082b50;
    }

    .contact-icon {
        font-size: 16px;
        flex-shrink: 0;
    }

    .empty {
        background: white;
        padding: 35px;
        border-radius: 13px;
        border: 1px solid #e6eaf0;
        text-align: center;
    }

    .empty h3 {
        color: #082b50;
        margin-bottom: 10px;
    }

    .empty p {
        color: #718096;
        font-size: 13px;
    }

    @media (max-width: 600px) {
        .staff-grid {
            grid-template-columns: 1fr;
        }

        .directory-intro h2 {
            font-size: 21px;
        }
    }
</style>

<div class="directory-intro">
    <h2>Meet Our Team</h2>

    <p>
        Meet the faculty and staff of the University of the
        Commonwealth Caribbean Department of Information Technology.
        Find contact information and connect with our team.
    </p>
</div>

@if($staff->count() > 0)

    <div class="staff-grid">

        @foreach($staff as $member)

            <div class="staff-card">

                @if($member->photo)

                    <img
                        src="{{ asset($member->photo) }}"
                        alt="{{ $member->name }}"
                        class="staff-photo"
                    >

                @else

                    <div class="staff-placeholder">
                        {{ collect(explode(' ', $member->name))
                            ->filter()
                            ->map(fn($part) => strtoupper(substr($part, 0, 1)))
                            ->take(2)
                            ->implode('') }}
                    </div>

                @endif

                <h3>{{ $member->name }}</h3>

                <p class="staff-position">
                    {{ $member->position }}
                </p>

                <div class="staff-divider"></div>

                <a class="staff-contact"
                   href="tel:{{ $member->telephone }}">
                    <span class="contact-icon">☎</span>
                    <span>{{ $member->telephone }}</span>
                </a>

                <a class="staff-contact"
                   href="mailto:{{ $member->email }}">
                    <span class="contact-icon">✉</span>
                    <span>{{ $member->email }}</span>
                </a>

            </div>

        @endforeach

    </div>

@else

    <div class="empty">
        <h3>No staff members available yet.</h3>

        <p>
            Staff information will appear here once added to the database.
        </p>
    </div>

@endif

@endsection
