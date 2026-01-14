<?php

namespace Database\Seeders;

use App\Models\Record;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Symfony\Component\Clock\now;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $records = collect([
            [
                'title' => 'New Title One',
                'slug' => 'news-title-one',
                'description' => 'jab model par koe action hota hai(create, update, delete), to jo cheez automatically
            trigger hoti hai usay model events kehty hai.',
                'client_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'New Title Two',
                'slug' => 'news-title-two',
                'description' => 'jab model par koe action hota hai(create, update, delete), to jo cheez automatically
            trigger hoti hai usay model events kehty hai.',
                'client_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'New Title Three',
                'slug' => 'news-title-three',
                'description' => 'jab model par koe action hota hai(create, update, delete), to jo cheez automatically
            trigger hoti hai usay model events kehty hai.',
                'client_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'New Title Four',
                'slug' => 'news-title-four',
                'description' => 'jab model par koe action hota hai(create, update, delete), to jo cheez automatically
            trigger hoti hai usay model events kehty hai.',
                'client_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'New Title Five',
                'slug' => 'news-title-five',
                'description' => 'jab model par koe action hota hai(create, update, delete), to jo cheez automatically
            trigger hoti hai usay model events kehty hai.',
                'client_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'title' => 'New Title Sex',
                'slug' => 'news-title-sex',
                'description' => 'jab model par koe action hota hai(create, update, delete), to jo cheez automatically
            trigger hoti hai usay model events kehty hai.',
                'client_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
        $records->each(function ($record) {
            Record::insert($record);
        });
    }
}
