@extends('layouts.app')

@section('title', 'Pricing')

@section('content')

<!-- Hero Section -->
<section class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-24 px-6 text-center" data-aos="fade-down">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-6xl font-bold mb-6">Simple, Transparent Pricing</h1>
        <p class="text-lg md:text-xl mb-8">Choose the plan that works best for your business. No hidden fees.</p>
        <div class="inline-flex items-center bg-white text-indigo-600 rounded-full px-6 py-2 font-semibold shadow hover:shadow-lg transition">
            <span class="mr-2">Save 20%</span> with yearly billing
        </div>
    </div>
</section>

 gap-2"><i data-lucide="headphones" class="text-green-500 w-5 h-5"></i> Priority support</li>
        <li class="flex items-center gap-2"><i data-lucide="palette" class="text-green-500 w-5 h-5"></i> Custom branding</li>
      </ul>
      <a href="/register" class="bl<!-- Pricing Section -->
<section class="py-20 px-6 bg-gray-50">
  <div class="max-w-6xl mx-auto text-center mb-12">
    <h2 class="text-4xl font-bold text-gray-900">Simple, Transparent Pricing</h2>
    <p class="text-gray-600 mt-4">Choose a plan that fits your needs. No hidden fees.</p>
  </div>

  <div class="max-w-6xl mx-auto grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

    <!-- Starter Plan -->
    <div class="bg-white rounded-2xl shadow-lg p-8 text-center hover:shadow-xl transition" data-aos="zoom-in">
      <h3 class="text-2xl font-semibold mb-4">Starter</h3>
      <p class="text-gray-600 mb-6">Perfect for freelancers just starting out.</p>
      <div class="text-4xl font-bold mb-6">$0 <span class="text-lg text-gray-500">/mo</span></div>
      <ul class="space-y-3 mb-8 text-gray-600 text-left">
        <li class="flex items-center gap-2"><i data-lucide="check-circle" class="text-green-500 w-5 h-5"></i> Create unlimited invoices</li>
        <li class="flex items-center gap-2"><i data-lucide="check-circle" class="text-green-500 w-5 h-5"></i> Track payments</li>
        <li class="flex items-center gap-2"><i data-lucide="check-circle" class="text-green-500 w-5 h-5"></i> 1 client project</li>
      </ul>
      <a href="/register" class="block bg-indigo-600 text-white py-3 rounded-lg shadow hover:bg-indigo-700 transition">Get Started Free</a>
    </div>

    <!-- Pro Plan -->
    <div class="bg-indigo-600 text-white rounded-2xl shadow-lg p-8 text-center transform scale-105 hover:scale-110 transition" data-aos="zoom-in" data-aos-delay="150">
      <h3 class="text-2xl font-semibold mb-4">Pro <span class="bg-white text-indigo-600 text-sm px-2 py-1 rounded-full ml-2">Popular</span></h3>
      <p class="mb-6">For growing freelancers & small businesses.</p>
      <div class="text-4xl font-bold mb-6">$15 <span class="text-lg text-indigo-200">/mo</span></div>
      <ul class="space-y-3 mb-8 text-left">
        <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-5 h-5"></i> Unlimited invoices</li>
        <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-5 h-5"></i> Unlimited clients</li>
        <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-5 h-5"></i> Expense tracking</li>
        <li class="flex items-center gap-2"><i data-lucide="check-circle" class="w-5 h-5"></i> Email support</li>
      </ul>
      <a href="/register" class="block bg-white text-indigo-600 py-3 rounded-lg font-semibold shadow hover:bg-gray-100 transition">Choose Pro</a>
    </div>

    <!-- Business Plan -->
    <div class="bg-white rounded-2xl shadow-lg p-8 text-center hover:shadow-xl transition" data-aos="zoom-in" data-aos-delay="300">
      <h3 class="text-2xl font-semibold mb-4">Business</h3>
      <p class="text-gray-600 mb-6">Advanced tools for teams and agencies.</p>
      <div class="text-4xl font-bold mb-6">$29 <span class="text-lg text-gray-500">/mo</span></div>
      <ul class="space-y-3 mb-8 text-gray-600 text-left">
        <li class="flex items-center gap-2"><i data-lucide="check-circle" class="text-green-500 w-5 h-5"></i> All Pro features</li>
        <li class="flex items-center gap-2"><i data-lucide="users" class="text-green-500 w-5 h-5"></i> Team collaboration</li>
        <li class="flex items-centerock bg-indigo-600 text-white py-3 rounded-lg shadow hover:bg-indigo-700 transition">Get Business</a>
    </div>

  </div>
