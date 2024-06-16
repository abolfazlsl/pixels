<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Page;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(3)->create();
        Job::factory(30)->hasAttached($tags)->create();

        Page::factory(5)->create();
    }
}
