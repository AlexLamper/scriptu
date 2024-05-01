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

        // Add more topics as needed
    }
}
