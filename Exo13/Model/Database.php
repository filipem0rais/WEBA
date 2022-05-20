<?php
include_once "News.php";
class Database {

    private $db;

    public function __construct(bool $withErrors = false) {
        $this->db = new PDO("mysql:host=localhost;dbname=ex13;charset=UTF8", "root", "");

        if ($withErrors) {
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    }


    public function getActualites(){
        $stmt = $this->db->prepare("SELECT n.id, n.title, c.name as category, n.publishedAt, n.summary AS lead, n.content FROM news n, category c WHERE n.idxCategory = c.id ORDER BY PublishedAt DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS,"News");
    }

    public function getDetails($id){
        $stmt = $this->db->prepare("SELECT n.id, n.title, c.name as category, n.publishedAt, n.summary AS lead, n.content FROM news n, category c WHERE n.idxCategory = c.id AND n.id = :id");
        $stmt->execute(["id" => $id]);
        return $stmt->fetchAll(PDO::FETCH_CLASS, "News")[0];
    }
}
?>
