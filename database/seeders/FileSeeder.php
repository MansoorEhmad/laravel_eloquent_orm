<?php

namespace Database\Seeders;

use App\Models\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = [
            [
                'file' => 'file 1',
            ],
            [
               'file' => 'file 2',
            ]
        ];

        foreach($file as $fi){
            File::create($fi);
        }
    }
}
