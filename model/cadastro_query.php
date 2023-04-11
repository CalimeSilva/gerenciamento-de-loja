<?php
require_once('conn.php');
$c = new conexao();
$conn = $c->conetado();

if (isset($_POST['registro'])) {
  if ($_POST['username'] == "" || $_POST['password'] == "") {


    echo "<script>alert('Verifique se os campos estão preenchidos!');</script>
    <script>window.location='/login/cadastro.php'</script>
      ";
  } elseif ($_POST['username'] != "" && $_POST['password'] != "") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $inserirDados = $conn->prepare("INSERT INTO `user` VALUES (null,?,?)");
    $inserirDados->execute(array($user, $pass));

    echo "<script>alert('Obrigado pelo cadastro entre por favor!')</script>
      <script> window.location='/login/index.php'</script>
    ";
  }
}
