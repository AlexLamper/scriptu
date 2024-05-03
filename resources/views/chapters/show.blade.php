@extends('layouts.app')

@section('content')

    <div class="px-12 pt-6">
        <h1 class="text-4xl mb-4">{{ $chapter->title }}</h1>
    </div>

    <div class="flex justify-between px-12 pb-6">
        @if ($previousChapter)
            <a href="{{ route('chapters.show', ['topic' => $topic->id, 'chapter' => $previousChapter->id]) }}" class="text-white p-4 rounded-lg hover:bg-[#1F2937] bg-[#1F2937]">
                &lt; Previous
            </a>
        @else
            <a href="{{ route('topics.index') }}" class="text-white p-4 rounded-lg hover:bg-[#1F2937] bg-[#1F2937]">
                &lt; All Topics
            </a>
        @endif

        @if ($nextChapter)
            <a href="{{ route('chapters.show', ['topic' => $topic->id, 'chapter' => $nextChapter->id]) }}" class="text-white p-4 rounded-lg hover:bg-[#1F2937] bg-[#1F2937]">
                Next &gt;
            </a>
        @endif
    </div>

    <hr class="w-[93%] mx-auto">

    <div class="p-12">
        <h3 class="text-lg font-bold mb-2">Content:</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Display all the content here -->
        </div>
    </div>

    <div class="flex justify-between px-12 pb-6">
        @if ($previousChapter)
            <a href="{{ route('chapters.show', ['topic' => $topic->id, 'chapter' => $previousChapter->id]) }}" class="text-white p-4 rounded-lg hover:bg-[#1F2937] bg-[#1F2937]">
                &lt; Previous
            </a>
        @else
            <a href="{{ route('topics.index') }}" class="text-white p-4 rounded-lg hover:bg-[#1F2937] bg-[#1F2937]">
                &lt; All Topics
            </a>
        @endif

        @if ($nextChapter)
            <a href="{{ route('chapters.show', ['topic' => $topic->id, 'chapter' => $nextChapter->id]) }}" class="text-white p-4 rounded-lg hover:bg-[#1F2937] bg-[#1F2937]">
                Next &gt;
            </a>
        @endif
    </div>

    @php
        $showSidebar = true;
        $showTopicsSidebar = false;
    @endphp
@endsection
