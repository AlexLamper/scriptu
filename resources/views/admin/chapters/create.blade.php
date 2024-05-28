@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Chapter for {{ $topic->title }}</h1>
        <form action="{{ route('topics.chapters.store', $topic) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
