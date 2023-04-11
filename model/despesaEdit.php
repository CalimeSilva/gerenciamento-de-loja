<?php
include_once("classes/despesasClass.php");
require_once "conn.php";
include_once("DAO/despesaDao.php");

echo $_POST['id'];
echo "<br>";
echo $_POST['nome'];
echo "<br>";
echo $_POST['valor'];
echo "<br>";
echo $_POST['data'];
echo "<br>";
if (isset($_POST['id'], $_POST['nome'], $_POST['valor'], $_POST['data'])) {

  $id = $_POST['id'];

  $c = new conexao();
  $conn = $c->conetado();

  $e = new despesas();
  $e->setNome($_POST['nome']);
  $e->setValor($_POST['valor']);
  $e->setData($_POST['data']);

  $editar = new despesa_Dao();
  $resultado = $editar->editar_Despesas($id, $e, $conn);

  if ($resultado === true) {
    $message = "Despesa editada com sucesso";
  } else {
    $message = "Ocorreu um erro, atualize a pagina por favor";
  }
} else {
  $message = "As informações enviadas não estão validadas!";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Despesas!</title>
</head>

<body>
  <div class="title">
    <h1>Editar Despesa</h1>
  </div>
  <div class="art">
    <img src="../img/isometric_expenses.png" alt="isometric">
  </div>
  <div class="form">
    <div class="confirm">
      <p class="message"><?= $message ?></p>
      <a href="../despesas.php"><button class="button_2">Voltar às despesas</button></a>
    </div>
  </div>
</body>

</html>