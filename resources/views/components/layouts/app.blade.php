<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'People Access' }}</title>
    <meta name="description" content="{{ $description ?? 'People & HR consultancy helping growth-stage companies build the people systems they need.' }}" />

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet" />

    {{-- Global Styles — cache-busted with timestamp --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v={{ filemtime(public_path('css/app.css')) }}" />

    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Livewire --}}
    @livewireStyles

    {{-- ═══════════════════════════════════════════
         CRITICAL MOBILE OVERRIDES
         Inline so they can NEVER be cached away
    ═══════════════════════════════════════════ --}}
    <style>
    @media (max-width: 768px) {

        /* Navbar */
        .navbar-links-desktop { display: none !important; }
        .navbar-begin-desktop { display: none !important; }
        .hamburger            { display: flex !important; }
        .navbar               { padding: 1rem 1.25rem !important; }
        .navbar.scrolled      { padding: 0.75rem 1.25rem !important; }

        /* Navbar logo */
        .navbar-logo-img {
            height: 140px !important;
            top: -55px !important;
        }

        /* Section padding */
        section {
            padding-left: 1.25rem !important;
            padding-right: 1.25rem !important;
        }

        /* Decorative letters */
        .deco-letters {
            font-size: clamp(100px, 30vw, 160px) !important;
            right: -0.1em !important;
        }

        /* ALL grids → single column */
        .what-breaks-grid,
        .services-header-grid,
        .cases-header-grid,
        .who-grid,
        .footer-cta-grid,
        .work-section-grid,
        .expertise-outer-grid,
        .work-cta-grid,
        .contact-hero-grid,
        .footer-grid {
            grid-template-columns: 1fr !important;
            gap: 2rem !important;
        }

        /* Expertise 2x2 grid */
        .expertise-inner-grid {
            grid-template-columns: 1fr 1fr !important;
            gap: 1rem !important;
        }

        /* Case study tabs → 2 per row */
        .case-tabs-bar {
            grid-template-columns: repeat(2, 1fr) !important;
        }

        /* Case study image */
        .case-image-wrap {
            height: 320px !important;
        }

        /* Case overlay text */
        .case-overlay-text {
            padding: 0 1.25rem !important;
            max-width: 100% !important;
        }

        /* Offset frame — remove on mobile */
        .offset-frame {
            padding: 0 !important;
        }
        .offset-frame-border {
            display: none !important;
        }

        /* Form */
        .form-card-grid {
            grid-template-columns: 1fr !important;
        }
        .form-card-grid > div:last-child {
            border-left: none !important;
            border-top: 1px solid #ddd5c8 !important;
        }
        .form-row {
            grid-template-columns: 1fr !important;
        }

        /* Images — reduce fixed heights */
        .work-image {
            height: 280px !important;
        }

        /* Services accordion */
        .service-expanded-text {
            padding-left: 2.75rem !important;
        }
        .service-row-inner {
            gap: 1.5rem !important;
        }

        /* Newsletter */
        .newsletter-flex {
            flex-direction: column !important;
            align-items: stretch !important;
        }
        .newsletter-input-wrap {
            max-width: 100% !important;
        }

        /* Contact hero */
        .contact-hero-grid {
            padding-top: 7rem !important;
            min-height: auto !important;
        }

        /* Hero sections */
        .hero-section {
            padding-bottom: 3rem !important;
        }
    }

    @media (max-width: 480px) {
        .expertise-inner-grid {
            grid-template-columns: 1fr !important;
        }
        .case-tabs-bar {
            grid-template-columns: 1fr 1fr !important;
        }
        .case-image-wrap {
            height: 260px !important;
        }
        .deco-letters {
            font-size: clamp(80px, 25vw, 120px) !important;
        }
        .navbar-logo-img {
            height: 110px !important;
            top: -40px !important;
        }
    }
    </style>
</head>
<body>

    {{-- Grain overlay — sits on top of everything, pointer-events off --}}
    @include('components.grain')

    {{-- Navbar --}}
    @include('components.navbar')


    {{-- Page content --}}
    <main>
        {{ $slot }}
    </main>

    {{-- Footer --}}
    @include('components.footer')

    @livewireScripts
</body>
</html>
