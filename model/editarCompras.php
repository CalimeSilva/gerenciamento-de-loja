<?php
include_once("conn.php");
include_once("DAO/comprasDao.php");

$id = $_GET['id'];

$c = new conexao();
$conn = $c->conetado();

$b = new compras_Dao();
$stmt = $b->editar_Compras_info($id, $conn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Compras</title>
</head>

<body>
  <div class="voltar"><a href="../despesas.php"><img src="" alt="Voltar"></a></div>
  <div class="hero"><img src="" alt=""></div>
  <div class="form">
    <form action="comprasEdit.php" method="post">
      <?php
      foreach ($stmt as $compras) {
        echo "
          <input type='text' value='", $compras->cod, "'></input>
          <input type='text' value='", $compras->data, "'></input>
          <input type='text' value='", $compras->quantidade, "'></input>
          <input type='text' value='", $compras->valor, "'></input>
          <input type='text' value='", $compras->empresa, "'></input>
          <input type='text' value='", $compras->id, "'></input>
        ";
      }
      ?>
      <input type="submit" value="Confirmar">
    </form>
  </div>
</body>

</html>