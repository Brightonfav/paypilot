<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PayPilot — Seamless, secure, and borderless payments across Africa.">
    <meta name="keywords" content="Payments, Fintech, Africa, PayPilot, Wallet, Transfer">
    <title>PayPilot Africa - @yield('title')</title>

    <!-- ✅ Swiper & AOS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />

    <!-- ✅ Vite (Tailwind + JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- ✅ Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- ✅ Alpine.js + Collapse plugin -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.plugin(window.AlpineCollapse)
        })
    </script>
</head>

<body class="bg-gray-50 text-gray-900">
    {{-- ✅ Preloader --}}
    @include('layouts.partials.preloader')

    {{-- ✅ Header --}}
    @include('layouts.partials.header')

    {{-- ✅ Page Content --}}
    <main>
        @yield('content')
    </main>

    {{-- ✅ Floating Buttons --}}
    @include('layouts.partials.floating')

    {{-- ✅ Footer --}}
    @include('layouts.partials.footer')

    {{-- ✅ External JS Libraries (load before your app.js uses them) --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    {{-- ✅ Initialize Lucide icons once --}}
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            lucide.createIcons();
        });
    </script>
</body>
</html>
