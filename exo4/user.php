<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>

    <p><?php if (isset($_POST['nom'], $_POST['prénom'])) {
            echo $_POST['nom'] . ' ' . $_POST['prénom'];
        } else {
        }
        ?></p>

</body>

</html>