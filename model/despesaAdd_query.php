<?php
require_once "conn.php";
include_once("classes/despesasClass.php");
include_once("DAO/despesaDao.php");

if (isset($_POST['nome'], $_POST['valor'], $_POST['date']) && $_POST['nome'] != "" || $_POST['valor'] != "" || $_POST['date'] != "") {


  $c = new conexao;
  $conn = $c->conetado();

  $e = new despesas();
  $e->setNome($_POST['nome']);
  $e->setValor($_POST['valor']);
  $e->setData($_POST['date']);

  $inserir = new despesa_Dao();
  $resultado = $inserir->inserirDados($e, $conn);

  if ($resultado === true) {
    $mensagem = "Despesa registrada com sucesso!";
  } else {
    $mensagem = "Ocorreu um erro inesperado, Por favor verifique o servidor.";
  }
} else {
  $mensagem = "As informações enviadas não são válidas.";
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
    <a href="../despesas.php" title="Voltar">
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
      <a href="../addDespesas.php"><button class="button_2">Registrar outra despesa</button></a>
    </div>
  </div>
</body>

</html>