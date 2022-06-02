<select name="ano" id="ano">
  <option selected disabled>selecione o ano</option>
  <?php
  $ano = 2022;
  while ($ano >= 1900) {
    echo "<option value={$ano}>{$ano}</option>";  
    $ano--;
  }
  ?>
</select>
