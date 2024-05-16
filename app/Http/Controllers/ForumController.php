<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    public function index()
    {
        $questions = Question::latest()->paginate(10);
        return view('forum.index', compact('questions'));
    }

    public function show(Question $question)
    {
        $question->load('answers.user');
        return view('forum.show', compact('question'));
    }

    public function create()
    {
        return view('forum.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $question = new Question();
        $question->title = $request->input('title');
        $question->content = $request->input('content');
        $question->user_id = Auth::id(); // Get the currently authenticated user's ID
        $question->save();

        return redirect()->route('forum.show', $question);
    }

    public function storeAnswer(Question $question, Request $request)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $question->answers()->create([
            'content' => $request->input('content'),
            'user_id' => auth()->id(),
        ]);

        return back();
    }
}
