<?php

use Illuminate\Database\Seeder;

class RelQuestionQuestionnariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$faker = Faker\Factory::create();
        DB::table('rel_question_questionnaries')->insert([
        	[
        		'id_question' => 1,
        		'id_questionnarie' =>1,
        		'created_at' => $faker->dateTime(),
        		'updated_at' => $faker->dateTime()
        	],
        	[
        		'id_question' => 2,
        		'id_questionnarie' =>1,
        		'created_at' => $faker->dateTime(),
        		'updated_at' => $faker->dateTime()
        	],
        	[
        		'id_question' => 3,
        		'id_questionnarie' =>1,
        		'created_at' => $faker->dateTime(),
        		'updated_at' => $faker->dateTime()
        	],
        	[
        		'id_question' => 4,
        		'id_questionnarie' =>1,
        		'created_at' => $faker->dateTime(),
        		'updated_at' => $faker->dateTime()
        	],
        	[
        		'id_question' => 5,
        		'id_questionnarie' =>1,
        		'created_at' => $faker->dateTime(),
        		'updated_at' => $faker->dateTime()
        	],
        	[
        		'id_question' => 6,
        		'id_questionnarie' =>1,
        		'created_at' =>$faker->dateTime(),
        		'updated_at' => $faker->dateTime()
        	],
        	[
        		'id_question' => 7,
        		'id_questionnarie' =>1,
        		'created_at' => $faker->dateTime() ,
        		'updated_at' => $faker->dateTime() 
        	]
        ]);
    }
}
