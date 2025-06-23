<?php
$surname = $_GET['name'];
$age = $_GET['age'];
$mail = $_GET['email'];
$description = $_GET['description'];
$ville = $_GET['ville'];
if ($_GET['genre'] == 'Homme') {
    $genre = 'Sexe : Male';
} elseif ($_GET['genre'] == 'Femme') {
    $genre = 'Sexe : Femelle';
} else {
    $genre = 'Sexe : Apache Hélicoptere';
};
if ($_GET['genre'] == 'Homme') {
    $civilite = 'M';
} elseif ($_GET['genre'] == 'Femme') {
    $civilite = 'Mr';
} else {
    $civilite = 'MMr';
};


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
            echo "$civilite.$surname, $age ans, $genre, domicilié à $ville. Vous nous avez dit : $description"
            ?>
        </p>
    </main>
</body>

</html>