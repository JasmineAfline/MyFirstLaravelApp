@extends('layouts.app')

@section('content')
<div class="home-section">
    <h1>Our Categories</h1>
    <p>Explore different sections of our Laravel app — designed beautifully for you.</p>

    <div class="card-container">
        <div class="card">
            <h3>Web Development</h3>
            <p>Learn how to build dynamic web applications using Laravel, Vue, and more.</p>
            <a href="#" class="btn">Explore</a>
        </div>

        <div class="card">
            <h3>Graphic Design</h3>
            <p>Explore our creative design tutorials and templates for your next project.</p>
            <a href="#" class="btn">Discover</a>
        </div>

        <div class="card">
            <h3>Content Writing</h3>
            <p>Master the art of writing engaging articles, blogs, and social media posts.</p>
            <a href="#" class="btn">Read More</a>
        </div>
    </div>
</div>
@endsection
