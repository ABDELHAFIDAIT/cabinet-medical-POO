<?php

    // include_once "./utilisateur.class.php";

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

        public function prendreRendezVous($full_name){
            echo "Le patient $this->prenom $this->nom a un rendez-vous chez le Medecin $full_name à la date $this->rendez_vous !";
        }

    }