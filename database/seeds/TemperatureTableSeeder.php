<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            array('min_threshold' => 32, 'max_threshold' => NULL, 'units' => '&#176;', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('min_threshold' => 32, 'max_threshold' => 80, 'units' => '&#176;', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s'))
        ));
    }
}
