<?php
// Llegir el valor de la cookie
if (isset($_COOKIE['nom_usuari'])) {
    $nomUsuari = $_COOKIE['nom_usuari'];
    setcookie('nom_usuari', 'caca', time() + 3600, '/');
    $nom2 = $_COOKIE['nom_usuari'];
    echo "Hola, $nomUsuari";
    echo "Hola, $nom2";
} else {
    echo 'Cookie not found.';
}
