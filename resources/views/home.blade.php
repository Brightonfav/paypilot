@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- ✅ HERO SECTION -->
<section class="relative bg-gradient-to-r from-indigo-600 via-purple-600 to-indigo-700 text-white py-28 overflow-hidden">

  <!-- 🌈 Floating Gradient Bubbles -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute w-80 h-80 bg-purple-400 rounded-full blur-3xl opacity-20 top-10 left-10 animate-float-slow" data-aos="fade-right" data-aos-delay="200"></div>
    <div class="absolute w-96 h-96 bg-indigo-400 rounded-full blur-3xl opacity-20 bottom-20 right-0 animate-float" data-aos="fade-left" data-aos-delay="400"></div>
    <div class="absolute w-72 h-72 bg-pink-400 rounded-full blur-3xl opacity-10 top-1/2 left-1/3 animate-float-delay" data-aos="zoom-in" data-aos-delay="600"></div>
  </div>

  <!-- ✨ Floating Particles -->
  <div class="absolute inset-0">
    <span class="particle top-20 left-1/4" data-aos="fade-up" data-aos-delay="200"></span>
    <span class="particle top-1/3 left-1/2" data-aos="fade-up" data-aos-delay="300"></span>
    <span class="particle top-1/2 left-1/5" data-aos="fade-up" data-aos-delay="400"></span>
    <span class="particle bottom-32 left-1/3" data-aos="fade-up" data-aos-delay="500"></span>
    <span class="particle bottom-20 right-1/4" data-aos="fade-up" data-aos-delay="600"></span>
    <span class="particle top-10 right-1/3" data-aos="fade-up" data-aos-delay="700"></span>
    <span class="particle bottom-1/4 right-1/2" data-aos="fade-up" data-aos-delay="800"></span>
  </div>

  <!-- 🧭 Hero Content -->
  <div class="max-w-7xl mx-auto px-6 text-center relative z-10">
    <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6" data-aos="fade-up" data-aos-delay="300">
      The Future of <span class="text-indigo-200">Payments in Africa</span>
    </h1>
    <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="500">
      Seamless, secure, and borderless payments across Africa. Experience the PayPilot advantage today.
    </p>
    <div class="flex justify-center gap-4" data-aos="fade-up" data-aos-delay="700">
      <a href="/register"
         class="bg-white text-indigo-700 font-semibold px-6 py-3 rounded-lg shadow-lg hover:bg-indigo-100 transition-transform hover:-translate-y-1 duration-300">
         Get Started
      </a>
      <a href="/features"
         class="border border-white px-6 py-3 rounded-lg hover:bg-white hover:text-indigo-700 transition-transform hover:-translate-y-1 duration-300">
         Learn More
      </a>
    </div>
  </div>

  <!-- 🌊 Animated Wavy Divider -->
  <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
    <svg class="relative block w-full h-20 text-white" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1440 320">
      <path fill="currentColor">
        <animate attributeName="d" dur="10s" repeatCount="indefinite"
          values="
            M0,224L80,224C160,224,320,224,480,202.7C640,181,800,139,960,138.7C1120,139,1280,181,1360,202.7L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z;
            M0,200L80,210C160,220,320,200,480,180C640,160,800,120,960,130C1120,140,1280,200,1360,220L1440,240L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z;
            M0,224L80,224C160,224,320,224,480,202.7C640,181,800,139,960,138.7C1120,139,1280,181,1360,202.7L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z
          " />
      </path>
    </svg>
  </div>
</section>

