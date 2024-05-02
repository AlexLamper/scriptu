<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\TopicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/topics/{topic}/sections/{section}', [SectionController::class, 'show'])->name('sections.show');

Route::prefix('topics')->group(function () {
    // Route to display all topics
    Route::get('/', [TopicController::class, 'index'])->name('topics.index');

    // Route to display a specific topic and its sections
    Route::get('/{topic}', [TopicController::class, 'show'])->name('topics.show');

    // Routes for sections within a topic
    Route::prefix('{topic}/sections')->group(function () {
        // Route to display a specific section
        Route::get('/{section}', [SectionController::class, 'show'])->name('sections.show');
    });
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
