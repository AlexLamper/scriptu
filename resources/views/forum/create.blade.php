@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mb-4">Ask a Question</h1>
        <form action="{{ route('forum.store') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title:</label>
                <input type="text" name="title" id="title" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            </div>
            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700">Content:</label>
                <textarea name="content" id="content" rows="5" class="mt-1 p-2 border border-gray-300 rounded-md w-full"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Submit Question</button>
        </form>
    </div>
@endsection
