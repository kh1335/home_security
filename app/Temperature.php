<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temperature extends Model
{
    protected $tabel = 'temperatures';

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
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * set alarm if degrees state <= min_threshold or degrees state >= max_threshold
     *
     * @return boolean
     */
    public function alarm()
    {
        $alarm = false;

        // if min_threshold is set check if alarm should be set
        if(isset($this->min_threshold)) {
            $alarm = $this->state <= $this->min_threshold;
        }

        // if no alarm and max_threshold is set check if alarm should be set
        if(!$alarm && isset($this->max_threshold)) {
            $alarm = $this->state >= $this->max_threshold;
        }

        return $alarm;
    }
}
