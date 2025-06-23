<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Inscription</title>
</head>

<body>
    <main class="d-flex flex-column container">
        <h1>Page d'inscription</h1>
        <form class="d-flex flex-column" action="utilisateur.php" method="get">
            <div class="w-25 d-flex flex-column">
                <label for="name">Nom</label>
                <input class="w-100" name="name" id="name" type="text" autocomplete="off">
            </div>
            <div class="w-25 d-flex flex-column">
                <label for="mdp">Mot de passe</label>
                <input class="w-100" name="mdp" id="mdp" type="password">
            </div>
            <div class="w-25 d-flex flex-column">
                <label for="age">Age</label>
                <input class="w-100" name="age" id="age" type="number" min="0" max="130">
            </div>
            <div class="w-25 d-flex flex-column">
                <label for="email">Adresse E-mail</label>
                <input class="w-100" name="email" id="email" type="email" autocomplete="off">
            </div>
            <div class="w-25 d-flex flex-column">
                <label for="description">Pourquoi ?</label>
                <textarea class="w-100" name="desciption" id="description" cols="50" rows="5"></textarea>
            </div>
            <div class="w-25 d-flex flex-column">
                <label for="ville">Ville</label>
                <select name="ville" id="ville">
                    <option value="" selected disabled>--Choisissez votre ville --</option>
                    <option value="Marseille">Marseille</option>
                    <option value="Lyon">Lyon</option>
                    <option value="Paris">Paris</option>
                </select>
            </div>
            <div class="w-25 d-flex flex-column">
                <p>Genre</p>
                <label for="male">Homme</label>
                <input type="radio" id="male" name="genre">
                <label for="female">Femme</label>
                <input type="radio" id="female" name="genre">
            </div>
            <div>
                <input id="rgpd" name="rgpd" type="checkbox">
                <label class="fs-6" for="rgpd">Je reconais et prend conscience de me droit de rétractation bla bla bla</label>
            </div>
            <div>
                <button>
                    s'inscrire
                </button>
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>