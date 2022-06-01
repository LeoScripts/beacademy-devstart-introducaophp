<?php

$nome = "ana";
$sobrenome = "feitoza";
$idade = 100;
$cidade = "Fortaleza";

$nome2 = "Chiquim";
$nome2 .= " da Silva"; //Chiquin da Silva

echo $nome . " " . $sobrenome;
echo "<br>";
echo $nome2; // nl2br e pra quebra de linha

echo "<br>";// coloca quebra de linh

// concatenando na unha
echo "Eu me chamo " . $nome . " " . " tenho " . $idade . " anos e moro em " . $cidade; 
echo "<br>";
// templete string no php e soment com aspas dupas
echo "Eu me chamo {$nome}, tenho {$idade} anos e moro em $cidade";
