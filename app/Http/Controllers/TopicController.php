<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::all();
        return view('topics.index', compact('topics'));
    }

    public function show(Topic $topic)
    {
        $topic->load('sections');
        $topics = Topic::all(); // Fetch all topics
        return view('topics.show', compact('topic', 'topics'));
    }


}
