

<?php

$nome = "leandro";
$idade = 33;
$estado = "maranhao";
$saldoBancario = 0.01;


echo $idade >= 18 ? "
<table>
  <thead>
    <tr>
      <th>Nome</th>
      <th>Idade</th>
      <th>Estado</th>
      <th>Saldo-Bancario</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>$nome</th>
      <th>$idade</th>
      <th>$estado</th>
      <th>$saldoBancario</th>
    </tr>
  </tbody>
</table>
" : " <h2>$nome é de menor</h2> ";



