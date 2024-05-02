<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    public function show($chapterId)
    {
        $chapter = Chapter::findOrFail($chapterId);
        return view('chapters.show', compact('chapter'));
    }
}
