<?php
require_once './model/Database.php';

class Article {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getArticles($categorie = 0) {
        $conn = $this->db->connect();
        $sql = "SELECT a.id, a.titre, a.contenu, a.dateCreation, a.dateModification, c.libelle as categorie
                FROM Article a
                JOIN Categorie c ON a.categorie = c.id";

        if ($categorie > 0) {
            $sql .= " WHERE a.categorie = $categorie";
        }

        $result = $conn->query($sql);
        $articles = [];

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $articles[] = $row;
            }
        }

        $conn->close();
        return $articles;
    }
}
?>
