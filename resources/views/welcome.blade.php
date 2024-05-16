<x-app-layout>
    @section('title', 'Scriptu | Home')
    @section('content')
        <div id="content">
            <div class="bg-transparent lg:max-w-[70%] mx-auto min-h-[70vh]">
                <div class="flex flex-col items-center justify-center">
                    <div class="text-center pb-8">
                        <div id="header">
                            <h1 class="font-bold text-6xl mb-4 text-black lg:max-w-[60%] max-w-[90%] mx-auto mt-24">Uncover the Bible's Treasures Through Our Digital Courses</h1>
                            <p class="text-gray-600 mb-6 text-xl">Learn about the bible with Scriptu</p>
                        </div>

                        <div id="input" class="mb-12">
                            <label class="relative">
                                <input type="text" class="border border-black px-5 py-3 font-semibold rounded-full w-80 focus:outline-none focus:border-blue-500" placeholder="Search our courses, e.g. Books">
                                <span class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-700">
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                    </svg>
                                </span>
                            </label>
                        </div>

                        <div id="cards">
                            <!-- Cards -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                                <!-- Card 1: Structure of the Bible -->
                                <a href="/topics/1/chapters/1" class="border border-gray-300 rounded-3xl overflow-hidden hover:shadow-lg transition duration-300 ease-in-out card max-w-full">
                                    <div class="relative h-full">
                                        <!-- Top Div with Image -->
                                        <div class="inset-0 flex">
                                            <img src="images/courses/about1.jpg" alt="Course Image" class="w-full h-full object-cover" />
                                        </div>
                                        <!-- Bottom Div with Text Content -->
                                        <div class="inset-0 flex flex-col justify-between">
                                            <!-- Top Div within Bottom Div -->
                                            <div class="h-30% flex pl-4 pt-4">
                                                <p>Estimated Time: 4 hours</p>
                                            </div>
                                            <!-- Bottom Div within Bottom Div -->
                                            <div class="h-70% flex flex-col py-4">
                                                <h2 class="font-bold text-xl mb-2 px-4 text-left">Structure of the Bible</h2>
                                                <p class="px-4 pb-4 text-left">Course Author: Alex Lamper</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- Card 2: Books of the Bible -->
                                <a href="/topics/2/chapters/4" class="border border-gray-300 rounded-3xl overflow-hidden hover:shadow-lg transition duration-300 ease-in-out card max-w-full">
                                    <div class="relative h-full">
                                        <!-- Top Div with Image -->
                                        <div class="inset-0 flex">
                                            <img src="images/courses/about1.jpg" alt="Course Image" class="w-full h-full object-cover" />
                                        </div>
                                        <!-- Bottom Div with Text Content -->
                                        <div class="inset-0 flex flex-col justify-between">
                                            <!-- Top Div within Bottom Div -->
                                            <div class="h-30% flex pl-4 pt-4">
                                                <p>Estimated Time: 2 hours</p>
                                            </div>
                                            <!-- Bottom Div within Bottom Div -->
                                            <div class="h-70% flex flex-col py-4">
                                                <h2 class="font-bold text-xl mb-2 px-4 text-left">Books of the Bible</h2>
                                                <p class="px-4 pb-4 text-left">Explore the individual books of the Bible, including their authors, content, and historical context.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- Card 3: Biblical Characters -->
                                <a href="/topics/3/chapters/7" class="border border-gray-300 rounded-3xl overflow-hidden hover:shadow-lg transition duration-300 ease-in-out card max-w-full">
                                    <div class="relative h-full">
                                        <!-- Top Div with Image -->
                                        <div class="inset-0 flex">
                                            <img src="images/courses/about1.jpg" alt="Course Image" class="w-full h-full object-cover" />
                                        </div>
                                        <!-- Bottom Div with Text Content -->
                                        <div class="inset-0 flex flex-col justify-between">
                                            <!-- Top Div within Bottom Div -->
                                            <div class="h-30% flex pl-4 pt-4">
                                                <p>Estimated Time: 3 hours</p>
                                            </div>
                                            <!-- Bottom Div within Bottom Div -->
                                            <div class="h-70% flex flex-col py-4">
                                                <h2 class="font-bold text-xl mb-2 px-4 text-left">Biblical Characters</h2>
                                                <p class="px-4 pb-4 text-left">Discover the key figures in the Bible, their stories, and their significance in biblical history.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- Card 4: Biblical Stories -->
                                <a href="/topics/4/chapters/9" class="border border-gray-300 rounded-3xl overflow-hidden hover:shadow-lg transition duration-300 ease-in-out card max-w-full">
                                    <div class="relative h-full">
                                        <!-- Top Div with Image -->
                                        <div class="inset-0 flex">
                                            <img src="images/courses/about1.jpg" alt="Course Image" class="w-full h-full object-cover" />
                                        </div>
                                        <!-- Bottom Div with Text Content -->
                                        <div class="inset-0 flex flex-col justify-between">
                                            <!-- Top Div within Bottom Div -->
                                            <div class="h-30% flex pl-4 pt-4">
                                                <p>Estimated Time: 2 hours</p>
                                            </div>
                                            <!-- Bottom Div within Bottom Div -->
                                            <div class="h-70% flex flex-col py-4">
                                                <h2 class="font-bold text-xl mb-2 px-4 text-left">Biblical Stories</h2>
                                                <p class="px-4 pb-4 text-left">Explore famous stories from the Bible, including parables, miracles, and lessons for life.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- Card 5: Biblical Interpretation -->
                                <a href="/topics/5/chapters/11" class="border border-gray-300 rounded-3xl overflow-hidden hover:shadow-lg transition duration-300 ease-in-out card max-w-full">
                                    <div class="relative h-full">
                                        <!-- Top Div with Image -->
                                        <div class="inset-0 flex">
                                            <img src="images/courses/about1.jpg" alt="Course Image" class="w-full h-full object-cover" />
                                        </div>
                                        <!-- Bottom Div with Text Content -->
                                        <div class="inset-0 flex flex-col justify-between">
                                            <!-- Top Div within Bottom Div -->
                                            <div class="h-30% flex pl-4 pt-4">
                                                <p>Estimated Time: 4 hours</p>
                                            </div>
                                            <!-- Bottom Div within Bottom Div -->
                                            <div class="h-70% flex flex-col py-4">
                                                <h2 class="font-bold text-xl mb-2 px-4 text-left">Biblical Interpretation</h2>
                                                <p class="px-4 pb-4 text-left">Learn about different approaches to interpreting the Bible, including historical, literary, and theological perspectives.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

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
    @endsection
</x-app-layout>
