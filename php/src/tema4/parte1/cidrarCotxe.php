<?php
include_once("cotxe.php");

use Php\Src\Tema4\Parte1\cotxe;

$cotxe = new cotxe();
$cotxe->marca = 'Seat';
$cotxe->model = 'Ibiza';
echo $cotxe->mostrarInformacio();
?>