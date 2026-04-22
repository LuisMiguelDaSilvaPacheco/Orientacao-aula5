<?php

class Monitor {

    public $polegadas;
    public $resolucao;
    public $marca;
    public $cor;
    public $voltagem;

    function ligar(){
        print "Monitor ligado!\n";
    }
    function desligar(){
        print "Monitor desligado!\n";
    }
    function exibirImagem(){
        print "Monitor exibindo imagem em $this->polegadas polegadas!\n";
    }

}

$monitor1 = new Monitor();
$monitor1 -> polegadas = 23;
$monitor1 -> resolucao = "1920x1080";
$monitor1 -> marca = "ABC";
$monitor1 -> cor = "Preto";
$monitor1 -> voltagem = 220;
$monitor1 -> ligar();
$monitor1 -> desligar();
$monitor1 -> exibirImagem();
print "Polegadas: $monitor1->polegadas | Resolução: $monitor1->resolucao | Marca: $monitor1->marca | Cor: $monitor1->cor | Voltagem: $monitor1->voltagem | \n\n";

$monitor2 = new Monitor();
$monitor2 -> polegadas = 27;
$monitor2 -> resolucao = "1920x1080";
$monitor2 -> marca = "CBA";
$monitor2 -> cor = "Branco";
$monitor2 -> voltagem = 220;
$monitor2 -> ligar();
$monitor2 -> desligar();
$monitor2 -> exibirImagem();
print "Polegadas: $monitor2->polegadas | Resolução: $monitor2->resolucao | Marca: $monitor2->marca | Cor: $monitor2->cor | Voltagem: $monitor2->voltagem | \n\n";