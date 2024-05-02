<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Section;
use App\Models\Topic;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    public function index(Topic $topic, Section $section)
    {
        $chapters = $section->chapters;
        $topics = Topic::all(); // Retrieve all topics

        return view('chapters.index', compact('topic', 'section', 'chapters', 'topics'));
    }

    public function show($topicId, $sectionId, $chapterId)
    {
        $topic = Topic::findOrFail($topicId);
        $section = Section::findOrFail($sectionId);
        $chapter = Chapter::findOrFail($chapterId);
        $topics = Topic::all(); // Retrieve all topics

        return view('chapters.show', compact('topic', 'section', 'chapter', 'topics'));
    }

}