</section>

<!-- Lucide JS -->
<script src="https://unpkg.com/lucide@latest"></script>
<script>
  lucide.createIcons();
</script>

<!-- Comparison Table -->
<section class="py-20 px-6 bg-white" data-aos="fade-up">
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
          <tr class="hover:bg-indigo-50 transition duration-300">
            <td class="p-4 font-medium text-gray-800">Invoices</td>
            <td class="p-4 text-center"><i data-lucide="check" class="text-green-600 w-5 h-5 mx-auto"></i></td>
            <td class="p-4 text-center"><i data-lucide="check" class="text-green-600 w-5 h-5 mx-auto"></i></td>
            <td class="p-4 text-center"><i data-lucide="check" class="text-green-600 w-5 h-5 mx-auto"></i></td>
          </tr>
          <tr class="hover:bg-indigo-50 transition duration-300">
            <td class="p-4 font-medium text-gray-800">Clients</td>
            <td class="p-4 text-center">1</td>
            <td class="p-4 text-center"><i data-lucide="check" class="text-green-600 w-5 h-5 mx-auto"></i></td>
            <td class="p-4 text-center"><i data-lucide="check" class="text-green-600 w-5 h-5 mx-auto"></i></td>
          </tr>
          <tr class="hover:bg-indigo-50 transition duration-300">
            <td class="p-4 font-medium text-gray-800">Team members</td>
            <td class="p-4 text-center"><i data-lucide="x" class="text-red-500 w-5 h-5 mx-auto"></i></td>
            <td class="p-4 text-center"><i data-lucide="x" class="text-red-500 w-5 h-5 mx-auto"></i></td>
            <td class="p-4 text-center"><i data-lucide="check" class="text-green-600 w-5 h-5 mx-auto"></i></td>
          </tr>
          <tr class="hover:bg-indigo-50 transition duration-300">
            <td class="p-4 font-medium text-gray-800">Support</td>
            <td class="p-4 text-center">Community</td>
            <td class="p-4 text-center">Email</td>
            <td class="p-4 text-center">Priority</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Trust Badges -->
    <div class="mt-12 text-center">
      <p class="text-gray-600 font-medium mb-6">
        Trusted by <span class="text-indigo-600 font-bold">1,000+ businesses</span> worldwide
      </p>
      <div class="flex justify-center items-center gap-8 flex-wrap">
        <img src="/images/stripe.png" alt="Stripe" class="h-10 grayscale hover:grayscale-0 transition">
        <img src="/images/paypal.png" alt="PayPal" class="h-10 grayscale hover:grayscale-0 transition">
        <img src="/images/visa.png" alt="Visa" class="h-10 grayscale hover:grayscale-0 transition">
        <img src="/images/Mastercard.png" alt="Mastercard" class="h-10 grayscale hover:grayscale-0 transition">
      </div>
    </div>
  </div>
</section>

<!-- Load Lucide -->
<script src="https://unpkg.com/lucide@latest"></script>
<script>
  lucide.createIcons();
</script>


