@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <div class="welcome-section">
        <h1>Welcome to My Laravel App</h1>
        <p>Beautifully designed pages, modern layout, and smooth navigation.</p>
        <a href="{{ url('/home') }}" class="btn">Explore More</a>
    </div>
@endsection
