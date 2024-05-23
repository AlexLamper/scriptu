<?php

// Chapter.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Chapter extends Model
{
    protected $fillable = ['title', 'topic_id'];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($this->title);
    }

    public function setLanguageAttribute($value)
    {
        // Set the language attribute based on the chapter's title or any other source
        // For example, if the title contains the language information, you can extract it
        // This is just a placeholder implementation, replace it with your actual logic
        $this->attributes['language'] = 'en'; // Replace 'en' with your actual logic
    }
}
