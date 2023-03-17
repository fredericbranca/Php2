<?php

spl_autoload_register(function ($class_name) 
{
    include $class_name . '.php';
});

class VoitureElec extends Voiture
{
    private int $_autonomie;

    // Constructeur pour initialiser la voiture électrique (l'autonomie)

    public function __construct(string $marque, string $modele, int $autonomie)
    {
        parent::__construct($marque, $modele);
        $this->_autonomie = $autonomie;
    }

    // Getter (accesseurs) et setter (mutateurs) pour les propriétés de la voiture électrique

    public function getAutonomie()
    {
        return $this->_autonomie;
    }

    public function setAutonomie(int $autonomie)
    {
        $this->_autonomie = $autonomie;
    }

    // Méthode pour afficher toutes les informations de la voiture électrique

    public function getInfos()
    {
        return parent::getInfos() . "Autonomie : " . $this->_autonomie . " km";
    }
}

?>