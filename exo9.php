<h1> Exercice 9 </h1>
<p> Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle"). </p>
<p> <b> Exemple : </b> <br> afficherRadio($nomsRadio); </p>

<?php

$nomsRadio = ["Masculin", "Féminin", "Autre"];

function afficherRadio(array $nomsRadio)
{
    $result = "<form action='#' method='POST'>
                <legend> Choisissez une option </legend>";

    foreach ($nomsRadio as $genre) {
        $minGenre = mb_strtolower($genre);
        $result .= "<input type='radio' id='$genre' name='genre' value='$genre'>
                    <label for='$genre'>$genre</label><br>";
    }
    $result .= "</form>";
    return $result;
}

echo afficherRadio($nomsRadio);

?>