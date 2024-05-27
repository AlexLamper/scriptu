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

        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must login before you can ask a question. Click <a href="' . route('login') . '">here</a> to login.');
        }

        $question = new Question();
        $question->title = $request->input('title');
        $question->content = $request->input('content');
        $question->user_id = Auth::id();
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

    public function upvoteQuestion(Question $question)
    {
        if (!$question->votes()->where('user_id', auth()->id())->exists()) {
            $question->upvote();
            return back()->with('success', 'You have upvoted this question.');
        }
        return back()->with('error', 'You have already upvoted this question.');
    }

    public function upvoteAnswer(Answer $answer)
    {
        if (!$answer->votes()->where('user_id', auth()->id())->exists()) {
            $answer->upvote();
            return back()->with('success', 'You have upvoted this answer.');
        }
        return back()->with('error', 'You have already upvoted this answer.');
    }

}
