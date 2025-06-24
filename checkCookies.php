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
        <p>Nom : <?php echo $_COOKIE['nom'] ?></p>
        <p>Description : <?= $_COOKIE['description'] ?></p>
    </main>
</body>

</html>