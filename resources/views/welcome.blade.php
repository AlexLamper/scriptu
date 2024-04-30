<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Focused Journey</title>
    <!-- Bulma CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <style>
        #font{
            font-family: 'Inter', Helvetica Neue, Helvetica, Arial, sans-serif;
            font-optical-sizing: auto;
            font-weight: 600;
            font-style: normal;
        }
        .line-container {
            width: 70%;
            margin: 0 auto; /* Center horizontally */
        }
        .line {
            border-bottom: 1px solid gray;
        }
        .custom-margin-top {
            margin-top: 7rem;
        }
    </style>
</head>
<body class="antialiased">
<x-app-layout>
    @section('content')
        <div class="container custom-margin-top p-6 bg-white" style="height: 60vh">
            <div class="columns">
                <!-- Left Column (2/3 width) -->
                <div class="column is-two-thirds">
                    <div>
                        <h1 class="font-bold mb-2" style="font-size: 2.9rem; font-weight: bold; color: black">Welcome to Scriptu</h1>
                        <p class="text-gray-600 mb-6" style="font-size: 1.4rem;">The best online bible learning platform</p>
                    </div>

                    <!-- Display any success messages -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>

                <div class="column">
                    <img src="{{ asset('images/bible.svg') }}" alt="Bible">
                </div>
            </div>
        </div>

        <div class="line-container">
            <div class="line"></div>
        </div>
    @endsection
</x-app-layout>
@include('components.footer')
</body>
