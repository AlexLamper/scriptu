<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Chapter;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        $topics = Topic::where('name', 'LIKE', "%{$query}%")->get();
        $chapters = Chapter::where('title', 'LIKE', "%{$query}%")->get();

        return response()->json([
            'topics' => $topics,
            'chapters' => $chapters
        ]);
    }
}
