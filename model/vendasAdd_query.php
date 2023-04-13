<?php

include_once("conn.php");
include_once("DAO/vendasDao.php");
include_once("classes/vendasClass.php");

$conn = new conexao();
$c = $conn->conetado();
if (isset($_POST['data'], $_POST['valor'])) {
  $e = new vendas();
  $e->setData($_POST['data']);
  $e->setValor($_POST['valor']);

  $dao = new Vendas_Dao();
  $resultado = $dao->inserir_Dados($e, $c);

  if ($resultado === true) {
    $message = "Dados inseridos na Base de Dados!";
  } else {
    $message = "Erro no envio dos dados da venda, POr favor contacte o Programador!";
  }
} else {
  $message = "Retorne a pagina anterior e verifique se os campos estão totalmente preenchidos!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nova Venda</title>
</head>

<body>
  <div class="voltar">
    <a href="../addVendas.php">Registrar Nova Venda!</a>
  </div>
  <div class="art">
    <img src="../img/isometric_expenses.png" alt="isometric">
  </div>
  <div class="form">
    <div class="confirm">
      <p class="message"><?php echo $message ?></p>
      <a href="../vendas.php"><button class="button_2">Listar Todas as Vendas</button></a>
    </div>
  </div>
</body>

</html>