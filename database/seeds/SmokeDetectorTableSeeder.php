<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SmokeDetectorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('smoke_detectors')->insert(array(
            array('threshold' => 55, 'units' => '&#37; Visibility', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('threshold' => 55, 'units' => '&#37; Visibility', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('threshold' => 55, 'units' => '&#37; Visibility', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
        ));
    }
}
