<?php
class Utilisateur
{
    protected $nom;
    protected $prenom;
    protected $type;

    public function __construct($nom, $prenom, $type)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->type = $type;
    }
    public function afficherNomComplet()
    {
        return $this->prenom . ' ' . $this->nom;
    }
    public function changerNom($new_nom)
    {
        $this->nom = $new_nom;
    }
    public function changerPrenom($new_prenom)
    {
        $this->prenom = $new_prenom;
    }
}
