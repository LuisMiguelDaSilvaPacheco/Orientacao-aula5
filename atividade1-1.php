<?php

class Pessoa{
    public $nome;
    public $endereco;
    public $cidade;
    public $UF;
    public $altura;

    function falarOla(){
        print "\nOlá mundo, sou $this->nome \n";
    }
    function falarEndereco(){
        print "Moro em $this->endereco, $this->cidade, $this->UF \n";
    }
    function falarAltura(){
        print "Tenho $this->altura metros \n\n";
    }
}

$pessoa1 = new Pessoa();
$pessoa1 -> nome = readline("Diga seu nome: ");
$pessoa1 -> endereco = readline("Diga seu endereço (número da casa, rua e bairro): ");
$pessoa1 -> cidade = readline("Diga sua cidade: ");
$pessoa1 -> UF = readline("Diga sua UF: ");
$pessoa1 -> altura = readline("Diga sua altura: ");
$pessoa1 -> falarOla();
$pessoa1 -> falarEndereco();
$pessoa1 -> falarAltura();