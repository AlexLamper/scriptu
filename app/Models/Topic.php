<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['name'];

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }
}
