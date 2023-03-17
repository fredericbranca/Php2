<h1> Exercice 5 </h1>
<p> Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs
    associés. </p>
<p> <b> Exemple : </b> <br> $nomsInput = array("Nom","Prénom","Ville"); <br> afficherInput($nomsInput); </p>

<?php

$nomsInput = array("Nom", "Prénom", "Ville");

function afficherInput(array $nomsInput = ["Non défini"])
{
    $result = "<form action='#' method='POST'>";
    foreach ($nomsInput as $input) {
        $minInput = mb_strtolower($input);
        $result .= "<label for='$minInput'>$input</label><br>
                    <input type='text' name='$minInput' id='$minInput'><br>";
    }
    $result .= "</form>";
    return $result;
}

echo afficherInput($nomsInput);

?>