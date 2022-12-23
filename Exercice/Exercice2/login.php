<?php
// $pseudo = $_POST['pseudo'];
// $mdp = $_POST['mdp'];
session_start();
if (isset($_POST['pseudo']) && isset($_POST['mdp'])) {
// $_SESSION['pseudo'] = $pseudo;
// $_SESSION['mdp'] = $mdp;
$_SESSION['prenom'] = "";
$_SESSION['nom'] = "";

header('Location:page1.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2</title>
</head>
<body>
<?php
if (isset($_SESSION['prenom']) && isset($_SESSION['nom'])) {
echo "<h3>Bonjour " . $_SESSION['prenom'] . " " . $_SESSION['nom'] ." !</h3>";
}

?>       
<form action="#" method="POST">
    <label for="pseudo">Pseudo :</label><input type="text" name="pseudo">
    <label for="mdp">Mot de passe :</label><input type="password" name="mdp">
    <input type="submit" name="connexion" value="Se connecter">
</form>    
</body>
</html>