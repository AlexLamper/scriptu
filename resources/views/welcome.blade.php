<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Scriptu</title>
    <!-- Bulma CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <style>
        #font{
            font-family: 'Inter', Helvetica Neue, Helvetica, Arial, sans-serif;
            font-optical-sizing: auto;
            font-weight: 600;
            font-style: normal;
        }
        .line-container {
            width: 70%;
            margin: 0 auto; /* Center horizontally */
        }
        .line {
            border-bottom: 1px solid gray;
        }
        .custom-margin-top {
            margin-top: 3rem;
        }
    </style>
</head>
<body class="antialiased">
<x-app-layout>
    @section('content')
        <div class="container custom-margin-top p-6 bg-white" style="height: 60vh">
            <div class="flex flex-col items-center justify-center">
                <div class="text-center pb-8">
                    <div id="header">
                        <h1 class="font-bold text-6xl mb-4 text-black">Welcome to Scriptu</h1>
                        <p class="text-gray-600 mb-6 text-xl">The best online bible learning platform</p>
                    </div>

                    <div id="input" class="mb-12">
                        <label>
                            <input type="text" class="border border-black px-5 py-3 font-semibold rounded-full w-80 focus:outline-none focus:border-blue-500" placeholder="Search our courses, e.g. Books">
                        </label>
                    </div>

                    <div id="cards">
                        <!-- Cards -->
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                            <!-- Card 1: Structure of the Bible -->
                            <a href="/topics/1/chapters/1" class="bg-gray-100 border border-gray-300 rounded-3xl overflow-hidden hover:shadow-lg transition duration-300 ease-in-out">
                                <div class="p-6">
                                    <h2 class="font-bold text-lg mb-2">Structure of the Bible</h2>
                                    <p class="text-gray-700">Learn about the organization and layout of the Bible, including its divisions, genres, and themes.</p>
                                </div>
                            </a>

                            <!-- Card 2: Books of the Bible -->
                            <a href="/topics/2/chapters/4" class="bg-gray-100 border border-gray-300 rounded-3xl overflow-hidden hover:shadow-lg transition duration-300 ease-in-out">
                                <div class="p-6">
                                    <h2 class="font-bold text-lg mb-2">Books of the Bible</h2>
                                    <p class="text-gray-700">Explore the individual books of the Bible, including their authors, content, and historical context.</p>
                                </div>
                            </a>

                            <!-- Card 3: Biblical Characters -->
                            <a href="/topics/3/chapters/7" class="bg-gray-100 border border-gray-300 rounded-3xl overflow-hidden hover:shadow-lg transition duration-300 ease-in-out">
                                <div class="p-6">
                                    <h2 class="font-bold text-lg mb-2">Biblical Characters</h2>
                                    <p class="text-gray-700">Discover the key figures in the Bible, their stories, and their significance in biblical history.</p>
                                </div>
                            </a>

                            <!-- Card 4: Biblical Stories -->
                            <a href="/topics/4/chapters/9" class="bg-gray-100 border border-gray-300 rounded-3xl overflow-hidden hover:shadow-lg transition duration-300 ease-in-out">
                                <div class="p-6">
                                    <h2 class="font-bold text-lg mb-2">Biblical Stories</h2>
                                    <p class="text-gray-700">Explore famous stories from the Bible, including parables, miracles, and lessons for life.</p>
                                </div>
                            </a>

                            <!-- Card 5: Biblical Interpretation -->
                            <a href="/topics/5/chapters/11" class="bg-gray-100 border border-gray-300 rounded-3xl overflow-hidden hover:shadow-lg transition duration-300 ease-in-out">
                                <div class="p-6">
                                    <h2 class="font-bold text-lg mb-2">Biblical Interpretation</h2>
                                    <p class="text-gray-700">Learn about different approaches to interpreting the Bible, including historical, literary, and theological perspectives.</p>
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
    @endsection
</x-app-layout>
@include('components.footer')
</body>
