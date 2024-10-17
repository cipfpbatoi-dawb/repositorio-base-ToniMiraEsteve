<?php
include_once("persona.php");

use Php\Src\Tema4\Parte2\Persona;

$persona1 = new Persona("Toni","Mira",65);
$persona2 = new Persona("Juan","BLanco");

echo $persona1->getNomComplet();
echo " Esta jubilat: " . ($persona1->estaJubilat() ? "Esta Jubilat" : "No esta jubilat");

echo $persona2->getNomComplet();
echo " Esta jubilat: " . ($persona2clear->estaJubilat() ? "Esta Jubilat" : "No esta jubilat");
?>