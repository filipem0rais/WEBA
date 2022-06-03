<?php
declare(strict_types=1);

include_once "Controllers/Controller.php";

$action = null;

if (isset($_GET['action']) && !empty($_GET['action'])){
    $action = $_GET['action'];
}

try {
    $controller = new Controller();

    $viewLoaded = false;

    if ($action == null){
        $viewLoaded = $controller->listAction();
    }
    else if ($action == 'details'){
        $viewLoaded = $controller->newDetailAction();
    }
    else if ($action == 'random'){
        $viewLoaded = $controller->randomNewAction();
    }
    else if ($action == 'about'){
        $viewLoaded = $controller->aboutAction();
    }

    if (!$viewLoaded){
        require_once('Views/404.php');
    }

} catch (Exception $e){
    die($e);
    require_once('Views/500.php');
}


