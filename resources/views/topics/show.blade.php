@extends('layouts.app')

@section('content')
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
    @endphp
@endsection
