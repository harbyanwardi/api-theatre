<?php

use Illuminate\Database\Seeder;
use App\Seat;

class SeatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seat = new Seat;
		 $seat->seat_no = "A2";
		 $seat->status = "Available";
		 $seat->id_studio = 2;
		 $seat->save();

		 $seat = new Seat;
		 $seat->seat_no = "A2";
		 $seat->status = "Available";
		 $seat->id_studio = 2;
		 $seat->save();

		 $seat = new Seat;
		 $seat->seat_no = "A3";
		 $seat->status = "Available";
		 $seat->id_studio = 2;
		 $seat->save();

		 $seat = new Seat;
		 $seat->seat_no = "A4";
		 $seat->status = "Available";
		 $seat->id_studio = 2;
		 $seat->save();

		 $seat = new Seat;
		 $seat->seat_no = "A5";
		 $seat->status = "Unavailable";
		 $seat->id_studio = 2;
		 $seat->save();

		 $seat = new Seat;
		 $seat->seat_no = "A6";
		 $seat->status = "Available";
		 $seat->id_studio = 2;
		 $seat->save();

		 $seat = new Seat;
		 $seat->seat_no = "A7";
		 $seat->status = "Unavailable";
		 $seat->id_studio = 2;
		 $seat->save();

		 $seat = new Seat;
		 $seat->seat_no = "B2";
		 $seat->status = "Available";
		 $seat->id_studio = 2;
		 $seat->save();

    }
}
