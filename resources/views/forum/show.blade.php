@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto mt-12">
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

        <h1 class="text-3xl font-bold mb-4">{{ $question->title }}</h1>
        <p>{{ $question->content }}</p>
        <p class="text-gray-600">Asked by {{ $question->user->name }}, {{ $question->created_at->diffForHumans() }}</p>

        <!-- Upvote button for the question -->
        <div class="flex items-center mt-4">
            @auth
                <form action="{{ route('forum.question.upvote', $question) }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-green-500 text-white px-3 py-1 rounded-md hover:bg-green-600">Upvote</button>
                </form>
            @else
                <button type="button" class="bg-green-500 text-white px-3 py-1 rounded-md cursor-not-allowed relative group">
                    Upvote
                    <span class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-2 py-1 bg-black text-white text-xs rounded opacity-0 group-hover:opacity-100 w-[10rem]">
                        Please login to upvote this question
                    </span>
                </button>
            @endauth
            <span class="ml-2">{{ $question->upvotes }} Upvotes</span>
        </div>

        <h2 class="text-2xl font-bold mt-8">Answers</h2>
        @foreach($question->answers as $answer)
            <div class="bg-gray-100 p-4 rounded-lg mt-4">
                <p>{{ $answer->content }}</p>
                <p class="text-gray-600">Answered by {{ $answer->user->name }}, {{ $answer->created_at->diffForHumans() }}</p>

                <!-- Upvote button for the answer -->
                <div class="flex items-center mt-4">
                    @auth
                        <form action="{{ route('forum.answer.upvote', $answer) }}" method="POST">
                            @csrf
                            <button type="submit" class="bg-green-500 text-white px-3 py-1 rounded-md hover:bg-green-600">Upvote</button>
                        </form>
                    @else
                        <button type="button" class="bg-green-500 text-white px-3 py-1 rounded-md cursor-not-allowed relative group">
                            Upvote
                            <span class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-48 text-center px-2 py-1 bg-black text-white text-xs rounded opacity-0 group-hover:opacity-100 w-[10rem]">
                                Please login to upvote this answer
                            </span>
                        </button>
                    @endauth
                    <span class="ml-2">{{ $answer->upvotes }} Upvotes</span>
                </div>
            </div>
        @endforeach

        @auth
            <form action="{{ route('forum.answer', $question) }}" method="post" class="mt-8">
                @csrf
                <div class="mb-4">
                    <label for="content" class="block text-sm font-medium text-gray-700">Your Answer:</label>
                    <textarea name="content" id="content" rows="5" class="mt-1 p-2 border border-gray-300 rounded-md w-full"></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Submit Answer</button>
            </form>
        @else
            <p class="mt-8">Please <a href="{{ route('login') }}" class="text-blue-500 font-bold">login</a> to post an answer.</p>
        @endauth
    </div>
@endsection
