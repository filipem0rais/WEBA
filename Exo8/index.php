<?php
require_once("Modele.php");

$maison = new Lieu(1, "Maison", new coordonnees("70.52524230291801", "16.616427082284293"), 2, new adresse("Avenue du Galicien", 1008, "Prilly", 4));
$ecole = new Lieu(2, "Ecole", new coordonnees("46.52524230291801", "6.616427082284293"), 1, new adresse("Avenue de Recordon", 1004, "Lausanne", 1));

//var_dump($maison);

//echo $maison->getAdresseComplete();

//echo $maison->getDistance(46.52646157630701, 6.611779797229535); // devrait être environ 378m

$modele = new Modele([$maison, $ecole], [new categorie(1, "ecole"), new categorie(2, "appartements")]);

//$result = $modele->getMatchCategorie(2);

//$result = $modele->getClosest("49.52524230291801", "8.616427082284293");

//var_dump($result);