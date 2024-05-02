@extends('layouts.app')

@section('content')
    <div class="max-w-4xl px-4">
        <h1 class="text-3xl font-bold mb-4">Topic: {{ $topic->title }}</h1>
        <p class="mb-8">{{ $topic->description }}</p>

        <h2 class="text-2xl font-semibold mb-4">Sections</h2>
        <ul>
            <!-- show.blade.php -->
            @foreach($topic->sections as $section)
                <li class="mb-4">
                    <a href="{{ route('sections.show', ['topic' => $topic->id, 'section' => $section->id]) }}"
                       class="text-blue-600 hover:underline">
                        {{ $section->title }}
                    </a>
                    <p class="text-gray-700">{{ $section->description }}</p>
                </li>
            @endforeach

        </ul>
    </div>

    @php
        $showSidebar = true;
    @endphp
@endsection
