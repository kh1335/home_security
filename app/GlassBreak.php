<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GlassBreak extends Model
{
    protected $table = 'glass_breaks';

    public  $state;

    /**
     * randomly sets state to 1.000-1000.000
     *
     * @return void
     */
    public function setState()
    {
        $this->state = mt_rand (1, 1000000) / 1000;
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
     * set alarm if hz state >= threshold
     *
     * @return boolean
     */
    public function alarm()
    {
        return $this->state >= $this->threshold;
    }
}
