<?php

class produit
{
    private string $nom;
    private float $prix;

    /**
     * @param string $nom
     * @param float $prix
     */
    public function __construct(string $nom, float $prix)
    {
        $this->nom = $nom;
        $this->prix = $prix;
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
    public function getPrix(): float
    {
        return $this->prix;
    }


}