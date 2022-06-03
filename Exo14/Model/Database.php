<?php
include_once "News.php";
class Database {

    private $db;

    public function __construct(bool $withErrors = false) {
        $this->db = new PDO("mysql:host=localhost;dbname=ex14;charset=UTF8", "root", "");
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
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, "News");
        if (!empty($result)){
            return $result[0];
        }else {
            return null;
        }

    }
    public function getRandom(){
        $stmt = $this->db->prepare("SELECT id FROM news");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_COLUMN);
        return $result[rand(0,count($result)-1)];
    }

    public function getComments($id){
        $stmt = $this->db->prepare("SELECT name, comment FROM comment WHERE comment.idxNews = :id");
        $stmt->execute(["id" => $id]);
        return $stmt->fetchAll(PDO::FETCH_CLASS, "News");
    }
}
?>
