<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_tags = [
            [
                'name' => 'primo',
                
            ],
            [
                'name' => 'capitano',
                
            ],
            [
                'name' => 'let\'s goooo',
                
            ],
            [
                'name' => 'non puo\' entrare',
                
            ]
        ];
        foreach ($array_tags as $tag) {
            Tag::create($tag);
        }
    }
}
