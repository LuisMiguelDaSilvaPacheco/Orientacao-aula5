<?php

class Retangulo{

    public $base;
    public $altura;

    function __construct($base, $altura){
        $this->base = $this->base;
        $this->altura = $this->altura;
    }

    function area(){
        $area = $this->base * $this->altura;

        return $area;
    }
    function perimetro(){
        $perimetro = ($this->base * 2) + ($this->altura * 2);

        return $perimetro;
    }
}
for ($i=0; $i < 3; $i++) { 
    $base = readline("Diga a base de um retângulo: ");
    $altura = readline("Diga a altura de um retângulo: ");

    $retangulo = new Retangulo($base, $altura);
    $retangulo -> area();
    $retangulo -> perimetro();
    print "Este retângulo têm ". $retangulo->area(). " de área e ". $retangulo->perimetro(). " de perímetro\n\n";
}
