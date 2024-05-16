<x-app-layout>
    @section('title', 'Scriptu | About')
    @section('content')
        <div id="content">
            <div class="bg-transparent lg:max-w-[70%] mx-auto min-h-[70vh]">
                <div class="flex flex-col items-center justify-center">
                    <div class="text-center pb-8">
                        <div id="header">
                            <h1 class="font-bold text-6xl mb-4 text-black lg:max-w-[60%] max-w-[90%] mx-auto mt-24">About Scriptu</h1>
                            <p class="text-gray-600 mb-6 text-xl">Learn everything about who we are, what we do, and what our goal is.</p>
                        </div>

                        <div>
                            <p>test content</p>
                        </div>

                        <!-- Display any success messages -->
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
