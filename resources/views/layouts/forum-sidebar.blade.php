<aside class="bg-gray-800 min-h-screen min-w-64">
    <div class="flex flex-col justify-between h-full mx-6">
        <!-- Logo or Site Title -->
        <div class="flex flex-col mt-5">
            <h1 class="text-white font-semibold leading-loose text-2xl pl-3">Scriptu</h1>
        </div>

        <!-- Sidebar Links -->
        <nav class="mt-2 flex-grow space-y-6">
            <!-- Popular Questions -->
            <div class="mb-4">
                <h2 class="text-lg font-semibold text-white mb-2 pl-3">Popular Questions</h2>
                <ul class="pl-3">
                    <li class="mb-2"><span class="text-white">• </span><a href="/questions/popular1" class="text-white">What is the meaning of life?</a></li>
                    <li><span class="text-white">• </span><a href="/questions/popular2" class="text-white">How to study the Bible effectively?</a></li>
                </ul>
            </div>

            <!-- Categories -->
            <div class="mb-4">
                <h2 class="text-lg font-semibold text-white mb-2 pl-3">Categories</h2>
                <ul class="pl-3">
                    <li class="mb-2"><span class="text-white">• </span><a href="/categories/theology" class="text-white">Theology</a></li>
                    <li><span class="text-white">• </span><a href="/categories/bible-studies" class="text-white">Bible Studies</a></li>
                </ul>
            </div>

            <!-- User Information -->
            <div class="mb-4">
                <h2 class="text-lg font-semibold text-white mb-2 pl-3">User Information</h2>
                @auth
                    <ul class="pl-3">
                        <li class="mb-2"><span class="text-white">• </span><a href="/profile" class="text-white">My Profile</a></li>
                        <li><span class="text-white">• </span><a href="/profile/questions" class="text-white">My Questions</a></li>
                    </ul>
                @else
                    <p class="text-white pl-3"><a href="/login">Login</a> or <a href="/register">Sign Up</a></p>
                @endauth
            </div>

            <!-- Helpful Resources -->
            <div class="mb-4">
                <h2 class="text-lg font-semibold text-white mb-2 pl-3">Helpful Resources</h2>
                <ul class="pl-3">
                    <li class="mb-2"><span class="text-white">• </span><a href="/faq" class="text-white">FAQ</a></li>
                    <li class="mb-2"><span class="text-white">• </span><a href="/guidelines" class="text-white">Community Guidelines</a></li>
                    <li><span class="text-white">• </span><a href="/resources" class="text-white">Bible Study Tools</a></li>
                </ul>
            </div>

            <!-- Community Engagement -->
            <div class="mb-4">
                <h2 class="text-lg font-semibold text-white mb-2 pl-3">Community Engagement</h2>
                <ul class="pl-3">
                    <li class="mb-2"><span class="text-white">• </span><a href="/top-contributors" class="text-white">Top Contributors</a></li>
                    <li><span class="text-white">• </span><a href="/events" class="text-white">Upcoming Events</a></li>
                </ul>
            </div>

            <!-- Get Involved -->
            <div class="mb-4">
                <h2 class="text-lg font-semibold text-white mb-2 pl-3">Get Involved</h2>
                <ul class="pl-3">
                    <li class="mb-2"><span class="text-white">• </span><a href="/forum/unanswered" class="text-white">Answer Questions</a></li>
                    <li class="mt-4"><a href="/forum/create" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Ask a Question</a></li>
                </ul>
            </div>
        </nav>
    </div>
</aside>
