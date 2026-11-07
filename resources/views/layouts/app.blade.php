<!DOCTYPE html>
<html lang="en">
<head>
    @PwaHead
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'UCC IT Portal')</title>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <style>
        :root {
            --navy: #082b50;
            --navy-dark: #061e3d;
            --navy-light: #103a6c;
            --gold: #f0c54b;
            --background: #f5f8fd;
            --white: #ffffff;
            --text: #102c55;
            --muted: #50617e;
            --border: #dce5f3;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: var(--background);
            color: var(--text);
        }

        a {
            text-decoration: none;
        }

        /* SIDEBAR */

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 273px;
            height: 100vh;
            background: linear-gradient(
                160deg,
                #061e3d 0%,
                #0a3264 65%,
                #092b55 100%
            );
            color: white;
            padding: 24px 16px;
            display: flex;
            flex-direction: column;
            z-index: 1000;
            overflow-y: auto;
        }

        .brand {
            text-align: center;
            padding: 0 8px 35px;
            border-bottom: 1px solid rgba(255,255,255,.25);
        }

        .brand-crest {
            width: 95px;
            height: 95px;
            object-fit: contain;
            margin-bottom: 5px;
        }

        .brand h2 {
            font-family: Georgia, serif;
            font-size: 46px;
            letter-spacing: -2px;
            line-height: 1.1;
        }

        .brand h2 span {
            color: var(--gold);
            font-style: italic;
        }

        .brand p {
            font-size: 15px;
            line-height: 1.5;
            margin-top: 5px;
        }

        .nav-heading {
            padding: 28px 12px 16px;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            color: #e5edf9;
        }

        .nav-menu {
            display: flex;
            flex-direction: column;
            gap: 7px;
        }

        .nav-menu a {
            display: flex;
            align-items: center;
            gap: 18px;
            padding: 15px 18px;
            border-radius: 11px;
            color: white;
            font-size: 15px;
            transition: .2s ease;
        }

        .nav-menu a:hover {
            background: rgba(255,255,255,.12);
        }

        .nav-menu a.active {
            background: var(--gold);
            color: var(--navy-dark);
            font-weight: 700;
        }

        .nav-icon {
            width: 28px;
            text-align: center;
            font-size: 21px;
        }

        .sidebar-bottom {
            margin-top: auto;
            padding: 22px 12px 5px;
            border-top: 1px solid rgba(255,255,255,.3);
            font-size: 13px;
            line-height: 1.55;
        }

        .sidebar-bottom p + p {
            margin-top: 12px;
        }

        /* MAIN AREA */

        .main {
            margin-left: 273px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .topbar {
            min-height: 88px;
            background: white;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 32px;
            gap: 18px;
        }

        .topbar-left,
        .topbar-right {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .menu-toggle {
            background: none;
            border: none;
            color: var(--navy);
            font-size: 26px;
            cursor: pointer;
            padding: 10px;
        }

        .topbar-divider {
            height: 45px;
            width: 1px;
            background: var(--border);
        }

        .topbar h3 {
            color: var(--navy);
            font-size: 25px;
            font-weight: 750;
        }

        .topbar-right {
            color: var(--navy);
            font-size: 16px;
        }

        .topbar-right i {
            font-size: 24px;
        }

        .content {
            flex: 1;
            padding: 24px 35px;
            width: 100%;
            max-width: 1600px;
            margin: 0 auto;
        }

        .page-title {
            color: var(--navy);
            font-size: 28px;
            margin-bottom: 10px;
        }

        .page-subtitle {
            color: var(--muted);
            font-size: 15px;
            margin-bottom: 28px;
            line-height: 1.6;
        }

        .card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 24px;
            box-shadow: 0 5px 16px rgba(10,40,80,.06);
        }

        .card h3 {
            color: var(--navy);
            margin-bottom: 12px;
        }

        /* FOOTER */

        .footer {
            background: white;
            border-top: 1px solid var(--border);
            padding: 17px 35px;
            color: var(--navy);
            font-size: 13px;
        }

        /* EMAIL FAB */

        .email-fab {
            position: fixed;
            right: 25px;
            bottom: 25px;
            width: 66px;
            height: 66px;
            border-radius: 50%;
            background: var(--gold);
            color: var(--navy);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 27px;
            box-shadow: 0 6px 18px rgba(0,0,0,.2);
            z-index: 1100;
            transition: transform .2s;
        }

        .email-fab:hover {
            transform: translateY(-4px);
        }

        /* MOBILE */

        @media (max-width: 900px) {
            .sidebar {
                transform: translateX(-100%);
                transition: transform .25s ease;
            }

            .sidebar.open {
                transform: translateX(0);
            }

            .main {
                margin-left: 0;
            }

            .topbar {
                padding: 0 18px;
            }

            .topbar h3 {
                font-size: 21px;
            }

            .topbar-right span {
                display: none;
            }

            .content {
                padding: 20px 16px;
            }

            .footer {
                padding: 18px;
            }
        }

        @media (min-width: 901px) {
            .sidebar.collapsed {
                transform: translateX(-100%);
            }

            .main.expanded {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->

    <aside class="sidebar" id="sidebar">

        <div class="brand">

            <img
                src="{{ asset('images/ucc-crest.png') }}"
                alt="UCC Crest"
                class="brand-crest"
            >

            <h2>UCC <span>IT</span></h2>

            <p>
                Information Technology<br>
                Student Portal
            </p>

        </div>

        <div class="nav-heading">Main Menu</div>

        <nav class="nav-menu">

            <a href="/"
               class="{{ request()->is('/') ? 'active' : '' }}">
                <i class="fa-solid fa-house nav-icon"></i>
                Dashboard
            </a>

            <a href="/directory"
               class="{{ request()->is('directory') ? 'active' : '' }}">
                <i class="fa-solid fa-user-group nav-icon"></i>
                Directory
            </a>

            <a href="/courses"
               class="{{ request()->is('courses') ? 'active' : '' }}">
                <i class="fa-solid fa-book-open nav-icon"></i>
                Courses
            </a>

            <a href="/admissions"
               class="{{ request()->is('admissions') ? 'active' : '' }}">
                <i class="fa-solid fa-file-lines nav-icon"></i>
                Admissions
            </a>

            <a href="/social-media"
               class="{{ request()->is('social-media') ? 'active' : '' }}">
                <i class="fa-solid fa-share-nodes nav-icon"></i>
                Social Media
            </a>

        </nav>

        <div class="sidebar-bottom">
            <p>University of the Commonwealth Caribbean</p>
            <p>School of Mathematics, Science and Technology</p>
        </div>

    </aside>

    <!-- MAIN -->

    <div class="main" id="main">

        <header class="topbar">

            <div class="topbar-left">

                <button
                    class="menu-toggle"
                    id="menuToggle"
                    type="button"
                    aria-label="Toggle navigation"
                    aria-controls="sidebar"
                    aria-expanded="true"
                >
                    <i class="fa-solid fa-bars"></i>
                </button>

                <div class="topbar-divider"></div>

                <h3>UCC IT Portal</h3>

            </div>

            <div class="topbar-right">
                <i class="fa-solid fa-graduation-cap"></i>
                <span>BSc. Information Technology</span>
                <i class="fa-solid fa-chevron-down"
                   style="font-size: 13px;"></i>
            </div>

        </header>

        <main class="content">
            @yield('content')
        </main>

        <footer class="footer">
            © {{ date('Y') }} University of the Commonwealth Caribbean
            | Information Technology
        </footer>

    </div>

    @yield('fab')

    <script>
        const toggle = document.getElementById('menuToggle');
        const sidebar = document.getElementById('sidebar');
        const main = document.getElementById('main');

        function updateNavigationState() {
            const isOpen = window.innerWidth <= 900
                ? sidebar.classList.contains('open')
                : !sidebar.classList.contains('collapsed');

            toggle.setAttribute('aria-expanded', String(isOpen));
        }

        toggle.addEventListener('click', function () {
            if (window.innerWidth <= 900) {
                sidebar.classList.toggle('open');
            } else {
                sidebar.classList.toggle('collapsed');
                main.classList.toggle('expanded');
            }

            updateNavigationState();
        });

        window.addEventListener('resize', updateNavigationState);
        updateNavigationState();
    </script>

    @RegisterServiceWorkerScript
</body>
</html>

