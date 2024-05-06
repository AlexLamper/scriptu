@extends('layouts.app')

@section('content')
    <div class="p-12">
        <h1 class="text-2xl font-bold mb-4">List of Topics</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($topics as $topic)
                <a href="{{ route('topics.show', $topic->id) }}" class="bg-white rounded-lg shadow-md hover:shadow-lg transition duration-300 border border-neutral-400">
                    <div class="p-4">
                        <h2 class="text-lg font-semibold text-blue-600 hover:underline">{{ $topic->title }}</h2>
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
