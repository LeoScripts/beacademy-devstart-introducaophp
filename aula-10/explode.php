<?php

$test = "banana-laranja-abacaxi";

// serve pra quebrar estruturas
// aqui estamos quebrando atraves do ( - )
// recebe dois argumentos 
// 1º - atraves do que deve ser quebrado
// 2º - o que deve quebrar

// armazenando o retorno do explode em $partes
$partes = explode('-', $test);

var_dump($partes);

// retorna

// array(3) {
//   [0]=>
//   string(6) "banana"
//   [1]=>
//   string(7) "laranja"
//   [2]=>
//   string(7) "abacaxi"
// }