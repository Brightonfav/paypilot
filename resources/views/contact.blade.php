@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<section class="bg-gradient-to-r from-pink-600 to-rose-600 text-white py-20 px-6 text-center" data-aos="fade-down">
    <h1 class="text-4xl md:text-6xl font-bold mb-6">Get in Touch</h1>
    <p class="text-lg">We’re here to help! Contact us anytime.</p>
</section>

<section class="py-20 px-6 bg-gray-50">
    <div class="max-w-3xl mx-auto">
        <form class="bg-white p-8 rounded-2xl shadow space-y-6" data-aos="fade-up">
            <div>
                <label class="block text-gray-700 mb-2">Name</label>
                <input type="text" class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-pink-600" />
            </div>
            <div>
                <label class="block text-gray-700 mb-2">Email</label>
                <input type="email" class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-pink-600" />
            </div>
            <div>
                <label class="block text-gray-700 mb-2">Message</label>
                <textarea rows="5" class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-pink-600"></textarea>
            </div>
            <button type="submit" class="bg-pink-600 text-white px-6 py-3 rounded-lg shadow hover:bg-pink-700 transition">
                Send Message
            </button>
        </form>
    </div>
</section>
@endsection

]]++
