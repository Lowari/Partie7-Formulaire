<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>

<body>

<?php 

if (isset($_FILES['fichier']['name'])){
    var_dump(strrchr($_FILES['fichier']['name'], "."));
}


?>

    <form action="test.php" method="POST" enctype="multipart/form-data">
        <div>
            <input type="file" name="fichier" id="fichier" />
            <input type="submit" value="Envoyer le fichier">
        </div>
    </form>


</body>

</html>