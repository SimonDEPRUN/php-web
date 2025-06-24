<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "./_dependencies.php" ?>
    <title>Inscription</title>
</head>

<body>
    <?php include "./_menu.php" ?>
    <h1 class=" container text-primary my-4">Page d'inscription</h1>
    <main class="container">
        <form action="utilisateur.php" method="post">
            <div class="mb-3 row d-flex">
                <label class="col-sm-2 col-form-label" for="name">Nom</label>
                <div class="col-sm-10">
                    <input class="form-control w-100" name="name" id="name" type="text" autofocus>
                </div>
            </div>
            <div class="mb-3 row d-flex">
                <label class="col-sm-2 col-form-label" for="mdp">Mot de passe</label>
                <div class="col-sm-10">
                    <input class="form-control w-100" name="mdp" id="mdp" type="password">
                </div>
            </div>
            <div class="mb-3 row d-flex">
                <label class="col-sm-2 col-form-label" for="age">Age</label>
                <div class="col-sm-10">
                    <input class="form-control w-100" name="age" id="age" type="number" min="0" max="130">
                </div>
            </div>
            <div class="mb-3 row d-flex">
                <label class="col-sm-2 col-form-label" for="email">Adresse E-mail</label>
                <div class="col-sm-10">
                    <input class="form-control w-100" name="email" id="email" type="email">
                </div>
            </div>
            <div class="mb-3 row d-flex">
                <label class="col-sm-2 col-form-label" for="description">Pourquoi ?</label>
                <textarea class="form-control w-100" name="description" id="description" cols="50" rows="5"></textarea>
            </div>
            <div class="mb-3 row d-flex">
                <label class="col-sm-2 col-form-label" for="ville">Ville</label>
                <div class="col-sm-10">
                    <select name="ville" id="ville" class="form-select">
                        <option value="" selected disabled>--Choisissez votre ville --</option>
                        <option value="Marseille">Marseille</option>
                        <option value="Lyon">Lyon</option>
                        <option value="Paris">Paris</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row ">
                <p>Genre :</p>
                <div class="form-check form-check-inline">
                    <label class="col-sm-2 col-form-label" for="male">Homme</label>
                    <input type="radio" id="male" name="genre" value="Homme">
                </div>
                <div class="form-check form-check-inline">
                    <label class="col-sm-2 col-form-label" for="female">Femme</label>
                    <input type="radio" id="female" name="genre" value="Femme">
                </div>
                <div class="form-check form-check-inline">
                    <label class="col-sm-2 col-form-label" for="autre">Autre</label>
                    <input type="radio" id="other" name="genre" value="Autre" checked>
                </div>
            </div>
            <div class="rgpd">
                <input id="rgpd" name="rgpd" type="checkbox" value="Je reconais et prend conscience de me droit de rétractation bla bla bla">
                <label class="fs-6" for="rgpd">Je reconais et prend conscience de me droit de rétractation bla bla bla</label>
            </div>
            <div>
                <button>s'inscrire</button>
            </div>
        </form>
    </main>
</body>

</html>