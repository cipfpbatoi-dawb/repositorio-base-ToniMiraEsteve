<?php

namespace Php\Src\Tema4\Parte2;
class Persona{


    public function __construct(
        private string $nom,
        private string $congnom,
        private int $edad = 25,
    ){}

    public function setNom(String $nombre){
        $this->nom = $nombre;
        return $this;
    }

    public function setCongnom(String $congnom){
        $this->congnom = $congnom;
        return $this;
    }

    public function setEdad(int $edad){
        $this->edad = $edad;
        return $this;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getCongnom(): string{
        return $this->congnom;
    }

    public function getEdad(): int{
        return $this->edad;
    }

    public function getNomComplet(): string{
        return $this->nom . " " . $this->congnom;
    }

    public function estaJubilat(): bool{
        if($this->edad > 66){
            echo "Error";
        }else{
            if($this->edad >= 65){
                return true;
            }else{
                return false;
            }
        }
    }

}


?>