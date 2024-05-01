<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Topic::create([
            'title' => 'Structure of the Bible',
            'description' => 'Learn about the structure of the Bible.',
        ]);

        Topic::create([
            'title' => 'Books of the Bible',
            'description' => 'Explore the different books in the Bible.',
        ]);

        Topic::create([
            'title' => 'Biblical Characters',
            'description' => 'Discover the characters mentioned in the Bible.',
        ]);

        Topic::create([
            'title' => 'Biblical Stories',
            'description' => 'Explore the stories told in the Bible.',
        ]);

        Topic::create([
            'title' => 'Biblical Interpretation',
            'description' => 'Learn about interpreting the Bible.',
        ]);
    }

}