<!-- Testimonials -->
<section class="bg-gray-50 py-20 px-6" data-aos="fade-up">
    <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-12">What Our Users Say</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white shadow p-6 rounded-2xl">
                <p class="text-gray-600 mb-4">“PayPilot Africa makes invoicing so easy. I get paid faster!”</p>
                <h4 class="font-semibold">– Sarah, Freelancer</h4>
            </div>
            <div class="bg-white shadow p-6 rounded-2xl">
                <p class="text-gray-600 mb-4">“Managing my clients has never been smoother.”</p>
                <h4 class="font-semibold">– David, Small Business</h4>
            </div>
            <div class="bg-white shadow p-6 rounded-2xl">
                <p class="text-gray-600 mb-4">“The Pro plan is worth every penny.”</p>
                <h4 class="font-semibold">– Amina, Entrepreneur</h4>
            </div>
        </div>
    </div>
</section>

<!-- Wavy Divider (Top, Animated) -->
<div class="relative overflow-hidden">
  <svg class="absolute top-0 left-0 w-full h-20"
       xmlns="http://www.w3.org/2000/svg"
       viewBox="0 0 1440 320"
       preserveAspectRatio="none">
    <defs>
      <linearGradient id="faqWaveGradientTop" x1="0%" y1="0%" x2="100%" y2="0%">
        <stop offset="0%" stop-color="#6366F1"/> <!-- Indigo -->
        <stop offset="100%" stop-color="#8B5CF6"/> <!-- Violet -->
      </linearGradient>
    </defs>
    <path fill="url(#faqWaveGradientTop)">
      <animate attributeName="d" dur="8s" repeatCount="indefinite"
        values="
          M0,160 C480,220 960,100 1440,160 L1440,320 L0,320 Z;
          M0,140 C480,180 960,140 1440,120 L1440,320 L0,320 Z;
          M0,160 C480,220 960,100 1440,160 L1440,320 L0,320 Z
        " />
    </path>
  </svg>
</div>

