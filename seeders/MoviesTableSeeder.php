<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            ['id' => 1, 'title' => "3 Days to Kill", 'director' => "McG", 'category' => "Thriller", 'release' => 2014],
            ['id' => 2, 'title' => "Black Friday", 'director' => "Anurag Kashyap", 'category' => "Political", 'release' => 2004],
            ['id' => 3, 'title' => "Bodyguard", 'director' => "Siddique", 'category' => "Hindi Action", 'release' => 2011],
            ['id' => 4, 'title' => "Doom", 'director' => "Andrzej Bartkowiak", 'category' => "Action", 'release' => 2005],
            ['id' => 5, 'title' => "Jurassic Park", 'director' => "Steven Spielberg", 'category' => "Science fiction", 'release' => 1993],
            ['id' => 6, 'title' => "Ludo", 'director' => "Anurag Basu", 'category' => "Comedy", 'release' => 2020],
            ['id' => 7, 'title' => "Redemption", 'director' => "Steven Knight", 'category' => "Crime", 'release' =>2013],
            ['id' => 8, 'title' => "3 Idiots", 'director' => "Vidhu Vinod Chopra", 'category' => "Comedy", 'release' =>2009],
            ['id' => 9, 'title' => "Avengers", 'director' => "Anthony Russo", 'category' => "Action", 'release' => 2012],
            ['id' => 10, 'title' => "Onward", 'director' => "Dan Scanlon", 'category' => "Animated", 'release' => 2020],
            ['id' => 11, 'title' => "The Lighthouse", 'director' => "Robert Eggers", 'category' => "Horror", 'release' => 2019],
            ['id' => 12, 'title' => "King Kong", 'director' => "Brendon Cronberg", 'category' => "Horror", 'release' => 2020],
            ['id' => 13, 'title' => "A Secret Love", 'director' => "Chris Bolan", 'category' => "Documentary", 'release' => 2020],
            ['id' => 14, 'title' => "Black Panther", 'director' => "Ryan Coogler", 'category' => "Action", 'release' => 2018],
            ['id' => 15, 'title' => "Incredibles 2", 'director' => "Brad Bird", 'category' => "Action", 'release' => 2018]
        ]);
    }
}
