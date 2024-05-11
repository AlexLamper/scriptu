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
                        <div class="border-2 border-gray-300 rounded-xl p-7">
                            <img src="{{ asset('images/about1.jpg') }}" alt="About Scriptu" class="h-64 w-auto">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="main-section">
            <div class="main-content" style="font-size: larger">
                <h2 class="title is-8" style="color: black; margin-bottom: 30px">Why Learning About The Bible Matters</h2>
                <p>Understanding the Bible holds significance for various reasons. Firstly, it is a cornerstone of Western literature and culture, influencing art, music, and literature for centuries.
                    Familiarity with its stories and themes provides valuable insights into the historical and cultural context of many societies.
                    <br>
                    Secondly, the Bible is a source of moral and ethical guidance for millions around the world. Its teachings on compassion, justice, and forgiveness continue to shape individual beliefs and societal values.
                    <br>
                    Thirdly, studying the Bible fosters intellectual curiosity and critical thinking skills. Exploring its complex narratives and theological concepts encourages contemplation and discussion, enriching personal and academic growth.
                    <br>
                    Lastly, for those who identify as Christians, learning about the Bible is essential for deepening their faith and spiritual journey. It offers a roadmap for understanding God's will and experiencing spiritual transformation.</p>
            </div>
        </div>

        <div class="section features-section mt-16">
            <div class="container">
                <h2 class="title is-8 mb-6" style="color: black">Features of Scriptu</h2>
                <div class="columns is-multiline">
                    <div class="column is-one-third">
                        <div class="card" style="border: solid 1px gray">
                            <div class="card-content">
                                <p class="title is-5">Learning Courses</p>
                                <p>Learn a variety of different things about the bible with our free and diverse learning courses. Made for everyone.</p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-one-third">
                        <div class="card" style="border: solid 1px gray">
                            <div class="card-content">
                                <p class="title is-5">Interactive Study Guides</p>
                                <p>Engage with dynamic study guides designed to deepen your understanding of biblical texts and themes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-one-third">
                        <div class="card" style="border: solid 1px gray">
                            <div class="card-content">
                                <p class="title is-5">Community Discussions</p>
                                <p>Join vibrant community discussions to explore the Bible's relevance to modern life and share insights with others.</p>
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
