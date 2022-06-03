<?php
include_once "Model/Database.php";

class Controller
{
    private $db;

    private function loadDB()
    {
        if ($this->db == null) {
            try {
                $this->db = new Database();
            } catch (Exception $e) {
                include_once "Views/500.php";
                return;
            }
        }
    }

    public function listAction(): bool
    {
        $this->loadDB();
        $news = $this->db->getActualites();
        $title = 'Accueil';
        include_once "Views/list.php";
        return true;
    }

    public function newDetailAction(): bool
    {
        if (isset($_GET["id"]) && !empty($_GET["id"]) && is_numeric($_GET["id"])) {
            $id = $_GET["id"];
            $this->loadDB();
            $new = $this->db->getDetails($id);

            if ($new != null) {
                include_once "Views/details.php";
                return true;
            }
        }
        return false;
    }

    public function aboutAction(): bool {
        $title = "A propos";
        include_once "Views/about.php";
        return true;
    }

    public function randomNewAction(): bool {
        $this->loadDB();
        $id = $this->db->getRandom();
        $new = $this->db->getDetails($id);

        if ($new != null){
            $title = "Article aléatoire";
            include_once "Views/details.php";
            return true;
        }
        return false;
    }
}

