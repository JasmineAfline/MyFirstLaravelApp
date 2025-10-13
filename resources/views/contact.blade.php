@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="contact-section">
    <h1>Contact Us</h1>
    <p>Have questions or feedback? We’d love to hear from you!</p>

    <form class="contact-form">
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>
        </div>

        <button type="submit" class="btn">Send Message</button>
    </form>
</div>
@endsection
