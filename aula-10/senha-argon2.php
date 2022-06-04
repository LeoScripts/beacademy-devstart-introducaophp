<?php

//  a mehor e mais usada 
// aparece ate no password conference
// foi o que ganhou a competição 
// atualmente e o algoritimo de criptografia mais forte do mundo
// sempre que e executado cria um hash diferente mesmo sendo a mesma senha


$senha = '123456';

echo password_hash($senha, PASSWORD_ARGON2I) . PHP_EOL;