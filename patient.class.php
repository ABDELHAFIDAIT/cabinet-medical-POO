<?php

    include "./utilisateur.class.php";

    class Patient extends Utilisateur{
        private $rendez_vous ;

        // getter de Rendez_Vous
        public function getRendezVous(){
            return $this->rendez_vous;
        }

        // setter de Rendez_Vous
        public function setRendezVous($new_rdv){
            $this->rendez_vous = $new_rdv;
        }

        public function prendreRendezVous($prenom_m,$nom_m){
            echo "Le patient $this->prenom $this->nom a un rendez-vous chez le Medecin $prenom_m $nom_m à la date $this->rendez_vous !";
        }

    }