@extends('layouts.app')

@section('title', 'Scriptu | ' . $chapter->title)
@section('content')
    <div class="p-12">
        <h1 class="text-2xl font-bold mb-4">{{ $chapter->title }}</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($chapter->chapters as $chapter)
                <div class="bg-white shadow-sm p-4">
                    <h2 class="text-lg font-semibold">{{ $chapter->title }}</h2>
                    <p>{{ $chapter->content }}</p>
                </div>
            @endforeach
        </div>
    </div>

    @php
        $showSidebar = true;
        $showTopicsSidebar = false;
    @endphp
@endsection
