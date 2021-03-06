<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DoorTest extends TestCase
{
    protected $model;

    public function setUp()
    {
        parent::setUp();

        $this->model = factory(App\Door::class)->make();
    }

    /**
     * test to make sure state is opened or closed
     *
     * @return void
     */
    public function test_state_is_set_to_closed_or_opened()
    {
        $this->model->setState();

        $this->assertTrue(in_array($this->model->state, array('Opened', 'Closed')));
    }

    /**
     * test to make alarm is set to true when there is no state
     *
     * @return void
     */
    public function test_alarm_is_set_to_true_with_no_state()
    {
        $this->model->state = NULL;

        $this->assertTrue($this->model->alarm());
    }

    /**
     * test to make alarm is set to true when state == threshold
     *
     * @return void
     */
    public function test_alarm_is_set_to_true()
    {
        $this->model->state = 'Opened';

        $this->assertTrue($this->model->alarm());
    }

    /**
     * test to make alarm is set to false when state != threshold
     *
     * @return void
     */
    public function test_alarm_is_set_to_false()
    {
        $this->model->state = 'Closed';

        $this->assertFalse($this->model->alarm());
    }
}
