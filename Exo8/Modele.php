<?php
require_once("Lieu.php");

class Modele
{
    private Lieu|array $tabLieu;
    private Categorie|array $tabCategorie;

    /**
     * @param array|Lieu $tabLieu
     * @param array|Categorie $tabCategorie
     */
    public function __construct(array|Lieu $tabLieu, Categorie|array $tabCategorie)
    {
        $this->tabLieu = $tabLieu;
        $this->tabCategorie = $tabCategorie;
    }

    /**
     *
     * @param categorie $cat
     * @return array|Lieu
     */
    public function getMatchCategorie(int $idCat): array|Lieu
    {
        $result = [];
        foreach ($this->tabLieu as $item) {
            if ($item->getIdCategorie() == $idCat) {
                $result[] = $item;
            }
        }
        return $result;
    }

    public function getClosest(string $longitude, string $latitude): Lieu
    {
        $lieu = "";
        foreach ($this->tabLieu as $item) {
            if ($lieu == "") {
                $lieu = $item;
            } else {
                if ($item->getDistance($latitude, $longitude) < $lieu->getDistance($latitude, $longitude)) {
                    $lieu = $item;
                }
            }
        }
        return $lieu;

    }
}