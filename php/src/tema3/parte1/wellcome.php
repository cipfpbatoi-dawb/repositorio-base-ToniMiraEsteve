<?php
session_start();

if (!isset($_SESSION['usuari'])) {
    // Redireccionar a la pàgina de login si no s'ha iniciat sessió
    header('Location: login.php');
    exit();
}

$nomUsuari = $_SESSION['usuari'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Benvingut</title>
</head>
<body>
    <h2>Benvingut, <?php echo htmlspecialchars($nomUsuari); ?>!</h2>
    <p>Aquesta és la teva pàgina de benvinguda.</p>
    <a href="logout.php">Tancar Sessió</a>
</body>
</html>