<select name="ano" id="ano">
  <option selected disabled>selecione o ano</option>
  <?php
    for ($ano = 2022; $ano >= 1900; $ano--) {
      echo "<option value={$ano}>{$ano}</option>"; 
    }
  ?>
</select>

<select name="mes" id="mes">
  <option selected disabled>selecione o mes</option>
  <?php
    for ($mes = 1; $mes <= 12; $mes++) {
      $match = match ($mes) {
        1 => 'janeiro',
        2 => 'fevereiro',
        3 => 'março',
        4 => 'abril',
        5 => 'maio',
        6 => 'junho',
        7 => 'julho',
        8 => 'agosto',
        9 => 'setembro',
        10 => 'outubro',
        11 => 'novembro',
        12 => 'dezembro',
      };
      echo "
        <option value={$match}>{$match}</option>"; 
    }
  ?>
</select>

<select name="dia" id="dia">
  <option selected disabled>selecione o dia</option>
  <?php
    for ($dia = 1; $dia <= 31; $dia++) {
      echo "<option value={$dia}>{$dia}</option>"; 
    }
  ?>
</select>