<!-- 🎨 Custom Animations -->
<style>
  /* Floating Bubbles */
  @keyframes float {0%,100%{transform:translateY(0)translateX(0)}50%{transform:translateY(-30px)translateX(15px)}}
  @keyframes float-slow {0%,100%{transform:translateY(0)translateX(0)}50%{transform:translateY(-40px)translateX(-20px)}}
  @keyframes float-delay {0%,100%{transform:translateY(0)translateX(0)}50%{transform:translateY(25px)translateX(-15px)}}
  .animate-float{animation:float 8s ease-in-out infinite}
  .animate-float-slow{animation:float-slow 12s ease-in-out infinite}
  .animate-float-delay{animation:float-delay 10s ease-in-out infinite}

  /* Particles */
  .particle {
    position: absolute;
    width: 6px;
    height: 6px;
    background: white;
    border-radius: 50%;
    opacity: 0.7;
    box-shadow: 0 0 8px white, 0 0 12px rgba(255,255,255,0.8);
    animation: drift 12s infinite ease-in-out alternate, twinkle 4s infinite ease-in-out alternate;
  }
  @keyframes twinkle {0%{opacity:0.3;transform:scale(0.8)}50%{opacity:1;transform:scale(1.2)}100%{opacity:0.4;transform:scale(1)}}
  @keyframes drift {0%{transform:translate(0,0)}50%{transform:translate(30px,-20px)}100%{transform:translate(-20px,25px)}}
</style>

<!-- AOS Initialization -->
<script>
  AOS.init({
    duration: 800,
    easing: "ease-in-out",
    once: true,
  });
</script>







    <!-- ✅ Stats Section -->
    <section id="stats" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="p-6" data-aos="zoom-in">
                <h2 class="text-4xl font-bold text-indigo-600 counter" data-target="50000">0</h2>
                <p class="mt-2 text-gray-600">Active Users</p>
            </div>
            <div class="p-6" data-aos="zoom-in" data-aos-delay="200">
                <h2 class="text-4xl font-bold text-indigo-600 counter" data-target="1200000">0</h2>
                <p class="mt-2 text-gray-600">Transactions Processed</p>
            </div>
            <div class="p-6" data-aos="zoom-in" data-aos-delay="400">
                <h2 class="text-4xl font-bold text-indigo-600 counter" data-target="25">0</h2>
                <p class="mt-2 text-gray-600">Countries Served</p>
            </div>
        </div>
    </section>

    <!-- ✅ Features Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-12" data-aos="fade-up">Why Choose PayPilot?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition" data-aos="fade-up">
                    <i data-lucide="shield" class="w-10 h-10 mx-auto text-indigo-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Secure & Trusted</h3>
                    <p class="text-gray-600">Bank-grade encryption to keep your money safe always.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="200">
                    <i data-lucide="zap" class="w-10 h-10 mx-auto text-indigo-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Instant Transfers</h3>
                    <p class="text-gray-600">Enjoy real-time transactions without delays.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="400">
                    <i data-lucide="globe" class="w-10 h-10 mx-auto text-indigo-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Cross-Border</h3>
                    <p class="text-gray-600">Send and receive funds in multiple currencies globally.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="600">
                    <i data-lucide="wallet" class="w-10 h-10 mx-auto text-indigo-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Digital Wallet</h3>
                    <p class="text-gray-600">Store, manage, and use your funds in one place.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="800">
                    <i data-lucide="bar-chart-2" class="w-10 h-10 mx-auto text-indigo-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Analytics</h3>
                    <p class="text-gray-600">Track spending and monitor transactions easily.</p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition" data-aos="fade-up" data-aos-delay="1000">
                    <i data-lucide="headphones" class="w-10 h-10 mx-auto text-indigo-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">24/7 Support</h3>
                    <p class="text-gray-600">Get help anytime with our dedicated support team.</p>
                </div>
            </div>
        </div>
    </section>

   <!-- ✅ Pricing Section -->
