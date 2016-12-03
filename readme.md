# Home Security Project

You've decided to build a custom security system for your house.  You'd like to have a web page indicating the current status of the sensors.  Right now you're not concerned with whether or not the alarms were going off while you were away, you only want to check on their given state at a particular moment.

## Requirments
   * Support multiple sensor types
      - Temperature Sensor
      - Door Open/Closed Sensor
      - Glass Break Sensor
      - Smoke Detector
   * Sensor types should support readout of their state as well as an alarm indicating if the value has passed a pre-set threshold.
   * Ability to simulate a changing state of sensors for demonstration purposes, random input values each time the program is run is acceptable.
   * Report page should show the current status of all sensors as well as if the alarm is triggered for that sensor.
   
## Concrete Application
   * The application should implement the following sensors:
      - 2 Temperature Sensors
      - 2 Door Sensors
      - 3 Glass Break Sensors
      - 3 Smoke Detecors
      
## Sample output      
   


## SetUp
    * composer install
    * create .env file from .env.example
    * run php artisan key:generate
    * change database info in .env file
    * run php artisan migrate
    * run php artisan db:seed
    * run php artisan serve
