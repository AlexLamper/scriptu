@extends('layouts.app')

@section('content')
    <div>
        <h1>Topic: {{ $topic->title }}</h1>
        <p>{{ $topic->description }}</p>

        <h2>Sections</h2>
        <ul>
            @foreach($topic->sections as $section)
                <li>
                    <a href="{{ route('sections.show', ['topic' => $topic->id, 'section' => $section->id]) }}">
                        {{ $section->title }}
                    </a>
                    <p>{{ $section->description }}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
