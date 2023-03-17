<h1> Exercice 14 </h1>
<p> Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie). </p>
<p> Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques suivantes : <br>
Peugeot 408 : $v1 = new Voiture("Peugeot","408"); <br>
BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100); </p>

<p> Votre programme de test devra afficher les informations des 2 voitures de la façon suivante : </p>
<a> echo $v1->getInfos()."< br/>"; <br>
echo $ve1->getInfos()."< br/>"; </a>
<br>
<br>

<?php 

spl_autoload_register(function ($class_name) 
{
    include $class_name . '.php';
});

$v1 = new Voiture("Peugeot", "408");
$ve1 = new VoitureElec("BMW", "I3", 100);

echo $v1->getInfos()."<br/>";
echo $ve1->getInfos()."<br/>";

?>