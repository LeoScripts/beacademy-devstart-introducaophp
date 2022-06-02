<form action="" method="post">
  <input type="text" name="mes" placeholder="mes"> <br/>
  <button>Enviar</button> 
</form>

<?php

$mes = $_POST['mes'];
// var_dump ($mes);

$mesInt = (int)$mes;


echo match ($mesInt) {
  1 => 'janeiro',
  2 => 'fevereiro',
  3 => 'março',
  4 => 'abril',
  5 => 'maio',
  6 => 'junho',
  7 => 'julho',
  8 => 'agosto',
  9 => 'setembro',
  10 => 'outubro',
  11 => 'novembro',
  12 => 'dezembro',
  default => 'Mês invalido'
};
