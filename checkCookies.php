<?php
session_start();
$nom = "";
$description = "";

if (isset($_COOKIE['nom'])) {
    $nom = $_COOKIE['nom'];
}
if (isset($_SESSION['description'])) {
    $description = $_SESSION['description'];
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
        <p>Nom : <?php echo $nom ?></p>
        <p>Description : <?= $description ?></p>
        <h2>Sessions</h2>
        <p>Nom : <?php echo $nom ?></p>
        <p>Description : <?= $description ?></p>

        <a href="vider_session.php">vider la session</a>

    </main>
</body>

</html>