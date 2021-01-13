<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <title>galerie</title>
</head>

<body>

    <div class="container">

        <div class="text-center mt-3">
            <a class="btn btn-secondary shadow" href="index.php">Retour</a>
        </div>

        <div class="row">
            <?php

            $targetUpload = "C:\LearnPhP\Partie7 - Les formulaires\TP PhP\img/";
            $galeriePhoto = scandir($targetUpload);
            $startGalerie = array_slice($galeriePhoto, 2);

            if (empty($startGalerie)) { ?>
                <p class="text-center mt-4 fst-italic" id="emptyGalerie">Votre galerie est vide...</p>
            <?php
            }

            foreach ($startGalerie as $value) { ?>
                <div class="col-4">
                    <div class="m-4 text-center">
                        <img class="w-100" src=<?= "img/$value" ?>>
                    </div>
                </div>
            <?php
            }

            ?>
        </div>


    </div>

</body>

</html>