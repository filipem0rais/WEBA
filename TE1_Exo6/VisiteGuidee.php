<?php

include_once "Coordonnees.php";

class VisiteGuidee
{
    private string $nom;
    private float $longueur; // en mètres
    private float $duree;    // en minutes
    private array|Coordonnees $trace;    // tableau de Coordonnees

    /**
     * @param string $nom
     * @param float $longueur
     * @param float $duree
     * @param array $trace
     */
    public function __construct(string $nom, float $longueur, float $duree, array|Coordonnees $trace)
    {
        $this->nom = $nom;
        $this->longueur = $longueur;
        $this->duree = $duree;
        $this->trace = $trace;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @return float
     */
    public function getLongueur(): float
    {
        return $this->longueur;
    }

    /**
     * @return float
     */
    public function getDuree(): float
    {
        return $this->duree;
    }


    /**
     * Renvoie le nombre de coordonnées de la visite
     * @return int
     */
    public function getNbrCoord() : int{
        return count($this->trace);
    }

    /**
     * Ajoute un nombre de coordonnees fictives dans la visite guidee
     * @param int $number
     * @return void
     */
    public function addNbrCoord(int $number){
        for ($i = 0; $i < $number; $i++){
            array_push($this->trace, new Coordonnees(0.0, 0.0));
        }
    }

}