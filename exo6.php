<h1> Exercice 6 </h1>
<p> Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs. </p>
<p> <b> Exemple : </b> <br> $elements = array("Monsieur","Madame","Mademoiselle"); <br> alimenterListeDeroulante($elements); </p>

<?php

$elements = ["Monsieur", "Madame", "Mademoiselle"];

function alimenterListeDeroulante(array $elements)
{
    $result = "<form action='#' method='POST'>
                <label for='civilite-select'>Civilité</label><br>
                <select name='civilite' id='civilite-select'>
                    <option value=''>--Selection Civilité--</option>";
    foreach ($elements as $civilite) {
        $minCivilite = mb_strtolower($civilite);
        $result .= "<option value='$minCivilite'>$civilite</option>";
    }
    $result .= "</select></form>";
    return $result;
}

echo alimenterListeDeroulante($elements);

?>