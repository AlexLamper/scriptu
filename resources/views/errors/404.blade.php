<x-app-layout>
    @section('title', 'Scriptu | Error')
    @section('content')
        <div id="content">
            <div class="bg-white p-8 rounded-lg text-center mt-[20vh]">
                <h1 class="text-9xl font-bold text-gray-800">404</h1>
                <p class="text-2xl font-semibold text-gray-600 mt-4">Oops! Page not found</p>
                <p class="text-gray-500 mt-2">Sorry, the page you are looking for doesn't exist or has been moved.</p>
                <a href="{{ url('/') }}" class="mt-6 inline-block bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">Go Home</a>
            </div>
        </div>
    @endsection
</x-app-layout>
