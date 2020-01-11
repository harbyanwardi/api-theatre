<?php

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
         $this->call(UsersTableSeeder::class);
         $this->call(MoviesTableSeeder::class);
         $this->call(ScheduleTableSeeder::class);
         $this->call(StudioTableSeeder::class);
         $this->call(SeatTableSeeder::class);
    }
}
