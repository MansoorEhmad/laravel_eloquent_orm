<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'post no one',
                'create_id' => 1
            ],
            [
               'title' => 'post no two',
                'create_id' => 3
            ],
            [
               'title' => 'post no three',
                'create_id' => 3
            ],
            [
              'title' => 'post no four',
                'create_id' => 4
            ],
            [
                'title' => 'post no five',
                'create_id' => 1
            ]
        ];

        foreach($posts as $post){
            Post::create($post);
        }
    }
}
