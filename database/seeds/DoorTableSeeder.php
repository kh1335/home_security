<?php

use Illuminate\Database\Seeder;

class DoorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doors')->insert(array(
            array('threshold' => 'Opened'),
            array('threshold' => 'Opened')
        ));
    }
}
