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

        // Ensure that the chapter's language and slug are not null
        if (is_null($chapter->language) || is_null($chapter->slug)) {
            abort(404, "Chapter language or slug is null");
        }

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

        // Read Markdown content from the file
        $markdownContent = File::get(resource_path("markdown" . DIRECTORY_SEPARATOR . "{$chapter->language}" . DIRECTORY_SEPARATOR . "{$chapter->slug}.md"));

        // Parse Markdown content using Parsedown
        $parsedown = new Parsedown();
        $htmlContent = $parsedown->text($markdownContent);

        return view('chapters.show', compact('topic', 'chapter', 'htmlContent', 'previousChapter', 'nextChapter'));
    }

}
