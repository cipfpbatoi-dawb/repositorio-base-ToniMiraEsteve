<?php
// Crear una cookie segura
setcookie(
    'nom_usuari',
    'Marc',
    [
        'expires' => time() + 3600, // 1 hora
        'path' => '/',
        'domain' => '', // Domini actual
        'secure' => false, // Només HTTPS
        'httponly' => true, // Només accessible via HTTP
        'samesite' => 'Lax' // o 'Strict' o 'None'
    ]
);
?>