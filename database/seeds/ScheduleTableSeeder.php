<?php

use Illuminate\Database\Seeder;
use App\Schedules;

class ScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schedule = new Schedules;
		 $schedule->date = "2020-01-11";
		 $schedule->start_time = "11:00";
		 $schedule->end_time = "13:00";
		 $schedule->id_film = 1;
		 $schedule->id_studio = 1;
		 $schedule->save();

		 $schedule = new Schedules;
		$schedule->date = "2020-01-11";
		 $schedule->start_time = "13:00";
		 $schedule->end_time = "15:00";
		 $schedule->id_film = 1;
		 $schedule->id_studio = 1;
		 $schedule->save();

		 $schedule = new Schedules;
		 $schedule->date = "2020-01-11";
		 $schedule->start_time = "11:00";
		 $schedule->end_time = "13:00";
		 $schedule->id_film = 4;
		 $schedule->id_studio = 2;
		 $schedule->save();

		 $schedule = new Schedules;
		 $schedule->date = "2020-01-11";
		 $schedule->start_time = "13:00";
		 $schedule->end_time = "15:00";
		 $schedule->id_film = 4;
		 $schedule->id_studio = 2;
		 $schedule->save();

		 $schedule = new Schedules;
		 $schedule->date = "2020-01-11";
		 $schedule->start_time = "11:00";
		 $schedule->end_time = "13:00";
		 $schedule->id_film = 5;
		 $schedule->id_studio = 3;
		 $schedule->save();

		 $schedule = new Schedules;
		 $schedule->date = "2020-01-11";
		 $schedule->start_time = "13:00";
		 $schedule->end_time = "15:00";
		 $schedule->id_film = 5;
		 $schedule->id_studio = 3;
		 $schedule->save();

		 $schedule = new Schedules;
		 $schedule->date = "2020-01-11";
		 $schedule->start_time = "11:00";
		 $schedule->end_time = "12:45";
		 $schedule->id_film = 6;
		 $schedule->id_studio = 4;
		 $schedule->save();
    }
}
