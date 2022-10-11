<?php
 require_once "Car.php";
 require_once 'Bicycle.php';

$audi = new Car("blue",5,"gasoil");

//  var_dump($audi)."<br><br>";

// Moving $audi
echo $audi->start().'<br>';
echo $audi->forward();
echo '<br> Vitesse de le voiture : ' . $audi-> getCurrentSpeed(). ' km/h' . '<br>';
echo $audi->brake();
echo '<br> Vitesse de la voiture: ' . $audi->getCurrentSpeed(). ' km/h' . '<br>';
echo $audi->brake().'<br><br>';


$bike = new Bicycle("pink");
// var_dump($bike);
// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(). ' km/h' . '<br>';
echo $bike->brake();
