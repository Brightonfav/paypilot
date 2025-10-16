@extends('layouts.app')

@section('content')

<!-- 🌟 HERO SECTION -->
<section class="relative bg-gradient-to-r from-indigo-700 via-purple-700 to-indigo-800 text-white py-28 overflow-hidden">
  <!-- 🌈 Floating Bubbles -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute w-80 h-80 bg-purple-400 rounded-full blur-3xl opacity-20 top-10 left-10 animate-float-slow"></div>
    <div class="absolute w-96 h-96 bg-indigo-400 rounded-full blur-3xl opacity-20 bottom-20 right-0 animate-float"></div>
  </div>

  <!-- 🧭 Hero Content -->
  <div class="max-w-7xl mx-auto px-6 text-center relative z-10">
    <h1 class="text-4xl md:text-6xl font-extrabold mb-6 leading-tight" data-aos="fade-up">
      Explore <span class="text-indigo-200">PayPilot Features</span>
    </h1>
    <p class="text-lg md:text-xl text-gray-100 max-w-2xl mx-auto mb-8" data-aos="fade-up" data-aos-delay="200">
      Powerful tools built to simplify payments and empower growth for businesses across Africa.
    </p>
    <a href="/register"
       class="bg-white text-indigo-700 font-semibold px-8 py-3 rounded-lg shadow-lg hover:bg-indigo-100 transition-transform hover:-translate-y-1 duration-300"
       data-aos="fade-up" data-aos-delay="400">
       Get Started
    </a>
  </div>

  <!-- 🌊 Wave Divider -->
  <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
    <svg class="relative block w-full h-20 text-white" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1440 320">
      <path fill="currentColor">
        <animate attributeName="d" dur="10s" repeatCount="indefinite"
          values="
            M0,224L80,224C160,224,320,224,480,202.7C640,181,800,139,960,138.7C1120,139,1280,181,1360,202.7L1440,224L1440,320L0,320Z;
            M0,200L80,210C160,220,320,200,480,180C640,160,800,120,960,130C1120,140,1280,200,1360,220L1440,240L1440,320L0,320Z;
            M0,224L80,224C160,224,320,224,480,202.7C640,181,800,139,960,138.7C1120,139,1280,181,1360,202.7L1440,224L1440,320L0,320Z
          " />
      </path>
    </svg>
  </div>
</section>

<!-- 💡 FEATURES GRID -->
<section class="py-24 bg-gray-50 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-6 text-center">
    <h2 class="text-3xl md:text-5xl font-extrabold text-gray-900 mb-16" data-aos="fade-up">
      What Makes PayPilot Powerful
    </h2>

    <div class="grid md:grid-cols-3 gap-10" data-aos="fade-up" data-aos-delay="200">

      @php
        $features = [
          ['icon' => 'credit-card', 'title' => 'Seamless Payments', 'desc' => 'Send and receive money instantly across borders with real-time confirmation and minimal fees.'],
          ['icon' => 'bar-chart-3', 'title' => 'Smart Analytics', 'desc' => 'Gain insights into your transactions, earnings, and trends to make data-driven decisions.'],
          ['icon' => 'lock', 'title' => 'Bank-Level Security', 'desc' => 'Advanced encryption and fraud detection to protect your data and funds 24/7.'],
          ['icon' => 'globe-2', 'title' => 'Multi-Currency Support', 'desc' => 'Operate seamlessly with local and international currencies on one secure platform.'],
          ['icon' => 'user-check', 'title' => 'User-Friendly Dashboard', 'desc' => 'Manage all your transactions, clients, and reports with a clean, intuitive interface.'],
          ['icon' => 'headphones', 'title' => 'Dedicated Support', 'desc' => 'Get help anytime from our experienced support team — quick, friendly, and reliable.']
        ];
      @endphp

      @foreach($features as $index => $feature)
      <div class="relative bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-transform hover:-translate-y-3 border border-transparent hover:border-indigo-200 overflow-hidden group"
           data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
        
        <div class="absolute inset-0 bg-gradient-to-r from-indigo-100 to-purple-100 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
        <div class="relative z-10">
          <i data-lucide="{{ $feature['icon'] }}" class="w-12 h-12 text-indigo-600 mx-auto mb-4"></i>
          <h3 class="text-xl font-semibold mb-2">{{ $feature['title'] }}</h3>
          <p class="text-gray-600">{{ $feature['desc'] }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- ⚙️ WHY CHOOSE US -->
<section class="py-24 bg-white relative overflow-hidden">
  <div class="absolute w-96 h-96 bg-indigo-50 rounded-full blur-3xl opacity-40 -left-20 top-10 animate-float-slow"></div>
  
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center relative z-10">
    <!-- Image -->
    <div data-aos="fade-right">
      <img src="/images/why-choose-paypilot.svg" alt="Why Choose PayPilot" class="rounded-2xl shadow-xl">
    </div>

    <!-- Text -->
    <div data-aos="fade-left">
      <h2 class="text-3xl md:text-5xl font-extrabold text-gray-900 mb-6">Why Choose PayPilot?</h2>
      <p class="text-gray-600 mb-6 leading-relaxed">
        At PayPilot, we don’t just process transactions — we empower people.  
        Our platform is built for speed, trust, and scalability, making digital payments across Africa effortless.
      </p>

      <div class="space-y-4 text-gray-700">
        <div class="flex items-start" data-aos="fade-left" data-aos-delay="100">
          <i data-lucide="shield-check" class="w-6 h-6 text-indigo-600 mt-1 mr-3"></i>
          <p>Instant cross-border transfers with top-tier reliability.</p>
        </div>
        <div class="flex items-start" data-aos="fade-left" data-aos-delay="200">
          <i data-lucide="activity" class="w-6 h-6 text-indigo-600 mt-1 mr-3"></i>
          <p>Transparent pricing and real-time transaction tracking.</p>
        </div>
        <div class="flex items-start" data-aos="fade-left" data-aos-delay="300">
          <i data-lucide="life-buoy" class="w-6 h-6 text-indigo-600 mt-1 mr-3"></i>
          <p>24/7 support team dedicated to helping your business grow.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 🚀 CTA SECTION -->
<section class="relative bg-gradient-to-r from-indigo-700 via-purple-700 to-indigo-800 text-white py-20 text-center overflow-hidden">
  <div class="max-w-4xl mx-auto px-6 relative z-10" data-aos="fade-up">
    <h2 class="text-3xl md:text-5xl font-extrabold mb-6">Ready to Experience Smarter Payments?</h2>
    <p class="text-lg mb-8">Join thousands of African creators and entrepreneurs using PayPilot to simplify payments.</p>
    <a href="/register"
       class="bg-white text-indigo-700 font-semibold px-8 py-3 rounded-lg shadow-lg hover:bg-indigo-100 transition-transform hover:-translate-y-1 duration-300">
       Get Started
    </a>
  </div>

  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute w-96 h-96 bg-purple-500 rounded-full blur-3xl opacity-20 top-10 left-1/3 animate-float"></div>
  </div>
</section>

<!-- 🎨 ANIMATIONS -->
<style>
  @keyframes float {0%,100%{transform:translateY(0)}50%{transform:translateY(-25px)}}
  @keyframes float-slow {0%,100%{transform:translateY(0)}50%{transform:translateY(-40px)}}
  .animate-float {animation: float 8s ease-in-out infinite;}
  .animate-float-slow {animation: float-slow 12s ease-in-out infinite;}
</style>

@endsection
