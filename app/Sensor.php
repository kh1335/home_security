<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    protected  $table = 'sensors';

    /**
     * use laravels polymorphic relations to map to correct sensor
     */
    public function sensor()
    {
        return $this->morphTo();
    }

    /**
     * set senors state
     *
     * @return void
     */
    public function setState()
    {
        $this->sensor->setState();
    }

    /**
     * get alarm
     *
     * @return boolean
     */
    public function alarm()
    {
        return $this->sensor->alarm();
    }
}