<!-- FAQ Section -->
<section class="py-20 px-6 bg-gradient-to-b from-indigo-50 via-gray-50 to-white relative" data-aos="fade-up">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
    
    <!-- Left Side: Illustration -->
    <div class="flex justify-center" data-aos="fade-right">
      <img src="/images/faq.png" 
           alt="FAQ Illustration" 
           class="w-80 md:w-[400px] animate-float">
    </div>

    <!-- Right Side: Accordion -->
    <div data-aos="fade-left">
      <h2 class="text-4xl font-bold mb-10 text-indigo-700">
        Frequently Asked Questions
      </h2>

      <div class="space-y-4" x-data="{ open: null }">
        
        <!-- FAQ Item -->
        <div class="border border-indigo-100 rounded-2xl bg-white shadow-md hover:shadow-lg transition">
          <button 
            @click="open === 1 ? open = null : open = 1" 
            class="w-full flex justify-between items-center p-5 text-left font-semibold text-gray-800">
            <span>Can I cancel anytime?</span>
            <i :class="open === 1 ? 'lucide-minus text-indigo-600' : 'lucide-plus text-indigo-600'" 
               class="w-6 h-6 transition-transform duration-300"></i>
          </button>
          <div x-show="open === 1" x-collapse class="px-5 pb-5 text-gray-600">
            Yes! You can cancel your subscription at any time from your dashboard.
          </div>
        </div>

        <!-- FAQ Item -->
        <div class="border border-indigo-100 rounded-2xl bg-white shadow-md hover:shadow-lg transition">
          <button 
            @click="open === 2 ? open = null : open = 2" 
            class="w-full flex justify-between items-center p-5 text-left font-semibold text-gray-800">
            <span>Do you offer a free trial?</span>
            <i :class="open === 2 ? 'lucide-minus text-indigo-600' : 'lucide-plus text-indigo-600'" 
               class="w-6 h-6 transition-transform duration-300"></i>
          </button>
          <div x-show="open === 2" x-collapse class="px-5 pb-5 text-gray-600">
            Yes, our Starter plan is free forever. You can upgrade anytime.
          </div>
        </div>

        <!-- FAQ Item -->
        <div class="border border-indigo-100 rounded-2xl bg-white shadow-md hover:shadow-lg transition">
          <button 
            @click="open === 3 ? open = null : open = 3" 
            class="w-full flex justify-between items-center p-5 text-left font-semibold text-gray-800">
            <span>What payment methods do you accept?</span>
            <i :class="open === 3 ? 'lucide-minus text-indigo-600' : 'lucide-plus text-indigo-600'" 
               class="w-6 h-6 transition-transform duration-300"></i>
          </button>
          <div x-show="open === 3" x-collapse class="px-5 pb-5 text-gray-600">
            We accept credit cards, debit cards, and popular African payment gateways.
          </div>
        </div>

        <!-- FAQ Item -->
        <div class="border border-indigo-100 rounded-2xl bg-white shadow-md hover:shadow-lg transition">
          <button 
            @click="open === 4 ? open = null : open = 4" 
            class="w-full flex justify-between items-center p-5 text-left font-semibold text-gray-800">
            <span>Can I switch plans later?</span>
            <i :class="open === 4 ? 'lucide-minus text-indigo-600' : 'lucide-plus text-indigo-600'" 
               class="w-6 h-6 transition-transform duration-300"></i>
          </button>
          <div x-show="open === 4" x-collapse class="px-5 pb-5 text-gray-600">
            Absolutely. You can upgrade or downgrade your plan at any time.
          </div>
        </div>

        <!-- Extra Question -->
        <div class="border border-indigo-100 rounded-2xl bg-white shadow-md hover:shadow-lg transition">
          <button 
            @click="open === 5 ? open = null : open = 5" 
            class="w-full flex justify-between items-center p-5 text-left font-semibold text-gray-800">
            <span>Is my data secure with you?</span>
            <i :class="open === 5 ? 'lucide-minus text-indigo-600' : 'lucide-plus text-indigo-600'" 
               class="w-6 h-6 transition-transform duration-300"></i>
          </button>
          <div x-show="open === 5" x-collapse class="px-5 pb-5 text-gray-600">
            100%. We use bank-level encryption and follow best security practices to protect your information.
          </div>
        </div>

        <!-- Extra Question -->
        <div class="border border-indigo-100 rounded-2xl bg-white shadow-md hover:shadow-lg transition">
          <button 
            @click="open === 6 ? open = null : open = 6" 
            class="w-full flex justify-between items-center p-5 text-left font-semibold text-gray-800">
            <span>Do you provide customer support?</span>
            <i :class="open === 6 ? 'lucide-minus text-indigo-600' : 'lucide-plus text-indigo-600'" 
               class="w-6 h-6 transition-transform duration-300"></i>
          </button>
          <div x-show="open === 6" x-collapse class="px-5 pb-5 text-gray-600">
            Yes, our support team is available 24/7 via email and chat to assist you.
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- Wavy Divider (Bottom, Animated) -->
<div class="relative overflow-hidden">
  <svg class="absolute bottom-0 left-0 w-full h-20 rotate-180"
       xmlns="http://www.w3.org/2000/svg"
       viewBox="0 0 1440 320"
       preserveAspectRatio="none">
    <defs>
      <linearGradient id="faqWaveGradientBottom" x1="0%" y1="0%" x2="100%" y2="0%">
        <stop offset="0%" stop-color="#6366F1"/> <!-- Indigo -->
        <stop offset="100%" stop-color="#8B5CF6"/> <!-- Violet -->
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

<!-- Custom Animation -->
<style>
  .animate-float {
    animation: float 3s ease-in-out infinite;
  }
  @keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
  }
</style>

<!-- Lucide Icons -->
<script src="https://unpkg.com/lucide@latest"></script>
<script>
  lucide.createIcons();
</script>


<!-- Final CTA -->
<section class="bg-indigo-600 text-white py-20 px-6 text-center" data-aos="fade-up">
    <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to grow your business?</h2>
    <p class="mb-8 text-lg">Pick a plan today and start managing your clients with ease.</p>
    <a href="/register" class="bg-white text-indigo-600 px-8 py-3 rounded-lg font-semibold shadow hover:bg-gray-100 transition">
        Get Started Now
    </a>
</section>

@endsection
