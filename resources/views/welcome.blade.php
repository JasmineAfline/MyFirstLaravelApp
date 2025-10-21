@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <div class="welcome-section text-center mt-20">
        <h1 class="text-4xl font-bold text-blue-600 mb-4">
            Welcome to My Laravel App
        </h1>
        <p class="text-gray-700 mb-6">
            Beautifully designed pages, modern layout, and smooth navigation.
        </p>
        <a href="{{ url('/dashboard') }}" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
            Explore More
        </a>
    </div>
@endsection
