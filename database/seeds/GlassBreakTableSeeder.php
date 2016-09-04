<?php

use Illuminate\Database\Seeder;

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
            array('threshold' => 556),
            array('threshold' => 556),
            array('threshold' => 556),
        ));
    }
}
