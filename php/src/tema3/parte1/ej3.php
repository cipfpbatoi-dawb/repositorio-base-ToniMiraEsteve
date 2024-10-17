<?php
session_start();

// Eliminar totes les variables de sessió
session_unset();

// Destruir la sessió
session_destroy();
?>
