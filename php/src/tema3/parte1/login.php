<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['new'])) {
        // Emmagatzemar el nom d'usuari en la sessió
        $_SESSION['usuari'] = $_POST['new'];
        setcookie('usuari', $_POST['new'], [
            'expires' => time() + 3600, // 1 hora
            'path' => '/',
            'domain' => '', // Domini actual
            'secure' => false, // Només HTTPS
            'httponly' => true, // Només accessible via HTTP
            'samesite' => 'Lax' // o 'Strict' o 'None'
        ]);
        // Redireccionar a la pàgina de benvinguda
        header('Location: login.php');
        exit();
    }else if(isset($_POST['usuari']) && isset($_SESSION['usuari'])){ 
        if($_POST['usuari'] == $_SESSION['usuari']){
            // Redireccionar a la pàgina de benvinguda
            header('Location: wellcome.php');
            exit();
        }
        
        header('Location: login.php');
        exit();
    }
   
}else{
    setcookie('usuari', '', time() + 30,'/');

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sessió</title>
</head>
<body>
    <h2>Iniciar Sessió</h2>
    <form method="post" action="login.php">
        <label for="usuari">Nom d'usuari:</label>
        <input type="text" id="usuari" name="usuari" required>
        <button type="submit">Iniciar Sessió</button>
    </form>
    <h2>Afegir usuari</h2>
    <form method="post" action="login.php">
        <label for="new">Nom d'usuari:</label>
        <input type="text" id="new" name="new" required>
        <button type="submit">Iniciar Sessió</button>
    </form>
</body>
</html>