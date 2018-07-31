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
        			"type" : "text",
        			"name" : "customer_name"
        		}',"\t\n"),
        	    'created_at' => $faker->dateTime(),
        	    'updated_at' => $faker->dateTime()
        	],
        	[
        		'question' => 'Indique el nombre del ejecutivo que le atendió',
        		'format' => trim('{
        			"type" : "text",
        			"name" : "saller_name"
        		}', "\t\n"),
        	    'created_at' => $faker->dateTime(),
        	    'updated_at' => $faker->dateTime()
        	],
        	[
        		'question' => 'Que tipo de tramite realizo',
        		'format' => trim('{
        			"type" : "select",
        			"name" : "procedure",
        			"options" : [
        				{"pago_servicio" : "pago de servicio"}, 
        				{"compra_prepago" : "compra de prepago"}, 
        				{"compra_plan" : "compra de plan"},
        				{"renovacion" : "renovación"}
        			]
        		}',"\t\n"),
        	    'created_at' => $faker->dateTime(),
        	    'updated_at' => $faker->dateTime()
        	],
        	[
        		'question' => 'Que tan satisfecho está con el servicio que le brindo el ejecutivo que le atendió',
        		'format' => trim('{
        			"type" : "radio",
        			"name" : "service_satisfaction",
        			"options" : [
        				{"nothing" : "Para nada"},
        				{"disagreement" : "En desacuerdo"},
        				{"neutral" : "Neutro"},
        				{"agree" : "De acuerdo"},
        				{"totally_agree" : "Totalmente"}
        			]
        		}',"\t\n"),
        	    'created_at' => $faker->dateTime(),
        	    'updated_at' => $faker->dateTime()
        	],
        	[
        		'question' => 'Cuanto tiempo espero a que le atendiera un ejecutivo',
        		'format' => trim('{
        			"type" : "radio",
        			"name" : "wait_time",
        			"options" : [
        				{"less_than_5"   : "Menos de 5 minutos"},
        				{"from_5_to_10"  : "De 5 a 10 minutos"}, 
        				{"from_10_to_15" : "De 10 a 15 minutos"},
        				{"from_15_to_20" : "De 15 a 20 minutos"},
        				{"more_than_20"  : "Más de 20 minutos"}
        			]
        		}',"\t\n"),
        	    'created_at' => $faker->dateTime(),
        	    'updated_at' => $faker->dateTime()
        	],
        	[
        		'question' => 'Que tan probable es que recomiende AT&T a un amigo o familiar',
        		'format' => trim('{
        			"type" : "radio",
        			"name" : "recomendation",
        			"options" : [
        				{"nothing" : "Para nada"},
        				{"disagreement" : "En desacuerdo"},
        				{"neutral" : "Neutro"},
        				{"agree" : "De acuerdo"},
        				{"totally_agree" : "Totalmente"}
        			]
        		}', "\t\n"),
        	    'created_at' => $faker->dateTime(),
        	    'updated_at' => $faker->dateTime()
        	],
        	[
        		'question' => 'Podria ayudarnos con sus comentarios para entender mejor su experiencia de atención / compra',
        		'format' => trim('{
        			"type" : "longtext",
        			"name" : "opinion"
        		}', "\t\n"),
        	    'created_at' => $faker->dateTime(),
        	    'updated_at' => $faker->dateTime()
        	],
        ]);
    }
}
