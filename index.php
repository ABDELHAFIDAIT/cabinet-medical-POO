<?php
include_once './utilisateur.class.php';
include_once './medecin.class.php';
include_once './patient.class.php';

$patient_1= new Patient('hafid','oussama','patient');

// echo $patient_1->afficherNomComplet() . "<br>";

$patient_1->changerNom('ali');
$patient_1->changerPrenom('ait');

// echo $patient_1->afficherNomComplet();

$patient_1->setRendezVous('12-12-2025');
// echo $patient_1->getRendezVous();

// echo $patient_1->prenom ;



$medecin_1 = new Medecin('hakimi', 'achraf', 'medecin');
$medecin_1->setSpecialite('Général');

// echo $medecin_1->afficherNomComplet() . " - " . $medecin_1->getSpecialite() ."<br>";

$medecin_1->setSpecialite('cardiologie');
// echo $medecin_1->getSpecialite();


$full_name = $patient_1->afficherNomComplet();


$medecin_1->consulterPatient($full_name);



?>