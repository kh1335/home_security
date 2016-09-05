<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SensorTest extends TestCase
{
    protected $model;

    public function setUp()
    {
        parent::setUp();

        $this->model = factory(App\Sensor::class)->make();
    }

    /**
     * test if sensor state is set
     *
     * @return void
     */
    public function test_set_state()
    {
        $this->model->setState();

        $this->assertTrue(isset($this->model->sensor->state));
    }

    /**
     * tests if sensor alarm
     *
     * @return void
     */
    public function test_alarm()
    {
        $this->model->setState();

        $this->assertEquals($this->model->alarm(), $this->model->sensor->alarm());
    }
}