<section class="py-20 bg-white" x-data="{ yearly: false }">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6" data-aos="fade-up">Simple Pricing</h2>
        <p class="mb-12 text-gray-600" data-aos="fade-up" data-aos-delay="200">Choose the plan that fits your business.</p>

        <!-- Toggle -->
        <div class="flex justify-center items-center mb-10" data-aos="fade-up" data-aos-delay="400">
            <span :class="!yearly ? 'text-indigo-600 font-semibold' : 'text-gray-500'">Monthly</span>
            <label class="mx-3 relative inline-flex items-center cursor-pointer">
                <input type="checkbox" x-model="yearly" class="sr-only">
                <span class="w-12 h-6 bg-gray-300 rounded-full shadow-inner"></span>
                <span class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full shadow transition-transform"
                      :class="yearly ? 'translate-x-6' : ''"></span>
            </label>
            <span :class="yearly ? 'text-indigo-600 font-semibold' : 'text-gray-500'">Yearly</span>
        </div>

        <!-- Pricing Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Starter -->
            <div class="bg-gray-50 p-8 rounded-xl shadow hover:shadow-lg transition flex flex-col"
                 data-aos="fade-up">
                <i data-lucide="leaf" class="w-8 h-8 text-indigo-600 mb-4 mx-auto"></i>
                <h3 class="text-xl font-semibold mb-4">Starter</h3>
                <p class="text-4xl font-bold text-indigo-600 mb-6">
                    <span x-show="!yearly">$10</span>
                    <span x-show="yearly">$100</span>
                    <span class="text-lg font-medium text-gray-500">/month</span>
                </p>
                <ul class="text-gray-600 space-y-3 mb-6 flex-1">
                    <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-5 h-5 text-green-500"></i> Basic transactions</li>
                    <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-5 h-5 text-green-500"></i> Secure payments</li>
                    <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-5 h-5 text-green-500"></i> Email support</li>
                </ul>
                <a href="/register"
                   class="block w-full bg-indigo-600 text-white py-3 rounded-lg hover:bg-indigo-700 transition">
                   Get Started
                </a>
            </div>

            <!-- Pro (Featured) -->
            <div class="bg-indigo-600 text-white p-10 rounded-2xl shadow-2xl relative scale-105 md:scale-110 flex flex-col"
                 data-aos="fade-up" data-aos-delay="200">
                <span class="absolute top-4 right-4 bg-white text-indigo-600 text-xs font-bold px-2 py-1 rounded">Popular</span>
                <i data-lucide="rocket" class="w-8 h-8 text-white mb-4 mx-auto"></i>
                <h3 class="text-2xl font-semibold mb-4">Pro</h3>
                <p class="text-5xl font-bold mb-6">
                    <span x-show="!yearly">$30</span>
                    <span x-show="yearly">$300</span>
                    <span class="text-lg font-medium">/month</span>
                </p>
                <ul class="space-y-3 mb-6 flex-1">
                    <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-5 h-5 text-white"></i> Unlimited transactions</li>
                    <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-5 h-5 text-white"></i> Analytics dashboard</li>
                    <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-5 h-5 text-white"></i> Priority support</li>
                </ul>
                <a href="/register"
                   class="block w-full bg-white text-indigo-600 py-3 rounded-lg hover:bg-indigo-100 transition">
                   Get Started
                </a>
            </div>

            <!-- Enterprise -->
            <div class="bg-gray-50 p-8 rounded-xl shadow hover:shadow-lg transition flex flex-col"
                 data-aos="fade-up" data-aos-delay="400">
                <i data-lucide="briefcase" class="w-8 h-8 text-indigo-600 mb-4 mx-auto"></i>
                <h3 class="text-xl font-semibold mb-4">Enterprise</h3>
                <p class="text-4xl font-bold text-indigo-600 mb-6">
                    <span x-show="!yearly">$99</span>
                    <span x-show="yearly">$999</span>
                    <span class="text-lg font-medium text-gray-500">/month</span>
                </p>
                <ul class="text-gray-600 space-y-3 mb-6 flex-1">
                    <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-5 h-5 text-green-500"></i> Dedicated account manager</li>
                    <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-5 h-5 text-green-500"></i> Advanced fraud protection</li>
                    <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-5 h-5 text-green-500"></i> 24/7 VIP support</li>
                </ul>
                <a href="/register"
                   class="block w-full bg-indigo-600 text-white py-3 rounded-lg hover:bg-indigo-700 transition">
                   Get Started
                </a>
            </div>
        </div>
    </div>
