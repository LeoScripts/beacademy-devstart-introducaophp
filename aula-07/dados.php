<?php

// quando usar array associativo => quando podemos nomear nossos items
// quando nao usar => quando nossos itens nao podem ser nomeados

$pessoa = [
  'nome' => 'chiquin',
  'email' => 'chiquin@email.com',
  'tel' => '98 9 99100-0000',
  '$endereco' => [
    'rua a',
    'novo sal',
  ],
];

var_dump($pessoa);