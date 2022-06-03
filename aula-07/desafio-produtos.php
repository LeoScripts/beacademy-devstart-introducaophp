<?php

$produto1 = [
  'nome' => 'DDR4 3200Mhz FURY Beast RGB',
  'preco' => '649,90',
  'descricao' => 'Memória de 16GB DIMM DDR4 3200Mhz FURY Beast RGB 1,35V 1Rx8 288 pinos para desktop/gamers ',
  'imagem' => 'https://m.media-amazon.com/images/I/61p32NOogaL._AC_SL1500_.jpg',
];

$produto2 = [
  'nome' => 'ASUS ROG Strix Z590-E Gaming',
  'preco' => '2.678,23',
  'descricao' => 'ASUS ROG Strix Z590-E Gaming, que é uma das melhores ofertas de gama média da empresa para as séries de processadores Intel de 10ª e 11ª Geração.',
  'imagem' => 'https://academiadainformatica.net.br/wp-content/uploads/2021/06/1622709686_758_Melhores-placas-mae-para-Intel-Core-i5-11400-em-2021.jpg'
];

$produto3 = [
  'nome' => 'processador INTEL I9-11900K',
  'preco' => '3.349,00',
  'descricao' => 'Processador de desktop desbloqueado Intel Core i9-11900K de 11ª geração. ',
  'imagem' => 'https://m.media-amazon.com/images/I/41jGx-EgaJL._AC_.jpg',
];

$produto4 = [
  'nome' => 'Kit Redragon Gaming K552',
  'preco' => '607,09',
  'descricao' => 'Teclado com 18 diferentes modos de iluminação RGB  e Mouse com até 7200 DPI (800/1200/1600/2400/7200 DPI Ajustável pelo usuário',
  'imagem' => 'https://m.media-amazon.com/images/I/51Je2MP-v7L._AC_SL1000_.jpg',
];

$produto5 = [
  'nome' => 'SAMSUNG 980 PRO SSD 1TB NVMe M.2',
  'preco' => '1.398,00',
  'descricao' => 'Velocidade máxima: 980 PRO está elevando o nível para SSD NVMe, proporcionando velocidades de leitura de até 7.000 MB/s',
  'imagem' => 'https://m.media-amazon.com/images/I/81bBCWykGtL._AC_SL1500_.jpg',
];
$produto6 = [
  'nome' => 'Gabinete Gamer Argb',
  'preco' => '447,43',
  'descricao' => 'Gabinete Gamer ARGB RainbowModelo: 3606W ',
  'imagem' => 'https://m.media-amazon.com/images/I/51prHm6pXeL._AC_SL1000_.jpg',
];

$produto7 = [
  'nome' => 'Monitor Gamer AOC Agon 32" Curvo 165Hz 1ms FreeSync AG323FCXE ',
  'preco' => '1.939,90',
  'descricao' => 'Curved Monitor: tela curva de 1800R foi desenvolvido para proporcionar maior visualização dos seus conteúdos, além de oferecer imagens mais ricas e uma experiência mais imersiva em todos os seus jogos',
  'imagem' => 'https://m.media-amazon.com/images/I/61mBTQwnhBL._AC_SL1500_.jpg',
];

$alunos = [
  $produto1,
  $produto2,
  $produto3,
  $produto4,
  $produto5,
  $produto6,
  $produto7,
];


?>


<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DEV HACK</title>
</head>
  <body>
    <h1 class="mt-5">Dev Hack</h1>
    <hr color="#CCC">
    <section 
      class="container"
      style="
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 1.5rem;
      "
    >

      <?php
        foreach ($alunos as $aluno) {
          echo '
            <div 
              style="
                overflow: hidden;
                box-shadow: 0 0 1rem 0 #ccc; 
                padding: 2rem; 
                border-radius: 1rem; 
                margin: 0.5rem;"
            >
          ';
            echo '<h2>' . $aluno['nome'] . '</h2>';
            echo '
              <img 
                style="width: 100%; max-height: 200px;" 
                src='.$aluno['imagem'].' 
              >
            ';
            echo ' 
              <strong style="padding: 1rem; background: yellow; border-radius: 0.5rem;" >
                ' . $aluno['preco'] . ' 
              </strong>
            ';
            echo '
              <p>'. $aluno['descricao'] .'</p>
            ';
          echo '</div>';
        }
      ?>
    </section>
  </body>
</html>

