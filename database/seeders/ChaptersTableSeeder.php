<?php

// ChaptersTableSeeder.php
namespace Database\Seeders;

use App\Models\Topic;
use App\Models\Chapter; // Corrected import statement
use Illuminate\Database\Seeder;

class ChaptersTableSeeder extends Seeder
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
                    // Chapters for the first topic
                    $chapterTitles = [
                        'First 5 books',
                        'Books 5-15',
                        'Books 15-23',
                        // Add more unique titles for the first topic
                    ];
                    break;
                case 2:
                    // Chapters for the second topic
                    $chapterTitles = [
                        'Introduction to the topic',
                        'Overview of key concepts',
                        'Case studies',
                        // Add more unique titles for the second topic
                    ];
                    break;


                default:
                    // Default chapters for other topics
                    $chapterTitles = [
                        'Default chapter 1',
                        'Default chapter 2',
                        // Add more default section titles
                    ];
            }

            // Create chapters for the current topic
            foreach ($chapterTitles as $title) {
                $topic->chapters()->create(['title' => $title]);
            }
        });
    }
}
