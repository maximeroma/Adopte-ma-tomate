<?php

use Illuminate\Database\Seeder;
use App\Jardin;

class JardinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Jardin::truncate();
        $faker = Faker\Factory::create('fr_FR');

        $limit = 50;

        for ($i = 0; $i < $limit; $i++) {

        	$jardin = new Jardin();
        	$jardin->fk_users = $faker->numberBetween($min=10, $max=50);
        	$jardin->superficie = $faker->numberBetween($min=1000, $max=5000);
        	$jardin->whishlist = $faker->text($maxNbrChars = 200);
        	$jardin->besoins_humains = $faker->text($maxNbrChars = 200);
        	// // $table->string('photos');
        	$jardin->description = $faker->text($maxNbrChars = 200);
        	$jardin->fk_lieux = $faker->numberBetween($min=1, $max=50);

        	$jardin->save();
        }
    }
}


            // $table->increments('id');
            // $table->integer('fk_users');
            // $table->integer('superficie');
            // $table->string('whishlist');
            // $table->string('besoins_humains');
            // $table->string('photos');
            // $table->string('description');
            // $table->integer('fk_lieux');
            // $table->timestamps();