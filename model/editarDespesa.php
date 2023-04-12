<?php

include_once("conn.php");
include_once("DAO/despesaDao.php");

$id = $_GET['id'];

$c = new conexao();
$conn = $c->conetado();

$b = new despesa_Dao();
$stmt = $b->editar_Despesas_info($id, $conn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Despesas</title>
</head>

<body>
  <div class="voltar" title="Voltar">
    <a href="../despesas.php" alt="Voltar">
      <img src="" alt=" voltar"></a>
  </div>
  <div class="hero">
    <img src="" alt="">
  </div>
  <div class="form">
    <form action="despesaEdit.php" method="post">
      <?php
      foreach ($stmt as $despesa) {
        echo "
          <label for='name'>Tipo de despesa:</label>
          <input type='text' name='nome' value='", $despesa->tipoDespesa, "'>

          <label for='valor'>Valor:</label>
          <input type='number' name='valor' step='2' value='", $despesa->valor, "'>

          <label for='date'>Data:</label>
          <input type='date' name='data'  value='", $despesa->data, "'>
          
          <input type='hidden' name='id' value='", $despesa->id, "'>
          ";
      }
      ?>
      <input type="submit" class="botao" value="Confirmar">
    </form>
  </div>
</body>

</html>