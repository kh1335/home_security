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
        $this->state = number_format(mt_rand (1, 1000) / 10, 1);
    }

    /**
     * set alarm if visiblity state <= threshold
     *
     * @return boolean
     */
    public function alarm()
    {
        if(!isset($this->state)) {
            return true;
        }

        return $this->state <= $this->threshold;
    }
}
