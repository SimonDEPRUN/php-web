<?php
session_start();


if ($_SERVER['HTTP_REFERER'] == "http://localhost/php-web/checkCookies.php") {
    session_unset();
    session_destroy();
}

$nom_c = "";
$nom_s = "";
$description_c = "";
$description_s = "";

if (isset($_COOKIE['nom'])) {
    $nom_c = $_COOKIE['nom'];
}
if (isset($_SESSION['nom'])) {
    $nom_s = $_SESSION['nom'];
}
if (isset($_COOKIE['description'])) {
    $description_c = $_COOKIE['description'];
}
if (isset($_SESSION['description'])) {
    $description_s = $_SESSION['description'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body>
    <main>
        <h1>Cookies</h1>
        <p>Nom : <?php echo $nom_c ?></p>
        <p>Description : <?= $description_c ?></p>
        <h2>Sessions</h2>
        <p>Nom : <?php echo $nom_s ?></p>
        <p>Description : <?= $description_s ?></p>

        <a href="#">vider la session</a>
        <br>
        <a href="utilisateur.php">retour</a>
    </main>
</body>

</html>