<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8" />
	<title><?php echo $nom; ?> — Les nations du Royaume-Uni</title>
<style>
body { max-width:60em; margin:auto; }
.menu ul { padding:0; margin:0; text-align:center; }
.menu li { display:inline-block; margin:0 1em; list-style:none; }
.histoire { float:left; width:70%; }
.details { float:left; width:30%; box-sizing:border-box;
					 border:1px solid brown; font-size:small; }
.pied { clear:both; border-top:1px solid grey; font-size:small; padding:1em; }
</style>
</head>
<body>

<nav class="menu">
	<ul>
		<li><a href="angleterre.php">Angleterre</a></li>
		<li><a href="ecosse.php">Ecosse</a></li>
		<li><a href="irlande.php">Irlande du Nord</a></li>
		<li><a href="galles.php">Pays de Galles</a></li>
	</ul>
</nav>

<h1><?php echo $nom; ?></h1>

<section class="histoire">
<h2>Histoire</h2>
<?php echo $histoire; ?>
</section>

<aside class="details">
	<ul>
		<li>Nombre d’habitants : <?php echo $habitants; ?></li>
		<li>Capitale : <?php echo $capitale; ?></li>
		<li>Devise : <?php echo $devise; ?></li>
	</ul>
</aside>

<footer class="pied">
Les textes et les informations viennent de <a href="https://fr.wikipedia.org">Wikipédia</a>.
</footer>
