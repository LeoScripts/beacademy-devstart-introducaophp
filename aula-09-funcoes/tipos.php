<?php

// a tipagem evita erros como de o cliente digitar em vez de numeros a palavra
// garante mais segurança pro nosso codigo
//ex: vai evitar isso =>  echo soma(dez, vinte)

//tipo da tipagem
declare(strict_types=1);


// tipando os paramentros      // tipando o retorno  
function soma( int $n1, int $n2): int 
{
  return $n1 + $n2;
}

                                    // tipando o retorno    
function soma2( float $n1, float $n2): float 
{
  return $n1 + $n2;
}

function welcome(string $nome) {
  return "Bem vindo {$nome}";
}

// tipando o retorno da função.......... 
function welcome2(string $nome): string 
{
  return "Bem vindo {$nome}";
}

// quebra de linha
echo PHP_EOL. '-------------------' .PHP_EOL;

echo soma(10, 20);

echo PHP_EOL. '-------------------' .PHP_EOL;

echo soma2(10, 110);

echo PHP_EOL. '-------------------' .PHP_EOL;

echo welcome('ana');

echo PHP_EOL. '-------------------' .PHP_EOL;