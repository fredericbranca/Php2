<?php

class Voiture
{
    private int $_key;
    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private int $_vitesseActuelle = 0;
    private int $_statut = 0;

    // Constructeur pour initialiser la voiture ( la clef, la marque, le modèle et le nombre de portes)

    public function __construct(int $key, string $marque, string $modele, int $nbPortes)  
    {
        $this->_key = $key;
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
    }

    // Getter (accesseurs) et setter (mutateurs) pour les propriétés de la voiture

    public function getKey()
    {
        return $this->_key;
    }

    public function setKey(int $key)
    {
        $this->_key = $key;
    }

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

    public function getNbPortes()
    {
        return $this->_nbPortes;
    }

    public function setNbPortes(int $nbPortes)
    {
        $this->_nbPortes = $nbPortes;
    }

    // Méthodes pour démarrer, accélérer, stopper et ralentir la voiture

    public function demarrer()
    {
        if($this->_statut == 0){
            $this->_statut = 1;
            $result = "Le véhicule " . $this->_marque . " " . $this->_modele . " démarre.<br>";
        }
        else{
            $result = "Le véhicule est déjà démarré.<br>";
        }
        return $result;
    }

    public function accelerer($vitesse)
    {
        if($this->_statut == 1){
            $this->_vitesseActuelle = $this->_vitesseActuelle + $vitesse;
            $result = "Le véhicule " . $this->_marque . " " . $this->_modele . " accélère de ". $vitesse . "km/h.<br>";
        }
        else{
            $result = "Le véhicule " . $this->_marque . " " . $this->_modele . " veut accélérer de " . $vitesse . " hm/h. <br> Pour accélérer, il faut démarrer le véhicule " . $this->_marque . " " . $this->_modele . ".<br>";
        }
        return $result;
    }

    public function stopper()
    {
        $this->_statut = 0;
        return "Le véhicule " . $this->_marque . " " . $this->_modele . " est stoppé.<br>";
    }

    public function ralentir($vitesse)
    {  
        $this->_vitesseActuelle = $this->_vitesseActuelle - $vitesse;
        if ($this->_vitesseActuelle <0)
        {
            $this->_vitesseActuelle = 0;
        }
        return "Le véhicule " . $this->_marque . " " . $this->_modele . " a ralenti et roule à " . $this->_vitesseActuelle . " km/h.<br>";

    }

    // Méthode pour afficher la vitesse actuelle de la voiture

    public function VitesseActuelle()
    {
        return "La vitesse du véhicule " . $this->_marque . " " . $this->_modele . " est de : " . $this->_vitesseActuelle . " km/h.<br>";
    }

    // Méthode pour afficher toutes les informations de la voiture

    public function InfoVehicule()
    {
        $result = "<p>Infos véhicule " . $this->_key . "<br> **************** <br>";
        $result .= "Nom et modèle du véhicule : " . $this->_marque . " " . $this->_modele . "<br>";
        $result .= "Nombre de porte : " . $this->_nbPortes . "<br>";

        if($this->_statut == 1){
            $result .= "Le véhicule " . $this->_marque . " est démarré.<br>";
        }
        else{
            $result .= "Le véhicule " .$this->_marque . " est à l'arrêt.<br>";
        }
        $result .= "Sa vitesse actuelle est de " . $this->_vitesseActuelle . " km/h.</p>";
        return $result;
    }

}
