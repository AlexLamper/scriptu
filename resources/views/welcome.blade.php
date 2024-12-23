<x-app-layout>
    @section('title', 'Scriptu | Home')
    @section('content')
        <div id="content" class="relative">
            <div class="bg-transparent lg:max-w-[70%] mx-auto min-h-[70vh]">
                <div class="flex flex-col items-center justify-center">
                    <div class="text-center pb-8">
                        <div id="header">
                            <h1 class="font-bold text-6xl mb-4 text-black lg:max-w-[60%] max-w-[90%] mx-auto mt-24">Uncover the Bible's Treasures Through Our Digital Courses</h1>
                            <p class="text-gray-600 mb-6 text-xl">Learn about the bible with Scriptu</p>
                        </div>

                        <div id="input" class="mb-12 relative">
                            <label class="relative block mx-auto w-80">
                                <input type="text" id="search" class="border border-black px-5 py-3 font-semibold rounded-full w-full focus:outline-none focus:border-blue-500" placeholder="Search our courses, e.g. Books" autocomplete="off">
                                <span class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-700">
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                    </svg>
                                </span>
                            </label>
                            <div id="results" class="absolute left-0 right-0 mx-auto top-full mt-2 bg-neutral-800 text-white w-80 text-left rounded-lg z-50 hidden">
                                <!-- Search results will be displayed here -->
                            </div>
                        </div>

                        @include('components.cards-homepage')

                        <!-- Link -->
                        <a href="#" class="underline text-blue-500 mt-8 block">Not sure where to start?</a>
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

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#search').on('input', function() {
                    let query = $(this).val();

                    $.ajax({
                        url: "{{ route('search') }}",
                        type: "GET",
                        data: { query: query },
                        success: function(data) {
                            $('#results').empty().removeClass('hidden');
                            let displayedTopics = data.topics.slice(0, 7);
                            let displayedChapters = data.chapters.slice(0, 7);

                            if (displayedTopics.length || displayedChapters.length) {
                                if (displayedTopics.length) {
                                    $('#results').append('<h2 class="font-semibold text-lg mb-2 pl-2">Topics</h2>');
                                    displayedTopics.forEach(topic => {
                                        let topicUrl = "{{ url('topics') }}/" + topic.id; // Adjust the URL as per your route
                                        $('#results').append(`<a href="${topicUrl}" class="block mb-1 pl-2">${topic.name}</a>`);
                                    });
                                }
                                if (displayedChapters.length) {
                                    $('#results').append('<h2 class="font-semibold text-lg mb-2 pl-2">Chapters</h2>');
                                    displayedChapters.forEach(chapter => {
                                        let chapterUrl = "{{ url('topics') }}/" + chapter.topic_id + "/chapters/" + chapter.id; // Adjust the URL as per your route
                                        $('#results').append(`<a href="${chapterUrl}" class="block mb-1 pl-2">${chapter.title}</a>`);
                                    });
                                }
                            } else {
                                $('#results').append('<p class="text-gray-600 pl-2">No results found</p>');
                            }
                        }
                    });
                });

                $(document).on('click', function(event) {
                    if (!$(event.target).closest('#input').length) {
                        $('#results').empty().addClass('hidden');
                    }
                });
            });
        </script>

    @endsection
</x-app-layout>
