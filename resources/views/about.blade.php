@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<!-- 🌍 ABOUT HERO SECTION -->
<section class="relative bg-gradient-to-r from-purple-700 via-indigo-700 to-purple-800 text-white py-28 overflow-hidden">

  <!-- ✨ Soft Gradient Bubbles -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute w-72 h-72 bg-indigo-400 rounded-full blur-3xl opacity-20 top-16 left-16 animate-float-slow" data-aos="fade-right"></div>
    <div class="absolute w-96 h-96 bg-pink-500 rounded-full blur-3xl opacity-20 bottom-10 right-10 animate-float" data-aos="fade-left" data-aos-delay="200"></div>
  </div>

  <!-- 🧭 Hero Content -->
  <div class="max-w-6xl mx-auto px-6 text-center relative z-10">
    <h1 class="text-4xl md:text-6xl font-extrabold mb-6 leading-tight" data-aos="fade-up">
      Who We Are at <span class="text-indigo-200">PayPilot Africa</span>
    </h1>
    <p class="text-lg md:text-xl text-gray-100 max-w-2xl mx-auto mb-8" data-aos="fade-up" data-aos-delay="200">
      Empowering freelancers, entrepreneurs, and small businesses across Africa to send invoices, receive payments, and grow faster — all in one platform.
    </p>
    <div class="flex justify-center gap-4" data-aos="fade-up" data-aos-delay="400">
      <a href="/register"
         class="bg-white text-indigo-700 font-semibold px-6 py-3 rounded-lg shadow-lg hover:bg-indigo-100 transition-transform hover:-translate-y-1 duration-300">
         Get Started
      </a>
      <a href="/contact"
         class="border border-white px-6 py-3 rounded-lg hover:bg-white hover:text-indigo-700 transition-transform hover:-translate-y-1 duration-300">
         Contact Us
      </a>
    </div>
  </div>

  <!-- 🌊 Subtle Wave Divider -->
  <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
    <svg class="relative block w-full h-20 text-white" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1440 320">
      <path fill="currentColor">
        <animate attributeName="d" dur="12s" repeatCount="indefinite"
          values="
            M0,224L80,202.7C160,181,320,139,480,138.7C640,139,800,181,960,181.3C1120,181,1280,139,1360,117.3L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z;
            M0,192L80,197.3C160,203,320,213,480,197.3C640,181,800,139,960,133.3C1120,128,1280,160,1360,181.3L1440,203L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z;
            M0,224L80,202.7C160,181,320,139,480,138.7C640,139,800,181,960,181.3C1120,181,1280,139,1360,117.3L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z
          " />
      </path>
    </svg>
  </div>
</section>

<!-- 🎨 Animations -->
<style>
  @keyframes float {0%,100%{transform:translateY(0)}50%{transform:translateY(-25px)}}
  @keyframes float-slow {0%,100%{transform:translateY(0)}50%{transform:translateY(-40px)}}
  .animate-float {animation: float 8s ease-in-out infinite;}
  .animate-float-slow {animation: float-slow 12s ease-in-out infinite;}
</style>

<!-- 🚀 Mission & Vision Section -->
<section class="relative py-24 bg-gray-50 overflow-hidden">

  <!-- 💫 Background Gradient Blobs -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute w-96 h-96 bg-indigo-200 rounded-full blur-3xl opacity-30 top-10 left-20 animate-float"></div>
    <div class="absolute w-96 h-96 bg-purple-200 rounded-full blur-3xl opacity-30 bottom-10 right-20 animate-float-slow"></div>
  </div>

  <div class="relative max-w-7xl mx-auto px-6 z-10 text-center">
    <!-- Section Header -->
    <div data-aos="fade-up">
      <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Our Mission & Vision</h2>
      <p class="text-lg text-gray-600 max-w-3xl mx-auto">
        At PayPilot Africa, we’re shaping the future of digital payments across the continent by building tools that empower creators, freelancers, and entrepreneurs to thrive.
      </p>
    </div>

   <!-- 🌟 MISSION & VALUES SECTION -->
