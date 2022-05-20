<?php

class categorie
{
    private int $id;
    private string $nom;


    /**
     * @param string $nom
     */
    public function __construct(int $id,string $nom)
    {
        $this->id = $id;
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }



}