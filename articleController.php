<?php
require_once './model/Article.php';
require_once './view/articleView.php';

$article = new Article();
$categorie = isset($_GET['categorie']) ? (int)$_GET['categorie'] : 0;
$articles = $article->getArticles($categorie);
displayArticles($articles);
?>
