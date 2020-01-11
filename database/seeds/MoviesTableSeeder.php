<?php

use Illuminate\Database\Seeder;
use App\Movies;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      	 $movie = new Movies;
		 $movie->title = "Ip Man";
		 $movie->categories = "Action";
		 $movie->duration = "2 Jam ";
		 $movie->save();

		 $movie = new Movies;
		 $movie->title = "Ip Man 2";
		 $movie->categories = "Action";
		 $movie->duration = "2 Jam 30 Menit";
		 $movie->save();

		 $movie = new Movies;
		 $movie->title = "Ip Man 3 ";
		 $movie->categories = "Action";
		 $movie->duration = "2 Jam 20 Menit ";
		 $movie->save();

		 $movie = new Movies;
		 $movie->title = "Ip Man 4 ";
		 $movie->categories = "Action";
		 $movie->duration = "2 Jam ";
		 $movie->save();

		 $movie = new Movies;
		 $movie->title = "NKTCHI";
		 $movie->categories = "Drama";
		 $movie->duration = "2 Jam ";
		 $movie->save();

    }
}
