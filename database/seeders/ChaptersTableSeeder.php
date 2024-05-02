<?php

// ChaptersTableSeeder.php
namespace Database\Seeders;

use App\Models\Section;
use App\Models\Chapter;
use Illuminate\Database\Seeder;

class ChaptersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $sections = Section::all();

        $sections->each(function ($section) {
            for ($i = 1; $i <= 10; $i++) {
                $section->chapters()->create(['title' => 'Chapter ' . $i]);
            }
        });
    }
}
