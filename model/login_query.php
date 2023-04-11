<?php
require_once 'conn.php';
$c = new conexao();
$con_ = $c->conetado();
if (isset($_POST['login'])) {
  if ($_POST['user'] == "" || $_POST['password'] == "") {

    echo "<script>alert('Verifique se todos os campos estão corretos')</script>
    <script>window.location='/login/index.php'</script>
    ";
  } elseif ($_POST['user'] != "" || $_POST['password'] != "") {

    $username = $_POST['user'];
    $pass = $_POST['password'];
    $sql = "SELECT * FROM `user` WHERE `user`=? AND `pass`=?";

    $query = $con_->prepare($sql);
    $query->execute(array($username, $pass));
    $row = $query->rowCount();
    $fetch = $query->fetch();

    if ($row > 0) {
      header("location: /login/home.php");
    } else {
      echo "<script>alert('Infelizmente não esta cadastrado na nossa base de dados!')</script>
      <script>window.location='/login/index.php'</script>
      ";
    }
  }
}
