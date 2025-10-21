@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-50 to-blue-100 py-16 px-6 md:px-20">
    <div class="max-w-3xl mx-auto bg-white shadow-2xl rounded-3xl p-10">
        <h1 class="text-4xl font-bold text-center text-indigo-700 mb-4">Contact Us</h1>
        <p class="text-center text-gray-600 mb-10">
            Have questions or feedback? We’d love to hear from you!
        </p>

        <form action="#" method="POST" class="space-y-6">
            @csrf

            <!-- Full Name -->
            <div>
                <label for="name" class="block text-gray-700 font-semibold mb-2">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name"
                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-400 focus:outline-none">
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email"
                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-400 focus:outline-none">
            </div>

            <!-- Message -->
            <div>
                <label for="message" class="block text-gray-700 font-semibold mb-2">Message</label>
                <textarea id="message" name="message" rows="5" placeholder="Write your message here..."
                          class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-400 focus:outline-none resize-none"></textarea>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit"
                        class="bg-indigo-600 text-white font-semibold px-8 py-3 rounded-xl hover:bg-indigo-700 transition duration-200 shadow-md hover:shadow-lg">
                    Send Message
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
