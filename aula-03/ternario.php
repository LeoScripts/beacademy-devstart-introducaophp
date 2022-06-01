<?php

$idadde = 17;

// if ternario
echo $idadde >= 18 ? "de maior" : "de menor";

// (isset) if ternario declarando a variavel no escopo do if
echo isset($nome) ? $nome : 'nome não definido';

// isset simplificado
// muito ultilisado
echo $nome ?? 'nome não definido';