<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PayPilot — Seamless, secure, and borderless payments across Africa.">
    <meta name="keywords" content="Payments, Fintech, Africa, PayPilot, Wallet, Transfer">

    <title>PayPilot Africa - @yield('title')</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/images/favicon.png">
    <!-- Tailwind (already included if you compiled with Vite) -->
@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- ✅ Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- ✅ AOS CSS -->
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />

<!-- ✅ Lucide Icons (for <i data-lucide="icon"> ) -->
<script src="https://unpkg.com/lucide@latest"></script>

<!-- Alpine.js -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<!-- ✅ Alpine Collapse Plugin -->
<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>

<script>
    // ✅ Initialize Alpine with Collapse plugin
    document.addEventListener('alpine:init', () => {
        Alpine.plugin(window.AlpineCollapse)
    })
</script>


</head>
<body class="bg-gray-50 text-gray-900">

    {{-- ✅ Preloader --}}
    @include('layouts.partials.preloader')

    {{-- ✅ Header/Navbar --}}
    @include('layouts.partials.header')

    {{-- ✅ Page Content --}}
    <main>
        @yield('content')
    </main>

    {{-- ✅ Floating Contact + Scroll-to-top --}}
    @include('layouts.partials.floating')

    {{-- ✅ Footer --}}
    @include('layouts.partials.footer')
    @push('scripts')
    <!-- ✅ Initialize AOS -->

    {{-- ✅ Render any pushed scripts --}}
    @stack('scripts')
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>

    <!-- ✅ Initialize Lucide Icons -->
    <script>
        lucide.createIcons();
    </script>
@endpush
@vite(['resources/css/app.css', 'resources/js/app.js'])
<script>
  lucide.createIcons();
</script>

    
</body>
</html>
