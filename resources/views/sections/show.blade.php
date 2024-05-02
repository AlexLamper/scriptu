@extends('layouts.app')

@section('content')
    <div class="p-12">
        <h1 class="text-2xl font-bold mb-4">{{ $section->title }}</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($section->chapters as $chapter)
                <a href="{{ route('chapters.show', ['topic' => $section->topic->id, 'section' => $section->id, 'chapter' => $chapter->id]) }}">
                    <div class="bg-white shadow-sm p-4">
                        <h2 class="text-lg font-semibold">{{ $chapter->title }}</h2>
                        <p>{{ $chapter->content }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    @php
        $showSidebar = true;
    @endphp
@endsection
