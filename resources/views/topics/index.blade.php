@extends('layouts.app')

@section('content')
    <h1>List of Topics</h1>
    <ul>
        @foreach($topics as $topic)
            <li>
                <a href="{{ route('topics.show', $topic->id) }}">{{ $topic->title }}</a>
                <p>{{ $topic->description }}</p>
            </li>
        @endforeach
    </ul>
@endsection
