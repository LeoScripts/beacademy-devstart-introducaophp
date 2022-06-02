<?php

// estrutura de decisao simples
// se

$n = 10;

if($n > 0) {
  echo "positivo";
}

echo "<br> Pronto, Terminou";


echo "<br>";
echo "<br>";

//-----------------------------



// estrutura de decisao composta
// se-senao

if($n > 0) {
  echo "positivo";
} else {
  echo "Não é positivo";
}

echo "<br> Pronto, Terminou";


echo "<br>";
echo "<br>";

//-----------------------------

$n = 0;

//-----------------------------


// se-senao-se

if($n > 0) {
  echo "positivo";
} else {
  if($n > 0) {
    echo "negativo";
  } else {
    echo "nulo";
  }
}

echo "<br> Pronto, Terminou";


echo "<br>";
echo "<br>";

//-----------------------------


//elseif

if($n > 0) {
  echo "positivo";
} elseif ($n < 0) {
  echo "negativo";
} else {
  echo "nulo";
}

echo "<br> Pronto, Terminou";


echo "<br>";
echo "<br>";

//-----------------------------