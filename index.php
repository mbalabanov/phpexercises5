<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ex. 5</title>
</head>
<body>
<h1>Vehicles</h1>
<?php

    class Vehicle
    {
        public $vehicleName;
        public $vehicleModel;
        public $vehicleMakeYear = '1982';
        public $vehicleColor = 'Black';
        public $vehicleFuelType = 'Nuclear';

        function __construct($name, $model){
            $this->vehicleName = $name;
            $this->vehicleModel = $model;
        }

        public static function introduction()
        {
            echo '<h2>These are the results of the OOP exercise.<br>They are based on the Knight Rider TV show from the 1980s.</h2>';
        }

        public function returnNameAndModel()
        {
            $nameAndModel = $this->vehicleName .' & '. $this->vehicleModel;
            return $nameAndModel;
        }

    };

    $myFirstVehicle = new Vehicle('KITT', 'Knight Industries Two Thousand');
    $mySecondVehicle = new Vehicle('KARR', 'Knight Automated Roving Robot');
    $myThirdVehicle = new Vehicle('Goliath', 'Peterbilt 352 Pacemaker');

    $firstResult = $myFirstVehicle->returnNameAndModel();
    $secondResult = $mySecondVehicle->returnNameAndModel();
    $thirdResult = $myThirdVehicle->returnNameAndModel();

    Vehicle::introduction();
    print "<p>The name and model of the first vehicle:<br><strong>$firstResult</strong></p>" ;
    print "<p>The name and model of the second vehicle:<br><strong>$secondResult</strong></p>";
    print "<p>The name and model of the third vehicle:<br><strong>$thirdResult</strong></p>";


?>

</body>
</html>