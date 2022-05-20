<?php
declare(strict_types=1);

include_once "Model/Database.php";

if (isset($_GET["actions"]) && !empty($_GET["actions"]) && $_GET["actions"] == "details") {
    if (isset($_GET["id"]) && !empty($_GET["id"]) && is_numeric($_GET["id"])) {
        $id = $_GET["id"];
        $db = new Database();
        $new = $db->getDetails($id);
    }


    include_once "Vues/details.php";

} else {

    $db = new Database();
    $news = $db->getActualites();
    include_once "Vues/list.php";
}


