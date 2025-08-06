<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Tag::factory()->count(5)->create();
        
        Translation::factory()->count(100000)->create()->each(function ($translation) {
            $tagIds = Tag::inRandomOrder()->limit(rand(1, 3))->pluck('id');
            $translation->tags()->attach($tagIds);
        });
    }
}
