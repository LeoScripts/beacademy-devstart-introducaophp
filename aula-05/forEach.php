<?php

$frutas = [
  'banana',
  'laranja',
  'jaca',
  'abacate',
];

// podemos passar pra ele tres atributos
        //o que queremon iterar 
                  // posicao
                            // nome de cada item
foreach($frutas as $posicao => $cadaFruta) {
  //imprimindo os dados
  echo "Posição: {$posicao} | Fruta: {$cadaFruta}".PHP_EOL;
}

//retorno

// Posição: 0 | Fruta: banana
// Posição: 1 | Fruta: laranja
// Posição: 2 | Fruta: jaca
// Posição: 3 | Fruta: abacate