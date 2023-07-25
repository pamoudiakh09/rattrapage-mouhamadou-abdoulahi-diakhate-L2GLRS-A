<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un patient</title>
</head>
<body>
    <h1>Ajouter un patient</h1>
    <form action="index.php?action=ajouter_patient" method="post">
        <label>Nom : </label>
        <input type="text" name="nom" required><br>
        <label>Prénom : </label>
        <input type="text" name="prenom" required><br>
        <label>Adresse : </label>
        <input type="text" name="adresse" required><br>
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>