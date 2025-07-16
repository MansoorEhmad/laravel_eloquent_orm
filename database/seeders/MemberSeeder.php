<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Member::create(
            [
                'member_name' => 'Mansoor',
                'email' => 'mansoor@gmail.com'
            ]
        );

        Member::create(
            [
                'member_name' => 'Kamran',
                'email' => 'kamran@gmail.com'
            ]
        );

        Member::create(
            [
                'member_name' => 'Ali Khan',
                'email' => 'ak@gmail.com'
            ]
        );

        Member::create(
            [
                'member_name' => 'Jawad',
                'email' => 'jawad@gmail.com'
            ]
        );

        Member::create(
            [
                'member_name' => 'Khalid',
                'email' => 'khalid@gmail.com'
            ]
        );
    }
}