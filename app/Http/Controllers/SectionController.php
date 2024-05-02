<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Topic;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function show($topicId, $sectionId)
    {
        $section = Section::findOrFail($sectionId);
        $topic = $section->topic;
        $topics = Topic::all(); // Fetch all topics if needed

        return view('sections.show', compact('section', 'topic', 'topics'));
    }

}
