<h1>Exercice 2</h1>
<p> <b> Soit le tableau suivant : </b> <br>
    $capitales = array <br>
    ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington DC","Italie"=>"Rome"); <br><br>
    Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
    s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
    une fonction personnalisée. <br><br>
    Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales); </p>

<?php

$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington DC",
    "Italie" => "Rome"
    ] ;

function afficherTableHTML(array $capitales)
{
    ksort($capitales) ;
    $result = "<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitale</th>
                    </tr>
                </thead>
                <tbody>";
                foreach ($capitales as $pays => $capitale){
                    $result .=
                        "<tr>
                            <td>".mb_strtoupper($pays)."</td>
                            <td>". $capitale ."</td>
                        </tr>";
                }
    $result .= "</tbody></table>";
    return $result;
}

echo afficherTableHTML($capitales);

?>