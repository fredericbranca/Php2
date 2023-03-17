<h1> Exercice 8 </h1>
<p> Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg <br> Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran. </p>
<p> <b> Exemple : </b> <br> repeterImage($url,4); </p>

<?php

$url = "http://my.mobirise.com/data/userpic/764.jpg";

function repeterImage($url, $nb)
{
    $result = '';
    for ($i = 0; $i < $nb; $i++) {
        $result .= "<img src='$url'> ";
    }
    return $result;
}

echo repeterImage($url, 4);

?>