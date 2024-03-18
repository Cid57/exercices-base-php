<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <title>Table de multiplication</title>
</head>

<body>
    <div class="container w-50">
        <h1>Table de multiplication</h1>
        <form method="GET">
            <div class="form-group">
                <label class="fs-3 mb-2" for="table">Entrez un nombre :</label>
                <input type="number" class="form-control w-25" name="table" id="table" required>
                <button type="submit" class="btn btn-primary mt-3 mb-5">Générer</button>
            </div>
        </form>

        <?php

        if (!empty($_GET['table']) && is_numeric($_GET['table'])) {
            $table = $_GET['table'];


            if ($table >= 0) {

                echo "<h2 >Table de multiplication de $table :</h2>";
                echo "<table class='table'>";
                echo "<thead><tr><th>$table x</th><th>Résultat :</th></tr></thead><tbody>";


                for ($i = 1; $i <= 10; $i++) {
                    $resultat = $table * $i;
                    echo "<tr><td>$table x $i</td><td> $resultat </td></tr>";
                }

                echo "</tbody></table>";
            }
        }
        ?>
    </div>

</body>

</html>