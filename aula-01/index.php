<form action="" method="post">
  <input type="text" name="nome" placeholder="Nome"> <br/>
  
  <input type="text" name="cidade" placeholder="Cidade"> <br/>

  <button>Enviar</button> 
</form>

<?php
  if ($_POST) { 
    echo $_POST['nome'], " de " ,$_POST['cidade'];
  } 
?>
