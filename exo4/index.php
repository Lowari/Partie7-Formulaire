<!-- ## Exercice 4
Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises. -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Partie 7 | Exercice 4</title>
</head>

<body>

    <form action="user.php" method="POST">

        <div class="text-center col-4">
            <div class=" mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control" id="nom">
            </div>
            <div class="mb-3">
                <label for="prénom" class="form-label">Prénom</label>
                <input type="text" name="prénom" class="form-control" id="prénom">
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>

    </form>



</body>

</html>