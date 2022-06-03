<?php

$a1 = [
  'nome' => 'ana',
  'email' => 'ana@email.com',
  'tel' => '98 9 99100-0000',
  '$endereco' => [
    'rua a',
    'novo sal',
  ],
];

$a2 = [
  'nome' => 'bia',
  'email' => 'bia@email.com',
  'tel' => '98 9 99111-1111',
  '$endereco' => [
    'rua a',
    'novo sal',
  ],
];

$a3 = [
  'nome' => 'carol',
  'email' => 'carol@email.com',
  'tel' => '98 9 99122-2222',
  '$endereco' => [
    'rua a',
    'novo sal',
  ],
];

$alunos = [
  $a1,
  $a2,
  $a3,
];

// var_dump($alunos);

?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


<div class="container">
  <h1 class="mt-5">Alunos</h1>
  <hr>
  <table class="table table-hover table-striped mt-5">
    <thead class="table-dark">
      <tr >
        <th>nome</th>
        <th>email</th>
        <th>telefone</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($alunos as $aluno) {
          echo '<tr>';
            echo '<td>' . $aluno['nome'] . '</td>';
            echo '<td>' . $aluno['email'] . '</td>';
            echo '<td>' . $aluno['tel'] . '</td>';
          echo '</tr>';
        }
      ?>
    </tbody>
  </table>
</div>