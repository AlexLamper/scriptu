@extends('layouts.app')

@section('title', 'Scriptu | ' . $chapter->title)
@section('content')

    <div class="px-12 pt-6">
        <h1 class="text-5xl my-6 mb-10 font-semibold">{{ $chapter->title }}</h1>
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

    <div class="p-12 max-w-[1400px]">
        <div class="markdown-container" style="overflow-x: auto; word-wrap: break-word;">
            {!! $htmlContent !!}
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
