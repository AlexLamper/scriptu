<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Topic;
use Illuminate\Support\Facades\File;
use Parsedown;

class ChapterController extends Controller
{
    public function show($topicId, $chapterId)
    {
        $chapter = Chapter::findOrFail($chapterId);

        $markdownContent = file_get_contents("C:/Projects/scriptu/resources/markdown/en/books_5-15.md");

        // Parse Markdown content using Parsedown
        $parsedown = new Parsedown();
        $htmlContent = $parsedown->text($markdownContent);

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

        return view('chapters.show', compact('topic', 'chapter', 'htmlContent', 'previousChapter', 'nextChapter'));
    }

}
