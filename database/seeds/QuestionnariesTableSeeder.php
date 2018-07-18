<?php

use Illuminate\Database\Seeder;

class QuestionnariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questionnaries')->insert([
        	[
        		'id_question' => 1,
        		'order' => 1
        	],
        	[
        		'id_question' => 2,
        		'order' => 2
        	],
        	[
        		'id_question' => 3,
        		'order' => 3
        	],
        	[
        		'id_question' => 4,
        		'order' => 4
        	],
        	        	        	        	[
        		'id_question' => 5,
        		'order' => 5
        	],
        	[
        		'id_question' => 6,
        		'order' => 6
        	],
        	        	        	[
        		'id_question' => 7,
        		'order' => 7
        	],
        ]);
    }
}
