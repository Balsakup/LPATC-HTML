<?php
$nom = 'Quentin';
$age = 21;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Page de bienvenue de <?= $nom; ?></h1>
        <p>Salut, je m'appelle <?= $nom; ?> et j'ai <?= $age; ?> an(s)</p>
    </body>
</html>
