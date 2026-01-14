<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tiya Golf Club - Free HTML CSS Template</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="{{ asset('forntend/https://fonts.googleapis.com') }}">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap"
        rel="stylesheet">

    <link href="{{ asset('fornt-assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('fornt-assets/css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('fornt-assets/css/templatemo-tiya-golf-club.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<style>
    .swiper {
        width: 100%;
        height: 500px;
    }

    .swiper-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .hero-section {
        position: relative;
        height: 100vh;
        overflow: hidden;
    }

    /* Swiper full screen */
    .heroSwiper {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }

    /* Slides */
    .heroSwiper .swiper-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Dark overlay */
    .section-overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.45);
        z-index: 2;
    }

    /* Content on top */
    .hero-section .container {
        position: relative;
        z-index: 3;
    }

    /* Caption animation */
    .caption {
        position: absolute;
        text-align: center;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #fff;
        font-size: 48px;
        font-weight: bold;
        text-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
        animation: fadeUp 1.5s ease;
    }

    /* Pagination on top */
    .swiper-pagination {
        z-index 4;
    }

    /* Simple animation */
    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<body>

    <main>
        @include('frontend.layouts.header')
        @yield(section: 'content')
        @include('frontend.layouts.footer')

    </main>

    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('fornt-assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('fornt-assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('fornt-assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('fornt-assets/js/click-scroll.js') }}"></script>
    <script src="{{ asset('fornt-assets/js/animated-headline.js') }}"></script>
    <script src="{{ asset('fornt-assets/js/modernizr.js') }}"></script>
    <script src="{{ asset('fornt-assets/js/custom.js') }}"></script>


    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    @stack('scripts')

</body>

</html>
