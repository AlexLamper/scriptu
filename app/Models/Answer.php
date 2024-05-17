<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['content', 'question_id', 'user_id'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function upvote()
    {
        if (!$this->votes()->where('user_id', auth()->id())->exists()) {
            $this->votes()->create(['user_id' => auth()->id()]);
            $this->increment('upvotes');
        }
    }

    public function votes()
    {
        return $this->morphMany(Vote::class, 'votable');
    }

}
