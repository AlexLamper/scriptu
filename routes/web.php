<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\TopicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;

Route::get('/500-error', function () {
    throw new \Exception('Intentional Exception to trigger 500 error');
});

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/topics/{topic}/chapters/{chapter}', [ChapterController::class, 'show'])->name('chapters.show');
Route::get('/topics/{topic}/previous', [TopicController::class, 'previous'])->name('topics.previous');

Route::get('/topics', [TopicController::class, 'index'])->name('topics.index');

Route::prefix('topics')->group(function () {
    // Route to display all topics
    Route::get('/', [TopicController::class, 'index'])->name('topics.index');

    // Route to display a specific topic and its chapters
    Route::get('/{topic}', [TopicController::class, 'show'])->name('topics.show');

    // Routes for chapters within a topic
    Route::prefix('{topic}/chapters')->group(function () {
        // Route to display a specific chapter
        Route::get('/{chapter}', [ChapterController::class, 'show'])->name('chapters.show');
    });
});

Route::get('/forum', [ForumController::class, 'index'])->name('forum.index');
Route::get('/forum/create', [ForumController::class, 'create'])->name('forum.create');
Route::get('/forum/{question}', [ForumController::class, 'show'])->name('forum.show');
Route::post('/forum', [ForumController::class, 'store'])->name('forum.store');
Route::post('/forum/{question}/answers', [ForumController::class, 'storeAnswer'])->name('forum.answer');
Route::post('/forum/question/{question}/upvote', [ForumController::class, 'upvoteQuestion'])->name('forum.question.upvote');
Route::post('/forum/answer/{answer}/upvote', [ForumController::class, 'upvoteAnswer'])->name('forum.answer.upvote');
Route::delete('/forum/{question}', [ForumController::class, 'destroy'])->name('forum.question.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
