@extends('layouts.app')

@section('content')
    <div class="max-w-4xl px-4">
        <h1 class="text-3xl font-bold mb-4">Topic: {{ $topic->title }}</h1>
        <p class="mb-8">{{ $topic->description }}</p>

        <p>Chapter: The chapter here</p>
        <br>
        <p>Information about the chapter here</p>
    </div>

    @php
        $showSidebar = true;
    @endphp
@endsection
