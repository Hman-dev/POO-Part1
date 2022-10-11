<?php
 require_once "Car.php";
 require_once 'Bicycle.php';

$vehicle = new Car("blue",5,"gasoil");

//  var_dump($vehicle)."<br><br>";

// Moving $vehicle
echo $vehicle->start().'<br>';
echo $vehicle->forward();
echo '<br> Vitesse de le voiture : ' . $vehicle-> getCurrentSpeed(). ' km/h' . '<br>';
echo $vehicle->brake();
echo '<br> Vitesse de la voiture: ' . $vehicle->getCurrentSpeed(). ' km/h' . '<br>';
echo $vehicle->brake().'<br><br>';


$bike = new Bicycle("pink");
// var_dump($bike);
// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(). ' km/h' . '<br>';
echo $bike->brake();
