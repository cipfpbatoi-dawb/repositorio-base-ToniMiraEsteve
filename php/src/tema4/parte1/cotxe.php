<?php
namespace Php\Src\Tema4\Parte1;
class cotxe{

    public function __construct(
        public $marca = 'SEAT',
        public $model = 'IBIZA',
    ){}
    
    

    public function mostrarInformacio(){
        return "marca:" . $this->marca . ", model:" . $this->model;
    }
}
?>