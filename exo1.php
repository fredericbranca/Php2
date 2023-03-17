<h1>Exercice 1</h1>
<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de caractère passée en
    argument en majuscules et en rouge</p>
<p>Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;</p>

<?php

function convertirMajRouge($texte)
{
    $result = mb_strtoupper("<p style='color:red'> $texte </p>");
    return $result;
}

echo convertirMajRouge("Bonjour");

?>