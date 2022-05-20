<?php
include_once "client.php";
include_once "produit.php";

class panier
{
    private array $produits;
    private client $client;
    private float $discount;

    /**
     * @param array $produits
     * @param client $client
     * @param float $discount
     */
    public function __construct(array $produits, client $client, float $discount = 0)
    {
        $this->produits = $produits;
        $this->client = $client;
        $this->discount = $discount;
    }

    public function getTotalPrice(): float
    {
        $total = 0;
        foreach ($this->produits as $item) {
            $total += $item->getPrix();
        }

        return $total / 100 * (100 - $this->discount);
    }

    public function displayPanier()
    {
        echo "<h1>Shopping cart of " . $this->client->getNom() . "</h1> <br>";
        echo '<table class="table">';
        echo '<tbody>';

        foreach ($this->produits as $item) {
            echo "<tr><td>" . $item->getNom() . "</td><td>" . $item->getPrix() . " CHF</td></tr>";
        }
        if ($this->discount > 0) {
            echo "<tr><td class='fst-italic'>Discount</td><td class='fst-italic'>-" . $this->discount . " %</td></tr>";
        }
        echo "<tr><td>Total</td><td class='fw-bolder'>" . $this->getTotalPrice() . " CHF</td></tr>";
        echo '</tbody>';
        echo '</table>';
    }
}