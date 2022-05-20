<?php
declare(strict_types=1);

include_once "Model/Database.php";
try {
    $db = new Database();
} catch (Exception $e) {
    include_once "Views/500.php";
    return;
}


if (isset($_GET["action"]) && !empty($_GET["action"]) && $_GET["action"] == "details") {
    if (isset($_GET["id"]) && !empty($_GET["id"]) && is_numeric($_GET["id"])) {
        $id = $_GET["id"];
        $new = $db->getDetails($id);

        if ($new == null) {
            include_once "Views/404.php";
        } else {
            $title = $new->title;
            include_once "Views/details.php";
        }

    } else {
        include_once "Views/404.php";
    }
} else if (isset($_GET["action"]) && !empty($_GET["action"]) && $_GET["action"] == "random") {
    $id = $db->getRandom();
    $new = $db->getDetails($id);

    if ($new == null) {
        include_once "Views/404.php";
    } else {
        $title = "Article aléatoire";
        include_once "Views/details.php";
    }
} else if (isset($_GET["action"]) && !empty($_GET["action"]) && $_GET["action"] == "about") {

    $title = "A propos";
    include_once "Views/about.php";

} else if (!isset($_GET["action"])) {
    $news = $db->getActualites();
    $title = 'Accueil';
    include_once "Views/list.php";
} else {
    include_once "Views/404.php";
}


