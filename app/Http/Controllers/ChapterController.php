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
        $currentChapterId = $chapter->id;

        $parsedown = new Parsedown();
        $markdownContent = File::get(resource_path("markdown/en/structure_of_the_bible/introduction.md"));
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

        // Updated Markdown styling to make them work and display the styling as html content
        $htmlContent = str_replace('<h1>', '<h1 class="text-4xl font-bold">', $htmlContent);
        $htmlContent = str_replace('<h2>', '<h2 class="text-2xl font-bold">', $htmlContent);
        $htmlContent = str_replace('<ul>', '', $htmlContent);
        $htmlContent = str_replace('<ol>', '', $htmlContent);
        $htmlContent = '<pre>' . $htmlContent . '</pre>';

        return view('chapters.show', compact('topic', 'chapter', 'htmlContent', 'previousChapter', 'nextChapter', 'currentChapterId'));
    }


}
