<form action="" method="post">

  <input type="text" name="n1" placeholder="digite um numero"> <br/>
  <input type="text" name="n2" placeholder="digite um numero"> <br/> <br/>

    <button name="somar">somar</button> <br/>
    <button name="subtrair">subtrair</button> <br/>
    <button name="multiplicar">multiplicar</button> <br/>
    <button name="dividir">dividir</button> <br/>
    <button name="resto">resto</button>
</form>

<?php
  if(isset($_POST['subtrair'])) {
    echo $_POST['n1'] - $_POST['n2'];
  }elseif(isset($_POST['somar'])) {
    echo $_POST['n1'] + $_POST['n2'];
  }elseif(isset($_POST['multiplicar'])) {
    echo $_POST['n1'] * $_POST['n2'];
  }elseif(isset($_POST['dividir'])) {
    echo $_POST['n1'] / $_POST['n2'];
  }elseif(isset($_POST['resto'])) {
    echo $_POST['n1'] % $_POST['n2'];
  }elseif($_POST['']) {
    echo "insira os numeros";
  }
?>
  