<?php

use Illuminate\Database\Seeder;

class equipmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Equipment::class,20)->create();
    }
}
