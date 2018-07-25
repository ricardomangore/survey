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
        factory(App\Questionnarie::class)->create();
    }
}
