<p> En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une adresse e-mail a le bon format. </p>

<?php

$email1 = 'elan@elan-formation.fr';
$email2 = 'contact@elan';

function testEmail($email)
{
    // La fonction filter_var permet de vérifier le format de l'adresse e-mail avec la constant FILTER_VALIDATE_EMAIL : retourne 'true' si valide et 'false' si invalide
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = "<p>L'adresse <b>$email</b> est une adresse e-mail valide.</p>";
    } else {
        $result = "<p>L'adresse <b>$email</b> est une adresse e-mail invalide.</p>";
    }
    return $result;
}

echo testEmail($email1);
echo testEmail($email2);

?>