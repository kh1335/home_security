<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DoorTableSeeder::class);
        $this->call(GlassBreakTableSeeder::class);
        $this->call(SensorsTableSeeder::class);
        $this->call(SmokeDetectorTableSeeder::class);
        $this->call(TemperatureTableSeeder::class);
    }
}
