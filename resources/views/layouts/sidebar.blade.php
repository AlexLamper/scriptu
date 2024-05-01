<aside class="bg-gray-800 min-h-screen">
    <div class="flex flex-col items-center justify-between h-full mx-6">
        <!-- Logo or Site Title -->
        <div class="flex flex-col items-center mt-5">
            <!-- Your logo or site title goes here -->
            <h1 class="text-white font-semibold leading-loose text-xl">Scriptu</h1>
        </div>

        <!-- Sidebar Links -->
        <nav class="mt-5 flex-grow flex flex-col">
            @foreach($topics as $topic)
                <a href="{{ route('topics.show', $topic->id) }}" class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                    <!-- Add icon here -->
                    <svg class="w-5 h-5 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor">
                        <circle cx="10" cy="10" r="8" stroke-width="1.5"></circle>
                        <path d="M12 8l-4 4-2-2"></path>
                    </svg>
                    <!-- Topic title -->
                    {{ $topic->title }}
                </a>
            @endforeach
            <!-- Add more sidebar links as needed -->
        </nav>

        <!-- Sidebar Footer (Optional) -->
        <div class="flex items-center justify-center py-5">
            <!-- Footer content goes here -->
            <h1 class="text-white">Sidebar Footer</h1>
        </div>
    </div>
</aside>
