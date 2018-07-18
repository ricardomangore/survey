<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
        	[
        		'question' => 'Cual es su nombre completo'
        	],
        	[
        		'question' => 'Que tipo de tramite realizo'
        	],
        	[
        		'question' => 'Que tan satisfecho está con el servicio que le brindo el ejecutivo que le atendió'
        	],
        	[
        		'question' => 'Cuanto tiempo espero a que le atendiera un ejecutivo'
        	],
        	[
        		'question' => 'Que tan probable es que recomiende AT&T a un amigo o familiar'
        	],
        	[
        		'question' => 'Podria ayudarnos con sus comentarios para entender mejor su experiencia de atención / compra'
        	],
        	[
        		'question' => 'Indique el nombre del ejecutivo que le atendió'
        	]
        ]);
    }
}
