<?php
declare(strict_types=1);

include_once "panier.php";

$produit1 = new produit("Radio Sony", 59.95);
$produit2 = new produit("Ventilateur Dyson", 119.95);

$client = new client("Luca");

$panier = new panier([$produit1, $produit2], $client, 10);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exo8B</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="row">
<div class="col-3">

<?php
$panier->displayPanier();
?>
</div>
</div>
</body>
</html>

