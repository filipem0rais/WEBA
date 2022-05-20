<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: index.html");
    die();
}
$age = null;

if (isset($_POST['name'], $_POST['dateNaissance'])) {
    $nom = htmlspecialchars($_POST['name']);
    $date = htmlspecialchars($_POST['dateNaissance']);

    if (!empty($nom) && !empty($date)) {
        if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $date)) {

            // check que la date ne soit pas plus grande que la date du jour
            $today = date("Y-m-d");
            if ($date <= $today) {
                $diff = date_diff(date_create($date), date_create($today));
                $age = $diff->y;
            }
        }
    }
}


?>

<html lang="fr">
<head>
    <meta charset="utf-8">
    <link href="bootstrap.min.css" rel="stylesheet">
    <title>TE 1 - Ex 7</title>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col">
            <h1>Votre âge</h1>

            <p>
                <?php
                if ($age !== null) {
                    echo "<p>" . $nom . ", votre âge est " . $age . "</p>";
                } else {
                    echo '<div class="alert alert-danger" role="alert">
                                Une erreur est survenue.
                          </div>';
                }
                ?>

                <br/>
                <a href="index.html">Recommencer</a>
            </p>
        </div>
    </div>
</div>
</body>
</html>