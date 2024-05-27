@extends('layouts.app')

@section('content')
    <div class="max-w-2xl p-12">
        <!-- Display Success or Error Message -->
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="bg-red-500 text-white p-4 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <h1 class="text-3xl font-bold mb-4">Forum</h1>

        @if($questions->isEmpty())
            <p class="text-gray-600">There are currently no questions.</p>
        @else
            <ul>
                @foreach($questions as $question)
                    <a href="{{ route('forum.show', $question) }}" class="block mb-6">
                        <li class="p-4 bg-white">
                            <div class="flex">
                                <div class="mr-4 flex items-center flex-col">
                                    @auth
                                        <form action="{{ route('forum.question.upvote', $question) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="text-gray-600 hover:text-gray-800">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                                </svg>
                                            </button>
                                        </form>
                                    @else
                                        <button type="button" class="text-gray-600 hover:text-gray-800 cursor-not-allowed relative group">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
                                            </svg>
                                            <span class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-48 text-center px-2 py-1 bg-black text-white text-xs rounded opacity-0 group-hover:opacity-100">
                                                Please login to upvote this question
                                            </span>
                                        </button>
                                    @endauth
                                    <div class="text-gray-800 mt-1">
                                        {{ $question->upvotes }}
                                    </div>
                                </div>
                                <div class="flex-grow">
                                    <div class="text-xl font-bold text-blue-600 hover:text-blue-800">
                                        {{ $question->title }}
                                    </div>
                                    <p class="text-gray-600 mt-2">
                                        {{ $question->content }}
                                    </p>
                                    <p class="text-gray-600 mt-2">
                                        by <span class="font-semibold">{{ $question->user->name }}</span>,
                                        {{ $question->answers->count() }} answers,
                                        {{ $question->created_at->diffForHumans() }}
                                    </p>
                                </div>
                            </div>
                        </li>
                    </a>
                    <hr class="border-t border-gray-300 my-4">
                @endforeach
            </ul>
            {{ $questions->links() }}
        @endif

        <div class="mt-8">
            <a href="{{ route('forum.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Ask a Question</a>
        </div>
    </div>

    @php
        $showSidebar = false;
        $showTopicsSidebar = false;
        $showForumSidebar = true;
    @endphp
@endsection