</section>

    <!-- ✅ Testimonials -->
<section class="relative py-20 bg-gradient-to-b from-indigo-50 via-white to-indigo-50 overflow-hidden">
  <!-- Subtle Pattern -->
  <div class="absolute inset-0 bg-[url('https://www.toptal.com/designers/subtlepatterns/patterns/dot-grid.png')] opacity-10"></div>

  <div class="relative max-w-7xl mx-auto px-6 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-12 text-indigo-700" data-aos="fade-up">
      What Our Users Say
    </h2>

    <!-- Swiper -->
    <div class="swiper" data-aos="zoom-in-up" data-aos-delay="200">
      <div class="swiper-wrapper">

        <!-- Testimonial 1 -->
        <div class="swiper-slide bg-white p-8 rounded-xl shadow-lg text-left flex flex-col items-start" data-aos="fade-up" data-aos-delay="100">
          <p class="text-gray-600 mb-6">“PayPilot is the best fintech I’ve ever used. Fast and reliable.”</p>
          <div class="flex items-center gap-4">
            <img src="/images/john.webp" alt="John Doe" class="w-12 h-12 rounded-full object-cover" loading="lazy" >
            <div>
              <h4 class="font-semibold text-gray-800">John Doe</h4>
              <span class="text-sm text-gray-500">Freelancer</span>
            </div>
          </div>
          <div class="flex mt-4 text-yellow-400">
            <i data-lucide="star" class="w-5 h-5"></i>
            <i data-lucide="star" class="w-5 h-5"></i>
            <i data-lucide="star" class="w-5 h-5"></i>
            <i data-lucide="star" class="w-5 h-5"></i>
            <i data-lucide="star-half" class="w-5 h-5"></i>
          </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="swiper-slide bg-white p-8 rounded-xl shadow-lg text-left flex flex-col items-start" data-aos="fade-up" data-aos-delay="200">
          <p class="text-gray-600 mb-6">“Their support team is always ready to help. Love it!”</p>
          <div class="flex items-center gap-4">
            <img src="/images/users/sarah.jpg" alt="Sarah K." class="w-12 h-12 rounded-full object-cover" loading="lazy" >
            <div>
              <h4 class="font-semibold text-gray-800">Sarah K.</h4>
              <span class="text-sm text-gray-500">Entrepreneur</span>
            </div>
          </div>
          <div class="flex mt-4 text-yellow-400">
            <i data-lucide="star" class="w-5 h-5"></i>
            <i data-lucide="star" class="w-5 h-5"></i>
            <i data-lucide="star" class="w-5 h-5"></i>
            <i data-lucide="star" class="w-5 h-5"></i>
            <i data-lucide="star" class="w-5 h-5"></i>
          </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="swiper-slide bg-white p-8 rounded-xl shadow-lg text-left flex flex-col items-start" data-aos="fade-up" data-aos-delay="300">
          <p class="text-gray-600 mb-6">“Transparent fees and smooth payments, highly recommend.”</p>
          <div class="flex items-center gap-4">
            <img src="/images/users/michael.jpg" alt="Michael A." class="w-12 h-12 rounded-full object-cover" loading="lazy" >
            <div>
              <h4 class="font-semibold text-gray-800">Michael A.</h4>
              <span class="text-sm text-gray-500">Business Owner</span>
            </div>
          </div>
          <div class="flex mt-4 text-yellow-400">
            <i data-lucide="star" class="w-5 h-5"></i>
            <i data-lucide="star" class="w-5 h-5"></i>
            <i data-lucide="star" class="w-5 h-5"></i>
            <i data-lucide="star" class="w-5 h-5"></i>
            <i data-lucide="star-half" class="w-5 h-5"></i>
          </div>
        </div>

        <!-- Testimonial 4 -->
        <div class="swiper-slide bg-white p-8 rounded-xl shadow-lg text-left flex flex-col items-start" data-aos="fade-up" data-aos-delay="400">
          <p class="text-gray-600 mb-6">“The app is so easy to use, I set up payments in minutes.”</p>
          <div class="flex items-center gap-4">
            <img src="/images/users/aisha.jpg" alt="Aisha O." class="w-12 h-12 rounded-full object-cover" loading="lazy" >
            <div>
              <h4 class="font-semibold text-gray-800">Aisha O.</h4>
              <span class="text-sm text-gray-500">Startup Founder</span>
            </div>
          </div>
          <div class="flex mt-4 text-yellow-400">
            <i data-lucide="star" class="w-5 h-5"></i>
            <i data-lucide="star" class="w-5 h-5"></i>
            <i data-lucide="star" class="w-5 h-5"></i>
            <i data-lucide="star" class="w-5 h-5"></i>
            <i data-lucide="star" class="w-5 h-5"></i>
          </div>
        </div>

        <!-- Testimonial 5 -->
        <div class="swiper-slide bg-white p-8 rounded-xl shadow-lg text-left flex flex-col items-start" data-aos="fade-up" data-aos-delay="500">
          <p class="text-gray-600 mb-6">“Secure, reliable, and user-friendly. Best decision I made.”</p>
          <div class="flex items-center gap-4">
            <img src="/images/users/david.jpg" alt="David L." class="w-12 h-12 rounded-full object-cover" loading="lazy" >
            <div>
              <h4 class="font-semibold text-gray-800">David L.</h4>
              <span class="text-sm text-gray-500">Consultant</span>
            </div>
          </div>
          <div class="flex mt-4 text-yellow-400">
            <i data-lucide="star" class="w-5 h-5"></i>
            <i data-lucide="star" class="w-5 h-5"></i>
            <i data-lucide="star" class="w-5 h-5"></i>
            <i data-lucide="star" class="w-5 h-5"></i>
            <i data-lucide="star" class="w-5 h-5"></i>
          </div>
        </div>

      </div>

      <!-- Pagination + Navigation -->
      <div class="swiper-pagination mt-6"></div>
      <div class="swiper-button-prev text-indigo-600"></div>
      <div class="swiper-button-next text-indigo-600"></div>
    </div>
  </div>
