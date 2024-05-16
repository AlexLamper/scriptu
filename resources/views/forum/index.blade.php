@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mb-4">Forum</h1>

        @if($questions->isEmpty())
            <p class="text-gray-600">There are currently no questions.</p>
        @else
            <ul>
                @foreach($questions as $question)
                    <li class="mb-6">
                        <a href="{{ route('forum.show', $question) }}" class="text-xl font-bold">{{ $question->title }}</a>
                        <p class="text-gray-600">by {{ $question->user->name }}, {{ $question->answers->count() }} answers, {{ $question->created_at->diffForHumans() }}</p>
                    </li>
                @endforeach
            </ul>
            {{ $questions->links() }}
        @endif

        <div class="mt-8">
            <a href="{{ route('forum.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Ask a Question</a>
        </div>
    </div>
@endsection
