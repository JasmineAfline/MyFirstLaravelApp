@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-100 to-purple-100 py-16 px-6 md:px-20">
    <div class="max-w-4xl mx-auto text-center" data-aos="fade-down">
        <h1 class="text-5xl font-extrabold text-indigo-700 mb-4">About Us</h1>
        <p class="text-gray-600 text-lg mb-12">
            We are a passionate team dedicated to crafting elegant and powerful web applications using Laravel.
            Our goal is to help learners and creators turn their ideas into reality through beautiful and functional design.
        </p>
    </div>

    <!-- Mission Card -->
    <div class="max-w-3xl mx-auto bg-white shadow-2xl rounded-3xl p-10 mb-16 hover:scale-[1.02] transition-transform duration-300" data-aos="fade-up">
        <h2 class="text-2xl font-bold text-indigo-600 mb-3">Our Mission 🚀</h2>
        <p class="text-gray-700 leading-relaxed">
            Our mission is to make technology more accessible and enjoyable.  
            We believe learning should be creative, collaborative, and inspiring.  
            That’s why we build projects and tutorials that empower everyone — from beginners to pros — to code with confidence.
        </p>
    </div>

    <!-- Team Section -->
    <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
        <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-2xl transition duration-300 text-center" data-aos="zoom-in" data-aos-delay="100">
            <img src="https://source.unsplash.com/200x200/?developer" alt="Developer"
                 class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
            <h3 class="text-xl font-semibold text-indigo-700 mb-2">Creative Developers</h3>
            <p class="text-gray-600 text-sm">
                Our team blends design and logic to bring every project to life beautifully and efficiently.
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-2xl transition duration-300 text-center" data-aos="zoom-in" data-aos-delay="200">
            <img src="https://source.unsplash.com/200x200/?designer" alt="Designer"
                 class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
            <h3 class="text-xl font-semibold text-indigo-700 mb-2">Design Experts</h3>
            <p class="text-gray-600 text-sm">
                Our designers focus on crafting user-friendly, modern, and visually appealing layouts.
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-2xl transition duration-300 text-center" data-aos="zoom-in" data-aos-delay="300">
            <img src="https://source.unsplash.com/200x200/?teamwork" alt="Teamwork"
                 class="w-32 h-32 rounded-full mx-auto mb-4 object-cover">
            <h3 class="text-xl font-semibold text-indigo-700 mb-2">Teamwork</h3>
            <p class="text-gray-600 text-sm">
                Collaboration is at the heart of everything we do — together, we create better.
            </p>
        </div>
    </div>

    <!-- Button -->
    <div class="mt-16 text-center" data-aos="fade-up">
        <a href="{{ url('/home') }}"
           class="inline-block bg-indigo-600 text-white px-8 py-3 rounded-xl font-semibold hover:bg-indigo-700 shadow-lg hover:shadow-xl transition duration-200">
           Back to Home
        </a>
    </div>
</div>
@endsection
