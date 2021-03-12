<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pictures')->insert(
            [
                [
                    'url' => "silouhaite.jpeg"
                ],
                [
                    'url' => "silouhaite.jpeg"
                ],
                [
                    'url' => "silouhaite.jpeg"
                ],
                [
                    'url' => "silouhaite.jpeg"
                ],
                [
                    'url' => "silouhaite.jpeg"
                ],
                [
                    'url' => "silouhaite.jpeg"
                ],
                [
                    'url' => "silouhaite.jpeg"
                ],
                [
                    'url' => "silouhaite.jpeg"
                ],
                [
                    'url' => "silouhaite.jpeg"
                ],
                [
                    'url' => "silouhaite.jpeg"
                ],
                [
                    'url' => "silouhaite.jpeg"
                ],
                [
                    'url' => "silouhaite.jpeg"
                ],
                [
                    'url' => "silouhaite.jpeg"
                ],
                [
                    'url' => "silouhaite.jpeg"
                ],
                [
                    'url' => "silouhaite.jpeg"
                ],
              
            ]
        );
    }
}
