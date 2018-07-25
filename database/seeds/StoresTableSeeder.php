<?php

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Store::class,10)->create()->each(function ($store) {
        	$store->user->save(factory(App\User::class)->make());
        });
    }
}


