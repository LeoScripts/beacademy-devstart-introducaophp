<select name="ano" id="ano">
  <option selected disabled>selecione o ano</option>
  <?php
    for ($ano = 2022; $ano >= 1900; $ano--) {
      echo "<option value={$ano}>{$ano}</option>"; 
    }
  ?>
</select>