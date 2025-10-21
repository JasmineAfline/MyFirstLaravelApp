<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | MyApp</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-100 via-white to-blue-100">

    <div class="bg-white shadow-2xl rounded-3xl p-8 w-full max-w-md">
        <h2 class="text-3xl font-bold text-center text-indigo-600 mb-6">Welcome Back 👋</h2>

        @if (session('status'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4 text-center">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <!-- Email -->
            <div>
                <label for="email" class="block text-gray-700 font-semibold">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                    class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none" placeholder="you@example.com">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-gray-700 font-semibold">Password</label>
                <input id="password" type="password" name="password" required
                    class="w-full mt-2 px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none" placeholder="••••••••">
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remember + Forgot Password -->
            <div class="flex items-center justify-between text-sm text-gray-600">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="remember" class="text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                    <span class="ml-2">Remember me</span>
                </label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-indigo-600 hover:underline">Forgot password?</a>
                @endif
            </div>

            <!-- Button -->
            <button type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 rounded-lg transition duration-200">
                Log In
            </button>

            <p class="text-center text-sm text-gray-600 mt-4">
                Don’t have an account?
                <a href="{{ route('register') }}" class="text-indigo-600 hover:underline">Register</a>
            </p>
        </form>
    </div>

</body>
</html>
