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

    /* Basic Exercise - Part I */

    class Vehicle
    {
        public $vehicleName = 'Default Vehicle Name';
        public $vehicleModel = 'Default Vehicle Model';
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

    /* Basic Exercise - Part II */

    class Ship extends Vehicle {
        public $vehicleWeight;
        public $vehicleWaterdisplacement;

        function __construct($name, $model, $weight, $disp){
            $this->vehicleName = $name;
            $this->vehicleModel = $model;
            $this->vehicleWeight = $weight;
            $this->vehicleWaterdisplacement = $disp;
        }

        public static function shipIntro()
        {
            echo "<h2>These are the results for the class 'Ship'</h2>";
        }

        public function returnWeightAndWaterdisplacement()
        {
            $weightAndDisp = $this->vehicleName .' (Name) & '. $this->vehicleModel .' (Model) & '. $this->vehicleWeight .' (weight) & '. $this->vehicleWaterdisplacement .' (displacement)';
            return $weightAndDisp;
        }

    }

    $myFirstShip = new Ship('RMS Titanic', 'Ocean Liner', '46,328 grt', '52,310 tons');
    $mySecondShip = new Ship('USS Nimitz', 'Aircraft Carrier', 'A whole lot!', '100,020 long tons');
    $myThirdShip = new Ship('SS Great Eastern', 'Steamboat', '18,915 grt', '32,160 tons');

    $firstShipResult = $myFirstShip->returnWeightAndWaterdisplacement();
    $secondShipResult = $mySecondShip->returnWeightAndWaterdisplacement();
    $thirdShipResult = $myThirdShip->returnWeightAndWaterdisplacement();

    Ship::shipIntro();
    print "<p>The name, model of the first ship:<br><strong>$firstShipResult</strong></p>" ;
    print "<p>The name, model of the second ship:<br><strong>$secondShipResult</strong></p>";
    print "<p>The name, model, weight and water displacement of the third ship:<br><strong>$thirdShipResult</strong></p>";

?>

</body>
</html>