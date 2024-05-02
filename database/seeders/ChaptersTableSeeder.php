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
            $section->chapters()->createMany([
                ['title' => 'Genesis, the first book'],
                ['title' => 'Exodus, the second book'],
                // Add more chapters as needed for each section
            ]);
        });
    }
}
