<?php

use Illuminate\Database\Seeder;

class TemperatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('temperatures')->insert(array(
            array('min_threshold' => 32, 'max_threshold' => 80),
            array('min_threshold' => 32, 'max_threshold' => 80)
        ));
    }
}
