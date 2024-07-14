<?php
function displayArticles($articles) {
    if (count($articles) > 0) {
        foreach ($articles as $article) {
            echo "<article>";
            echo "<h2>" . htmlspecialchars($article['titre']) . "</h2>";
            echo "<p>" . htmlspecialchars($article['contenu']) . "</p>";
            echo "<p><strong>Catégorie: </strong>" . htmlspecialchars($article['categorie']) . "</p>";
            echo "<small>Créé le: " . $article['dateCreation'] . " | Modifié le: " . $article['dateModification'] . "</small>";
            echo "</article>";
            echo "<br>";
        }
    } else {
        echo "0 results";
    }
}
?>
