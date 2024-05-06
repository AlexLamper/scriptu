@extends('layouts.app')

@section('content')

    <div class="flex justify-between px-12 pt-6">
        @if ($previousTopic)
            <a href="{{ route('topics.previous', $topic) }}" class="text-white p-4 rounded-lg hover:bg-[#1F2937] bg-[#1F2937]">
                &lt; All Topics
            </a>
        @else
            <a href="{{ route('topics.index') }}" class="text-white p-4 rounded-lg hover:bg-[#1F2937] bg-[#1F2937]">
                &lt; All Topics
            </a>
        @endif
    </div>

    <div class="p-12">
        <div class="max-w-4xl px-4">
            <h1 class="text-3xl font-bold mb-4">Topic: {{ $topic->title }}</h1>
            <p class="mb-8">{{ $topic->description }}</p>

            <h2 class="text-2xl font-semibold mb-4">Chapters:</h2>
            <ul>
                <!-- show.blade.php -->
                @foreach($topic->chapters as $chapter)
                    <li class="mb-4">
                        <a href="{{ route('chapters.show', ['topic' => $topic->id, 'chapter' => $chapter->id]) }}"
                           class="text-blue-600 hover:underline">
                            {{ $chapter->title }}
                        </a>
                        <p class="text-gray-700">{{ $chapter->description }}</p>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>

    @php
        $showSidebar = true;
        $showTopicsSidebar = false;
    @endphp
@endsection
