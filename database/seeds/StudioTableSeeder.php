<?php

use Illuminate\Database\Seeder;
use App\Studio;

class StudioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $studio = new Studio;
		 $studio->studio_name = "Studio 1";
		 $studio->save();

		 $studio = new Studio;
		 $studio->studio_name = "Studio 2";
		 $studio->save();

		 $studio = new Studio;
		 $studio->studio_name = "Studio 3";
		 $studio->save();

		 $studio = new Studio;
		 $studio->studio_name = "Studio 4";
		 $studio->save();

		 $studio = new Studio;
		 $studio->studio_name = "Studio 5";
		 $studio->save();

		 $studio = new Studio;
		 $studio->studio_name = "Studio 6";
		 $studio->save();

		 $studio = new Studio;
		 $studio->studio_name = "Studio 7";
		 $studio->save();
    }
}
