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
                    // Chapters for the first topic: Structure of the Bible
                    $chapterTitles = [
                        'Introduction',
                        'History of the Bible',
                        'Divisions of the Bible (Old Testament and New Testament)',
                        'Canonization of the Bible',
                        'Languages of the Bible (Hebrew, Aramaic, Greek)',
                        'Manuscripts and Translations',
                        'Literary Genres in the Bible',
                        'Major Themes in the Bible',
                        'Theological Framework of the Bible'
                    ];
                    break;
                case 2:
                    // Chapters for the second topic: Books of the Bible
                    $chapterTitles = [
                        'Introduction to the topic',
                        'Overview of key concepts',
                        'Case studies',
                        // Add more unique titles for the second topic
                    ];
                    break;
                case 3:
                    // Chapters for the third topic: Biblical Characters
                    $chapterTitles = [
                        'Introduction to the topic',
                        'Overview of key concepts',
                        'Case studies',
                        // Add more unique titles for the second topic
                    ];
                    break;
                case 4:
                    // Chapters for the fourth topic: Biblical Stories
                    $chapterTitles = [
                        'Introduction to the topic',
                        'Overview of key concepts',
                        'Case studies',
                        // Add more unique titles for the second topic
                    ];
                    break;
                case 5:
                    // Chapters for the fifth topic: Biblical Interpretation
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
