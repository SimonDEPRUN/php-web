<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./dependencies.php" ?>
    <title>Home page</title>
</head>

<body>
    <?php include "./_menu.php" ?>
    <main>
        <h1 class="text-primary">Page d'accueil</h1>
        <p>Bienvenue dans notre application <strong>Web php</strong></p>
        <a href="utilisateur.php?name=Mitroglou&ville=Marseille&age=55">
            Connaître un peu plus sur la légende
        </a>
        <br>
        <a href="inscription.php">Venez vous inscrire</a>
    </main>
</body>

</html>