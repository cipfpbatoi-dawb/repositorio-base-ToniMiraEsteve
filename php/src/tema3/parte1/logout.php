<?php
session_start();

// Tancar sessió de forma segura
session_unset();
session_destroy();

// Redireccionar a la pàgina de login
header('Location: login.php');
exit();
?>