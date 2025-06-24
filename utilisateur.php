<?php
// démarrer la session
// session_start();

$surname = $_REQUEST['name'];
$age = $_REQUEST['age'];
if ($_REQUEST['email'] != "") {
    $mail = $_REQUEST['email'];
};
if ($_REQUEST['description'] != "") {
    $description = "Vous nous avez dit : " . $_REQUEST['description'];
} else {
    $description = "Vous ne nous avez rien dit.";
};
$ville = $_REQUEST['ville'];
if ($_REQUEST['genre'] == 'Homme') {
    $genre = 'Sexe : Male';
} elseif ($_REQUEST['genre'] == 'Femme') {
    $genre = 'Sexe : Femelle';
} else {
    $genre = 'Sexe : Apache Hélicoptere';
};
if (isset($_REQUEST['genre']) and $_REQUEST['genre'] == 'Homme') {
    $civilite = 'M';
} elseif (isset($_REQUEST['genre']) and $_REQUEST['genre'] == 'Femme') {
    $civilite = 'Mr';
} else {
    $civilite = 'MMr';
};

setcookie("nom", $surname);
setcookie("description", $description);





?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion d'utilisateur</title>
</head>

<body>
    <main>
        <h1>Gestion d'utilisateur</h1>
        <p>Bonjour
            <?php
            echo "$civilite.$surname, $age ans, $genre, domicilié à $ville. $description"
            ?>
        </p>
    </main>
</body>

</html>