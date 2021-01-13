<!-- ## Exercice 7
Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier. -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Partie 7 | Exercice 6</title>
</head>

<body>

    <?php
    if ((isset($_POST['prénom']) && !empty($_POST['prénom'])) && (isset($_POST['civility']) && !empty($_POST['civility'])) && (isset($_POST['nom']) && !empty($_POST['nom'] && isset($_FILES["fichier"]['name'])))) {

        if ((preg_match("/^[a-zA-Z]+$/", $_POST['prénom'])) && (preg_match("/^[a-zA-Z]+$/", $_POST['civility'])) && (preg_match("/^[a-zA-Z]+$/", $_POST['nom'] && $_FILES["fichier"]['tmp_name']))) {

            $civility = htmlspecialchars($_POST['civility']);
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prénom']);
            $fichier = $_FILES["fichier"]['name'];
    ?>

            <p class="text-center mt-4"><?php echo "Bonjour $civility $nom $prenom" ?></p>
            <p class="text-center mt-4">Fichier :<?= $fichier ?> </p>

        <?php } else { ?>

            <p class="text-center mt-4"><?php echo "Tous les champs n'ont pas été corectement rempli, veuillez recommencer !"; ?></p>

        <?php }
    } else { ?>

        <form action="index.php" method="POST" enctype="multipart/form-data">

            <div class="text-center container col-4 align-self-centered mt-5">

                <label for="civility">Civilité</label>
                <select class="form-select" name="civility" aria-label="Default select example">
                    <option value="Mr">Mr</option>
                    <option value="Mme">Mme</option>
                </select>

                <div class=" mb-3 mt-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" name="nom" class="form-control" id="nom">
                </div>
                <div class="mb-3 mt-3">
                    <label for="prénom" class="form-label">Prénom</label>
                    <input type="text" name="prénom" class="form-control" id="prénom">
                </div>
                <div>
                    <input type="file" name="fichier" />
                </div>
                <button type="submit" class="btn btn-primary mt-4">Envoyer</button>
            </div>


        </form>

    <?php } ?>


</body>

</html>