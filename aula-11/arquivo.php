<?php

// fopen - significa file open = abrir aquivo
// recebe 2 parametros
// 1 nome do arquivo
// 2 forma que voce vai abrir este arquivo de 3 formas
  // 1 forma ('r') read - abrir pra ler ele 
  // 2 forma ('w') write - ler pra escrever nele
  // 3 forma ('a+') - abrir pra ler e escrever
// caso o arquivo ainda no exista e cria automaticamente
  // e importante resaltar que voce deve estar na pasta do arquivo 
  // caso contrario e criara o arquivo na pasta que voce esta
$arquivo = fopen('produtos.csv', 'a+');

// --------------------------------------------------
//fwrite = file write = escrever no arquivo
// recebe dois parametros 
  // 1 - o arquivo em que sera escrito
  // 2 - o que sera escrito
// e importante usarmos a quebra de linha
// caso contrario tudo sera escrito na mesma linha
// o <br> nao funciona e sim PHP_EOL
fwrite($arquivo, 'ana' .PHP_EOL);
fwrite($arquivo, 'bia' .PHP_EOL);
fwrite($arquivo, 'carol' .PHP_EOL);

// o retorno
  // ana
  // bia
  // carol
// -------------------------------------------------
// fclose - file close = fechar o arquivo 
// pra evitar use desnecessario de memoria
// quando ja acavamos de usar o arquivo
fclose($arquivo);