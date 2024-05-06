<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About | Scriptu</title>
    <!-- Bulma CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <style>
        body{
            font-family: 'Inter', Helvetica Neue, Helvetica, Arial, sans-serif;
        }

        .main-section {
            position: relative;
            height: 70vh;
        }

        .main-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 1200px;
            width: 100%;
            padding: 20px;
            text-align: center;
        }

        .features-section{
            position: relative;
            height: 50vh;
        }
    </style>
</head>
<body class="antialiased bg-white">
    <x-app-layout>
        @section('content')
        <!-- Hero Chapter -->
        <section class="hero is-fullheight section">
            <div class="hero-body">
                <div class="container">
                    <div class="columns">
                        <div class="column is-two-thirds">
                            <h1 class="mb-2" style="font-size: 2.5rem; font-weight: bold; color: black">
                                About Scriptu
                            </h1>
                            <p class="text-gray-600 is-size-4 mb-5" style="font-size: 1.4rem;">
                                Unlock Your Potential with Precision Focus
                            </p>
                            <p style="max-width: 80%; font-size: larger">Welcome to Focused Journey – your productivity companion. Stay focused, organized, and achieve your goals effortlessly. Perfect for students, professionals, and creatives alike. Say hello to efficiency, goodbye to distractions.</p>
                        </div>
                        <div class="border-2 border-gray-300 rounded-xl p-8">
                            <img src="{{ asset('images/about.svg') }}" alt="About Scriptu" class="h-64 w-auto">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="main-section">
            <div class="main-content" style="font-size: larger">
                <h2 class="title is-8" style="color: black; margin-bottom: 30px">Why Focus Matters</h2>
                <p>Focus is essential for productivity and success. When you concentrate your attention and efforts on a specific task or goal, you can achieve more in less time. By eliminating distractions and staying committed to your objectives, you can work with clarity and efficiency.</p>
                <p>Whether you're studying for an exam, working on a project, or pursuing personal growth, focus enables you to make meaningful progress and achieve your desired outcomes. It allows you to allocate your resources effectively, manage your time efficiently, and overcome obstacles with determination.</p>
                <br>
                <p>Furthermore, focus promotes deep engagement and immersion in your work, leading to higher levels of satisfaction and fulfillment. When you're fully absorbed in what you're doing, you experience a sense of flow—a state of heightened concentration and enjoyment that enhances your overall performance.</p>
                <p>Ultimately, mastering the art of focus is a skill that can transform your life. By cultivating mindfulness, setting clear goals, and practicing disciplined attention, you can unlock your full potential and accomplish extraordinary feats.</p>
            </div>
        </div>

        <div class="section features-section mt-16">
            <div class="container">
                <h2 class="title is-8 mb-6" style="color: black">Features of Focus App</h2>
                <div class="columns is-multiline">
                    <div class="column is-one-third">
                        <div class="card" style="border: solid 1px gray">
                            <div class="card-content">
                                <p class="title is-5">Customizable Focus Sessions</p>
                                <p>Create focus sessions tailored to your needs with adjustable durations and intervals.</p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-one-third">
                        <div class="card" style="border: solid 1px gray">
                            <div class="card-content">
                                <p class="title is-5">Visual and Auditory Cues</p>
                                <p>Stay focused with built-in cues such as ambient sounds and progress indicators.</p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-one-third">
                        <div class="card" style="border: solid 1px gray">
                            <div class="card-content">
                                <p class="title is-5">Progress Tracking</p>
                                <p>Monitor your productivity and track your progress over time with detailed analytics.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
    </x-app-layout>
    @include('components.footer')
</body>
</html>
