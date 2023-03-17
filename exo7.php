<h1> Exercice 7 </h1>
<p> Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non. </p>
<p> <b> Exemple : </b> <br> genererCheckbox($elements); <br> //où $elements est un tableau associatif clé => valeur avec 3 entrées. </p>

<?php

$elements = ["Choix 1", "Choix 2", "Choix 3"];

function genererCheckbox(array $elements)
{
    $result = "<form action='#' method='POST'>
                <legend> Choisissez une ou plusieurs options </legend>";
                foreach ($elements as $choix){
                    $minChoix=mb_strtolower($choix);
                    $result .="<input type='checkbox' id='$minChoix' name='$minChoix'>
                                <label for ='$minChoix'>$choix</label><br>";
                }
    $result .= "</form>";
    return $result;
}

echo genererCheckbox($elements);

?>