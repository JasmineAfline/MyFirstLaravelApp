<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($posts as $post)
        <div class="bg-white shadow-lg rounded-xl p-6 hover:shadow-xl transition">
            <h2 class="text-2xl font-semibold mb-2">{{ $post['title'] }}</h2>
            <p class="text-gray-500 text-sm mb-3">
                By {{ $post['author'] }} | {{ $post['date'] }}
            </p>
            <p class="text-gray-700 mb-4">{{ $post['content'] }}</p>
            <a href="#" class="text-blue-600 font-medium hover:underline">Read More →</a>
        </div>
    @endforeach
   
</div>