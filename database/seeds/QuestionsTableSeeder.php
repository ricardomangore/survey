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
        		'question' => 'Cual es su nombre completo',
        		'format' => trim('{
        			"type" : "text"
        		}',"\t\n"),
        	    'created_at' => $faker->dateTime(),
        	    'updated_at' => $faker->dateTime()
        	],
        	[
        		'question' => 'Que tipo de tramite realizo',
        		'format' => trim('{
        			"type" : "select",
        			"options" : ["option 1", "option 2", "option 3"]
        		}',"\t\n"),
        	    'created_at' => $faker->dateTime(),
        	    'updated_at' => $faker->dateTime()
        	],
        	[
        		'question' => 'Que tan satisfecho está con el servicio que le brindo el ejecutivo que le atendió',
        		'format' => trim('{
        			"type" : "select",
        			"options" : ["option 1", "option 2", "option 3"]
        		}',"\t\n"),
        	    'created_at' => $faker->dateTime(),
        	    'updated_at' => $faker->dateTime()
        	],
        	[
        		'question' => 'Cuanto tiempo espero a que le atendiera un ejecutivo',
        		'format' => trim('{
        			"type" : "select",
        			"options" : ["option 1", "option 2", "option 3"]
        		}',"\t\n"),
        	    'created_at' => $faker->dateTime(),
        	    'updated_at' => $faker->dateTime()
        	],
        	[
        		'question' => 'Que tan probable es que recomiende AT&T a un amigo o familiar',
        		'format' => trim('{
        			"type" : "select",
        			"options" : ["option 1", "option 2", "option 3"]
        		}', "\t\n"),
        	    'created_at' => $faker->dateTime(),
        	    'updated_at' => $faker->dateTime()
        	],
        	[
        		'question' => 'Podria ayudarnos con sus comentarios para entender mejor su experiencia de atención / compra',
        		'format' => trim('{
        			"type" : "longtext"
        		}', "\t\n"),
        	    'created_at' => $faker->dateTime(),
        	    'updated_at' => $faker->dateTime()
        	],
        	[
        		'question' => 'Indique el nombre del ejecutivo que le atendió',
        		'format' => trim('{
        			"type" : "text"
        		}', "\t\n"),
        	    'created_at' => $faker->dateTime(),
        	    'updated_at' => $faker->dateTime()
        	],
        ]);
    }
}
