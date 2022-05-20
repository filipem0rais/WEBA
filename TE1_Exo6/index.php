<?php
declare(strict_types=1);
include_once "VisiteGuidee.php";


$visite1 = new VisiteGuidee("Musée de Lausanne", 30, 60, []);
$visite1->addNbrCoord(10);

$visite2 = new VisiteGuidee("Promenade au bord du Lac", 10, 120, []);
$visite2->addNbrCoord(45);

$visite3 = new VisiteGuidee("Balade à la Riponne", 2, 2, []);
$visite3->addNbrCoord(170);

$array = [$visite1, $visite2, $visite3];

foreach ($array as $visiteGuidee) {
    echo "Nom : " . $visiteGuidee->getNom() . " : " . $visiteGuidee->getLongueur() . " km, " . $visiteGuidee->getDuree() . " minutes, " . $visiteGuidee->getNbrCoord() . " points GPS <br/>";
}