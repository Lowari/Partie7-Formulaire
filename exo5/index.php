<!-- ## Exercice 5
Créer un formulaire sur la page **index.php** avec :  
- Une liste déroulante pour la civilité (Mr ou Mme)
- Un champ texte pour le nom
- Un champ texte pour le prénom  

Ce formulaire doit rediriger vers la page **index.php**.  
Vous avez le choix de la méthode. -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Partie 7 | Exercice 5</title>
</head>

<body>

    <form action="index.php" method="GET">

        <div class="text-center col-4">

            <label for="civility">Civilité</label>
            <select class="form-select" aria-label="Default select example">
                <option selected></option>
                <option value="1">Mr</option>
                <option value="2">Mme</option>
            </select>

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