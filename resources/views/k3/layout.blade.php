
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Beranda') | K3 — Belajar, Paham, Selamat</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --green: #087653;
            --deep: #073f34;
            --mint: #e8f6ef;
            --ink: #18372f;
            --muted: #6b827a;
            --line: #e1ece6;
            --bg: #f5f9f6;
            --white: #fff;
            --orange: #f4ad48;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            background: var(--bg);
            font-family: 'DM Sans', sans-serif;
            color: var(--ink);
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button,
        input {
            font: inherit;
        }

        .topbar {
            height: 76px;
            background: #fff;
            border-bottom: 1px solid var(--line);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 clamp(18px, 5vw, 72px);
            gap: 22px;
            position: sticky;
            top: 0;
            z-index: 20;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
            font-family: Manrope, sans-serif;
            font-weight: 800;
            font-size: 21px;
            letter-spacing: -.6px;
        }

        .brand-mark {
            width: 42px;
            height: 42px;
            border-radius: 14px;
            background: var(--green);
            color: white;
            display: grid;
            place-items: center;
            font-size: 23px;
            box-shadow: 0 7px 18px #0876532c;
        }

        .brand small {
            display: block;
            font-family: 'DM Sans', sans-serif;
            font-size: 10px;
            color: var(--muted);
            font-weight: 500;
            letter-spacing: .2px;
        }

        .nav {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav a {
            padding: 12px 15px;
            border-radius: 12px;
            color: #526a61;
            font-weight: 600;
            font-size: 13px;
            transition: .2s;
        }

        .nav a:hover,
        .nav a.active {
            background: var(--mint);
            color: var(--green);
        }

        .nav a.active {
            box-shadow: inset 0 -2px var(--green);
        }

        .menu-toggle {
            display: none;
            border: 0;
            background: var(--mint);
            color: var(--green);
            padding: 10px 12px;
            border-radius: 10px;
        }

        .wrap {
            max-width: 1440px;
            margin: auto;
            padding: 24px clamp(16px, 3.2vw, 48px) 36px;
        }

        .hero {
            min-height: 300px;
            border-radius: 25px;
            overflow: hidden;
            position: relative;
            display: flex;
            align-items: center;
            background: linear-gradient(90deg, rgba(4, 51, 40, .97) 0%, rgba(5, 69, 51, .87) 42%, rgba(5, 69, 51, .12) 100%), url('https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=1800&q=85') center 46%/cover;
            color: #fff;
            padding: clamp(28px, 5vw, 64px);
            box-shadow: 0 18px 38px #0b51321a;
        }

        .hero-content {
            max-width: 590px;
            position: relative;
            z-index: 1;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: 1px solid #ffffff40;
            background: #ffffff18;
            padding: 8px 12px;
            border-radius: 99px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .2px;
        }

        .hero h1 {
            font-family: Manrope, sans-serif;
            font-size: clamp(30px, 4vw, 47px);
            line-height: 1.13;
            letter-spacing: -1.5px;
            margin: 18px 0 13px;
        }

        .hero p {
            color: #e0f1e9;
            line-height: 1.75;
            font-size: 14px;
            max-width: 510px;
            margin: 0 0 22px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            border: 0;
            border-radius: 12px;
            padding: 12px 18px;
            font-weight: 700;
            font-size: 13px;
            cursor: pointer;
            transition: transform .2s, box-shadow .2s;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 9px 20px #043e2a24;
        }

        .btn-primary {
            background: var(--green);
            color: #fff;
        }

        .hero .btn-primary {
            background: #1baa73;
            color: white;
        }

        .btn-light {
            background: #edf7f1;
            color: var(--green);
        }

        .btn-outline {
            background: white;
            color: var(--green);
            border: 1px solid var(--line);
        }

        .layout {
            display: grid;
            grid-template-columns: minmax(0, 1fr) 300px;
            gap: 18px;
            margin-top: 20px;
        }

        .maincol {
            min-width: 0;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 20px;
            padding: 23px 10px;
            gap: 0;
        }

        .feature {
            padding: 0 20px;
            border-right: 1px solid var(--line);
        }

        .feature:last-child {
            border: 0;
        }

        .feature-icon {
            width: 46px;
            height: 46px;
            border-radius: 16px;
            background: var(--mint);
            color: var(--green);
            display: grid;
            place-items: center;
            font-size: 22px;
            margin-bottom: 12px;
        }

        .feature h3 {
            font-size: 14px;
            margin: 0 0 7px;
        }

        .feature p {
            font-size: 12px;
            line-height: 1.65;
            color: var(--muted);
            margin: 0;
        }

        .panel {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 20px;
            padding: 21px;
            margin-top: 16px;
        }

        .section-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            margin-bottom: 16px;
        }

        .section-title {
            font-family: Manrope, sans-serif;
            font-weight: 800;
            font-size: 20px;
            letter-spacing: -.5px;
            margin: 0;
        }

        .section-sub {
            font-size: 12px;
            color: var(--muted);
            margin: 5px 0 0;
        }

        .text-link {
            font-size: 12px;
            font-weight: 700;
            color: var(--green);
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 13px;
        }

        .material-card {
            border: 1px solid var(--line);
            border-radius: 14px;
            overflow: hidden;
            background: #fff;
            transition: .25s;
            display: flex;
            flex-direction: column;
            min-width: 0;
        }

        .material-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 14px 28px #174f3214;
            border-color: #b9ddc9;
        }

        .card-photo {
            height: 116px;
            width: 100%;
            object-fit: cover;
            background: var(--mint);
            display: block;
        }

        .card-body {
            padding: 13px;
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .pill {
            display: inline-flex;
            align-self: flex-start;
            background: var(--mint);
            color: var(--green);
            font-size: 10px;
            font-weight: 700;
            padding: 5px 8px;
            border-radius: 99px;
        }

        .material-card h3 {
            font-size: 13px;
            line-height: 1.45;
            margin: 9px 0 6px;
        }

        .material-card p {
            font-size: 11.5px;
            line-height: 1.6;
            color: var(--muted);
            margin: 0 0 14px;
        }

        .card-foot {
            margin-top: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 11px;
            color: var(--muted);
        }

        .round-arrow {
            width: 29px;
            height: 29px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            background: var(--mint);
            color: var(--green);
            font-size: 16px;
        }

        .sidebar .panel {
            margin-top: 0;
            margin-bottom: 15px;
        }

        .progress-head {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            font-weight: 800;
        }

        .progress-ring {
            width: 86px;
            height: 86px;
            border-radius: 50%;
            background: conic-gradient(var(--green) calc(var(--progress) * 1%), #e7efeb 0);
            display: grid;
            place-items: center;
            position: relative;
            flex-shrink: 0;
        }

        .progress-ring:before {
            content: '';
            position: absolute;
            inset: 8px;
            border-radius: 50%;
            background: white;
        }

        .progress-ring span {
            position: relative;
            font-family: Manrope, sans-serif;
            font-weight: 800;
            font-size: 19px;
        }

        .progress-row {
            display: flex;
            align-items: center;
            gap: 15px;
            margin: 19px 0 14px;
        }

        .progress-row strong {
            font-size: 13px;
        }

        .progress-row small {
            display: block;
            color: var(--muted);
            font-size: 11px;
            margin-top: 5px;
        }

        .bar {
            height: 7px;
            background: #e9f0ec;
            border-radius: 99px;
            overflow: hidden;
        }

        .bar span {
            height: 100%;
            display: block;
            background: linear-gradient(90deg, #087653, #38b77d);
            border-radius: 99px;
        }

        .mini-label {
            font-size: 12px;
            font-weight: 800;
            margin: 18px 0 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .quiz-mini {
            border: 1px solid var(--line);
            border-radius: 13px;
            padding: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .mini-icon {
            width: 36px;
            height: 36px;
            border-radius: 12px;
            background: var(--mint);
            display: grid;
            place-items: center;
            color: var(--green);
        }

        .quiz-mini strong {
            font-size: 11px;
            display: block;
        }

        .quiz-mini small {
            font-size: 11px;
            color: var(--muted);
            display: block;
            margin-top: 5px;
        }

        .score-tag {
            margin-left: auto;
            background: #e3f7e8;
            color: #16804c;
            border-radius: 99px;
            padding: 5px 8px;
            font-size: 10px;
            font-weight: 800;
        }

        .quote {
            background: linear-gradient(120deg, #eaf8f1, #d7eee2);
            border: 1px solid #d4eadf;
            border-radius: 15px;
            padding: 19px;
            color: var(--deep);
            font-family: Manrope, sans-serif;
            font-weight: 700;
            font-size: 13px;
            line-height: 1.65;
            margin: 15px 0;
        }

        .quick-links a {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #edf2ee;
            font-size: 12px;
        }

        .quick-links a:last-child {
            border: 0;
            padding-bottom: 0;
        }

        .quick-links a span:first-child {
            display: flex;
            align-items: center;
            gap: 9px;
        }

        .quick-links a:hover {
            color: var(--green);
        }

        .footer {
            background: var(--deep);
            color: #d8e9e1;
            padding: 23px clamp(18px, 5vw, 72px);
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            font-size: 11px;
        }

        .footer .brand {
            color: white;
            font-size: 17px;
        }

        .footer .brand small {
            color: #b7d3c5;
        }

        .page-heading {
            padding: 25px 0 22px;
            display: flex;
            justify-content: space-between;
            align-items: end;
            gap: 20px;
        }

        .page-heading h1 {
            font: 800 clamp(27px, 3vw, 36px) Manrope, sans-serif;
            letter-spacing: -1px;
            margin: 8px 0;
        }

        .page-heading p {
            color: var(--muted);
            font-size: 13px;
            margin: 0;
            line-height: 1.7;
        }

        .crumb {
            font-size: 12px;
            color: var(--muted);
        }

        .crumb a {
            color: var(--green);
            font-weight: 700;
        }

        .list-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 16px;
        }

        .detail-hero {
            width: 100%;
            height: 310px;
            object-fit: cover;
            border-radius: 20px;
            display: block;
        }

        .article {
            max-width: 850px;
            margin: auto;
        }

        .article-body {
            padding: clamp(22px, 4vw, 42px);
            background: white;
            border: 1px solid var(--line);
            border-radius: 20px;
            margin-top: 18px;
        }

        .article-body h2 {
            font: 800 21px Manrope, sans-serif;
            margin: 25px 0 10px;
        }

        .article-body h2:first-child {
            margin-top: 0;
        }

        .article-body p {
            font-size: 14px;
            color: #526b60;
            line-height: 1.9;
            margin: 0;
        }

        .notice {
            padding: 13px 15px;
            border-radius: 12px;
            background: #eaf8ef;
            color: #176d48;
            font-size: 12px;
            margin: 15px 0;
        }

        .quiz-question {
            padding: 21px;
            border: 1px solid var(--line);
            border-radius: 16px;
            background: #fff;
            margin-bottom: 14px;
        }

        .quiz-question h3 {
            font-size: 14px;
            line-height: 1.6;
            margin: 0 0 14px;
        }

        .q-number {
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--green);
            font-weight: 800;
            margin-bottom: 9px;
        }

        .option {
            display: flex;
            gap: 11px;
            align-items: flex-start;
            padding: 12px;
            border: 1px solid var(--line);
            border-radius: 11px;
            margin: 8px 0;
            cursor: pointer;
            font-size: 13px;
            line-height: 1.5;
            transition: .2s;
        }

        .option:hover {
            border-color: #92c9aa;
            background: #f8fcf9;
        }

        .option input {
            accent-color: var(--green);
            margin-top: 3px;
        }

        .result-score {
            text-align: center;
            padding: 32px 18px;
            border-radius: 18px;
            background: linear-gradient(140deg, #e5f7ed, #f5fbf7);
            border: 1px solid #d8ede1;
        }

        .result-score strong {
            font: 800 54px Manrope, sans-serif;
            color: var(--green);
            display: block;
        }

        .review-item {
            padding: 16px;
            border: 1px solid var(--line);
            border-radius: 14px;
            margin-top: 12px;
            background: white;
        }

        .review-item p {
            font-size: 13px;
            line-height: 1.7;
        }

        .good {
            color: #147847;
        }

        .bad {
            color: #b74a35;
        }

        .empty {
            text-align: center;
            padding: 40px 20px;
            color: var(--muted);
        }

        .empty div {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .history-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            padding: 16px 0;
            border-bottom: 1px solid var(--line);
            font-size: 13px;
        }

        .history-row:last-child {
            border: 0;
        }

        .history-score {
            font-weight: 800;
            color: var(--green);
            font-size: 17px;
        }

        .fade-in {
            animation: rise .55s ease both;
        }

        @keyframes rise {
            from {
                opacity: 0;
                transform: translateY(12px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 1100px) {
            .layout {
                grid-template-columns: 1fr;
            }

            .sidebar {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 15px;
            }

            .sidebar .panel {
                margin: 0;
            }

            .cards {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .list-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .feature {
                padding: 0 13px;
            }
        }

        @media (max-width: 720px) {
            .topbar {
                height: 66px;
                padding: 0 16px;
            }

            .menu-toggle {
                display: block;
            }

            .nav {
                display: none;
                position: absolute;
                top: 65px;
                left: 12px;
                right: 12px;
                background: white;
                border: 1px solid var(--line);
                border-radius: 15px;
                padding: 9px;
                box-shadow: 0 15px 30px #143e2c18;
                flex-direction: column;
                align-items: stretch;
            }

            .nav.open {
                display: flex;
            }

            .nav a {
                padding: 12px;
            }

            .brand {
                font-size: 18px;
            }

            .brand-mark {
                width: 38px;
                height: 38px;
            }

            .wrap {
                padding: 16px 14px 26px;
            }

            .hero {
                min-height: 360px;
                padding: 27px 23px;
                background-position: 62% center;
            }

            .hero h1 {
                font-size: 32px;
            }

            .hero p {
                font-size: 13px;
            }

            .features {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                padding: 17px 8px;
            }

            .feature {
                padding: 12px;
                border-right: 0;
            }

            .feature:nth-child(odd) {
                border-right: 1px solid var(--line);
            }

            .feature:nth-child(-n+2) {
                border-bottom: 1px solid var(--line);
            }

            .feature-icon {
                width: 40px;
                height: 40px;
            }

            .panel {
                padding: 16px;
            }

            .section-title {
                font-size: 18px;
            }

            .cards {
                gap: 10px;
            }

            .card-photo {
                height: 105px;
            }

            .card-body {
                padding: 10px;
            }

            .material-card h3 {
                font-size: 12px;
            }

            .material-card p {
                font-size: 11px;
            }

            .sidebar {
                grid-template-columns: 1fr;
            }

            .list-grid {
                grid-template-columns: 1fr;
            }

            .detail-hero {
                height: 220px;
            }

            .page-heading {
                align-items: flex-start;
                flex-direction: column;
                padding: 20px 0;
            }

            .footer {
                flex-direction: column;
                align-items: flex-start;
                gap: 13px;
            }

            .article-body {
                padding: 22px;
            }

            .history-row {
                align-items: flex-start;
            }

            .hero .btn {
                width: 100%;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            * {
                animation: none !important;
                scroll-behavior: auto !important;
                transition: none !important;
            }
        }
    </style>
</head>

<body>
    <header class="topbar">
        <a href="{{ route('k3.home') }}" class="brand">
            <span class="brand-mark">✚</span>
            <span>
                K3
                <small>Belajar · Paham · Selamat</small>
            </span>
        </a>

        <button
            class="menu-toggle"
            type="button"
            onclick="document.querySelector('.nav').classList.toggle('open')"
            aria-label="Buka menu"
        >
            ☰ Menu
        </button>

        <nav class="nav" aria-label="Navigasi utama">
            <a
                class="{{ request()->routeIs('k3.home') ? 'active' : '' }}"
                href="{{ route('k3.home') }}"
            >
                ⌂ &nbsp;Beranda
            </a>

            <a
                class="{{ request()->routeIs('k3.materi','k3.detail') ? 'active' : '' }}"
                href="{{ route('k3.materi') }}"
            >
                ▤ &nbsp;Materi
            </a>

            <a
                class="{{ request()->routeIs('k3.kuis','k3.hasil') ? 'active' : '' }}"
                href="{{ route('k3.kuis') }}"
            >
                ▣ &nbsp;Kuis
            </a>

            <a
                class="{{ request()->routeIs('k3.riwayat') ? 'active' : '' }}"
                href="{{ route('k3.riwayat') }}"
            >
                ◷ &nbsp;Riwayat
            </a>
        </nav>
    </header>

    <main class="wrap">
        @yield('content')
    </main>

    <footer class="footer">
        <a href="{{ route('k3.home') }}" class="brand">
            <span class="brand-mark" style="background:#ffffff18">✚</span>
            <span>
                K3
                <small>Belajar · Paham · Selamat</small>
            </span>
        </a>

        <span>“Zero Accident, Zero Harm, A Better Future”</span>

        <span>Website edukasi K3 · Laravel Herd</span>
    </footer>

    <script>
        document.querySelectorAll('a').forEach(function(a) {
            a.addEventListener('click', function() {
                document.querySelector('.nav')?.classList.remove('open');
            });
        });
    </script>
</body>

</html>
