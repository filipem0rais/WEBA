<?php

class adresse
{
    private string $rue;
    private int $numero;
    private int $NPA;
    private string $ville;

    /**
     * @param string $rue
     * @param int $numero
     * @param int $NPA
     * @param string $ville
     */
    public function __construct(string $rue, int $NPA, string $ville, int $numero = 0)
    {
        $this->rue = $rue;
        $this->numero = $numero;
        $this->NPA = $NPA;
        $this->ville = $ville;
    }

    /**
     * @return string
     */
    public function getRue(): string
    {
        return $this->rue;
    }

    /**
     * @return int
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * @return int
     */
    public function getNPA(): int
    {
        return $this->NPA;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }



}