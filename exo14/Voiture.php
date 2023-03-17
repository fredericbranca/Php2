<?php

class Voiture
{
    private string $_marque;
    private string $_modele;

    // Constructeur pour initialiser la voiture (la marque, le modèle)

    public function __construct(string $marque, string $modele)  
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
    }

    // Getter (accesseurs) et setter (mutateurs) pour les propriétés de la voiture

    public function getMarque()
    {
        return $this->_marque;
    }

    public function setMarque(string $marque)
    {
        $this->_marque = $marque;
    }

    public function getModele()
    {
        return $this->_modele;
    }

    public function setModele(string $modele)
    {
        $this->_modele = $modele;
    }

    // Méthode pour afficher toutes les informations de la voiture

    public function getInfos()
    {
        return "Véhicule<br>*********************<br> Nom et modèle du véhicule : " . $this->_marque . " " . $this->_modele . "<br>";
    }
}

?>