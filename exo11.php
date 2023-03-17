<h1> Exercice 11 </h1>
<p> Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
chaîne de caractère représentant une date. </p>
<p> <b> Exemple : </b> <br> formaterDateFr("2018-02-23"); </p>

<?php

$date = new DateTime("2018-02-23");

function formaterDateFr($date)
{
	$result = new IntlDateFormatter('fr_FR');
	$result->setPattern('EEEE dd MMMM YYYY');
	return $result->format($date);
}

echo formaterDateFr($date);

?>