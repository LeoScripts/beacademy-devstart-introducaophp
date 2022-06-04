<?php

$name = 'leandro';
$lastname = 'CAVALCANTE';

$name2 = 'chiquin da silva';

// tranformando a primeira letra da palavra em maiuscula
//              vvvvvvvvvvvvvv
echo "Nome: " . ucfirst($name) . PHP_EOL;

// transformando 1º tudo pra menusculao
//                           vvvvvvvvvvvvvvvvvvvv
echo "Sobrenome: " . ucfirst(strtolower($lastname)) . PHP_EOL;
//                   ^^^^^^^^
// depois 2º a primeira pra maiuscula

// colocando as primeiras letras de cada palavra em maiusculas
//               vvvvvvvvvvvvvvv
echo "Nome2: " . ucwords($name2);