<section id="mission" class="py-24 bg-gray-50 relative overflow-hidden">
  <div class="max-w-6xl mx-auto px-6 text-center" data-aos="fade-up">
    <h2 class="text-4xl font-bold mb-6 text-gray-900">Our Mission & Values</h2>
    <p class="text-gray-600 max-w-2xl mx-auto mb-12">
      At PayPilot Africa, we’re redefining how African freelancers and small businesses manage payments, empowering growth through innovation, trust, and accessibility.
    </p>
  </div>

  <div class="grid md:grid-cols-3 gap-10 max-w-6xl mx-auto px-6">
    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-indigo-600" data-aos="zoom-in">
      <x-lucide-rocket class="w-12 h-12 text-indigo-600 mx-auto mb-4" />
      <h3 class="text-xl font-semibold mb-3">Innovation</h3>
      <p class="text-gray-600">We constantly explore new technologies that simplify payments and make financial tools accessible to everyone.</p>
    </div>

    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-purple-600" data-aos="zoom-in" data-aos-delay="150">
      <x-lucide-users class="w-12 h-12 text-purple-600 mx-auto mb-4" />
      <h3 class="text-xl font-semibold mb-3">Community</h3>
      <p class="text-gray-600">We build tools for real people — freelancers, creators, and entrepreneurs across the African continent.</p>
    </div>

    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-pink-600" data-aos="zoom-in" data-aos-delay="300">
      <x-lucide-shield class="w-12 h-12 text-pink-600 mx-auto mb-4" />
      <h3 class="text-xl font-semibold mb-3">Integrity</h3>
      <p class="text-gray-600">Trust and transparency guide everything we do — your business deserves security and reliability.</p>
    </div>
  </div>
</section>


<!-- 💎 Our Core Values Section -->
<section class="relative py-24 bg-white overflow-hidden">
  
  <!-- 🌈 Background Shapes -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute w-80 h-80 bg-indigo-100 rounded-full blur-3xl opacity-30 top-10 left-10 animate-float-slow"></div>
    <div class="absolute w-96 h-96 bg-purple-100 rounded-full blur-3xl opacity-30 bottom-10 right-10 animate-float"></div>
  </div>

  <div class="relative max-w-7xl mx-auto px-6 z-10">
    <!-- Header -->
    <div class="text-center mb-16" data-aos="fade-up">
      <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Our Core Values</h2>
      <p class="text-lg text-gray-600 max-w-3xl mx-auto">
        At the heart of PayPilot Africa lies a commitment to innovation, transparency, and empowerment — values that drive every product we build.
      </p>
    </div>

    <!-- Values Grid -->
    <div class="grid md:grid-cols-3 gap-10">
      <!-- 1️⃣ Transparency -->
      <div class="bg-gray-50 p-8 rounded-3xl shadow hover:shadow-lg transition-transform hover:-translate-y-2" data-aos="zoom-in">
        <div class="flex justify-center mb-4">
          <x-lucide-shield-check class="w-12 h-12 text-indigo-600" />
        </div>
        <h3 class="text-xl font-semibold mb-2 text-gray-900 text-center">Transparency</h3>
        <p class="text-gray-600 text-center">
          We believe trust is earned through openness and honesty. Every transaction and tool we create reflects that belief.
        </p>
      </div>

      <!-- 2️⃣ Innovation -->
      <div class="bg-gray-50 p-8 rounded-3xl shadow hover:shadow-lg transition-transform hover:-translate-y-2" data-aos="zoom-in" data-aos-delay="150">
        <div class="flex justify-center mb-4">
          <x-lucide-cpu class="w-12 h-12 text-purple-600" />
        </div>
        <h3 class="text-xl font-semibold mb-2 text-gray-900 text-center">Innovation</h3>
        <p class="text-gray-600 text-center">
          We embrace new technologies to make financial processes faster, simpler, and more accessible for everyone in Africa.
        </p>
      </div>

      <!-- 3️⃣ Empowerment -->
      <div class="bg-gray-50 p-8 rounded-3xl shadow hover:shadow-lg transition-transform hover:-translate-y-2" data-aos="zoom-in" data-aos-delay="300">
        <div class="flex justify-center mb-4">
          <x-lucide-rocket class="w-12 h-12 text-pink-600" />
        </div>
        <h3 class="text-xl font-semibold mb-2 text-gray-900 text-center">Empowerment</h3>
        <p class="text-gray-600 text-center">
          Our mission is to give freelancers and small businesses the tools they need to reach their full potential — and get paid faster.
        </p>
      </div>
    </div>
  </div>
</section>


