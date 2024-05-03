@extends('layouts.app')

@section('content')
    <div class="p-12">
        <h1 class="text-2xl font-bold mb-4">Topic: {{ $topic->title }}</h1>
        <h2 class="text-xl font-bold mb-2">Chapter: {{ $chapter->title }}</h2>
        <h3 class="text-lg font-bold mb-2">Content:</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Display all the content here -->
        </div>
    </div>

    @php
        $showSidebar = true;
    @endphp
@endsection
