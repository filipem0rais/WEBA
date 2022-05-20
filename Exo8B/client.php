<?php

class client
{
    private string $nom;

    /**
     * @param string $nom
     */
    public function __construct(string $nom)
    {
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