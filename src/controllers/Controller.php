<?php
require 'Controller.php';
require 'Patient.php';
require 'RendezVous.php';

$controller = new Controller();

$action = isset($_GET['action']) ? $_GET['action'] : 'lister_patients';

switch ($action) {
    case 'lister_patients':
        $patients = $controller->listerPatients();
        include 'view_patients.php';
        break;
    case 'ajouter_patient':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $adresse = $_POST['adresse'];
            $controller->ajouterPatient($nom, $prenom, $adresse);
            header('Location: index.php?action=lister_patients');
        } else {
            include 'view_ajouter_patient.php';
        }
        break;
    case 'lister_rendezvous':
        $rendezvous = $controller->listerRendezVous();
        include 'view_rendezvous.php';
        break;
    case 'enregistrer_rdv':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        } else {
            include 'view_enregistrer_rdv.php';
        }
        break;
    default:
        break;
}