<?php


$nombres = [1, 0, 4, 9, 23, 239, 28, 96, 33, 76, 89];
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>Nombre</th>
                <th>Status</th>
            </tr>
            <?php foreach ($nombres as $nombre) : ?>
                <tr>
                    <td><?= $nombre ?></td>
                    <td>
                        <?php if ($nombre  % 2 == 0) : ?>
                            <span class="bg-danger">Nombre pair</span>
                        <?php elseif ($nombre % 2 == 1) : ?>
                            <span class="text-primary">Nombre impair</span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>