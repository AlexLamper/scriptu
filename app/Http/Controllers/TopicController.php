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
        $topic->load('chapters');
        $previousTopic = Topic::where('id', '<', $topic->id)->orderBy('id', 'desc')->first();
        $topics = Topic::all();
        return view('topics.show', compact('topic', 'previousTopic', 'topics'));
    }

    public function previous()
    {
        return redirect()->route('topics.index');
    }
}
