<!-- ✅ Navbar Section -->
<nav class="backdrop-blur-md bg-white/70 border-b border-indigo-100 shadow-sm sticky top-0 z-50" x-data="{ open: false }">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    <!-- 🌍 Logo -->
    <a href="/" class="flex items-center space-x-2">
      <img src="/images/fullLogo (1).png" alt="PayPilot Africa Logo" class="h-12 w-auto object-contain drop-shadow-md">
    </a>

    <!-- 💻 Desktop Menu -->
    <div class="hidden md:flex items-center space-x-6 font-medium">
      <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
      <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
      <a href="{{ route('features') }}" class="nav-link {{ request()->routeIs('features') ? 'active' : '' }}">Features</a>
      <a href="{{ route('pricing') }}" class="nav-link {{ request()->routeIs('pricing') ? 'active' : '' }}">Pricing</a>
      <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
      <a href="{{ route('faq') }}" class="nav-link {{ request()->routeIs('faq') ? 'active' : '' }}">FAQ</a>

      <a href="/login"
         class="relative {{ request()->is('login') ? 'text-indigo-600 font-semibold' : 'text-gray-700 hover:text-indigo-600' }} transition">
         Login
      </a>
      <a href="/register"
         class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-4 py-2 rounded-lg shadow hover:from-indigo-700 hover:to-purple-700 transition">
         Sign Up
      </a>
    </div>

    <!-- 📱 Mobile Hamburger -->
    <div class="md:hidden">
      <button @click="open = !open" class="text-gray-700 focus:outline-none">
        <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>
  </div>

  <!-- 📲 Mobile Menu Sidebar -->
  <div x-show="open"
       x-transition
       class="fixed top-0 right-0 w-4/5 max-w-sm h-full bg-white/95 backdrop-blur-xl shadow-2xl z-50 p-6 space-y-4 md:hidden border-l border-indigo-100">
    <!-- Close Button -->
    <div class="flex justify-end">
      <button @click="open = false" class="text-gray-600 hover:text-gray-900 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>

    <!-- Links -->
    <a href="{{ route('home') }}" class="mobile-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
    <a href="{{ route('about') }}" class="mobile-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a>
    <a href="{{ route('features') }}" class="mobile-link {{ request()->routeIs('features') ? 'active' : '' }}">Features</a>
    <a href="{{ route('pricing') }}" class="mobile-link {{ request()->routeIs('pricing') ? 'active' : '' }}">Pricing</a>
    <a href="{{ route('contact') }}" class="mobile-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
    <a href="{{ route('faq') }}" class="mobile-link {{ request()->routeIs('faq') ? 'active' : '' }}">FAQ</a>

    <hr class="my-4 border-indigo-100">

    <a href="/login" class="mobile-link {{ request()->is('login') ? 'active' : '' }}">Login</a>
    <a href="/register"
       class="block w-full text-center px-4 py-2 font-semibold text-white bg-gradient-to-r from-indigo-600 to-purple-600 rounded-lg shadow hover:from-indigo-700 hover:to-purple-700">
       Sign Up
    </a>
  </div>
</nav>

<style>
  /* ✅ Navbar internal styles */
  .nav-link { position: relative; transition: color 0.3s ease; padding-bottom: 4px; }
  .nav-link:hover { color: #4f46e5; }
  .nav-link::after { content: ""; position: absolute; bottom: 0; left: 0; width: 0%; height: 3px; background: linear-gradient(to right, #4f46e5, #9333ea); border-radius: 2px; transition: width 0.3s ease; }
  .nav-link:hover::after, .nav-link.active::after { width: 100%; }
  .nav-link.active { color: #4f46e5; font-weight: 600; }
  .mobile-link { display: block; padding: 0.75rem 1rem; border-radius: 0.5rem; transition: color 0.3s ease, background-color 0.3s ease; position: relative; }
  .mobile-link:hover { background-color: #eef2ff; color: #4f46e5; }
  .mobile-link.active { background-color: #eef2ff; color: #4f46e5; font-weight: 600; }
</style>
