<h1> Exercice 13 </h1>

<p> Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un véhicule. </p>
<p> v1 ➔ "Peugeot","408",5 <br> v2 ➔ "Citroën","C4",3 </p>
<p> Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments suivants :</p>


<img src="php13.1.jpg">
<img src="php13.2.bmp">
<img src="php13.3.bmp">
<br>

<?php

// require "Voiture.php";
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$v1 = new Voiture(1, "Peugeot", "408", 5);
$v2 = new Voiture(2, "Citroën", "C4", 3);

echo $v1->demarrer();
echo $v1->accelerer(200);
echo $v2->demarrer();
echo $v2->stopper();
echo $v2->accelerer(100);
echo $v1->VitesseActuelle();
echo $v2->VitesseActuelle();
echo $v1->ralentir(250);
echo $v1->InfoVehicule();
echo $v2->InfoVehicule();

?>
