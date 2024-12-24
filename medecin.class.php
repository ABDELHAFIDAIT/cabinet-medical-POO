<?php
// include_once "./utilisateur.class.php" ;
class medecin extends Utilisateur {
    private $specialite ;

    // getter specialite
    public function getSpecialite(){
        return $this->specialite ;
    }
    //setter specialite
    public function setSpecialite($new_specialte){
        $this->specialite= $new_specialte;
    }
    //method
    public function consulterPatient($full_name){
        echo"le medecin $this->prenom $this->nom de $this->specialite va consulter le patient $full_name .";

    }
}