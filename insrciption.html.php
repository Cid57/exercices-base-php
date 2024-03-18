<?php
$error = [];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['mdp'])) {
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
    }
    if (empty($prenom)) {
        $error['prenom'] = 'Veuillez entrez votre prénom ! ';
    }
    if (empty($nom)) {
        $error['nom'] = 'Veuillez entrez votre nom ! ';
    }
    if (empty($email)) {
        $error['email'] = 'Veuillez entrez votre email ! ';
    }
    if (empty($mdp)) {
        $error['mdp'] = "Veuillez entrez votre mot de passe ! ";
    }
}


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Formulaire</title>
</head>

<body>
    <div class="container w-50 mt-5">
        <div class="card">
            <h1 class="text-center">Formulaire d'inscription</h1>
            <div class="card-body">
                <form method="post">
                    <label class="form-label">Votre prénom</label>
                    <input class="form-control" type="text" name="prenom">
                    <?php if (isset($error['prenom'])) : ?>
                        <p><?= $error['prenom']  ?></p>
                    <?php endif  ?>

                    <label class="form-label">Votre nom</label>
                    <input class="form-control" type="text" name="nom">
                    <?php if (isset($error['nom'])) : ?>
                        <p><?= $error['nom']  ?></p>
                    <?php endif  ?>

                    <label class="form-label">Votre email</label>
                    <input class="form-control" type="email" name="email">

                    <?php if (isset($error['email'])) : ?>
                        <p><?= $error['email']  ?></p>
                    <?php endif  ?>

                    <label class="form-label">Votre mot de passe</label>
                    <input class="form-control" type="password" name="mdp">

                    <?php if (isset($error['mdp'])) : ?>
                        <p><?= $error['mdp']  ?></p>
                    <?php endif  ?>

                    <button class="btn btn-info mt-3" type="submit">S'inscrire</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>