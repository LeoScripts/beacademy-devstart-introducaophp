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
  'descricao' => 'ASUS ROG Strix Z590-E Gaming, que é uma das melhores ofertas de gama média da empresa para as séries de processadores Intel de 10ª e 11ª Geração. Nós testamos a versão AMD X570 desta placa e ela era brilhante. Esta placa apresenta o chipset Z590, que desbloqueia suporte total para PCIe 4.0, e você obtém o mesmo BIOS ASUS excelente de outras placas de primeira linha. Outros recursos de destaque incluem Wi-Fi 6E, design de estágio de energia 14 + 2 para overclock estável, suporte DDR4-5333 + RAM, LAN Intel 2.5Gb dual, Thunderbolt 4 e quatro slots SSD M.2.',
  'imagem' => 'https://academiadainformatica.net.br/wp-content/uploads/2021/06/1622709686_758_Melhores-placas-mae-para-Intel-Core-i5-11400-em-2021.jpg'
];

$produto3 = [
  'nome' => 'processador INTEL I9-11900K 3.5GHZ LGA1200 16MB',
  'preco' => '3.349,00',
  'descricao' => 'Processador de desktop desbloqueado Intel Core i9-11900K de 11ª geração. Com a tecnologia Intel Turbo Boost Max 3.0 e suporte PCIe Gen 4.0, os processadores Intel Core de 11ª geração desbloqueados são otimizados para jogadores entusiastas e criadores sérios e ajudam a proporcionar overclocking de alto desempenho para um aumento adicional. Solução térmica não incluída na caixa. Compatível com placas-mãe de chipset série 500 e selecionadas 400. Consulte o fornecedor da placa mãe para obter detalhes de compatibilidade. 125 W.',
  'imagem' => 'https://m.media-amazon.com/images/I/41jGx-EgaJL._AC_.jpg',
];

$produto4 = [
  'nome' => 'Kit Redragon Gaming K552 Rgb Teclado Mecânico + Mouse',
  'preco' => '607,09',
  'descricao' => 'Teclado com 18 diferentes modos de iluminação RGB  e Mouse com até 7200 DPI (800/1200/1600/2400/7200 DPI Ajustável pelo usuário',
  'imagem' => 'https://m.media-amazon.com/images/I/51Je2MP-v7L._AC_SL1000_.jpg',
];

$produto5 = [
  'nome' => 'SAMSUNG 980 PRO SSD 1TB PCIe 4.0 NVMe Gen 4 Gaming M.2',
  'preco' => '1.398,00',
  'descricao' => 'Velocidade máxima: 980 PRO está elevando o nível para SSD NVMe, proporcionando velocidades de leitura de até 7.000 MB/s',
  'imagem' => 'https://m.media-amazon.com/images/I/81bBCWykGtL._AC_SL1500_.jpg',
];
$produto6 = [
  'nome' => 'Gabinete Gamer Branco Argb Vidro Gamemax Revolt',
  'preco' => '447,43',
  'descricao' => 'Gabinete Gamer ARGB RainbowModelo: 3606W RevoltCor: BrancaMarca: GamemaxConfiguração dos ventiladores:-Controladora dos Fans com botão para trocar cores e efeitos (inclusa)-Painel frontal (incluso): 3 Fans Cooler 120 mm (compatível: FN-12Rainbow-D)-Painel frontal (traseiro): 1 Fan Cooler 120 mm (compatível: FN-12Rainbow-D)-Painel superior (opcional): 2 Fans Cooler 120 mm (compatível: FN-12Rainbow-D)-PSU cover (opcional): 2 Fan',
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
  <title>Document</title>
</head>
  <body>
    <h1 class="mt-5">Dev Hack</h1>
    <hr color="#CCC">
    <section 
      class="container"
      style="
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(28rem, 1fr));
        gap: 1.5rem;
        min-height: 100vh;
      "
    >

      <?php
        foreach ($alunos as $aluno) {
          echo '
            <div 
              style="
                overflow: hidden;
                max-width:30rem; 
                box-shadow: 0 0 1rem 0 #ccc; 
                padding: 2rem; 
                border-radius: 1rem; 
                margin: 0.5rem;"
            >
          ';
            echo '<h2>' . $aluno['nome'] . '</h2>';
            echo '
              <img 
                style="width: 50%;" 
                src='.$aluno['imagem'].' 
              >
            ';
            echo ' 
              <strong style="padding: 1rem; background: yellow; border-radius: 0.5rem;" >
                ' . $aluno['preco'] . ' 
              </strong>
            ';
          echo '</div>';
        }
      ?>
    </section>
  </body>
</html>

