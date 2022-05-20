<?php
declare(strict_types=1);
include_once('toolbox.php')
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Ex 7</title>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Ex 7</h1>

            <?php

            $array = array(
                "foo" => "",
                "bar" => "foo",
            );
            breadCrumb($array);
            ?>


        </div>
    </div>
</div>
</body>
</html>
