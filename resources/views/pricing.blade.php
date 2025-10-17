@extends('layouts.app')

@section('title', 'Pricing')

@section('content')

<!-- 🌟 Pricing Hero Section -->
<section class="relative bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 text-white py-32 md:py-40 overflow-hidden">
  
  <!-- 🌈 Animated Gradient Glows -->
  <div class="absolute top-0 left-0 w-96 h-96 bg-white/10 rounded-full blur-3xl animate-float-slow -translate-x-1/3 -translate-y-1/3"></div>
  <div class="absolute bottom-0 right-0 w-[28rem] h-[28rem] bg-indigo-400/10 rounded-full blur-3xl animate-float"></div>
  <div class="absolute top-1/2 right-1/4 w-72 h-72 bg-pink-400/10 rounded-full blur-3xl animate-pulse-slow"></div>

  <!-- 🌀 Pattern Overlay -->
  <div class="absolute inset-0 bg-[url('https://www.toptal.com/designers/subtlepatterns/patterns/dot-grid.png')] opacity-10 mix-blend-overlay"></div>

  <!-- ✨ Content -->
  <div class="relative max-w-6xl mx-auto text-center px-6" data-aos="fade-down">
    
    <!-- 🔹 Subtitle -->
    <span class="inline-block text-indigo-200 uppercase tracking-widest text-sm font-semibold mb-4 animate-fade-in">
      Pricing Plans
    </span>

    <!-- 🔹 Main Heading -->
    <h1 class="text-5xl md:text-7xl font-extrabold leading-tight mb-6 animate-fade-in">
      Simple, Transparent <span class="text-yellow-300">Pricing</span>
    </h1>

    <!-- 🔹 Description -->
    <p class="text-lg md:text-2xl text-indigo-100 mb-10 max-w-3xl mx-auto animate-fade-in-delay">
      Choose the plan that fits your business best — no hidden fees, just value that scales with you.
    </p>

    <!-- 🔹 Save 20% Badge -->
    <div class="inline-flex items-center bg-white text-indigo-700 rounded-full px-8 py-3 font-semibold shadow-lg hover:shadow-xl transition animate-bounce-slow">
      <i data-lucide="sparkles" class="w-5 h-5 mr-2 text-indigo-500"></i>
      <span class="mr-2">Save 20%</span> with yearly billing
    </div>

    <!-- 🔹 CTA Button -->
    <div class="mt-10">
      <a href="#plans"
         class="bg-white text-indigo-600 px-10 py-4 rounded-2xl font-semibold text-lg shadow-lg hover:bg-gray-100 transition duration-300">
        View Plans
      </a>
    </div>
  </div>

  <!-- 🌊 Decorative Wave Divider -->
  <svg class="absolute bottom-0 left-0 w-full h-24" xmlns="http://www.w3.org/2000/svg"
       viewBox="0 0 1440 320" preserveAspectRatio="none">
    <path fill="#fff" fill-opacity="1"
      d="M0,224L80,218.7C160,213,320,203,480,181.3C640,160,800,128,960,117.3C1120,107,1280,117,1360,122.7L1440,128V320H0Z">
    </path>
  </svg>
</section>

<!-- 🎨 Animations -->
<style>
  @keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-15px); }
  }

  @keyframes pulseSlow {
    0%, 100% { opacity: 0.6; transform: scale(1); }
    50% { opacity: 1; transform: scale(1.05); }
  }

  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(25px); }
    to { opacity: 1; transform: translateY(0); }
  }

  .animate-float { animation: float 6s ease-in-out infinite; }
  .animate-float-slow { animation: float 10s ease-in-out infinite; }
  .animate-pulse-slow { animation: pulseSlow 8s ease-in-out infinite; }
  .animate-fade-in { animation: fadeIn 1s ease forwards; }
  .animate-fade-in-delay { animation: fadeIn 1.3s ease forwards; }
  .animate-bounce-slow { animation: bounce 3s ease-in-out infinite; }
</style>




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


