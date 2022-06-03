<?php

$bandas = [
  [
    'oficina g3', // indece 0
    5, // indice 1 = quantidade de musicas
  ],
  ['4 por 1', 10],
  ['branco no preto', 1],
];

echo 'banda:' . ' ' . $bandas[0][0];
echo '<br>';
echo 'quantidade de musicas: ' . $bandas[0][1];