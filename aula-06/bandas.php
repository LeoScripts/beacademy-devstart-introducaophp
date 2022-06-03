<?php

$bandas = [
  'oficina g3', //0
  '4 por 1', // 1
  'ministerio apascentar', // 2
  'adoradores' // 3
];

$bandas[5] = 'preto no branco';

// reatribuindo bando de indice 2
$bandas[2] = 'banda de eli soares';

// exibindo sem uso da tag hrml
// renderizando usando o form pra renderizar
echo '<ul>';
  for ($n = 0; $n <= 2; $n++) {
    echo '<li>' . $bandas[$n] . '</l1>';
  }
echo '</ul>';

echo '<br>';
echo '<br>';

// -----------------------------------------

// foreach 

// pegando um banda de dentro de bandas
foreach ($bandas as $banda) {
  echo "<li>{$banda}</li>";
}

echo '<br>';
echo '<br>';

// -----------------------------------------