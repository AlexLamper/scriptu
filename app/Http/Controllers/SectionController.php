<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Topic;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function show($sectionId)
    {
        $section = Section::findOrFail($sectionId);
        $topics = Topic::all();
        return view('sections.show', compact('section', 'topics'));
    }
}
