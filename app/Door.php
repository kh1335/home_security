<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Door extends Model
{
    protected $table = 'doors';

    public  $state;

    /**
     * randomly sets state to Opened/Closed
     *
     * @return void
     */
    public function setState()
    {
        // get random values in array either Opened/Closed
        $options = array('Opened', 'Closed');
        $key = array_rand($options);

        $this->state = $options[$key];
    }

    /**
     * set alarm if state is equal to threshold
     *
     * @return boolean
     */
    public function alarm()
    {
        return $this->state == $this->threshold;
    }
}
