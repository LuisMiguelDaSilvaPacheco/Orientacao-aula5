<?php

class Pokemon{

    public $nome;
    public $tipo1;
    public $tipo2;
    public $experiencia;
    public $nivel;
    public $hp;
    public $vida;
    public $ataqueF;
    public $ataqueE;
    public $defesaF;
    public $defesaE;
    public $velocidade;
    public $statusTotal;

    function batalhar($pokemons){
        if ($pokemons[0]->statusTotal > $pokemons[1]->statusTotal) {
            $chanceDeVencer = 75;
            if (rand(1,100) <= $chanceDeVencer) {
                $pokemons[0]->experiencia += rand(10, 30);
                print "Parabéns! você venceu!";
            } else {
                $pokemons[1]->experiencia += rand(8, 15);
                print "Que pena! você perdeu!";
            }
        } elseif ($pokemons[0]->statusTotal < $pokemons[1]->statusTotal) {
            $chanceDeVencer = 25;
            if (rand(1,100) <= $chanceDeVencer) {
                $pokemons[0]->experiencia += rand(10, 30);
                print "Parabéns! você venceu!";
            } else {
                $pokemons[1]->experiencia += rand(8, 15);
                print "Que pena! você perdeu!";
            }
        }
        elseif ($pokemons[0]->statusTotal > $pokemons[1]->statusTotal) {
            $chanceDeVencer = 50;
            if (rand(1,100) <= $chanceDeVencer) {
                $pokemons[0]->experiencia += rand(10, 30);
                print "Parabéns! você venceu!";
            } else {
                $pokemons[1]->experiencia += rand(8, 15);
                print "Que pena! você perdeu!";
            }
        }
        return $pokemons;
    }

    function ganharNivel($pokemons){
        if ($pokemons[0]-> experiencia >= 100) {
            $pokemons[0]->nivel++;
            $pokemons[0]->experiencia = 0;
            print "Seu pokémon ganhou";
        }
    }
}

$pokemons = array();

for ($i=0; $i < 2; $i++) { 
    $pokemon = new Pokemon();
    $pokemon -> nome = readline('Diga o nome do seu pokémon: ');
    $pokemon -> tipo1 = readline('Diga o tipo primário do seu pokémon: ');
    $pokemon -> tipo2 = readline('Diga o tipo secundário do seu pokémon: ');
    $pokemon -> nivel = rand(1, 5);
    $pokemon -> experiencia = 0;
    $pokemon -> vida = rand(1,4) * $pokemon->nivel;
    $pokemon -> ataqueF = rand(1,2) * $pokemon->nivel;
    $pokemon -> ataqueE = rand(1,2) * $pokemon->nivel;
    $pokemon -> defesaF = rand(1,3) * $pokemon->nivel;
    $pokemon -> defesaE = rand(1,3) * $pokemon->nivel;
    $pokemon -> velocidade = rand(1,3) * $pokemon->nivel;
    $pokemon -> statusTotal = $pokemon->nivel + $pokemon->ataqueF + $pokemon->ataqueE + $pokemon->defesaF + $pokemon->defesaE + $pokemon->velocidade;

    array_push($pokemons, $pokemon);
}