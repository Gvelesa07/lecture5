<?php
abstract class Cars {
    abstract function PrintCarName();
}

class Ferrari extends Cars {
     function PrintCarName() {
      echo "ferrari or ";
     }
}

class bugatti extends Cars {
     function PrintCarName() {
      echo "bugatti";
    }
}

$car = new Ferrari();
$carr = new bugatti();

echo $car->PrintCarName();
echo $carr->PrintCarName();