<?php

use Illuminate\Database\Seeder;
//use Fake\Generator as Faker;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Question::class,1)->create();
    	$faker = Faker\Factory::create();
        DB::table('questions')->insert([
        	[
        		'question' => 'pregunta 1',
        	    'created_at' => $faker->dateTime(),
        	    'updated_at' => $faker->dateTime()
        	],
        	[
        		'question' => 'pregunta 2',
        	    'created_at' => $faker->dateTime(),
        	    'updated_at' => $faker->dateTime()
        	],
        	[
        		'question' => 'pregunta 3',
        	    'created_at' => $faker->dateTime(),
        	    'updated_at' => $faker->dateTime()
        	],
        	[
        		'question' => 'pregunta 4',
        	    'created_at' => $faker->dateTime(),
        	    'updated_at' => $faker->dateTime()
        	],
        	[
        		'question' => 'pregunta 5',
        	    'created_at' => $faker->dateTime(),
        	    'updated_at' => $faker->dateTime()
        	],
        ]);
    }
}
