<?php
require_once "conn.php";
include_once("classes/comprasClass.php");
include_once("DAO/comprasDao.php");

$c = new conexao();
$conn = $c->conetado();

if (isset($_POST['nome'], $_POST['data'], $_POST['qnt'], $_POST['valor'], $_POST['empresa'])) {

  $i = new compra();
  $i->setCodNome($_POST['nome']);
  $i->setData($_POST['data']);
  $i->setQuantidade($_POST['qnt']);
  $i->setValor($_POST['valor']);
  $i->setEmpresa($_POST['empresa']);
  $id = $_POST['id'];

  $dao = new compras_Dao();
  $resultado = $dao->editarDados($id, $i, $conn);

  if ($resultado === true) {
    $mesagem = "Compra editada com sucesso!";
  } else {
    $mesagem = "Algo correu mal, se o erro presistir chame o programador-Calime Silva tel: +244 991 296 122";
  }
} else {
  $mesagem = "As informações não estão validadas!";
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Compra</title>
</head>

<body>
  <div class="title">
    <h1>Editar Compra</h1>
  </div>
  <div class="art">
    <img src="../img/isometric_expenses.png" alt="isometric">
  </div>
  <div class="form">
    <div class="confirm">
      <p class="message"><?= $mesagem ?></p>
      <a href="../compras.php"><button class="button_2">Voltar às compras</button></a>

    </div>
  </div>
</body>

</html>