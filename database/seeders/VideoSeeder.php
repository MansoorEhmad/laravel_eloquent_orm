<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $video = [
            [
                'video' => 'video 1',
            ],
            [
               'video' => 'video 2',
            ]
        ];

        foreach($video as $vi){
            Video::create($vi);
        }
    }
}
