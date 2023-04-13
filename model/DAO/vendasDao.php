<?php
class Vendas_Dao
{
  public function inserir_Dados($vendas, $conexao)
  {
    try {
      include_once("C:/wamp64/www/gerenciamento-de-loja/model/classes/vendasClass.php");
      $stmt = $conexao->prepare("INSERT INTO vendas(data, valor) VALUES (:data, :valor)");
      $stmt->bindValue(":data", $vendas->getData());
      $stmt->bindValue(":valor", $vendas->getValor());

      $stmt->execute();

      return true;
    } catch (PDOException $e) {
      echo $e->getMessage();

      return false;
    }
  }
  public function listar_venda($conexao)
  {
    try {
      $stmt = $conexao->query("SELECT * FROM vendas ORDER BY data DESC LIMIT 100")->fetchAll(PDO::FETCH_OBJ);
      return $stmt;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
  public function editar_info($id, $conexao)
  {
    try {
      $stmt = $conexao->query("SELECT * FROM vendas WHERE id = '$id'")->fetchAll(PDO::FETCH_OBJ);

      return $stmt;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
  public function editar_vendas($id, $vendas, $conexao)
  {
    try {
      include_once("../classes/vendasClass.php");
      $stmt = $conexao->prepare("UPDATE vendas SET data=?, valor=? WHERE id=?");
      $stmt->bindValue(1, $vendas->getData());
      $stmt->bindValue(2, $vendas->getValor());
      $stmt->bindValue(3, $id);

      $stmt->execute();
      return true;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
}