</section>

<!-- SwiperJS Init -->
<script>
  const swiper = new Swiper('.swiper', {
    loop: true,
    grabCursor: true,
    spaceBetween: 30,
    slidesPerView: 1,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      768: { slidesPerView: 2 }, 
      1024: { slidesPerView: 3 }
    }
  });

  lucide.createIcons(); // render icons
</script>

<!-- ✅ FAQ Section -->
<section class="relative py-24 px-6 bg-gradient-to-b from-indigo-50 via-gray-50 to-white" data-aos="fade-up">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">

    <!-- 🖼️ Illustration with floating + side-drift -->
    <div class="flex justify-center" data-aos="fade-right">
      <img src="/images/faq.png" 
           alt="FAQ Illustration" 
           class="w-80 md:w-[420px] animate-float-drift drop-shadow-xl">
    </div>

    <!-- 📘 Accordion -->
    <div data-aos="fade-left" x-data="{ open: null }">
      <h2 class="text-4xl font-bold mb-10 text-indigo-700">Frequently Asked Questions</h2>

      <div class="space-y-4">
        <!-- Reusable FAQ Component -->
        <template x-for="(faq, index) in [
          {q: 'Can I cancel anytime?', a: 'Yes! You can cancel your subscription at any time from your dashboard.'},
          {q: 'Do you offer a free trial?', a: 'Yes, our Starter plan is free forever. You can upgrade anytime.'},
          {q: 'What payment methods do you accept?', a: 'We accept credit cards, debit cards, and popular African payment gateways.'},
          {q: 'Can I switch plans later?', a: 'Absolutely. You can upgrade or downgrade your plan at any time.'},
          {q: 'Is my data secure with you?', a: '100%. We use bank-level encryption and best security practices.'},
          {q: 'Do you provide customer support?', a: 'Yes, our support team is available 24/7 via email and chat.'},
          {q: 'Do you support team accounts?', a: 'Yes, you can invite multiple teammates and manage permissions easily.'},
          {q: 'Will I be charged automatically after trial?', a: 'No. We’ll notify you before your trial ends.'},
          {q: 'Do you offer discounts for NGOs?', a: 'Yes, we provide special discounts for students and non-profits.'},
          {q: 'How often do you release new features?', a: 'We ship new updates every month and major features quarterly.'}
        ]" :key="index">
          <div class="border border-indigo-100 rounded-2xl bg-white shadow-sm hover:shadow-lg transition-all duration-300 hover:border-indigo-300">
            <button 
              @click="open === index ? open = null : open = index"
              class="w-full flex justify-between items-center p-5 text-left font-medium text-gray-800 group">
              <span x-text="faq.q" class="group-hover:text-indigo-700 transition-colors duration-300"></span>
              <svg xmlns="http://www.w3.org/2000/svg" 
                   fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                   class="w-6 h-6 text-indigo-600 transform transition-transform duration-300"
                   :class="open === index ? 'rotate-180' : 'rotate-0'">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
              </svg>
            </button>
            <div x-show="open === index" x-collapse x-cloak class="px-5 pb-5 text-gray-600 leading-relaxed">
              <p x-text="faq.a"></p>
            </div>
          </div>
        </template>
      </div>
    </div>
  </div>
