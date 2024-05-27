@extends('layouts.app')

@section('content')
    <div class="max-w-2xl p-12">
        <h1 class="text-3xl font-bold mb-4">Forum</h1>

        @if($questions->isEmpty())
            <p class="text-gray-600">There are currently no questions.</p>
        @else
            <ul>
                @foreach($questions as $question)
                    <a href="{{ route('forum.show', $question) }}" class="block mb-6">
                        <li class="p-4 bg-white rounded-lg shadow-md hover:bg-gray-100 transition duration-300 ease-in-out cursor-pointer">
                            <div class="text-xl font-bold text-blue-600 hover:text-blue-800">
                                {{ $question->title }}
                            </div>
                            <p class="text-gray-600 mt-2">
                                by <span class="font-semibold">{{ $question->user->name }}</span>,
                                {{ $question->answers->count() }} answers,
                                {{ $question->created_at->diffForHumans() }}
                            </p>
                        </li>
                    </a>
                @endforeach
            </ul>
            {{ $questions->links() }}
        @endif

        <div class="mt-8">
            <a href="{{ route('forum.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Ask a Question</a>
        </div>
    </div>
@endsection

