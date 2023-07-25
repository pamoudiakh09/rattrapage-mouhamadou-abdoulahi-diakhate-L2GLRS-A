<?php
require_once "../../src/models/PatientModel.php";

<!DOCTYPE html>
<html>
<head>
    <title>Liste des patients</title>
</head>
<body>
    <h1>Liste des patients</h1>
    <ul>
        <?php foreach ($patients as $patient) : ?>
            <li><?php echo $patient->getNom() . ' ' . $patient->getPrenom(); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>