<!-- 👥 Meet Our Team Section (animated + staggered) -->
<section class="relative py-24 bg-gray-50 overflow-hidden">

  <!-- 🌈 Floating Background Bubbles -->
  <div class="absolute inset-0 overflow-hidden pointer-events-none">
    <div class="absolute w-96 h-96 bg-indigo-100 rounded-full blur-3xl opacity-40 top-0 left-1/4 animate-float-slow"></div>
    <div class="absolute w-72 h-72 bg-purple-100 rounded-full blur-3xl opacity-40 bottom-10 right-10 animate-float"></div>
  </div>

  <div class="relative max-w-7xl mx-auto px-6 z-10">
    <!-- Header -->
    <div class="text-center mb-16" data-aos="fade-up">
      <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Meet Our Team</h2>
      <p class="text-lg text-gray-600 max-w-3xl mx-auto">
        The passionate minds behind <span class="text-indigo-600 font-semibold">PayPilot Africa</span> — 
        transforming the future of payments across the continent.
      </p>
    </div>

    <!-- Team Grid -->
    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
      <!-- NOTE: Each card has class "team-card" so the script can add staggered AOS delays -->
      <div class="team-card group bg-white rounded-3xl shadow-md p-6 text-center will-change-transform"
           data-aos="zoom-in">
        <div class="relative w-32 h-32 mx-auto mb-4">
          <img loading="lazy" src="/images/Brighton.jpg" alt="Brighton E."
               class="team-photo w-full h-full rounded-full object-cover shadow-md transition-transform duration-500">
        </div>
        <h3 class="text-lg font-semibold text-gray-900">Brighton E.</h3>
        <p class="text-indigo-600 font-medium">Founder & Lead Developer</p>
        <p class="text-gray-500 text-sm mt-2">Building tools that empower freelancers and small businesses across Africa.</p>
        <div class="flex justify-center gap-3 mt-4 social">
          <a href="#" class="text-gray-500 hover:text-indigo-600 transition-transform"><x-lucide-twitter class="w-5 h-5" /></a>
          <a href="#" class="text-gray-500 hover:text-indigo-600 transition-transform"><x-lucide-linkedin class="w-5 h-5" /></a>
          <a href="#" class="text-gray-500 hover:text-indigo-600 transition-transform"><x-lucide-github class="w-5 h-5" /></a>
        </div>
      </div>

      <div class="team-card group bg-white rounded-3xl shadow-md p-6 text-center will-change-transform"
           data-aos="zoom-in">
        <div class="relative w-32 h-32 mx-auto mb-4">
          <img loading="lazy" src="/images/Ada.webp" alt="Ada M."
               class="team-photo w-full h-full rounded-full object-cover shadow-md transition-transform duration-500">
        </div>
        <h3 class="text-lg font-semibold text-gray-900">Ada M.</h3>
        <p class="text-indigo-600 font-medium">Product Designer</p>
        <p class="text-gray-500 text-sm mt-2">Designing seamless experiences that make payment management intuitive and delightful.</p>
        <div class="flex justify-center gap-3 mt-4 social">
          <a href="#" class="text-gray-500 hover:text-indigo-600 transition-transform"><x-lucide-instagram class="w-5 h-5" /></a>
          <a href="#" class="text-gray-500 hover:text-indigo-600 transition-transform"><x-lucide-twitter class="w-5 h-5" /></a>
          <a href="#" class="text-gray-500 hover:text-indigo-600 transition-transform"><x-lucide-linkedin class="w-5 h-5" /></a>
        </div>
      </div>

      <div class="team-card group bg-white rounded-3xl shadow-md p-6 text-center will-change-transform"
           data-aos="zoom-in">
        <div class="relative w-32 h-32 mx-auto mb-4">
          <img loading="lazy" src="/images/Samuel.webp" alt="Samuel K."
               class="team-photo w-full h-full rounded-full object-cover shadow-md transition-transform duration-500">
        </div>
        <h3 class="text-lg font-semibold text-gray-900">Samuel K.</h3>
        <p class="text-indigo-600 font-medium">Backend Engineer</p>
        <p class="text-gray-500 text-sm mt-2">Ensuring our systems are secure, scalable, and lightning fast for every user.</p>
        <div class="flex justify-center gap-3 mt-4 social">
          <a href="#" class="text-gray-500 hover:text-indigo-600 transition-transform"><x-lucide-github class="w-5 h-5" /></a>
          <a href="#" class="text-gray-500 hover:text-indigo-600 transition-transform"><x-lucide-linkedin class="w-5 h-5" /></a>
        </div>
      </div>

      <div class="team-card group bg-white rounded-3xl shadow-md p-6 text-center will-change-transform"
           data-aos="zoom-in">
        <div class="relative w-32 h-32 mx-auto mb-4">
          <img loading="lazy" src="/images/Grace.webp" alt="Grace O."
               class="team-photo w-full h-full rounded-full object-cover shadow-md transition-transform duration-500">
        </div>
        <h3 class="text-lg font-semibold text-gray-900">Grace O.</h3>
        <p class="text-indigo-600 font-medium">Marketing & Growth</p>
        <p class="text-gray-500 text-sm mt-2">Telling the PayPilot story and connecting with our community of African creators.</p>
        <div class="flex justify-center gap-3 mt-4 social">
          <a href="#" class="text-gray-500 hover:text-indigo-600 transition-transform"><x-lucide-instagram class="w-5 h-5" /></a>
          <a href="#" class="text-gray-500 hover:text-indigo-600 transition-transform"><x-lucide-twitter class="w-5 h-5" /></a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ✨ Team animation styles (add to page or your main CSS) -->
