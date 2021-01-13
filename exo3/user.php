<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>

    <p><?php if (isset($_GET['nom'], $_GET['prénom'])) {
            echo $_GET['nom'] . ' ' . $_GET['prénom'];
        } else {
        }
        ?></p>

</body>

</html>