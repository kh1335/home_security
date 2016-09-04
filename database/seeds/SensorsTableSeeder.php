<?php

use Illuminate\Database\Seeder;

class SensorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sensors')->insert(array(
            array('name' => 'Kitchen Temperature', 'sensor_type' => 'App\Temperature', 'sensor_id' => 1),
            array('name' => 'Basement Temperature', 'type' => 'App\Temperature', 'sensor_id' => 2),
            array('name' => 'Front Door', 'type' => 'App\Door', 'sensor_id' => 1),
            array('name' => 'Back Door', 'type' => 'App\Door', 'sensor_id' => 2),
            array('name' => 'Basement', 'type' => 'App\GlassBreak', 'sensor_id' => 1),
            array('name' => 'Main Floor', 'type' => 'App\GlassBreak', 'sensor_id' => 2),
            array('name' => 'Upstairs', 'type' => 'App\GlassBreak', 'sensor_id' => 3),
            array('name' => 'Bedroom 1', 'type' => 'App\SmokeDetector', 'sensor_id' => 1),
            array('name' => 'Bedroom 2', 'type' => 'App\SmokeDetector', 'sensor_id' => 2),
            array('name' => 'Hallway', 'type' => 'App\SmokeDetector', 'sensor_id' => 3),
        ));
    }
}
