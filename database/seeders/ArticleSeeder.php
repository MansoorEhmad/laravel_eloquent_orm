<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = collect([
            [
                'title' => 'New Title One',
                'description' => 'jab model par koe action hota hai(create, update, delete), to jo cheez automatically trigger hoti hai usay model events kehty hai.',
                'people_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'New Title Two',
                'description' => 'jab model par koe action hota hai(create, update, delete), to jo cheez automatically trigger hoti hai usay model events kehty hai.',
                'people_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'New Title Three',
                'description' => 'jab model par koe action hota hai(create, update, delete), to jo cheez automatically trigger hoti hai usay model events kehty hai.',
                'people_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'New Title Four',
                'description' => 'jab model par koe action hota hai(create, update, delete), to jo cheez automatically trigger hoti hai usay model events kehty hai.',
                'people_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'New Title Five',
                'description' => 'jab model par koe action hota hai(create, update, delete), to jo cheez automatically trigger hoti hai usay model events kehty hai.',
                'people_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'title' => 'New Title Sex',
                'description' => 'jab model par koe action hota hai(create, update, delete), to jo cheez automatically trigger hoti hai usay model events kehty hai.',
                'people_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
        $articles->each(function ($article) {
            Article::insert($article);
        });
    }
}
