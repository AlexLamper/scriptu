@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Chapter for {{ $topic->title }}</h1>
        <form action="{{ route('topics.chapters.update', [$topic, $chapter]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $chapter->title }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
