<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title', 'content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
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
