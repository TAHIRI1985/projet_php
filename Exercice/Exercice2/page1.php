<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
</head>
<body>
<?php
if (isset($_SESSION['prenom']) && isset($_SESSION['nom'])) {
echo "<h3>Bonjour " . $_SESSION['prenom'] . " " . $_SESSION['nom'] ." !</h3>";
echo "<p><a href='logout.php'>Se déconnecter</a></p>"; 
}
?>
</body>
</html>