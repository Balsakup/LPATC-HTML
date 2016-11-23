<?php
$hellos = [
    'fr' => 'Bonjour',
    'en' => 'Hello',
    'de' => 'Guten tag'
];

$couleurs = [
    'rouge' => 'lightpink',
    'bleu'  => 'lightblue',
    'vert'  => 'lightgreen'
];

if (isset($_POST)) {
    if (empty($_POST['nom'])) {
        die('Vous devez préciser votre nom');
    }

    if (empty($_POST['langue'])) {
        die('Vous devez préciser vos langues');
    }

    if (empty($_POST['couleur'])) {
        die('Vous devez préciser votre couleur');
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body style="background-color: <?= $couleurs[$_POST['couleur']]; ?>">
        <?php
        foreach ($_POST['langue'] as $langue) {
            echo $hellos[$langue] . ' ' . $_POST['nom'] . '! ';
        }
        ?>
    </body>
</html>
