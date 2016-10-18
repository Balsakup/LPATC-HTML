<?php
include 'parties/head.frg.html';

if (isset($_GET['page']) && !empty($_GET['page'])) {
    if (file_exists('pages/' . $_GET['page'] . '.php')) {
        include 'pages/' . $_GET['page'] . '.php';

        if (!file_exists("images/$image")) {
            echo 'L\'image n\'a pas été trouvée';
        }

        if (!file_exists("fragments/$texte")) {
            echo 'Le texte n\'a pas été trouvé';
        } else {
            $texte = file_get_contents("fragments/$texte");
        }

        include 'parties/contenu.frg.html';
    } else {
        die('404: Page introuvable !');
    }
} else {
    echo '<p>Bienvenue sur le site des insectes</p>';
}

include 'parties/foot.frg.html';
