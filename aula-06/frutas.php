<?php

$frutas = [
  'laranja',
  'banana',
  'abacaxi',
];

// push
$frutas[] = 'maça'; //3

// adicionando item no indece 10
// e as posiçoes nao cadastradas ficarao vazias
// o php respeita a ordem que o programador esta definindo
// o mair numero ultilizado somando mais e o proximo elemento
$frutas[10] = 'melancia';
$frutas[7] = 'morango';
$frutas[] = 'tangerina';

var_dump($frutas);


/*
  // retorno da execução
  
  array(7) { 
    [0]=> string(7) "laranja" 
    [1]=> string(6) "banana" 
    [2]=> string(7) "abacaxi" 
    [3]=> string(5) "maça" 
    [10]=> string(8) "melancia" 
    [7]=> string(7) "morango" 
    [11]=> string(9) "tangerina" 
  } 
*/