<?php
$bmw = [
    'model' =>'X5',
    'speed' => 120,
    'doors'=> 5,
    'year'=> 2015
];

$toyota = [
'model' =>'Land Cruiser Prado',
'speed' => 100,
'doors'=> 5,
'year'=> 2016
];

$opel = [
'model' =>'Vectra',
'speed' => 100,
'doors'=> 3,
'year'=> 2014
];

 $cars = ['bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel];
 foreach ($cars as $name => $car) {
     echo "CAR $name<br>";
     echo "{$car['model']} {$car['speed']} {$car['doors']} {$car['year']}<br>" ;
 }