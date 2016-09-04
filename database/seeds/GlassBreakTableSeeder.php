<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GlassBreakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('glass_breaks')->insert(array(
            array('threshold' => 556, 'units' => 'hz', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('threshold' => 556, 'units' => 'hz', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('threshold' => 556, 'units' => 'hz', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
        ));
    }
}
