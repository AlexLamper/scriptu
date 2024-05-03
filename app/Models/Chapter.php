<?php

// Chapter.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
