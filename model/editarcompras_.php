<?php

include_once("conn.php");
include_once("DAO/comprasDao.php");

$id = $_GET['id'];

$c = new conexao();
$conn = $c->conetado();



$b = new compras_Dao();
$stmt = $b->editar_Compras_info_($id, $conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="comprasEdit.php" method="post">
    <?php
    foreach ($stmt as $compra) {
      echo "
        <label>Name:</label>
        <input type='text' name='nome' value='", $compra->cod, "'>

        <label>Data: </label>
        <input type='date' name='data' value='", $compra->data, "'>

        <label>Quantidade: </label>
        <input type='number' name='qnt' value='", $compra->quantidade, "'>

        <label> Valor </label>
        <input type='number' name='valor' value='", $compra->valor, "'>
        
        <label>Empresa</label>
        <input type='text' name='empresa' value='", $compra->empresa, "'>

        <input type='hidden' name='id' value='", $compra->id, "'>
      ";
    }
    ?>
    <input type="submit" value="Confirmar">
  </form>
</body>

</html>