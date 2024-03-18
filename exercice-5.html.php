<?php
$stagiaires = [
    [
        "firstname" => "John",
        "lastname" => "Doe",
        "age" => 20
    ],
    [
        "firstname" => "Alice",
        "lastname" => "Smith",
        "age" => 22
    ],
    [
        "firstname" => "Bob",
        "lastname" => "Johnson",
        "age" => 19
    ],
    [
        "firstname" => "Emma",
        "lastname" => "Brown",
        "age" => 25
    ],
    [
        "firstname" => "James",
        "lastname" => "Williams",
        "age" => 18
    ],
    [
        "firstname" => "Olivia",
        "lastname" => "Jones",
        "age" => 30
    ],
    [
        "firstname" => "Michael",

        "lastname" => "Davis",
        "age" => 24
    ],
    [
        "firstname" => "Sophia",
        "lastname" => "Miller",
        "age" => 27
    ],
    [
        "firstname" => "Matthew",
        "lastname" => "Wilson",
        "age" => 21
    ],
    [
        "firstname" => "Emily",
        "lastname" => "Moore",
        "age" => 28
    ],
    [
        "firstname" => "Daniel",
        "lastname" => "Taylor",
        "age" => 17
    ],
    [
        "firstname" => "Charlotte",
        "lastname" => "Anderson",
        "age" => 23
    ],
    [
        "firstname" => "William",
        "lastname" => "Thomas",
        "age" => 26
    ],
    [
        "firstname" => "Amelia",
        "lastname" => "Jackson",
        "age" => 29
    ],
    [
        "firstname" => "Ethan",
        "lastname" => "White",
        "age" => 16
    ],
    [
        "firstname" => "Mia",
        "lastname" => "Harris",
        "age" => 20
    ],
    [
        "firstname" => "Alexander",
        "lastname" => "Martin",
        "age" => 22
    ],
    [
        "firstname" => "Abigail",
        "lastname" => "Thompson",
        "age" => 30

    ],
    [
        "firstname" => "Ryan",
        "lastname" => "Garcia",
        "age" => 19
    ],
    [
        "firstname" => "Ava",
        "lastname" => "Young",
        "age" => 25
    ],
    [
        "firstname" => "Liam",
        "lastname" => "Scott",
        "age" => 18
    ]
];
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .badge-success {
            background-color: #28a745;

        }

        .badge-danger {
            background-color: #dc3545;

        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center mb-5">Listes des stagiaires</h1>
        <table class="table table-striped">
            <thead>
                <tr class="fs-3">
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Âge</th>
                    <th>Statut</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stagiaires as $stagiaire) : ?>
                    <tr>
                        <td><?= $stagiaire['firstname'] ?></td>
                        <td><?= $stagiaire['lastname'] ?></td>
                        <td><?= $stagiaire['age'] ?></td>
                        <td>
                            <?php if ($stagiaire['age'] > 18) : ?>
                                <span class="badge badge-success">Majeur</span>
                            <?php else : ?>
                                <span class="badge badge-danger">Mineur</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>