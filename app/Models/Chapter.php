<?php

// Chapter.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Chapter extends Model
{
    protected $fillable = ['title'];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function setLanguageAttribute($value)
    {
        // Set the language attribute based on the chapter's title or any other source
        // For example, if the title contains the language information, you can extract it
        // This is just a placeholder implementation, replace it with your actual logic
        $this->attributes['language'] = 'en'; // Replace 'en' with your actual logic
    }

    public function setSlugAttribute($value)
    {
        // Set the slug attribute based on the chapter's title or any other source
        // For example, you can generate a slug from the title
        // This is just a placeholder implementation, replace it with your actual logic
        $this->attributes['slug'] = Str::slug($this->title); // Replace with your actual logic
    }
}
