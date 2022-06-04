<?php

$senha = '123456'; // uma das senhas mais usadas em banco de dados
$code = 'MTIzNDU2';

// criptografando de maneira simples e antiga
echo base64_encode($senha).PHP_EOL; // MTIzNDU2

//desencriptografando da maneira antiga
echo base64_decode($code).PHP_EOL; // 123456