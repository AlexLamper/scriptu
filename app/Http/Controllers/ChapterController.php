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

        // Get the topic and chapter names
        $topic = $chapter->topic;
        $topicName = str_replace(' ', '_', strtolower($topic->title));
        $chapterName = str_replace(' ', '_', strtolower($chapter->title));

        // Construct the path to the markdown file
        $markdownPath = resource_path("markdown/en/{$topicName}/{$chapterName}.md");

        // Check if the markdown file exists
        if (!File::exists($markdownPath)) {
            // Handle case where markdown file doesn't exist
            abort(404, 'Markdown file not found.');
        }

        // Read the markdown content
        $markdownContent = File::get($markdownPath);

        // Parse markdown content to HTML
        $parsedown = new Parsedown();
        $htmlContent = $parsedown->text($markdownContent);

        // Define previous and next chapters
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
