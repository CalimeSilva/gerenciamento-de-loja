<?php
class compras_Dao
{
  public function inserirDados($compras, $conexao)
  {
    include_once("C:/wamp64/www/login/model/classes/comprasClass.php");
    try {

      $stmt = $conexao->prepare("INSERT INTO compras (cod, data, quantidade, valor, empresa) VALUES (:cod, :data, :quantidade, :valor, :empresa)");

      $stmt->bindValue(":cod", $compras->getCodNome());
      $stmt->bindValue(":data", $compras->getData());
      $stmt->bindValue(":quantidade", $compras->getQuantudade());
      $stmt->bindValue(":valor", $compras->getValor());
      $stmt->bindValue(":empresa", $compras->getEmpresa());

      $stmt->execute();

      return true;
    } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
    }
  }
  public function editar_Compras_info($id, $conexao)
  {
    try {
      $stmt = $conexao->prepare("SELECT * FROM compras WHERE id = '$id'")->fetchAll(PDO::FETCH_OBJ);

      return $stmt;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
  public function editarDados($id, $despesa, $conexao)
  {
    include("C:/wamp64/www/login/model/classes/comprasClass.php");
    try {
      $stmt = $conexao->prepare("UPDATE compras SET cod=?, data=?, quantidade=?, valor=?, empresa=?");

      $stmt->bindValue(1, $compras->getCodNome());
      $stmt->bindValue(2, $compras->getData());
      $stmt->bindValue(3, $compras->getQuantidade());
      $stmt->bindValue(4, $compras->getValor());
      $stmt->bindValue(5, $compras->getEmprego());

      $stmt->execute();
      return true;
    } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
    }
  }

  public function listar($conexao)
  {
    try {
      $stmt = $conexao->query("SELECT * FROM compras ORDER BY data DESC LIMIT 100")->fetchAll(PDO::FETCH_OBJ);
      return $stmt;
    } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
    }
  }
}