<!-- 📊 Comparison Table -->
<section class="bg-gray-50 py-20 px-6" data-aos="fade-up" data-aos-delay="250">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-3xl font-bold text-center mb-12">Compare Plans</h2>

    <div class="overflow-x-auto">
      <table class="w-full border-collapse shadow-lg rounded-2xl overflow-hidden">
        <thead>
          <tr class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white">
            <th class="p-4 text-left">Features</th>
            <th class="p-4 text-center">Starter</th>
            <th class="p-4 text-center">Pro</th>
            <th class="p-4 text-center">Business</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr><td class="p-4 font-medium">Invoices</td><td class="p-4 text-center"><i data-lucide="check" class="text-green-600 mx-auto"></i></td><td class="p-4 text-center"><i data-lucide="check" class="text-green-600 mx-auto"></i></td><td class="p-4 text-center"><i data-lucide="check" class="text-green-600 mx-auto"></i></td></tr>
          <tr><td class="p-4 font-medium">Clients</td><td class="p-4 text-center">1</td><td class="p-4 text-center"><i data-lucide="check" class="text-green-600 mx-auto"></i></td><td class="p-4 text-center"><i data-lucide="check" class="text-green-600 mx-auto"></i></td></tr>
          <tr><td class="p-4 font-medium">Team members</td><td class="p-4 text-center"><i data-lucide="x" class="text-red-500 mx-auto"></i></td><td class="p-4 text-center"><i data-lucide="x" class="text-red-500 mx-auto"></i></td><td class="p-4 text-center"><i data-lucide="check" class="text-green-600 mx-auto"></i></td></tr>
          <tr><td class="p-4 font-medium">Support</td><td class="p-4 text-center">Community</td><td class="p-4 text-center">Email</td><td class="p-4 text-center">Priority</td></tr>
        </tbody>
      </table>
    </div>

    <!-- Trust Badges -->
    <div class="mt-12 text-center">
      <p class="text-gray-600 font-medium mb-6">
        Trusted by <span class="text-indigo-600 font-bold">1,000+ businesses</span> worldwide
      </p>
      <div class="flex justify-center items-center gap-8 flex-wrap">
        <img src="/images/stripe.png" class="h-10 grayscale hover:grayscale-0 transition" alt="Stripe">
        <img src="/images/paypal.png" class="h-10 grayscale hover:grayscale-0 transition" alt="PayPal">
        <img src="/images/visa.png" class="h-10 grayscale hover:grayscale-0 transition" alt="Visa">
        <img src="/images/mastercard.png" class="h-10 grayscale hover:grayscale-0 transition" alt="Mastercard">
      </div>
    </div>
  </div>
</section>

<!-- 💬 Testimonials -->
<section class="bg-gray-50 py-20 px-6" data-aos="fade-up">
  <div class="max-w-6xl mx-auto text-center">
    <h2 class="text-3xl font-bold mb-12">What Our Users Say</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-white shadow p-6 rounded-2xl"><p class="text-gray-600 mb-4">“PayPilot Africa makes invoicing so easy. I get paid faster!”</p><h4 class="font-semibold">– Sarah, Freelancer</h4></div>
      <div class="bg-white shadow p-6 rounded-2xl"><p class="text-gray-600 mb-4">“Managing my clients has never been smoother.”</p><h4 class="font-semibold">– David, Small Business</h4></div>
      <div class="bg-white shadow p-6 rounded-2xl"><p class="text-gray-600 mb-4">“The Pro plan is worth every penny.”</p><h4 class="font-semibold">– Amina, Entrepreneur</h4></div>
    </div>
  </div>
</section>

<!-- 🚀 Final CTA -->
<section class="bg-indigo-600 text-white py-20 px-6 text-center" data-aos="fade-up" data-aos-delay="400">
  <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to grow your business?</h2>
  <p class="mb-8 text-lg">Pick a plan today and start managing your clients with ease.</p>
  <a href="/register" class="bg-white text-indigo-600 px-8 py-3 rounded-lg font-semibold shadow hover:bg-gray-100 transition">Get Started Now</a>
</section>

<!-- Lucide Icons -->
<script src="https://unpkg.com/lucide@latest"></script>
<script>
  lucide.createIcons();
</script>


@endsection
