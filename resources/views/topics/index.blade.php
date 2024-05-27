@extends('layouts.app')

@section('title', 'Scriptu | Courses')
@section('content')
    <div class="p-12">
        @auth
            <h1 class="text-2xl font-bold mb-4">Welcome, {{ auth()->user()->name }} 👋🏽</h1>
        @else
            <h1 class="text-2xl font-bold mb-4">Welcome 👋🏽</h1>
        @endauth
        <p>Explore our courses and learn everything about the bible.</p>
        <h1 class="text-2xl font-bold mb-4 mt-8">List of Courses</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($topics as $topic)
                <a href="{{ route('topics.show', $topic->id) }}" class="bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300 sm:max-w-xs md:max-w-sm">
                    <div class="h-40 relative overflow-hidden">
                        <img src="{{ asset('images/courses/cover' . $loop->iteration . '.jpg') }}" alt="Image" class="absolute inset-0 w-full h-full object-cover rounded-t-lg" />
                    </div>
                    <div class="p-4">
                        <h2 class="text-lg font-semibold hover:underline text-[#1F2937]">{{ $topic->title }}</h2>
                        <p class="text-gray-500 mt-2">{{ $topic->description }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    @php
        $showSidebar = false;
        $showTopicsSidebar = true;
    @endphp
@endsection
