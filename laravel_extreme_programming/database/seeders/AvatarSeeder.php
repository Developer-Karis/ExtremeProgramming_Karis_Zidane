<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avatars')->insert([
            [
                'nom' => 'homme1',
                'src' => '256_1.png',
            ],
            [
                'nom' => 'homme2',
                'src' => '256_6.png',
            ],
            [
                'nom' => 'homme3',
                'src' => '256_3.png',
            ],
            [
                'nom' => 'homme4',
                'src' => '256_4.png',
            ],
            [
                'nom' => 'homme5',
                'src' => '256_5.png',
            ],
        ]);
    }
}
