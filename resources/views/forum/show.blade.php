@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mb-4">{{ $question->title }}</h1>
        <p>{{ $question->content }}</p>
        <p class="text-gray-600">Asked by {{ $question->user->name }}, {{ $question->created_at->diffForHumans() }}</p>

        <h2 class="text-2xl font-bold mt-8">Answers</h2>
        @foreach($question->answers as $answer)
            <div class="bg-gray-100 p-4 rounded-lg mt-4">
                <p>{{ $answer->content }}</p>
                <p class="text-gray-600">Answered by {{ $answer->user->name }}, {{ $answer->created_at->diffForHumans() }}</p>
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
