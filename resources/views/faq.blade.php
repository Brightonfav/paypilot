@extends('layouts.app')

@section('title', 'FAQ')

@section('content')
<section class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-20 px-6 text-center" data-aos="fade-down">
    <h1 class="text-4xl md:text-6xl font-bold mb-6">Frequently Asked Questions</h1>
    <p class="text-lg">Answers to common questions about PayPilot Africa.</p>
</section>

<section class="py-20 px-6 max-w-4xl mx-auto">
    <div class="space-y-6" data-aos="fade-up">
        <div class="p-6 bg-white rounded-xl shadow">
            <h3 class="font-semibold text-lg mb-2">Is PayPilot Africa free?</h3>
            <p class="text-gray-600">Yes! We offer a free plan with essential tools. You can upgrade anytime for more features.</p>
        </div>

        <div class="p-6 bg-white rounded-xl shadow">
            <h3 class="font-semibold text-lg mb-2">Which payment methods are supported?</h3>
            <p class="text-gray-600">We support bank transfers, cards, and popular mobile money options across Africa.</p>
        </div>

        <div class="p-6 bg-white rounded-xl shadow">
            <h3 class="font-semibold text-lg mb-2">Can I manage multiple clients?</h3>
            <p class="text-gray-600">Yes, you can easily manage unlimited clients and track all your invoices in one place.</p>
        </div>
    </div>
</section>
@endsection
