<?php

// SectionsTableSeeder.php
namespace Database\Seeders;

use App\Models\Topic;
use App\Models\Section;
use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $topics = Topic::all();

        $topics->each(function ($topic) {
            $sectionTitles = [
                'First 5 books',
                'Books 5-15',
                'Books 15-23',
                // Add more unique titles as needed for each topic
                'Introduction',
                'Overview',
                'Key Concepts',
                'Case Studies',
                // Add more unique titles for the topic
            ];

            foreach ($sectionTitles as $title) {
                $topic->sections()->create(['title' => $title]);
            }
        });
    }
}
