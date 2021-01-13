<?php

$targetUpload = "C:\LearnPhP\Partie7 - Les formulaires\TP PhP\img/";

$galeriePhoto = scandir($targetUpload);
$compteurGalerie = count($galeriePhoto) -2;

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <title>Tp PHP</title>
</head>

<body>
    <div class="container-fluid text-center col-4" id="main">
        <form action="index.php" method="POST" enctype="multipart/form-data">

            <h1 id="title"></h1>

            <label for="fileToUpload" class="form-label display-4">Envoyer votre fichier :</label>
            <div class="d-flex justify-content-center">
                <img id="imgPreview" class="mb-4">
            </div>
            <input type="file" name="file" class="form-control shadow" id="fileToUpload">
            <p class="fst-italic mt-3">* Votre fichier doit être une image</p>
            <p class="fst-italic">* Votre fichier ne doit pas faire plus de 1Mo</p>
            <button type="submit" class="btn btn-primary m-2 shadow">UPLOAD</button><a class="btn btn-success shadow text-white" href="galerie.php">Galerie <?= $compteurGalerie ?></a>

            <?php
            if (isset($_FILES['file']['name']) && !empty($_FILES['file']['name'])) {
                $fileName = $_FILES['file']['name'];
                $fileType = $_FILES['file']['type'];
                $fileSize = $_FILES['file']['size'];
                $fileTmp = $_FILES['file']['tmp_name'];
                if (preg_match("/image/", mime_content_type($fileTmp))) {
                    if ($fileSize <= 1000000) {
                        $ext = pathinfo($_FILES['file']['name'])['extension'];
                        $imgName = uniqid() . '.' . $ext;
                        move_uploaded_file($fileTmp, $targetUpload . $imgName);
            ?>
                        <p class="text-center text-success mt-3 fw-bold">Le fichier : <b><?= $fileName ?></b> a bien été upload</p>
                    <?php
                    } else {
                    ?>
                        <p class="text-center text-danger mt-3 fw-bold">Votre fichier fait plus de 1Mo.</p>
                        <p class="text-center text-danger mt-3 fw-bold">Votre fichier n'a pas été upload</p>
                    <?php
                    }
                } else {
                    ?>
                    <p class="text-center text-danger mt-3 fw-bold">Désolé votre fichier n'est pas une image</p>
                    <p class="text-center text-danger mt-3 fw-bold">Votre fichier n'a pas été upload</p>
            <?php
                } 
            }

            ?>

        </form>

    </div>

    <script src="assets/script.js"></script>
</body>

</html>