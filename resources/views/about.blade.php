@extends('layouts.app')

@section('title', 'About')

@section('content')
    <h1>About Us</h1>
    <p>We are a passionate team building apps with Laravel to help people learn and grow.</p>
    <a href="{{ url('/home') }}" class="btn">Back to Home</a>
@endsection
