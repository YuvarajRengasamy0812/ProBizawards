<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProBiz Awards 2026 - Global Financial & Online Trading Awards</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/keditor/probiz/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/keditor/probiz/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/keditor/probiz/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/keditor/probiz/css/mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/keditor/probiz/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/keditor/probiz/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/keditor/probiz/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/keditor/probiz/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/keditor/probiz/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/keditor/probiz/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/keditor/css/tested.css') }}">
    @stack('styles')
</head>
<body>
<div id="loader">
    <div class="loader"></div>
    <div class="progress-container mt-3">
        <div class="progress-bar" id="progressBar"></div>
    </div>
    <div class="loading-text" id="loadingText">Loading...</div>
</div>

@include('frontEnd.layouts.headerprobiz')
@include('frontEnd.layouts.sidebarprobiz')

<main id="main" class="{{ (Helper::GeneralSiteSettings("style_header")) ? "fixed-top-margin" : "" }}">
    @yield('content')
</main>

@include('frontEnd.layouts.Footerprobiz')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="{{ asset('assets/keditor/probiz/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/keditor/probiz/js/jquery.odometer.min.js') }}"></script>
<script src="{{ asset('assets/keditor/probiz/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/keditor/probiz/js/jquery.knob.min.js') }}"></script>
<script src="{{ asset('assets/keditor/probiz/js/jquery-countdowngampang.min.js') }}"></script>
<script src="{{ asset('assets/keditor/probiz/js/jquery.ba-throttle-debounce.min.js') }}"></script>
<script src="{{ asset('assets/keditor/probiz/js/jquery.mCustomScrollbar.min.js') }}"></script>
<script src="{{ asset('assets/keditor/probiz/js/jarallax.min.js') }}"></script>
<script src="{{ asset('assets/keditor/probiz/js/jquery.appear.js') }}"></script>
<script src="{{ asset('assets/keditor/probiz/js/jquery.easing.js') }}"></script>
<script src="{{ asset('assets/keditor/probiz/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/keditor/probiz/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/keditor/probiz/js/main.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const loader = document.getElementById('loader');
        const progressBar = document.getElementById('progressBar');
        const loadingText = document.getElementById('loadingText');

        if (loader && progressBar && loadingText) {
            let progress = 0;
            const interval = setInterval(function () {
                progress += 2;
                progressBar.style.width = progress + '%';
                loadingText.textContent = 'Loading... ' + progress + '%';

                if (progress >= 100) {
                    clearInterval(interval);
                    setTimeout(function () {
                        loader.style.opacity = '0';
                        loader.style.transition = 'opacity 0.5s ease';
                        setTimeout(function () {
                            loader.style.display = 'none';
                        }, 500);
                    }, 200);
                }
            }, 50);
        }

        document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
            anchor.addEventListener('click', function (event) {
                const selector = this.getAttribute('href');
                if (!selector || selector === '#') {
                    return;
                }

                const target = document.querySelector(selector);
                if (target) {
                    event.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });

        const navbarCollapse = document.querySelector('.navbar-collapse');
        if (navbarCollapse) {
            document.querySelectorAll('.navbar-nav .nav-link').forEach(function (link) {
                link.addEventListener('click', function () {
                    if (window.innerWidth < 992 && !link.classList.contains('dropdown-toggle')) {
                        bootstrap.Collapse.getOrCreateInstance(navbarCollapse, { toggle: false }).hide();
                    }
                });
            });

        }

        const header = document.querySelector('.main-header');
        if (header) {
            window.addEventListener('scroll', function () {
                header.classList.toggle('scrolled', window.scrollY > 50);
            });
        }

        const scrollTopBtn = document.querySelector('.scroll-top5');
        if (scrollTopBtn) {
            window.addEventListener('scroll', function () {
                scrollTopBtn.style.opacity = window.pageYOffset > 300 ? '1' : '0.7';
            });
        }

        const video = document.querySelector('.video-background');
        if (video) {
            video.play().catch(function () {});
        }

        const track = document.querySelector('.impact-track');
        const prevBtn = document.querySelector('.carousel-btn.prev');
        const nextBtn = document.querySelector('.carousel-btn.next');
        const dots = document.querySelectorAll('.dot');
        if (track && prevBtn && nextBtn && dots.length) {
            let index = 0;
            const totalSlides = Math.max(dots.length, 1);

            function updateCarousel() {
                track.style.transform = 'translateX(-' + (index * 100) + '%)';
                dots.forEach(function (dot, i) {
                    dot.classList.toggle('active', i === index);
                });
            }

            nextBtn.addEventListener('click', function () {
                index = (index + 1) % totalSlides;
                updateCarousel();
            });

            prevBtn.addEventListener('click', function () {
                index = (index - 1 + totalSlides) % totalSlides;
                updateCarousel();
            });

            dots.forEach(function (dot, i) {
                dot.addEventListener('click', function () {
                    index = i;
                    updateCarousel();
                });
            });
        }

        if (window.AOS) {
            AOS.init({
                duration: 1000,
                once: true
            });
        }
    });
</script>
</body>
</html>
