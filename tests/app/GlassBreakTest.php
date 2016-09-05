<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class GlassBreakTest extends TestCase
{
    protected $model;

    public function setUp()
    {
        parent::setUp();

        $this->model = factory(App\GlassBreak::class)->make();
    }

    /**
     * test to make sure state is between 1/1000 and 1000
     *
     * @return void
     */
    public function test_state_is_set_to_between_numbers()
    {
        $this->model->setState();

        $this->assertTrue((1/1000 <= $this->model->state) && ( $this->model->state <= 1000000/1000));
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
     * test to make alarm is set to true when state >= threshold (556.00)
     *
     * @return void
     */
    public function test_alarm_is_set_to_true()
    {
        $this->model->state = 600.00;

        $this->assertTrue($this->model->alarm());
    }

    /**
     * test to make alarm is set to false when state <= threshold (556.00)
     *
     * @return void
     */
    public function test_alarm_is_set_to_false()
    {
        $this->model->state = 100.00;

        $this->assertFalse($this->model->alarm());
    }
}
