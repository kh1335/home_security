<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SmokeDetector extends Model
{
    protected $table = 'smoke_detectors';

    public  $state;

    /**
     * randomly sets state to 1.0-100.0
     *
     * @return void
     */
    public function setState()
    {
        $this->state = mt_rand (1, 1000) / 10;
    }

    /**
     * gets the state that has been set
     *
     * @return double
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * set alarm if visiblity state <= threshold
     *
     * @return boolean
     */
    public function alarm()
    {
        return $this->state <= $this->threshold;
    }
}
