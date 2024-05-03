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
        $topics = Topic::all();

        $previousChapter = Chapter::where('topic_id', $topicId)
            ->where('id', '<', $chapterId)
            ->orderBy('id', 'desc')
            ->first();

        $nextChapter = Chapter::where('topic_id', $topicId)
            ->where('id', '>', $chapterId)
            ->orderBy('id', 'asc')
            ->first();

        return view('chapters.show', compact('topic', 'chapter', 'previousChapter', 'nextChapter'));
    }

}
