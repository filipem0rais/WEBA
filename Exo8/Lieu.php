<?php
require_once("Coordonnees.php");
require_once("Categorie.php");
require_once("Adresse.php");


class Lieu
{
    private int $identifiant;
    private string $nom;
    private coordonnees $coordonnees;
    private int $idCategorie;
    private adresse $adresse;

    /**
     * @param int $identifiant
     * @param string $nom
     * @param coordonnees $coordonnees
     * @param categorie $categorie
     * @param adresse $adresse
     */
    public function __construct(int $identifiant, string $nom, coordonnees $coordonnees, int $categorie, adresse $adresse)
    {
        $this->identifiant = $identifiant;
        $this->nom = $nom;
        $this->coordonnees = $coordonnees;
        $this->idCategorie = $categorie;
        $this->adresse = $adresse;
    }

    /**
     * Renvoie l'adresse complète
     * @return string
     */
    public function getAdresseComplete(): string
    {
        return $this->adresse->getRue() . " " . $this->adresse->getNumero() . "<br>" . $this->adresse->getNPA() . " " . $this->adresse->getVille();
    }

    /**
     * Renvoie la distance entre les coordonnées du lieu et celles passées en param
     * @param string $latitude
     * @param string $longitude
     * @return float distance
     */
    public function getDistance(string $latitude, string $longitude): float
    {
        $circonfTerre = 6378137;   // Terre = sphère de 6378km de rayon
        $longitude1 = deg2rad($this->coordonnees->getLongitude());
        $latitude1 = deg2rad($this->coordonnees->getLatitude());
        $longitude2 = deg2rad($longitude);
        $latitude2 = deg2rad($latitude);
        $differenceLongitude = ($longitude2 - $longitude1) / 2;
        $differenceLatitude = ($latitude2 - $latitude1) / 2;
        $a = (sin($differenceLatitude) * sin($differenceLatitude)) + cos($latitude1) * cos($latitude2) * (sin($differenceLongitude) * sin(
                    $differenceLongitude));
        $d = 2 * atan2(sqrt($a), sqrt(1 - $a));
        return ($circonfTerre * $d);
    }

    /**
     * @return categorie|int
     */
    public function getIdCategorie(): categorie|int
    {
        return $this->idCategorie;
    }




}