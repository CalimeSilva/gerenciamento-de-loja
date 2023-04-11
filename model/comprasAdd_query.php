<?php
require_once "conn.php";
include_once("../model/classes/comprasClass.php");
include_once("DAO/comprasDao.php");

if (isset($_POST['cod'], $_POST['data'], $_POST['qnt'], $_POST['valor'], $_POST['valor'], $_POST['empresa']) && $_POST['cod'] != "" && $_POST['data'] != "" && $_POST['qnt'] != "" && $_POST['valor'] != "" && $_POST['empresa'] != "") {
  $c = new conexao;
  $conn = $c->conetado();

  $e = new compras();
  $e->setCodNome($_POST['cod']);
  $e->setData($_POST['data']);
  $e->setQuantidade($_POST['qnt']);
  $e->setValor($_POST['valor']);
  $e->setEmpresa($_POST['empresa']);

  $inserir = new compras_Dao();
  $inserirDados = $inserir->inserirDados($e, $conn);

  if ($inserirDados === true) {
    $mensagem = "Compra registrada!";
  } else {
    $mensagem = "Ocorreu um erro inesperado, Por favor verifiue o servidor!";
  }
} else {
  $mensagem = "As informações enviadas não são validas";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nova Despesa</title>
</head>

<body>
  <div class="return">
    <a href="../compras.php" title="Voltar">
      <img src="../img/return_icon.png" alt="return">
    </a>
  </div>
  <div class="title">
    <h1>Nova Despesa</h1>
  </div>
  <div class="art">
    <img src="../img/isometric_expenses.png" alt="isometric">
  </div>
  <div class="form">
    <div class="confirm">
      <p class="message"><?php echo $mensagem ?></p>
      <a href="../addCompras.php"><button class="button_2">Registrar outra compra</button></a>
    </div>
  </div>
</body>

</html>