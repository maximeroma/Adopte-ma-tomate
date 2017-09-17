<?php

use Illuminate\Database\Seeder;
use App\Lieu;

class LieuxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	Lieu::truncate();
        $faker = Faker\Factory::create('fr_FR');

        $limit = 50;

        for ($i = 0; $i < $limit; $i++) {
        	$lieu = new Lieu();
        	$lieu->latitude = $faker->latitude($min = 43.11, $max = 44.04);
        	$lieu->longitude = $faker->longitude($min= -0.84, $max = 2.45);
        	$lieu->save();
        }
    }
}
