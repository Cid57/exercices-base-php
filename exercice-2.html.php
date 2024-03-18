<?php

if (!empty($_GET['prenom'])) {
    $prenom = $_GET['prenom'];
}

if (!empty($_GET['nom'])) {
    $nom = $_GET['nom'];
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="GET">
        <label>Prenom</label>
        <input type="text" name="prenom" placeholder="Votre prénom">
        <label>Nom</label>
        <input type="text" name="nom" placeholder="Votre nom">
        <button type="submit">Envoyer</button>
        <?php if (isset($prenom)) : ?>
            <p>Hello <?= $prenom . " " . $nom . " !" ?></p>
        <?php endif; ?>
    </form>
</body>

</html>