<h1> Exercice 10 </h1>
<p> En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ». </p>
<p> Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
de validation (submit). </p>

<?php

$nomsInput = ["Nom", "Prénom", "Adresse e-mail", "Ville"] ;
$genre = ["Masculin", "Féminin", "Autre"] ;
$formation = ["Développeur Logiciel", "Designer Web", "Intégrateur", "Chef de projet"] ;

function alimenterListeDeroulante($genre)
{
    $resultGenre = "<table cellspacing='30'>
                        <td>
                            <label for='genre-select'>Genre</label>
                        </td>
                        <td>
                        <select name='genre' id='genre-select'>
                            <option value=''>--Selection Genre--</option>";
                            foreach ($genre as $sexe) {
                                $minSexe = mb_strtolower($sexe);
                                $resultGenre .= "<option value='$minSexe'>$sexe</option>";
                            }
    $resultGenre .= "</td></select>";
    return $resultGenre;
}


function afficherInput(array $nomsInput = ["Non défini"])
{
    $resultInput = "";
    foreach ($nomsInput as $input) {
        $minInput = mb_strtolower($input);
        $resultInput .= "<tr>
                            <td><label for='$minInput'>$input</label></td>
                            <td><input type='text' name='$minInput' id='$minInput'></td>
                        </tr>";
    }
    $resultInput .= "</table>";
    return $resultInput;
}


function genererCheckbox(array $formation)
{
    $resultFormation = "<table cellspacing='10'>
                <legend> Choisissez une ou plusieurs options </legend>";
                foreach ($formation as $choix){
                    $minChoix=mb_strtolower($choix);
                    $resultFormation .="<td>
                                            <input type='checkbox' id='$minChoix' name='$minChoix'>
                                            <label for ='$minChoix'>$choix</label>
                                        </td>";
                }
    $resultFormation .= "</table>";
    return $resultFormation;
}


function afficherFormulaire($nomsInput, $genre, $formation)
{
    $result = "<center><h1>Formulaire</h1></center><center><form action='#' method='POST'>";
    $result .= alimenterListeDeroulante($genre);
    $result .= afficherInput($nomsInput);
    $result .= genererCheckbox($formation);
    $result .= "<br><input type='submit' value='Envoyer le formulaire'>
                </form></center>";
    return $result;
}

echo afficherFormulaire($nomsInput, $genre, $formation);

?>