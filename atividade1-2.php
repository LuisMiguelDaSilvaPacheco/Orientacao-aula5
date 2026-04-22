<?php

class Retangulo{

    public $base;
    public $altura;

    function area(){
        $area = $this->base * $this->altura;

        return $area;
    }
    function perimetro(){
        $perimetro = ($this->base * 2) + ($this->altura * 2);

        return $perimetro;
    }
}
