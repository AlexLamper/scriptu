<x-app-layout>
    @section('title', 'Scriptu | Error')
    @section('content')
        <div id="content">
            <div class="bg-white p-8 rounded-lg text-center mt-[14vh]">
                <div>
                    <h1 class="text-9xl font-bold text-gray-800">500</h1>
                    <p class="text-3xl font-semibold text-gray-600 mt-4">Oh no! Something went wrong with the server</p>
                    <p class="text-gray-500 mt-2 lg:max-w-[40%] max-w-[90%] mx-auto text-lg">We're sorry, but it looks like there’s an issue with our server. Please try again later, or contact support if the problem persists.</p>
                    <a href="{{ url('/') }}" class="mt-6 inline-block bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">Go Home</a>
                </div>

                <!-- Refresh link -->
                <div class="mt-[8vh] relative inline-block">
                    <a href="javascript:location.reload();" class="text-2xl underline text-blue-800 hover:text-blue-600">Refresh Page</a>
                </div>

                <!-- Links -->
                <div class="mt-[20vh] space-x-4">
                    <a href="{{ url('/status') }}" class="text-black underline hover:text-neutral-900">Status</a>
                    <a href="{{ url('/support') }}" class="text-black underline hhover:text-neutral-900">Support</a>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
