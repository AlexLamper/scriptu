<aside class="bg-gray-800 min-h-screen min-w-64">
    <div class="flex flex-col items-center justify-between h-full mx-6">
        <!-- Logo or Site Title -->
        <div class="flex flex-col items-center mt-5">
            <!-- Your logo or site title goes here -->
            <h1 class="text-white font-semibold leading-loose text-xl">Scriptu</h1>
        </div>

        <!-- Current Topic -->
        <div class="mt-5 mb-2 px-8 py-2 bg-gray-700 rounded-md text-sm font-medium">
            <h2 class="text-white">Current Topic:</h2>
            <h3 class="text-gray-300">{{ $topic->title }}</h3>
        </div>

        <!-- Sidebar Links -->
        <nav class="mt-2 flex-grow flex flex-col">
            @foreach($topic->chapters as $chapter)
                <a href="{{ route('chapters.show', ['topic' => $topic->id, 'chapter' => $chapter->id]) }}" class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                    <!-- Add icon here -->
                    <svg class="w-5 h-5 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor">
                        <circle cx="10" cy="10" r="8" stroke-width="1.5"></circle>
                        <path d="M12 8l-4 4-2-2"></path>
                    </svg>
                    <!-- Chapter title -->
                    {{ $chapter->title }}
                </a>
            @endforeach
        </nav>

        <!-- Sidebar Footer (Optional) -->
        <div class="flex items-center justify-center py-5">
            <!-- Footer content goes here -->
            <h1 class="text-white">Sidebar Footer</h1>
        </div>
    </div>
</aside>