</section>

<!-- 🌊 Animated Divider -->
<div class="relative overflow-hidden">
  <svg class="absolute bottom-0 left-0 w-full h-20 rotate-180" xmlns="http://www.w3.org/2000/svg"
       viewBox="0 0 1440 320" preserveAspectRatio="none">
    <defs>
      <linearGradient id="faqWaveGradientBottom" x1="0%" y1="0%" x2="100%" y2="0%">
        <stop offset="0%" stop-color="#6366F1"/>
        <stop offset="100%" stop-color="#8B5CF6"/>
      </linearGradient>
    </defs>
    <path fill="url(#faqWaveGradientBottom)">
      <animate attributeName="d" dur="8s" repeatCount="indefinite"
        values="
          M0,160 C480,220 960,100 1440,160 L1440,320 L0,320 Z;
          M0,140 C480,180 960,140 1440,120 L1440,320 L0,320 Z;
          M0,160 C480,220 960,100 1440,160 L1440,320 L0,320 Z
        " />
    </path>
  </svg>
</div>

<!-- 🌀 Floating Animations -->
<style>
  @keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
  }

  @keyframes drift {
    0%, 100% { transform: translateX(0); }
    50% { transform: translateX(8px); }
  }

  .animate-float-drift {
    animation: float 3s ease-in-out infinite, drift 5s ease-in-out infinite;
  }
</style>



    <!-- ✅ Call to Action -->
    <section class="py-20 bg-gradient-to-r from-indigo-600 to-purple-700 text-white text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6" data-aos="fade-up">Ready to Get Started?</h2>
        <p class="mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
            Join thousands of Africans already using PayPilot for secure, fast, and borderless payments.
        </p>
        <a href="/register"
           class="bg-white text-indigo-700 px-8 py-4 rounded-lg font-semibold shadow hover:bg-indigo-100 transition"
           data-aos="fade-up" data-aos-delay="400">
           Create Free Account
        </a>
    </section>
@endsection
