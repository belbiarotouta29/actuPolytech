<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ActuPolytech</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
            <h1>ACTUALITÉS POLYTECHNICIENNES</h1>
            <div class="topnav">
                <a class="active" href="?">Accueil</a>
                <a href="?categorie=1">Sport</a>
                <a href="?categorie=2">Santé</a>
                <a href="?categorie=3">Education</a>
                <a href="?categorie=4">Politique</a>
                <a href=""></a>
            </div>
    </header>
    <section>
        <h2 class="hey">Les dernières actualités</h2>
        <?php require_once './controller/articleController.php'; ?>
    </section><br>
    <footer>Copyright © Belbiaro TOUTA</footer>
</body>
</html>
