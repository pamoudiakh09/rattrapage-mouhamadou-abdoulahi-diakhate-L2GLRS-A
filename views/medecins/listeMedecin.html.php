<!DOCTYPE html>
<html>
<head>
    <title>Liste des rendez-vous</title>
</head>
<body>
    <h1>Liste des rendez-vous</h1>
    <ul>
        <?php foreach ($rendezvous as $rdv) : ?>
            <li><?php echo $rdv->getDate() . ' à ' . $rdv->getHeure() . ' - ' . $rdv->getLieu(); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>