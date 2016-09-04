<?php

use Illuminate\Database\Seeder;

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
            array('threshold' => 55),
            array('threshold' => 55),
            array('threshold' => 55),
        ));
    }
}
