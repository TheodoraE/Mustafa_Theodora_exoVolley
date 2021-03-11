<?php

namespace Database\Seeders;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            PositionSeeder::class,
            GenderSeeder::class,
            TeamSeeder::class
        ]);
        Team::factory()->count(4)->create();
    }
}
