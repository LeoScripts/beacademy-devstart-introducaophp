<form action="" method="post">
  <input type="text" name="name" placeholder="Digite aqui">

  <button type="submit">Enviar</button>
</form>


<!--
  $_POST = e uma super variavel do php
  criamos o formulario acima e passamos nele a propriedade name
  no codigo abaixo se o nome existir ele exibe o nome digitado
 -->
<?php


  if ($_POST) {
    echo $_POST['name'];
  }

?>