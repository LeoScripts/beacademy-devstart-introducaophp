<?php

declare(strict_types=1);


// quando uma função nao tem a palavra return tipanos o retorno como void
                                  // assim    
function mostrarNomes(array $nomes): void 
{
  foreach ($nomes as $nome) {
    echo "Nome: " .$nome.PHP_EOL;
  }
}

mostrarNomes(['joao','ana','bia']);

// retorno
// Nome: joao
// Nome: ana
// Nome: bia

//mas caso nao seja um array 
// mostrarNomes('test');
// PHP Fatal error:  Uncaught TypeError: mostrarNomes(): Argument #1 ($nomes) must be of type array, string given,
//                                       ¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨             ¨¨¨¨¨¨¨¨¨¨  ¨¨¨¨¨¨¨¨¨¨¨¨
//                                                        o argumento 1        nao é do  tipo array é string                    