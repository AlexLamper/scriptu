<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name', 'Scriptu'))</title>
    <!-- Fonts -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Link to the compiled CSS file -->
    <link href="{{ asset('build.css') }}" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="min-h-screen">
    @include('layouts.navigation')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Page Content with Sidebar -->
    <main class="flex">
        <!-- Conditional Sidebar -->
        @if (isset($showSidebar) && $showSidebar)
            @include('layouts.sidebar')
        @endif

        @if (isset($showTopicsSidebar) && $showTopicsSidebar)
            @include('layouts.topics-sidebar')
        @endif

        @if (isset($showForumSidebar) && $showForumSidebar)
            @include('layouts.forum-sidebar')
        @endif

        <!-- Main Content -->
        <div class="flex-grow">
            @yield('content')
        </div>
    </main>
</div>

<!-- Footer -->
@include('components.footer')
<!-- Link to the compiled JavaScript file -->
<script src="{{ asset('build/assets/app-CrG2wnyX.js') }}"></script>
</body>
</html>
