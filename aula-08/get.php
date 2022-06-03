<?php

var_dump($_GET);

//$_GET - e uma variavel super global do php existem outras

// ao executarmos o nosso servidor ele neste arquivo ele nos retorna um array empty(vazio)
// resultado:
// array(0) { } 

// ao digitarmos apos a rota do nosso arquivo mais algumas informações como query string
// ele adicionara essas informações no nosso array

// ex
// http://localhost:8000/get.php?name=leandro&job=desenvolvedor
//                              *******************************

// quando colocamos essas duas informaçoes quemestao sublinhadas e as adiciona no nosso array
// resultando em:
// array(2) { ["name"]=> string(7) "leandro" ["job"]=> string(13) "desenvolvedor" } 

// caso exista name no nosso array e devolve "oi tudo bem? NOME!" ou seja ele tras o nome digitado
if ($_GET) {
  echo 'oi tudo bem? ' . $_GET['name'] . ' !';
}