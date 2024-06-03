<x-app-layout>
    @section('title', 'Scriptu | Error')
    @section('content')
        <div id="content">
            <div class="bg-white p-8 rounded-lg text-center mt-[14vh]">
                <div>
                    <h1 class="text-9xl font-bold text-gray-800">404</h1>
                    <p class="text-3xl font-semibold text-gray-600 mt-4">Oops! We couldn’t find the page you were looking for</p>
                    <p class="text-gray-500 mt-2 text-lg">Sorry, the page you are looking for doesn't exist or has been moved.</p>
                    <a href="{{ url('/') }}" class="mt-6 inline-block bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">Go Home</a>
                </div>

                <!-- Search Bar -->
                <div class="mt-6 relative inline-block">
                    <input type="text" placeholder="Search..." class="rounded-full border-gray-300 border px-4 py-2 pl-10 bg-gray-100 lg:w-[20vw] w-auto focus:outline-none focus:ring-2 focus:ring-blue-500 hover:bg-gray-200">
                    <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="20" height="20">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 18l6-6m0 0l-6-6m6 6H3"/>
                    </svg>
                </div>

                <!-- Buttons -->
                <div class="mt-[20vh] space-x-4">
                    <a href="{{ url('/') }}" class="inline-block bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600 hover:bg-opacity-70 bg-opacity-70">Home</a>
                    <a href="{{ url('/help') }}" class="inline-block bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600 hover:bg-opacity-70 bg-opacity-70">Help</a>
                    <a href="{{ url('/contact') }}" class="inline-block bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600 hover:bg-opacity-70 bg-opacity-70">Contact</a>
                </div>

                <!-- Links -->
                <div class="mt-[8vh] space-x-4">
                    <a href="{{ url('/sitemap') }}" class="text-black underline hover:text-neutral-900">Sitemap</a>
                    <a href="{{ url('/support') }}" class="text-black underline hhover:text-neutral-900">Support</a>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
