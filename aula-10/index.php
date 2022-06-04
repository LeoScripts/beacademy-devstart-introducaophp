<?php

$notasA = [
  10,
  7,
  9.5,
  7
];

$notasB = [
  8,
  7.5,
  9,
  7
];


// fazendo na unha
function media(array $notas): float 
{
  $total = 0; // 10 19 28.5
  $quantidade = 0; // 1 2 3

  foreach ($notas as $nota) {
    $total += $nota; // soma as notas
    $quantidade++; // conta os itens do array
  }

  return $total / $quantidade;
}

function media2(array $notas): float 
{
  $total = array_sum($notas); // soma as notas
  $quantidade = count($notas); // conta a quantidade de itens do array

  return $total / $quantidade;
}

// mais limpo top
function media3(array $notas): float 
{
  return array_sum($notas) / count($notas);
}

echo media($notasA);

echo '<br>';
PHP_EOL. '-----------------' .PHP_EOL;

echo media($notasB);


echo '<hr>'; // quebra de linha front
PHP_EOL. '-----------------' .PHP_EOL; // quebra de linha back

// execução do 2 segundo exemplo

echo media2($notasA);

echo '<br>';
PHP_EOL. '-----------------' .PHP_EOL;

echo media2($notasB);


// execuçao da 3 
echo '<hr>';
PHP_EOL. '-----------------' .PHP_EOL;

echo media2($notasA);

echo '<br>';
PHP_EOL. '-----------------' .PHP_EOL;

echo media2($notasB);