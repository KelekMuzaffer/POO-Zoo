<?php
require 'personnage.php';

$merlin = new Personnage("Merlin");

$harry = new Personnage("Harry");

$merlin->attaque($harry);

if ($harry->mort()){
    echo "Harry est mort";
}
else {
    echo "Harry a survecu avec " . $harry->getVie() . " de vie.";
}


var_dump($merlin->getNom());
var_dump($harry);