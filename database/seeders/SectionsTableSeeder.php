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
            switch ($topic->id) {
                case 1:
                    // Sections for the first topic
                    $sectionTitles = [
                        'First 5 books',
                        'Books 5-15',
                        'Books 15-23',
                        // Add more unique titles for the first topic
                    ];
                    break;
                case 2:
                    // Sections for the second topic
                    $sectionTitles = [
                        'Introduction to the topic',
                        'Overview of key concepts',
                        'Case studies',
                        // Add more unique titles for the second topic
                    ];
                    break;


                default:
                    // Default sections for other topics
                    $sectionTitles = [
                        'Default section 1',
                        'Default section 2',
                        // Add more default section titles
                    ];
            }

            // Create sections for the current topic
            foreach ($sectionTitles as $title) {
                $topic->sections()->create(['title' => $title]);
            }
        });
    }
}
