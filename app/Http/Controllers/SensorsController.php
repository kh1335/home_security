<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Sensor;

class SensorsController extends Controller
{
    /**
     * gets a list of all sensors
     *
     * @return view
     */
    public function index()
    {
        // get all sensors
        $sensors = Sensor::all();

        return view('sensors.index')->with('sensors', $sensors);
    }
}
