<?php

namespace App\Models;

use App\Models\Topic;
use App\Models\Chapter;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }
}
