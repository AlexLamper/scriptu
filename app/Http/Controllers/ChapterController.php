<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Topic;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    public function show($topicId, $chapterId)
    {
        $chapter = Chapter::findOrFail($chapterId);
        $topic = $chapter->topic;
        $topics = Topic::all(); // Fetch all topics if needed

        return view('chapters.show', compact('chapter', 'topic', 'topics'));
    }

}
