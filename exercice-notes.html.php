<?php

$notes = [5, 6, 10, 15, 2, 20, 18, 16, 17, 11];

$somme = 0;
foreach ($notes as $note) {
    $somme += $note;
}
$moyenne = $somme / count($notes);
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Calcul des notes et moyenne</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center text-decoration-underline mb-5">LISTES DES NOTES</h1>
        <table class="table table-striped">
            <thead>
                <tr class="fs-3 text-decoration-underline">
                    <th>Notes : </th>
                    <th>Status : </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($notes as $note) : ?>
                    <tr>
                        <td><?= $note ?></td>
                        <td>
                            <?php if ($note <= 10) : ?>
                                <span class="text-danger">Inférieur à 10</span>
                            <?php elseif ($note >= 15) : ?>
                                <span class="text-primary">Supérieur à 15</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="d-flex text-center mb-5">
            <div class="container">
                <h2> Voici la sommes des notes :</h2>
                <p> La sommes de tous les nombres est de : </p>
                <span class="text-danger fs-4"><?= $somme ?></span>
            </div>
            <div class="container">
                <h2>Voici la moyenne des notes :</h2>
                <p> La moyenne des notes est de : </p>
                <span class="text-danger fs-4"><?= $moyenne ?></span>
            </div>
        </div>

    </div>
</body>

</html>