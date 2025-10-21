@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-b from-indigo-50 to-white py-16 px-6 md:px-20">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-indigo-700 mb-3">Our Categories</h1>
        <p class="text-gray-600 text-lg">Explore different sections of our Laravel app — designed beautifully for you.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Card 1 -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition duration-300">
            <img src="https://images.unsplash.com/photo-1581091215367-59ab6b66d29f?auto=format&fit=crop&w=600&q=80" alt="Web Development" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Web Development</h3>
                <p class="text-gray-600 mb-4">Learn how to build dynamic web applications using Laravel, Vue, and more.</p>
                <a href="#" class="inline-block bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition duration-200">
                    Explore
                </a>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition duration-300">
            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=600&q=80" alt="Graphic Design" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Graphic Design</h3>
                <p class="text-gray-600 mb-4">Explore our creative design tutorials and templates for your next project.</p>
                <a href="#" class="inline-block bg-pink-600 text-white px-4 py-2 rounded-lg hover:bg-pink-700 transition duration-200">
                    Discover
                </a>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition duration-300">
            <img src="https://images.unsplash.com/photo-1492724441997-5dc865305da7?auto=format&fit=crop&w=600&q=80" alt="Content Writing" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Content Writing</h3>
                <p class="text-gray-600 mb-4">Master the art of writing engaging articles, blogs, and social media posts.</p>
                <a href="#" class="inline-block bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition duration-200">
                    Read More
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