<style>
  /* Card hover lift */
  .team-card { transition: transform .35s cubic-bezier(.2,.9,.2,1), box-shadow .35s; }
  .team-card:hover { transform: translateY(-10px) scale(1.01); box-shadow: 0 18px 40px rgba(15,23,42,0.12); }

  /* Photo subtle zoom/rotate on hover */
  .team-photo { transition: transform .45s cubic-bezier(.2,.9,.2,1); transform-origin: center; }
  .team-card:hover .team-photo { transform: scale(1.06) rotate(-1.2deg); }

  /* Social icon micro interactions */
  .social a { transition: transform .18s ease, color .18s ease; display:inline-flex; align-items:center; justify-content:center; }
  .social a:hover { transform: translateY(-4px); }

  /* Reduce motion for users who prefer reduced motion */
  @media (prefers-reduced-motion: reduce) {
    .team-photo, .team-card, .social a { transition: none !important; animation: none !important; transform: none !important; }
  }
</style>

<!-- ✨ JS: auto-stagger AOS delays and refresh AOS -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.team-card');
    cards.forEach((card, idx) => {
      // set staggered delays (0, 80, 160, 240ms...)
      const delay = idx * 80;
      card.setAttribute('data-aos-delay', String(delay));
      // fallback AOS animation if missing
      if (!card.getAttribute('data-aos')) card.setAttribute('data-aos', 'fade-up');
    });

    // ensure AOS picks up new attributes
    if (typeof AOS !== 'undefined') {
      AOS.refresh();
    }
  });
</script>


<!-- Who We Are -->
<section class="py-20 px-6 bg-white" data-aos="fade-up">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
        <div>
            <h2 class="text-3xl font-bold mb-4 text-gray-800">Who We Are</h2>
            <p class="text-gray-600 mb-4">
                PayPilot Africa is a digital financial tool built for African creatives and business owners who want to manage their money smarter. 
                We understand the challenges of getting paid, tracking invoices, and organizing clients — and we’ve built the solution right here.
            </p>
            <p class="text-gray-600">
                Whether you’re a solo freelancer or a growing team, our platform helps you streamline operations and focus on what truly matters — your work.
            </p>
        </div>
        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=800&q=80" alt="Team work" class="rounded-2xl shadow-lg">
    </div>
</section>


<!-- ✉️ Contact CTA -->
<section class="bg-white py-20 px-6 text-center" data-aos="fade-up">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Want to Partner or Collaborate?</h2>
        <p class="text-gray-600 mb-8">Let’s work together to transform digital payments across Africa.</p>
        <a href="/contact" class="bg-indigo-600 text-white px-8 py-3 rounded-lg font-semibold shadow hover:bg-indigo-700 transition">
            Contact Us
        </a>
    </div>
</section>

<!-- 🚀 Final CTA -->
<section class="bg-indigo-600 text-white py-20 px-6 text-center" data-aos="fade-up">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Join the PayPilot Africa Community</h2>
        <p class="mb-8 text-lg">Thousands of freelancers trust us to manage their payments and clients.</p>
        <a href="/register" class="bg-white text-indigo-600 px-8 py-3 rounded-lg font-semibold shadow hover:bg-gray-100 transition">
            Get Started Free
        </a>
    </div>
</section>
@endsection
