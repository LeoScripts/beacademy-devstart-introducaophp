<?php

$hora = date('H:i:s'); // hora atual
$hora2 = date('H:i:s a'); // hora atual + AM

$dia = date('d'); // dia atual em numero
$diaSemana = date('D'); // dia da semana 

$mes = date('m'); // mes atual em numeo
$mesNome = date('M'); // mes atual o nome

$ano = date('y'); // ano atual 2 digitos
$anoFull = date('Y'); // ano atual 4 digitos

$data = date('d/m/Y'); // 04/06/2022
$data1 = date('d-m-Y'); // 04-06-2022
$data2 = date('d.m.Y'); // 04.06.2022
$data3 = date(' c'); // 2022-06-04T10:33:27-03:00
$data4 = date('g'); // 10
$data5 = date('j'); // 4 dia com um digito
$data6 = date('l'); // dia da semana nome completo
$data7 = date('n'); // mes com um digito
$data8 = date('o'); // ano 4 digitos
$data9 = date('p'); // fuzorario
$data10 = date('r'); // Sat, 04 Jun 2022 10:41:15 -0300
$data11 = date('r'); // 04/06/22 - 10:42:05
$data12 = date('t'); // quantos dias tem o mes atual
$data13 = date('u'); // 000000
$data14 = date('v'); // 000
$data14 = date('v'); // 000
$data15 = date('w'); // // mes com um digito
$data16 = date('z'); // // 154

$dataFull = date('d/m/y - H:i:s'); // 04/06/22 - 10:23:40

$dataFull2 = date('D - d/M/Y - H:i:s'); // Sat - 04/Jun/2022 - 10:23:40


echo $data .PHP_EOL;
echo $data1 .PHP_EOL;
echo $data2 .PHP_EOL;
echo $data3 .PHP_EOL;
echo $data4 .PHP_EOL;
echo $data5 .PHP_EOL;
echo $data6 .PHP_EOL;
echo $data7 .PHP_EOL;
echo $data8 .PHP_EOL;
echo $data9 .PHP_EOL;
echo $data10 .PHP_EOL;
echo $data11 .PHP_EOL;
echo $data12 .PHP_EOL;
echo $data13 .PHP_EOL;
echo $data14 .PHP_EOL;
echo $data15 .PHP_EOL;
echo $data16 .PHP_EOL;

echo $dataFull .PHP_EOL;
echo $dataFull2 .PHP_EOL;

echo $hora .PHP_EOL;

echo $dia .PHP_EOL;
echo $diaSemana .PHP_EOL;

echo $mes .PHP_EOL;
echo $mesNome .PHP_EOL;

echo $ano .PHP_EOL;
echo $anoFull .PHP_EOL;